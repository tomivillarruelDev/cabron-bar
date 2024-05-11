
<section class="container">
    <div class="row">


        <div class="col text-center">
            <p class="h3 mt-4 mb-2">Ingresar productos</p>
        </div>
        <div>
            <form action="../app/controllers/UpdatingMenuController.php" method="POST" enctype="multipart/form-data">
                <select name="type" class="form-control mb-2" required>
                    <option value="">Variedad</option>
                    <option value="frito">Fritos</option>
                    <option value="sandwich">Sandwich</option>
                    <option value="hamburguesa">Hamburguesas</option>
                    <option value="pizza">Pizzas</option>
                    <option value="minuta">Minutas</option>
                    <option value="bebida-sin-alcohol">Bebida sin alcohol</option>
                    <option value="limonada">Limonadas</option>
                    <option value="cerveza">Cervezas</option>
                    <option value="gin-tonic">Gin Tonic</option>
                    <option value="espumante">Espumantes</option>
                    <option value="medida">Medidad</option>
                    <option value="c-con-helado">Cóctel con Helado</option>
                    <option value="c-sin-helado">Cóctel sin Helado</option>
                    <option value="c-clasico">Cóctel Clásico</option>
                    <option value="c-autor">Cocteleria de autor</option>
                    <option value="caipis-julep">Caipis Julep</option>
                </select>

                <input type="text" name="name" placeholder="NOMBRE" class="form-control mb-2" required>
                <input type="placeholder" name="description" placeholder="Ingredientes" class="form-control mb-2">
                <input type="number" step="0.01" name="price" placeholder="PRECIO" class="form-control mb-2" required>
                <input type="file" name="image" class="form-control mb-2" required>
                <input type="submit" value="Cargar" class="btn btn-mio mt-2" style="color: white;">
            </form>
        </div>
        <?php
        if (isset($_GET['ok_bd'])) { ?>
            <p class="h4 mt-4 text-center">EL PRODUCTO SE CARGO EXITOSAMENTE.</p>
        <?php
        }
        ?>

    </div>
</section>