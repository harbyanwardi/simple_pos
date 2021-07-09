<?php
class M_pembelian extends CI_Model{

	function simpan_pembelian($nofak,$tglfak,$beli_kode){
		$idadmin=$this->session->userdata('idadmin');
		$this->db->query("INSERT INTO tbl_beli (beli_nofak,beli_tanggal,beli_user_id,beli_kode) VALUES ('$nofak','$tglfak','$idadmin','$beli_kode')");
		foreach ($this->cart->contents() as $item) {
			$data=array(
				'd_beli_nofak' 		=>	$nofak,
				'd_beli_barang_id'	=>	$item['id'],
				'd_beli_harga'		=>	$item['price'],
				'd_beli_jumlah'		=>	$item['qty'],
				'd_beli_total'		=>	$item['subtotal'],
				'd_beli_kode'		=>	$beli_kode
			);
			$this->db->insert('tbl_detail_beli',$data);
			$this->db->query("update tbl_barang set barang_stok=barang_stok+'$item[qty]',barang_harpok='$item[price]',barang_harjul='$item[harga]' where barang_id='$item[id]'");
		}
		return true;
	}
	function get_kobel(){
		// $q = $this->db->query("SELECT MAX(RIGHT(beli_kode,6)) AS kd_max FROM tbl_beli WHERE DATE(beli_tanggal)=CURDATE()");
		$q = $this->db->query("SELECT MAX(RIGHT(beli_kode,6)) AS kd_max FROM tbl_beli");
        $kd = "";
        if($q->num_rows()>0){
            foreach($q->result() as $k){
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%06s", $tmp);
            }
        }else{
			$kd = "000001";
        }
        return "A".date('dmy').$kd;
	}

	function tampil_jurnal(){
		$hsl=$this->db->query("SELECT * FROM tbl_jurnal_parent");
		return $hsl;
	}

	function insert($table,$data) {
		
		$this->db->insert($table, $data);
		$query = $this->db->insert_id();
		return $query;

	}

	function select_where($table,$where) {
		

		$this->db->select("*");
		$this->db->from($table);
		$this->db->where($where);
		$query = $this->db->get();
		return $query->row();
	}

	// function get_jurnal($id){
	// 	$hsl=$this->db->query("
	// 		SELECT * FROM tbl_jurnal_parent
	// 		where id_jurnal_parent='$id'
	// 	");
	// 	return $hsl;
	// }

	function get_detail_jurnal($id){
		$hsl=$this->db->query("
			SELECT * FROM tbl_jurnal as T01 join tbl_jurnal_parent as T02
			ON T01.id_jurnal_umum = T02.id_jurnal_parent
			where id_jurnal_umum='$id'
		");
		return $hsl;
	}

	function get_total($id){
		$hsl=$this->db->query("
			SELECT SUM(T01.debit) as total_debit, SUM(T01.kredit) as total_kredit 
			FROM tbl_jurnal as T01 join tbl_jurnal_parent as T02
			ON T01.id_jurnal_umum = T02.id_jurnal_parent
			where id_jurnal_umum='$id'
		");
		return $hsl->row();
	}
}