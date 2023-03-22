@extends('layouts.app')

@section('template_title')
    Maintance
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Maintance') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('maintances.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Maintance Started At</th>
										<th>Maintance Finished At</th>
										<th>Maintance Type</th>
										<th>Status</th>
										<th>Cylinder Id</th>
										<th>Schedule Id</th>

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
											<td>{{ $maintance->schedule_id }}</td>

                                            <td>
                                                <form action="{{ route('maintances.destroy',$maintance->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('maintances.show',$maintance->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('maintances.edit',$maintance->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
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
        </div>
    </div>
@endsection
