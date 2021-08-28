{if is_array($protocolo)}
    <div class="card card-widget">
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

            <span class="float-right text-muted">2 comments</span>
        </div>
        <div class="card-footer bg-white">
            <ul class="mailbox-attachments d-flex align-items-stretch clearfix">
                {if isset($anexos) && is_array($anexos)}
                    {foreach from=$anexos item="arq"}
                        <li>
                            {if isset($arq.extensao)}
                                <span class="mailbox-attachment-icon"><i class="far fa-file-{$arq.extensao}"></i></span>
                            {elseif isset($arq.imagem) }
                                <a href="{$_pgParams.RAIZ}/upload/{$arq.ANE_arquivo}" data-lightbox="roadtrip"><img
                                        src="{$_pgParams.RAIZ}upload/{$arq.ANE_arquivo}" width="100%"></a>
                            {/if}
                            <div class="mailbox-attachment-info">
                                <span title="{$arq.ANE_arquivo}" class="mailbox-attachment-name">
                                    <i class="fas fa-paperclip"></i> {$arq.nomecortado}
                                </span>
                                <span class="mailbox-attachment-size clearfix mt-1">
                                    <a href="{$_pgParams.RAIZ}download/{$arq.ANE_arquivo}"
                                        class="btn btn-default btn-sm float-right"><i class="fas fa-cloud-download-alt"></i></a>
                                </span>
                            </div>
                        </li>
                    {/foreach}
                {/if}
            </ul>
        </div>
        <div class="card-footer card-comments">
            <div class="card-comment">
                <!-- User image -->
                <img class="img-circle img-sm" src="../dist/img/user3-128x128.jpg" alt="User Image">

                <div class="comment-text">
                    <span class="username">
                        Teste
                        <span class="text-muted float-right">8:03 PM Today</span>
                    </span><!-- /.username -->
                    It is a long established fact that a reader will be distracted
                    by the readable content of a page when looking at its layout.
                </div>
                <!-- /.comment-text -->
            </div>

        </div>
        <!-- /.card-footer -->
        <div class="card-footer">
            <form action="#" method="post">
                <div class="img-push">
                    <input type="text" class="form-control form-control-sm" placeholder="Press enter to post comment">
                </div>
            </form>
        </div>
        <!-- /.card-footer -->
    </div>
{/if}

<script src="{$_pgParams.path_layout}plugins/lightbox/js/lightbox.js"></script>
