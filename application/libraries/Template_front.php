<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Template_front
{
    protected $_ci;
    public function __construct()
    {
        $this->_ci = &get_instance();
        $this->_ci->load->library('parser');
    }

    public function display($template_front, $data = null)
    {
        // $sid       = session_id();
        // $dataOrder = $this->db->select_sum('temp_qty', 'total_qty')->select_sum('temp_total', 'total_harga')->get_where('resto_order_temp', array('session_id' => $sid))->row();
        // if (count($dataOrder) > 0) {
        //     $total_qty   = $dataOrder->total_qty;
        //     $total_harga = $dataOrder->total_harga;

        //     $data['cart_count']                    = count($cart_content);
        //     $data['cart_total']                    = $this->_ci->cart->total();
        //     $data['cart_total_format']             = number_format($data['cart_total'], 0, '', '.');
        //     $data['base']                          = rtrim(base_url(), '/');
        //     $data['berat_total']                   = $berat_total;
        //     $this->data['berat_total']             = $berat_total;
        //     $this->data['cart_count']              = count($cart_content);
        //     $this->data['cart_total']              = $this->_ci->cart->total();
        //     $this->data['cart_total_format']       = number_format($this->data['cart_total'], 0, '', '.');
        //     $this->data['base']                    = rtrim(base_url(), '/');
        //     $this->data['cart_content']            = $cart_content;
        //     $this->data['ongkir_format']           = 0;
        //     $this->data['cart_grand_total_format'] = number_format($this->_ci->cart->total(), 0, '', '.');

        //     $cart_dropdown_container         = $this->_ci->parser->parse('front/cart_dropdown_container.html', $this->data, true);
        //     $data['cart_dropdown_container'] = $cart_dropdown_container;
        // } else {
        //     $total_qty   = 0;
        //     $total_harga = 0;

        //     $data['cart_count']              = 0;
        //     $data['cart_total_format']       = 0;
        //     $data['cart_dropdown_container'] = '';
        // }

        // if ($this->_ci->cart->contents()) {
        //     $cart_content = $this->_ci->cart->contents();
        //     $berat_total  = 0;
        //     foreach ($cart_content as $key => $value) {
        //         $berat                                  = $value['product_weight'] * $value['qty'];
        //         $cart_content[$key]['berat']            = $berat;
        //         $cart_content[$key]['price_format']     = number_format($value['price'], 0, '', '.');
        //         $cart_content[$key]['price_sub_format'] = number_format($value['price'] * $value['qty'], 0, '', '.');
        //         $berat_total += $berat;
        //     }

        //     $data['cart_count']                    = count($cart_content);
        //     $data['cart_total']                    = $this->_ci->cart->total();
        //     $data['cart_total_format']             = number_format($data['cart_total'], 0, '', '.');
        //     $data['base']                          = rtrim(base_url(), '/');
        //     $data['berat_total']                   = $berat_total;
        //     $this->data['berat_total']             = $berat_total;
        //     $this->data['cart_count']              = count($cart_content);
        //     $this->data['cart_total']              = $this->_ci->cart->total();
        //     $this->data['cart_total_format']       = number_format($this->data['cart_total'], 0, '', '.');
        //     $this->data['base']                    = rtrim(base_url(), '/');
        //     $this->data['cart_content']            = $cart_content;
        //     $this->data['ongkir_format']           = 0;
        //     $this->data['cart_grand_total_format'] = number_format($this->_ci->cart->total(), 0, '', '.');

        //     $cart_dropdown_container         = $this->_ci->parser->parse('front/cart_dropdown_container.html', $this->data, true);
        //     $data['cart_dropdown_container'] = $cart_dropdown_container;
        // } else {
        //     $data['cart_count']              = 0;
        //     $data['cart_total_format']       = 0;
        //     $data['cart_dropdown_container'] = '';
        // }

        // $cart_dropdown_container         = $this->_ci->parser->parse('front/cart/cart_dropdown_container.html', true);
        // $data['cart_dropdown_container'] = $cart_dropdown_container;
        $data['_header'] = $this->_ci->load->view('template_front/header', $data, true);
        $data['_footer'] = $this->_ci->load->view('template_front/footer', $data, true);
        $data['_proses'] = $this->_ci->load->view('template_front/proses', $data, true);
        $data['content'] = $this->_ci->load->view($template_front, $data, true);
        $this->_ci->load->view('/template_front.php', $data);
    }
}
/* Location: ./application/libraries/Template_front.php */
