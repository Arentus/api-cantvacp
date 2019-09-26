<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Budget extends Model
{
    //


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_Id', 'nroOrder', 'nroInvoice','description', 'date','status','type','totalAmount','DRSE','DEPS','totalIncome'
    ];
}
