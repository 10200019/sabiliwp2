<?php
defined('BASEPATH') or exit('no direct script access allowed');

Class Sepatu extends CI_Controller

{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Review_Sepatu');

    }

    public function index ()
    {
        $this->form_validation->set_rules('nama','nama pembeli',
        'required', [
        'required'=> 'nama pembeli harus di isi'
        ]);
        $this->form_validation->set_rules('nhp', 'nomor hp',
        'required', [
            'required'=>'nomor hp harus di isi'
        ]);

        if ( $this->form_validation->run()  == false) {
            $data['merk']= [ 'Nike', 'Adidas', 'Kickers',
            'Eiger', 'Bucherri'];
            $this->load->view('TOKO_SEPATU/v_input', $data);
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'nhp' => $this->input->post('nhp'),
                'merk'=> $this->input->post('merk'),
                'ukuran' => $this->input->post('ukuran'),
                'harga' =>$this->Review_Sepatu->proses($this->input->post
                ('merk'))
        ];
            $this->load->view('TOKO_SEPATU/v_output', $data);
        }
    }
    
}
