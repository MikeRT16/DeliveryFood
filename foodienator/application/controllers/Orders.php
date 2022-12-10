<?php
defined('BASEPATH') OR exit ('No se permite el acceso directo al script');

class Orders extends CI_Controller {
    function __construct(){
        parent::__construct();

        $user = $this->session->userdata('user');
            if(empty($user)) {
                $this->session->set_flashdata('msg', 'Su sesión ha caducado');
                redirect(base_url().'login/');
            }
        $this->load->model('Order_model');
        $this->load->model('Store_model');
        $this->load->model('Menu_model');
    }
    public function index() {
        $user = $this->session->userdata('user');
        $order = $this->Order_model->getUserOrder($user['user_id']);
        $data['orders'] = $order;
        $this->load->view('front/partials/header');
        $this->load->view('front/orders', $data);
        $this->load->view('front/partials/footer');
    }

    public function deleteOrder($id) {
        $order = $this->Order_model->getOrder($id);

        if(empty($order)) {
            $this->session->set_flashdata('error_msg', 'Pedido no encontrado');
            redirect(base_url().'orders');
        }

        $this->Order_model->deleteOrder($id);

        $this->session->set_flashdata('success_msg', 'Su pedido cancelado con éxito');
        redirect(base_url().'orders');

    }


    public function invoice($id) {
        $order = $this->Order_model->getOrderByUser($id);
        $data['order'] = $order;
        $u_id = $order['u_id'];
        $r_id = $order['r_id'];
        $d_id = $order['d_id'];
        $res = $this->Store_model->getStore($r_id);
        $data['res'] = $res;   
        $dish = $this->Menu_model->getSingleDish($d_id);
        $data['dish'] = $dish;
    
        $user = $this->session->userdata('user');
        if($u_id == $user['user_id']) {
            if($order['status'] == 'closed') {
                $this->load->view('front/invoice', $data);
            } else {
                $this->session->set_flashdata('error_msg', 'Su pedido aún no está completo');
                redirect(base_url().'orders');
            }
        } else {
            $this->session->set_flashdata('error_msg', 'Está accediendo a datos de pedidos incorrectos');
            redirect(base_url().'orders');
        }        
    }
}