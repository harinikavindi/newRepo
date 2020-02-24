<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryAgeGroup extends Model
{
    
    // protected $fillable = [
    //     'id','category_id','age_group_id'
    // ];//


    /**
 * The table primary key.
 *
 * @var int
 */
protected $primaryKey = 'id';
/**
 * The attributes that are mass assignable.
 *
 * @var array
 */
protected $guarded = [];
/**
 * Make false default (created_at,updated_at).
 *
 * @var boolean
 */
public $timestamps = false;
/**
 * The table associated with the model.
 *
 * @var string
 */
protected $table = 'category_age_groups';


// public function categories()
//     {
//         return $this->hasMany ('App\Category','category_id','id');
//     }

public function age_groups()
{
    return $this->belongsTo('App\AgeGroup','age_group_id','id');

}

}
