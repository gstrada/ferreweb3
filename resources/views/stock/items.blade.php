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
                            <table class="table table-striped table-bordered" id="brands-table">
                                <thead>
                                <tr>
                                    <th class="th-td-custom-1">Código</th>
                                    <th class="th-td-custom-2">Nombre</th>
                                    <th class="th-td-custom-3">Precio</th>
                                </tr>
                                </thead>
                                <tbody>
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
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.21/b-1.6.2/datatables.min.css"/>

    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.21/b-1.6.2/datatables.min.js"></script>


    <script>

        $(document).ready(function () {
            var alt = $('#demo').css('display');
            $('#brands-table').DataTable({
                lengthMenu: [10, 25, 50],
                processing: true,
                serverSide: true,
                ajax: '{{ route('datatables.items') }}',
                language: {
                    url: 'https://cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json',
                    searchPlaceholder: "Buscar"
                },
                columnDefs: [
                    {paddingLeft: "10px", targets: 0}
                ],
                columns: [
                    {data: 'code', name: 'Code'},
                    {data: 'name', name: 'Name'},
                    {data: 'final_price', name: 'Final_price'},
                ]
            })
        });
    </script>
@endpush

