@extends('backend.master')

@section('title', 'Show Deposit')

@section('body')
    <section class="mt-5">
        <div class="row">
            <div class="col-md-7 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center">All Transactions</h2>
                    </div>
                    <div class="card-body">
                        <h2>Current Balance: {{ auth()->user()->balance }}</h2>
                        <table class="table table-borderless">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Type</th>
                                <th>Amount</th>
                                <th>Fee</th>
                                <th>Date</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($transactions as $transaction)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $transaction->transaction_type }}</td>
                                    <td>{{ $transaction->amount }}</td>
                                    <td>{{ $transaction->fee }}</td>
                                    <td>{{ \Illuminate\Support\Carbon::parse($transaction->date)->format('d M Y') }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

