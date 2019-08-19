<?php

/**
 * Description of MY_Controller
 *
 * @author andi
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User extends MY_Controller {

    var $modul;

    public function __construct() {
        parent::__construct();
        $this->modul = get_class($this);
    }

    public function index() {
        $this->search();
    }

    public function get_row() {
        $list_data = $this->user_model->select('*', null, null, null, array('field' => 'id', 'sort' => 'asc'))->result();
        $data_return = array();
        $no = 1;
        foreach ($list_data as $data) {
            $button_delete = $this->array_custom->delete_modal($this->modul, site_url('master/user/delete/' . $data->id), $data->id);
            $arr = array(
                $no,
                $data->email,
                $data->nama,
                $data->gender == 'L' ? '<span class="label label-primary">Laki-Laki</span>' : '<span class="label label-pink">Perempuan</span>',
                $data->telp,
                $data->pekerjaan,
                '<a href="' . base_url() . 'assets/dok/' . $data->photo . '" target="_blank">' . $data->photo . '</a>',
                $button_delete
            );
            $no++;
            $data_return[] = $arr;
        }
        $return = array('data' => $data_return);
        echo json_encode($return);
    }

    public function search() {
        $data = array(
            'title_page' => 'List Data',
            'modul' => $this->modul,
            'title_content' => 'Data ' . $this->modul,
            'page' => 'webadmin/master/user/list',
        );
        $this->load->view('webadmin/index', $data);
    }

    public function add2() {
        $data = array(
            'title_page' => 'List Data',
            'modul' => $this->modul,
            'title_content' => 'Data ' . $this->modul,
            'page' => 'webadmin/master/user/add2',
        );
        $this->load->view('webadmin/index', $data);
    }

    public function add() {
        $data = array(
            'title_page' => 'Registrasi Form',
            'modul' => $this->modul,
            'title_content' => 'Tambah Data ' . $this->modul,
            'page' => 'webadmin/master/user/add',
        );
        $array['content'] = $this->load->view($data['page'], $data, TRUE);
        echo json_encode($array);
    }

    public function process() {
        $data['email'] = $this->input->post('inp_email');
        $data['pass'] = $this->input->post('inp_pass');
        $data['nama'] = $this->input->post('inp_nama');
        $data['gender'] = $this->input->post('inp_gender');
        $data['telp'] = $this->input->post('inp_telp');
        $data['pekerjaan'] = $this->input->post('inp_pekerjaan');

        $img1 = $this->upload_image('inp_photo');
        if ($img1 != '') {
            $data['photo'] = $img1;
        }

        if ($data['pass'] == $this->input->post('inp_repass')) {
            $res = $this->user_model->add($data);
            set_message($res, 'add-success');
        } else {
            set_message(0, 'Password tidak sama', 1);
        }

        redirect('master/user/search');
    }

    public function delete($id = null) {
        $res = $this->user_model->delete(array('id' => $id));
        set_message($res, 'delete-success');
        redirect('master/user', 'refresh');
    }

    public function upload_image($inp_foto) {
        $config = array(
            'overwrite' => TRUE,
            'file_name' => $inp_foto . '_' . rand(1, 99),
            'max_size' => '2048',
            'allowed_types' => '*',
            'upload_path' => './assets/dok/'
        );
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if (!empty($_FILES[$inp_foto]['name']) && $_FILES[$inp_foto]['name'] != '' && $_FILES[$inp_foto]['name'] != null) {
            if ($this->upload->do_upload($inp_foto)) {
                $dok = $this->upload->data();
                return $dok['file_name'];
            } else {
                $eror = $this->upload->display_errors();
                set_message($eror, 'failed');
                redirect('master/user');
            }
        } else {
            return '';
        }
    }

}
