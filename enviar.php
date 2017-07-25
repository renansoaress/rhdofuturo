<?php
$nome = $_POST["nome"];
$email = $_POST["email"];
//$assunto = $_POST["assunto"];
$mensagem = $_POST["mensagem"];


if ($nome == "" || $email == "" || $mensagem == ""){
        echo "<script type='text/javascript'>
        alert('Preencha todos os campos!!!');
        window.location='index.html';
</script>";}
else if ($nome == "" && $email == "" && $mensagem == ""){
        echo "<script type='text/javascript'>
        alert('Preencha todos os campos!!!');
        window.location='index.html';
</script>";
}
        else{



$meu = "renansoares@live.com";


$msg .="Nome: $nome<br>";
$msg .="Email: $email<br>";
//$msg .="assunto: $assunto<br>";
$msg .="Mensagem: $mensagem<br>";
$formato = "\nContent-type: text/html\n";

mail("$meu","RHDOFUTURO: $nome","$msg", "from: ".$email.$formato);
echo "<script type='text/javascript'>
        alert('Mensagem Enviada com sucesso!');
        window.location='index.html';
</script>";
//header("location: index.html");
}




?>
