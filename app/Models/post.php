<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;
    protected $table = 'my_post';
    protected $primarykey = 'my_id';
    protected $keytype = 'string';
    public $incrementing = false;
}
