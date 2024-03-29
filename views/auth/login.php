<?php include_once __DIR__ . '/../templates/barra.php'; ?>
<main class="container-xl p-2 d-grid gap-2 text-center">
    <h2>Iniciar Sesión</h2>
    <p>Inicio de sesión con tus datos</p>
    
    <div class="row justify-content-center">

    <?php include_once __DIR__ . '/../templates/alertas.php'; ?>

        <form method="POST" class="col-md-10 needs-validation text-start" novalidate>
            <div class="mb-1">
                <label for="usuario" class="form-label">Tipo de Usuario: </label>
                <select class="form-select" id="usuario" name="usuario" required>
                    <option selected disabled value="">--Seleccionar--</option>
                    <option value="1">Administración</option>
                    <option value="2">Alumno</option>
                </select>
                <span class="invalid-feedback">Elige una opción.</span>
            </div>
            <div class="mb-1">
                <label class="form-label" for="id">ID / Matricula: </label>
                <input class="form-control" type="text" id="id" placeholder="Tu ID / Matricula" name="id" required>
                <span class="invalid-feedback">Escribe tu ID / Matricula.</span>
            </div>
            
            <div class="mb-1">
                <label class="form-label" for="password">Contraseña</label>
                <input class="form-control" type="password" id="password" placeholder="Tu Contraseña" name="password" required>
                <span class="invalid-feedback">Escribe tu Contraseña.</span>
            </div>
            <input type="submit" class="btn btn-success my-1 fs-5 px-1" value="Iniciar Sesión">
        </form>
    </div>
</main>