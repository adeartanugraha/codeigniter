<?php 

namespace App\Controllers;

class buku extends BaseController
{
    public function index()
    {
        echo "Halo ini adalah controller buku <a href='" . route_to('judul') . "'>Link ke routing judul</a>";
    }
    
    public function judul()
    {
        echo "ini adalah method judul di controller buku";
    }
    public function idBuku($id)
    {
        echo "ini adalah method idBuku, ID buku : $id";
    }
    public function judulBuku($judul)
    {
        echo "ini adalah method judulBuku, judul buku : $judul";
    }
}


?>