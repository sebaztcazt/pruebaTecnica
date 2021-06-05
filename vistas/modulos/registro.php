<div class="container-fluid">
		
    <div class="container ">

        <form role="form" method="POST" id="formularioRegistro">

            <label for="nombre">Nombres:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-user"></i></span>
                </div>
                <input type="text" class="form-control" placeholder="Escribe tus Nombres" id="nombre" name="nombre" minlength="3" maxlength="100" required>
            </div>

            <label for="nombre">Apellidos:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-user-check"></i></span>
                </div>
                <input type="text" class="form-control" placeholder="Escribe tus Apellidos" id="apellido" name="apellido" minlength="3" maxlength="100" required>
            </div>

            <br>

            <button type="submit" class="btn btn-primary mx-auto d-block" id="btnGuardarRegistro">GUARDAR</button>

    </div>

</div>

