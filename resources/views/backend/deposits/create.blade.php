@extends('backend.master')

@section('title', 'Store Deposit')

@section('body')
    <section class="mt-5">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h2>New Deposit</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('deposits.store') }}" method="post">
                            @csrf
                            <div class="row">
                                <label for="amount" class="col-md-4">Amount</label>
                                <div class="col-md-8">
                                    <input type="number" name="amount" class="form-control" id="amount">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="date" class="col-md-4">Date</label>
                                <div class="col-md-8">
                                    <input type="text" name="date" class="form-control" readonly id="date">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="submit" class="col-md-4"></label>
                                <div class="col-md-8">
                                    <input type="submit" class="btn btn-success" id="submit" value="Store Deposit">
                                </div>
                            </div>
                        </form>
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
