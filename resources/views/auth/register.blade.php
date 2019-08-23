@extends('layouts.master')

@section('content') 
<BR>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-md-offset-2">
            
                

                
                <div class="section-title text-center">
                <h4>{{ __('AJOUTER UN NOUVEAU ADMINISTRATEUR') }}</h4><br>
                        <figure>
                                <a href=" {{ route('home_admin') }}">
                                    <img src="{{asset('images/ANOU.png')}}" alt="" width="150">
                                </a>
                        </figure>
                        </div>
                        <br>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <input id="role" type="hidden"  name="role" value="1">

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nom') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control main @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __(' Adresse email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control main @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Mot de passe') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control main @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmer mot de passe') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control main" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-style-one">
                                <i class="fa fa-floppy-o" aria-hidden="true"></i>&nbsp    {{ __('Ajouter admin') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            
    </div>
</div>
</body>
@endsection
