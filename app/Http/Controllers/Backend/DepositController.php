<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Transactions\DepositStoreForm;
use App\Models\Backend\Transaction;
use App\Models\User;
use Illuminate\Http\Request;

class DepositController extends Controller
{
    protected $deposits = [], $deposit;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.deposits.index', [
            'deposits' => Transaction::where(['user_id' => auth()->id(), 'transaction_type' => 'deposit'])->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.deposits.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DepositStoreForm $request)
    {

        Transaction::storeOrUpdateTransaction($request, 'deposit');
        User::updateUserAmount($request);
        return back()->with('success', 'New deposit created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
