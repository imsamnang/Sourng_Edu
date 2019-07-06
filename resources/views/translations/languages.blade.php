<!DOCTYPE html>
<html>
<head>
  <title>School Management System Multi Language Translation</title>
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.css" />
  <link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
  <style>
    .btn-success {
    color: #fff;
    background-color: #5cb85c;
    border-color: #4cae4c;
    margin-top: 24px;
  </style>
</head>
<body>

<div class="container">
    <h1>School Management System Multi Language Translation</h1>
    <form method="POST" action="{{ route('translations.create') }}">
      @csrf
      <div class="row">
        <div class="col-md-4">
          <label>Key:</label>
          <input type="text" name="key" class="form-control" placeholder="Enter Key...">
        </div>
        <div class="col-md-4">
          <label>Value:</label>
          <input type="text" name="value" class="form-control" placeholder="Enter Value...">
        </div>
        <div class="col-md-4">
            <button type="submit" class="btn btn-success">Add</button>
        </div>
      </div>
    </form>
    <br/>
    <table class="table table-hover table-bordered">
      <thead>
        <tr>
          <th>Key</th>
          @if($languages->count() > 0)
            @foreach($languages as $language)
              <th>{{ $language->name }}({{ $language->code }})</th>
            @endforeach
          @endif
          <th width="80px;">Action</th>
        </tr>
      </thead>
      <tbody>
        @if($columnsCount > 0)
          @foreach($columns[0] as $columnKey => $columnValue)
            <tr>
              <td><a href="#" class="translate-key" data-title="Enter Key" data-type="text" data-pk="{{ $columnKey }}" data-url="{{ route('translation.update.json.key') }}">{{ $columnKey }}</a></td>
              @for($i=1; $i<=$columnsCount; ++$i)
              <td>
                <a href="#" data-title="Enter Translate" class="translate" data-code="{{ $columns[$i]['lang'] }}" data-type="textarea" data-pk="{{ $columnKey }}" data-url="{{ route('translation.update.json') }}">{{ isset($columns[$i]['data'][$columnKey]) ? $columns[$i]['data'][$columnKey] : '' }}</a>
              </td>
              @endfor
              <td>
                <button data-action="{{ route('translations.destroy', $columnKey) }}" class="btn btn-danger btn-xs remove-key">Delete</button>
              </td>
            </tr>
          @endforeach
        @endif
      </tbody>
    </table>
</div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>
  <script type="text/javascript">
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });

    $('.translate').editable({
      params: function(params) {
        params.code = $(this).editable().data('code');
        return params;
      }
    });

    $('.translate-key').editable({
      validate: function(value) {
        if($.trim(value) == '') {
          return 'Key is required';
        }
      }
    });

    $('body').on('click', '.remove-key', function(){
      var cObj = $(this);
      if (confirm("Are you sure want to remove this item?")) {
        $.ajax({
          url: cObj.data('action'),
          method: 'DELETE',
          success: function(data) {
            cObj.parents("tr").remove();
            alert("Your imaginary file has been deleted.");
          }
        });
      }
    });
  </script>

</body>
</html>