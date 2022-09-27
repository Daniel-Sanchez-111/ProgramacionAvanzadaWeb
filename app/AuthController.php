<?php
$authC = new AuthController();
$authC ->login('','');
Class AuthController{
    public function login($email,$contraseña){

        $curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://crud.jonathansoto.mx/api/login',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => array('email' => $email,'password' => '$contraseña'),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
    }
}