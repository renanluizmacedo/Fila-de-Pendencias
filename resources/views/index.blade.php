<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Lista de Tarefas</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container px-4 px-lg-5">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#!">Colegas</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Header-->
    <header class="bg-dark py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">Lista de Tarefas</h1>
                <p class="lead fw-normal text-white-50 mb-0">Administração e Organização </p>
            </div>
        </div>
    </header>
    <!-- Section-->
    <section class="py-5">

        <div class="text-center">
            <button class="btn btn-outline-dark" role="button" onclick="novaPendencia()">Nova Pendencia</button>
        </div>
        </div>
        <div class="modal" tabindex="-1" role="dialog" id="dlgPendencia">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form class="form-horizontal" id="formProduto">
                        <div class="modal-header">
                            <h5 class="modal-title">Novo Produto</h5>
                        </div>
                        <div class="modal-body">


                            <input type="hidden" id="id" class="form-control">

                            <div class="form-group">

                                <label for="nomePendencia" class="control-label">Nome Da Pendencia</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="nomePendencia"
                                        placeholder="Pendencia">
                                </div>

                                <div class="mt-3">
                                    <label for="descricao" class="form-label">Descrição</label>
                                    <textarea class="form-control" id="descricao" rows="3"></textarea>
                                </div>

                                <div class="mt-3">
                                    <label>Data:</label>
                                    <input type='text' data-date-format="DD-MM-YYYY" class="form-control" />

                                </div>

                            </div>

                            

                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Salvar</button>
                            <button type="cancel" class="btn btn-secondary" data-dissmiss="modal">Cancelar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Fancy Product</h5>
                                <!-- Product price-->
                                $40.00 - $80.00
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center">
                                <a class="btn btn-outline-warning mt-auto" href="#">Visualizar</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Fancy Product</h5>
                                <!-- Product price-->
                                $40.00 - $80.00
                            </div>
                        </div>

                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center">
                                <a class="btn btn-outline-warning mt-auto" href="#">Visualizar</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2021</p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('js/jquery.min.js') }}" type="text/javascript"></script>
    <script src="js/script.js" type="text/javascript"></script>
</body>

</html>
