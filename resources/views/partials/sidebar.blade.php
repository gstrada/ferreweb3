<div class="col-md-2 sidebar" id="sidebar">
    <div style="width: 100%; text-align: center">
        <hr>
        <h3>Menu</h3>
        <hr>
    </div>
    <div>
        <a class="dropdown-item" href="{{ route('home') }}"><i class="fas fa-home"></i> Inicio</a>
    </div>
    <br>
    <div>
        <a class="dropdown-item" href="#"><i class="fas fa-user-circle"></i> Usuarios</a>
    </div>
    <br>
    <div>
        <a class="dropdown-item" href="#"><i class="fas fa-users"></i> Clientes</a>
    </div>
    <br>
    <div>
        <a class="dropdown-item " href="#" data-toggle="collapse" data-target="#suppliers"><i
                class="fas fa-cubes"></i> Proveedores <i class="fas fa-angle-down"></i></a>
        <div id="suppliers" class="collapse">
            <div class="row">
                <div class="col-md-12 offset-3" style="border-left: 1px solid black; height: 25px">
                    <span><a href="{{route('suppliers')}}" class="sidebar-item">Agregar proveedor</a></span>
                </div>
                <div class="col-md-12 offset-3" style="border-left: 1px solid black; height: 25px">
                    <span><a href="{{route('suppliers.salesmen')}}" class="sidebar-item">Agregar vendedor</a></span>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div>
        <a class="dropdown-item " href="#" data-toggle="collapse" data-target="#demo"><i
                class="fas fa-cubes"></i> Stock <i class="fas fa-angle-down"></i></a>
        <div id="demo" class="collapse">
            <div class="row">
                <div class="col-md-12 offset-3" style="border-left: 1px solid black; height: 25px">
                    <span><a href="{{route('stock.add-items')}}" class="sidebar-item">Artículos</a></span>
                </div>
                <div class="col-md-12 offset-3" style="border-left: 1px solid black; height: 25px">
                    <span><a href="{{route('stock.categories')}}" class="sidebar-item">Rubros</a></span>
                </div>
                <div class="col-md-12 offset-3" style="border-left: 1px solid black; height: 25px">
                    <span><a href="{{route('stock.brands')}}" class="sidebar-item">Marcas</a></span>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div>
        <a class="dropdown-item" href="#"><i class="fas fa-money-bill-alt"></i> Caja</a>
    </div>
    <br>
</div>
