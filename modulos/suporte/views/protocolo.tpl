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
            <!-- 
            <div class="attachment-block clearfix">
                <img class="attachment-img" src="../dist/img/photo1.png" alt="Attachment Image">

                <div class="attachment-pushed">
                    <h4 class="attachment-heading"><a href="https://www.lipsum.com/">Lorem ipsum text generator</a>
                    </h4>

                    <div class="attachment-text">
                        Description about the attachment can be placed here.
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry... <a href="#">more</a>
                    </div>
                </div>
            </div>
             -->

            <!-- Social sharing buttons -->
            <span class="float-right text-muted">2 comments</span>
        </div>
        <div class="card-footer bg-white">
            <ul class="mailbox-attachments d-flex align-items-stretch clearfix">
                {if isset($anexos) && is_array($anexos)}
                    <li>
                        <span class="mailbox-attachment-icon"><i class="far fa-file-pdf"></i></span>

                        <div class="mailbox-attachment-info">
                            <a href="#" class="mailbox-attachment-name"><i class="fas fa-paperclip"></i> Sep2014-report.pdf</a>
                            <span class="mailbox-attachment-size clearfix mt-1">
                                <span>1,245 KB</span>
                                <a href="#" class="btn btn-default btn-sm float-right"><i
                                        class="fas fa-cloud-download-alt"></i></a>
                            </span>
                        </div>
                    </li>
                    <li>
                        <span class="mailbox-attachment-icon"><i class="far fa-file-word"></i></span>

                        <div class="mailbox-attachment-info">
                            <a href="#" class="mailbox-attachment-name"><i class="fas fa-paperclip"></i> App
                                Description.docx</a>
                            <span class="mailbox-attachment-size clearfix mt-1">
                                <span>1,245 KB</span>
                                <a href="#" class="btn btn-default btn-sm float-right"><i
                                        class="fas fa-cloud-download-alt"></i></a>
                            </span>
                        </div>
                    </li>
                    <li>
                        <span class="mailbox-attachment-icon has-img"><img src="../../dist/img/photo1.png"
                                alt="Attachment"></span>

                        <div class="mailbox-attachment-info">
                            <a href="#" class="mailbox-attachment-name"><i class="fas fa-camera"></i> photo1.png</a>
                            <span class="mailbox-attachment-size clearfix mt-1">
                                <span>2.67 MB</span>
                                <a href="#" class="btn btn-default btn-sm float-right"><i
                                        class="fas fa-cloud-download-alt"></i></a>
                            </span>
                        </div>
                    </li>
                    <li>
                        <span class="mailbox-attachment-icon has-img"><img src="../../dist/img/photo2.png"
                                alt="Attachment"></span>

                        <div class="mailbox-attachment-info">
                            <a href="#" class="mailbox-attachment-name"><i class="fas fa-camera"></i> photo2.png</a>
                            <span class="mailbox-attachment-size clearfix mt-1">
                                <span>1.9 MB</span>
                                <a href="#" class="btn btn-default btn-sm float-right"><i
                                        class="fas fa-cloud-download-alt"></i></a>
                            </span>
                        </div>
                    </li>
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
            <!-- /.card-comment -->
            <div class="card-comment">
                <!-- User image -->
                <img class="img-circle img-sm" src="../dist/img/user5-128x128.jpg" alt="User Image">

                <div class="comment-text">
                    <span class="username">
                        Nora Havisham
                        <span class="text-muted float-right">8:03 PM Today</span>
                    </span><!-- /.username -->
                    The point of using Lorem Ipsum is that it hrs a morer-less
                    normal distribution of letters, as opposed to using
                    'Content here, content here', making it look like readable English.
                </div>
                <!-- /.comment-text -->
            </div>
            <!-- /.card-comment -->
        </div>
        <!-- /.card-footer -->
        <div class="card-footer">
            <form action="#" method="post">
                <img class="img-fluid img-circle img-sm" src="../dist/img/user4-128x128.jpg" alt="Alt Text">
                <!-- .img-push is used to add margin to elements next to floating images -->
                <div class="img-push">
                    <input type="text" class="form-control form-control-sm" placeholder="Press enter to post comment">
                </div>
            </form>
        </div>
        <!-- /.card-footer -->
    </div>
{/if}
