<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>.:Calculo IMC:.</title>
</head>

<body>
<div align="center">
<?php
$nome = $_POST['nome'];
$peso = $_POST['peso'];
$altura = $_POST['altura'];
$altura = bcpow($altura, 2, 2);
$massa = $peso / $altura;
$massa = round($massa);
if($massa < 20) {
$mensagem = "Você está magro.";
"<img src='imagens/gorda.jpg'>"."<br>";
}elseif(($massa > 20) and ($massa < 25)) {
$mesagem = "Você está no peso ideal.";
echo "<img src='imagens/saudavel.jpg'/>"."<br>";
}else{
$mesagem = "Você está acima do peso.";
echo "<img src='imagens/gorda.jpg'>"."<br>";
}

echo "$nome, Sua massa corporal é: <b>$massa</b> <br>";
echo "Estado atual: <b>$mesagem</b>"
?>

<br>
<a href="index.html"><<< Volta a pagina anterior...</a>
</div>
</body>
</html>