<?php

    function Post()
    {
        //API URL
        $url = 'http://18.224.44.11/angels/api/reniec/';

        //iniciamos curl
        $ch = curl_init($url);

        //creamos un array con los datos del json a enviar
        $data = array(
            'token' => 'angels', 
            'dni' => '76151405'
        );

        $json = json_encode($data);

        //enviamos el json
        curl_setopt($ch, CURLOPT_POSTFIELDS, $json);

        //especificamos el tipo de contenido a enviar
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

        //devolver respuesta en lugar de generar
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        //ejecuta la peticion post
        $result = curl_exec($ch);

        $resultado = json_decode($result);

        echo $resultado->paterno.'<br>';
        echo $resultado->materno.'<br>';
        echo $resultado->nombres.'<br>';  
        
        //close cURL resource
        curl_close($ch);
    }


    Post();
?>