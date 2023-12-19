@extends('layouts.app') {{-- Vous devrez peut-être ajuster cela en fonction de votre configuration de mise en page --}}

@section('content')
    <div class="container">
        <h2>Créer un utilisateur</h2>

        {!! Form::open(['route' => 'users.store', 'method' => 'post']) !!}
        <div class="form-group">
            {!! Form::label('lastname', 'Nom :') !!}
            {!! Form::text('lastname', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('firstname', 'Prénom :') !!}
            {!! Form::text('firstname', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('email', 'Email :') !!}
            {!! Form::email('email', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('phone', 'Téléphone :') !!}
            {!! Form::text('phone', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('idConcession', 'Concession :') !!}
            {!! Form::select('idConcession', $concessions, null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('idRole', 'Rôle :') !!}
            {!! Form::select('idRole', $roles, null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('password', 'Mot de passe :') !!}
            {!! Form::password('password', ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('password_confirmation', 'Confirmer le mot de passe :') !!}
            {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Créer l\'utilisateur', ['class' => 'btn btn-primary']) !!}
        </div>
        {!! Form::close() !!}
    </div>
@endsection
