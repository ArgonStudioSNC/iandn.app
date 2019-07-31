$(document).ready(function(){
    setInterval(function(){
       $.ajax({
          url:'/paparazzi/flux',
          type:'GET',
          dataType:'json',
          success:function(response){
            console.log(response.post.priority);
            var url = "/paparazzi/" + response.post.id + "/p/full";
             $('#fullscreen-img').attr('src', url);
          },error:function(err){

          }
       })
    }, 5000);
});
