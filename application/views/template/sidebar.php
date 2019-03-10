<?php
$uri = $this->uri->segment(2);

if ($uri == 'home') {
    $dashboard     = 'active';
    $meta          = '';
    $master        = '';
    $span_master_1 = '';
    $span_master_2 = '';
    $kategori      = '';
    $meja          = '';
    $menu_makanan  = '';
    $order         = '';
    $users         = '';
} elseif ($uri == 'meta') {
    $dashboard     = '';
    $meta          = 'active';
    $master        = '';
    $span_master_1 = '';
    $span_master_2 = '';
    $kategori      = '';
    $meja          = '';
    $menu_makanan  = '';
    $order         = '';
    $users         = '';
} elseif ($uri == 'kategori') {
    $dashboard     = '';
    $meta          = '';
    $master        = 'active open';
    $span_master_1 = '<span class="selected"></span>';
    $span_master_2 = 'open';
    $kategori      = 'active';
    $meja          = '';
    $menu_makanan  = '';
    $order         = '';
    $users         = '';
} elseif ($uri == 'meja') {
    $dashboard     = '';
    $meta          = '';
    $master        = 'active open';
    $span_master_1 = '<span class="selected"></span>';
    $span_master_2 = 'open';
    $kategori      = '';
    $meja          = 'active';
    $menu_makanan  = '';
    $order         = '';
    $users         = '';
} elseif ($uri == 'menu_makanan') {
    $dashboard     = '';
    $meta          = '';
    $master        = 'active open';
    $span_master_1 = '<span class="selected"></span>';
    $span_master_2 = 'open';
    $kategori      = '';
    $meja          = '';
    $menu_makanan  = 'active';
    $order         = '';
    $users         = '';
} elseif ($uri == 'order') {
    $dashboard     = '';
    $meta          = '';
    $master        = '';
    $span_master_1 = '';
    $span_master_2 = '';
    $kategori      = '';
    $meja          = '';
    $menu_makanan  = '';
    $order         = 'active';
    $users         = '';
} elseif ($uri == 'users') {
    $dashboard     = '';
    $meta          = '';
    $master        = '';
    $span_master_1 = '';
    $span_master_2 = '';
    $kategori      = '';
    $meja          = '';
    $menu_makanan  = '';
    $order         = '';
    $users         = 'active';
} else {
    $dashboard     = '';
    $meta          = '';
    $master        = '';
    $span_master_1 = '';
    $span_master_2 = '';
    $kategori      = '';
    $meja          = '';
    $menu_makanan  = '';
    $order         = '';
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
            <li class="<?=$master;?>">
                <a href="#">
                    <i class="fa fa-folder-o"></i>
                    <span class="title"> Data Master</span>
                    <?=$span_master_1;?>
                    <span class="arrow <?=$span_master_2;?>"></span>
                </a>
                <ul class="sub-menu">
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
            <li class="tooltips <?=$order;?>" data-container="body" data-placement="right" data-html="true" data-original-title="Order Menu">
                <a href="<?=site_url('admin/order');?>">
                    <i class="icon-notebook"></i><span class="title"> Order</span>
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