<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Expense;
use App\Models\User;
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
        $my_expenses = Expense::where('booking_type', '=', 'expense')->where('user_id', '=', Auth::id())->get();
        $my_incomes = Expense::where('booking_type', '=', 'income')->where('user_id', '=', Auth::id())->get();

        return view('dashboard', [
            'my_expenses' => $my_expenses,
            'my_incomes' => $my_incomes,
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
        $expense->expense_date = $request->expense_date;
        $expense->save();
        return redirect()->route('tracker');
    }


    public function storeUser(Request $request)
    {
        $user = new User();
        $user->user_id = Auth::id();
        $user->name = $request->name;
        $user->last_name = $request->last_name;
        $user->first_name = $request->first_name;
        $user->email = $request->email;
        $user->user_role = $request->user_role;
        $user->save();
        return redirect()->route('admin');
    }

    public function storeCategory(Request $request)
    {
        $category = new Category();
        $category->user_id = Auth::id();
        $category->category_name = $category->category_name;
        $category->active = $category->active;
        $user->save();
        return redirect()->route('admin');
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
        $user = Auth::user();
        $categories = Category::where('active', 1)->get();
        $expenses = $user->expenses;

        return view('tracker', [
            'categories' => $categories,
            'expenses' => $expenses,
        ]);

    }

    public function admin()
    {
        return view('admin');
    }
}
