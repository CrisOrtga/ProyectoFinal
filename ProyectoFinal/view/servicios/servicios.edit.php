<!--autor:Ortega Jaramillo Cristhina-->
<?php require_once HEADER;
 ?>
<div class="container">
    <h2><?php echo $titulo ?></h2>
    <div class="card card-body">
        <form action="index.php?c=servicios&f=edit" method="POST" name="formServicio" id="formServicio">
            <input type="hidden" name="id" id="id" value="<?php echo $servicio['id']; ?>"/>
            <div class="form-row">
                <div class="form-group col-sm-6">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre" value="<?php echo $servicio['nombre']; ?>" class="form-control" placeholder="Nombre" required>
                </div>
                
                <div class="form-group col-sm-12">
                    <label for="descripcion">Descripción</label>
                    <textarea name="descripcion" id="descripcion" class="form-control" placeholder="Descripción" required><?php echo $servicio['descripcion']; ?></textarea>
                </div>
                <div class="form-group col-sm-6">
                <label for="descripcion">Duracion</label>
                <input type="text" name="duracion" id="duracion" class="form-control" placeholder="Duracion" required><?php echo $servicio['duracion']; ?></textarea>
            </div>

            <div class="form-group col-sm-6">
            <label for="moda">Modalidad:</label>
                <select id="moda" name="moda" required>
                    <option value="">Seleccione...</option>
                    <option value="En linea">En linea</option>
                    <option value="presencial">Presencial</option>
                </select><br>
            </div>
                <div class="form-group col-sm-6">
                    <label for="precio">Precio</label>
                    <input type="text" name="precio" id="precio" value="<?php echo $servicio['precio']; ?>" class="form-control" placeholder="Precio" required>
                </div>
                <div class="form-group mx-auto">
                    <button type="submit" class="btn btn-primary" onclick="if (!confirm('¿Está seguro de modificar el servicio?')) return false;">Guardar</button>
                    <a href="index.php?c=servicios&f=index" class="btn btn-primary">Cancelar</a>
                </div>
            </div>
        </form>
    </div>
</div>

<?php require_once FOOTER; ?>