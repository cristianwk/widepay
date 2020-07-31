<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Cliente extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
    }

    function index() {
        if ($this->session->userdata('cliente_login') != 1) {
            $this->session->set_userdata('last_page', current_url());
            redirect(base_url(), 'refresh');
        }

        $data['page_name'] = 'dashboard';
        $data['page_title'] = get_phrase('cliente_dashboard');
        $this->load->view('backend/index', $data);
    }

    /*     * *CLIENTE DASHBOARD** */

    function dashboard() {
        if ($this->session->userdata('cliente_login') != 1) {
            $this->session->set_userdata('last_page', current_url());
            redirect(base_url(), 'refresh');
        }
        $page_data['page_name'] = 'dashboard';
        $page_data['page_title'] = get_phrase('cliente_dashboard');
        $this->load->view('backend/index', $page_data);
    }


    function admit_history($task = "") {
        if ($this->session->userdata('cliente_login') != 1) {
            $this->session->set_userdata('last_page', current_url());
            redirect(base_url(), 'refresh');
        }

        $data['page_name'] = 'show_admit_history';
        $data['page_title'] = get_phrase('admit_history');
        $this->load->view('backend/index', $data);
    }

    function operation_history($task = "") {
        if ($this->session->userdata('cliente_login') != 1) {
            $this->session->set_userdata('last_page', current_url());
            redirect(base_url(), 'refresh');
        }

        $data['page_name'] = 'show_operation_history';
        $data['page_title'] = get_phrase('operation_history');
        $this->load->view('backend/index', $data);
    }

    function profile($task = "") {
        if ($this->session->userdata('cliente_login') != 1) {
            $this->session->set_userdata('last_page', current_url());
            redirect(base_url(), 'refresh');
        }

        $cliente_id = $this->session->userdata('login_user_id');
        if ($task == "update") {
                $this->crud_model->update_cliente_info($cliente_id);
                $this->session->set_flashdata('message', get_phrase('profile_info_updated_successfuly'));
                redirect(base_url() . 'index.php?cliente/profile');
        }

        if ($task == "change_password") {
            $password = $this->db->get_where('clientes', array('cliente_id' => $cliente_id))->row()->password;
            $old_password = sha1($this->input->post('old_password'));
            $new_password = $this->input->post('new_password');
            $confirm_new_password = $this->input->post('confirm_new_password');

            if ($password == $old_password && $new_password == $confirm_new_password) {
                $data['password'] = sha1($new_password);

                $this->db->where('cliente_id', $cliente_id);
                $this->db->update('clientes', $data);

                $this->session->set_flashdata('message', get_phrase('password_info_updated_successfuly'));
                redirect(base_url() . 'index.php?cliente/profile');
            } else {
                $this->session->set_flashdata('message', get_phrase('password_update_failed'));
                redirect(base_url() . 'index.php?cliente/profile');
            }
        }

        //add url
        if ($task == "create") {//echo"<pre><br>add url ";print_r($_POST);echo"</pre>";exit;
            //echo "<br>id: ".$_POST['cliente_id'];exit;
            $cliente_id = $_POST['cliente_id'];
            $this->crud_model->save_cliente_url($cliente_id);
            redirect(base_url() . 'index.php?cliente/dashboard');
        }


        $data['page_name'] = 'edit_profile';
        $data['page_title'] = get_phrase('profile');
        $this->load->view('backend/index', $data);
    }

   // View URLs.
    public function Visualizar_urls() {//echo "Visualizar_urls<br>";//exit;
        if ($this->session->userdata('cliente_login') != 1){
            //redirect(base_url() . 'index.php?login', 'refresh');
            $this->session->set_userdata('last_page', current_url());
            redirect(base_url(), 'refresh');
        }

        $data['select_urls'] = $this->crud_model->select_urls();
        $data['page_name'] = 'manage_urls';
        $data['page_title'] = get_phrase('Visualizar_urls');
        $this->load->view('backend/index', $data);
    }

   // View URLs.
    public function Visualizar_urls_user() { //echo "Visualizar_urls_user<br>";//exit;
        if ($this->session->userdata('cliente_login') != 1){
            //redirect(base_url() . 'index.php?login', 'refresh');
            $this->session->set_userdata('last_page', current_url());
            redirect(base_url(), 'refresh');
        }
        $cliente_id = $this->session->userdata('login_user_id');
        $data['select_urls_user'] = $this->crud_model->select_urls_user($cliente_id);
        $data['page_name'] = 'manage_urls';
        $data['page_title'] = get_phrase('Visualizar_urls');
        $this->load->view('backend/index', $data);
    }



}
