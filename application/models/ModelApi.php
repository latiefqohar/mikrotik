<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class ModelApi extends CI_Model {

    public function login($ip,$login,$password){
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL =>base_url()."assets/service/login.php",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => "ip=$ip&login=$login&password=$password",
        CURLOPT_HTTPHEADER => array(
            "Content-Type: application/x-www-form-urlencoded"
        ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        return $response;
    }

    public function resource(){
        $ip = $this->session->userdata('ip');
        $login = $this->session->userdata('login');
        $password = $this->session->userdata('password');
        
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL =>base_url()."assets/service/resource.php",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => "ip=$ip&login=$login&password=$password",
        CURLOPT_HTTPHEADER => array(
            "Content-Type: application/x-www-form-urlencoded"
        ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        return $response;
    }

    public function read($link){
        $ip = $this->session->userdata('ip');
        $login = $this->session->userdata('login');
        $password = $this->session->userdata('password');
        
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL =>base_url()."assets/service/read.php",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => "ip=$ip&login=$login&password=$password&link=$link",
        CURLOPT_HTTPHEADER => array(
            "Content-Type: application/x-www-form-urlencoded"
        ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        return $response;
    }

}

/* End of file ModelApi.php */


?>