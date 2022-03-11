<?=$header; ?>
    <div class="card text-start mt-5">
        <h3>Agregar libro</h3>
        <form action="<?=site_url('/store')?>" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Esciba el nombre del libro">

                <label for="imagen" class="form-label">Imagen:</label>
                <input type="file" name="imagen" id="imagen" class="form-control" placeholder="Esciba el nombre del libro">

                <button type="submit" class="btn btn-primary mt-5">Crear</button>
            </div>
        </form>
    </div>
<?=$footer; ?>    
