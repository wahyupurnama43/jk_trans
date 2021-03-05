<?php 

class M_Pengiriman
{
    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAll()
    {
        $sql = "SELECT * FROM `pengiriman`";
        $this->db->query($sql);
        return $this->db->resultSet();
    }
    public function getData($id)
    {
        $sql = "SELECT * FROM `pengiriman` WHERE id=$id";
        $this->db->query($sql);
        return $this->db->single();
    }

    public function getRange()
    {
        $by = $_POST['by'];
        $end = $_POST['end'];

        $sql = "SELECT * FROM `pengiriman` WHERE created_at BETWEEN '$by' and '$end'";
        $this->db->query($sql);
        return $this->db->resultSet();
    }

    public function count()
    {
        $sql = "SELECT count(*) as count FROM pengiriman";
        $this->db->query($sql);
        return $this->db->resultSet();
    }

    public function upload()
    {
        $kode = htmlspecialchars($_POST['kode'],ENT_QUOTES);
        $jumlah = $_POST['jumlah'];
        $berat = htmlspecialchars($_POST['berat'],ENT_QUOTES);
        $harga = $_POST['harga'];
        $penerima = htmlspecialchars($_POST['penerima'],ENT_QUOTES);
        $keterangan = htmlspecialchars($_POST['keterangan'],ENT_QUOTES);
        $status =$_POST['status'];
        
        $sql = "INSERT INTO `pengiriman` (`kode_pengiriman`, `jumlah`, `berat`, `harga`, `penerima`, `keterangan`, `status`) VALUES (:kode,:jumlah,:berat,:harga,:penerima,:keterangan,:sts)";
        $this->db->query($sql);
        $this->db->bind('kode',$kode);
        $this->db->bind('jumlah',$jumlah);
        $this->db->bind('berat',$berat);
        $this->db->bind('harga',$harga);
        $this->db->bind('penerima',$penerima);
        $this->db->bind('keterangan',$keterangan);
        $this->db->bind('sts',$status);
        $this->db->execute();
        return true;
    }

    public function delete($id)
    {
        $sql = "DELETE FROM `pengiriman` WHERE id=$id";
        $this->db->query($sql);
        $this->db->execute();
        return true;
    }


    public function update($id)
    {
        $kode = htmlspecialchars($_POST['kode'],ENT_QUOTES);
        $jumlah = $_POST['jumlah'];
        $berat = htmlspecialchars($_POST['berat'],ENT_QUOTES);
        $harga = $_POST['harga'];
        $penerima = htmlspecialchars($_POST['penerima'],ENT_QUOTES);
        $keterangan = htmlspecialchars($_POST['keterangan'],ENT_QUOTES);
        $status =$_POST['status'];
        
        $sql = "UPDATE `pengiriman` SET kode_pengiriman=:kode, jumlah=:jumlah, berat=:berat, harga=:harga, penerima=:penerima, keterangan=:keterangan,status=:sts WHERE id=$id";
        $this->db->query($sql);
        $this->db->bind('kode',$kode);
        $this->db->bind('jumlah',$jumlah);
        $this->db->bind('berat',$berat);
        $this->db->bind('harga',$harga);
        $this->db->bind('penerima',$penerima);
        $this->db->bind('keterangan',$keterangan);
        $this->db->bind('sts',$status);
        $this->db->execute();
        return true;
        
    }
}