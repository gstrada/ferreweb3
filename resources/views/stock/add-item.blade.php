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
                            <h3>Agregar artículo</h3>
                            <hr>
                        </div>
                        <div class="col-md-12" style="text-align: left">
                            <form action="{{ route('stock.items.store') }}" style="width: 100%" method="post">
                                @csrf
                                <div class="container-fluid">
                                    <br>
                                    <div class="row">
                                        <div class="col-md-5" style="padding-bottom: 10px">
                                            <select name="item_cat" id="item_cat" type="text"
                                                    class="form-control">
                                                <option value="">Seleccione la categoría</option>
                                                @foreach($categories as $category)
                                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-1" style="padding-bottom: 10px">
                                            <a
                                                href="{{route('stock.categories')}}" style="text-decoration: none; color: white"><button type="button" class="btn btn-secondary" title="Agregar nuevo rubro"><i class="fa fa-plus-square"></i></button>
                                            </a>
                                        </div>
                                        <div class="col-md-5" style="padding-bottom: 10px">
                                            <select name="item_brand" id="item_brand" type="text"
                                                    class="form-control">
                                                <option value="">Seleccione la marca</option>
                                                @foreach($brands as $brand)
                                                    <option value="{{$brand->id}}">{{$brand->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-1" style="padding-bottom: 10px">
                                            <a
                                                href="{{route('stock.brands')}}" style="text-decoration: none; color: white"><button type="button" class="btn btn-secondary" title="Agregar nueva marca"><i class="fa fa-plus-square"></i></button>
                                            </a>
                                        </div>
                                        <div class="col-md-2" style="padding-bottom: 10px">
                                            <input name="item_code" id="item_code" placeholder="Código" type="text"
                                                   class="form-control" >
                                        </div>
                                        <div class="col-md-4" style="padding-bottom: 10px">
                                            <input name="item_barcode" id="item_barcode" placeholder="Código de barras" type="text"
                                                   class="form-control" >
                                        </div>
                                        <div class="col-md-6" style="padding-bottom: 10px">
                                            <input name="item_name" id="item_name" placeholder="Nombre" type="text"
                                                   class="form-control">
                                        </div>
                                        <div class="col-md-12" style="padding-bottom: 10px">
                                            <input name="item_description" id="item_description"
                                                   placeholder="Descripción" type="text"
                                                   class="form-control">
                                        </div>
                                        <div class="col-md-3" style="padding-bottom: 10px">
                                            <select name="item_supplier_1" id="item_supplier_1"
                                                    placeholder="Proveedor 1" type="text"
                                                    class="form-control">
                                                <option value="">Seleccionar proveedor</option>
                                                @foreach($suppliers as $supplier)
                                                    <option value="{{ $supplier->id }}">{{$supplier->business_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-1" style="padding-bottom: 10px">
                                            <a
                                                href="{{ route('suppliers') }}" style="text-decoration: none; color: white; height: 100%">
                                                <button type="button" class="btn btn-secondary" title="Agregar proveedor" style="height: 100%">
                                                    <i class="fa fa-plus-square"></i>
                                                </button>
                                            </a>
                                        </div>
                                        <div class="col-md-3" style="padding-bottom: 10px">
                                            <select name="item_m_unit" id="item_m_unit" type="text"
                                                    class="form-control" required>
                                                <option value="">Unidad de medida</option>
                                                @foreach($units as $unit)
                                                    <option value="{{ $unit->id }}">{{$unit->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-1" style="padding-bottom: 10px">
                                            <button type="button" class="btn btn-secondary" title="Agregar unidad de medida"><i class="fa fa-plus-square"></i></button>
                                        </div>
                                        <div class="col-md-4" style="padding-bottom: 10px; text-align: center" align="center">
                                            <button type="button" class="btn btn-info" name="brn-desc" id="cat-desc"
                                                    style="width: 300px; ">Cargar imagen
                                            </button>
                                        </div>
                                        <div class="col-md-12" style="padding-bottom: 10px; text-align: center; display: none;" align="center" >
                                            <label>Imagen</label><br>
                                            <iframe src="" frameborder="2" style="width: 200px;height: 200px; background-color: white"></iframe>
                                        </div>
                                        <div class="col-md-3" style="padding-bottom: 10px">
                                            <input name="item_cost" id="item_cost" placeholder="Precio costo" type="number"
                                                   min="0" step="0.1" class="form-control" onblur="finalPrice()" required>
                                        </div>
                                        <div class="col-md-2" style="padding-bottom: 10px">
                                            <input name="item_iva" id="item_iva" placeholder="% iva" type="number"
                                                   min="0" step="0.1" class="form-control" onblur="finalPrice()" required>
                                        </div>
                                        <div class="col-md-2" style="padding-bottom: 10px">
                                            <input name="item_discount" id="item_discount" placeholder="% descuento" type="number"
                                                   min="0" step="0.1" class="form-control" onblur="finalPrice()" required>
                                        </div>
                                        <div class="col-md-2" style="padding-bottom: 10px">
                                            <input name="item_profit" id="item_profit" placeholder="% ganancia" type="number"
                                                   min="0" step="0.1" class="form-control" onblur="finalPrice()"  required>
                                        </div>
                                        <div class="col-md-3" style="padding-bottom: 10px">
                                            <input name="item_final_price" id="item_final_price" placeholder="Precio final" type="number"
                                                   class="form-control" readonly required>
                                        </div>
                                        <div class="col-md-12" style="padding-bottom: 10px">
                                            <textarea name="add_item_obs" id="add_item_obs" placeholder="Observaciones" type="text"
                                                      class="form-control"></textarea>
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
                                {{--                                <table class="table table-striped table-custom" id="brands-table">--}}
                                {{--                                    <thead>--}}
                                {{--                                    <tr>--}}
                                {{--                                        <th class="th-td-custom-1">Nombre</th>--}}
                                {{--                                        <th class="th-td-custom-2">Logo</th>--}}
                                {{--                                        <th class="th-td-custom-3">Opciones</th>--}}
                                {{--                                    </tr>--}}
                                {{--                                    </thead>--}}
                                {{--                                    <tbody>--}}
                                {{--                                    @foreach($brand_list as $brand)--}}
                                {{--                                        <tr>--}}
                                {{--                                            <td class="th-td-custom-1">{{$brand->name}}</td>--}}
                                {{--                                            <td class="th-td-custom-2">{{$brand->logo}}</td>--}}
                                {{--                                            <td class="th-td-custom-3" align="center">--}}
                                {{--                                                <div class="row">--}}
                                {{--                                                    <div class="col-sm-6" style="padding-left:0px">--}}
                                {{--                                                        <a href= "{{ route('stock.brands.edit', $brand->id) }}" class="btn ">--}}
                                {{--                                                            <i class="fas fa-pencil-alt" title="Editar"></i>--}}
                                {{--                                                        </a>--}}
                                {{--                                                    </div>--}}
                                {{--                                                    <div class="col-sm-6" style="padding-left:0px"><button  class="btn delete-icon" onclick="show_modal('{{$brand->name}}', '{{csrf_token()}}')"><i--}}
                                {{--                                                                class="fas fa-trash-alt" title="Eliminar"></i></button>--}}
                                {{--                                                    </div>--}}
                                {{--                                                </div>--}}
                                {{--                                            </td>--}}
                                {{--                                        </tr>--}}
                                {{--                                    @endforeach--}}
                                {{--                                    </tbody>--}}
                                {{--                                </table>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@include('partials.items-scripts')
@push('custom-scripts')
    <script>
        $(document).ready(function () {

        })
    </script>
@endpush

