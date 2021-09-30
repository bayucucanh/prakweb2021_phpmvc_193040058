<?php 

class About {
  public function index($nama = 'nama', $pekerjaan = 'pekerjaan') {
    echo "Halo, nama saya adalah $nama, saya adalah seorang $pekerjaan";
  } 
  public function page()
  {
    echo 'About/page';
  } 
}