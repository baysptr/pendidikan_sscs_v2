<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Layout_admin
 *
 * @author baysptr
 */
class Layout_M extends CI_Model{
    public function __construct() {
        parent::__construct();
    }
    
    public function meta(){
        $html = '<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>AdminLTE 2 | Blank Page</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.7 -->
        <link rel="stylesheet" href="'.base_url().'components/bootstrap/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="'.base_url().'components/dist/css/AdminLTE.min.css">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="'.base_url().'components/dist/css/skins/_all-skins.min.css">
    </head>';
        
        echo $html;
    }
    
    public function javascript() {
        $html = '<script src="'.base_url().'components/plugins/jQuery/jquery-2.2.3.min.js"></script>
        <!-- Bootstrap 3.3.7 -->
        <script src="'.base_url().'components/bootstrap/js/bootstrap.min.js"></script>
        <!-- SlimScroll -->
        <script src="'.base_url().'components/plugins/slimScroll/jquery.slimscroll.min.js"></script>
        <!-- FastClick -->
        <script src="'.base_url().'components/plugins/fastclick/fastclick.js"></script>
        <!-- AdminLTE App -->
        <script src="'.base_url().'components/dist/js/app.min.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="'.base_url().'components/dist/js/demo.js"></script>';
        
        echo $html;
    }
}
