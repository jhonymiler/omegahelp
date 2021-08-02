<div class="card">

    <div class="card-header">
        <h3 class="card-title float-left">Lista de Chamdos</h3>
        <!-- Check all button -->
        <div class="btn-group float-right">
            <a type="button" href="{$_pgParams.RAIZ}suporte/chamados/novo" class="btn btn-block bg-gradient-success ">
                <i class="fas fa-plus"></i>
                Novo
            </a>
        </div>
    </div>
    <!-- ./card-header -->
    <div class="card-body">
        <table id="chamados-lista" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Departamento</th>
                    <th>Assunto</th>
                    <th>Date</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr data-widget="expandable-table" aria-expanded="false">
                    <td>183</td>
                    <td>Suporte</td>
                    <td>Recebimento</td>
                    <td>25/07/2021 15:35Hs</td>
                    <td><span class="badge bg-success">Respondido</span></td>
                </tr>
                <tr class="expandable-body">
                    <td colspan="5">
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley of type and scrambled it to make a type specimen book. It has survived not only five
                            centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                            passages, and more recently with desktop publishing software like Aldus PageMaker including
                            versions of Lorem Ipsum.
                        </p>
                    </td>
                </tr>
                <tr data-widget="expandable-table" aria-expanded="false">
                    <td>168</td>
                    <td>Dep. Técnico</td>
                    <td>Financeiro</td>
                    <td>15/07/2021 13:28Hs</td>
                    <td><span class="badge bg-danger">Aguardando</span></td>
                </tr>
                <tr class="expandable-body">
                    <td colspan="5">
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley of type and scrambled it to make a type specimen book. It has survived not only five
                            centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                            passages, and more recently with desktop publishing software like Aldus PageMaker including
                            versions of Lorem Ipsum.
                        </p>
                    </td>
                </tr>
                <tr data-widget="expandable-table" aria-expanded="false">
                    <td>183</td>
                    <td>Comercial</td>
                    <td>Faturamento</td>
                    <td>14/07/2021 16:11Hs</td>
                    <td><span class="badge bg-info">Redirecionado</span></td>
                </tr>
                <tr class="expandable-body">
                    <td colspan="5">
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley of type and scrambled it to make a type specimen book. It has survived not only five
                            centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                            passages, and more recently with desktop publishing software like Aldus PageMaker including
                            versions of Lorem Ipsum.
                        </p>
                    </td>
                </tr>
                <tr data-widget="expandable-table" aria-expanded="false">
                    <td>183</td>
                    <td>Suporte</td>
                    <td>Faturamento</td>
                    <td>12/07/2021 09:25Hs</td>
                    <td><span class="badge bg-success">Respondido</span></td>
                </tr>
                <tr class="expandable-body">
                    <td colspan="5">
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley of type and scrambled it to make a type specimen book. It has survived not only five
                            centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                            passages, and more recently with desktop publishing software like Aldus PageMaker including
                            versions of Lorem Ipsum.
                        </p>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
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

<script>
    $(document).ready(function() {
        $('#chamados-lista').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script>
