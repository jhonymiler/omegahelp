{if is_array($protocolo)}
    <div class="col-md-8">
        <div class="card card-primary">
            <div class="card-header">
                <div class="user-block">
                    <h5>Nº #{$protocolo.PRO_id}</h5>
                </div>

                <!-- /.user-block -->
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" title="Mark as read">
                        <i class="far fa-circle"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <!-- /.card-tools -->
            </div>
            <div class="mailbox-read-info">
                <h3><b>{$protocolo.PRO_assunto}</b>
                    <span class="badge bg-{$protocolo.STA_corHtml}  float-right">{$protocolo.STA_status}</span>
                </h3>
                <h6>Depto: <b>{$protocolo.TIP_tipo}</b>
                    <span class="mailbox-read-time float-right">{$protocolo.PRO_aberto}</span>
                </h6>
            </div>
            <div class="card-body">

                {$protocolo.PRO_texto}

                <div><span class="float-right text-muted">{$respostaQtd|default:"0"} Respostas</span></div>

            </div>

            <!-- .Respostas -->
            <div class="card-footer card-comments">
                {if isset($respostas) && is_array($respostas)}
                    {foreach from=$respostas item="res"}
                        <div class="card-comment">
                            <!-- User image -->
                            <img class="img-circle img-sm" src="{$_pgParams.RAIZ}upload/{$res.USU_imagem}" alt="{$res.USU_nome}">

                            <div class="comment-text">
                                <span class="username">
                                    <span class="text-muted float-right">{$res.RES_data}</span>
                                </span><!-- /.username -->
                                {$res.RES_texto}
                                {if isset($res.anexos) && is_array($res.anexos)}

                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <ul class="mailbox-attachments row">

                                            {foreach from=$res.anexos item="aneRes"}
                                                <li class="col-md-2">
                                                    {if isset($aneRes.icone)}
                                                        <a href="{$_pgParams.RAIZ}upload/{$aneRes.ANE_arquivo}"
                                                            class="btn btn-default btn-block" target="_blank">
                                                            <span class="mailbox-attachment-icon"><i class="far {$aneRes.icone}"></i></span>
                                                        </a>
                                                    {elseif isset($aneRes.imagem) }
                                                        <a href="{$_pgParams.RAIZ}upload/{$aneRes.ANE_arquivo}"
                                                            class="btn btn-default btn-block clearfix" data-lightbox="roadtrip"><img
                                                                src="{$_pgParams.RAIZ}upload/{$aneRes.ANE_arquivo}" width="100%"></a>
                                                    {/if}
                                                </li>
                                            {/foreach}

                                        </ul>
                                    </div>
                                    <!-- /.card-body -->
                                {/if}
                            </div>
                            <!-- /.comment-text -->
                        </div>
                    {/foreach}
                {/if}
            </div>
            <!-- /.Respostas -->

        </div>


        <!-- .Post Resposta -->
        <div class="card-footer">
            <form id="responder" action="{$_pgParams.RAIZ}suporte/protocolos/resposta" method="post"
                enctype="multipart/form-data">
                <input name="PRO_id" type="hidden" value="{$protocolo.PRO_id}">
                <input name="acao" type="hidden" value="1">

                <div class="form-group">
                    <textarea rows="5" id="RES_texto" class="form-control" name="RES_texto"></textarea>
                </div>

                <div class="form-group">
                    <div class="file-loading">
                        <input id="file-pt-BR" name="files[]" type="file" multiple>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="form-group">
                    <button type="submit" class="btn btn-primary float-right">Enviar</button>
                </div>

            </form>
        </div>
        <!-- /.Post Resposta -->
    </div>
    <div class="col-md-4">
        <div class="card card-outline card-warning direct-chat direct-chat-warning dark-mode collapsed-card">
            <div class="card-header">
                <h3 class="card-title"><b>Histórico do Chat</b></h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" style="margin: 0;">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">

                <div id="ChatMensagens" class="direct-chat-messages">

                    <div class="msg">
                        <div class="direct-chat-msg left">
                            <div class="direct-chat-infos clearfix"><span
                                    class="direct-chat-name float-left">Suporte</span><span
                                    class="direct-chat-timestamp float-right">01/08/2021 19:37:47Hs</span></div>
                            <img class="direct-chat-img" src="{$_pgParams.RAIZ}views/painel/dist/img/aro-logo.png"
                                alt="Suporte">
                            <div class="direct-chat-text">Olá, breve irei lhe atender. Por favor aguarde um
                                momento.</div>
                        </div>
                        <div class="direct-chat-msg right">
                            <div class="direct-chat-infos clearfix"><span
                                    class="direct-chat-name float-left">Suporte</span><span
                                    class="direct-chat-timestamp float-right">01/08/2021 19:37:47Hs</span></div>
                            <img class="direct-chat-img" src="{$imagem}">
                            <div class="direct-chat-text">Olá, breve irei lhe atender. Por favor aguarde um
                                momento.</div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        {if isset($anexos) && is_array($anexos)}
            <!-- .Anexos -->
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title"><b><i class="fas fa-paperclip"></i> Anexos</b></h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" style="margin: 0;">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                    <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <ul class="mailbox-attachments d-flex align-items-stretch clearfix row">

                        {foreach from=$anexos item="arq"}
                            <li class="col-md-4 clearfix">
                                {if isset($arq.icone)}
                                    <a href="{$_pgParams.RAIZ}upload/{$arq.ANE_arquivo}" class="btn btn-default btn-block"
                                        target="_blank">
                                        <span class="mailbox-attachment-icon"><i class="far {$arq.icone}"></i></span>
                                    </a>
                                {elseif isset($arq.imagem) }
                                    <a href="{$_pgParams.RAIZ}upload/{$arq.ANE_arquivo}" data-lightbox="roadtrip"
                                        class="btn btn-default btn-block"><img src="{$_pgParams.RAIZ}upload/{$arq.ANE_arquivo}"
                                            width="100%"></a>
                                {/if}
                            </li>
                        {/foreach}
                    </ul>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.Anexos -->
        {/if}
    </div>
{/if}


<script src="{$_pgParams.path_layout}plugins/lightbox/js/lightbox.js"></script>
<script src="{$_pgParams.path_layout}plugins/inputfile/js/fileinput.js" type="text/javascript"></script>
<script src="{$_pgParams.path_layout}plugins/inputfile/js/pt-BR.js" type="text/javascript"></script>
<script src="{$_pgParams.path_layout}plugins/ckeditor/build/ckeditor.js"></script>

<script src="{$_pgParams.path_layout}plugins/inputfile/js/theme.js" type="text/javascript"></script>
<script>
    $("#responder").submit(function() {
        return validacao();
    });

    $(document).ready(function() {
        $('#file-pt-BR').fileinput({
            theme: 'fas',
            language: 'pt-BR',
            browseOnZoneClick: true,
            showRemove: false,
            showUpload: false,
            allowedFileExtensions: ['jpg', 'jpeg', 'png', 'gif', 'xls', 'xlsx', 'doc', 'docx', 'pdf',
                'xml', 'zip', 'rar'
            ],
            previewFileIconSettings: {
                'doc': '<i class="fa fa-file-word text-primary"></i>',
                'docx': '<i class="fa fa-file-word text-primary"></i>',
                'xls': '<i class="fa fa-file-excel text-success"></i>',
                'xlsx': '<i class="fa fa-file-excel text-success"></i>',
                'pdf': '<i class="fa file-pdf text-danger"></i>',
                'xml': '<i class="fa file-xml text-success"></i>',
                'zip': '<i class="fa fa-file-archive text-muted"></i>',
                'rar': '<i class="fa fa-file-archive text-muted"></i>'
            },
            slugCallback: function(filename) {
                return filename.replace('(', '_').replace(']', '_');
            }
        });
        $('body').on('paste', function(eventObj) {
            $('#file-pt-BR').fileinput('paste',
                eventObj); // copies files or images data in clipboard
        });
    });

    ClassicEditor
        .create(document.querySelector('#RES_texto'), {
            toolbar: {
                items: [
                    'heading',
                    '|',
                    'bold',
                    'italic',
                    'link',
                    'bulletedList',
                    'numberedList',
                    '|',
                    'outdent',
                    'indent',
                    '|'
                ]
            },
            language: 'pt-br',
            image: {
                toolbar: [
                    'imageTextAlternative',
                    'imageStyle:inline',
                    'imageStyle:block',
                    'imageStyle:side'
                ]
            },
            table: {
                contentToolbar: [
                    'tableColumn',
                    'tableRow',
                    'mergeTableCells'
                ]
            },
            licenseKey: '',
        })
        .then(editor => {
            window.editor = editor;
        })
        .catch(error => {
            console.error('Oops, something went wrong!');
            console.error(
                'Please, report the following error on https://github.com/ckeditor/ckeditor5/issues with the build id and the error stack trace:'
            );
            console.warn('Build id: 8gu4f69zasvi-1abbksipscam');
            console.error(error);
        });



    function validacao() {
        var valid = true;
        var msg = '';


        if (editor.getData() == '') {
            valid = false;

            $(".ck-editor").attr('style', 'border:1px solid red;');
        } else {
            $(".ck-editor").removeAttr('style');
        }

        if (valid == false) {
            $(document).Toasts('create', {
                toast: true,
                delay: 5000,
                class: 'bg-danger',
                position: 'topRight',
                autohide: true,
                fade: true,
                title: 'Erro!',
                body: 'Os campos em vermelho são obrigatórios. Por favor preencha-os.'
            });
        }

        return valid;


    }
</script>
