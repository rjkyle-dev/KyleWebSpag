<?php 

function show($data)
{
	echo "<pre>";
	print_r($data);
	echo "</pre>";
}
function views_path($view)
{
	if(file_exists("../$view.view.php")){
		return "../$view.view.php";

	}else{
		echo "view '$view' not found";
	}
}

function redirect($page)
{

	header("Location: index.php?kyle=" .$page);
	die;
}

function checkEmail($email){

      $checkEmail = new Database();

   $connection = $checkEmail ->openConnection();
  $stmt = $connection->prepare("SELECT * FROM users WHERE email =?");
  $stmt->execute([$email]);
  $content = $stmt->rowCount();

  return $content;

 }
