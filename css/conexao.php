<?php 
define('HOST', '127.0.0.1');
define('USUARIO', 'root');
define('SENHA', 'sm1ct2021');
define('COP', 'login');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, COP) or die ('Não foi possivel conectar');