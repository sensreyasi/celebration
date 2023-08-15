<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConfirmedService extends Model
{
    use HasFactory;
    protected $table= "confirmed_services";
    public function customer()
    {
        return $this->belongsTo('App\Models\Customer','customer_id');
    }
    public function provider()
    {
        return $this->belongsTo('App\Models\Provider','provider_id');
    }

    public function meeting()
    {
        return $this->belongsTo('App\Models\Meeting','meeting_id');
    }
}
