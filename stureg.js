$(function() {     

    //alert("page loaded");
    $('#reg').submit(function(event) {

      var captchResponse = $('#g-recaptcha-response').val();
      if(captchResponse.length == 0 ){

         alert("please check I'm not a robot");

      }
    
      else {
       
        document.getElementById('loading').style.display = 'block';
       
       
       $.ajax( {
  type: 'POST',
  url: 'stureg.php',
  data: new FormData( this ),
  processData: false,
  contentType: false,
  cache: false,
  success:function(result){                     
                    alert(result);  
                    document.getElementById('loading').style.display = 'none';
                    document.getElementById("reg").reset(); }
  });
      }   

     

   
    });

}); 