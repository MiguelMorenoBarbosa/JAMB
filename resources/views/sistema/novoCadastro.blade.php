@extends('sistema.layout')
@section('title','PetMatch')
@section('content')
    <div class="card-body container">
        <h1>Cadastro de Animal</h1>
        <form method="POST" action="{{route('gravaNovoCadastro')}}" enctype="multipart/form-data">
        @csrf
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" required>
            <br>
            <br>
            <label for="idade">Idade:</label>
            <input type="number" name="idade" id="idade" required>
            <br>
            <br>
            <label for="especie">Espécie:</label>
            <select name="porte" id="porte">
                <option value="Cachorro">Cachorro</option>
                <option value="Gato">Gato</option>
                <option value="Pássaro">Pássaro</option>
            </select>
            <br>
            <br>
            <label for="raca">Raça:</label>
            <input type="text" name="raca" id="raca">
            <br>
            <br>
            <label for="sexo">Sexo:</label>
            <select name="sexo" id="sexo">
                <option value="Macho">Macho</option>
                <option value="Fêmea">Fêmea</option>
            </select>
            <br>
            <br>
            <label for="porte">Porte:</label>
            <select name="porte" id="porte">
                <option value="Pequeno">Pequeno</option>
                <option value="Médio">Médio</option>
                <option value="Grande">Grande</option>
            </select>
            <br>
            <br>
            <label for="sobre">Sobre:</label>
            <textarea name="sobre" id="sobre" rows="5" cols="40"></textarea>
            <br>
            <br>
            <label for="arquivo">Imagem:</label>
            <input type="file" name="arquivo" id="arquivo">
            <br>
            <br>
            <input type="submit" value="Cadastrar">
        </form>
    </div>
@endsection