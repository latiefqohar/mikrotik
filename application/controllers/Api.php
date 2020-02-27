<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelApi');
    }
    

    public function index()
    {
        $this->load->view('auth/login');
    }

    public function aksiLogin(){

            $ip = $this->input->post('ip');
            $login = $this->input->post('user');
            $password = $this->input->post('password');
            $prosesLogin = $this->ModelApi->login($ip,$login,$password);
            // var_dump($prosesLogin);die();
            if ($prosesLogin!=null) {
               $dataSession = array(
                   'ip' => $ip ,
                   'login' => $login,
                   'password' => $password
                );
                $this->session->set_userdata($dataSession);
                redirect('Api/resource','refresh');                
            }else {
                echo "error";
            }

    }

    public function logout(){
        $dataSession = array('ip', 'login', 'password');
        $this->session->unset_userdata($dataSession);
        redirect('Api','refresh'); 
    }

    public function resource(){
        $prosesLogin = $this->ModelApi->resource();
        $ambildata = $this->ModelApi->read('/interface/print');
        $data['getInterface'] =json_decode($ambildata,true);
        $data['resource']=json_decode($prosesLogin,true);
        $this->load->view('template/header');
        $this->load->view('v_dashboard', $data);
        $this->load->view('template/footer');
    }

    public function interface(){
        $ambildata = $this->ModelApi->read('/interface/print');
        $data['getInterface'] =json_decode($ambildata,true);
        $this->load->view('template/header');
        $this->load->view('v_interface', $data);
        $this->load->view('template/footer');
    }

    public function log(){
        $ambildata = $this->ModelApi->read('/log/print');
        $data['getLog'] =json_decode($ambildata,true);
        $this->load->view('template/header');
        $this->load->view('v_log', $data);
        $this->load->view('template/footer');
    }

    public function dhcpServer(){
        $ambildata = $this->ModelApi->read('/ip/dhcp-server/print');
        $data['getDhcpServer'] =json_decode($ambildata,true);
        $this->load->view('template/header');
        $this->load->view('v_dhcpServer', $data);
        $this->load->view('template/footer');
    }

    public function dhcpClient(){
        $ambildata = $this->ModelApi->read('/ip/dhcp-client/print');
        $data['getDhcpClient'] =json_decode($ambildata,true);
        $this->load->view('template/header');
        $this->load->view('v_dhcpClient', $data);
        $this->load->view('template/footer');
    }

    public function ipHotspot(){
        $ambildata = $this->ModelApi->read('/ip/hotspot/print');
        $data['getIpHotspot'] = json_decode($ambildata,true);
        $this->load->view('template/header');
        $this->load->view('v_ipHotspot', $data);
        $this->load->view('template/footer');
    }

    public function hotspotActive(){
        $ambildata = $this->ModelApi->read('/ip/hotspot/active/print');
        $data['getHotspotActive'] = json_decode($ambildata,true);
        $this->load->view('template/header');
        $this->load->view('v_hotspotActive', $data);
        $this->load->view('template/footer');
    }

    public function queueSimple(){
        $ambildata = $this->ModelApi->read('/queue/simple/print');
        $data['getqueueSimple'] = json_decode($ambildata,true);
        $this->load->view('template/header');
        $this->load->view('v_queueSimple', $data);
        $this->load->view('template/footer');
    }

    public function queueInterface(){
        $ambildata = $this->ModelApi->read('/queue/interface/print');
        $data['getqueueInterface'] = json_decode($ambildata,true);
        $this->load->view('template/header');
        $this->load->view('v_queueInterface', $data);
        $this->load->view('template/footer');
    }

    public function Lease(){
        $ambildata = $this->ModelApi->read('/ip/dhcp-server/lease/print');
        $data['getLease'] = json_decode($ambildata,true);
        $this->load->view('template/header');
        $this->load->view('v_Lease', $data);
        $this->load->view('template/footer');
    }

    public function getRx(){
        $ambildata = $this->ModelApi->read('/interface/print');
        $data=json_decode($ambildata,true);
        // var_dump($data);die();
        foreach ($data as $row) {
            $result[]=[
            'id'=>$row['.id'],
            'name'=>$row['name'],
            'rx_byte'=>$row['rx-byte'],
            'tx_byte'=>$row['tx-byte'],
            ];
        }
        echo json_encode($result);
       
    }

}

/* End of file Api.php */


?>