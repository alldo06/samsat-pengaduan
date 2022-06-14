<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Kyslik\ColumnSortable\Sortable;
use Illuminate\Database\Eloquent\Model;

class Tanggapan extends Model
{
	use HasFactory;
	use Sortable;

	protected $guarded = ['id'];

	public function pengaduan()
	{
		return $this->hasOne(Pengaduan::class, 'pengaduan_id');
	}
}
