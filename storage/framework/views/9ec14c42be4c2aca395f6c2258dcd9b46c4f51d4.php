<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="LoginPage" content="width=device-width, initial-scale=1">

        <title> LOGIN </title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <head>
            <style>
                .a1 {
                    color: blueviolet;
                    background-color: red;
                    text-align: center;
                    text-shadow: 2px 2px black;
                    
                }
                .log {
                    background-color: gray;
                    text-align: center;
                }
                .foot1 {
                    margin-top: 16%;
                    margin-left: 1%;
                }
                .container {
                    text-align: center;
                }
            </style>

        <h2 class="a1"> 
            FACA LOGIN PARA CONTINUAR
            </h2>

        </head>

        <body>

        <h1 class="log">PAGINA DE LOGIN<h1>
                <br>
  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>
                <br>
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
                <br>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
                <br>
    <button type="submit">Login</button>
    <button type="button" class="cancelbtn">Cancel</button>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>

        </body>
            <footer class="foot1">
            
            
<?php
echo 'this is a simple string';

echo 'You can also have embedded newlines in
strings this way as it is
okay to do';

// Outputs: Arnold once said: "I'll be back"
echo 'Arnold once said: "I\'ll be back"';

// Outputs: You deleted C:\*.*?
echo 'You deleted C:\\*.*?';

// Outputs: You deleted C:\*.*?
echo 'You deleted C:\*.*?';

// Outputs: This will not expand: \n a newline
echo 'This will not expand: \n a newline';

// Outputs: Variables do not $expand $either
echo 'Variables do not $expand $either';
?>


    <a href="/"><img src="https://d29fhpw069ctt2.cloudfront.net/icon/image/37948/preview.svg" width="50" height="25">RETORNAR</a>
            </footer><?php /**PATH /home/ayala/TESTELARAVEL/resources/views/login.blade.php ENDPATH**/ ?>