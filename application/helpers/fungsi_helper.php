<?php
    function check_already_login(){
        $ci =& get_instance();
        $user_session = $ci->session->userdata('userid');

        if($user_session){
            redirect('administrator');
        }
    }

    function check_already_login_teknisi()
    {
        $ci =& get_instance();
        $user_session = $ci->session->userdata('id_teknisi');
        if ($user_session) {
            redirect('teknisi');
        // }else{
        //     redirect('teknisi-login');
        }
    }
    
    function check_already_login_user(){
        $ci =& get_instance();
        $user_session = $ci->session->userdata('username');

        if($user_session == true){
            redirect('/');
        }
    }

    function check_not_login(){
        $ci =& get_instance();
        $user_session = $ci->session->userdata('userid');

        if(!$user_session){
            redirect('login');
        }
    }

    function check_not_login_teknisi()
    {
        $ci =& get_instance();
        $user_session = $ci->session->userdata('id_teknisi');

        if (!$user_session) {
            redirect('teknisi-login');
        }
    }

    function check_not_login_user(){
        $ci =& get_instance();
        $user_session = $ci->session->userdata('username');

        if(!$user_session){
            redirect('/');
        }
    }

    function check_admin(){
        $ci =& get_instance();
        $ci->load->library('fungsi');
        if ($ci->fungsi->user_login()->level != 0) {
            echo"<script>alert('Login Gagal! Username atau Password yang Anda Masukkan Salah');window.location='".site_url('login', 'reload')."';</script>";
        }
    }

    function check_teknisi(){
        $ci =& get_instance();
        $ci->load->library('fungsi');
        if ($ci->fungsi->login_teknisi()->id_teknisi == NULL) {
            echo 'error';
            echo"<script>alert('Login Gagal! Username atau Password yang Anda Masukkan Salah');window.location='".site_url('teknisi-login', 'reload')."';</script>";
        }
    }


    function check_user(){
        $ci =& get_instance();
        $ci->load->library('fungsi');
        if ($ci->fungsi->user_login()->level != 1){
            redirect('login-user');
        }
    }
?>