<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\tbl_loaiphim;
use App\Models\tbl_lichchieu;

class tbl_phim extends Model
{
	public $timestamps = false;
    protected $table = 'tbl_phim';
	protected $fillable = [
		"idLPhim",
		"tenPhim",
		"trangthai",
		"imgPhim"
	];

    public function tbl_lichchieu(){
		return $this->hasMany(tbl_lichchieu::class,'idPhim','idPhim');
	}

	public function tbl_loaiphim(){
		return $this->belongsTo(tbl_loaiphim::class,'idLPhim','idLPhim');
	}
}
