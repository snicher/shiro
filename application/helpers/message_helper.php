<?php

$content = array(
    'add-success' => "Data berhasil di input",
    'add-booking' => "Data berhasil di simpan",
    'edit-success' => "Data berhasil di ubah",
    'delete-success' => "Data berhasil di hapus",
    'delete-confirm' => "Apakah anda yakin akan menghapus data {0} ?",
    'error-upload-image' => "File gambar tidak sesuai",
    'wrong-password' => 'Password Anda Salah',
    'belum-aktip' => 'Akun belum aktip',
    'failed' => 'Proses Gagal',
    'used1' => 'Nomer telah digunakan.',
);

//function echo_msg() {
////    $CI = &get_instance();
//    
//    echo $content['add-success'];
//}

function get_message_text($code_msg, $param = null) {
    $CI = &get_instance();
    $CI->load->helper('message_helper');
    $CI->load->library('msg');
    $msg_txt = $CI->msg->content[$code_msg];
    if ($param != null) {
        for ($i = 0; $i < count($param); $i++) {
            $msg_txt = str_replace('{' . $i . '}', $param[$i], $msg_txt);
        }
    }
    return $msg_txt;
}

function get_message($condition, $code_msg, $type = null, $param = null) {
    $CI = &get_instance();
    $CI->load->helper('message_helper');
    $msg = '<div class = "alert alert-' . $condition . '">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>' . ucfirst($condition) . '!</strong> ';
    $msg .= $type != null ? $code_msg : get_message_text($code_msg, $param);
    $msg .= '</div>';
    return $msg;
}

function set_message($res, $code_msg, $type = null, $param = null) {
    $CI = &get_instance();
    $CI->load->helper('message_helper');
    $CI->load->library('session');
    $condition = $res ? 'success' : 'danger';
    $code_msg = $condition == 'success' ? $code_msg : $type != null ? $code_msg : 'failed';
    $CI->session->set_flashdata('message', get_message($condition, $code_msg, $type, $param));
}

function view_message() {
    $CI = &get_instance();
    $CI->load->library('session');
    if ($CI->session->flashdata('message') != ''):echo $CI->session->flashdata('message');
    endif;
}
