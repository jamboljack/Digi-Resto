<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<link rel="shortcut icon" href="<?=base_url('img/logo-icon.png');?>">
<title>Print Faktur <?=$detail->order_id;?></title>
<style type="text/css">
    table {
        width: 100%;
        border-collapse: collapse;
    }
    
    tr, td {
        padding: 2px;
    }

    th {
        height: 25px;
        background-color: #eff3f8;
    }
    body{
        font-family: "Franklin Gothic Medium";
        font-size:12px;
    }
    h1{
        font-size:20px
    }
    .page {
        width: 21cm;
        min-height: 29.7cm;
        padding: 0cm;
        margin: 0.1cm auto;
        border: 0.3px #D3D3D3 none;
        border-radius: 2px;
        background: white;
    }

    @media print{
        #comments_controls,
        #print-link{
            display:none;
        }
    }
</style>
</head>
<body>
<a href="#Print">
<img src="<?=base_url('img/print.png');?>" height="24" width="24" title="Print" id="print-link" onClick="window.print();return false;" />
</a>
<div class="page">
    <table width="100%" align="center" cellpadding="0" cellspacing="0">
        <tr>
            <td width="50%" colspan="4" align="right" valign="top"><h1><u>FAKTUR PENJUALAN</u></h1></td>
        </tr>
        <tr>
            <td width="50%" align="left" rowspan="4" valign="top"><?='<b>'.$header->contact_name.'</b><br>'.$header->contact_address.'<br>No. Telp : '.$header->contact_phone.'<br>Email : '.$header->contact_email;?></td>
            <td width="15%" valign="top">Tanggal</td>
            <td width="2%" valign="top">:</td>
            <td width="33%" valign="top"><?=date('d-m-Y', strtotime($detail->order_tanggal));?></td>
        </tr>
        <tr>
            <td valign="top">No. Order</td>
            <td valign="top">:</td>
            <td valign="top"><?=trim($detail->order_id);?></td>
        </tr>
        <tr>
            <td valign="top">Nama Pelanggan</td>
            <td valign="top">:</td>
            <td valign="top"><?=trim($detail->order_nama);?></td>
        </tr>
    </table>
    <br>
    <table width="100%" align="center">
        <tr>
            <th width="3%" style="border-top: 0.5px solid black; border-left: 0.5px solid black; border-bottom: 0.5px solid black; border-right: 0.5px solid black;">NO</th>
            <th width="10%" style="border-top: 0.5px solid black; border-bottom: 0.5px solid black; border-right: 0.5px solid black;">KODE</th>
            <th width="35%" style="border-top: 0.5px solid black; border-bottom: 0.5px solid black; border-right: 0.5px solid black;">NAMA BARANG</th>
            <th width="10%" style="border-top: 0.5px solid black; border-bottom: 0.5px solid black; border-right: 0.5px solid black;">JUMLAH</th>
            <th width="15%" style="border-top: 0.5px solid black; border-bottom: 0.5px solid black; border-right: 0.5px solid black;">HARGA SATUAN</th>
            <th width="20%" style="border-top: 0.5px solid black; border-bottom: 0.5px solid black; border-right: 0.5px solid black;">SUBTOTAL</th>
        </tr>
        <?php 
        $no  = 1;
        $qty = 0;
        foreach($listDetail as $r) {
        ?>
        <tr>
            <td align="center" style="border-left: 0.5px solid black; border-bottom: 0.5px solid black; border-right: 0.5px solid black;"><?=$no;?></td>
            <td align="center" style="border-bottom: 0.5px solid black; border-right: 0.5px solid black;"><?=$r->menu_kode;?></td>
            <td style="border-bottom: 0.5px solid black; border-right: 0.5px solid black;"><?=$r->menu_nama;?></td>
            <td align="right" width="8" style="border-bottom: 0.5px solid black;"><?=number_format($r->order_detail_qty,2,'.',',');?></td>
            <td align="right" style="border-bottom: 0.5px solid black; border-right: 0.5px solid black;"><?=number_format($r->order_detail_harga,0,'',',');?></td>
            <td align="right" style="border-bottom: 0.5px solid black; border-right: 0.5px solid black;"><?=number_format($r->order_detail_subtotal,0,'',',');?></td>
        </tr>
        <?php 
            $qty = $qty+$r->order_detail_qty;
            $no++; 
        } 
        ?>
        <tr>
            <td colspan="6"><br></td>
        </tr>
        <tr>
            <td colspan="2"></td>
            <td colspan="2"></td>
            <td align="right"><b>Sub Total :</b></td>
            <td align="right"><b><?=number_format($detail->order_total,0,'',',');?></b></td>
        </tr>
        <tr>
            <td colspan="2"><b>Jumlah Qty</b></td>
            <td colspan="2">: <?=number_format($qty,0,'',',');?></td>
            <td align="right"><b>Diskon :</b></td>
            <td align="right"><b><?=number_format($detail->order_diskon,0,'',',');?></b></td>
        </tr>
        <tr>
            <td colspan="5" align="right"><b>Total :</b></td>
            <td align="right"><b><?=number_format($detail->order_total-$detail->order_diskon,0,'',',');?></b></td>
        </tr>
        <tr>
            <td colspan="6"><br></td>
        </tr>
        <tr>
            <td colspan="6"><b>Terbilang : <?=Terbilang($detail->order_total-$detail->order_diskon);?> Rupiah</b></td>
        </tr>
    </table>
    <br>
    <table width="100%" align="center">
        <tr>
            <td width="50%" align="center">Pelanggan<br><br><br><br></td>
            <td width="50%" align="center">Petugas<br><br><br><br></td>
        </tr>
        <tr>
            <td align="center"><u><?=$detail->order_nama;?></u></td>
            <td align="center">----------------------------</td>
        </tr>
    </table>
</div>
</body>
</html>