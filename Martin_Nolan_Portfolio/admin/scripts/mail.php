<?php

  function redirect_to($location) {
    if($location != NULL){
      header("Location: {$location}");
      exit;

    }

  }

function submitMessage($name, $email, $message, $direct){
$to = "n_martin21@fanshaweonline.ca";
$subj = "Message from customer submitted via your contact page";
$extra = "Reply-To: ".$email;
$msg = "Name: " .$name."\n\nEmail:".$email."\n\nComments: ".$message;
mail($to,$subj,$msg,$extra);

$direct = $direct."?name={$name}";
redirect_to($direct);

//unless MAMP is set up for email this WILL NOT WORK.

}

 ?>