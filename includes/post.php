<?php

$cone = new PDO('sqlite:BasesdeDatos/blogs.db')or die('imposible conectarce ala base de datos');

$consulta = "SELECT * FROM Posts WHERE usuario='".$_SESSION['UsuarioTemporal']."';";

$resultado = $cone->query($consulta);
foreach ($resultado as $varia) {
	echo "<section>
	<h4>Posts</h4>
		<div class='row'>
		<ul style='none'>
			<li><time>".$varia['anio']." ".$varia['mes']." ".$varia['dia']."</time></li>
			<li><h3>".$varia['titulo']."</h3></li>
			<li><h4>".$varia['subtitulo']."</h4></li>
		</ul>
		</div>
</section>";
}

?>