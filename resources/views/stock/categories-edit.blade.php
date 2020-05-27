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
                            <h3>Rubros</h3>
                            <hr>
                        </div>
                        <div class="col-md-12" style="text-align: left">
                            <form  style="width: 100%" method="">
                                @csrf
                                <div class="container-fluid">
                                    <span>Modificar rubro</span>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-6" style="padding-bottom: 10px">
                                            <label for="cat_name">Nombre</label>
                                            <input type="hidden" id="cat_id" name="cat_id" value="{{$category->id}}">
                                            <input name="cat_name" id="cat_name" value="{{$category->name}}" type="text"
                                                   class="form-control" required>
                                        </div>
                                        <div class="col-md-6" style="padding-bottom: 10px">
                                            <label for="cat_desc">Descripción</label>
                                            <input name="cat_desc" id="cat_desc" value="{{$category->description}}" type="text"
                                                   class="form-control" required>
                                        </div>
                                        <div class="col-md-12" style="padding-bottom: 10px; text-align: center">
                                            <button type="button" class="btn btn-success" name="cat-desc" id="cat-desc"
                                                    style="width: 300px; "
                                                    onclick="guardar_rubro($('#cat_id').val(), $('#cat_name').val(),$('#cat_desc').val(), '{{csrf_token()}}')">
                                                Guardar cambios
                                            </button>
                                        </div>

                                    </div>
                                </div>
                            </form>
                            <hr>
                        </div>
                        <div class="col-md-12"
                             style="max-height: 290px; overflow-x: auto; overflow-y: hidden">
                            <div style="width: 1000px !important;">
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
