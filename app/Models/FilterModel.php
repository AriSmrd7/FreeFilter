<?php
namespace App\Models;
 
use CodeIgniter\Model;
 
class FilterModel extends Model
{
    protected $table = "filter_ig";
    protected $primaryKey = "IdFilterIg";
    protected $returnType = "object";
    protected $useTimestamps = true;
    protected $allowedFields = ['IdFilterIg', 'NamaFilter', 'IdKategori', 'DescFilter'];


	
	public function getKat()
	{
		 return $this->db->table('filter_ig')
		 ->join('kategori_ig','filter_ig.IdKategori=kategori_ig.IdKategori')   
		 ->get()->getResultObject();  
	}
}