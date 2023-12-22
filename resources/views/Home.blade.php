@extends('Master_page')
@section('title','Home')
@section('content')

<style>
    h1.text-center {
        margin-top: 200px;
    }
    .auth-form {
        max-width: 400px; 
        margin: 50px auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }
    .auth-form button[type="submit"] {
        background-color: black; 
        color: white; 
        width: 100%; 
    }
</style>

<h1 class="text-center">Bienvenue sur notre site e-commerce</h1>
<p class="text-center">Découvrez nos produits de qualité à des prix compétitifs</p>

<div class="container mt-5">
    <div class="auth-form">
        <form > 
            
            <div class="mb-3">
                
                <input type="email" class="form-control" id="email" name="email" placeholder="email" required>
            </div>
            
            <div class="mb-3">
                <input type="password" class="form-control" id="password" placeholder="Mot de passe" name="password" required>
            </div>
            
            <button type="submit" class="btn btn-primary">Se connecter</button>
        </form>
    </div>
</div>

@endsection
