<?php

class About {
    public function index($nama = 'nurul', $pekerjaan = 'data analyst')
    {
        echo "Halo, nama saya $nama, saya adalah $pekerjaan";
    }
    public function page() 
    {
        echo 'About/page';
    }
}