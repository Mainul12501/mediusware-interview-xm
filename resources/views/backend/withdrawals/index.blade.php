@extends('backend.master')

@section('title', 'Show Withdrawal Transactions')

@section('body')
    <section class="mt-5">
        <div class="row">
            <div class="col-md-7 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center">My Withdrawal Transactions</h2>
                    </div>
                    <div class="card-body">
                        <table class="table table-borderless">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Amount</th>
                                    <th>Fee</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($withdrawals as $withdrawal)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $withdrawal->amount }}</td>
                                    <td>{{ $withdrawal->fee }}</td>
                                    <td>{{ \Illuminate\Support\Carbon::parse($withdrawal->date)->format('d M Y') }}</td>
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

