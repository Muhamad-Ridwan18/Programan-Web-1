<?php

class Biodata extends Controller {
    public function index() {
        $data['nama'] = 'Muhamad Ridwan';
        $data['nim'] = 'D112111028';
        $data['kelas'] = 'IF4B';
    
        $this->view('biodata', $data);
    }
}
