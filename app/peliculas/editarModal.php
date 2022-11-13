<!-- Modal -->
<div class="modal fade" id="editarModal" tabindex="-1" aria-labelledby="editarModalLabel" aria-hidden="true">
    
    <div class="modal-dialog">
        <div class="modal-content modal-lg">
            <div class="modal-header">

                <h1 class="modal-title fs-5" id="exampleModalLabel">Editar registro</h1>

                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>

            </div>

            <div class="modal-body">
                <form action="actualizar.php" method="POST" enctype="multipart/form-data">
                
                <input type="hidden" id="id" name="id">
                
                <div class="md-3">
                        <label for="nombre" class="form-label">Nombre: </label>
                        <input type="text" id="nombre" name="nombre" class="form-control" required>
                    </div>

                    <div class="md-3 mt-2">
                        <label for="descripcion" class="form-label">Descripcion: </label>
                        <textarea id="descripcion" name="descripcion" class="form-control" row="3" required></textarea>
                    </div>
                    <div class="md-3 mt-2">
                        <label for="genero" class="form-label">Genero: </label>
                        <select id="genero" class="form-select" name="genero" required>
                            <option value="">Seleccionar..</option>

                            <?php
                            while ($row_genero = $generos->fetch_assoc()) { ?>
                                <option value="<?php echo $row_genero["id"]; ?>">
                                    <?= $row_genero["nombre"] ?></option>
                            <?php } ?>

                        </select>
                    </div>

                    <div class="md-3 mt-2">
                        <label for="poster" class="form-label">Poster: </label>
                        <input type="file" name="poster" id="poster" class="form-control" accept="image/jpeg">
                    </div>
                    <div class="mt-3">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary"><i class="fa-solid fa-floppy-disk"></i> Guardar</button>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>