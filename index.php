<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,400" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="css/custom.css">
    <script>
        function cargar() {
            var tabla = $.ajax({
                url: "php/modelo.php",
                method: 'POST',
                dataType: "text",
                data: {
                    tb: 'as'
                },
                async: true,
                success: function(data) {
                    console.log(data);
                    $('#tablaProductos').html(data);
                }
            }).responseText;
        }
        cargar();
    </script>
    <title>Gastos pasteles</title>
</head>

<body>
    <div class="container">
        <header>
            <h1 class="text-center">Cálculo de Gastos</h1>
        </header>
        <section class="contenido-principal">
            <div class="row">
                <div class="col ">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <span class="fs-5 lh-lg">Productos</span>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Nuevo producto
                            </button>
                        </div>
                        <div class="card-body">
                            <div id="miTabla"></div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <th>ID</th>
                                        <th>Producto</th>
                                        <th>Precio</th>
                                        <th>Categoria</th>
                                        <th>Acciones</th>
                                    </thead>
                                    <tbody id="tablaProductos">
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer">...</div>
                    </div>
                    <div class="contenido primario">
                        <h2 class="text-center">Añade tus gastos aqui</h2>

                        <form id="agregar-gasto" action="#">
                            <div class="form-group">
                                <label for="gasto">Gasto:</label>
                                <input type="text" class="form-control" id="gasto" placeholder="Nombre Gasto">
                            </div>
                            <div class="form-group">
                                <label for="cantidad">Cantidad:</label>
                                <input type="text" class="form-control" id="cantidad" placeholder="Cantidad en $">
                            </div>

                            <button type="submit" id="button" class="btn btn-primary">Agregar</button>
                            <button type="button" id="buttonPresupuesto" class="btn btn-success">Nuevo
                                presupuesto</button>
                        </form>

                    </div>
                    <!--.contenido-->
                </div>
                <!--.col-->

                <div class="col">
                    <div class="contenido secundario">

                        <h2 class="text-center">Listado</h2>

                        <div id="gastos">
                            <ul class="list-group"></ul>
                        </div>
                        <div id="presupuesto" class="presupuesto">
                            <div class="alert alert-primary">
                                <p>Presupuesto: $ <span id="total"></span> </p>
                            </div>
                            <div class="restante alert alert-success">
                                <p>Restante: $ <span id="restante"></span></p>
                            </div>
                        </div>
                        <!--.presupuesto-->
                    </div>
                    <!--.contenido-->
                </div>
                <!--.col-->
            </div>
            <!--.row-->
        </section>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Nuevo Producto</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="row g-3">
                        <div class="col-md-12">
                            <label for="inputEmail4" class="form-label">Producto</label>
                            <input type="email" class="form-control" id="inputEmail4">
                        </div>
                        <div class="col-md-12">
                            <label for="inputEmail4" class="form-label">Precio</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text">$</span>
                                <span class="input-group-text">0.00</span>
                                <input type="number" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
                            </div>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label for="inputState" class="form-label">Categoria</label>
                            <select id="inputState" class="form-select">
                                <option selected>Choose...</option>
                                <option>...</option>
                            </select>
                        </div>

                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Agregar</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="js/app.js"></script>
</body>

</html>