<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;
use Illuminate\Database\Eloquent\SoftDeletes;

class Todo extends Model {


	 use SoftDeletes;

    protected $dates = ['deleted_at'];


	protected $fillable = [

		'content',
		'done',
		'active'
	];



public function scopeDone($query)
{
	$query->where('done' , '=' , '1');
}



public function scopeNotdone($query)
{
	$query->where('done' , '=' , '0');
}


public function user()
{
	return $this->belongsTo('app\User');
}

public function scopeAuthenticate($query)
{
	$query->where('user_id' , '=' , Auth::user()->id);
}


}
