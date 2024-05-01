<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mews\Purifier\Casts\CleanHtml;

class Report extends Model
{
    use HasFactory;

    protected $casts = [
        'message' => CleanHtml::class, // cleans both when getting and setting the value
    ];

    public $fillable = ['group', 'item', 'name', 'email', 'option', 'message'];

}
