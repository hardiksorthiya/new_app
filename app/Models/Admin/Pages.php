<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pages extends Model
{
    use HasFactory;
    protected $table = 'pages';

    protected $fillable = [
        'name',
        'slug',
        'breadcumimage',
        'titletext',
        'description',
        'imageone',
        'imagesecond',
        'descriptiontwo',
        'titletextsecond',
        'descriptionsecond',
        'meta_title',
        'meta_description',
        'meta_keyword'
    ];
}
