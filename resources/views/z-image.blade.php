<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/font-awesome.min.css')}}" media="all"
        rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{asset('/css/custom/upload.css')}}">
    <script src="{{asset('assets/sweetalert2/sweetalert2.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('assets/sweetalert2/sweetalert2.min.css')}}" id="theme-styles">
    <meta name="_token" content="{{ csrf_token() }}">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
            <form action="{{URL::to($save_url)}}" method="POST">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="card mt-5">
                        <div class="card-header">
                            <span>Upload</span>
                        </div>
                        <div class="card-body">
                        <div 
                            class="list-image" 
                            data-token="{{csrf_token()}}"
                            data-limit-image="{{$limit_field}}" 
                            data-upload-url="{{$upload_url}}" 
                            data-delete-url="{{$delete_url}}"
                            data-rotate-url="{{$rotate_url}}"
                            data-allow-size="{{$allow_size}}">
                        </div>
                           
                        </div>
                        <div class="card-footer">
                            {{-- <a href="#" class="btn btn-primary pull-left">Back</a> --}}
                            <button type="submit" class="btn btn-success pull-right">Save</button>
                        </div>
                    </div>

                    
                </form>
            </div>
        </div>
    </div>
    <script src="{{asset('/assets/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('/js/custom/upload.js')}}" type="text/javascript"></script>
  <script>
       $('.list-image').Upload();
  </script>
</body>
</html>