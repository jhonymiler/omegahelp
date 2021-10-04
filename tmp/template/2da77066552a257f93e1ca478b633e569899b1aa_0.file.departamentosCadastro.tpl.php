<?php
/* Smarty version 3.1.39, created on 2021-10-03 21:02:47
  from 'C:\xampp\htdocs\sistemas\omegahelp\modulos\painel\views\departamentosCadastro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615a44a718d686_96530025',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2da77066552a257f93e1ca478b633e569899b1aa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sistemas\\omegahelp\\modulos\\painel\\views\\departamentosCadastro.tpl',
      1 => 1633204612,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_615a44a718d686_96530025 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row">
    <div class="col-md-4">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Cadastro de Departamentos</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" id="fecha">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['formAction']->value;?>
" id="formcadastro">
                <div class="card-body">
                    <div class="form-group">
                        <label for="DEP_titulo">Nome do Departamento</label>
                        <input name="DEP_titulo" type="text" class="form-control" id="DEP_titulo" required>
                    </div>
                    <div class="form-group">
                        <label for="DEP_descricao">Descrição do departamento</label>
                        <textarea name="DEP_descricao" type="text" class="form-control" id="DEP_descricao"></textarea>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary float-right">Gravar</button>
                </div>
            </form>
        </div>
        <!-- /.card -->
    </div>

    <div class="col-md-8">
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
                        <div class="btn-group" style="margin-left: 10px;">
                            <div class="btn-group">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['RAIZ'];?>
painel/departamentos/novo" type="button"
                                    class="btn btn-success" id="novo-cadastro">
                                    <i class="fas fa-plus"></i>
                                    Novo
                                </a>
                            </div>
                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-danger">
                                <i class="fas fa-trash"></i>
                                Excluir Selecionados
                            </button>
                        </div>
                        <!-- /.float-right -->
                    </div>
                </div>
            </div>

        </div>
        <div class="card card-primary card-outline">
            <!-- /.card-header -->
            <div class="card-body p-0">
                <div class="table-responsive mailbox-messages">
                    <table id="example1" class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th><input id="select-all" type="checkbox"></th>
                                <th>Departamento</th>
                                <th>Descrição</th>
                                <th></th>
                            </tr>
                        </thead>
                        <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['RAIZ'];?>
painel/departamentos/excluir" id="deleteAll">

                            <tbody>

                                <?php if (is_array($_smarty_tpl->tpl_vars['lista']->value)) {?>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lista']->value, 'departamentos', false, NULL, 'i', array (
));
$_smarty_tpl->tpl_vars['departamentos']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['departamentos']->value) {
$_smarty_tpl->tpl_vars['departamentos']->do_else = false;
?>
                                        <tr>
                                            <td>
                                                <div class="icheck-primary">
                                                    <input name="selAll[]" type="checkbox" class="check-table"
                                                        value="<?php echo $_smarty_tpl->tpl_vars['departamentos']->value['DEP_id'];?>
">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="col-md-12">
                                                    <a href="#"><b><?php echo $_smarty_tpl->tpl_vars['departamentos']->value['DEP_titulo'];?>
</b></a>
                                                </div>

                                            </td>
                                            <td>
                                                <p><?php echo $_smarty_tpl->tpl_vars['departamentos']->value['DEP_descricao'];?>
</p>

                                            </td>
                                            <td class="botao_tabela_edit_exclui">
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['RAIZ'];?>
painel/departamentos/editar/<?php echo $_smarty_tpl->tpl_vars['departamentos']->value['DEP_id'];?>
"
                                                    class="btn btn-default">
                                                    <i class="fas fa-edit"></i>

                                                </a>
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['RAIZ'];?>
painel/departamentos/excluir/<?php echo $_smarty_tpl->tpl_vars['departamentos']->value['DEP_id'];?>
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
                        </form>

                    </table>
                </div>
                <!-- /.mail-box-messages -->
            </div>
        </div>
    </div>

</div>

<!-- /.modal -->

<div class="modal fade" id="modal-danger">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">DELETAR CADASTROS</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h5>Tem certeza que deseja deletar todos os cadastros selecionados?</h5>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-success" id="deletarSelecionados">SIM</button>
                <button type="button" class="btn btn-info" data-dismiss="modal">NÃO</button>

            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

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
>
    $(document).ready(function() {
        
            var table = $("#example1").DataTable({
                "language": pt_br,
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "paging": true,
                "select": true,
                "ordering": true,
                "rowReorder": true,
                "columnDefs": [{
                        orderable: false,
                        className: 'reorder',
                        targets: [0, -1]
                    },
                    {
                        orderable: true,
                        targets: '_all'
                    }
                ]
            });
        
        $("#example1_filter").hide();

        $('#busca').on('keyup', function() {
            table.search(this.value).draw();
        });


        $("#select-all").click(function() {
            $('.check-table').prop('checked', this.checked);
        });


        $("#deletarSelecionados").click(function() {
            $("#deleteAll").submit();
        });

        $('[data-mask]').inputmask();
    });
<?php echo '</script'; ?>
>
<?php }
}
