
$( document ).ready(function() {
//----------------------------------------------------------------------------
coments();
     function coments(){  $.ajax({
           url: "Ajax/getComments.php", 
           success: function(data){
               var content="<div class='comentarii'>";

               for (var i = 0; i < data.length; i++) {
            var comentariu=data[i];
            
            content+="<h1>"+comentariu[0]+"</h1>";
            content+="<p>"+comentariu[1]+"</p>";
            content+="<p>"+comentariu[2]+"</p>";
        }
                    
               content += "</div>";
               
               $(".content").html(content);

           }

       });}
      /*-------------------------------------------------------------*/
      
      $(".btn.btn-success").on("click", function(e){
          e.preventDefault();
           $.ajax({
                url: "Ajax/addComments.php",
                data: $("#form").serialize(),
                method: "POST",
                success: function(){
                    coments();
                }
            });
          
          
      });
      
    });