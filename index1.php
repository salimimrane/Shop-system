<!DOCTYPE html>
<html lang="en" >

<head>
	<meta name="viewport" content="width=device-width,height=device-height, initial-scale=1, shrink-to-fit=yes">
  <meta charset="UTF-8">
  <title>Login Form</title>

  <link rel="stylesheet" type="text/css" href="./css/style.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>

<body id="LoginForm">
	<center >
<div class="container"style="width:50%;margin-top: 10%;margin-right: 10%margin-left:10%">
<h1 class="form-heading"></h1>
<div class="login-form">
<div class="main-div">
    <div class="panel">
   <h2>Login</h2>
   <p>Please enter your email and password</p>
   </div>
    <form method="POST" action="connect.php" >	
        <div class="form-group">


            <input type="email" class="form-control" id="user" name="user"placeholder="Email Address">

        </div>

        <div class="form-group">

            <input type="password" class="form-control" id="password" name="password" placeholder="Password">

        </div>
        <table>
          <tr>
            <button type="submit" class="btn btn-primary" name="signin" style="width:48%; margin:1%">sign in</button>            
          </tr>
          <tr>
            <button type="submit" class="btn btn-primary" name="signup" style="width:48%; margin:1%">sign up</button>
          </tr>
          <tr>
            
          </tr>
        </table>
        <div class="alert alert-danger" role="alert" style="width:100%">
              Username/Password is wrong
        </div>

    </form>
    </div>
</div></div></div>

</center>
</body>

</html>
