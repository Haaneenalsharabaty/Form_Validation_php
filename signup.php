


<!DOCTYPE html>
<?php
session_start();
// session_destroy();
if($_SERVER['REQUEST_METHOD']='POST'){
    // if ($_POST['password'] != $_POST['conpassword']) {
    //     echo "passwords do not match! <br>";
    // }
    // if (strlen($_POST['password']) < 9) {
    //     echo " Passwords need to be 9 characters or more";
    // }
    if ($_POST['password'] == $_POST['conpassword'] && strlen($_POST['password']) >8) {
       
        header('Location:login.php');
    }


    $_SESSION['users'][]=
    ["email"=>$_POST["email"],
    "password"=>$_POST["password"],
    "Username"=>$_POST["Username"]];
    // print_r($_SESSION["users"]);
    // header('Location:login.php');
    
}


// $userarray=[];

// if(isset($_POST["email"])){
 
//     $newuser=["email"=>$_POST["email"],"password"=>$_POST["password"],"Username"=>$_POST["Username"]];
//     if (isset($_SESSION["users"])){
//         array_push($userarray,$newuser,...$_SESSION["users"]);
//         $_SESSION["users"]=$userarray;
//     }else{
//         array_push($userarray,$newuser);
//         $_SESSION["users"]=$userarray;
//     }
//     
//     
// }




?>
<html>
<head>
<title> SignUp Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="signup.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<!-- //web font -->
</head>
<body>
	<!-- main -->
	<div class="main-w3layouts wrapper">
		<h1>Creative SignUp Form</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form action="/formproject/signup.php" method="post" id="sign-up-form" >
					
            <input class="text" id="text"  type="text" name="Username" placeholder="Username" required="">
            <span id="username"></span>
					<input class="text email" id="text email" type="text" name="email" placeholder="Email" required="">
                    <span id="mail"></span>
					<input class="text" id="pass1" type="password" name="password" placeholder="Password" required="">
                    <span id="pass0"></span>
					<input class="text w3lpass" id ="conpassword"  type="password" name="conpassword" placeholder="Confirm Password" required="">
                    <span Id="pass00"></span>
					<div class="wthree-text">
						<label class="anim">
							<input type="checkbox" class="checkbox" required="">
							<span>I Agree To The Terms & Conditions</span>
						</label>
						<div class="clear"> </div>
					</div>
					<input type="submit" id="submit"  value="SIGNUP">
				</form>
				<p>Do you have an Account? <a href="/formproject/login.php"> Login Now!</a></p>
			</div>
		</div>
		
		<ul class="colorlib-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
	<!-- //main -->
     <script>

let form=document.getElementById("sign-up-form");
let username= document.getElementById("text");
let username_error = document.getElementById("username");
let email = document.getElementById("text email");
let mail_erorr = document.getElementById("mail");
let password = document.getElementById("pass1");
let pass_error = document.getElementById("pass0");
let password2= document.getElementById("conpassword");
let pass2 = document.getElementById("pass00");
 form.addEventListener("submit", validate); 
 ;
 

function validate(e) { 
    if (username.value.length<6 || username.value.lenght>16) {
        username_error.innerText = "the Name must be between 5 and 16 e characters long";
        username.style.border = " 1px solid red";
        username_error.style.color = "red";
        e.preventDefault();
        
      
    }else {
        username_error.innerText = "okay";
        username_error.style.color ="green";
        username.style.border = " 1px solid green";
        console.log("h")
      
    }


    if  (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email.value)) {
        mail_erorr.innerText = "okay";
        mail_erorr.style.color ="green";
        email.style.border = " 1px solid green";
       
     

        
      
    }else {
        e.preventDefault();
        mail_erorr.innerText = "the email format is not valid";
        email.style.border = " 1px solid red";
        mail_erorr.style.color = "red";
      
       
      
    }


    if (password.value.length<9 || password.value.lenght>16) {
        pass_error.innerText = "the password must be between 9 and 16 e characters long";
        password.style.border = " 1px solid red";
        pass_error.style.color = "red";
        e.preventDefault();
      
      
    }else {
        pass_error.innerText = "okay";
        pass_error.style.color ="green";
        password.style.border = " 1px solid green";
   
     
    }



    if(password.value!==password2.value){
        pass2.innerText = "the passwords is not match";
        password2.style.border = " 1px solid red";
        pass2.style.color = "red";
        e.preventDefault();
   
    }
    else{
        pass2.innerText = "okay";
        pass2.style.color ="green";
        password2.style.border = " 1px solid green";
       
    }
    
 }

    </script>
</body>
</html>

