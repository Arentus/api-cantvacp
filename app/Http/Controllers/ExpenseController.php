<?php

namespace App\Http\Controllers;

use App\Expense;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return Expense::create([
            'user_Id' => $request->user_Id,
            'budget_id' => $request->budget_Id,
            'control_id' => $request->control_Id,
            'description' => $request->description,
            'amount' => $request->amount
        ]);
    }
    
    public function getAll($id, $control_id = null){ 
        if($control_id){
            $expenses = Expense::where('user_Id',$id)
                ->where('control_Id',$control_id)
                ->orderBy('created_at','desc')->get();
        }else{
            $expenses = Expense::where('user_Id',$id)->orderBy('created_at','desc')->get();
        }

        return json_encode($expenses);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Expense  $Expense
     * @return \Illuminate\Http\Response
     */
    public function show(Expense $expense)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Expense  $Expense
     * @return \Illuminate\Http\Response
     */
    public function edit(Expense $expense)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Expense  $Expense
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Expense $expense)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Expense  $Expense
     * @return \Illuminate\Http\Response
     */
    public function remove(Request $request){

        $expense = Expense::find($request->id);
        $expense->delete();

        return 'Borrado menor';
    }
}
