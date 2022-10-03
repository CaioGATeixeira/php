<?php // senha.php
echo $login; echo $senha;
if($_POST['login'] =='Aluno' && $_POST['senha'] =='12345'){
   session_start();
   session_name('secreta');
   $_SESSION['login'] = $login;
   $_SESSION['validacao'] = 'abba';
   header("Location: avatar.html");
}else{
  echo "Algo deu errado com seu login ou senha, por favor tente novamente.";
}
?>



