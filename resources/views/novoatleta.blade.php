@extends('layout.app')

@section('body')
    <div class="card border"> 
        <div class="card-body"> 
            <form action="/atleta" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nome"> Nome do atleta </label>
                    <input type="text" class="form-control" name="nome" id="nome" 
                        placeholder= "Nome completo">
                </div>
                <div class="form-group">
                    <label for="nomeAtleta"> Sexo </label>
                    <select class="form-control"  id="sexo" name="sexo">
                        <option value="Masculino" id="sexo" name="sexo"> Masculino </option>
                        <option value="Feminino" id="sexo" name="sexo"> Feminino </option>
                        <option value="Outro" id="sexo" name="sexo"> Outro </option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="rg"> RG </label>
                    <input type="number" class="form-control" name="rg" id="rg" 
                        placeholder= "RG">
                </div>
                <div class="form-group">
                    <label for="nomeAtleta"> CPF </label>
                    <input type="number" class="form-control" name="cpf" id="cpf" 
                        placeholder= "CPF">
                </div>
                <div class="form-group">
                    <label for="cnh"> CNH </label>
                    <input type="number" class="form-control" name="cnh" id="cnh" 
                        placeholder= "CNH">
                </div>
                <div class="form-group">
                    <label for="endereco"> Endereço </label>
                    <input type="text" class="form-control" name="endereco" id="endereco" 
                        placeholder= "Endereço">
                </div>
                <div class="form-group">
                    <label for="email"> E-mail </label>
                    <input type="text" class="form-control" name="email" id="email" 
                        placeholder= "E-mail">
                </div>
                <div class="form-group">
                    <label for="sangue"> Tipo sanguíneo </label>
                    <select class="form-control"  id="sangue" name="sangue">
                        <option value="O+" id="sangue"> O+ </option>
                        <option value="A+" id="sangue"> A+ </option>
                        <option value="B+" id="sangue"> B+ </option>
                        <option value="AB+" id="sangue"> AB+ </option>
                        <option value="O-" id="sangue"> O- </option>
                        <option value="A-" id="sangue"> A- </option>
                        <option value="B-" id="sangue"> B- </option>
                        <option value="AB-" id="sangue"> AB- </option>

                    </select>
                </div>
                <div class="form-group">
                    <label for="plano"> Plano de saúde </label>
                    <input type="text" class="form-control" name="plano" id="plano" 
                        placeholder= "Plano de saúde">
                </div>    
                <button type="submit" class="btn btn-primary btn-sm"> Salvar </button>
                <button type="cancel" class="btn btn-danger btn-sm"> Cancelar </button>
            </form>
        </div>
    </div>
@endSection