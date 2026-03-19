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

  <table class="table table-bordered animate__animated animate__fadeIn">
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
        <td class="text-center align-middle">
          <a href="{{ route('update', $e->id, false) }}" class="btn btn-warning btn-sm">Modifier</a>
          <a href="{{ route('delete', $e->id, false) }}" class="btn btn-danger btn-sm" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet étudiant ?')">Supprimer</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection