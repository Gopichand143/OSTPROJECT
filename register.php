<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<?php
$message="";
if(count($_POST)>0) {
	if(!empty($_POST["userName"]))
	
	{
		$conn = mysqli_connect("localhost","root","","one_step_shop");
		$cmdText = "insert into register (username,Firstname,Lastname,Email,Password) values ('" . $_POST["userName"] . "','" . $_POST["FirstName"] . "','" . $_POST["LastName"] . "','" . $_POST["email"] . "','".$_POST["password"]."')" ;
		
		$result = mysqli_query($conn,$cmdText);
		if (!$result) {
			$message = "Error: Please select different username";
		} else {
			
			$message = "Record is successfully uploaded.";
			header("Location: login.php");
		}
	}
	
	
}
?>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Colorlib">
    <meta name="description" content="#">
    <meta name="keywords" content="#">
    <!-- Page Title -->
    <title>Find Places</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700,900" rel="stylesheet">
    <!-- Simple line Icon -->
    <link rel="stylesheet" href="css/simple-line-icons.css">
    <!-- Themify Icon -->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- Hover Effects -->
    <link rel="stylesheet" href="css/set1.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="css/style.css">
	<style>
	body{
	font-family: calibri;
}
.tblLogin {
	border: #95bee6 1px solid;
    background:white;
    border-radius: 4px;
}
.tableheader { font-size: 24px; }
.tableheader td { padding: 20px; }
.tablerow td { text-align:center; }
.message {
	color: #FF0000;
	font-weight: bold;
	text-align: center;
	width: 100%;
}
.login-input {
	border: #CCC 1px solid;
    padding: 10px 20px;
}
.btnSubmit {
	padding: 10px 20px;
    background: #2c7ac5;
    border: #d1e8ff 1px solid;
    color: #FFF;
}
	</style>
</head>

<body>
  
    <section class="main-block light-bg">
        
        <div class="container">
            <div class="row">
                <div class="col-md-12">
               <form name="frmUser" method="post" action="" class="form">
					<div class="message"><?php if($message!="") { echo $message; } ?></div>
						<table border="0" cellpadding="10" cellspacing="1" width="500" align="center" class="tblLogin">
							<tr class="tableheader">
							<td align="center" colspan="2">Enter Register Details</td>
							</tr>
							<tr class="tablerow">
							<td>
							<input type="text" name="userName" required placeholder="User Name" class="login-input"></td>
							</tr>
                            <tr class="tablerow">
                            <td>
                            <input type="text" name="FirstName" required placeholder="First Name" class="login-input"></td>
                            </tr>
                            <tr class="tablerow">
                            <td>
                            <input type="text" name="LastName" required placeholder="last Name" class="login-input"></td>
                            </tr>
							
							
							
							
								<tr class="tablerow">
							<td>
							<input type="email" required name="email" placeholder="Email" class="login-input"></td>
							</tr>
                            <tr class="tablerow">
                                <td>
                                    <input type="password" required name="password" placeholder="Password" class="login-input"></td>
                                </tr>
							<tr class="tableheader">
							<td align="center" colspan="2"><input type="submit" name="submit" value="Submit" class="btnSubmit"></td>
							</tr>
						</table>
				</form>
                </div>
            </div>
           
        </div>
    </section>
    


    <!-- jQuery, Bootstrap JS. -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script>
        $('.fixed').addClass('is-sticky');
    </script>
</body>

</html>
