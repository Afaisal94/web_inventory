<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Rekap_bm extends CI_Controller
{
    
        
    function __construct()
    {
        parent::__construct();
        chek_session();
        date_default_timezone_set("Asia/Bangkok");
    }

    public function index()
    {
        $sql = "SELECT * FROM barang_masuk"; 
        $combo = $this->db->query($sql);  
        
        $this->template->load('admin/template','admin/rekap_bm', array(
        'data' => $combo,
        ));
    }

    

}

/* End of file Barang.php */
/* Location: ./application/controllers/Barang.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2019-01-21 06:05:09 */
/* http://harviacode.com */