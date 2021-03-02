<?php

class Dashboard extends Controller {
	
	
	public function index()
	{
		if(isset($_SESSION) && $_SESSION['login'] == true){
			if(isset($_SESSION) && $_SESSION['admin'] == true){
				$data['header'] = 'Dashboard';
				$data['link_header'] = 'dashboard';
				$data['page'] = 'Home';
				$this->view('template/header',$data);
				$this->view('dashboard/index');
				$this->view('template/footer');
			}else{
				Flasher::setFlash('login terlebih dahulu','error');
				header('Location: '.BASE_URL.'/auth');
			}
		}else{
			Flasher::setFlash('login terlebih dahulu','error');
			header('Location: '.BASE_URL.'/auth');
		}
	}

	public function pengiriman()
	{
		if(isset($_POST['submit'])){
			if($this->model('M_Pengiriman')->upload()){
				Flasher::setFlash('Data Berhasil Di tambahkan','success');
				header('Location: '.BASE_URL.'/dashbord/pengiriman');
			}
		}else{
            $data['header'] = 'Dashboard';
            $data['link_header'] = 'Pengiriman';
            $data['page'] = 'Home';
			$data['pengiriman'] = $this->model('M_Pengiriman')->getAll();
            $this->view('template/header', $data);
            $this->view('dashboard/pengiriman/index',$data);
            $this->view('template/footer');
        }
	}
	public function edit_pengiriman($id)
	{
		if(isset($_POST['submit'])){
			if($this->model('M_Pengiriman')->update($id)){
				Flasher::setFlash('Data Berhasil Di tambahkan','success');
				header('Location: '.BASE_URL.'/dashbord/pengiriman');
			}
		}else{
            $data['header'] = 'Dashboard';
            $data['link_header'] = 'Pengiriman';
            $data['page'] = 'Home';
			$data['pengiriman'] = $this->model('M_Pengiriman')->getData($id);
            $this->view('template/header', $data);
            $this->view('dashboard/pengiriman/edit',$data);
            $this->view('template/footer');
        }
	}
	public function delete_pengiriman($id)
	{
		
		if($this->model('M_Pengiriman')->delete($id)){
			Flasher::setFlash('Data Berhasil Di Hapus','success');
			header('Location: '.BASE_URL.'/dashbord/pengiriman');
		}
	}
}