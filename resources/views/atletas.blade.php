@extends('layout.app')

@section('body')
    
    <div class="card border"> 
        <div class="card-body"> 
            <h5 class="card-title"> Todos os atletas </h5>

            @if(count($atletas) > 0)
            <table class="table table-ordered table-hover"> 
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Sexo</th>
                        <th>RG</th>
                        <th>CPF</th>
                        <th>CNH</th>
                        <th>Endereço</th>
                        <th>E-mail</th>
                        <th>Tipo sanguíneo</th>
                        <th>Plano de saúde</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach($atletas as $atleta)
                        <tr>
                            <td>{{$atleta->id}}</td>
                            <td>{{$atleta->nome}}</td>
                            <td>{{$atleta->sexo}}</td>
                            <td>{{$atleta->rg}}</td>
                            <td>{{$atleta->cpf}}</td>
                            <td>{{$atleta->cnh}}</td>
                            <td>{{$atleta->endereco}}</td>
                            <td>{{$atleta->email}}</td>
                            <td>{{$atleta->sangue}}</td>
                            <td>{{$atleta->plano}}</td>
                            <td>
                                <a href="/clube/editar/{{$atleta->id}}" class="btn btn-sm btn-primary">Editar</a>
                                <a href="/clube/apagar/{{$atleta->id}}" class="btn btn-sm btn-danger">Apagar</a>
                            </td>
                        </tr>

                    @endforeach
                    
                </tbody>
            </table>
            @endif
        </div>
        <div class="card-footer">
            <a href="atleta/novo" class="btn btn-primary btn-sm" role="button">Novo atleta</a>
        </div>
    </div>
@endSection