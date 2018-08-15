<?php
//login.php

include("database.php");

if(isset($_COOKIE["type"]))
{
    header("location:index.php");
}

$message = '';

if(isset($_POST["login"]))
{
    if(empty($_POST["email"]) || empty($_POST["password"]))
    {
        $message = "<div class='alert alert-danger'>Espacios Requeridos</div>";
    }
    else
    {
        $query = "
  SELECT * FROM user_details 
  WHERE user_email = :user_email
  ";
        $statement = $connect->prepare($query);
        $statement->execute(
            array(
                'email' => $_POST["email"]
            )
        );
        $count = $statement->rowCount();
        if($count > 0)
        {
            $result = $statement->fetchAll();
            foreach($result as $row)
            {
                if(password_verify($_POST["password"], $row["password"]))
                {
                    setcookie("type", $row["user_type"], time()+3600);
                    header("location:index.html");
                }
                else
                {
                    $message = '<div class="alert alert-danger">Contraseña Incorrecta</div>';
                }
            }
        }
        else
        {
            $message = "<div class='alert alert-danger'>Correo electronico Incorrecto</div>";
        }
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<?php if(!empty($message)): ?>
    <p> <?= $message ?></p>
<?php endif; ?>

<h1>Login</h1>
<span>or <a href="signup.php">SignUp</a></span>

<form action="login.php" method="POST">
    <input name="email" type="text" placeholder="Enter your email">
    <input name="password" type="password" placeholder="Enter your Password">
    <input type="submit" value="Submit">
</form>
</body>
</html>