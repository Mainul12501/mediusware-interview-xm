<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Transactions\WithdrawalStoreForm;
use App\Models\Backend\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use function Nette\Utils\data;

class WithdrawalController extends Controller
{
    protected $totalDeposit, $totalWithdrawal, $fee = 0, $user;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.withdrawals.index', [
            'withdrawals' => Transaction::where(['user_id' => auth()->id(), 'transaction_type' => 'withdrawal'])->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.withdrawals.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(WithdrawalStoreForm $request)
    {
        $this->totalDeposit = Transaction::totalDeposit();
        $this->totalWithdrawal = Transaction::totalWithdrawal();
        if (($this->totalWithdrawal+$request->amount) > $this->totalDeposit)
        {
            return back()->with('error', 'Limit Exceeded');
        }
        $this->fee = $this->setFee($request);
        $request['fee'] = $this->fee;

        Transaction::storeOrUpdateTransaction($request, 'withdrawal');
        User::updateUserAmount($request, $this->fee);
        return back()->with('success', 'New Withdrawal created successfully.');
    }

    public function setFee ($request)
    {
        $this->user = auth()->user();
        if ($this->user->account_type == 'individual')
        {
            if (now()->format('D') == 'Fri' || (Transaction::totalWithdrawalInThisMonth() + $request->amount) <= 5000 || $request->amount <= 1000)
            {
                $this->fee = 0;
            } elseif ($request->amount > 1000)
            {
                $this->fee = (($request->amount - 1000) * 0.015)/100;
            }
        } elseif ($this->user->account_type == 'business')
        {
            $this->totalWithdrawal = Transaction::totalWithdrawal();
            if ($this->totalWithdrawal > 50000)
            {
                $this->fee = ($request->amount * 0.015)/100;
            } else {
                $this->fee = ($request->amount * 0.025)/100;
            }
        }
        return $this->fee;
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
