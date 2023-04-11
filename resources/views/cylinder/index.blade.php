@extends('layouts.internal')

@section('template_title')
  Cylinder
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
                {{ __('Cilindros') }}
              </span>
              <div class="float-right">
                <a href="{{ route('cylinders.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                    <th>Tamaño</th>
                    <th>Lote</th>
                    <th>Estado</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($cylinders as $cylinder)
                    <tr class="border-0">
                      <td>{{ ++$i }}</td>
                      <td>{{ $cylinder->size }}</td>
                      <td>{{ $cylinder->lote }}</td>
                      <td>{{ $cylinder->status }}</td>
                      <td>
                        <form action="{{ route('cylinders.destroy',$cylinder->id) }}" method="POST">
                          <a class="btn btn-sm btn-primary " href="{{ route('cylinders.show',$cylinder->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver') }}</a>
                          <a class="btn btn-sm btn-success" href="{{ route('cylinders.edit',$cylinder->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
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
        {!! $cylinders->links() !!}
      </div>
      <div class="col-2"></div>
    </div>
  </div>
@endsection
