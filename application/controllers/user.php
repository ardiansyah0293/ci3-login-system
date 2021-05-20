<?php
defined('BASEPATH') or exit('No direct script access allowed');

class user extends CI_Controller
{

    public function index()
    {
        $info = $this->db->get_where('user', ['id' =>
        $this->session->userdata('id')])->row_array();

        $data = [
            'title' => 'Dashboard',
            'Nama' => $info['name']
        ];
        $this->load->view('templates/dash_header', $data);
        $this->load->view('templates/dash_sidebar', $data);
        $this->load->view('templates/dash_wrapper', $data);
        $this->load->view('user/index', $data);
        $this->load->view('templates/dash_wrapper2');
        $this->load->view('templates/dash_footer');
    }
}
