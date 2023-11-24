<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Relocation extends Model
{
    use HasFactory;
    //protected $table = 'relocations';

    protected $fillable = [
        'addressfrom',
        'addressto',
        'appartment_from',
        'appartment_to',
        'bedroom_from',
        'bedroom_to',
        'floor_from',
        'floor_to',
        'Mfirst_name',
        'Mlast_name',
        'Memail',
        'Mphone',
        'checkboxes',
        'Mdate',
        'Mtime',
        'Mtextarea',
        'file'
    ];

    protected $casts = [
        'checkboxes' => 'array',
    ];
}
