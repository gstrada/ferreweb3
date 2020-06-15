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
                            <h3>Unidades de medida</h3>
                            <hr>
                        </div>
                        <div class="col-md-12" style="text-align: left">
                            <form action="{{ route('configs.m-units.store') }}" style="width: 100%" method="post">
                                @csrf

                                <div class="container-fluid">
                                    <span>Agregar unidad de medida</span>
                                    <div class="row">
                                        <div class="col-md-6" style="padding-bottom: 10px">
                                            <input name="mu_name" id="mu_name" placeholder="Nombre abreviado"
                                                   type="text"
                                                   class="form-control" required>
                                        </div>
                                        <div class="col-md-6" style="padding-bottom: 10px">
                                            <input name="mu_desc" id="mu_desc" placeholder="Nombre unidad de medida"
                                                   type="text"
                                                   class="form-control">
                                        </div>
                                        <div class="col-md-12" style="padding-bottom: 10px; text-align: center">
                                            <button type="submit" class="btn btn-success" name="mu-btn" id="mu-btn"
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
                                <table class="table table-striped table-custom" id="units-table">
                                    <thead>
                                    <tr>
                                        <th class="th-td-custom-1">Nombre</th>
                                        <th class="th-td-custom-2">Descripción</th>
                                        <th class="th-td-custom-3">Opciones</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($units as $unit)
                                        <tr>
                                            <td class="th-td-custom-1">{{$unit->name}}</td>
                                            <td class="th-td-custom-2">{{$unit->description}}</td>
                                            <td class="th-td-custom-3" align="center">
                                                <div class="row">
                                                    <div class="col-sm-6" style="padding-left:0px">
                                                        {{--                                                        <a href= "{{ route('configs.m-units.edit', $unit->id) }}" class="btn ">--}}
                                                        <a href="" class="btn ">
                                                            <i class="fas fa-pencil-alt" title="Editar"></i>
                                                        </a>
                                                    </div>
                                                    <div class="col-sm-6" style="padding-left:0px">
                                                        <button class="btn delete-icon"
                                                                onclick="show_modal('{{$unit->name}}', '{{csrf_token()}}')">
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
@push('custom-scripts')
    <script>
        $(document).ready(function () {
            //show_modal();
        })
    </script>
@endpush
