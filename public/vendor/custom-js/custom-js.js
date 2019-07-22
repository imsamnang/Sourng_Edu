(function($) {
  var THIS_PAGES = {
    init: function() {
      THIS_PAGES.forms();
      THIS_PAGES.delete();
      THIS_PAGES.image();
    },
    forms: function() {
      (function() {
        var e = $("form#validation-form");
        e.length &&
          e.each(function() {
            var self = $(this),
                url = self.attr("data-url");

            self.attr("action", url)
              .removeAttr("data-url")
              .on("submit", function(form) {
                form.preventDefault();
                var formData = new FormData(form.target);
                $.ajax({
                  url: url,
                  method: "POST",
                  data: formData,
                  processData: false,
                  contentType: false,
                  success: function(data) {
                    return swal.fire({
                      title: data.message.title,
                      text: data.message.text,
                      type: "success",
                      buttonsStyling: !1,
                      confirmButtonClass: "btn btn-success",
                      confirmButtonText: data.message.button.confirm
                    });
                  },
                  error: function(error) {
                    var data = error.responseJSON;
                    return swal.fire({
                      title: data.message.title,
                      text: data.message.text,
                      type: "error",
                      buttonsStyling: !1,
                      confirmButtonClass: "btn btn-warning",
                      confirmButtonText: data.message.button.confirm
                    });
                  }
                });
              });
          });
      })();
    },
    delete: function() {
      (function() {
        var e = $('[data-toggle="alert-delete"]');
        e.length &&
          e.each(function() {
            $(this).on("click", function(e) {
              e.preventDefault();
              var self = $(this);
              (url = self.attr("href")),
                (id = self.attr("data-id")),
                (_token = $('meta[name="_token"]').attr("content"));

              $.get(url)
                .done(function(data) {
                  console.log(data);
                })
                .fail(function(error) {
                  var data = error.responseJSON;
                  swal
                    .fire({
                      title: data.message.title,
                      text: data.message.text,
                      type: "warning",
                      showCancelButton: !0,
                      buttonsStyling: !1,
                      confirmButtonClass: "btn btn-danger",
                      confirmButtonText: data.message.button.confirm,
                      cancelButtonClass: "btn btn-secondary",
                      cancelButtonText: data.message.button.cancel
                    })
                    .then(e => {
                      if (e.value) {
                        var formData = new FormData();
                        formData.append("id", id);
                        formData.append("_token", _token);
                        $.ajax({
                          url: url,
                          method: "POST",
                          data: formData,
                          processData: false,
                          contentType: false,
                          success: function(data) {
                            if (data.success) {
                              self.parents("tr").remove();
                              swal.fire({
                                title: data.message.title,
                                text: data.message.text,
                                type: "success",
                                buttonsStyling: !1,
                                confirmButtonClass: "btn btn-primary",
                                confirmButtonText: data.message.button.confirm
                              });
                            }
                          },
                          error: function(erorr) {
                            var data = erorr.responseJSON;
                            swal.fire({
                              title: data.message.title,
                              html: data.errors + "<br>" + data.message.text,
                              type: "error",
                              buttonsStyling: !1,
                              confirmButtonClass: "btn btn-warning",
                              confirmButtonText: data.message.button.confirm
                            });
                          }
                        });
                      }
                    });
                });
            });
          });
      })();
    },
    image:function(){
        var e = $('[type="file"]');       
            e.length &&
            e.each(function(){               
                $(this).on('input',function(files){
                    var target = $(this).attr('data-target');
                    THIS_PAGES.imageView(files.target.files , target); 
                });
            });
    },
    imageView:function(files,target = false){    
      
        if (window.File && window.FileReader && window.FileList && window.Blob) {                  
          for (var i = 0; i <files.length; i++) {
            var file = files[i];           
            var reader  = new FileReader();
                if (file.type.match('image.*')){ 
                  reader.onload = (function (file) {  
                    return function(e) { 
                      // console.log("Filename: " + file.name);
                      // console.log("Type: " + file.type);
                      // console.log("Size: " + file.size + " bytes");                                  
                      // console.log("file in base64: " + e.target.result );
                      // console.log("file in blob : "+ window.URL.createObjectURL(file));                         
                      if(target){
                       var img = $('img#'+target);
                           img.length &&
                           img.attr('src',window.URL.createObjectURL(file));
                      }                    
                    } 
                  })(file)
                   reader.readAsDataURL(file);          
                }
            }
        }
      }
  };
  THIS_PAGES.init();
})(jQuery);
