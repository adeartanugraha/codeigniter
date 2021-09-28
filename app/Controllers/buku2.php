<?php 

namespace App\Controllers;

class buku2 extends BaseController
{
    public function index(){
        return view('tampil_buku');
    }
    
    public function tampilBuku (){
        return view('buku/tampil_buku');
    }
    
    public function page (){
        echo view('header');
        echo view('content');
        echo view('footer');
    }
    
    public function catalogBuku1(){
        $data = [
            'judul_buku' => 'Belajar Codeigniter 4'
        ];
        return view('catalog_buku1', $data);
    }
    
    public function catalogBuku2(){
        $data = [
            'header_buku' => 'Catalog Buku',
            'penerbit' => 'Bagus Made Arta Nugraha',
            'judul_buku' => ['Belajar code igniter 3', 'Belajar PHP dan MySQL', 'Belajar Laravel', 'Belajar Java']
        ];
        return view('catalog_buku2', $data);
    }
}

?>