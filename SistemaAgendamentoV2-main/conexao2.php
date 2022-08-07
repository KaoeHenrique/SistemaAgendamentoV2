<?php
//Conexao do banco de dados
function conectar(){
    $pdo = new PDO('mysql:host=localhost:3307;dbname=site_agenda2', 'root', '') or die("Não foi possível conectar");
    return $pdo;


}
?>