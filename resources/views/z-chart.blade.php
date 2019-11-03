<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="_token" content="{{csrf_token()}}">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <title>Simple Management Menu</title>
    {{-- <link rel="stylesheet" type="text/css" href="{{asset('/css/style.css')}}"> --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('/bootstrap-iconpicker/css/bootstrap-iconpicker.min.css')}}">
    <script src="{{asset('assets/sweetalert2/sweetalert2.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('assets/sweetalert2/sweetalert2.min.css')}}" id="theme-styles">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/orgchart/2.1.3/css/jquery.orgchart.min.css'>
    <style>
        html,
        body {
            width: 100%;
            height: 100%;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial;
            font-size: 14px;
            line-height: 1.428571429;
            color: #333333;
        }

        #chart-container {
            position: relative;
            display: inline-block;
            top: 10px;
            left: 10px;
            /* height: 420px; */
            width: calc(100% - 24px);
            border: 2px dashed #aaa;
            border-radius: 5px;
            overflow: auto;
            text-align: center;
        }
    </style>
</head>

<body>
    <div id="chart-container"></div>
    <script type="text/javascript" src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js">
    </script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/orgchart/2.1.3/js/jquery.orgchart.min.js'></script>

    <script id="rendered-js">
        (function ($) {
            $(function () {
            var ds = {!!json_encode($menu)!!};
            var nodeTemplate = function(data) {
            return `
            <div class="card bg- b1">
                ${data.children ? '<div><i class="fa fa-group"></i> </div>' : ""}               
                <div class="card-body text-center">
                    <img width="50px" src="${data.icon}" class="rounded-circle">
                    <div class="title">${data.text}</div>             
                    <div class="content">
                    <a href="#"><i class="fa fa-facebook-square"></i></a>
                    <a href="#"><i class="fa fa-twitter-square"></i></a>
                    <a href="#"><i class="fa fa-google-plus-square"></i></a>
                    <a href="#"><i class="fa fa-linkedin-square"></i></a>
                    </div>
                </div>
                </div>
               
            `;
            };
            var oc = $('#chart-container').orgchart({
                data: ds,
                depth: 2,
                nodeTemplate: nodeTemplate
            });        
        
            });
        })(jQuery);  
    </script>
</body>

</html>