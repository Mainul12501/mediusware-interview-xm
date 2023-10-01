<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @stack('css')
</head>
<body>

    <nav class="navbar navbar-expand navbar-dark bg-dark">
        <div class="container">
            <a href="{{ route('front.home') }}" class="navbar-brand">LOGO</a>
            <ul class="navbar-nav">
{{--                @if(auth()->check())--}}
{{--                    <li><a href="" class="nav-link">Dashboard</a></li>--}}
{{--                @else--}}
                    <li><a href="{{ route('front.home') }}" class="nav-link">Home</a></li>
{{--                @endif--}}
{{--                <li><a href="{{ route('all-transactions') }}" class="nav-link">Transactions</a></li>--}}
{{--                <li class="dropdown">--}}
{{--                    <a href="" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">Deposits</a>--}}
{{--                    <ul class="dropdown-menu">--}}
{{--                        <li><a href="{{ route('deposits.create') }}" class="dropdown-item">New Deposit</a></li>--}}
{{--                        <li><a href="{{ route('deposits.index') }}" class="dropdown-item">Deposit History</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li class="dropdown">--}}
{{--                    <a href="" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">Withdrawals</a>--}}
{{--                    <ul class="dropdown-menu">--}}
{{--                        <li><a href="{{ route('withdrawals.create') }}" class="dropdown-item">New Withdrawal</a></li>--}}
{{--                        <li><a href="{{ route('withdrawals.store') }}" class="dropdown-item">Withdrawal History</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
                @if(auth()->check())
                    <li>
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <button type="submit" class="nav-link">Logout</button>
                        </form>
                    </li>
                @else
                    <li><a href="{{ route('register') }}" class="nav-link">Register</a></li>
                    <li><a href="{{ route('login') }}" class="nav-link">Login</a></li>
                @endif
            </ul>
        </div>
    </nav>

    @yield('body')

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@stack('script')
@if(Session::has('success'))
    <script>
        toastr.success("{{Session::get('success')}}");
    </script>
@endif
</body>
</html>
