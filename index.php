<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <header class="header">
       <a href="index.php"> <h1 class="title">LOG IN</h1> </a>
    </header>

    <form action="#" method="post">
        <div class="user-input">
            <label for="username">Username:</label>
            <input type="text" name="username" id="username">
            
        </div>

        <div class="password-input">
            <label for="password">Password:</label>
            <input type="password" name="password" id="password">
            
        </div>

        <input type="submit" value="Enviar" name="Enviar">
    </form>

    <footer></footer>

    <?php
        if(isset($_POST["Enviar"])){
            if($_POST["username"] == "Admin" && $_POST["password"] == "1234"){
                header("Location: site.php");
            }
            else{
                header("Location: sorry.php");
            }
        }
    ?>
</body>
</html>