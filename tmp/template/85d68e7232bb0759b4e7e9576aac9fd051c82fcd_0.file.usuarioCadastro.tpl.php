<?php
/* Smarty version 3.1.39, created on 2021-07-23 21:45:24
  from 'C:\xampp\htdocs\sistemas\omegahelp\modulos\painel\views\usuarioCadastro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60fb62a42cbc35_12180722',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '85d68e7232bb0759b4e7e9576aac9fd051c82fcd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sistemas\\omegahelp\\modulos\\painel\\views\\usuarioCadastro.tpl',
      1 => 1627087518,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60fb62a42cbc35_12180722 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Media table sample -->
<!-- DataTables  & Plugins -->
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <input type="text" class="form-control" id="busca" placeholder="Buscar na Tabela">
        </div>
    </div>
    <div class="col-md-6 card-header">
        <div class="card-tools">
            <div class="input-group input-group-mm">
                <!-- Check all button -->
                <div class="btn-group">
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#novo-registro">
                        <i class="fas fa-plus"></i>
                        Novo
                    </button>
                </div>
                <div class="btn-group" style="margin-left: 10px;">
                    <button type="button" id="deletarSelecionados" class="btn btn-info">
                        <i class="fas fa-trash"></i>
                        Excluir Selecionados
                    </button>
                </div>
                <!-- /.float-right -->
            </div>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-md-12 card card-primary card-outline">

        <!-- /.card-header -->
        <div class="card-body p-0">
            <div class="table-responsive mailbox-messages">
                <table id="example1" class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th><input id="select-all" type="checkbox"></th>
                            <th>Nome</th>
                            <th>Empresa</th>
                            <th>Chamados</th>
                            <th>Ordens de Serviço</th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>

                        <?php if (is_array($_smarty_tpl->tpl_vars['lista']->value)) {?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lista']->value, 'user_data', false, NULL, 'i', array (
));
$_smarty_tpl->tpl_vars['user_data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['user_data']->value) {
$_smarty_tpl->tpl_vars['user_data']->do_else = false;
?>
                                <tr>
                                    <td>
                                        <div class="icheck-primary">
                                            <input name="selUser" type="checkbox" class="check-table"
                                                value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['USU_id'];?>
" id="user_<?php echo $_smarty_tpl->tpl_vars['user_data']->value['USU_id'];?>
">
                                        </div>
                                    </td>
                                    <td class="mailbox-name row">
                                        <div class="image col-md-3">
                                            <?php if (!empty($_smarty_tpl->tpl_vars['user_data']->value['USU_imagem'])) {?>
                                                <?php $_smarty_tpl->_assignInScope('avatar', ((string)$_smarty_tpl->tpl_vars['_pgParams']->value['RAIZ'])."upload/".((string)$_smarty_tpl->tpl_vars['user_data']->value['USU_imagem']));?>
                                            <?php } else { ?>
                                                <?php $_smarty_tpl->_assignInScope('avatar', ((string)$_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'])."dist/img/avatar.png");?>

                                            <?php }?>
                                            <?php if ($_smarty_tpl->tpl_vars['user_data']->value['USU_nivel'] > 1) {?>
                                                <img width="65" src="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
dist/img/atendente.png"
                                                    class="atendente" alt="Atendente">
                                            <?php }?>
                                            <img width="50" src="<?php echo $_smarty_tpl->tpl_vars['avatar']->value;?>
" class="img-circle elevation-2"
                                                alt="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['USU_nome'];?>
">
                                        </div>
                                        <div class="col-md-9">
                                            <a href="#"><b><?php echo $_smarty_tpl->tpl_vars['user_data']->value['USU_nome'];?>
</b></a>
                                            <p>
                                                <?php echo $_smarty_tpl->tpl_vars['user_data']->value['USU_email'];?>
<br>
                                                Fone: <?php echo $_smarty_tpl->tpl_vars['user_data']->value['USU_tel'];?>

                                            </p>
                                        </div>

                                    </td>
                                    <td class="mailbox-subject"><b><?php echo $_smarty_tpl->tpl_vars['user_data']->value['CLI_id'];?>
</b>
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td class="botao_tabela_edit_exclui">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['RAIZ'];?>
painel/usuarios/editar/<?php echo $_smarty_tpl->tpl_vars['user_data']->value['USU_id'];?>
"
                                            class="btn btn-default">
                                            <i class="fas fa-edit"></i>

                                        </a>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['RAIZ'];?>
painel/usuarios/excluir/<?php echo $_smarty_tpl->tpl_vars['user_data']->value['USU_id'];?>
"
                                            class="btn btn-default">
                                            <i class="fas fa-trash"></i>
                                        </a>


                                    </td>
                                </tr>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php }?>
                    </tbody>
                </table>
            </div>
            <!-- /.mail-box-messages -->
        </div>
    </div>
</div>

</div>

<div class="modal fade" id="novo-registro">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header modal-header-blue">
                <h4 class="modal-title">Cadastro de Usuários</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="cadastro" onsubmit="return enviar();">
                <div class="modal-body">
                    <div class="card-body">
                        <div class="form-group">
                            <div class="row">
                                <div id="drag-and-drop-zone" class="col-3">
                                    <label id="imagem-avatar" for='up_img'>
                                        <?php if (!empty($_smarty_tpl->tpl_vars['usuario']->value['USU_imagem'])) {?>
                                            <?php $_smarty_tpl->_assignInScope('imagem', ((string)$_smarty_tpl->tpl_vars['_pgParams']->value['RAIZ'])."upload/".((string)$_smarty_tpl->tpl_vars['usuario']->value['USU_imagem']));?>
                                        <?php } else { ?>
                                            <?php $_smarty_tpl->_assignInScope('imagem', ((string)$_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'])."dist/img/avatar.png");?>

                                        <?php }?>

                                        <img src="<?php echo $_smarty_tpl->tpl_vars['imagem']->value;?>
" width="100" id="img-avatar"></label>
                                    <span id="icon-avatar" class="badge">
                                        <i class="fas fa-camera"></i>
                                    </span>
                                    <input type="file" id="up_img" style="display: none;">
                                    <?php if ((isset($_smarty_tpl->tpl_vars['campos']->value))) {?>
                                        <input type="text" name="USU_id" style="display: none;" value="">
                                    <?php }?>
                                </div>
                                <div class="col-9">
                                    <label for="USU_nome">Nome Completo</label>
                                    <input type="text" class="form-control" name="USU_nome" id="USU_nome"
                                        placeholder="Nome Completo" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="USU_tel">Telefone</label>
                            <input type="text" class="form-control" name="USU_tel" id="USU_tel"
                                data-inputmask='"mask": "(99) 99999-9999"' data-mask placeholder="(99) 99999-9999"
                                required>
                        </div>
                        <div class="form-group">
                            <label>Empresa</label>
                            <select name="CLI_id" class="form-control required">
                                <option value="">Selecione uma emrpesa</option>
                                <option value="1">option 2</option>
                                <option value="1">option 2</option>
                                <option value="1">option 2</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-switch">
                                <input type="checkbox" name="USU_nivel" class="custom-control-input" id="USU_nivel"
                                    value="1">
                                <label class="custom-control-label" for="USU_nivel">É Atendente?</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="USU_email">Email</label>
                            <input type="email" class="form-control" name="USU_email" id="USU_email"
                                placeholder="email@site.com.br" required>
                        </div>
                        <?php if ((isset($_smarty_tpl->tpl_vars['campos']->value))) {?>
                            <div class="form-group">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="alt_senha" value="0">
                                    <label class="custom-control-label" for="alt_senha">Alterar senha?</label>
                                </div>
                            </div>
                            <div id="mostra-campo-senha">
                            <?php }?>
                            <div class="form-group">
                                <label for="senha">Senha</label>
                                <input type="password" name="USU_senha" class="form-control" id="senha"
                                    placeholder="Senha">
                            </div>
                            <div class="form-group">
                                <label for="confirma_senha">Confirma senha</label>
                                <input type="password" class="form-control" name="confirma_senha" id="confirma_senha">
                            </div>
                            <?php if ((isset($_smarty_tpl->tpl_vars['campos']->value))) {?>
                        </div><?php }?>
                        <div id="meti_o_loko"></div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
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


<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
plugins/datatables/jquery.dataTables.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
plugins/datatables-responsive/js/dataTables.responsive.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
plugins/datatables-responsive/js/responsive.bootstrap4.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
plugins/datatables-buttons/js/dataTables.buttons.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
plugins/datatables-buttons/js/buttons.bootstrap4.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
plugins/jszip/jszip.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
plugins/pdfmake/pdfmake.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
plugins/pdfmake/vfs_fonts.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
plugins/datatables-buttons/js/buttons.html5.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
plugins/datatables-buttons/js/buttons.print.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
plugins/datatables-buttons/js/buttons.colVis.min.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
dist/js/jquery.dm-uploader.min.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
dist/js/cropper.js"><?php echo '</script'; ?>
>


<?php echo '<script'; ?>
>
    var local = '<?php echo $_smarty_tpl->tpl_vars['FormAction']->value;?>
';
    var redir = '<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['RAIZ'];?>
painel/usuarios';
    var delAll = '<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['RAIZ'];?>
painel/usuarios/excluir';
    
        function enviar() {
            $.ajax({
                type: 'POST',
                url: local,
                data: $("#cadastro").serialize(),
                processData: false,
                cache: false,
                beforeSend: function() {
                    $preloader = $('.preloader')
                    if ($preloader) {
                        $preloader.attr('style', 'height:100%');
                        $preloader.children().show();
                    }
                },
                success: function(data) {
                    window.location.href = redir;
                }
            });
            return false;
        };
        $(function() {

            $("input[type='checkbox']").each(function() {
                if ($(this).val() > 0) {
                    $(this).prop('checked', true);
                } else {
                    $(this).removeAttr('checked');
                }
            });
            $("#deletarSelecionados").click(function() {
                var ids = [];
                $('.check-table').each(function() {
                    if ($(this).is(":checked")) {
                        ids.push($(this).val());
                    }
                });
                $.ajax({
                    type: 'POST',
                    url: delAll,
                    data: {selUser:ids.join()},
                    beforeSend: function() {
                        $preloader = $('.preloader')
                        if ($preloader) {
                            $preloader.attr('style', 'height:100%');
                            $preloader.children().show();
                        }
                    },
                    success: function(data) {
                        window.location.href = redir;
                    }
                });
                return false;
            });


            var table = $("#example1").DataTable({
                "language": pt_br,
                "responsive": false,
                "lengthChange": false,
                "autoWidth": false,
                "searching": true,
                "paging": true,
                "ordering": true,
                "rowReorder": true,
                "columnDefs": [
                    { orderable: false, className: 'reorder', targets: [0, -1] },
                    { orderable: true, targets: '_all' }
                ]


            })
            $("#example1_filter").hide();
            $('#busca').on('keyup', function() {
                table.search(this.value).draw();
            });

            $("#select-all").click(function() {
                $('.check-table').prop('checked', this.checked);
            });
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

        $(document).ready(function() {




            <?php if ((isset($_smarty_tpl->tpl_vars['campos']->value))) {?>
                $("#mostra-campo-senha").hide();
                $("#senha").prop("disabled", true);
                $("#novo-registro").modal('toggle');
                $("#alt_senha").change(function() {
                    if ($(this).is(":checked")) {
                        $("#mostra-campo-senha").show();
                        $("#senha").prop("disabled", false);
                        $("#confirma_senha").prop("disabled", false);
                        $('#cadastro').validate({
                            rules: {
                                USU_senha: {
                                    required: true,
                                    minlength: 5
                                },
                                confirma_senha: {
                                    required: true,
                                    minlength: 5,
                                    equalTo: "#senha"
                                },
                                USU_empresa: {
                                    required: true
                                }
                            }
                        });

                    } else {
                        $("#mostra-campo-senha").hide();
                        $("#senha").prop("disabled", true);
                        $("#confirma_senha").prop("disabled", true);

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
                                },
                                USU_empresa: {
                                    required: false
                                }
                            }
                        });

                    }
                });
            <?php } else { ?>
                $('#cadastro').validate({
                    rules: {
                        USU_senha: {
                            required: true,
                            minlength: 5
                        },
                        confirma_senha: {
                            required: true,
                            minlength: 5,
                            equalTo: "#senha"
                        },
                        USU_empresa: {
                            required: true
                        }
                    }
                });
            <?php }?>
        });
    <?php echo '</script'; ?>
>

    <!-- /.col -->


    <!-- /.card -->
<?php }
}
