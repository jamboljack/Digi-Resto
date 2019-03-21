<?php
$uri = $this->uri->segment(2);

if ($uri == 'home') {
    $dashboard     = 'active';
    $meta          = '';
    $kontak        = '';
    $master        = '';
    $span_master_1 = '';
    $span_master_2 = '';
    $slider        = '';
    $kategori      = '';
    $meja          = '';
    $menu_makanan  = '';
    $monitoring    = '';
    $order         = '';
    $social        = '';
    $users         = '';
} elseif ($uri == 'meta') {
    $dashboard     = '';
    $meta          = 'active';
    $kontak        = '';
    $master        = '';
    $span_master_1 = '';
    $span_master_2 = '';
    $slider        = '';
    $kategori      = '';
    $meja          = '';
    $menu_makanan  = '';
    $monitoring    = '';
    $order         = '';
    $social        = '';
    $users         = '';
} elseif ($uri == 'kontak') {
    $dashboard     = '';
    $meta          = '';
    $kontak        = 'active';
    $master        = '';
    $span_master_1 = '';
    $span_master_2 = '';
    $slider        = '';
    $kategori      = '';
    $meja          = '';
    $menu_makanan  = '';
    $monitoring    = '';
    $order         = '';
    $social        = '';
    $users         = '';
} elseif ($uri == 'slider') {
    $dashboard     = '';
    $meta          = '';
    $kontak        = '';
    $master        = 'active open';
    $span_master_1 = '<span class="selected"></span>';
    $span_master_2 = 'open';
    $slider        = 'active';
    $kategori      = '';
    $meja          = '';
    $menu_makanan  = '';
    $monitoring    = '';
    $order         = '';
    $social        = '';
    $users         = '';
} elseif ($uri == 'kategori') {
    $dashboard     = '';
    $meta          = '';
    $kontak        = '';
    $master        = 'active open';
    $span_master_1 = '<span class="selected"></span>';
    $span_master_2 = 'open';
    $slider        = '';
    $kategori      = 'active';
    $meja          = '';
    $menu_makanan  = '';
    $monitoring    = '';
    $order         = '';
    $social        = '';
    $users         = '';
} elseif ($uri == 'meja') {
    $dashboard     = '';
    $meta          = '';
    $kontak        = '';
    $master        = 'active open';
    $span_master_1 = '<span class="selected"></span>';
    $span_master_2 = 'open';
    $slider        = '';
    $kategori      = '';
    $meja          = 'active';
    $menu_makanan  = '';
    $monitoring    = '';
    $order         = '';
    $social        = '';
    $users         = '';
} elseif ($uri == 'menu_makanan') {
    $dashboard     = '';
    $meta          = '';
    $kontak        = '';
    $master        = 'active open';
    $span_master_1 = '<span class="selected"></span>';
    $span_master_2 = 'open';
    $slider        = '';
    $kategori      = '';
    $meja          = '';
    $menu_makanan  = 'active';
    $monitoring    = '';
    $order         = '';
    $social        = '';
    $users         = '';
} elseif ($uri == 'monitoring') {
    $dashboard     = '';
    $meta          = '';
    $kontak        = '';
    $master        = '';
    $span_master_1 = '';
    $span_master_2 = '';
    $slider        = '';
    $kategori      = '';
    $meja          = '';
    $menu_makanan  = '';
    $monitoring    = 'active';
    $order         = '';
    $social        = '';
    $users         = '';
} elseif ($uri == 'order') {
    $dashboard     = '';
    $meta          = '';
    $kontak        = '';
    $master        = '';
    $span_master_1 = '';
    $span_master_2 = '';
    $slider        = '';
    $kategori      = '';
    $meja          = '';
    $menu_makanan  = '';
    $monitoring    = '';
    $order         = 'active';
    $social        = '';
    $users         = '';
} elseif ($uri == 'social') {
    $dashboard     = '';
    $meta          = '';
    $kontak        = '';
    $master        = '';
    $span_master_1 = '';
    $span_master_2 = '';
    $slider        = '';
    $kategori      = '';
    $meja          = '';
    $menu_makanan  = '';
    $monitoring    = '';
    $order         = '';
    $social        = 'active';
    $users         = '';
} elseif ($uri == 'users') {
    $dashboard     = '';
    $meta          = '';
    $kontak        = '';
    $master        = '';
    $span_master_1 = '';
    $span_master_2 = '';
    $slider        = '';
    $kategori      = '';
    $meja          = '';
    $menu_makanan  = '';
    $monitoring    = '';
    $order         = '';
    $social        = '';
    $users         = 'active';
} else {
    $dashboard     = '';
    $meta          = '';
    $kontak        = '';
    $master        = '';
    $span_master_1 = '';
    $span_master_2 = '';
    $slider        = '';
    $kategori      = '';
    $meja          = '';
    $menu_makanan  = '';
    $monitoring    = '';
    $order         = '';
    $social        = '';
    $users         = '';
}
?>
<div class="page-sidebar-wrapper">
    <div class="page-sidebar navbar-collapse collapse">
        <ul class="page-sidebar-menu page-sidebar-menu-light" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
            <br>
            <li class="tooltips <?=$dashboard;?>" data-container="body" data-placement="right" data-html="true" data-original-title="Dashboard">
                <a href="<?=site_url('admin/home');?>">
                    <i class="fa fa-home"></i><span class="title"> Dashboard</span>
                </a>
            </li>
            <li class="tooltips <?=$meta;?>" data-container="body" data-placement="right" data-html="true" data-original-title="Setting App">
                <a href="<?=site_url('admin/meta');?>">
                    <i class="fa fa-cogs"></i><span class="title"> Setting App</span>
                </a>
            </li>
            <li class="heading">
                <h3 class="uppercase">MENU MASTER</h3>
            </li>
            <li class="tooltips <?=$kontak;?>" data-container="body" data-placement="right" data-html="true" data-original-title="Kontak Kami">
                <a href="<?=site_url('admin/kontak');?>">
                    <i class="fa fa-phone"></i><span class="title"> Kontak Kami</span>
                </a>
            </li>
            <li class="<?=$master;?>">
                <a href="#">
                    <i class="fa fa-folder-o"></i>
                    <span class="title"> Data Master</span>
                    <?=$span_master_1;?>
                    <span class="arrow <?=$span_master_2;?>"></span>
                </a>
                <ul class="sub-menu">
                    <li class="<?=$slider;?>">
                        <a href="<?=site_url('admin/slider');?>"><i class="fa fa-arrow-circle-o-right"></i> Slider</a>
                    </li>
                    <li class="<?=$kategori;?>">
                        <a href="<?=site_url('admin/kategori');?>"><i class="fa fa-arrow-circle-o-right"></i> Kategori</a>
                    </li>
                    <li class="<?=$meja;?>">
                        <a href="<?=site_url('admin/meja');?>"><i class="fa fa-arrow-circle-o-right"></i> Meja</a>
                    </li>
                    <li class="<?=$menu_makanan;?>">
                        <a href="<?=site_url('admin/menu_makanan');?>"><i class="fa fa-arrow-circle-o-right"></i> Menu</a>
                    </li>
                </ul>
            </li>
            <li class="heading">
                <h3 class="uppercase">MENU TRANSAKSI</h3>
            </li>
            <li class="tooltips <?=$monitoring;?>" data-container="body" data-placement="right" data-html="true" data-original-title="Monitoring">
                <a href="<?=site_url('admin/monitoring');?>">
                    <i class="fa fa-laptop"></i><span class="title"> Monitoring</span>
                </a>
            </li>
            <li class="tooltips <?=$order;?>" data-container="body" data-placement="right" data-html="true" data-original-title="Order Menu">
                <a href="<?=site_url('admin/order');?>">
                    <i class="icon-notebook"></i><span class="title"> Order</span>
                </a>
            </li>
            <li class="heading">
                <h3 class="uppercase">ADDITIONAL</h3>
            </li>
            <li class="tooltips <?=$social;?>" data-container="body" data-placement="right" data-html="true" data-original-title="Social Media">
                <a href="<?=site_url('admin/social');?>">
                    <i class="fa fa-rss"></i><span class="title"> Social Media</span>
                </a>
            </li>
            <li class="heading">
                <h3 class="uppercase">MENU USERS</h3>
            </li>
            <li class="tooltips <?=$users;?>" data-container="body" data-placement="right" data-html="true" data-original-title="Users">
                <a href="<?=site_url('admin/users');?>">
                    <i class="fa fa-users"></i><span class="title"> Users</span>
                </a>
            </li>
        </ul>
    </div>
</div>