<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostMeta extends Model
{
    protected $table = 'postmeta';
    protected $primaryKey = 'meta_id';
    public $timestamps = false;
}
