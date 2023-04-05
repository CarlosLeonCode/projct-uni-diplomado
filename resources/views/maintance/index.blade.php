@extends('layouts.internal')

@section('template_title')
  Maintance
@endsection

@section('content')
  <div class="container-fluid">
    @if ($message = Session::get('success'))
      <div class="alert alert-success">
        <p>{{ $message }}</p>
      </div>
    @endif
    <div class="row">
      <div class="col-2"></div>
      <div class="col-8">
        <div class="card card-default shadow border-0">
          <div class="card-header border-0 p-3">
            <div style="display: flex; justify-content: space-between; align-items: center;">
              <span id="card_title">
                {{ __('Mantenimiento') }}
              </span>
              <div class="float-right">
                <a href="{{ route('maintances.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                  {{ __('Crear Nuevo') }}
                </a>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped table-hover">
                <thead class="thead">
                  <tr>
                    <th>No</th>
                    <th>Inicio de Mantenimiento</th>
                    <th>Fin de Mantenimiento</th>
                    <th>Tipo de Mantenimiento</th>
                    <th>Estado</th>
                    <th>Cilindro ID</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($maintances as $maintance)
                    <tr>
                      <td>{{ ++$i }}</td>
                      <td>{{ $maintance->maintance_started_at }}</td>
                      <td>{{ $maintance->maintance_finished_at }}</td>
                      <td>{{ $maintance->maintance_type }}</td>
                      <td>{{ $maintance->status }}</td>
                      <td>{{ $maintance->cylinder_id }}</td>
                      <td>
                        <form action="{{ route('maintances.destroy',$maintance->id) }}" method="POST">
                          <a class="btn btn-sm btn-primary " href="{{ route('maintances.show',$maintance->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver') }}</a>
                          <a class="btn btn-sm btn-success" href="{{ route('maintances.edit',$maintance->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}</button>
                        </form>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
        {!! $maintances->links() !!}
      </div>
      <div class="col-2"></div>
    </div>
  </div>
@endsection
