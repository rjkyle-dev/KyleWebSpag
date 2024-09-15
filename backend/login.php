<?php


if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
    
    $conn = new Database(); 
    $connection = $conn->openConnection();

  
    $email = $_POST['email'];
    $password = $_POST['password'];

   
    $stmt = $connection->prepare("SELECT password FROM users WHERE email = :email");
    $stmt->execute(['email' => $email]);
    

    $data = $stmt->fetch(PDO::FETCH_ASSOC);

   
    if ($data && password_verify($password, $data['password'])) {
        
        redirect('home'); 
               
    }else{?>
   
    <script>
      alert('Invalid Email or Password!');
    </script>

  <?php }?>



	

	

<?php } 
 

require views_path('login');

?>
