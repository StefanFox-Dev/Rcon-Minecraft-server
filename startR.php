<?php
require_once("RCON.php");

        $cmd = implode(' ', $argv) ?? PHP_EOL . 'givemoney'; $cmd = str_replace('r.php ', '', $cmd);
        $rcon = new Rcon("0.0.0.0", "12345", "password", 5);

        if ($rcon->connect()) {
            echo "\nОтправка команды: {$cmd}! Ответ:\n";
            $echoCMD = $rcon->sendCommand($cmd);
            echo $echoCMD . PHP_EOL;
            $rcon->disconnect();
        } else echo "\n \nОшибка подключения к RCON-серверу!";
?>