<?php
namespace App\Http\Traits;

use GuzzleHttp\Client;

trait WebserviceTrait{

    public function validaCurp($curp){
        $client = new Client();
        $url = "https://bus.edomex.gob.mx/bussrv/sei/dkb_frRENAPO1.php/consulta";
        // $url = "https://desabus.edomex.gob.mx/bussrv/sei/dkb_frRENAPO1.php/consulta";
        $params = [
           "consulta" => "CURP",
           'data' =>[ "CURP" => $curp]
        ];
        $body = '
        {
        "request": {
            "consulta": "CURP",
            "data": {
                    "CURP": "'.$curp.'"
                    }
            }
        }
        ';
        $auth = ['pparticipativo','9pAr7iciP@ti/o'];

        $response = $client->request('GET',$url,[
            // 'json' => $params,
            'auth' => $auth,
            'body' => $body,
            'verify' => false,
        ]);

        $responseBody = json_decode($response->getBody());
        return $responseBody;
    }
}