<?php namespace App\Controllers;
  
use App\Models\KategoriModel;
use App\Models\FilterModel;

class DownloadController extends BaseController
{
    protected $kategori_ig;
    protected $filter_ig;
 
    function __construct()
    {
        $this->kategori_ig = new KategoriModel();
        $this->filter_ig = new FilterModel();
    }
 
    public function download()
    {
        $data['kategori_ig'] = $this->kategori_ig->findAll();
        $data['filter_ig'] = $this->filter_ig->getKat();  

        return view('download', $data);
    }

}