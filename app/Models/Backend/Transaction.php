<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'transaction_type', 'amount', 'fee', 'date'];

    protected static $transaction;

    public static function storeOrUpdateTransaction ($request, $type, $id = null)
    {
        Transaction::updateOrCreate(['id' => $id], [
            'user_id' => auth()->id(),
            'transaction_type' => $type,
            'amount' => $request->amount,
            'date' => $request->date,
            'fee' => $request->fee ?? 0
        ]);
    }

    public static function totalDeposit ()
    {
        return Transaction::where(['transaction_type' => 'deposit', 'user_id' => auth()->id()])->sum('amount');
    }
    public static function totalWithdrawal ()
    {
        return Transaction::where(['transaction_type' => 'withdrawal', 'user_id' => auth()->id()])->sum('amount');
    }
    public static function totalWithdrawalInThisMonth ()
    {
        return Transaction::where(['transaction_type' => 'withdrawal', 'user_id' => auth()->id()])->whereMonth('created_at', date('m'))->sum('amount');
    }
}
