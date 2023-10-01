<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Transaction;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function home()
    {
        return view('front.home.home');
    }
    public function showTransactions()
    {
        return view('backend.transactions.index', [
            'transactions' => Transaction::where(['user_id' => auth()->id()])->get()
        ]);
    }
}
