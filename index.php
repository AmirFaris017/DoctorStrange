 <?php
 $host = 
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $address = $_POST['address'];


    $conn = new mysqli('localhost','root','',homestay);
    if($conn->connect_error){
    die('Connection Failed : ' $conn->connect_error);
    }else
        $stmt = $conn->prepare("insert into registration(username,email,password,address)")values (?,?,?,?)");    
?>
    -->