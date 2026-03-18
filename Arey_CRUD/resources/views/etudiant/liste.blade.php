@extends('layouts.app')

@section('title', 'Liste étudiants')

@section('content')
  <h2 class="text-center">Liste des étudiants</h2>
  <hr>

  @if(session('success'))
    <div class="alert alert-success">
      {{ session('success') }}
    </div>
  @endif

  <a href="{{ route('ajouter', [], false) }}" class="btn btn-primary mb-3">Ajouter</a>

  <table class="table table-bordered">
    <thead class="table-dark">
      <tr>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Classe</th>
        <th>Action</th>
      </tr>
    </thead>

    <tbody>
      @foreach($etudiants as $e)
      <tr>
        <td>{{ $e->nom }}</td>
        <td>{{ $e->prenom }}</td>
        <td>{{ $e->classe }}</td>
        <td>
          <a href="{{ route('update', $e->id, false) }}" class="btn btn-warning btn-sm">Modifier</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection