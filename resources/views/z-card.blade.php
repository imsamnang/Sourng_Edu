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
      .row{
        width: 1210px;
      }
      [id^="stage"] {       
        border:1px solid rgb(0,0,0,0.1);
        max-width: 504px;
        margin: 0 auto;
      }
    </style>

  </head>
  <body>
    <div class="container">
        <div class="row">  
            <div class="col-md-6 offset-md-3">
              <form action="{{URL::to('/card/result')}}" method="POST">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="card">
                  <div class="card-header">
                    <span>Make Card</span>
                  </div>
                  <div class="card-body">
                      <div id="stage"></div>      
                  </div>
                  <div class="card-footer">
                    <label class="btn btn-default" for="front_card">Front Card</label>
                    <input hidden type="file" name="front_card" id="front_card">
                    <label class="btn btn-default" for="back_card">Back Card</label>
                    <input hidden type="file" name="back_card" id="back_card">
                    <button type="submit" class="btn btn-success pull-right">Ok</button>
                  </div>
                </div>
              </form>  
            </div>   
           
        </div>
    </div>  
    <script>    
      var ContainerWidth = 502,
          ContainerHeight = 350,
          MAX_WIDTH = 150,
          MAX_HEIGHT = 14,
          FONT_SIZE = 14,
          COLOR = "#23499E",
          CARD_FRONT = [],
          CARD_BACK = [],
          PROFILE = [],
          QR_CODE = [],
          ID  = [],
          NAME_KM  = [],
          NAME_EN  = [],
          GENDER  = [],
          COURSE  = [],
          stage = new Konva.Stage({
            container: "stage",
            width: ContainerWidth,
            height: ContainerHeight
          });

          CARD_FRONT.image = '{{$card_front}}';     
          CARD_BACK.image =  '{{$card_back}}';  
          PROFILE.image = '{{$profile}}';     
          QR_CODE.image = '{{$qr_code}}';
          ID.text = '០០១';
          NAME_KM.text = 'សែម គឹមសាន';
          NAME_EN.text = 'SEM KEAMSAN';
          GENDER.text = 'ប្រុស';
          COURSE.text = 'ព័ត៌មានវិទ្យាសាស្រ្តកំព្យទ័រ';
          
         



      var FrontBackground = new Konva.Layer(),
          FrontLayer = new Konva.Layer();
          stage.add(FrontBackground);
          stage.add(FrontLayer);
          FrontBackground.setZIndex(0);
          FrontLayer.setZIndex(1);

      // Konva.Image.fromURL(CARD_FRONT.image, image => {
      //   var BackgroundImage = new Konva.Image({
      //     x: 0,
      //     y: 0,
      //     image: CARD_FRONT.image,
      //     width: 250,
      //     height: 350
      //   });
      //   FrontBackground.add(image);
      //   image.setAttr("source",  CARD_FRONT.image);
      //   FrontBackground.batchDraw();
      // });
      var FrontImageBackgroud = new Image();
      FrontImageBackgroud.onload = function() {
        var BackgroundImage = new Konva.Image({
          x: 0,
          y: 0,
          image: FrontImageBackgroud,
          width: 250,
          height: 350
        });
        FrontBackground.add(BackgroundImage);
        FrontBackground.batchDraw();
      };
      FrontImageBackgroud.src = CARD_FRONT.image;

      
      var BackImageBackgroud = new Image();
      BackImageBackgroud.onload = function() {
        var BackgroundImage = new Konva.Image({
          x: 252,
          y: 0,
          image: BackImageBackgroud,
          width: 250,
          height: 350
        });
        FrontBackground.add(BackgroundImage);
        FrontBackground.batchDraw();
      };
      BackImageBackgroud.src = CARD_BACK.image;

      $('input[type="file"]').on('input',function(e){
            var files = !!this.files ? this.files : [];
            var getID = $(this).attr('id');
            if (!files.length || !window.FileReader) return; 
            if (/^image/.test( files[0].type)){
              var Reader = new FileReader();
                Reader.readAsDataURL(files[0]);
                Reader.onload = function (e) {    
                    if(getID === 'front_card'){
                        FrontImageBackgroud.src = e.target.result;
                    }else{
                       BackImageBackgroud.src = e.target.result;
                    }              
                   
                };          
            }       
          });


      var FrontImageProfile = new Image();
      FrontImageProfile.onload = function() {
        var Profile = new Konva.Image({
          x: 90,
          y: 110,
          image: FrontImageProfile,
          width: 75,
          height: 80,
          name: "profile",
          draggable: true

        }).on('transformstart', function(e) {
          PROFILE = e.currentTarget.attrs;
        }).on('transformend', function(e) {
          PROFILE = e.currentTarget.attrs;
        });
        FrontLayer.add(Profile);
        FrontLayer.batchDraw();
      };
      FrontImageProfile.src = PROFILE.image;

      var CreateNameKH = new Konva.Text({
          x: 100,
          y: 205,
          text: NAME_KM.text,
          fontSize: FONT_SIZE,
          fontFamily: "KhmerOSMoul",
          fontStyle:'bold',
          fill: COLOR,
          width: MAX_WIDTH,
          height: MAX_HEIGHT,
          name: "name_km",
          draggable: true
        }),
        CreateNameEN = new Konva.Text({
          x: 100,
          y: 226,
          text: NAME_EN.text,
          fontSize: FONT_SIZE,
          fontFamily: "NiDAKhmerEmpire",         
          fontStyle:'normal',
          fill: COLOR,
          width: MAX_WIDTH,
          height: MAX_HEIGHT,
          name: "name_en",
          draggable: true
        }),
        CreateGender = new Konva.Text({
          x: 100,
          y: 248,
          text: GENDER.text,
          fontSize: FONT_SIZE,
          fontFamily: "NiDAKhmerEmpire",
          fontStyle:'normal',
          fill: COLOR,
          width: MAX_WIDTH,
          height: MAX_HEIGHT,
          name: "gender",
          draggable: true
        }),
        CreateCourse = new Konva.Text({
          x: 100,
          y: 272,
          text: COURSE.text,
          fontSize: FONT_SIZE,
          fontFamily: "NiDAKhmerEmpire",
          fontStyle:'normal',
          fill: COLOR,
          width: MAX_WIDTH,
          height: MAX_HEIGHT,
          name: "course",
          draggable: true
        }),
        CreateId = new Konva.Text({
          x: 100,
          y: 292,
          text: ID.text,
          fontSize: FONT_SIZE,
          fontFamily: "NiDAKhmerEmpire",
          fontStyle:'normal',
          fill: COLOR,
          width: MAX_WIDTH,
          height: MAX_HEIGHT,
          name: "id",
          draggable: true
        }),

      CreateQrCode = new Image();
      CreateQrCode.onload = function() {
        var QrCodeImage = new Konva.Image({
          x: 350,
          y: 102,
          image: CreateQrCode,
          width: 70,
          height: 70,
          name: "qr",
          draggable: true
        });
        FrontLayer.add(QrCodeImage);
        FrontLayer.batchDraw();
      };
      CreateQrCode.src = QR_CODE.image;

      FrontLayer.add(CreateId);
      FrontLayer.add(CreateNameKH);
      FrontLayer.add(CreateNameEN);
      FrontLayer.add(CreateGender);
      FrontLayer.add(CreateCourse);
      FrontLayer.draw();

      stage.on("click tap dragmove", function(e) {
        // if click on empty area - remove all transformers      
        if (e.target === stage) {
          stage.find("Transformer").destroy();
          FrontLayer.draw();
          return;
        }
        var Position = e.target.getAbsolutePosition();    
        var Scale = e.target.getAbsoluteScale();    
         
        switch (e.target.getName()) {
          case 'id':
              ID = e.target.attrs;         
            break;       
          case 'profile':
              PROFILE = e.target.attrs;         
            break;        
          case 'name_km':
              NAME_KM = e.target.attrs;         
            break;   
          case 'name_en':
              NAME_EN= e.target.attrs;         
            break;    
          case 'gender':
              GENDER = e.target.attrs;         
            break;   
          case 'course':
              COURSE = e.target.attrs;         
            break;   
          case 'qr':
              QR_CODE = e.target.attrs;         
            break;        
          default:
            return;
            break;
        }
       // console.log(PROFILE)   
        // do nothing if clicked NOT on our rectangles
       stage.find("Transformer").destroy();
        
      
       
        // remove old transformers
        // TODO: we can skip it if current rect is already selected            
        // create new transformer
        var tr = new Konva.Transformer({     
          enabledAnchors: ['top-left', 'top-right', 'bottom-left', 'bottom-right'],
          rotateEnabled: false,
          keepRatio: true,
          boundBoxFunc: function(oldBoundBox, newBoundBox) {
            
            if (Math.abs(newBoundBox.width) > MAX_WIDTH) {
              return oldBoundBox;
            }        
            return newBoundBox;
          }
        });
  
       
        FrontLayer.add(tr);
        tr.attachTo(e.target);
        FrontLayer.draw();    
      });

      $('form').on('submit',function(e){
        e.preventDefault();
        var formData = new FormData(e.target);
           formData.append('profile',JSON.stringify(PROFILE));
           formData.append('name_km',JSON.stringify(NAME_KM));
           formData.append('name_en',JSON.stringify(NAME_EN));
           formData.append('gender',JSON.stringify(GENDER));
           formData.append('course',JSON.stringify(COURSE));
           formData.append('id',JSON.stringify(ID));
           formData.append('qr',JSON.stringify(QR_CODE));
        $.ajax({
          url:'/card/result',
          method:'POST',
          data:formData,
          processData : false,
          contentType:false,
          beforeSend:function(){
                 $('.row').append('<div class="proccessing"><div class="image"></div>');
                 $('.row').find('[type="submit"]').attr('disabled','disabled');                 
          },
          success :function(response){
            if(response.success){
              $('.row').css('width', '1210px').html('');   
              var all_cards = response.data;
                var j = 0;
                for(var i in all_cards){ 
                
                  var container = $("<div></div>");
                  var containerSpace = $("<div></div>").css('margin',100).addClass('col-md-12');
                    container.attr({
                      id: "stage-" + all_cards[i].id,
                      class : 'col-md-5'
                    });
                    if(j == 10){
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
                $('[id^="stage"]').css({
                  padding: '1px 1px 1px 1px',
                  border:'1px solid rgb(0,0,0,0.1)',
                  width: '503px',
                  margin : '1px'
                });
                $('.container').css({
                  marginTop: 30,
                  marginBottom: 10,
                });
                $('canvas').css({
                  border:'1px solid rgb(0,0,0,0.1)',
                })
            }else{
               return Swal.fire({
                            type: 'warning',
                            title: 'Oop!',
                            html: response.message,
                            showConfirmButton: true,
                  });
            }
            
          }
          
        })
      });
   


    </script>
  </body>
</html>
