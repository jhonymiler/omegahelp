<!-- Media table sample -->
<!-- DataTables  & Plugins -->


<style>
    #icon-avatar2 {
        position: absolute;
        padding: 6px;
        background-color: rgb(214, 214, 214) !important;
        right: 50px;
        font-size: 1.5em;
    }
</style>
<div class="col-md-12 card card-primary card-outline">

    <!-- /.card-header -->
    <div class="card-body p-0">
        <form id="cadastro" method="post" onsubmit="return enviar();">
            <div class="modal-body">
                <div class="card-body">
                    <div class="form-group">
                        <div class="row">
                            <div id="drag-and-drop-zone" class="col-md-3">
                                <label id="imagem-avatar" for='up_img'>
                                    {if  !empty($usuario.USU_imagem)}
                                        {assign var="imagem" value="{$_pgParams.RAIZ}upload/{$usuario.USU_imagem}"}
                                    {else}
                                        {assign var="imagem" value="{$_pgParams.path_layout}dist/img/avatar.png"}

                                    {/if}

                                    <img src="{$imagem}" class="img-circle elevation-2" width="200" height="200"
                                        id="img-avatar"></label>
                                <span id="icon-avatar2" class="badge">
                                    <i class="fas fa-camera"></i>
                                </span>
                                <input type="file" id="up_img" style="display: none;">
                                {if isset($campos)}
                                    <input type="text" name="USU_id" style="display: none;" value="">
                                {/if}
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <label for="USU_tel">Nome Completo</label>
                                    <input type="text" class="form-control" name="USU_nome" id="USU_nome" required>
                                </div>
                                <div class="form-group">
                                    <label for="USU_tel">Telefone</label>
                                    <input type="text" class="form-control" name="USU_tel" id="USU_tel"
                                        data-inputmask='"mask": "(99) 99999-9999"' data-mask
                                        placeholder="(99) 99999-9999" required>
                                </div>
                                <div class="form-group">
                                    <label for="USU_email">Email</label>
                                    <input type="email" class="form-control" name="USU_email" id="USU_email"
                                        placeholder="email@site.com.br" required>
                                </div>
                                {if isset($campos)}
                                    <div class="form-group">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" id="alt_senha" value="0">
                                            <label class="custom-control-label" for="alt_senha">Alterar senha?</label>
                                        </div>
                                    </div>
                                    <div id="mostra-campo-senha">
                                    {/if}
                                    <div class="form-group">
                                        <label for="senha">Senha</label>
                                        <input type="password" name="USU_senha" class="form-control" id="senha"
                                            placeholder="Senha">
                                    </div>
                                    <div class="form-group">
                                        <label for="confirma_senha">Confirma senha</label>
                                        <input type="password" class="form-control" name="confirma_senha"
                                            id="confirma_senha">
                                    </div>
                                    {if isset($campos)}
                                </div>{/if}

                            </div>
                        </div>
                    </div>

                    <div id="meti_o_loko"></div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
            </div>
        </form>
        <!-- /.mail-box-messages -->
    </div>
</div>




<div class="modal" id="cropimagem" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
            </div>
            <div class="modal-body">
                <div><img width="480" src="" id="image-crop" />
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" id="cortar" class="btn btn-primary">Cortar</button>
                <button type="button" id="crop-fechar" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>


<script src="{$_pgParams.path_layout}plugins/datatables/jquery.dataTables.js"></script>
<script src="{$_pgParams.path_layout}plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{$_pgParams.path_layout}plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{$_pgParams.path_layout}plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="{$_pgParams.path_layout}plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="{$_pgParams.path_layout}plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="{$_pgParams.path_layout}plugins/jszip/jszip.min.js"></script>
<script src="{$_pgParams.path_layout}plugins/pdfmake/pdfmake.min.js"></script>
<script src="{$_pgParams.path_layout}plugins/pdfmake/vfs_fonts.js"></script>
<script src="{$_pgParams.path_layout}plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="{$_pgParams.path_layout}plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="{$_pgParams.path_layout}plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<script src="{$_pgParams.path_layout}dist/js/jquery.dm-uploader.min.js"></script>

<script src="{$_pgParams.path_layout}dist/js/cropper.js"></script>


<script>
    var local = '{$FormAction}';
    var redir = '{$_pgParams.RAIZ}painel/usuarios';
    var delAll = '{$_pgParams.RAIZ}painel/usuarios/excluir';

    {if isset($campos)}
        $("#mostra-campo-senha").hide();
        $("#alt_senha").change(function() {
            if ($(this).is(":checked")) {
                $("#mostra-campo-senha").show();
                $("#senha").prop("disabled", false);
                $("#confirma_senha").prop("disabled", false);

            } else {
                $("#mostra-campo-senha").hide();
                $("#senha").prop("disabled", true);
                $("#confirma_senha").prop("disabled", true);
            }
        });

    {/if}



    function enviar() {
        $('#cadastro').validate({
            rules: {
                USU_senha: {
                    required: false,
                    minlength: 5
                },
                confirma_senha: {
                    required: false,
                    minlength: 5,
                    equalTo: "#senha"
                }
            }
        });


    };
    $(function() {



        $('[data-mask]').inputmask()



        $('#up_img').dmUploader({ //
            //url: '/usuarios/registro/novo',
            maxFileSize: 3000000, // 3 Megs max
            multiple: false,
            allowedTypes: 'image/*',
            extFilter: ['jpg', 'jpeg', 'png'],
            auto: false,
            queue: true,
            onNewFile: function(id, file) {


                // When a new file is added using the file selector or the DnD area
                if (typeof FileReader !== "undefined") {
                    var reader = new FileReader();
                    reader.onload = function(e) {


                        var img = document.getElementById('img-avatar');
                        var img_crop = document.getElementById('image-crop');
                        var button = document.getElementById('cortar');
                        var croppedCanvas;
                        var roundedCanvas;


                        $(img).attr('src', e.target.result);
                        $(img_crop).attr('src', e.target.result);
                        $('#cropimagem').show();


                        var cropper = new Cropper(img_crop, {
                            aspectRatio: 1,
                            viewMode: 3
                        });

                        button.onclick = function() {

                            croppedCanvas = cropper.getCroppedCanvas();
                            roundedCanvas = getRoundedCanvas(croppedCanvas);
                            Dataimagem = roundedCanvas.toDataURL();
                            $(img).attr('src', Dataimagem);
                            $(img_crop).attr('src', '');


                            document.getElementById("meti_o_loko").innerHTML =
                                '<textarea name="USU_imagem" maxlength="10000000000" cols="10000000000" rows="10000000000" style="display:none;">' +
                                Dataimagem + '</textarea>';
                            $('#cropimagem').hide();
                            cropper.destroy();


                        };


                    };
                    reader.readAsDataURL(file);
                };
            }

        });
    });





    function getRoundedCanvas(sourceCanvas) {
        var canvas = document.createElement('canvas');
        var context = canvas.getContext('2d');
        var width = sourceCanvas.width;
        var height = sourceCanvas.height;

        canvas.width = width;
        canvas.height = height;
        context.imageSmoothingEnabled = true;
        context.drawImage(sourceCanvas, 0, 0, width, height);
        context.globalCompositeOperation = 'destination-in';
        context.beginPath();
        context.arc(width / 2, height / 2, Math.min(width, height) / 2, 0, 2 * Math.PI, true);
        context.fill();
        return canvas;
    }
</script>

<!-- /.col -->


<!-- /.card -->
