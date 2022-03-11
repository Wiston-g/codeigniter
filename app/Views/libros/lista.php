<?=$header ?>
<div class="mt-5">

    <h2>lista</h2>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>NOMBRE</th>
                <th>IMAGEN</th>
                <th>ACCIONES</th>
            </tr>
        </thead>
        
        <tbody>
        <?php foreach ($libros as $libro) {?>
            <tr>
                <td><?=$libro['ID']; ?></td>
                <td><?=$libro['NOMBRE']; ?></td>
                <td><?=$libro['IMAGEN']; ?></td>
                <td>selecc |delet </td>
            </tr>
        <?php } ?>
            
            
        </tbody>
    </table>
        
</div>
<?=$footer ?>