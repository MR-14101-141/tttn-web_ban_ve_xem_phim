<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\tbl_phim;

/**
 * 
 */
class tbl_loaiphim extends Model
{
	public $timestamps = false;
	protected $table = 'tbl_loaiphim';

	public function tbl_phim(){
		return $this->hasMany(tbl_phim::class,'idLPhim','idLPhim');
	}
}