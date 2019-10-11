$(document).ready(function(){
    setInterval(function(){
       $.ajax({
          url:'/paparazzi/flux',
          type:'GET',
          dataType:'json',
          success:function(response){
            var url = "/paparazzi/" + response.post.id + "/p/full";
             $('#picture img').attr('src', url);
             $('#post .username').html(response.post.username);
             $('#post .comment').html(response.post.comment);
             $('#post .timestamp').html(response.post.created_at);
          },error:function(err){

          }
       })
   }, 8000);
});
