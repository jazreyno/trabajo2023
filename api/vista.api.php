<?php 

class VistaApi{
    //vista terminada..

    /**
     * Responde cualquier coleccion de objetos en formato JSON.
     */

    public function response($data, $status) {
        header("Content-Type: application/json");
        header("HTTP/1.1 " . $status . " " . $this->_requestStatus($status));
        echo json_encode($data);
        }
       
    
    //Devuelve el status de respuesta según el código solicitado.
 	private function _requestStatus($code){
        $status = array(
            200 => "OK",
            404 => "Not found",
            500 => "Internal Server Error"
        );
        return (isset($status[$code]))? $status[$code] : $status[500];
    }
    

    // [
    //     {
    //       "id_tarea": "integer",
    //       "tarea": "string",
    //       "realizada": "boolean"
    //     }
    //   ]

//     Resultado esperado
// Response Content Type
// application/json


/*
Método response
Responsabilidades
Setear header con resultado de la operación
Encode data en formato JSON

Método requestStatus
Responsabilidad: dar un mensaje asociado a un código de respuesta

*/
}