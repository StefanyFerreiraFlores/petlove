<?php include_once "config.php"; ?>
<?php

    echo $email= $_POST['email'];
    echo $senha = $_POST['senha'];
    echo $sql = "SELECT * FROM cadastrotb WHERE email = '$email' and senha ='$senha'";
    $resultado = mysqli_query($conn,$sql);
    $linha  = mysqli_fetch_array($resultado);
    if ($linha){
        header("Location: index.php") ; 
    }
    else{
        echo "deu erro". $sql . "<br>" . mysqli_error($conn);
    } 
    
?>