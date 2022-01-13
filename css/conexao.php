<?php 
define('HOST', '127.0.0.1');
define('USUARIO', 'root');
define('SENHA', 'sm1ct2021');
define('DB', 'Usuario');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possivel se conectar');