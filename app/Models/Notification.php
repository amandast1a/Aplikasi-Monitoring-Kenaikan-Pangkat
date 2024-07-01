<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;
    protected $table = "notification";
    protected $primarykey = "id";
    protected $fillable = [
        'user_id',
        'form_fungsionals_id',
        'type',
        'data',
        'read',
    ];

    /**
     * Get the user that owns the notification.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the form fungsional that owns the notification.
     */
    public function formFungsional()
    {
        return $this->belongsTo(Form_jabatan_fungsional::class, 'form_fungsionals_id');
    }
}
