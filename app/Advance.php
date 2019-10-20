<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Advance extends Model
{
    //


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_Id','control_Id', 'type','nroOrder', 'nroInvoice','description', 'date','status','totalAmount',
    ];
}
