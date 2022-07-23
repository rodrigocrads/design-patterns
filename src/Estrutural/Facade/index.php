<?php

use App\Estrutural\Facade\BibliotecaFacade;

require_once('../../../vendor/autoload.php');

$bibliotecaFacade = new BibliotecaFacade();

$codigoLivro = '123456';
$cpfCliente = '12345678909';

$efetuouRetirada = $bibliotecaFacade->efetuaRetirada($codigoLivro, $cpfCliente);

if ($efetuouRetirada) {
    $bibliotecaFacade->disparaMensagens($codigoLivro, $cpfCliente, 'CHAVE_API', 'SENHA_API');
}
