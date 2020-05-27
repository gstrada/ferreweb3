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
                            <h3>Búsqueda rápida</h3>
                            <hr>
                        </div>
                        <div class="col-md-12" align="center">
                            <input class="form-control" type="text" style="width: 70%; ">
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

        })
    </script>
@endpush

