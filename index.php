<?php

$to="dp.rahman@gmail.com";
$subject = "Wonderful Subj";
$message="My message";


if(mail($to,$subject,$message)){
	echo "Send";
}else{
	echo "Failed";
}
