<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productreview extends Model
{
    use HasFactory;
    protected $table= "productreviews";
    public function customer()
    {
        return $this->belongsTo('App\Models\Customer','customer_id');
    }
    public function provider()
    {
        return $this->belongsTo('App\Models\Provider','provider_id');
    }
    public function product()
    {
        return $this->belongsTo('App\Models\Product','product_id');
    }
    public function setCustomerId($id)
    {
        $this->customer_id=$id;
    }

    public function getCustomerId()

    {
        return $this->customer_id;
    }

    public function setProviderId($id)
    {
        $this->provider_id=$id;
    }

    public function getProviderId()

    {
        return $this->provider_id;
    }

    public function setProductId($id)
    {
        $this->product_id=$id;
    }

    public function getProductId()

    {
        return $this->product_id;
    }

    public function setComment($comment)
    {
        $this->comment=$comment;
    }

    public function getComment()

    {
        return $this->comment;
    }
  
   
}

