<?php

function is_logged_in()
{
    $ci = get_instance();
    if (!$ci->session->userdata('email')) {
        redirect('user');
    } else {
        $role = $ci->session->userdata('role');
        if ($role != "Admin") {
            redirect('user');
        }
    }
}

function is_logged_in2()
{
    $ci = get_instance();
    if (!$ci->session->userdata('email')) {
        redirect('user');
    } else {
        $role = $ci->session->userdata('role');
        if ($role != "User") {
            redirect('dashboard');
        }
    }
}
