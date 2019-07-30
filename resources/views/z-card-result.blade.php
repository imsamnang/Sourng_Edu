<!DOCTYPE html>
<html>
  <head>
    <!-- USE DEVELOPMENT VERSION -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <script src="{{ asset('js/custom/konva.min.js')}}"></script>    
    <script src="{{ asset('assets/js/jquery-2.1.4.min.js') }}"></script>
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
      .row{
        width: 1210px;
      }
      [id^="stage"] {       
        padding: 1px 1px 1px 1px;
        border:1px solid rgb(0,0,0,0.1);
        width: 503px;
      }
    </style>

  </head>
  <body>
    <div class="container-fluid">
        <div class="row">           
        </div>
    </div>
  
    <script>    
      var all_cards = @php echo json_encode($all_cards) @endphp;
      var j = 0;
      for(var i in all_cards){ 
      
        var container = $("<div></div>");
        var containerSpace = $("<div></div>").css('margin',20).addClass('col-md-12');
          container.attr({
            id: "stage-" + all_cards[i].id,
            class : 'col-md-5'
          });
          if(j == 4){
            j = 0;
            $(".row").append(containerSpace);
          }
          $(".row").append(container);

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
