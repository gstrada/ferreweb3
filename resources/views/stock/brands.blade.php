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
                            <h3>Marcas</h3>
                            <hr>
                        </div>
                        <div class="col-md-12" style="text-align: left">
                            <form action="{{ route('stock.brands.store') }}" style="width: 100%" method="post">
                                @csrf

                                <div class="container-fluid">
                                    <span>Agregar marca</span>
                                    <div class="row">
                                        <div class="col-md-6" style="padding-bottom: 10px">
                                            <input name="brn_name" id="brn_name" placeholder="Nombre" type="text"
                                                   class="form-control" required>
                                        </div>
                                        <div class="col-md-6" style="padding-bottom: 10px">
                                            <input name="brn_logo" id="brn_logo" placeholder="Cargar Logo" type="text"
                                                   class="form-control" >
                                        </div>
                                        <div class="col-md-12" style="padding-bottom: 10px; text-align: center">
                                            <button type="submit" class="btn btn-success" name="brn-desc" id="cat-desc"
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
                                <table class="table table-striped table-custom" id="brands-table">
                                    <thead>
                                    <tr>
                                        <th class="th-td-custom-1">Nombre</th>
                                        <th class="th-td-custom-2">Logo</th>
                                        <th class="th-td-custom-3">Opciones</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($brand_list as $brand)
                                        <tr>
                                            <td class="th-td-custom-1">{{$brand->name}}</td>
                                            <td class="th-td-custom-2">{{$brand->logo}}</td>
                                            <td class="th-td-custom-3" align="center">
                                                <div class="row">
                                                    <div class="col-sm-6" style="padding-left:0px">
                                                        <a href= "{{ route('stock.brands.edit', $brand->id) }}" class="btn ">
                                                            <i class="fas fa-pencil-alt" title="Editar"></i>
                                                        </a>
                                                    </div>
                                                    <div class="col-sm-6" style="padding-left:0px"><button  class="btn delete-icon" onclick="show_modal('{{$brand->name}}', '{{csrf_token()}}')"><i
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
@push('custom-scripts')
    <script>
        $(document).ready(function () {
            //show_modal();
        })
    </script>
@endpush
