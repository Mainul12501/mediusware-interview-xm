@extends('backend.master')

@section('title', 'Show Deposit')

@section('body')
    <section class="mt-5">
        <div class="row">
            <div class="col-md-7 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center">My Deposit Transactions</h2>
                    </div>
                    <div class="card-body">
                        <table class="table table-borderless">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Amount</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($deposits as $deposit)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $deposit->amount }}</td>
                                        <td>{{ \Illuminate\Support\Carbon::parse($deposit->date)->format('d M Y') }}</td>
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

@push('css')
{{--    <link rel="stylesheet" href="{{ asset('/') }}backend/date-picker/style.css" />--}}
@endpush
@push('script')
{{--    <script src="{{ asset('/') }}backend/date-picker/js.js"></script>--}}
    <script>
        const date = new Date();
        let currentDateTime = date.getFullYear()+'-'+(date.getMonth()+1)+'-'+date.getDate();
        $(function () {
            $('#date').val(currentDateTime);
        })
        // $('#date').datetimepicker({
        //     format: 'yyyy-mm-dd'
        // });
    </script>
@endpush
