<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Expense;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ExpenseTrackerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $expenses = $user -> expenses -> sortBy ('currency');
        $categories = Category::all();
        $my_expenses = Expense::where('booking_type', '=', 'expense')->where('user_id', '=', Auth::id())->get();
        $my_incomes = Expense::where('booking_type', '=', 'income')->where('user_id', '=', Auth::id())->get();
        $my_categories = Category::all();


        return view('dashboard', [
            'expenses' => $expenses,
            'categories' => Category::all(),
            'my_expenses' => $my_expenses,
            'my_incomes' =>$my_incomes,
            'my_categories' =>$my_categories,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $expense = new Expense();
        $expense->user_id = Auth::id();
        $expense->amount = $request->amount;
        $expense->booking_type = $request->booking_type;
        $expense->currency = $request->currency;
        $expense->category_id= $request->category_id;
        $expense->description = $request->description;
        $expense->save();
        return redirect()->route('tracker');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function tracker()
    {
        return view('tracker');

    }

    public function admin()
    {
        return view('admin');
    }
}
