@extends('layouts.app')

@section('content')
    <div class="container-fluid main-container">
        <div class="row">
            @include('partials/sidebar')
            <div class="col-md-10">
                <div class="container">
                    <div class="row" style="text-align: center">
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

