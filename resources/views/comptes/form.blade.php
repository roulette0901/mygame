@extends('layouts.default')

@section('title')
    Comptes - Ajouter
@endsection

@section('wrapper')
    <form action="/comptes" method="post">
        @csrf
        <p>
            <input type="text" name="name">
        </p>
        
        <p>
            <select name="serveurs" id="serveurs">
                @foreach($serveurs as $serveur)
                    <option value="{{ $serveur->id }}"> {{ $serveur->name }} </option>
                @endforeach
            </select>
        </p>
        <p>
            <select name="persos[]" id="persos" multiple>
                @foreach($persos as $Perso)
                    <option value="{{ $Perso->id }}"> {{ $Perso->name }} </option>
                @endforeach
            </select>
        </p>

        <p>
            <input type="submit">
        </p>
        <p>
            <button><a href="/comptes">Annuler</a></button>
        </p>
    </form>
@endsection