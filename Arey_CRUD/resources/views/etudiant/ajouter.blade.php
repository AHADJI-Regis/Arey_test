@extends('layouts.app')

@section('title', 'Ajouter étudiant')

@section('content')
<div class="container mt-5">
  <h2 class="text-center">Ajouter un étudiant</h2>

  @if(session('success'))
    <div class="alert alert-success">
      {{ session('success') }}
    </div>
  @endif

  @if($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  <form action="{{ route('ajouter.traitement', [], false) }}" method="POST">
    @csrf

    <div class="mb-3">
      <label class="form-label">Nom</label>
      <input type="text" name="nom" class="form-control">
    </div>

    <div class="mb-3">
      <label class="form-label">Prénom</label>
      <input type="text" name="prenom" class="form-control">
    </div>

    <div class="mb-3">
      <label class="form-label">Classe</label>
      <input type="text" name="classe" class="form-control">
    </div>

    <button class="btn btn-success">Enregistrer</button>
    <a href="{{ route('etudiant', [], false) }}" class="btn btn-secondary">Retour</a>
  </form>
</div>
@endsection