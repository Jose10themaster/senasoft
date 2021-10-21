@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
                 <div class="input-group">
                        </br>
                      <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04"  aria-label="Upload">
              <button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon04">Enviar</button>
            </div>


        </div>

        </div>

    </div>

</div>

@endsection
