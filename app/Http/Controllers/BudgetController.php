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
            'control_Id' => $request->control_Id,
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

        $budget->control_Id = $request->control_Id;
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
    // filter by user_id
    public function getAll($id){ 
        return Budget::where('user_Id',$id)->orderBy('date','desc')->get();
    }
    public function getAllById($id, $control_id=null){

        if($control_id){
            $budgets = Budget::where('user_Id',$id)
                ->where('control_Id',$control_id)
                ->orderBy('date','desc')->paginate(8);
        }else{
            $budgets = Budget::where('user_Id',$id)->orderBy('date','desc')->paginate(8);
        }
        

        return json_encode($budgets);
    }
    public function remove(Request $request){

        $budget = Budget::find($request->id);
        $budget->delete();

        return 'OK';
    }
}
