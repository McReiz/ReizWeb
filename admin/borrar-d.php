<?php
	include ('../include/config.php');
	if(isset($_POST['eliminar']) && $_POST['eliminar'] == 'Eliminar'){
		$story_num = $_POST['id'];
		$sqlEliminar = mysql_query("DELETE FROM layout WHERE id = $story_num") or die(mysql_error());
		$mensaje =  "Los datos fueron eliminados correctamente <a href='../index.php' target='_blank'>ir a la pagina</a> volver al panel de <a href='panel.php?id=designpanel'>administracion</a>";
	}
	elseif(isset($_GET['id'])){
		$id = $_GET['id'];
		$sql = mysql_query("SELECT * FROM layout WHERE id = $id") or die(mysql_error());
		$row = mysql_fetch_array($sql);
		$mensaje =  "�Est� seguro que quiere eliminar la noticia numero <b>$row[id]</b> titulo; <b>$row[titulo]</b>?";
	}
	echo $mensaje;
?>
<form name="eliminar-registro" method="post" action="<?php $_SERVER['PHP_SELF']; ?>" >
<input name="id" type="hidden" value="<?php echo $row['id']; ?>" />
<input name="eliminar" type="submit" value="Eliminar" />
</form>