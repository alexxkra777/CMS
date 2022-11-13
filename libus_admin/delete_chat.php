<?php
	include "db.php";
	if (isset($_GET)) {
		if (!empty($_GET["id_del"]) AND is_numeric($_GET["id_del"])) {
			$data = array(':id_del' => $_GET["id_del"] );
			$sql = "DELETE FROM chat_libus WHERE ID = :id_del";

			$sql_prov = $db->prepare($sql);
			$sql_prov->execute($data);

			header("location: index.php");
		}
	};

?>