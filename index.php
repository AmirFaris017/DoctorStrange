<!-- <?php
    $username = $_POST['username'];
    $username = $_POST['email'];
    $username = $_POST['password'];
    $username = $_POST['address'];


    $conn = new mysqli('localhost','root','',homestay);
    if($conn->connect_error){
    die('Connection Failed : ' $conn->connect_error);
    }else

        $stmt = $conn->prepare("insert into registration(username,email,password,address)")values (?,?,?,?)");

    
    
?>
    -->