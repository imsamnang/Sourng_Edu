!(function ($) {     
        jQuery.fn.extend({
          createCard: function (options) {
          var self = this,            
              card = {
                FrontImageBackgroud: new Image(),
                BackImageBackgroud: new Image(),
                DELTA: 2,
                SELECTED: false,
                CARD_FRONT: [],
                CARD_BACK: [],
                PROFILE: [],
                QR_CODE: [],
                ID: [],
                NAME_KM: [],
                NAME_EN: [],
                GENDER: [],
                COURSE: [],
                SETTINGS :[],
                // CreateLayout and send back
                stage: null,
                Background: new Konva.Layer(),
                Layer: new Konva.Layer(),
  
                init: () => {
                  $('#transform').unbind();
                  $('input[type="file"]').unbind();
                  $('form').unbind();
  
                  if (typeof options === 'object') {
                    card.CreateLayout($.extend(card.defaultSettings(), options)); 
                  }else{
                    card.CreateLayout(card.defaultSettings()); 
                  }
                  card.createEvent();  
                  card.result();    
                },
                defaultSettings: () => {
                  return {
                    transform: 'horizontal', // vertical and horizontal
                    container_width: 502,
                    container_height: 350,
                    max_width: 150,
                    max_height: 14,
                    font_size: 14,
                    text_color: '#23499E',
                  };
                },
                CreateLayout: (settings) => {
               
                  $('[id^="stage"]').css({
                    width : settings.transform == 'horizontal' ? 504 : 704,
                  });
               
                  card.SETTINGS = {
                      transform : settings.transform,
                      container_width : settings.transform == 'horizontal' ? 502 : 704,
                      container_height : settings.transform == 'horizontal' ? 350 : 250,    
                      max_width: settings.max_width,
                      max_height: settings.max_height,             
                      font_size : settings.font_size,
                      text_color : settings.text_color,
                    }
            
                  //Assign 
                  card.CARD_FRONT.image = settings.transform == 'horizontal' ? $(self).attr('data-card-front-250x350') : $(self).attr('data-card-front-350x250');
                  card.CARD_BACK.image = settings.transform == 'horizontal' ? $(self).attr('data-card-back-250x350') : $(self).attr('data-card-back-350x250');
                  card.PROFILE.image = $(self).attr('data-profile');
                  card.QR_CODE.image = $(self).attr('data-qr-code');
                  card.ID.text = '០០១';
                  card.NAME_KM.text = 'សែម គឹមសាន';
                  card.NAME_EN.text = 'SEM KEAMSAN';
                  card.GENDER.text = 'ប្រុស';
                  card.COURSE.text = 'ព័ត៌មានវិទ្យាសាស្រ្តកំព្យទ័រ';
                
               
                    card.stage = new Konva.Stage({
                      container: $(self).attr('id'),
                      width: card.SETTINGS.container_width,
                      height: card.SETTINGS.container_height
                    });
                    card.stage.add(card.Background);
                    card.stage.add(card.Layer);
                    card.Background.setZIndex(0);
                    card.Layer.setZIndex(1);
                   
                
                  
  
                  card.FrontImageBackgroud = new Image();
                  card.FrontImageBackgroud.onload = function () {
                    var BackgroundImage = new Konva.Image({
                      x: 0,
                      y: 0,
                      image: card.FrontImageBackgroud,
                      width: settings.transform == 'horizontal' ? 250 : 350,
                      height: settings.transform == 'horizontal' ? 350 : 250
                    });
                    card.Background.add(BackgroundImage);
                    card.Background.batchDraw();
                  };
                  card.FrontImageBackgroud.src = card.CARD_FRONT.image;
  
                  card.BackImageBackgroud = new Image();
                  card.BackImageBackgroud.onload = function () {
                    var BackgroundImage = new Konva.Image({
                      x: settings.transform == 'horizontal' ? 252 : 352,
                      y: 0,
                      image: card.BackImageBackgroud,
                      width: settings.transform == 'horizontal' ? 250 : 350,
                      height: settings.transform == 'horizontal' ? 350 : 250
                    });
                    card.Background.add(BackgroundImage);
                    card.Background.batchDraw();
                  };
                  card.BackImageBackgroud.src = card.CARD_BACK.image;
  
                  var FrontImageProfile = new Image();
                  FrontImageProfile.onload = function () {
                    var Profile = new Konva.Image({
                      x: settings.transform == 'horizontal' ? 90 : 20,
                      y: settings.transform == 'horizontal' ? 110 : 80,
                      image: FrontImageProfile,
                      width: 75,
                      height: 80,
                      name: "profile",
                      id: "profile",
                      draggable: true
  
                    }).on('transformstart', function (e) {
                      card.PROFILE = e.currentTarget.attrs;
                    }).on('transformend', function (e) {
                      card.PROFILE = e.currentTarget.attrs;
                    });
                    card.Layer.add(Profile);
                    card.Layer.batchDraw();
                  };
                  FrontImageProfile.src = card.PROFILE.image;
  
                  var CreateNameKH = new Konva.Text({
                    x: settings.transform == 'horizontal' ? 100 : 180,
                    y: settings.transform == 'horizontal' ? 205 : 80,
                    text: card.NAME_KM.text,
                    fontSize: card.SETTINGS.font_size,
                    fontFamily: "KhmerOSMoul",
                    fontStyle: 'bold',
                    fill: card.SETTINGS.text_color,
                    width: card.SETTINGS.max_width,
                    height: card.SETTINGS.max_height,
                    name: "name_km",
                    id: "name_km",
                    draggable: true,
  
                  }),
                    CreateNameEN = new Konva.Text({
                      x: settings.transform == 'horizontal' ? 100 : 180,
                      y: settings.transform == 'horizontal' ? 226 : 102,
                      text: card.NAME_EN.text,
                      fontSize: card.SETTINGS.font_size,
                      fontFamily: "NiDAKhmerEmpire",
                      fontStyle: 'normal',
                      fill: card.SETTINGS.text_color,
                      width: card.SETTINGS.max_width,
                      height: card.SETTINGS.max_height,
                      name: "name_en",
                      id: "name_en",
                      draggable: true
                    }),
                    CreateGender = new Konva.Text({
                      x: settings.transform == 'horizontal' ? 100 : 180,
                      y: settings.transform == 'horizontal' ? 248 : 122,
                      text: card.GENDER.text,
                      fontSize: card.SETTINGS.font_size,
                      fontFamily: "NiDAKhmerEmpire",
                      fontStyle: 'normal',
                      fill: card.SETTINGS.text_color,
                      width: card.SETTINGS.max_width,
                      height: card.SETTINGS.max_height,
                      name: "gender",
                      id: "gender",
                      draggable: true
                    }),
                    CreateCourse = new Konva.Text({
                      x: settings.transform == 'horizontal' ? 100 : 180,
                      y: settings.transform == 'horizontal' ? 272 : 148,
                      text: card.COURSE.text,
                      fontSize: card.SETTINGS.font_size,
                      fontFamily: "NiDAKhmerEmpire",
                      fontStyle: 'normal',
                      fill: card.SETTINGS.text_color,
                      width: card.SETTINGS.max_width,
                      height: card.SETTINGS.max_height,
                      name: "course",
                      id: "course",
                      draggable: true
                    }),
                    CreateId = new Konva.Text({
                      x: settings.transform == 'horizontal' ? 100 : 180,
                      y: settings.transform == 'horizontal' ? 292 : 166,
                      text: card.ID.text,
                      fontSize: card.SETTINGS.font_size,
                      fontFamily: "NiDAKhmerEmpire",
                      fontStyle: 'normal',
                      fill: card.SETTINGS.text_color,
                      width: card.SETTINGS.max_width,
                      height: card.SETTINGS.max_height,
                      name: "id",
                      id: "id",
                      draggable: true
                    }),
  
                    CreateQrCode = new Image();
                  CreateQrCode.onload = function () {
                    var QrCodeImage = new Konva.Image({
                      x: settings.transform == 'horizontal' ? 350 : 494,
                      y: settings.transform == 'horizontal' ? 102 : 40,
                      image: CreateQrCode,
                      width: 70,
                      height: 70,
                      name: "qr",
                      id: "qr",
                      draggable: true
                    });
                    card.Layer.add(QrCodeImage);
                    card.Layer.batchDraw();
                  };
                  CreateQrCode.src = card.QR_CODE.image;
  
                  card.Layer.add(CreateId);
                  card.Layer.add(CreateNameKH);
                  card.Layer.add(CreateNameEN);
                  card.Layer.add(CreateGender);
                  card.Layer.add(CreateCourse);
                  card.Layer.draw();
  
  
                },
             
                update: (e, x = false, y = false, operator = '-') => {  
                      if (x) {
                        if (operator == '-') {
                          card.stage.find('#' + e.target.getName())[0].x(card.stage.find('#' + e.target.getName())[0].x() - card.DELTA);
                        } else {
                          card.stage.find('#' + e.target.getName())[0].x(card.stage.find('#' + e.target.getName())[0].x() + card.DELTA);
                        }
                      } else if (y) {
                        if (operator == '-') {
                          card.stage.find('#' + e.target.getName())[0].y(card.stage.find('#' + e.target.getName())[0].y() - card.DELTA);
                        } else {
                          card.stage.find('#' + e.target.getName())[0].y(card.stage.find('#' + e.target.getName())[0].y() + card.DELTA);
                        }
                      }
  
  
                  switch (e.target.getName()) {
                    case 'id':                  
                      card.ID = e.target.attrs;
                      break;
                    case 'profile':                   
                      card.PROFILE = e.target.attrs;
                      break;
                    case 'name_km':                  
                      card.NAME_KM = e.target.attrs;
                      break;
                    case 'name_en':                   
                      card.NAME_EN = e.target.attrs;
                      break;
                    case 'gender':                   
                      card.GENDER = e.target.attrs;
                      break;
                    case 'course':                   
                      card.COURSE = e.target.attrs;
                      break;
                    case 'qr':                   
                      card.QR_CODE = e.target.attrs;
                      break;
                    default:
                      return;
                      break;
                  }      
                 
                },
                createEvent: () => {
                  $('input[type="file"]').on('input', function (e) {
                    var files = !!this.files ? this.files : [];
                    var getID = $(this).attr('id');
                    if (!files.length || !window.FileReader) return;
                    if (/^image/.test(files[0].type)) {
                      var Reader = new FileReader();
                      Reader.readAsDataURL(files[0]);
                      Reader.onload = function (e) {
                        if (getID === 'front_card') {
                          card.FrontImageBackgroud.src = e.target.result;
                        } else {
                          card.BackImageBackgroud.src = e.target.result;
                        }
  
                      };
                    }
                  });
  
  
                  $('body').on('keydown', function (e) {
                    if (card.SELECTED) {
                      if (e.keyCode === 37) {
                        card.update(card.SELECTED, true, false, '-');
                      } else if (e.keyCode === 38) {
                        card.update(card.SELECTED, false, true, '-');
                      } else if (e.keyCode === 39) {
                        card.update(card.SELECTED, true, false, '+');
                      } else if (e.keyCode === 40) {
                        card.update(card.SELECTED, false, true, '+');
                      }
  
                      e.preventDefault();
                      card.Layer.batchDraw();
                    }
  
                    return;
                  });
  
                  card.stage.on("click tap dragmove", function (e) {
                    // if click on empty area - remove all transformers    
  
                    if (e.target === stage) {
                      card.stage.find("Transformer").destroy();
                      card.Layer.draw();
                      return;
                    }
  
                  
                    // do nothing if clicked NOT on our rectangles
                    card.stage.find("Transformer").destroy();
                    if (!e.target.getName()) {
                      return;
                    }
  
                    card.SELECTED = e;
                    card.update(e);
  
                    // remove old transformers
                    // TODO: we can skip it if current rect is already selected            
                    // create new transformer
                    var tr = new Konva.Transformer({
                      enabledAnchors: ['top-left', 'top-right', 'bottom-left', 'bottom-right'],
                      rotateEnabled: false,
                      keepRatio: true,
                      boundBoxFunc: function (oldBoundBox, newBoundBox) {
  
                        if (Math.abs(newBoundBox.width) > MAX_WIDTH) {
                          return oldBoundBox;
                        }
                        return newBoundBox;
                      }
                    });
  
  
                    card.Layer.add(tr);
                    tr.attachTo(e.target);
                    card.Layer.draw();
                  });
  
                        
                    $('#transform').on('click',function(e){               
                      var transform = $(this).attr('data-transform');    
                      card.stage.clear()             
                      //card.stage.destroy();    
                
                      if(transform){
                        if(transform == 'horizontal'){
                          $(self).createCard({
                              transform: 'vertical',
                              create_event : true
                          });
                          $(this).attr('data-transform','vertical');
                        }else{
                          $(self).createCard({
                              transform: 'horizontal',
                              create_event : true
                            });
                          $(this).attr('data-transform','horizontal');
                        }
                      
                      }else{                     
                        if(options){
                          if(options.hasOwnProperty('transform')){
                            $(self).createCard({
                                transform: (options.transform =='horizontal') ? 'vertical'  : 'horizontal',
                                create_event : true
                              });
                            $(this).attr('data-transform',(options.transform =='horizontal') ? 'vertical'  : 'horizontal');     
                          }      
                        }else{
                          $(self).createCard({
                              transform: 'vertical',
                              create_event : true
                            });
                          $(this).attr('data-transform','vertical');
                        }
                      }                  
                   
                  });
         
                 
  
                },
  
                result : () => {                
                  $('form').on('submit', function (e) {
                    e.preventDefault();               
                    var formData = new FormData(e.target);                  
                    formData.append('card', JSON.stringify(card.SETTINGS));
                    formData.append('profile', JSON.stringify(card.PROFILE));
                    formData.append('name_km', JSON.stringify(card.NAME_KM));
                    formData.append('name_en', JSON.stringify(card.NAME_EN));
                    formData.append('gender', JSON.stringify(card.GENDER));
                    formData.append('course', JSON.stringify(card.COURSE));
                    formData.append('id', JSON.stringify(card.ID));
                    formData.append('qr', JSON.stringify(card.QR_CODE));
                    $.ajax({
                      url: $(self).attr('data-url-result'),
                      method: 'POST',
                      data: formData,
                      processData: false,
                      contentType: false,
                      beforeSend: function () {
                        $('body').css({
                          overflow:'hidden',
                          width : '100%',
                          height : '100%'
                        })                       
                        .append('<div class="proccessing"><div class="image"></div>');
                        $('body').find('[type="submit"]').attr('disabled', 'disabled');
                      },
                      success: function (response) {
                       

                        if (response.success) {
                          return location.assign($(self).attr('data-url-result'));
                         // $('.result').css('width', card.SETTINGS.transform == 'horizontal'? 1210 : 1410).html('');
                          $('body').addClass(response.card.transform == 'horizontal' ? 'landscape': 'vertical').removeAttr('style').html('');
                          var all_cards = response.data;
                          var j = 1;
                          for (var i in all_cards) {
  
                            var container = $("<div></div>");                         
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
  
                            all_cards[i] = Konva.Node.create(all_cards[i], "stage-" + all_cards[i].id);
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
                            margin: response.card.transform == 'horizontal' ? 'auto 1px' : 'auto 2mm',
                            width: card.SETTINGS.container_width,
                            display:  response.card.transform == 'horizontal' ? 'inline-block' : 'block',                       
                            height: response.card.transform == 'horizontal' ? (card.SETTINGS.container_height - 4 ): card.SETTINGS.container_height -1 
                          });     
                          
                          var print = $('<button></button>');
                                  print.attr({
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

                          $('body').append(print);

                        } else {
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
  
  
                }
              };
            card.init();
          }
  
        });
      })(jQuery);