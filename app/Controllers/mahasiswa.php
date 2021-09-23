<?php 

namespace App\Controllers;

class mahasiswa extends BaseController
{
    public function index()
    {
        echo 'Halo ini adalah method index - controller mahasiswa';
    }
    
    public function addMahasiswa()
    {
        echo 'Halo ini adalah method addMahasiswa - controller mahasiswa';
    }
    
    public function updateMahasiswa($nim)
    {
        echo 'Halo ini adalah method updateMahasiswa - controller mahasiswa';
    }
    
    public function deleteMahasiswa($nim)
    {
        echo 'Halo ini adalah method deleteMahasiswa - controller mahasiswa';
    }
    
    public function profilMahasiswa($nama, $usia)
    {
        echo "Nama anda adalah $nama, usia $usia";
    }
    

    //controller nama/$nama/$nim dan menthod private
    // public function nama($nama, $nim)
    // {
    //     echo "Nama saya adalah " . $nama . ", NIM " . $nim;
    // }

    // protected function sampleprivate()
    // {
    //     echo "Ini adalah contoh private method";
    // }

    // public function testingprivate()
    // {
    //     return $this->sampleprivate();
    // }
}


?>