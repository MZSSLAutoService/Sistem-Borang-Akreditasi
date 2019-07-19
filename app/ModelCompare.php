<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelCompare extends Model
{
    protected $table = 'compare';
	protected $fillable = ['id','string1', 'string2', 'string3','string4', 'string5']; 
	public $primarykey='id';
}
