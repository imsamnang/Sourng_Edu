<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/font-awesome.min.css')}}" media="all" rel="stylesheet" type="text/css" />
    <script src="{{asset('assets/sweetalert2/sweetalert2.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('assets/sweetalert2/sweetalert2.min.css')}}" id="theme-styles">
    <meta name="_token" content="{{ csrf_token() }}">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
            <form action="" method="POST">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="card mt-5">
                        <div class="card-header">
                            <span>Scan QR</span>
                        </div>
                        <div class="card-body">
                        <div id="readerContainer" data-qr-check-url="{{$qrcode_check_url}}" class="center-block">
                        </div>                           
                        </div>
                        <div class="card-footer">
                            {{-- <a href="#" class="btn btn-primary pull-left">Back</a> --}}
                            <label class="btn btn-success pull-right" for="code">  Browe </label>
                            <input hidden type="file" id="code" name="code">
                        </div>
                    </div>                    
                </form>
            </div>
        </div>
    </div>
    <script src="{{asset('/assets/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('/js/custom/jsqrcode-combined.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('/js/custom/qrcode.min.js')}}" type="text/javascript"></script>
  <script>
      

    var readerContainer  = $('#readerContainer'),
        input_qrCode = $('[name="code"]'),
        message = $('<div></div>').addClass('message row pl-5 pr-5').css('text-align','center'),
        beepSound = new Audio('{{asset('/js/custom/beep.mp3')}}');
        page = {
            init : ()=>{
                readerContainer.css({
                    width:'400px',
                    height:'300px',
                    background: "url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADwAAAAwCAYAAABNPhkJAAAACXBIWXMAAAsTAAALEwEAmpwYAAAF62lUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4gPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iQWRvYmUgWE1QIENvcmUgNS42LWMxNDIgNzkuMTYwOTI0LCAyMDE3LzA3LzEzLTAxOjA2OjM5ICAgICAgICAiPiA8cmRmOlJERiB4bWxuczpyZGY9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkvMDIvMjItcmRmLXN5bnRheC1ucyMiPiA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtbG5zOmRjPSJodHRwOi8vcHVybC5vcmcvZGMvZWxlbWVudHMvMS4xLyIgeG1sbnM6cGhvdG9zaG9wPSJodHRwOi8vbnMuYWRvYmUuY29tL3Bob3Rvc2hvcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RFdnQ9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZUV2ZW50IyIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ0MgKFdpbmRvd3MpIiB4bXA6Q3JlYXRlRGF0ZT0iMjAxOC0wNy0yNFQxNToxMDoyNiswNzowMCIgeG1wOk1vZGlmeURhdGU9IjIwMTgtMDktMTJUMTU6NTk6MDkrMDc6MDAiIHhtcDpNZXRhZGF0YURhdGU9IjIwMTgtMDktMTJUMTU6NTk6MDkrMDc6MDAiIGRjOmZvcm1hdD0iaW1hZ2UvcG5nIiBwaG90b3Nob3A6Q29sb3JNb2RlPSIzIiBwaG90b3Nob3A6SUNDUHJvZmlsZT0ic1JHQiBJRUM2MTk2Ni0yLjEiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6MzA0MjAzYzMtNDVkMy1lMjQzLWIyYjQtZTkxNWQ0ZWZmNzY4IiB4bXBNTTpEb2N1bWVudElEPSJhZG9iZTpkb2NpZDpwaG90b3Nob3A6MDFlYTM1YWUtNThkYS00ZjQ2LWFkNDMtZDEyNTc0ZTAwODY1IiB4bXBNTTpPcmlnaW5hbERvY3VtZW50SUQ9InhtcC5kaWQ6OTlhNzZjZjYtNTJlYy1hNTRiLTljNGUtMmIyNDMzNzdiMjc5Ij4gPHhtcE1NOkhpc3Rvcnk+IDxyZGY6U2VxPiA8cmRmOmxpIHN0RXZ0OmFjdGlvbj0iY3JlYXRlZCIgc3RFdnQ6aW5zdGFuY2VJRD0ieG1wLmlpZDo5OWE3NmNmNi01MmVjLWE1NGItOWM0ZS0yYjI0MzM3N2IyNzkiIHN0RXZ0OndoZW49IjIwMTgtMDctMjRUMTU6MTA6MjYrMDc6MDAiIHN0RXZ0OnNvZnR3YXJlQWdlbnQ9IkFkb2JlIFBob3Rvc2hvcCBDQyAoV2luZG93cykiLz4gPHJkZjpsaSBzdEV2dDphY3Rpb249InNhdmVkIiBzdEV2dDppbnN0YW5jZUlEPSJ4bXAuaWlkOjMwNDIwM2MzLTQ1ZDMtZTI0My1iMmI0LWU5MTVkNGVmZjc2OCIgc3RFdnQ6d2hlbj0iMjAxOC0wOS0xMlQxNTo1OTowOSswNzowMCIgc3RFdnQ6c29mdHdhcmVBZ2VudD0iQWRvYmUgUGhvdG9zaG9wIENDIChXaW5kb3dzKSIgc3RFdnQ6Y2hhbmdlZD0iLyIvPiA8L3JkZjpTZXE+IDwveG1wTU06SGlzdG9yeT4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz6DMb7AAAAGuUlEQVRogeXaa6wdVRUH8N9l2nppCxRoa7EKSUWQSOWoVCj4qG/xkaLFSIziF3xFjTKl9RVMUBGDMsT3M9EgaKwE3xQJxtQSKqBhQKJpVaDW0lpaLoUWCnR6/bDmcM+9vffMmbmnNcR/cnLmzKy99/qfvWbttdbeA8PDw/6fMGWyHSRZXiUyA8ejheNwGAbLZ3vwMDYixz+wu874RdqqIz55whNgBhZjEY4SxLZiPR7FY6Xc03AoZuMc8Uc8gNuwTk3yvaDfhGfjbCzEZtyEu/Agqt6dAczC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) no-repeat center",
                });
                page.QRCODE_CAMERA();
                page.QRCODE_INPUT();
            },
            QRCODE_CAMERA : ()=>{
                readerContainer.QRcode(function(qrcodeSuccess){
                    readerContainer.QRcode_stop();
                    message.html('<span class="text-success send-true">Successfully.</span>').remove();
                    
                    if (qrcodeSuccess) {
                        page.QRCODE_SUCCESS(qrcodeSuccess);            
                    }else{
                        return confirm('There is no data.');
                    }
                },
                function(qrcodeError){
                    var text = $('<span></span>');
                        text.css('text-align','center')
                        .addClass('text-primary send-true')
                        .html('Scanning...');       
                    if($('.message').length === 0){
                        message.html(text);
                        readerContainer.after(message);
                    }
                
                }, function(videoError){
                    var text = $('<span></span>');
                        text.css('text-align','center')
                        .addClass('text-danger camera-problem')
                        .html('There was a problem with your camera.');       
                    if($('.message').length === 0){
                        message.html(text);
                        readerContainer.after(message);
                    }       

                });
            },
            QRCODE_INPUT : ()=>{
                input_qrCode.on('input',function(e){
                    var files = !!this.files ? this.files : [];
                        if (!files.length || !window.FileReader) return; 
                        if (/^image/.test( files[0].type)){
                            readerContainer.QRcode_input(this,function(qrcodeSuccess){
                                page.QRCODE_SUCCESS(qrcodeSuccess);
                            });
                        }       
                }); 
            },
            QRCODE_SUCCESS :(code)=>{  
                page.SOUND();
                $.ajax({
                    type: "POST",
                    cache: false,
                    url : readerContainer.attr('data-qr-check-url'),
                    data: {
                        "_token": "{{ csrf_token() }}",
                        code : code
                    },
                    success: function(response) {
                        if (response.success) {                  
                            $(location).attr('href',response.url);
                        }else{
                            return confirm('There is no user with this qr code');
                        }                
                    }
                });
            },
            SOUND:() => {               
                beepSound.play();                
            }
        };
    page.init();
  </script>
</body>
</html>