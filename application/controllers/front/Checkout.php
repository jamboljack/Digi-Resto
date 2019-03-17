<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Checkout extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('template_front');
    }

    public function index()
    {
        redirect('checkout/review');
    }
    public function review()
    {
        $cart_content = $this->cart->contents();
        if ($cart_content) {
            $this->data['cart_content'] = $cart_content;
            $this->data['cart_total']   = $this->cart->total();

            // $this->db->where('meja_available', 1); // untuk cek meja yg masih kosong
            $this->data['resto_meja'] = $this->db->get('resto_meja')->result();

            $data['review_content'] = $this->parser->parse('front/checkout/review_content.html', $this->data, true);
            $data['class']          = 'woocommerce-checkout';
            $this->template_front->display('front/checkout/review', $data);
        }else{
            redirect('/cart');
        }
    }

    public function dobooking()
    {
        if ($this->input->post()) {
            $resto_order        = json_decode($this->input->post('resto_order'), true);
            $resto_order_detail = json_decode($this->input->post('resto_order_detail'), true);
            $this->db->insert('resto_order', $resto_order);
            $order_id = $this->db->insert_id();

            $res = array();
            $res['order_id'] = $order_id;
            foreach ($resto_order_detail as $key => $value) {
                $value['order_id'] = $order_id;
                $this->db->insert('resto_order_detail', $value);
            }
            $this->cart->destroy();
            if ($this->input->is_ajax_request()) {
                header('Content-Type: application/json');
                echo json_encode($res);
            } else {
                opn($res);
            }
        }
    }

    public function detail($order_id = null)
    {  
        $this->db->where('order_id', $order_id);
        $resto_order = $this->db->get('resto_order')->result();
        if ($resto_order) {
            foreach ($resto_order as $key => $value) {
                $this->db->where('order_id', $value->order_id);
                $this->db->join('resto_menu', 'resto_menu.menu_id = resto_order_detail.menu_id', 'left');
                $value->resto_order_detail = $this->db->get('resto_order_detail')->result();
            } 
            $this->data['resto_order'] = $resto_order;
            $data['detail_content'] = $this->parser->parse('front/checkout/detail_content.html', $this->data, true);
        }else{
            $data['detail_content'] = $this->parser->parse('front/checkout/detail_content_empty.html', $this->data, true);
        }
        $data['class']          = 'woocommerce-checkout';
        $this->template_front->display('front/checkout/detail', $data);
    }

}
/* Location: ./application/controller/front/Checkout.php */
