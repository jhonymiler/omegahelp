<div class="card">

    <div class="card-header">
        <h3 class="card-title float-left">Lista de Chamdos</h3>
        <!-- Check all button -->
        <div class="btn-group float-right">
            <a type="button" href="{$_pgParams.RAIZ}suporte/protocolos/novo" class="btn btn-block bg-gradient-success ">
                <i class="fas fa-plus"></i>
                Novo
            </a>
        </div>
    </div>
    <!-- ./card-header -->
    <div class="card-body">
        <table id="protocolos-lista" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Assunto</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th></th>

                </tr>
            </thead>
            <tbody>
                {if $listaProtocolos}
                    {foreach from=$listaProtocolos item="pro" name=i}
                        <tr>
                            <td>{$pro.PRO_id}</td>
                            <td>[{$pro.TIP_tipo}] {$pro.PRO_assunto}</td>
                            <td>{$pro.PRO_aberto}</td>
                            <td><span class="badge bg-{$pro.STA_corHtml}">{$pro.STA_status}</span></td>
                            <td>
                                <a href="{$_pgParams.RAIZ}suporte/protocolos/ver/{$pro.PRO_id}"
                                    class="btn btn-primary float-right">
                                    <i class="fa fa-eye"></i> Ver
                                </a>
                            </td>
                        </tr>

                    {/foreach}
                {/if}

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
        $('#protocolos-lista').DataTable({
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
    });
</script>
