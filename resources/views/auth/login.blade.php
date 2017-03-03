@extends('layouts.app')

@section('content')
     <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
            <div class="animate form login_form">
              <section class="login_content">
                <form class="form-horizontal"" role="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                  <h1>Login</h1>
                  <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <input type="text" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" required autofocus />
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                  </div>
                  <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                     <input id="password" type="password" class="form-control" name="password" required placeholder="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                  </div>
                  <div class="form-group">                        
                        <button type="submit" class="btn btn-primary">
                            Login
                        </button>
                  </div>

                  

               
                </form>
              </section>
            </div>    
      </div>
    </div>
@endsection
