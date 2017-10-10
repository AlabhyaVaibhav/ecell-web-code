$(function() {     

    //alert("page loaded");
    $('#newsletterForm').submit(function(event) {        
       
       $.ajax( {
  type: 'POST',
  url: 'php/add_newsletter.php',
  data: new FormData( this ),
  processData: false,
  contentType: false,
  cache: false,
  success:function(result){                     
                    alert(result);
                 }
});

    //next line: end of ajax
    });
//next line: end of script
}); 