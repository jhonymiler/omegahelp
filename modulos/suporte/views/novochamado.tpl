<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Cadastro de Chamados</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form id="arquivos" action='{$_pgParams.RAIZ}suporte/chamados/novo' method="post" enctype="multipart/form-data">
        <div class="card-body">
            <div class="row">
                <div class="form-group col-md-6">
                    <label>Assunto</label>
                    <input autocomplete="off" name="CHA_assunto" id="CHA_assunto" class="form-control">
                </div>
                <div class="form-group  col-md-6">
                    <label>Departamento</label>
                    <select name="DEP_id" id="DEP_id" class="form-control select2" style="width: 100%;">
                        <option selected="selected">Alabama</option>
                        <option>Alaska</option>
                        <option>California</option>
                        <option>Delaware</option>
                        <option>Tennessee</option>
                        <option>Texas</option>
                        <option>Washington</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Mensagem</label>
                <textarea rows="5" id="CHA_mensagem" class="form-control" name="CHA_mensagem"></textarea>

            </div>
            <div class="form-group">
                <label>Upload de arquivos</label>
                <div class="file-loading">
                    <input id="file-pt-BR" name="files[]" type="file" multiple>
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary float-right">Enviar</button>
            </div>
    </form>
</div>
<script src="{$_pgParams.path_layout}plugins/select2/js/select2.full.min.js"></script>
<script src="{$_pgParams.path_layout}plugins/inputfile/js/fileinput.js" type="text/javascript"></script>
<script src="{$_pgParams.path_layout}plugins/inputfile/js/pt-BR.js" type="text/javascript"></script>
<script src="{$_pgParams.path_layout}plugins/ckeditor/build/ckeditor.js"></script>

<script src="{$_pgParams.path_layout}plugins/inputfile/js/theme.js" type="text/javascript"></script>
<script>
    $(document).ready(function() {
        $('#DEP_id').select2();

        $('#file-pt-BR').fileinput({
            theme: 'fas',
            language: 'pt-BR',
            browseOnZoneClick: true,
            showRemove: true,
            allowedFileExtensions: ['jpg', 'png', 'gif', 'xls', 'xlsx', 'doc', 'docx', 'pdf', 'xml'],
            previewFileIconSettings: {
                'doc': '<i class="fa fa-file-word text-primary"></i>',
                'docx': '<i class="fa fa-file-word text-primary"></i>',
                'xls': '<i class="fa fa-file-excel text-success"></i>',
                'xlsx': '<i class="fa fa-file-excel text-success"></i>',
                'pdf': '<i class="fa file-pdf text-danger"></i>',
                'zip': '<i class="fa fa-file-archive text-muted"></i>',
            },
            slugCallback: function(filename) {
                return filename.replace('(', '_').replace(']', '_');
            }
        });

        $('#arquivos').on('paste', function(eventObj) {
            $('#file-pt-BR').fileinput('paste', eventObj); // copies files or images data in clipboard
        });
    });
</script>
<script>
    ClassicEditor
        .create(document.querySelector('#CHA_mensagem'), {

            toolbar: {
                items: [
                    'heading',
                    '|',
                    'bold',
                    'italic',
                    'link',
                    'bulletedList',
                    'numberedList',
                    '|',
                    'outdent',
                    'indent',
                    '|'
                ]
            },
            language: 'pt-br',
            image: {
                toolbar: [
                    'imageTextAlternative',
                    'imageStyle:inline',
                    'imageStyle:block',
                    'imageStyle:side'
                ]
            },
            table: {
                contentToolbar: [
                    'tableColumn',
                    'tableRow',
                    'mergeTableCells'
                ]
            },
            licenseKey: '',



        })
        .then(editor => {
            window.editor = editor;




        })
        .catch(error => {
            console.error('Oops, something went wrong!');
            console.error(
                'Please, report the following error on https://github.com/ckeditor/ckeditor5/issues with the build id and the error stack trace:'
            );
            console.warn('Build id: 8gu4f69zasvi-1abbksipscam');
            console.error(error);
        });
</script>
