<?php	
require 'model/customerModel.php';

if(!empty($_POST) && isset($_POST["email"])){
	$filled_post = array_filter($_POST);

if(count($filled_post) !== count($_POST)) {
	$error = "Veuillez remplir l'email ET le password,<br> s'il vous plaît !";
}
	exit();
}

require 'view/loginView.php';
?>