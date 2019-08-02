<!DOCTYPE html>
<html>

<head>
  <!-- USE DEVELOPMENT VERSION -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">  
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('css/custom/upload.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/custom/card.css') }}" />
  <script src="{{ asset('js/custom/konva.min.js')}}"></script>
  <script src="{{ asset('assets/js/jquery-2.1.4.min.js') }}"></script>
  <script src="{{asset('assets/sweetalert2/sweetalert2.min.js')}}"></script>
  <link rel="stylesheet" href="{{asset('assets/sweetalert2/sweetalert2.min.css')}}" id="theme-styles">
  <meta charset="utf-8" />
  <title>Card</title>
  <style> 
   [id^="stage"] {
      margin: 2mm auto;
    }
  </style>

</head>

<body class="A4">
  <section class="sheet padding-10mm">
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
  </section>
 
  <script src="{{asset('/js/custom/card.js')}}"></script>
  <script>  
    $('#stage').createCard();
  </script>
</body>

</html>