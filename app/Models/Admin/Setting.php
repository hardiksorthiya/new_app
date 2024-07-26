<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $table = 'table_settings';

    protected $fillable = [
        'favicon',
        'logo',
        'facebook',
        'instagram',
        'youtube',
        'linkedin',
        'phone',
        'email',
        'address',
    ];
}
