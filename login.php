<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        	<!-- General meta information -->
                <title>Login</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<meta name="robots" content="index, follow" />
	
	<!-- // General meta information -->
	
	
	<!-- Load Javascript -->
	<script type="text/javascript" src="./js/jquery.js"></script>
	<script type="text/javascript" src="./js/jquery.query-2.1.7.js"></script>
	<script type="text/javascript" src="./js/rainbows.js"></script>
	<!-- // Load Javascipt -->

	<!-- Load stylesheets -->
        <link type="text/css" rel="stylesheet" href="css/style1.css" media="screen" />
	<!-- // Load stylesheets -->
	
        
        <link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
        <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
        <meta charset=utf-8 />
        <link rel="stylesheet" href="css/style1.css"/>
        <link rel="stylesheet" href="css/button.css"/>
      

<!-- Include JS File Here -->
<script type="text/javascript" src="js/Validation.js"></script>
        <script>
            
             function validateLoginForm()
	{
            
	var name = document.login_form.username.value;
        var password = document.login_form.password.value;
        //alert("Username "+name+"\nPassword : "+password);
	//var password = document.getElementById("password").value;
        
	if ( name === "" ){
	alert ("Enter Name");
	return false;
        }
        else if(password==="")
        {
            alert ("Enter Password");
            return false;
            
        }
      

}
</script>
<!--  script src="hover.js"></script  -->
        <style>
        article, aside, figure, footer, header, hgroup, 
        menu, nav, section { display: block; }
        </style>
    
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    
    <body background="Images/bgimg.jpg">
        <div id="header" style="width: 1335px; float:left; height:130px; background: #DCF0F7; margin:10px; padding:5px;">
            <img src="Images/logo.png" style="height:130px; width:250px;"/>
        </div>
        
        <div id="left" style="width: 845px; float:left; background: #DCF0F7; margin:10px; padding:5px;">about us
            <img src="Images/Ice Baby.jpg" height="400" width="400">
        </div>
        
        <div id="right" style="width: 440px; float:left; background: #DCF0F7; margin:10px; padding:5px;">
        
            <form id="Login" method="post" name="login_form" onsubmit="return validateLoginForm()" action="loginValidate.php">
            <div id="wrapper">
		<div id="wrappertop"></div>
                <div id="wrappermiddle">
                    <h3>Login</h3>
                    <div id="username_input">
                        <div id="username_inputleft"></div>
                            <div id="username_inputmiddle">
				<input type="text" name="username" id="username" Placeholder="E-mail Address" onclick="this.value = ''">
                                <br><br>
                                <img id="url_user" src="Images/mailicon.png" alt="">
                            </div>
                            <div id="username_inputright"></div>
                    </div>
                    <div id="password_input">
                        <div id="password_inputleft"></div>
                            <div id="password_inputmiddle">
				<input type="password" name="password" id="password" Placeholder="Password" onclick="this.value = ''">
                                    <br><br>
                                    <img id="url_password" src="Images/passicon.png" alt="">
                            </div>
                            <div id="password_inputright"></div>
                    </div>
                    <br>
                    <br>
                    <div class="hot-container1">
                        <p>
                        <br>
                        <button type="submit" id="submit" class="btn btn-blue">Log In</button>
                        
                        </p>
        
        
                        <div id="links_left">

                            <a href="forgot-password.php" >Forgot your Password?</a>

			</div>

                        <div id="links_right"><a href="Register.php">Not a Member Yet?</a></div>

                    </div>
	
                </div>
                <div id="wrapperbottom"></div>
                    <!-- content -->
                </div><!-- container -->

            </form>
        
        
        
        
    </body>
</html>
