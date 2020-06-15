@extends('layouts.app')

@section('content')
    <div class="container-fluid main-container">
        <div class="row" style="width: 90%">
            @include('partials/sidebar')
            <div class="col-md-11 right-panel">
                @php(
  alert()->warning('WarningAlert','Lorem ipsum dolor sit amet.')
)
                <div class="container">
                    <div class="row" style="text-align: center">
                        <div class="col-md-12">
                            <hr>
                            <h3>Listado Artículos</h3>
                            <hr>
                        </div>
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
                                {{--                @foreach($brand_list as $brand)--}}
                                {{--                    <tr>--}}
                                {{--                        <td class="th-td-custom-1">{{$brand->name}}</td>--}}
                                {{--                        <td class="th-td-custom-2">{{$brand->logo}}</td>--}}
                                {{--                        <td class="th-td-custom-3" align="center">--}}
                                {{--                            <div class="row">--}}
                                {{--                                <div class="col-sm-6" style="padding-left:0px">--}}
                                {{--                                    <a href= "{{ route('stock.brands.edit', $brand->id) }}" class="btn ">--}}
                                {{--                                        <i class="fas fa-pencil-alt" title="Editar"></i>--}}
                                {{--                                    </a>--}}
                                {{--                                </div>--}}
                                {{--                                <div class="col-sm-6" style="padding-left:0px"><button  class="btn delete-icon" onclick="show_modal('{{$brand->name}}', '{{csrf_token()}}')"><i--}}
                                {{--                                            class="fas fa-trash-alt" title="Eliminar"></i></button>--}}
                                {{--                                </div>--}}
                                {{--                            </div>--}}
                                {{--                        </td>--}}
                                {{--                    </tr>--}}
                                {{--                @endforeach--}}
                                </tbody>
                            </table>
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
            var alt = $('#demo').css('display');
            $('#brands-table').DataTable();

        })
    </script>
@endpush

