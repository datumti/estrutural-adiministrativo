@extends('adminlte::page')

@section('title', 'Restrições')

@section('content_header')
    <h1>Restrições</h1>
@stop

@section('content')
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Cadastrar Restrição</h3>
            </div>
            {!! Form::open(['method' => 'post', 'route' => ['restricoes.store']]) !!}
            <div class="box-body">
                <div class="form-group col-md-7">
                    <label for="cpf">Pessoa</label>
                    {!! Form::select('people_id', $peoples, null, ['id' => 'name', 'class' => 'form-control', 'style' => 'width: 100%']) !!}
                </div>
                <div class="form-group col-md-7">
                    <label for="cpf">Motivo</label>
                    {!! Form::textarea('description', null, ['id' => 'description', 'rows' => '3','class' => 'form-control', 'style' => 'width: 100%']) !!}
                </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
                <button type="submit" class="btn btn-flat btn-success">
                    <i class="fa fa-floppy-o"></i> Salvar
                </button>
            </div>
            {!! Form::close() !!}
        </div>
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Lista de Restrições</h3>
            </div>
            <div class="box-body">
              <div class="table-responsive">
                <table class="table no-margin">
                  <thead>
                  <tr>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>Motivo</th>
                    <th>Ações</th>
                  </tr>
                  </thead>
                  <tbody>
                    @forelse ($restrictions as $restriction)
                        <tr>
                            <td>{{$restriction->people->name}}</td>
                            <td>{{$restriction->people->cpf}}</td>
                            <td>{{$restriction->description}}</td>
                            <td>
                            <button type="button" class="btn btn-flat btn-danger btn-xs" style="margin:2px 0 2px 5px" title="Remover" data-toggle="modal" data-target="#modal-restriction-delete" data-restriction-id="{{$restriction->id}}">
                                    <i class="fa fa-trash"></i> 
                                </button>
                            </td>
                        </tr>
                    @empty
                        <td>
                            nenhuma restrição até o momento...
                        </td>
                    @endforelse
                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.box-body -->
        </div> 

        <div class="modal fade" id="modal-restriction-delete" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    {!! Form::open(['method' => 'delete', 'route' => ['restricoes.destroy', '']]) !!}
                        <div class="modal-header">
                            <h4 class="modal-title" id="exampleModalLongTitle">Remover restrição</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Tem certeza que deseja remover essa restrição?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-danger" id="vacancies-remove">Remover</button>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
@stop

@section('css')
    
@stop

@section('js')
    <script>
        $('#name').select2();
    </script>
    
@stop