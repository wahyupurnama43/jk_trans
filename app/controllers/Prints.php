<?php 

class Prints extends Controller
{
    public function index()
    {
        $data['pengiriman'] = $this->model('M_Pengiriman')->getAll();
        $this->view('print/index',$data);
    }

    public function range()
    {
        $data['pengiriman'] = $this->model('M_Pengiriman')->getRange();
        $this->view('print/index',$data);
    }
}