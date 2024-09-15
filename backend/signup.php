<?php


if($_SERVER['REQUEST_METHOD'] == "POST")
{

  $conn = new Database(); 


  $username = $_POST['username'];
  $email = $_POST['email'];
  $password= password_hash($_POST['password'], PASSWORD_DEFAULT);
  $c_password = $_POST['c_password'];

  if(checkEmail($email) == 0){

  $connection = $conn->openConnection();
  $stmt = $connection->prepare("INSERT INTO users(`username`,`email`,`password`) VALUES(:username, :email, :password)");
  $stmt->execute(['username'=>$username,'email'=>$email,'password'=>$password]);

  redirect ('login');
  }
  else{?>
   
    <script>
      alert('Email Already Exist!');
    </script>

    

  <?php }?>



	

	

<?php } 

require views_path('signup');

?>

