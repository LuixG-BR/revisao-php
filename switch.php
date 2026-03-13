<?php
$perfil = "admin";

switch ($perfil) {
    case "admin":
        echo "Acesso Total";
        break;
    case "user comum":
        echo "Apenas leitura";
        break;
    default:
        echo "Usuario Invalido";
        break;
}