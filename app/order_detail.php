<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order_detail extends Model
{
    protected $table = 'order_detail';
    public function users()
    {
        return $this->belongsTo('App\Users','user_id','user_id');
    }
}
