<div class="row" id='cadastro'>
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Cadastro de Empresas</h3>
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
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="EMP_razao">Razão Social</label>
                                <input name="EMP_razao" type="text" class="form-control" id="EMP_razao" required>
                            </div>
                            <div class="form-group">
                                <label for="EMP_fantasia">Nome Fantasia</label>
                                <input name="EMP_fantasia" type="text" class="form-control" id="EMP_fantasia">
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="EMP_cnpj">CNPJ</label>
                                        <input name="EMP_cnpj" type="text" class="form-control" id="EMP_cnpj"
                                            data-inputmask='"mask": "99.999.999/9999-99"' data-mask required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="EMP_ie">I.E</label>
                                        <input name="EMP_ie" type="text" class="form-control" id="EMP_ie">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="EMP_email">Email address</label>
                                        <input name="EMP_email" type="email" class="form-control" id="EMP_email"
                                            placeholder="email@site.com.br" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="EMP_tel">Telefone</label>
                                        <input name="EMP_tel" type="text" class="form-control" id="EMP_tel"
                                            data-inputmask='"mask": "(99) 9999-9999"' data-mask
                                            placeholder="(99) 9999-9999" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="EMP_cep">CEP</label>
                                        <input name="EMP_cep" type="text" class="form-control" id="EMP_cep"
                                            data-inputmask='"mask": "99999999"' data-maskplaceholder="99999999"
                                            required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="EMP_cidade">Cidade</label>
                                        <input name="EMP_cidade" type="text" class="form-control" id="EMP_cidade"
                                            required>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="EMP_uf">UF</label>
                                        <input name="EMP_uf" type="text" class="form-control" id="EMP_uf" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="EMP_bairro">Bairro</label>
                                        <input name="EMP_bairro" type="text" class="form-control" id="EMP_bairro"
                                            required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="rua">Rua</label>
                                        <input name="rua" type="text" class="form-control" id="rua" required>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="numero">Nº</label>
                                        <input name="numero" type="text" class="form-control" id="numero" required>
                                    </div>
                                </div>
                            </div>

                        </div>
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
</div>
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
                    {if isset($campos)}
                        <a href="{$_pgParams.RAIZ}painel/empresas/?novo" type="button" class="btn btn-success">
                            <i class="fas fa-plus"></i>
                            Novo
                        </a>
                    {else}
                        <button type="button" class="btn btn-success" id="novo-cadastro">
                            <i class="fas fa-plus"></i>
                            Novo
                        </button>
                    {/if}
                </div>
                <div class="btn-group" style="margin-left: 10px;">
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
<!-- /.card-tools -->

<div class="row">
    <div class="col-md-12">

        <div class="card card-primary card-outline">
            <!-- /.card-header -->
            <div class="card-body p-0">
                <div class="table-responsive mailbox-messages">
                    <table id="example1" class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th><input id="select-all" type="checkbox"></th>
                                <th>Nome Fantasia</th>
                                <th>CNPJ</th>
                                <th>Email</th>
                                <th>Telefone</th>
                                <th></th>
                            </tr>
                        </thead>
                        <form method="post" action="{$_pgParams.RAIZ}painel/empresas/excluir" id="deleteAll">

                            <tbody>

                                {if is_array($lista)}
                                    {foreach from=$lista item="empresas" name=i}
                                        <tr>
                                            <td>
                                                <div class="icheck-primary">
                                                    <input name="selAll[]" type="checkbox" class="check-table"
                                                        value="{$empresas.EMP_id}">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="col-md-12">
                                                    <a
                                                        href="{$_pgParams.RAIZ}painel/empresas/editar/{$empresas.EMP_id}"><b>{$empresas.EMP_fantasia}</b></a><br>
                                                </div>

                                            </td>
                                            <td>
                                                {$empresas.EMP_cnpj}
                                            </td>
                                            <td>
                                                {$empresas.EMP_email}

                                            </td>
                                            <td>{$empresas.EMP_tel}</td>
                                            <td class="botao_tabela_edit_exclui" style="padding: 10px 0 0 0;">
                                                <a href="{$_pgParams.RAIZ}painel/empresas/editar/{$empresas.EMP_id}"
                                                    class="btn btn-default">
                                                    <i class="fas fa-edit"></i>

                                                </a>
                                                <a href="{$_pgParams.RAIZ}painel/empresas/excluir/{$empresas.EMP_id}"
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
        {if isset($empresa) && is_array($empresa)}
            $("#cadastro").show(100);
        {else}
            $("#cadastro").hide();
        {/if}

        {if isset($_GET['novo'])}
            $("#cadastro").show(100);
        {/if}}

        $('#novo-cadastro').click(function() {
            $("#cadastro").show(100);
        });
        $('#fecha').click(function() {
            $("#cadastro").hide(100);
        });

        function limpa_formulário_cep() {
            // Limpa valores do formulário de cep.
            $("#rua").val("");
            $("#bairro").val("");
            $("#EMP_cidade").val("");
            $("#EMP_uf").val("");
        }

        //Quando o campo cep perde o foco.
        $("#EMP_cep").blur(function() {

            //Nova variável "cep" somente com dígitos.
            var cep = $(this).val().replace(/\D/g, '');

            //Verifica se campo cep possui valor informado.
            if (cep != "") {


                //Preenche os campos com "..." enquanto consulta webservice.
                $("#rua").val("...");
                $("#EMP_bairro").val("...");
                $("#EMP_cidade").val("...");
                $("#EMP_uf").val("...");

                //Consulta o webservice viacep.com.br/
                $.getJSON("https://viacep.com.br/ws/" + cep + "/json/?callback=?", function(dados) {

                    if (!("erro" in dados)) {
                        //Atualiza os campos com os valores da consulta.
                        $("#rua").val(dados.logradouro);
                        $("#EMP_bairro").val(dados.bairro);
                        $("#EMP_cidade").val(dados.localidade);
                        $("#EMP_uf").val(dados.uf);
                    } //end if.
                    else {
                        //CEP pesquisado não foi encontrado.
                        limpa_formulário_cep();
                        alert("CEP não encontrado.");
                    }
                });

            } //end if.
            else {
                //cep sem valor, limpa formulário.
                limpa_formulário_cep();
            }
        });
    });
</script>
