<script>
  $(document).ready(function(){
  //positive integer only     
  // distrct get data by provice change
    var flag = $('#flag').val();
    $('#province').change(function(){
      var provinceID = $(this).val();
      if(flag=='kh'){
        var url = "{{url('get-district-list-kh')}}?province_id="+provinceID;
        var appDistrict = '<option value="0" data-value="">ជ្រើសរើស ខ័ណ្ឌ/ស្រុក</option>';
        var appCommune = '<option value="0" data-value="0">ជ្រើសរើស សង្កាត់/ឃុំ</option>';
      }
      if(flag=='en'){
        var url = "{{url('get-district-list')}}?province_id="+provinceID;
        var appDistrict = '<option value="0" data-value="">Select a Khan/District</option>';
        var appCommune = '<option value="0" data-value="0">Select a Sangkat/Commune</option>';
      }
      if(provinceID>=1){
        $.ajax({
         type:"GET",
         url:url,
         success:function(res){               
          if(res){
            // $("#district").removeAttr('disabled');
            $("#district" ).prop( "disabled", false );
            $("#district").empty();
            $("#district").append(appDistrict);
            $.each(res,function(key,value){
              $("#district").append('<option value="'+key+'">'+value+'</option>');
            });           
          }else{
               $("#district").empty();
               $("#district" ).prop( "disabled", true );
               $("#commune" ).prop( "disabled", true );
            }
          }
        });
      } else {
        $("#district").empty();
        $("#commune").empty();
        $("#district").append(appDistrict);
        $("#commune").append(appCommune);
        $("#district" ).prop( "disabled", true );
        $("#commune" ).prop( "disabled", true );
      }      
    });
  // commune get data by district change    
    $('#district').on('change',function(){
      var districtID = $(this).val();
      if(flag=='kh'){
        var url = "{{url('get-commune-list-kh')}}?district_id="+districtID;
        var appDistrict = '<option value="0" data-value="">ជ្រើសរើស ខ័ណ្ឌ/ស្រុក</option>';
        var appCommune = '<option value="0" data-value="0">ជ្រើសរើស សង្កាត់/ឃុំ</option>';        
      }      
      if(flag=='en'){
        var url = "{{url('get-commune-list')}}?district_id="+districtID;
        var appDistrict = '<option value="0" data-value="">Select a Khan/District</option>';
        var appCommune = '<option value="0" data-value="0">Select a Sangkat/Commune</option>';
      }
      if(districtID>=1){
        $.ajax({
         type:"GET",
         url:url,
         success:function(res){               
          if(res){
            $("#commune" ).prop( "disabled", false );
            $("#commune").empty();
            $("#commune").append(appCommune);
            
            $.each(res,function(key,value){
              $("#commune").append('<option value="'+key+'">'+value+'</option>');
            });
            
          }else{
           $("#commune").empty();
           $("#commune" ).prop( "disabled", true );
         }
       }
     });
      }else{
        $("#commune").empty();
        $("#commune").append(appCommune);
        $("#commune" ).prop( "disabled", true );
      }        
    });
  });   
</script>