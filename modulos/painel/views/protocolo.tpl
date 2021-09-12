{if is_array($protocolo)}
    <div class="row">
        <div class="col-md-12">



            <div class="card card-primary card-tabs">

                <nav class="navbar navbar-expand navbar-primary navbar-dark">
                    <div class="user-block">
                        <h5>Nº #{$protocolo.PRO_id}</h5>
                    </div>
                    <!-- Right navbar links -->
                    <ul class="nav navbar-nav ml-auto" id="custom-tabs-one-tab" role="tablist">
                        <li class="nav-item ">
                            <a class="nav-link active" title="Ver Chamado" id="chamado-tab" data-toggle="pill"
                                href="#chamado" role="tab" aria-controls="chamado" aria-selected="true"><i
                                    class="fas fa-pray"></i>
                                <!--<i class="fas fa-bullhorn"></i>-->
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="historico-chat-tab" title="Histórico do Chat" data-toggle="pill"
                                href="#historico-chat" role="tab" aria-controls="historico-chat" aria-selected="false"><i
                                    class="fas fa-comments"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="responder-tab" title="Responder Chamado" data-toggle="pill"
                                href="#responder" role="tab" aria-controls="responder" aria-selected="false"><i
                                    class="fas fa-reply"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" title="Atribuir chamado para especialista" id="custom-tabs-one-settings-tab"
                                data-toggle="pill" href="#custom-tabs-one-settings" role="tab"
                                aria-controls="custom-tabs-one-settings" aria-selected="false"><i class="fas fa-share"><i
                                        class="fas fa-user-plus"></i></i></a>
                        </li>

                    </ul>
                    <div class="card-tools float-right">
                        <button type="button" class="btn btn-tool" title="Marcar como Lido" style="color:#FFF">
                            <i class="far fa-circle"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" style="color:#FFF">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" style="color:#FFF">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </nav>
                <div class="card-body">
                    <div class="tab-content" id="custom-tabs-one-tabContent">
                        <div class="tab-pane fade show active" id="chamado" role="tabpanel" aria-labelledby="chamado-tab">
                            <div class="mailbox-read-info">
                                <h3><b>{$protocolo.PRO_assunto}</b>
                                    <span
                                        class="badge bg-{$protocolo.STA_corHtml}  float-right">{$protocolo.STA_status}</span>
                                </h3>
                                <h6>Depto: <b>{$protocolo.TIP_tipo}</b>
                                    <span class="mailbox-read-time float-right">{$protocolo.PRO_aberto}</span>
                                </h6>
                            </div>
                            <div class="card-body">

                                {$protocolo.PRO_texto}

                                <div><span class="float-right text-muted">{$respostaQtd|default:"0"} Respostas</span></div>

                            </div>
                            <!-- /.card-header -->
                            {if isset($anexos) && is_array($anexos)}

                                <div class="card-body">
                                    <ul class="mailbox-attachments d-flex align-items-stretch clearfix row">

                                        {foreach from=$anexos item="arq"}
                                            <li class="col-md-2 clearfix">
                                                {if isset($arq.icone)}
                                                    <a href="{$_pgParams.RAIZ}upload/{$arq.ANE_arquivo}"
                                                        class="btn btn-default btn-block" target="_blank">
                                                        <span class="mailbox-attachment-icon"><i class="far {$arq.icone}"></i></span>
                                                    </a>
                                                {elseif isset($arq.imagem) }
                                                    <a href="{$_pgParams.RAIZ}upload/{$arq.ANE_arquivo}" data-lightbox="roadtrip"
                                                        class="btn btn-default btn-block"><img
                                                            src="{$_pgParams.RAIZ}upload/{$arq.ANE_arquivo}" width="100%"></a>
                                                {/if}
                                            </li>
                                        {/foreach}
                                    </ul>
                                </div>
                            {/if}
                            <!-- /.card-body -->
                            <!-- .Respostas -->
                            <div class="card-footer card-comments">
                                {if isset($respostas) && is_array($respostas)}
                                    {foreach from=$respostas item="res"}
                                        <div class="card-comment">
                                            <!-- User image -->
                                            <img class="img-circle img-sm" src="{$_pgParams.RAIZ}upload/{$res.USU_imagem}"
                                                alt="{$res.USU_nome}">

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
                                                                            <span class="mailbox-attachment-icon"><i
                                                                                    class="far {$aneRes.icone}"></i></span>
                                                                        </a>
                                                                    {elseif isset($aneRes.imagem) }
                                                                        <a href="{$_pgParams.RAIZ}upload/{$aneRes.ANE_arquivo}"
                                                                            class="btn btn-default btn-block clearfix"
                                                                            data-lightbox="roadtrip"><img
                                                                                src="{$_pgParams.RAIZ}upload/{$aneRes.ANE_arquivo}"
                                                                                width="100%"></a>
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
                        <div class="tab-pane fade" id="historico-chat" role="tabpanel" aria-labelledby="historico-chat-tab">
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
                        <div class="tab-pane fade" id="responder" role="tabpanel" aria-labelledby="responder-tab">
                            <h3>Responder Chamado:</h3>
                            <div class="mailbox-read-info">

                                <h5><b>{$protocolo.PRO_assunto}</b>
                                    <span
                                        class="badge bg-{$protocolo.STA_corHtml}  float-right">{$protocolo.STA_status}</span>
                                </h5>
                                <h6>Depto: <b>{$protocolo.TIP_tipo}</b>
                                    <span class="mailbox-read-time float-right">{$protocolo.PRO_aberto}</span>
                                </h6>
                            </div>

                            <!-- .Post Resposta -->
                            <div class="card-footer">
                                <form id="responder" action="{$_pgParams.RAIZ}suporte/protocolos/resposta" method="post"
                                    enctype="multipart/form-data">
                                    <input name="PRO_id" type="hidden" value="{$protocolo.PRO_id}">

                                    <div class="form-group">
                                        <textarea rows="5" id="RES_texto" class="form-control" name="RES_texto"></textarea>
                                    </div>
                                    <!-- /.card-body -->
                                    <div class="form-group">
                                        <div class="file-loading">
                                            <input id="file-pt-BR" name="files[]" type="file" multiple>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary float-right">Enviar</button>
                                    </div>

                                </form>
                            </div>
                            <!-- /.Post Resposta -->
                        </div>
                        <div class="tab-pane fade" id="custom-tabs-one-settings" role="tabpanel"
                            aria-labelledby="custom-tabs-one-settings-tab">
                            Pellentesque vestibulum commodo nibh nec blandit. Maecenas neque magna, iaculis tempus turpis
                            ac, ornare sodales tellus. Mauris eget blandit dolor. Quisque tincidunt venenatis vulputate.
                            Morbi euismod molestie tristique. Vestibulum consectetur dolor a vestibulum pharetra. Donec
                            interdum placerat urna nec pharetra. Etiam eget dapibus orci, eget aliquet urna. Nunc at
                            consequat diam. Nunc et felis ut nisl commodo dignissim. In hac habitasse platea dictumst.
                            Praesent imperdiet accumsan ex sit amet facilisis.
                        </div>
                    </div>
                </div>
            </div>




        </div>

    </div>

    <link rel="stylesheet" type="text/css" href="{$_pgParams.path_layout}plugins/ckeditor/examples/styles.css">

    <link rel="stylesheet" href="{$_pgParams.path_layout}dist/css/cropper.css">
    <link href="{$_pgParams.path_layout}plugins/inputfile/css/fileinput.css" media="all" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{$_pgParams.path_layout}plugins/lightbox/css/lightbox.css">
    <link rel="stylesheet" href="{$_pgParams.path_layout}dist/custom-icon/icons-svg.css">

    <link rel="stylesheet" href="{$_pgParams.path_layout}dist/css/custom.css">

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

        window.onload = function() {
            $("#chamado-tab").addClass('active');
        };

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
{/if}
