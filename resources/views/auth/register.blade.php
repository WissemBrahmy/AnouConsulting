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
                        <div class="contact-area style-one">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <input id="role" type="hidden"  name="role" value="1">

                        <div class="form-group row">
                            
                            <div class="col-md-6">
                                <input id="name" type="text" placeholder="Nom" class="form-control main @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        
                         
                            <div class="col-md-6">
                                <input id="email" type="email" placeholder="Adresse email" class="form-control main @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                          
                            <div class="col-md-6">
                                <input id="password" type="password" placeholder="Mot de passe" class="form-control main @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        
                         
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control main" placeholder="Confirmer mot de passe" name="password_confirmation" required autocomplete="new-password">
                            <br>
                            </div>
                        
                       
                            
                            <div class="col-md-4 offset-md-4">
                             
                            
                                
                             <button type="submit" class="btn btn-style-one">
                                <span class="fa fa-unlock-alt"> &nbsp   {{ __('Eregistrer') }}  </span>
                                </button>
                                
                                &nbsp
                            </div>
                            </div>
                        </div>
                        </div>
                    </form>
                
                </div>
            
    </div>
</div>
</body>
@endsection
