<?php include_once "config.php"; ?>
<?php

    $email= $_POST['email'];
    $senha = $_POST['senha'];
    $sql = "SELECT * FROM cadastrotb WHERE email = '$email' and senha ='$senha'";
    $resultado = mysqli_query($conn,$sql);
    $linha  = mysqli_fetch_array($resultado);
    if ($linha){
        header("Location: .petlove/agenda/index.php") ; 
    }
    else{
        echo "deu erro". $sql . "<br>" . mysqli_error($conn);
    } 
    
?>