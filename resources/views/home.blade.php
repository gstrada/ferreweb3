@extends('layouts.app')

@section('content')
    <div class="container-fluid" style="margin-top: 66px">
        <div class="row">
            <div class="col-md-2" id="sidebar">
                <div style="width: 100%; text-align: center">
                    <hr>
                    <h3>Menu</h3>
                    <hr>
                </div>
                <div>
                    <a class="dropdown-item" href="#"><i class="fas fa-user-circle"></i> Usuarios</a>
                </div>
                <br>
                <div>
                    <a class="dropdown-item" href="#"><i class="fas fa-users"></i> Clientes</a>
                </div>
                <br>
                <div>
                    <a class="dropdown-item" href="#"><i class="fas fa-user-tie"></i> Proveedores</a>
                </div>
                <br>
                <div>
                    <a class="dropdown-item" href="#"><i class="fas fa-cubes"></i> Stock</a>
                </div>
                <br>
                <div>
                    <a class="dropdown-item" href="#"><i class="fas fa-money-bill-alt"></i> Caja</a>
                </div>
                <br>
            </div>
            <div class="col-md-10">
                <div class="container">
                    <div class="row"  style="text-align: center">
                        <div class="col-md-12">
                            <hr>
                            <h3>Búsqueda rápida</h3>
                            <hr>
                        </div>
                        <div class="col-md-12" style="text-align: center">
                            <input type="text" style="width: 70%; ">
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

        })
    </script>
@endpush

