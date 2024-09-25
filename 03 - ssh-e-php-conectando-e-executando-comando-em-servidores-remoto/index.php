<?php

require __DIR__.'/vendor/autoload.php';

// DEPENDÊNCIAS
use \App\Connect\SSH;

// INSTÂNCIA
$obSSH = new SSH;

// CONEXÃO
if(!$obSSH->connect('ec2-54-207-10-129.sa-east-1.compute.amazonaws.com', 22)){
    die('Conexão falhou');
}

// AUTENTICAÇÃO
if(!$obSSH->authPassword('matheus', '12345')){
    die('Autenticação falhou');
}

// EXECUTA COMANDOS
$stdIo = $obSSH->exec('ls -l', $stdErr);
echo("STDERR:\n".$stdErr);
echo("STDIO:\n".$stdIo);

// DESCONECTA
$obSSH->disconnect();
