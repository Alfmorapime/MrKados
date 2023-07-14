<?php 

require_once(__DIR__ . '/vendor/autoload.php');

$config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', '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');

$apiInstance = new SendinBlue\Client\Api\ContactsApi(
    new GuzzleHttp\Client(),
    $config
);
$createContact = new \SendinBlue\Client\Model\CreateContact(); // Values to create a contact
$createContact['email'] = $correo;
$createContact['nombre'] = $nombre." ".$apellidos;
$createContact['listIds'] = [9];

try {
    $result = $apiInstance->createContact($createContact);
    //header("Location: registroEmailSatisfactorio.php?correo=$user&type=$usuarioTipo");
} catch (Exception $e) {
        //print_r($e);
    //echo 'Exception when calling ContactsApi->createContact: ', $e->getMessage(), PHP_EOL;
}

?>