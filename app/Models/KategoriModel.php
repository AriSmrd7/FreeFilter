<?php
namespace App\Models;
 
use CodeIgniter\Model;
 
class KategoriModel extends Model
{
    protected $table = "kategori_ig";
    protected $primaryKey = "IdKategori";
    protected $returnType = "object";
    protected $useTimestamps = true;
    protected $allowedFields = ['IdKategori', 'NamaKategori', 'DateAdded', 'DateUpdated'];
}