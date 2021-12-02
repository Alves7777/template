@extends('layouts.ecommerce')

@section('content')
<body>
<div class="container">
    <div class="row justify-content-center mt-4">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <form id="sign_in_adm" method="POST" action="{{ route('admin.login.submit') }}">
                        {{ csrf_field() }}
                        <h1>Admin Login</h1>
                        <div >
                            <input type="email" name=email class="form-control" placeholder="Email Address" value="{{ old('email') }}" required autofocus>
                        </div>
                        @if ($errors->has('email'))
                            <span ><strong>{{ $errors->first('email') }}</strong></span>
                        @endif
                        <br>
                        <div >
                            <input type="password" name="password" class="form-control" required>
                        </div>
                        <br>
                        <div >
                            <button type="submit" class="btn btn-primary">Admin Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
{{--</html>--}}
@endsection
