<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    //
    protected $fillable = [
        'user_Id', 'control_Id', 'description', 'amount'
    ];
}
