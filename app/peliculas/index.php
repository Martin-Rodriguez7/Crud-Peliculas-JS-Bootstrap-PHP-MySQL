<?php

require '../config/database.php';
$sqlPeliculas = "SELECT p.id,p.nombre,p.descripcion, g.nombre as genero FROM pelicula as p INNER JOIN genero as g ON p.idgenero=g.id";
$peliculas = $conn->query($sqlPeliculas);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud de peliculas</title>
    <script src="../../assets/js/bootstrap.bundle.min.js"></script>
    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../assets/css/all.min.css" rel="stylesheet">
</head>

<body>
    <div class="container py-3">
        <h2 class="text-center">Peliculas</h2>
        <div class="row justify-content-end">
            <div class="col-auto">
                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalRegistro"> <i class="fa-solid fa-circle-plus"></i> Nuevo Registro</a>
            </div>
        </div>

        <table class="table table-sm table-striped table-hover mt-5">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Genero</th>
                    <th>Poster</th>
                    <th>Accion</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row_pelicula = $peliculas->fetch_assoc()) { ?>
                    <tr>
                        <td><?= $row_pelicula['id'] ?></td>
                        <td><?= $row_pelicula['nombre'] ?></td>
                        <td><?= $row_pelicula['descripcion'] ?></td>
                        <td><?= $row_pelicula['genero'] ?> </td>
                        <td></td>
                        <td> <a href="#" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-id="<?= $row_pelicula["id"]; ?>" data-bs-target="#editarModal">
                                <i class="fa-regular fa-pen-to-square py-2"></i> Editar<a>
                                    <a href="#" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-id="<?= $row_pelicula["id"]; ?>" data-bs-target="#eliminarModal">
                                        <i class="fa-regular fa-trash-can py-2"></i> Eliminar<a>
                        </td>
                    <tr>
                    <?php } ?>
            </tbody>
        </table>
    </div>

    <?php
    $sqlGeneros = "SELECT id, nombre FROM genero";
    $generos = $conn->query($sqlGeneros);
    ?>
    <?php include 'Modal.php'; ?>
    <?php $generos->data_seek(0); ?>
    <?php include 'editarModal.php'; ?>
    <?php include 'eliminarModal.php'; ?>
    <script src="../../assets/js/bootstrap.bundle.min.js"></script>
    <script>
        let editaModal = document.getElementById('editarModal');
        let eliminaModal = document.getElementById('eliminarModal');
        editaModal.addEventListener('shown.bs.modal', event => {
            let button = event.relatedTarget;
            let id = button.getAttribute('data-bs-id');
            let inputId = editaModal.querySelector('.modal-body #id')
            let inputNombre = editaModal.querySelector('.modal-body #nombre')
            let inputDescripcion = editaModal.querySelector('.modal-body #descripcion')
            let inputGenero = editaModal.querySelector('.modal-body #genero')
            let url = "getPelicula.php"
            let formData = new FormData();
            formData.append('id', id);

            fetch(url, {
                    method: "POST",
                    body: formData
                }).then(response => response.json())
                .then(data => {
                    inputId.value = data.id;
                    inputNombre.value = data.nombre;
                    inputDescripcion.value = data.descripcion;
                    inputGenero.value = data.idgenero;
                }).catch(err => console.log(err))
        })
        eliminaModal.addEventListener('shown.bs.modal', event => {
            let button = event.relatedTarget;
            let id = button.getAttribute('data-bs-id');
            eliminaModal.querySelector('.modal-footer #id').value = id
        })
    </script>
</body>

</html>