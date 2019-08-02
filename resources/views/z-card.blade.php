<!DOCTYPE html>
<html>

<head>
  <!-- USE DEVELOPMENT VERSION -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/custom/upload.css') }}" />
  <script src="{{ asset('js/custom/konva.min.js')}}"></script>
  <script src="{{ asset('assets/js/jquery-2.1.4.min.js') }}"></script>
  <script src="{{asset('assets/sweetalert2/sweetalert2.min.js')}}"></script>
  <link rel="stylesheet" href="{{asset('assets/sweetalert2/sweetalert2.min.css')}}" id="theme-styles">
  <meta charset="utf-8" />
  <title>Card</title>
  <style>
    @font-face {
      font-family: KhmerOSMoul;
      src: url("{{asset('fonts/KhmerOSMoul.ttf') }}");
    }

    @font-face {
      font-family: NiDAKhmerEmpire;
      src: url("{{asset('fonts/NiDAKhmerEmpire.ttf') }}");
    }

    body {
      margin: 0;
      padding: 0;
      overflow: scroll;
      background-color: #f0f0f0;
    }

    .row {
      width: 1210px;
    }

    [id^="stage"] {
      border: 1px solid rgb(0, 0, 0, 0.1);
      max-width: 704px;
      margin: 0 auto;
    }
  </style>

</head>

<body>
  <div class="container">
    <div class="row result">
      <div class="col-md-8 offset-md-2">
        <form action="{{URL::to('/card/result')}}" method="POST">
          <input type="hidden" name="_token" value="{{csrf_token()}}">
          <div class="card mt-5">
            <div class="card-header">
              <span>Make Card</span>
            </div>
            <div class="card-body">
              <div id="stage" 
              data-card-front-250x350="{{$card_front_250x350}}"
              data-card-back-250x350="{{$card_back_250x350}}"
              data-card-front-350x250="{{$card_front_350x250}}"
              data-card-back-350x250="{{$card_back_350x250}}"
              data-profile="{{$profile}}"
              data-qr-code="{{$qr_code}}"
              data-url-result="{{URL::to('/card/result')}}">
            </div>
            </div>
            <div class="card-footer">
              <label class="btn btn-default" for="front_card">Front Card</label>
              <input hidden type="file" name="front_card" id="front_card">
              <label class="btn btn-default" for="back_card">Back Card</label>
              <input hidden type="file" name="back_card" id="back_card">

              <button type="button" class="btn btn-primary" id="transform">Transform</button>
              <button type="submit" class="btn btn-success pull-right">Ok</button>
            </div>
          </div>
        </form>
      </div>

    </div>
  </div>
  <script src="{{asset('/js/custom/card.js')}}"></script>
  <script>  
    $('#stage').createCard();
  </script>
</body>

</html>