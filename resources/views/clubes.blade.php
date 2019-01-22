@extends('layout.app')

@section('body')
    
    <div class="card border"> 
        <div class="card-body"> 
            <h5 class="card-title"> Todos os clubes </h5>

            @if(count($clubes) > 0)
            <table class="table table-ordered table-hover"> 
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome de Fantasia</th>
                        <th>CNPJ</th>
                        <th>Razão Social</th>
                        <th>Fundação</th>
                        <th>Presidente</th>
                        <th>E-mail</th>
                        <th>Contato</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($clubes as $clube)
                        <tr>
                            <td>{{$clube->id}}</td>
                            <td>{{$clube->nome}}</td>
                            <td>{{$clube->cnpj}}</td>
                            <td>{{$clube->razao}}</td>
                            <td>{{$clube->fundacao}}</td>
                            <td>{{$clube->presidente}}</td>
                            <td>{{$clube->email}}</td>
                            <td>{{$clube->contato}}</td>
                            <td>
                                <a href="/clube/editar/{{$clube->id}}" class="btn btn-sm btn-primary">Editar</a>
                                <a href="/clube/apagar/{{$clube->id}}" class="btn btn-sm btn-danger">Apagar</a>
                            </td>
                        </tr>

                    @endforeach
                    
                </tbody>
            </table>
            @endif
        </div>
        <div class="card-footer">
            <a href="clube/novo" class="btn btn-primary btn-sm" role="button">Novo clube</a>
        </div>
    </div>
@endSection