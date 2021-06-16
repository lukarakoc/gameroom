@extends('layouts.admin')

@section('content')

<style>
    #headingadmin {
        padding-top: 50px;
    }
@media(max-width:762px) {
    #logopic {
        padding-top: 200px;
    }

    #headingadmin {
        padding-top: 0;
    }
}
</style>
<div class="container">
    
    <div class="row justify-content-center">
    <img src="{{asset('assets/img/logo.png')}}" alt="" width="300" id="logopic"><br>
        <h1 style="color: #00FFD0; font-family: 'Righteous';" id="headingadmin">Admin Panel</h1>
        <div class="col-md-8">
            <div class="card" style="border-color: #00FFD0; border-radius: 20px;">
                
                <div class="card-body" style="color:black;">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="username" style="color:#00FFD0;" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>

                            <div class="col-md-6">
                                <input id="username" style="border-color: #00FFD0;" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right" style="color: #00FFD0;">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" style="border-color: #00FFD0;" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="mr_btn_fill">
                                    {{ __('Login') }}
                                </button>


                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
