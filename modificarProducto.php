<?php
include '../templates/headerAdmin.php';
?>
<form action="../controlador/controladorInici.php" method="post">
        <div class="row">
            <div class="large-4 columns">
                Nombre del producto: <input type="text" placeholder="nombre" name="nombrePro"/>
            </div>
        </div>
        <div class="row">
            <div class="large-4 columns">

                Precio: <input type="text" placeholder="nombre" name="precioPro"/>

            </div>
        </div>
        <div class="row">
            <div class="large-4 columns">

                Imagen: <input type="file" name="imagenPro"/>

            </div>
        </div>
        <div class="row">
            <div class="large-4 columns">

                Stock: <input type="text" placeholder="" name="stockPro"/>

            </div>
        </div>
        <div class="row">
            <div class="large-4 columns">

                Descripción: <textarea name="descripcionPro"></textarea>

            </div>
        </div>
        <div class="row">
            <ul class="button-group">
                <button class="small button" name="enviar" type="submit">Enviar</button>
                <button class="small button [success secondary alert]" name="reset" type="reset">Limpiar</button>
            </ul>
        </div>
</form>


                <script src="../js/jquery-2.1.4.min.js"></script>
		<script src="../js/vendor/foundation.js"></script>
                    <script>
		      $(document).foundation();
		    </script>
	</body>
</html>