<?php 

namespace App\Adapter;

class IntegracaoErp
{
    public function token($apiKey)
    {
        // Código de solicitação do token aqui ...
        return 'TOKEN_GERADO_VIA_API';
    }

    public function pedido($pedido, $apiKey)
    {
        // Código de envio do pedido aqui ...
        return true;
    }
}