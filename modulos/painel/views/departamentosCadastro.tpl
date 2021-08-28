<div class="row">
    <div class="col-md-4">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Cadastro de Clientes</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" id="fecha">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>


            <!-- /.card-header -->
            <!-- form start -->
            <form method="post" action="{$formAction}" id="formcadastro">
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
                                <a href="{$_pgParams.RAIZ}painel/departamentos/novo" type="button"
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
                        <form method="post" action="{$_pgParams.RAIZ}painel/departamentos/excluir" id="deleteAll">

                            <tbody>

                                {if is_array($lista)}
                                    {foreach from=$lista item="departamentos" name=i}
                                        <tr>
                                            <td>
                                                <div class="icheck-primary">
                                                    <input name="selAll[]" type="checkbox" class="check-table"
                                                        value="{$departamentos.DEP_id}">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="col-md-12">
                                                    <a href="#"><b>{$departamentos.DEP_titulo}</b></a>
                                                </div>

                                            </td>
                                            <td>
                                                <p>{$departamentos.DEP_descricao}</p>

                                            </td>
                                            <td class="botao_tabela_edit_exclui">
                                                <a href="{$_pgParams.RAIZ}painel/departamentos/editar/{$departamentos.DEP_id}"
                                                    class="btn btn-default">
                                                    <i class="fas fa-edit"></i>

                                                </a>
                                                <a href="{$_pgParams.RAIZ}painel/departamentos/excluir/{$departamentos.DEP_id}"
                                                    class="btn btn-default">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    {/foreach}
                                {/if}
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


<script>
    $(document).ready(function() {
        {literal}
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
        {/literal}
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
</script>
