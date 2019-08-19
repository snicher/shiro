<?php

/**
 * Description of MY_Controller
 *
 * @author 
 * AWp
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');


class MY_Controller extends CI_Controller {


    public function __construct() {
        parent::__construct();
        //model master
        $this->load->model('master/user_model');

        //helper
        $this->load->helper('listcode_helper');
        $this->load->helper('message_helper');
        

    }
   
}
