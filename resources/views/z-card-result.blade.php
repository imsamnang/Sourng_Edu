<!DOCTYPE html>
<html>

<head>
  <!-- USE DEVELOPMENT VERSION -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
    integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/custom/card.css') }}" />
  <script src="{{ asset('js/custom/konva.min.js')}}"></script>
  <script src="{{ asset('assets/js/jquery-2.1.4.min.js') }}"></script>
  <meta charset="utf-8" />
  <title>Card</title>
  <style>
    [id^="stage"] {
      margin: auto 2mm;
      @if ($card && $card->transform=='horizontal') display: inline-block;
      margin: auto 1px;
      height: 346px;
      width: 501px;
      @endif
    }
  </style>


</head>

<body class="A4 {{($card && $card->transform == 'horizontal') ? 'landscape': ''}}"></body>


<script>
  var all_cards = @php echo json_encode($data) @endphp;
  var Bprint = $('<button></button>');
      Bprint.attr({
        class : 'btn-print btn btn-primary',
        }).css({
        position : 'absolute',
        top : '5mm',
        right : '10mm',
        }).html(
        '<i class="fas fa-sm fa-print"></i>'
        ).on('click',()=>{
        window.print();
      })
        
        $('body').append(Bprint);
      var j = 1;
      for(var i in all_cards){ 
        var sheet = $("<section></section>");
            sheet.attr({
              id : all_cards[i].id,
              class : 'sheet padding-10mm'
            });

        var container = $("<div></div>");
            container.attr({
              id: "stage-" + all_cards[i].id,
            });

        if(j == 1){
          $("body").append(sheet);        
        }else if(j == 4){
            j = 0;                       
        }
        $("body").find('section:last').append(container);  
        all_cards[i] = Konva.Node.create(all_cards[i], "stage-"+all_cards[i].id);
        all_cards[i].find("Image").forEach(imageNode => {
        
          const nativeImage = new Image();
          nativeImage.onload = () => {
            imageNode.image(nativeImage);
            imageNode.getLayer().batchDraw();
          };
          nativeImage.src = imageNode.getAttr("source");
        });
        j++;
      }      
</script>
</body>

</html>