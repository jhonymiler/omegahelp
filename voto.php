<?php
require_once 'app/config.php';
require_once 'app/sessao.php';

Sessao::init();

//$v = new Votos;
//$v->criaJson();


class Votos
{
    public $data = array();

    public function criaJson()
    {
        foreach (new DirectoryIterator(RAIZ . "mp3") as $Files) {
            if ($Files->isDir() && $Files->isDot())
                continue;

            $this->data['chat'][$Files->getFilename()] = 0;
            $this->data['chamado'][$Files->getFilename()] = 0;
        }
        $this->save();
    }
    public function save()
    {
        $arquivo = 'data.json';
        $json = json_encode($this->data);
        $file = fopen(RAIZ . $arquivo, 'w');
        fwrite($file, $json);
        fclose($file);
    }

    public function get()
    {
        $json_file = file_get_contents(BASE_URL . "data.json");
        return $this->data = json_decode($json_file, true);
    }
}
if (isset($_POST['voto']) && count($_POST['voto']) > 0 && Sessao::get('votou') == false) {

    $v = new Votos;
    $v->get();
    $v->data['chat'][$_POST['voto']['chat']]++;
    $v->data['chamado'][$_POST['voto']['chamado']]++;
    $v->save();
    Sessao::set('votou', true);
    $v = '';
}


//--------------------Contagem de votos-------------//
$v = new Votos;
$v->get();
$soma = array();
foreach ($v->data as $tipo => $candidato) {
    $soma[$tipo] = 0;
    foreach ($candidato as $qtd) {
        $soma[$tipo] += $qtd;
    }
}



//echo $soma['chat'] . "<br>";
//echo $soma['chamado'] . "<br>";

//-------------------- Gera o HTML ----------------//

$mp3 = array();
$i = 1;
$arquivos = array();
foreach ($v->data['chat'] as $candidato => $qtd) {
    if ($i > 6) {
        $a = 1;
    } else {
        $a = 0;
    }




    if (Sessao::get('votou') == true || isset($_GET['contagem'])) {

        $chat = $v->data['chat'][$candidato] > 0 ? $v->data['chat'][$candidato] * 100 / $soma['chat'] : 0;
        $chamado = $v->data['chamado'][$candidato] > 0 ? $v->data['chamado'][$candidato] * 100 / $soma['chamado'] : 0;


        $arquivos[$a][] = '
        <div class="form-group clearfix">
            <button type="button" class="btnPlayAudio btn btn-default" data-audiourl="' . BASE_URL . 'mp3/' . $candidato . '">
                <i class="fas fa-play"></i>
            </button>

            <div class="maxl">
                <label class="radio">
                    <span> Chat </span>
                    <div class="contagem">
                        <div class="progress progress-xs" title="' . $v->data['chat'][$candidato] . ' Votos">
                            <div class="progress-bar bg-primary progress-bar-striped" role="progressbar"
                                aria-valuenow="' . $chat . '" aria-valuemin="0" aria-valuemax="100" style="width: ' . $chat . '%">
                                <span class="sr-only">' . $v->data['chat'][$candidato] . ' Votos</span>
                            </div>
                        </div>
                    </div> 
                </label>
                <label class="radio">
                    <span>Chamado </span>
                    <div class="contagem">
                        <div class="progress progress-xs" title="' . $v->data['chamado'][$candidato] . ' Votos">
                            <div class="progress-bar bg-success progress-bar-striped" role="progressbar"
                                aria-valuenow="' . $chamado . '" aria-valuemin="0" aria-valuemax="100" style="width: ' . $chamado . '%">
                                <span class="sr-only">' . $v->data['chamado'][$candidato] . ' Votos/span>
                            </div>
                        </div>
                    </div>
                </label>
            </div>
        </div>';
    } else {
        Sessao::set('votou', false);
        $arquivos[$a][] = '
        <div class="form-group clearfix">
            <button type="button" class="btnPlayAudio btn btn-default" data-audiourl="' . BASE_URL . 'mp3/' . $candidato . '">
                <i class="fas fa-play"></i>
            </button>

            <div class="maxl">
                <label class="radio">
                    <input class="voto" tipo="chat" type="radio" name="voto[chat]" value="' . $candidato . '">
                    <span> Chat </span></label>
                <label class="radio">
                    <input class=" voto" tipo="chamado" type="radio" name="voto[chamado]" value="' . $candidato . '">
                    <span>Chamado </span></label>
            </div>
        </div>';
    }



    $i++;
}



?>
<link rel="stylesheet" href="<?php echo BASE_URL; ?>views/painel/plugins/fontawesome-free/css/all.css">

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>
    .contagem {
        float: right;
        min-width: 60%;
        margin-top: 10px;
    }

    .progress-xs {
        height: 7px;
    }

    .btnPlayAudio {
        margin-right: 10px;
        float: left;
        margin-top: 10px;
        margin-left: 10px;
    }

    .btnPlayAudio:hover {
        background-color: #495057;
        color: #e4e4e4;
    }

    .form-group {
        background: -webkit-linear-gradient(left, #e4e4e4, #f9f9f966);
        border-radius: 10px;
        padding: 5px;
    }

    label {
        margin-bottom: 0px;
    }

    .radio {
        display: block;
    }

    .maxl {
        padding-left: 10px;
        float: left;
        min-width: 80%;

    }

    .register {
        background: -webkit-linear-gradient(left, #3931af, #00c6ff);
        height: 100%;
        overflow: hidden;
    }

    .row {
        margin-right: 0px;

    }

    .register-left {
        text-align: center;
        color: #fff;
        margin-top: 10%;
    }


    .register-right {
        background: #f8f9fa;
        border-top-left-radius: 10% 50%;
        border-bottom-left-radius: 10% 50%;
        margin-top: 10px;
    }


    .register-left img {
        margin-top: 15%;
        margin-bottom: 5%;
        width: 25%;
        -webkit-animation: mover 2s infinite alternate;
        animation: mover 1s infinite alternate;
    }

    @-webkit-keyframes mover {
        0% {
            transform: translateY(0);
        }

        100% {
            transform: translateY(-20px);
        }
    }

    @keyframes mover {
        0% {
            transform: translateY(0);
        }

        100% {
            transform: translateY(-20px);
        }
    }

    .register-left p {
        font-weight: lighter;
        padding: 12%;
        margin-top: -9%;
    }

    .register .register-form {
        padding: 10%;
    }

    .btnRegister {
        float: right;
        margin-top: 10%;
        border: none;
        border-radius: 1.5rem;
        padding: 2%;
        background: #0062cc;
        color: #fff;
        font-weight: 600;
        width: 50%;
        cursor: pointer;
    }

    .register .nav-tabs {
        margin-top: 3%;
        border: none;
        background: #0062cc;
        border-radius: 1.5rem;
        width: 28%;
        float: right;
    }

    .register .nav-tabs .nav-link {
        padding: 2%;
        height: 34px;
        font-weight: 600;
        color: #fff;
        border-top-right-radius: 1.5rem;
        border-bottom-right-radius: 1.5rem;
    }

    .register .nav-tabs .nav-link:hover {
        border: none;
    }

    .register .nav-tabs .nav-link.active {
        width: 100px;
        color: #0062cc;
        border: 2px solid #0062cc;
        border-top-left-radius: 1.5rem;
        border-bottom-left-radius: 1.5rem;
    }

    .register-heading {
        text-align: center;
        margin-top: 8%;
        margin-bottom: -15%;
        color: #495057;
    }
</style>
<div class="register">
    <div class="row">
        <div class="col-md-3 register-left">
            <img src="<?php echo BASE_URL ?>views/painel/dist/img/aro-logo-icon.png" alt="" />
            <h3>Votação</h3>
            <p>Por favor, votem em 2 audios, um para novos chamados e outro para mensagens do chat!</p>
        </div>

        <div class="col-md-9 register-right">
            <div class="tab-content" id="myTabContent">
                <form id="voto" method="post" action="voto.php">

                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row register-form">
                            <div class="col-md-6">
                                <?php echo implode("\n", $arquivos[0]); ?>
                            </div>
                            <div class="col-md-6">

                                <?php echo implode("\n", $arquivos[1]); ?>
                                <?php echo Sessao::get('votou') == false ? '<input type="submit" class="btnRegister" value="Votar" />' : '' ?>
                            </div>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>

<script>
    var listaAudios = [];

    $(document).ready(function() {
        //já que você quer fazer o carregamento antecipado de tudo, pode fazer isso quando 
        //a página for carregada. Pode ser ruim fazer isso se forem muitos
        //arquivos e muito grandes.


        $("#voto").submit(function() {
            if (!$('input[tipo=chat]').is(":checked")) {
                alert("Você precisa escolher algum audio para o Chat!");
                return false;
            } else if (!$('input[tipo=chamado]').is(":checked")) {
                alert("Você precisa escolher algum audio para o Chamado!");
                return false;
            } else {
                return true;
            }
        });


        $("input[type=radio]").click(function(e) {
            tipo = $(this).attr('tipo');
            valor = $(this).val();
            comparador = (tipo == 'chat') ? 'chamado' : 'chat';
            compara(comparador, valor);
        });

        function compara(tipo, valor) {
            $('input[tipo=' + tipo + ']').each(function(e) {
                if ($(this).is(":checked") && $(this).val() == valor) {
                    alert('Não vale votar em um audio para as duas categorias!!');
                    $(this).prop('checked', false);
                }
            });

        }

        $('.btnPlayAudio').each(function(e) {
            var url = $(this).attr('data-audiourl');
            var audioPlay = new Audio(url);
            audioPlay.preload = "auto";

            var audioData = {
                'url': $(this).attr('data-audiourl'),
                'audioPlayObj': audioPlay
            };

            listaAudios.push(audioData);
        });
    });

    $('.btnPlayAudio').click(function() {
        var url = $(this).attr('data-audiourl');
        for (var i = 0; i < listaAudios.length; i++) {
            if (listaAudios[i].url == url) {
                var audio = listaAudios[i].audioPlayObj;
                audio.currentTime = 0;
                audio.volume = 1;
                audio.play();
                break;
            }
        }
    });

    function stopAll() {
        for (var i = 0; i < listaAudios.length; i++) {
            listaAudios[i].audioPlayObj.pause();
        }
    }
</script>