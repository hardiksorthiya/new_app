<?php

namespace App\Models\Admin;

use App\Models\Admin\IconBox;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SolutionPages extends Model
{
    protected $table = 'solutionpages';
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
        'meta_keyword',
        'status',
        'icon_box_id'
    ];

    public function iconBox()
    {
        return this->hasMany(IconBox::class,'icon_box_id','id');
    }

   
}
