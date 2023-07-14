<?php

class RestClient {


    //This function calls a rest API and passes it the call Data
    static function call($method, $callData = array())  {

        //State request header
        $requestHeader = array('requesttype' => $method);

        //Options for the HTTP Stream
        $options = array (
            'http' => array(
                'header' => 'Content-Type: application/json',
                'method' => $method,
                'content' => json_encode($callData)
                )
            );
            //Build the stream context
            $context = stream_context_create($options);
            //var_dump($options);
            //Use file_get_contents to send the stream
            $result = file_get_contents(API_URL, false, $context);
            return json_decode($result);

    }

}

?>