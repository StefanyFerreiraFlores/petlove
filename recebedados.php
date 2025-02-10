<?php include_once 'config.php';

echo $nome =$_POST['nome'];
echo $email =$_POST['email'];
echo $senha =$_POST['senha'];

$sql="INSERT INTO cadastrotb(nome,email,senha) values('$nome','$email','$senha')";
if(mysqli_query($conn,$sql)){
    header("location:login.php");
}
else{
    echo "Deu erro". $sql. "<br>". mysqli_error($conn);
    }
mysqli_close($conn)
?>