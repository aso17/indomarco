<?php
function check_already_login()
{
    $CI = &get_instance();
    $user_session = $CI->session->userdata('nik');
    if ($user_session) {
        redirect('home');
    }
}
function check_not_login()
{
    $CI = &get_instance();
    $user_session = $CI->session->userdata('nik');
    if (!$user_session) {
        redirect('login');
    }
}
