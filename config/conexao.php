<?php

try {
DEFINE ('HOST','localhost');
DEFINE ('BD','bd_agenda');
DEFINE ('USER','root');
DEFINE ('PASS','bdjmf');

$conect = new PDO('mysql:host='.HOST.';dbname='.BD,USER,PASS);
$conect -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
echo "<strong>Erro</strong> " .$e->getMessage();

}