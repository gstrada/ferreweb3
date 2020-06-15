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
                            <h3>Proveedores</h3>
                            <hr>
                        </div>
                        <div class="col-md-12" style="text-align: left">
                            <form action="" style="width: 100%" method="post">
                                @csrf

                                <div class="container-fluid">
                                    <span>Agregar Proveedor</span>
                                    <div class="row">
                                        <div class="col-md-4" style="padding-bottom: 10px">
                                            <input name="sup_name" id="sup_name" placeholder="Nombre o razón social" type="text"
                                                   class="form-control" required>
                                        </div>
                                        <div class="col-md-2" style="padding-bottom: 10px">
                                            <input name="sup_cuit" id="sup_cuit" placeholder="CUIT/CUIL" type="text"
                                                   class="form-control" maxlength="11" required>
                                        </div>
                                        <div class="col-md-4" style="padding-bottom: 10px">
                                            <input name="sup_mail" id="sup_mail" placeholder="Correo electrónico" type="email"
                                                   class="form-control" required>
                                        </div>
                                        <div class="col-md-2" style="padding-bottom: 10px">
                                            <input name="sup_phone" id="sup_phone" placeholder="Teléfono" type="text"
                                                   class="form-control" required>
                                        </div>
                                        <div class="col-md-4" style="padding-bottom: 10px">
                                            <input name="sup_street" id="sup_street" placeholder="Calle" type="text"
                                                   class="form-control" required>
                                        </div>
                                        <div class="col-md-2" style="padding-bottom: 10px">
                                            <input name="sup_address_number" id="sup_address_number" placeholder="Nº" type="number"
                                                   class="form-control" required>
                                        </div>
                                        <div class="col-md-3" style="padding-bottom: 10px">
                                            <select name="sup_prov" id="sup_prov" type="text" class="form-control" onchange="getCities(this.value, '{{ csrf_token() }}', 'sup_city')" required>
                                                <option value="0">Seleccionar provincia</option>
                                                @foreach($provinces as $province)
                                                    <option value="{{ $province->id }}">{{ $province->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-3" style="padding-bottom: 10px">
                                            <select name="sup_city" id="sup_city" disabled type="text" class="form-control" required>
                                                <option value="">Seleccionar ciudad</option>
                                            </select>
                                        </div>
                                        <div class="col-md-5" style="padding-bottom: 10px">
                                            <select name="sup_salesman" id="sup_salesman" type="text" class="form-control" >
                                                <option value="0">Seleccionar vendedor</option>
                                                @foreach($salesmen as $salesman)
                                                    <option value="{{ $salesman->id }}">{{ $salesman->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-1" style="padding-bottom: 10px">
                                            <a
                                                href="{{ route('suppliers.salesmen') }}" style="text-decoration: none; color: white; height: 100%">
                                                <button type="button" class="btn btn-secondary" title="Agregar vendedor" style="height: 100%">
                                                    <i class="fa fa-plus-square"></i>
                                                </button>
                                            </a>
                                        </div>
{{--                                        <div class="col-md-4" style="padding-bottom: 10px">--}}
{{--                                            <input name="sup_mail" id="sup_mail" placeholder="Correo electrónico" type="email"--}}
{{--                                                   class="form-control" >--}}
{{--                                        </div>--}}
{{--                                        <div class="col-md-2" style="padding-bottom: 10px">--}}
{{--                                            <input name="sup_phone" id="sup_phone" placeholder="Teléfono" type="text"--}}
{{--                                                   class="form-control" >--}}
{{--                                        </div>--}}
                                        <div class="col-md-12" style="padding-bottom: 10px">
                                            <textarea name="sup_obs" id="sup_obs" placeholder="Observaciones" type="text"
                                                      class="form-control" ></textarea>
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
                                <table class="table table-striped table-custom" id="categories-table">
                                    <thead>
                                    <tr>
                                        <th class="th-td-custom-1">Nombre</th>
                                        <th class="th-td-custom-2">Descripción</th>
                                        <th class="th-td-custom-3">Opciones</th>
                                    </tr>
                                    </thead>
                                    <tbody>
{{--                                    @foreach($category_list as $category)--}}
{{--                                        <tr>--}}
{{--                                            <td class="th-td-custom-1">{{$category->name}}</td>--}}
{{--                                            <td class="th-td-custom-2">{{$category->description}}</td>--}}
{{--                                            <td class="th-td-custom-3" align="center">--}}
{{--                                                <div class="row">--}}
{{--                                                    <div class="col-sm-6" style="padding-left:0px">--}}
{{--                                                        <a href= "{{ route('stock.categories.edit', $category->id) }}" class="btn ">--}}
{{--                                                            <i class="fas fa-pencil-alt" title="Editar"></i>--}}
{{--                                                        </a>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="col-sm-6" style="padding-left:0px"><button  class="btn delete-icon" onclick="show_modal('{{$category->name}}', '{{csrf_token()}}')"><i--}}
{{--                                                                class="fas fa-trash-alt" title="Eliminar"></i></button>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </td>--}}
{{--                                        </tr>--}}
{{--                                    @endforeach--}}
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
    <script>
        $(document).ready(function () {
            //show_modal();
        })
    </script>
@endpush



