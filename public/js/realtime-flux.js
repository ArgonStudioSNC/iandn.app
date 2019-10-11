$(document).ready(function(){
    setInterval(function(){
       $.ajax({
          url:'/paparazzi/flux',
          type:'GET',
          dataType:'json',
          success:function(response){
            $('#post').fadeOut(300, function(){


                            var url = "/paparazzi/" + response.post.id + "/p/full";
                             $('#picture img').attr('src', url);
                             $('#post .username').html(response.post.username);
                             $('#post .comment').html(response.post.comment);
                             $('#post .timestamp').html(response.post.created_at);
                setTimeout(function(){
                $('#post').fadeIn(300);
            }, 300);
            });

          },error:function(err){

          }
       })
   }, 8000);
});
