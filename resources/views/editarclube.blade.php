@extends('layout.app')

@section('body')
    <div class="card border"> 
        <div class="card-body"> 
            <form action="/clube/editar/{{$clube->id}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nomeClube"> Nome do clube </label>
                    <input type="text" class="form-control" value="{{$clube->nome}}" name="nomeClube" id="nomeClube" 
                        placeholder= "Nome do Clube">
                </div>
                <button type="submit" class="btn btn-primary btn-sm"> Salvar </button>
                <button type="cancel" class="btn btn-danger btn-sm"> Cancelar </button>
            </form>
        </div>
    </div>
@endSection