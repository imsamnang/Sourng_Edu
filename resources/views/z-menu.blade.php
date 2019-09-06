<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="_token" content="{{csrf_token()}}">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <title>Simple Management Menu</title>
    {{-- <link rel="stylesheet" type="text/css" href="{{asset('/css/style.css')}}"> --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" />
    <link rel="stylesheet" href="{{ asset('/bootstrap-iconpicker/css/bootstrap-iconpicker.min.css')}}">
    <script src="{{asset('assets/sweetalert2/sweetalert2.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('assets/sweetalert2/sweetalert2.min.css')}}" id="theme-styles">
</head>

<body>
    <div class="container">
        <div id="load"></div>

        {{-- <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">Management Menu</div>
                    <div class="card-body">                
                        <form class="form-horizontal" action="/action_page.php">
                            <input type="hidden" id="id">
                            <input type="hidden" id="nestable-output">
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="label">label:</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" id="label" placeholder="Enter label"
                                        name="label">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-2" for="link">link:</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" id="link" placeholder="Enter link"
                                        name="link">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-12">
                                    <button type="reset" id="reset" class="btn btn-default">Reset</button>
                                    <button type="submit" id="submit" class="btn btn-primary pull-right">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-body">
                        <menu id="nestable-menu">
                            <button type="button" class="btn" data-action="expand-all">Expand All</button>
                            <button type="button" class="btn" data-action="collapse-all">Collapse All</button>
                        </menu>
                    </div>
                    <div class="card-body">
                        <div class="cf nestable-lists">
                            <div class="dd" id="nestable">
                                @php
                                function get_menu($items,$class = 'sortableLists list-group') {
                                $html = "<ol class=\"".$class."\" id=\"menu-id\">";

                                    foreach($items as $key=>$value) {
                                    $html.= '<li class="dd-handle list-group-item pr-0" data-id="'.$value['id'].'">
                                        <i class="dd-handle dd3-handle fa fa-reorder"></i>
                                        <div class="dd3-content"><span
                                                id="label_show'.$value['id'].'">'.$value['text'].'</span>
                                            <span class="span-right">/<span
                                                    id="link_show'.$value['id'].'">'.$value['link'].'</span>
                                                &nbsp;&nbsp;
                                                <button class="edit-button btn btn-sm btn-primary" id="'.$value['id'].'" label="'.$value['text'].'"
                                                    link="'.$value['link'].'"><i class="fa fa-pencil"></i></button>
                                                <button class="del-button btn btn-sm btn-danger" id="'.$value['id'].'"><i
                                                        class="fa fa-trash"></i></button></span>
                                        </div>';
                                        if(array_key_exists('children',$value)) {
                                        $html .= get_menu($value['children'],'pl-0');
                                        }
                                        $html .= "
                                    </li>";
                                    }
                                    $html .= "</ol>";

                                return $html;

                                }

                                print get_menu($menu);
                                @endphp

                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-success pull-right" id="save">Save</button>
                    </div>
                </div>
            </div> --}}
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <form id="frmEdit" class="form-horizontal" action="{{url('/menu/save_menu')}}" method="POST">
                            <div class="card mb-3">
                                <div class="card-header">Edit item</div>
                                <div class="card-body">

                                    @csrf
                                    <input type="hidden" name="id" id="id" />
                                    <div class="form-group">
                                        <label for="text">Text</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control item-menu" name="text" id="text"
                                                placeholder="Text">
                                            <div class="input-group-append">
                                                <button type="button" id="myEditor_icon"
                                                    class="btn btn-outline-secondary"></button>
                                            </div>
                                        </div>
                                        <input type="hidden" name="icon" class="item-menu">
                                    </div>
                                    <div class="form-group">
                                        <label for="href">URL</label>
                                        <input type="text" class="form-control item-menu" id="href" name="href"
                                            placeholder="URL">
                                    </div>
                                    <div class="form-group">
                                        <label for="target">Target</label>
                                        <select name="target" id="target" class="form-control item-menu">
                                            <option value="_self">Self</option>
                                            <option value="_blank">Blank</option>
                                            <option value="_top">Top</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Tooltip</label>
                                        <input type="text" name="title" class="form-control item-menu" id="title"
                                            placeholder="Tooltip">
                                    </div>

                                </div>
                                <div class="card-footer">
                                    <button type="button" id="btnUpdate" class="btn btn-primary" disabled><i
                                            class="fas fa-sync-alt"></i> Update</button>
                                    <button type="button" id="btnAdd" class="btn btn-success"><i
                                            class="fas fa-plus"></i>
                                        Add</button>
                                </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-3">
                        <div class="card-header">
                            <h5 class="float-left">Menu</h5>
                            <div class="float-right">
                                <button id="btnReload" type="button" class="btn btn-outline-secondary">
                                    <i class="fa fa-play"></i> Reload Data</button>
                            </div>
                        </div>
                        <div class="card-body">
                            <ul id="myEditor" class="sortableLists list-group">
                            </ul>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-success pull-right float-right" id="btnSave"><i
                                    class="fas fa-save"></i> Save</button>
                        </div>
                    </div>
                    <p>Click the Output button to execute the function <code>getString();</code></p>
                    <div class="card">
                        <div class="card-header">JSON Output
                            <div class="float-right">
                                <button id="btnOutput" type="button" class="btn btn-info"><i
                                        class="fas fa-check-square"></i> Output</button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group"><textarea id="out" class="form-control" cols="50"
                                    rows="10"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




    </div>
    </div>


    {{--
    <script src="{{ asset('assets/js/jquery-2.1.4.min.js') }}"></script>
    <script src="{{asset('/js/custom/jquery.nestable.js')}}"></script>
    <script>
        $(document).ready(function(){
            $("#load").hide();
            var updateOutput = function(e)
                {
                    var list   = e.length ? e : $(e.target),
                        output = list.data('output');
                    if (window.JSON) {
                        output.val(window.JSON.stringify(list.nestable('serialize')));//, null, 2));
                    } else {
                        output.val('JSON browser support required for this demo.');
                    }
                };

            // activate Nestable for list 1
            $('#nestable').nestable({ group: 1})
            .on('change', updateOutput);
            // output initial serialised data
            updateOutput($('#nestable').data('output', $('#nestable-output')));

            $('#nestable-menu').on('click', function(e)
            {
                var target = $(e.target),
                    action = target.data('action');
                if (action === 'expand-all') {
                    $('.dd').nestable('expandAll');
                }
                if (action === 'collapse-all') {
                    $('.dd').nestable('collapseAll');
                }
            });

            
            $("#submit").click(function(e){
                e.preventDefault();
            $("#load").show();
            var dataString = { 
                    label : $("#label").val(),
                    link : $("#link").val(),
                    id : $("#id").val(),
                    _token : "{{csrf_token()}}",
    };

    $.ajax({
    type: "POST",
    url: "{{url('/menu/save_menu')}}",
    data: dataString,
    dataType: "json",
    cache : false,
    success: function(response){
    if(response.success){
    var data = response.data;
    if(response.type == 'add'){
    var li = '<li class="dd-item dd3-item" data-id="'+data.id+'">\
        <div class="dd-handle dd3-handle"></div>\
        <div class="dd3-content"><span id="label_show'+data.id+'">'+data.text+'</span>\
            <span class="span-right">/<span id="link_show'+data.id+'">'+data.link+'</span> &nbsp;&nbsp; \
                <a class="edit-button" id="'+data.id+'" label="'+data.text+'" link="'+data.link+'"><i
                        class="fa fa-pencil"></i></a>\
                <a class="del-button" id="'+data.id+'"><i class="fa fa-trash"></i></a>\
            </span> \
        </div>';

        $("#menu-id").append(li);
        } else if(response.type == 'edit'){
        $('#label_show'+data.id).html(data.text);
        $('#link_show'+data.id).html(data.link);
        }
        }

        $('#label').val('');
        $('#link').val('');
        $('#id').val('');
        $("#load").hide();
        } ,error: function(xhr, status, error) {
        alert(error);
        },
        });
        });

        $('.dd').on('change', function() {
        $("#load").show();

        var dataString = {
        data : $("#nestable-output").val(),
        _token : "{{csrf_token()}}",
        };

        $.ajax({
        type: "POST",
        url: "{{url('/menu/save')}}",
        data: dataString,
        cache : false,
        success: function(data){
        $("#load").hide();
        } ,error: function(xhr, status, error) {
        alert(error);
        },
        });
        });

        $("#save").click(function(){
        $("#load").show();

        var dataString = {
        _token : "{{csrf_token()}}",
        data : $("#nestable-output").val(),
        };

        $.ajax({
        type: "POST",
        url: "{{url('/menu/save')}}",
        data: dataString,
        cache : false,
        success: function(data){
        $("#load").hide();
        alert('Data has been saved');

        } ,error: function(xhr, status, error) {
        alert(error);
        },
        });
        });


        $(document).on("click",".del-button",function() {
        var x = confirm('Delete this menu?');
        var id = $(this).attr('id');
        if(x){
        $("#load").show();
        $.ajax({
        type: "POST",
        url: "{{url('/menu/delete')}}",
        data: { id : id , _token : "{{csrf_token()}}",},
        cache : false,
        success: function(data){
        $("#load").hide();
        $("li[data-id='" + id +"']").remove();
        } ,error: function(xhr, status, error) {
        alert(error);
        },
        });
        }
        });

        $(document).on("click",".edit-button",function() {
        var id = $(this).attr('id');
        var label = $(this).attr('label');
        var link = $(this).attr('link');
        $("#id").val(id);
        $("#label").val(label);
        $("#link").val(link);
        });

        $(document).on("click","#reset",function() {
        $('#label').val('');
        $('#link').val('');
        $('#id').val('');
        });

        });
    </script> --}}
    <script type="text/javascript" src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js">
    </script>
    <script type="text/javascript" src="{{asset('/js/custom/jquery-menu-editor.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/bootstrap-iconpicker/js/iconset/fontawesome5-3-1.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/bootstrap-iconpicker/js/bootstrap-iconpicker.min.js')}}">
    </script>

    <script>
        jQuery(document).ready(function() {
                /* =============== DEMO =============== */
                // menu items
                var arrayjson = {!!json_encode($menu)!!};
                // icon picker options
                var iconPickerOptions = {
                    searchText: "Buscar...",
                    labelHeader: "{0}/{1}"
                };
                // sortable list options
                var sortableListOptions = {
                    placeholderCss: {
                        'background-color': "#cccccc"
                    }
                };
    
                var editor = new MenuEditor('myEditor', {
                    listOptions: sortableListOptions,
                    iconPicker: iconPickerOptions
                });
                editor.setForm($('#frmEdit'));
                editor.setUpdateButton($('#btnUpdate'));
                editor.setData(arrayjson);
                $('#btnReload').on('click', function() {
                    editor.setData(arrayjson);
                });
    
                $('#btnOutput').on('click', function() {
                    var str = editor.getString();
                    console.log(str)
                    $("#out").text(str);
                });
    
                $("#btnUpdate").click(function() {
                   
                    editor.update();
                });
    
                $('#btnAdd').click(function() {                
                    editor.add();
                });  
                
                $('#btnSave').click(function() {                
                    editor.save();
                });  
            });
    </script>
</body>

</html>