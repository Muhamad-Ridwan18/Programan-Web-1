<?php

class Databarang extends Controller {
    public function index() {
        $data['nama'] = 'Laptop';
        $data['harga'] = '500.000';
        $data['stok'] = '30';
    
        $this->view('databarang', $data);
    }
}
