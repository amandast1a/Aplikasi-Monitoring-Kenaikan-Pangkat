<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;
    protected $table = "statuses";
    protected $primarykey = "id";
    protected $fillable = [
        'id', 'status','time',
    ];

    public function Form_jabatan_fungsional()
    {
        return $this->hasMany(Form_jabatan_fungsional::class);
    }
}
