<?php


require_once("admin/scripts/load.php");
if(isset($_POST['submit'])){
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$street = $_POST['street'];
$direct = "index.php";

if($street ==="") {
$sendMail = submitMessage($name, $email, $message, $direct);
//echo "street is empty";
}
}


?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Contact Me</title>
</head>
<body>
    <form action="contact.php" method="post">
    <!--Make sure to give each input a name attribute(name="")-->
       <label>Name: </label><input name="name" type="text" size="21" maxlength="30" />
       <label>Email: </label><input name="email" type="text" size="21" maxlength="30" />
       <label for="street">Number: </label><input class="street" name="street" type="text" size="21" maxlength="30" />
       <label for="message">Message: </label><textarea name="message"></textarea>
       <input name="submit" type="submit" value="Send" />
    </form>
</body>
</html>
