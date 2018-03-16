@extends('layouts.app')
@section('content')
<font color="black">
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
					Perfil de Administrador
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
