<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * 
 */
class tbl_lichchieu extends Model
{
	public $timestamps = false;
	protected $table = 'tbl_lichchieu';
	protected $fillable = [
		"idPhim",
		"idPhong",
		"giochieu",
		"statusLC"
	];

	public function tbl_phim(){
		return $this->belongsTo(tbl_phim::class,'idPhim','idPhim');
	}
}