<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="row mt-4">

            <div class="col">
                <h3 class="text-info ">Formulário de Cadastro</h3>
            </div>

            <div class="col text-right">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">
                    Cadastrar
                </button>
            </div>

        </div>

        <div class="modal" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Cadastrando Usários</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <form action="back-End/cadastros.php" method="post">

                            <label for="">Nome</label>
                            <input type="text" name="nome" class="form-control" placeholder="Digite seu nome" required>
                            <br>
                            <label for="">Telefone</label>
                            <input type="text" name="telefone" class="form-control" placeholder="Digite seu telefone"
                                required>
                            <br><br>

                            <div class="text-center">
                                <input type="submit" value="ENVIAR" class="btn btn-success">
                            </div>

                        </form>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                    </div>

                </div>
            </div>
        </div>

        <br>

        <table class="table">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Nome</th>
                    <th>Telefone</th>
                    <th>Data</th>
                    <th>Ações</th>
                </tr>
            </thead>

            <tbody>

                <?php
        
                     include 'back-End/conexao.php';

            $query_listar= "SELECT *
                        FROM cadastro_pessoas";

            $buscar_cadastros = mysqli_query($connex, $query_listar);

            while($retorno_cadastros = mysqli_fetch_array($buscar_cadastros)){ 
            
        ?>

                <tr>
                    <td scope="row"><?php echo $retorno_cadastros['id']; ?> </td>
                    <td><?php echo $retorno_cadastros['nome']; ?></td>
                    <td><?php echo $retorno_cadastros['telefone']; ?></td>
                    <td><?php echo $retorno_cadastros['dataCadastro']; ?></td>

                    <td>
                        <form action="back-End/edicoes.php" method="post">

                            <input type="hidden" name="idCadastro" value="<?php echo $retorno_cadastros['id']; ?>">

                            <input type="text" name="nome" value="<?php echo $retorno_cadastros['nome']; ?>">
                            <input type="text" name="telefone" value="<?php echo $retorno_cadastros['telefone']; ?>">

                            <input type="submit" value="EDITAR" class="btn btn-warning">
                        </form>
                    </td>


                    <td>
                        <form action="back-End/delete.php" method="post">
                            <input type="hidden" name="idCadastro" value="<?php echo $retorno_cadastros['id']; ?>">

                            <input type="submit" value="EXCLUIR" class="btn btn-danger">
                        </form>
                    </td>
                </tr>

                <?php } ?>
            </tbody>
        </table>







        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
        </script>

        <footer class="bg-light text-center text-white">
            <!-- Grid container -->
            <div class="container p-4 pb-0">
                <!-- Section: Social media -->
                <section class="mb-4">
                    <!-- Facebook -->
                    <a class="btn btn-primary btn-floating m-1" style="background-color: #3b5998;" href="#!"
                        role="button"><i class="fab fa-facebook-f"></i></a>

                    <!-- Twitter -->
                    <a class="btn btn-primary btn-floating m-1" style="background-color: #55acee;" href="#!"
                        role="button"><i class="fab fa-twitter"></i></a>

                    <!-- Google -->
                    <a class="btn btn-primary btn-floating m-1" style="background-color: #dd4b39;" href="#!"
                        role="button"><i class="fab fa-google"></i></a>

                    <!-- Instagram -->
                    <a class="btn btn-primary btn-floating m-1" style="background-color: #ac2bac;" href="#!"
                        role="button"><i class="fab fa-instagram"></i></a>

                    <!-- Linkedin -->
                    <a class="btn btn-primary btn-floating m-1" style="background-color: #0082ca;" href="#!"
                        role="button"><i class="fab fa-linkedin-in"></i></a>
                    <!-- Github -->
                    <a class="btn btn-primary btn-floating m-1" style="background-color: #333333;" href="#!"
                        role="button"><i class="fab fa-github"></i></a>
                </section>
                <!-- Section: Social media -->
            </div>
            <!-- Grid container -->

            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                © 2022 Copyright:
                <a class="text-white" href="https://github.com/Chaves35">José Chaves</a>
            </div>
            <!-- Copyright -->
        </footer>
</body>

</html>