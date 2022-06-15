<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Kyslik\ColumnSortable\Sortable;
use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
	use HasFactory;
	use Sortable;

	protected $guarded = ['id'];

	public $sortable = ['nama', 'created_at', 'email', 'nomor_hp', 'isi', 'status', 'alamat'];

	public function tanggapan()
	{
		return $this->hasOne(Tanggapan::class);
	}

	public function scopeFilter($query, array $filters) {
		$query->when($filters['search'] ?? false, function($query, $search) {
			return $query->where(function ($query) use ($search) {
				$query->where('isi', 'like', '%' . $search . '%')
					->orWhere('nama', 'like', '%' . $search . '%');
			});
		});
	}
}
