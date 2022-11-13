<!-- Modal -->
<div class="modal fade" id="eliminarModal" tabindex="-1" aria-labelledby="eliminarModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content modal-sm">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminar Registro</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body ">
            ¿Desea eliminar el registro?
           
         

                <div class="modal-footer">
                    <form action="eliminar.php" method="POST">
                       <input type="hidden" name="id" id="id">
                    
                        <button type="button" data-bs-dismiss="modal" class="btn btn-secondary py-2" data-dismiss="modal"><i class="fa-solid fa-xmark"></i> Cerrar</button>
                        <button type="submit" class="btn btn-danger py-2"> <i class="fa-regular fa-trash-can"></i> Eliminar</button>
                        
                    
                    </form>




                </div>

            </div>

        </div>
    </div>
</div>