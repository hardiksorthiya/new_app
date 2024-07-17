<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IconBox extends Model
{
    use HasFactory;
    protected $table = 'iconbox';

    protected $fillable = [
        'solutionpages_id',
        'box_image',
        'box_text',
        'box_description'
    ];
}
