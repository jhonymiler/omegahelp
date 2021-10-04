<?php
/* Smarty version 3.1.39, created on 2021-09-25 17:21:55
  from 'C:\xampp\htdocs\modulos\painel\views\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_614f84e36b5733_96625867',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '01c876e237fe750a863f24d3d07ae85173c6078a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\modulos\\painel\\views\\index.tpl',
      1 => 1632600993,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_614f84e36b5733_96625867 (Smarty_Internal_Template $_smarty_tpl) {
?>        <!-- =========================================================== -->
        <style>
            #header-grafico button {
                margin: 0 5px;
            }

            .monaco-editor {
                padding-top: 10px;
            }
        </style>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div id="header-grafico" class="card-header">
                        <select class="form-control float-left col-md-4" id="consultas" style="font-weight: 600;">
                            <option value="">Escolha uma Consulta</option>
                            <?php if (is_array($_smarty_tpl->tpl_vars['consultas']->value)) {?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['consultas']->value, 'con');
$_smarty_tpl->tpl_vars['con']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['con']->value) {
$_smarty_tpl->tpl_vars['con']->do_else = false;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['con']->value['CON_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['con']->value['CON_titulo'];?>
</option>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <?php }?>
                        </select>


                        <button type="button" class="float-right btn btn-danger float-left " data-toggle="modal"
                            data-target="#modal-sm"> <i class="fas fa-trash"></i>
                        </button>
                        <button type="button" id="botao-edit" class="float-right btn btn-info float-left ">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button type="button" id="botao-add" class="float-right btn btn-success float-left ">
                            <i class="fas fa-plus"></i>
                        </button>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="chart">
                                    <!-- Sales Chart Canvas -->
                                    <div id="grafico" style="min-height: 400px;width:100%"></div>
                                </div>
                                <!-- /.chart-responsive -->
                            </div>

                        </div>
                        <!-- /.row -->
                    </div>

                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
        <div id="janela_modal"></div>

        <div class="modal fade" id="modal-sm">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">
                            <?php if ((isset($_smarty_tpl->tpl_vars['consulta_personalizada']->value['CON_titulo']))) {
echo $_smarty_tpl->tpl_vars['consulta_personalizada']->value['CON_titulo'];
}?></h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h5 style="text-align: center;">Deseja mesmo excluir a consulta?</h5>

                        <p><b id='ex-consulta'></b></p>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button id="botao-delete" type="button" class="btn btn-danger">Sim</button>
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Não</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>

        <!-- PAGE PLUGINS -->
        <!-- jQuery Mapael -->
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
dist/js/canvasjs.stock.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
dist/js/canvasjs.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
plugins/jquery-mousewheel/jquery.mousewheel.js"><?php echo '</script'; ?>
>



        <?php echo '<script'; ?>
 type="text/javascript">
            $(function() {

                var opcoes = {
                    decimalSeparator: ",",
                    digitGroupSeparator: ".",
                    days: ["Domingo", "Segunda", "Terça", "Quarta", "Quinta", "Sexta", "Sábado"],
                    resetText: 'Resete',
                    savePNGText: 'Salvar PNG',
                    saveJPGText: 'Salvar JPG',
                    printText: 'Imprimir',
                    menuText: 'Mais Opções',
                    shortDays: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sab'],
                    months: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho',
                        'Agosto',
                        'Setembro', 'Outubro', 'Novembro', 'Dezembro'
                    ],
                    shortMonths: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out',
                        'Nov',
                        'Dez'
                    ],
                    rangeSelector: {
                        fromText: "De",
                        toText: "A",
                        rangeText: "Periodo"
                    }
                };


                var d = [{
                    x: new Date('19/09/2021'),
                    y: Number(25)
                }];
                var dados = []; // variavel a ser usada com os dados tratados

                var consulta_personalizada = <?php if ((isset($_smarty_tpl->tpl_vars['consulta_personalizada']->value['dados']))) {
echo $_smarty_tpl->tpl_vars['consulta_personalizada']->value['dados'];
} else { ?>d<?php }?>;

                <?php if ((isset($_smarty_tpl->tpl_vars['consulta_personalizada']->value['CON_javascript']))) {?>
                    <?php echo $_smarty_tpl->tpl_vars['consulta_personalizada']->value['CON_javascript'];?>

                <?php }?>

            });
        <?php echo '</script'; ?>
>


        <?php echo '<script'; ?>
>
            var require = {
                paths: {
                    'vs': '<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
plugins/vs',
                }
            };
        <?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
plugins/vs/loader.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
plugins/toastr/toastr.min.js"><?php echo '</script'; ?>
>

        <?php echo '<script'; ?>
>
            $(document).ready(function() {



                <?php if ((isset($_smarty_tpl->tpl_vars['consulta_personalizada']->value['CON_id']))) {?>    
                    $('#consultas').val("<?php echo $_smarty_tpl->tpl_vars['consulta_personalizada']->value['CON_id'];?>
");
                <?php }?>

                if ($('#consultas').val() == '') {
                    $('#botao-edit').hide();
                } else {
                    $('#botao-edit').show();
                }

                $('#consultas').change(function() {
                    if ($(this).val() == '') {
                        $('#botao-edit').hide();
                    } else {
                        window.location.href = "<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['RAIZ'];?>
painel/dashboard/index/" + $('#consultas').val();
                    }
                });

                $("#botao-delete").click(function() {
                    c = $('#consultas').val()
                    window.location.href = "<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['RAIZ'];?>
painel/dashboard/excluir/" + c;
                });

                $("#botao-edit").click(function() {
                        c = $('#consultas').val()
                        $.get("<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['RAIZ'];?>
painel/dashboard/editor/"+c,
                        function(data) {
                            $("#janela_modal").html(data);
                            loadEditor();
                            $("#modal-xl").modal({
                                show: true
                            });
                        });
                });

            $("#botao-add").click(function() {
                    $.get("<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['RAIZ'];?>
painel/dashboard/editor/", 
                    function(data) {
                        $("#janela_modal").html(data);
                        loadEditor();
                        $("#modal-xl").modal({
                            show: true
                        });
                    });
            });




            });
        <?php echo '</script'; ?>
>
<?php }
}
