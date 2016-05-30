<?php
    include '../templates/headerAdmin.php';
?>
<form action="../../controlador/controladorInici.php" method="post">
        <div class="row">
            <div class="large-4 columns">
                Nombre del producto: <input type="text" placeholder="Nombre" name="nombrePro"/>
            </div>
        </div>
        <div class="row">
            <div class="large-4 columns">

                Precio: <input type="text" placeholder="Precio" name="precioPro"/>

            </div>
        </div>
        <div class="row">
            <div class="large-4 columns">

                Imagen: <input type="file" name="imagenPro"/>

            </div>
        </div>
        <div class="row">
            <div class="large-4 columns">

                Stock: <input type="text" placeholder="Stock" name="stockPro"/>

            </div>
        </div>
        <div class="row">
            <div class="large-4 columns">

                Descripción: <textarea name="descripcionPro"></textarea>

            </div>
        </div>
        <div class="row">
            <div class="large-4 columns">
              Categoria: <select name="categoriaPro">
                    <option value=1>Camisas</option>
                    <option value=2>Pantalones</option>
                    <option value=3>Sudaderas</option>
                </select>
            </div>
        </div>
    <div class="row">
            <div class="large-4 columns">
                Talla: <select name="tallaPro">
                    <option value=1>S</option>
                    <option value=2>M</option>
                    <option value=3>L</option>
                    <option value=4>XL</option>
                </select>
            </div>
        </div>
    <div class="row">
            <div class="large-4 columns">
                Perfil Producto: <select name="perfilPro">
                    <option value="Hombre">HOMBRE</option>
                    <option value="Mujer">MUJER</option>
                    <option value="Nino/a">NIÑO/A</option>
                </select>
            </div>
        </div>
        <div class="row">
            <ul class="button-group">
                <!--<button class="small button" name="enviarProducte" type="submit">Enviar</button>-->
                enviar<input type="submit" value="enviar" name="enviarProducte">
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