<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TermRelation extends Model
{
    protected $table = 'term_relationships';
    protected $primaryKey = null;
    public $incrementing = false;
    public $timestamps = false;
}
