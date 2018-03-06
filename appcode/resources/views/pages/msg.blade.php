<html>
<head>
<link rel="stylesheet" type="text/css" href="\convo\css\msg.css">

<link href="https://fonts.googleapis.com/css?family=Raleway:200,100,400" rel="stylesheet" type="text/css" />

</head>
<title>
    Convo-User-Dashboard
</title>

    <body>
    
    <div id="contact">
     <header>Users</header>
     <main>
      <ul> 
          <li id="Prashant"><a href="#">Prashant</a></li> 
          <li id="Katrina"><a href="#">Katrina</a></li>
          <li id="Priyanka"><a href="#">Priyanka</a></li>
          <li id="Kareena"><a href="#">Kareena</a></li>
          <li id="Anushka"><a href="#">Anushka</a></li>
      </ul>
     </main>
  </div>  
  <div id="chat"></div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>

<script>
var username = 'user201';
$(document).ready(function(){
        $('a').click(function(e) {
            e.preventDefault();
        var targetUser = ($(this).html());
        $(document).data('chat.targetUser', targetUser);
  
        var user = '<div class="user open" id="' + targetUser + '"><header><div class="status"></div><div class="header-text">' + targetUser + '</div><div class="close">&times;</div></header><div class="message-area"></div><div class="input-area"><input type="text" id="input" /></div></div>';
     
        $(document).on('click', '.close', function(){
            $(".user.open").hide();
        });

        $('#chat').append(user); 
        });

        $('#chat').on('keydown', '#input', function(event) {
        if (event.keyCode == 13) {
            var targetUser = $(document).data('chat.targetUser');
            var txt = $(this).val();
            $('#' + targetUser + ' .message-area').append(username + ': ' + txt + '<br/>');
            $(this).val('');
        }
        
    });
   
});
</script>
 
    </body>

</html>

