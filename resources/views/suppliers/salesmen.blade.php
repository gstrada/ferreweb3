@extends('layouts.app')

@section('content')
    <div class="container-fluid main-container">
        <div class="row">
            @include('partials/sidebar')
            <div class="col-md-11 col-sm-12 right-panel">
                <div class="container">
                    <div class="row" style="text-align: center">
                        <div class="col-md-12">
                            <hr>
                            <h3>Vendedores</h3>
                            <hr>
                        </div>
                        <div class="col-md-12" style="text-align: left">
                            <form action="{{ route('suppliers.salesmen.store') }}" style="width: 100%" method="post">
                                @csrf

                                <div class="container-fluid">
                                    <span>Agregar Vendedor</span>
                                    <div class="row">
                                        <div class="col-md-5" style="padding-bottom: 10px">
                                            <input name="sls_name" id="sls_name" placeholder="Nombre y Apellido" type="text"
                                                   class="form-control" required>
                                        </div>
                                        <div class="col-md-4" style="padding-bottom: 10px">
                                            <input name="sls_mail" id="sls_mail" placeholder="Correo electrónico" type="email"
                                                   class="form-control" required>
                                        </div>
                                        <div class="col-md-3" style="padding-bottom: 10px">
                                            <input name="sls_phone" id="sls_phone" placeholder="Teléfono" type="text"
                                                   class="form-control" required>
                                        </div>
                                        <div class="col-md-4" style="padding-bottom: 10px">
                                            <input name="sls_street" id="sls_street" placeholder="Calle" type="text"
                                                   class="form-control" required>
                                        </div>
                                        <div class="col-md-2" style="padding-bottom: 10px">
                                            <input name="sls_address_number" id="sls_address_number" placeholder="Nº" type="number"
                                                   class="form-control" required>
                                        </div>
                                        <div class="col-md-3" style="padding-bottom: 10px">
                                            <select name="sls_prov" id="sls_prov" type="text" class="form-control" onchange="getCities(this.value, '{{ csrf_token() }}', 'sls_city')" required>
                                                <option value="0">Seleccionar provincia</option>
                                                @foreach($provinces as $province)
                                                    <option value="{{ $province->id }}">{{ $province->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-3" style="padding-bottom: 10px">
                                            <select name="sls_city" id="sls_city" disabled type="text" class="form-control" required>
                                                <option value="">Seleccionar ciudad</option>
                                            </select>
                                        </div>
                                        <div class="col-md-12" style="padding-bottom: 10px">
                                            <textarea name="sls_obs" id="sls_obs" placeholder="Observaciones" type="text"
                                                      class="form-control"></textarea>
                                        </div>
                                        <div class="col-md-12" style="padding-bottom: 10px; text-align: center">
                                            <button type="submit" class="btn btn-success" name="cat-desc" id="cat-desc"
                                                    style="width: 300px; ">Agregar
                                            </button>
                                        </div>

                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-12"
                             style="max-height: 290px; overflow-x: auto; overflow-y: hidden">
                            <div style="width: 1000px !important;">
                                <table class="table table-striped table-custom" id="salesmen-table">
                                    <thead>
                                    <tr>
                                        <th class="th-td-custom-1">Nombre</th>
                                        <th class="th-td-custom-2">Correo Electrónico</th>
                                        <th class="th-td-custom-3">Opciones</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($salesman_list as $salesman)
                                        <tr>
                                            <td class="th-td-custom-1">{{$salesman->name}}</td>
                                            <td class="th-td-custom-2">{{$salesman->email}}</td>
                                            <td class="th-td-custom-3" align="center">
                                                <div class="row">
                                                    <div class="col-sm-6" style="padding-left:0px">
                                                        <a href=""
                                                           class="btn ">
                                                            <i class="fas fa-pencil-alt" title="Editar"></i>
                                                        </a>
                                                    </div>
                                                    <div class="col-sm-6" style="padding-left:0px">
                                                        <button class="btn delete-icon"
                                                                >
                                                            <i
                                                                class="fas fa-trash-alt" title="Eliminar"></i></button>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@include('partials.custom-scripts')
@push('custom-scripts')

@endpush



