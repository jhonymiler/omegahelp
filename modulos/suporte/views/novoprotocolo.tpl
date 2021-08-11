<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">{$titulo}</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form id="arquivos" action='{$_pgParams.RAIZ}suporte/protocolos/novo' method="post" enctype="multipart/form-data">
        <div class="card-body">
            <div class="row">
                <div class="form-group col-md-6">
                    <label>Qual a Ocorrência?</label>
                    <input autocomplete="off" name="CHA_assunto" id="CHA_assunto" class="form-control">
                </div>
                <div class="form-group  col-md-6">
                    <label>Em qual parte do sistema?</label>
                    <select name="TIP_id" id="TIP_id" class="form-control  select2" style="width: 100%;">
                        <option value="">Escolha um tipo</option>
                        {if is_array($tipos) && isset($tipos)}
                            {foreach from=$tipos item="tipo"}
                                <option value="{$tipo.TIP_id}">{$tipo.TIP_tipo}</option>
                            {/foreach}
                        {/if}
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="CHA_texto">Nos dê mais detalhes do ocorrido.</label>
                <textarea rows="5" id="CHA_texto" class="form-control" name="CHA_texto"></textarea>

            </div>
            <div class="form-group">
                <label>Envie-nos prints ou arquivos que demonstrem seu problema.</label>
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
    $("#arquivos").submit(function() {
        return validacao();
    });


    $('#TIP_id').select2();

    $(document).ready(function() {



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
            $('#file-pt-BR').fileinput('paste',
                eventObj); // copies files or images data in clipboard
        });
    });

    ClassicEditor
        .create(document.querySelector('#CHA_texto'), {
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

    function validacao() {
        var valid = true;
        var valida = unserialize($("#arquivos").serialize());
        var msg = '';

        if (valida.CHA_assunto == '') {
            valid = false;
            $("#CHA_assunto").attr('style', 'border:1px solid red;');
        } else {
            $("#CHA_assunto").removeAttr('style');
        }

        //alert(valida.TIP_id)
        if (valida.TIP_id == '') {
            valid = false;
            $(".selection>span").attr('style', 'border:1px solid red;');

        } else {
            $(".selection>span").removeAttr('style');
        }
        if (valida.CHA_texto == '') {
            valid = false;

            $(".ck-editor").attr('style', 'border:1px solid red;');
        } else {
            $(".ck-editor").removeAttr('style');
        }
        if (valid == false) {
            $(document).Toasts('create', {
                toast: true,
                delay: 5000,
                class: 'bg-danger',
                position: 'topRight',
                autohide: true,
                fade: true,
                title: 'Erro!',
                body: 'Os campos em vermelho são obrigatórios. Por favor preencha-os.'
            });
        }

        return valid;
    }

    function unserialize(data) {
        data = data.split('&');
        var response = {};
        for (var k in data) {
            var newData = data[k].split('=');
            response[newData[0]] = newData[1];
        }
        return response;
    }
</script>
