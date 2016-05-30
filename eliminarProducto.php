<?php
include '../templates/headerAdmin.php';
?>
<form action="../controlador/controladorInici.php" method="post">
    <div class="row">
            <div class="large-4 columns">
                ID del producto: <input type="text"  name="idPro"/>
            </div>
        </div>
         <div class="row">
            <ul class="button-group">
                <button class="small button" name="enviar" type="submit">Enviar</button>
                <button class="small button [success secondary alert]" name="reset" type="reset">Limpiar</button>
            </ul>
        </div>
                <script src="../js/jquery-2.1.4.min.js"></script>
		<script src="../js/vendor/foundation.js"></script>
                    <script>
		      $(document).foundation();
		    </script>
	</body>
</html>