<?php 

$data = array(
	"empresa"=>"Hcode Treinamentos"
);
//criamos cookie (nome, o que contem, tempo de duração tempo atual + segundos)
setcookie("NOME_DO_COOKIE",json_encode($data),time()+3600);
echo "OK";
 ?>