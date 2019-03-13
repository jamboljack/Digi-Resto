<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cart extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('parser');
        $this->load->library('template_front');
        $this->load->model('front/cart_m');
    }

    public function index()
    {
        $sid               = session_id();
        $data['listOrder'] = $this->db->get_where('v_order_temp', array('session_id' => $sid))->result();
        $this->template_front->display('front/cart/view', $data);
    }

    public function additem()
    {
        if ($this->input->post()) {
            $param     = $this->input->post();
            $menu_id   = $param['data']['id'];
            $dataMenu  = $this->db->get_where('resto_menu', array('menu_id' => $menu_id))->row();
            $sid       = session_id();
            $checkTemp = $this->db->get_where('resto_order_temp', array('menu_id' => $menu_id))->row();
            if (count($checkTemp) > 0) {
                $data = array(
                    'temp_waktu'  => ($checkTemp->temp_waktu + $dataMenu->menu_waktu),
                    'temp_qty'    => ($checkTemp->temp_qty + $param['data']['qty']),
                    'temp_harga'  => ($checkTemp->temp_harga + $dataMenu->menu_harga),
                    'temp_total'  => ($checkTemp->temp_total + $dataMenu->menu_harga),
                    'temp_update' => date('Y-m-d H:i:s'),
                );

                $this->db->where('menu_id', $menu_id);
                $this->db->update('resto_order_temp', $data);
            } else {
                $data = array(
                    'session_id'   => $sid,
                    'temp_tanggal' => date('Y-m-d'),
                    'menu_id'      => $menu_id,
                    'temp_kode'    => $dataMenu->menu_kode,
                    'temp_nama'    => $dataMenu->menu_nama,
                    'temp_waktu'   => $dataMenu->menu_waktu,
                    'temp_qty'     => $param['data']['qty'],
                    'temp_harga'   => $dataMenu->menu_harga,
                    'temp_total'   => $dataMenu->menu_harga,
                    'temp_update'  => date('Y-m-d H:i:s'),
                );

                $this->db->insert('resto_order_temp', $data);
            }

            $this->_display();
        }
    }

    public function _display()
    {
        $sid       = session_id();
        $dataOrder = $this->db->select_sum('temp_qty', 'total_qty')->select_sum('temp_total', 'total_harga')->get_where('resto_order_temp', array('session_id' => $sid))->row();
        if (count($dataOrder) > 0) {
            $total_qty   = $dataOrder->total_qty;
            $total_harga = $dataOrder->total_harga;
        } else {
            $total_qty   = 0;
            $total_harga = 0;
        }

        // $cart_content = $this->cart->contents();
        // if ($cart_content) {
        //     $berat_total = 0;
        //     foreach ($cart_content as $key => $value) {
        //         $berat                                  = $value['product_weight'] * $value['qty'];
        //         $cart_content[$key]['berat']            = $berat;
        //         $cart_content[$key]['price_format']     = number_format($value['price'], 0, '', '.');
        //         $cart_content[$key]['price_sub_format'] = number_format($value['price'] * $value['qty'], 0, '', '.');
        //         $berat_total += $berat;
        //     }

        //     $res['cart_count']                     = count($cart_content);
        //     $res['cart_total']                     = $this->cart->total();
        //     $res['cart_total_format']              = number_format($res['cart_total'], 0, '', '.');
        //     $res['berat_total']                    = $berat_total;
        //     $this->data['cart_total']              = $this->cart->total();
        //     $this->data['berat_total']             = $berat_total;
        //     $this->data['cart_count']              = count($cart_content);
        //     $this->data['cart_total_format']       = number_format($res['cart_total'], 0, '', '.');
        //     $this->data['cart_content']            = $cart_content;
        //     $this->data['ongkir_format']           = 0;
        //     $this->data['cart_grand_total_format'] = number_format($this->cart->total(), 0, '', '.');
        //     $res['cart_dropdown_container']        = $this->parser->parse('front/cart_dropdown_container.html', $this->data, true);
        //     $res['keranjang_belanja']              = $this->parser->parse('front/cart/keranjang_belanja.html', $this->data, true);
        // } else {
        //     $res['cart_count']              = 0;
        //     $res['cart_total']              = 0;
        //     $res['cart_total_format']       = 0;
        //     $res['cart_dropdown_container'] = $this->parser->parse('front/cart/cart_dropdown_kosong.html', $this->data, true);
        //     $res['keranjang_belanja']       = $this->parser->parse('front/cart/keranjang_kosong.html', $this->data, true);
        // }

        // if ($this->input->is_ajax_request()) {
        //     header('Content-Type: application/json');
        //     echo json_encode($res);
        // } else {
        //     opn($res);
        // }
    }
}
/* Location: ./application/controller/front/Kategori.php */
