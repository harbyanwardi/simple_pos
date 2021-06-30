<?php
class Jurnal extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url();
            redirect($url);
        };
		$this->load->model('m_pembelian');
		$this->load->model('m_barang');
		$this->load->model('m_satuan');
	}
	function index(){
		if($this->session->userdata('akses')=='1'){
			$data['data']=$this->m_pembelian->tampil_jurnal();
			// $data['kat']=$this->m_kategori->tampil_kategori();
			// $data['kat2']=$this->m_kategori->tampil_kategori();
			// $data['data2']=$this->m_satuan->tampil_satuan();
			$this->load->view('admin/v_jurnal_index',$data);
		}else{
	        echo "Halaman tidak ditemukan";
	    }
	}

	function detail($id){
		if($this->session->userdata('akses')=='1'){
			$where = array(
				'id_jurnal_parent' => $id
			);
			$data['data']=$this->m_pembelian->get_detail_jurnal($id);
			$data['total']=$this->m_pembelian->get_total($id);
			$data['data_parent']=$this->m_pembelian->select_where("tbl_jurnal_parent",$where);
			
			// $data['kat']=$this->m_kategori->tampil_kategori();
			// $data['kat2']=$this->m_kategori->tampil_kategori();
			// $data['data2']=$this->m_satuan->tampil_satuan();
			$this->load->view('admin/v_jurnal_detail',$data);
		}else{
	        echo "Halaman tidak ditemukan";
	    }
	}

	function tambah(){
	if($this->session->userdata('akses')=='1'){
		//$data['data']=$this->m_pembelian->tampil_jurnal();
		// $data['kat']=$this->m_kategori->tampil_kategori();
		// $data['kat2']=$this->m_kategori->tampil_kategori();
		// $data['data2']=$this->m_satuan->tampil_satuan();
		$this->load->view('admin/v_jurnal');
	}else{
        echo "Halaman tidak ditemukan";
    }
	}
	
	function create(){
		if($this->session->userdata('akses')=='1'){
			$no_trans=$this->input->post('no_trans');
			$tgl=$this->input->post('tgl');
			$where = array(
				'no_trans' => $no_trans
			);
			$cek = $this->m_pembelian->select_where("tbl_jurnal_parent",$where);
			if(count($cek) == 1 ) {
				$data_parent = array(
	               'no_trans' => $no_trans,
	               'tanggal'  => $tgl,
	            );
				$insert_id = $cek->id_jurnal_parent;
				
			}
			else{
				$insert_id = $this->m_pembelian->insert("tbl_jurnal_parent",$data_parent);
			}
			 
			
		
			$data = array(
	               'id_jurnal_umum' => $insert_id,
	               'id_akun'  => $this->input->post('akun'),
	               'deskripsi'   => $this->input->post('deskripsi'),
	               'debit'    => $this->input->post('debit'),
	               'kredit'    => $this->input->post('kredit'),
	            );

			 $this->m_pembelian->insert("tbl_jurnal",$data); 
			redirect('admin/jurnal');
		}else{
	        echo "Halaman tidak ditemukan";
	    }
	}

	function edit_barang(){
	if($this->session->userdata('akses')=='1'){
		$kobar=$this->input->post('kobar');
		$nabar=$this->input->post('nabar');
		$kat=$this->input->post('kategori');
		$satuan=$this->input->post('satuan');
		$harpok=str_replace(',', '', $this->input->post('harpok'));
		$harjul=str_replace(',', '', $this->input->post('harjul'));
		$harjul_grosir=str_replace(',', '', $this->input->post('harjul_grosir'));
		$stok=$this->input->post('stok');
		$min_stok=$this->input->post('min_stok');
		$this->m_barang->update_barang($kobar,$nabar,$kat,$satuan,$harpok,$harjul,$harjul_grosir,$stok,$min_stok);
		redirect('admin/barang');
	}else{
        echo "Halaman tidak ditemukan";
    }
	}
	function hapus_barang(){
	if($this->session->userdata('akses')=='1'){
		$kode=$this->input->post('kode');
		$this->m_barang->hapus_barang($kode);
		redirect('admin/barang');
	}else{
        echo "Halaman tidak ditemukan";
    }
	}
}