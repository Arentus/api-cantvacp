<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Budget;
use Illuminate\Support\Facades\DB;

class BudgetController extends Controller
{
    //

    public function create(Request $request){
    	
    	/*$request->validate([
            'username' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6'],
        ]);*/

        return Budget::create([  
            'user_Id' => $request->user_Id,
            'nroOrder' => $request->nroOrder,
            'nroInvoice' => $request->nroInvoice,
            'description' => $request->description,
            'date' => $request->date,
            'status' => $request->status,
            'type' => $request->type,
            'totalAmount' => $request->totalAmount,
            'DRSE' => $request->DRSE,
            'DEPS' => $request->DEPS,
            'totalIncome' => $request->totalIncome
        ]);
    }

    public function getById(Request $request){
        return $budget = Budget::find($request->id);
    }

    public function update(Request $request){
        
        /*$request->validate([
            'username' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6'],
        ]);*/

        $budget = Budget::find($request->id);

        $budget->user_Id = $request->user_Id;
        $budget->nroOrder = $request->nroOrder;
        $budget->nroInvoice = $request->nroInvoice;
        $budget->description = $request->description;
        $budget->date = $request->date;
        $budget->status = $request->status;
        $budget->type = $request->type;
        $budget->totalAmount = $request->totalAmount;
        $budget->DRSE = $request->DRSE;
        $budget->DEPS = $request->DEPS;
        $budget->totalIncome = $request->totalIncome;
        $budget->save();
        
        return 'OK';
    }
    //

    public function getAll(){
        return json_encode(Budget::paginate(10));

    }
    public function getAllById($id){
        return $budgets = Budget::where('user_Id',$id)->get();
    }
    public function remove(Request $request){

        $budget = Budget::find($request->id);
        $budget->delete();

        return 'OK';
    }
}
