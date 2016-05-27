<?php
    include '../templates/headerAdmin.php';
?>

<form action="../controlador/controladorInici.php" method="post">
    <div class="row small-up-2 large-up-2"
        <div class="row">
          <div class="large-6 columns">
            
          </div>
        </div>
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
            <div class="large-4 columns">

            <label>Categoria</label>
            <input type="radio" name="categoriaPro" value="1"><label>Camisas</label>
            <input type="radio" name="categoriaPro" value="2"><label>Pantalones</label>
            <input type="radio" name="categoriaPro" value="3"><label>Sudaderas</label>

            </div>
        </div>
         <div class="row">
             
        </div>
        <div class="row">
            <div class="large-9 columns">

                <input id="checkbox1" type="checkbox"><label for="checkbox1">HE LEÍDO Y ACEPTO LAS CONDICIONES DE COMPRA Y LA POLÍTICA DE PRIVACIDAD</label>

            </div>
        </div>
        <div class="row">
            <input type="submit" name="enviar">
            <ul class="button-group">
                <!--<button class="small button" name="enviar" type="submit">Enviar</button>-->

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