<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lap_penjualan extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->cek_auth_admin();
        $this->load->library('template');
        $this->load->model('admin/lap_penjualan_m');
    }

    public function index()
    {
        $data['listData'] = $this->db->get('resto_kategori')->result();
        $this->template->display('admin/report/lap_penjualan_v', $data);
    }

    public function preview($dari, $sampai, $kategori = 'all')
    {
        $tgl_dari   = date('Y-m-d', strtotime($dari));
        $tgl_sampai = date('Y-m-d', strtotime($sampai));
        if ($kategori == 'all') {
            $data['listData'] = $this->db->order_by('order_id', 'asc')->get_where('v_order_detail', array('order_tanggal >=' => $tgl_dari, 'order_tanggal <=' => $tgl_sampai))->result();
        } else {
            $data['listData'] = $this->db->order_by('order_id', 'asc')->get_where('v_order_detail', array('order_tanggal >=' => $tgl_dari, 'order_tanggal <=' => $tgl_sampai, 'kategori_id' => $kategori))->result();
        }

        $this->load->view('admin/report/printpenjualan_v', $data);
    }
}
/* Location: ./application/controller/admin/Lap_penjualan.php */
