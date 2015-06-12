<?php

$cone = new PDO('sqlite:../blogs.db')or die('imposible conectarce ala base de datos');

$consulta = "SELECT * FROM Posts WHERE usuario='".$_SESSION['UsuarioTemporal']."';";

$resultado = $cone->query($consulta);
foreach ($resultado as $varia) {
	echo "<section id='aligpost'>
		<div>
			<time>".$varia['anio']." ".$varia['mes']." ".$varia['dia']."</time>
			<h3>".$varia['titulo']."</h3>
			<h3>".$varia['subtitulo']."</h3>
		</div>
</section>";
}

?>