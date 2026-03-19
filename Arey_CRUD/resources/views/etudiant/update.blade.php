@extends('layouts.app')

@section('title', 'Modifier étudiant')

@section('content')
<div class="container mt-5 animate__animated animate__fadeIn">
  <h2 class="text-center">Modifier un étudiant</h2>
<div class="container mt-5">
  <h2 class="text-center">Modifier un étudiant</h2>

  @if($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  <form action="{{ route('update.traitement', $etudiant->id, false) }}" method="POST">
    @csrf

    <div class="mb-3">
      <label class="form-label">Nom</label>
      <input type="text" name="nom" class="form-control" value="{{ $etudiant->nom }}">
    </div>

    <div class="mb-3">
      <label class="form-label">Prénom</label>
      <input type="text" name="prenom" class="form-control" value="{{ $etudiant->prenom }}">
    </div>

    <div class="mb-3">
      <label class="form-label">Classe</label>
      <input type="text" name="classe" class="form-control" value="{{ $etudiant->classe }}">
    </div>

    <button class="btn btn-success">Modifier</button>
    <a href="{{ route('etudiant', [], false) }}" class="btn btn-secondary">Retour</a>
  </form>
</div>
@endsection
