@extends('layout.app', ["current" => "servico"])

@section('body')


    <div class="card border">
        <div class="card-body">
            <h5 class="card-title">Registro de Serviços</h5>
@if(count($serv) > 0)
            <div class="table-responsive-sm">
            <table class="table table-ordered table-hover">
                <thead>
                    <tr>
                        <th scope="col">Código</th>
                        <th scope="col">Diagnostico</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Mão de Obra</th>
                        <th scope="col" >Forma de Pagamento</th>
                        <th scope="col">Total</th>
                        <th scope="col">Pago</th>
                        <th scope="col">Veículo</th>
                        <th scope="col">Ação</th>
                    </tr>
                </thead>
                <tbody>
    @foreach ($serv as $s)
                    <tr scope="row">
                        <td>{{$s->id}}</td>
                        <td>{{$s->diagnostico}}</td>
                        <td>{{$s->descricao}}</td>
                        <td>{{$s->mao_obra}}</td>
                        <td>{{$s->forma_pgto}}</td>
                        <td>{{$s->total}}</td>
                        <td>{{$s->pago}}</td>
                        <td>{{$s->veiculo->modelo}}</td>


                        <td>
                        <a href="/veiculos/editar/{{$s->id}}" class="btn btn-sm btn-primary">Editar</a>
                        <a href="/veiculos/apagar/{{$s->id}}" class="btn btn-sm btn-danger">Excluir</a>
                        </td> 
                    </tr>
    @endforeach
                </tbody>
            </table>
            </div> 
@endif
        </div>
        <div class="card-footer">
            <a href="/veiculos/novo" class="btn btn-sm btn-primary" role="button">Adicionar veiculo</a>
        </div>
    </div>

@endsection