<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function index()
    {
        $this->load->view('admin/index');
    }

    public function besin()
    {
        $data['besin'] = besin::select();
        $this->load->view('admin/besin' , $data);
    }

       public function ogunekle()
    {
        if (isPost()) {
            $data = ['gun' => postvalue('gun'), 'gunlukkalori' => postvalue('gunlukkalori')];
            gunluk::insert($data);
            $this->load->view('admin/gunluk');
        }
            
        $this->load->view('admin/ogunekle' );
        
    }
    public function ogunguncelle($id)
    {
        $data['gunluk'] = gunluk::find($id);
        if (isPost()) {
            $data = ['gun' => postvalue('gun'), 'gunlukkalori' => postvalue('gunlukkalori')];
            gunluk::update($id,$data);
            redirect('admin/gunluk');
        }

       
        $this->load->view('admin/ogunguncelle',$data);
        gunluk::delete($id);
        $this->load->view('admin/gunluk');
    }

    public function ogunsil($id)
    {
        gunluk::delete($id);
        $this->load->view('admin/gunluk');
    }

      public function gunluk()
    {
        $this->load->view('admin/gunluk');
    }

 
}
