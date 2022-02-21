<div class="container-xl">
    <div class="row justify-content-center">
        <h2 class="text-center p-2">Buscar Citas por Fecha</h2>
        <form class="col-md-6 "> 
            <div class="campo">
                <label class="form-label" for="fecha">Fecha: </label>
                <input class="form-control mb-2" type="date" id="fecha" name="fecha" value="<?php echo $fecha; ?>"> 
            </div>
        </form>
    </div>

    <?php 
        if (count($citas) === 0) {
            echo '<h2 class="text-center p-2">No Hay Citas en esta fecha</h2>';
        }
    ?>

    <div class="citas" id="citas-admin">
        <ul class="row list-unstyled justify-content-center">
            <?php 
                $idCita = 0;
                foreach ($citas as $key => $cita) :
            ?>
            <li class="col-sm-5 col-md-3 m-1 border border-dark rounded-3 bg-white">
                <p>ID: <span><?php echo $cita->id; ?></span></p>
                <p>Hora: <span><?php echo $cita->hora; ?></span></p>
                <p>Cliente: <span><?php echo $cita->nombre . ' ' . $cita->apellido; ?></span></p>
                <p>Email: <span><?php echo $cita->email; ?></span></p>
                <p>Teléfono: <span><?php echo $cita->telefono; ?></span></p>
            </li>
            <?php 
                endforeach;
            ?>
        </ul>
    </div>
</div>

<?php 
    $script = '<script src="build/js/buscador.js"></script>';
?>