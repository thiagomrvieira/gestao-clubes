@extends('layout.app')

@section('body')
    <div class="card border"> 
        <div class="card-body"> 
            <form action="/clube" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nomeClube"> Nome do clube </label>
                    <input type="text" class="form-control" name="nomeClube" id="nomeClube" 
                        placeholder= "Nome do Clube"> 
                </div>
                <div class="form-group">
                    <label for="cnpj"> CNPJ </label>
                    <input type="text" class="form-control" name="cnpj" id="cnpj" 
                        placeholder= "CNPJ">  
                </div>
                <div class="form-group">
                    <label for="razao"> Razão Social </label>
                    <input type="text" class="form-control" name="razao" id="razao" 
                        placeholder= "Razão social">  
                </div>
                <div class="form-group">
                    <label for="fundacao"> Fundação </label>
                    <input type="date" class="form-control" name="fundacao" id="fundacao" 
                        placeholder= "Fundação">  
                </div>
                <div class="form-group">
                    <label for="presidente"> Presidente </label>
                    <input type="text" class="form-control" name="presidente" id="presidente" 
                        placeholder= "Presidente">  
                </div>
                <div class="form-group">
                    <label for="email"> E-mail </label>
                    <input type="email" class="form-control" name="email" id="email" 
                        placeholder= "E-mail">  
                </div>
                <div class="form-group">
                    <label for="contato"> Contato </label>
                    <input type="text" class="form-control" name="contato" id="contato" 
                        placeholder= "Contato">  
                </div>



                <button type="submit" class="btn btn-primary btn-sm"> Salvar </button>
                <button type="cancel" class="btn btn-danger btn-sm"> Cancelar </button>
            </form>
        </div>
    </div>
@endSection