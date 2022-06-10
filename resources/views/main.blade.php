@extends('layout.app')

@section('titulo', 'Usuarios')

@section('contenido')
<div class="row">
	<div class="col-12">
		<div class="card">
            @if ($mensaje = session("mensaje"))
              <x-alerts tipo="success" :mensaje="$mensaje" />
            @endif
            @if ($errors->any())
              <x-alerts tipo="danger" :mensaje="$errors" />
            @endif
            <div class="card-header bg-info">
                <h5 class="text-white float-left">Fileds</h5>
                <a href="#" class="btn btn-outline-light btn-sm float-right"><i class="fas fa-plus"></i> Action</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered" id="data-table">
                        <thead>
                            <tr>
                                <th>Field 1</th>
                                <th>Field 2</th>
                                <th>Field 3</th>
                                <th>Field 4</th>
                                <th>Field 5</th>
                                <th>Field 6</th>
                            </tr>
                        </thead>
                        <tbody>
                            @include('data-table')
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Field 1</th>
                                <th>Field 2</th>
                                <th>Field 3</th>
                                <th>Field 4</th>
                                <th>Field 5</th>
                                <th>Field 6</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
	</div>
</div>
@include('layout.modal')
@endsection
