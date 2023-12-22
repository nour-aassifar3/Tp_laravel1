@extends('Master_page')

@section('title', 'Produits')

@section('content')
<style>
  h2 {
    margin-bottom:40px;
    margin-top:100px;
  }
  .td-product {
    font-family: Arial, Helvetica, sans-serif;
    font-weight: bolder;
    font-size: 15px
  }
  

  table tbody td {
    background-color: white; 
   
  }
</style>
<div class="text-center">
  <h2>Liste des Produits de la catégorie {{ $categorie }}</h2>
</div>

<table class="table table-striped table-bordered">
    <thead>
      <tr>
        <th class="text-center" scope="col">Nom</th>
        <th class="text-center" scope="col">Prix</th>
        <th class="text-center" scope="col">Image</th>
      </tr>
    </thead>
    <tbody>
@foreach ($products as $item)
      <tr>
        <td class="text-center td-product">{{ $item['nom'] }}</td>
        <td class="text-center td-product">{{ $item['prix'] }} DH</td>
        <td class="text-center">
          <img src="{{ asset('imgs/' . $item['image']) }}" alt="Image {{ $item['nom'] }}" class="img-fluid" width="250">
        </td>
      </tr>
@endforeach
    </tbody>
</table>
@endsection

