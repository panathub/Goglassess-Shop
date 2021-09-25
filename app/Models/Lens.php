<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
class Lens extends Model
{
    
    protected $table = 'lens';
    protected $primaryKey = 'lensID';
    protected $fillable = [ 'lenstype', 'lensprice'];
    public $timestamps = false;
    
}