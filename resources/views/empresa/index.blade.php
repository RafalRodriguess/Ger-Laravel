@extends('layouts.app')
@section('title')
<h1>Listagem de {{ $tipo }}</h1>
@endsection

@section('breadcrumb')
<li class="breadcrumb-item">
  <a href="{{ route('empresas.index') }}?tipo={{ $tipo }}">Listagem de {{ $tipo }} </a>
</li>
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">                  
                <div class="card-header">
                <h3 class="card-title">Listagem de {{ $tipo }}</h3>
                
                <div class="card-tools">
                <a href="{{ route('empresas.create') }}?tipo={{ $tipo }}" class="btn btn-success">Novo {{ $tipo }}</a>
</div>
</div>
                <div class="card-body">
                <table class="table">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Nome Empresa</th>
                      <th>Nome Contato</th>
                      <th>Celular</th>
                      <th>Ações</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($empresas as $empresa)
                    <tr>
                      <td>{{ $empresa->id }}</td>
                      <td>{{ $empresa->razao_social }}</td>
                      <td>{{ $empresa->nome }}</td>
                      <td>{{ $empresa->celular }}</td>
                      <td><a href="" class=" btn btn-primary">Detalhes</a></td>
                        <div class="progress progress-xs">
                          <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                        </div>
                      </td>
                     
                    </tr>
                    @endforeach
                  </tbody>
                </table>
         </div>

         <div class="card-footer clearfix">
         <!-- {{ $empresas->appends(['tipo' => request('tipo')])->links()}}-->
              </div>
            </div>
        </div>
    </div>
</div>
@endsection


