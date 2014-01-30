<?php
	/**
	 * instanciation de la connexion NoSql dans une variable de session
	 *
	 * /!\ changez ici par vos informations de connexion /!\
	 *
	 * Par defaut, si null ou false dans le "Nosql()" :
	 * 		$workspaceBase = 'nosql_db';
	 *
	 * @param string $workspaceBase le dossier de stockage de la base a utiliser (nosql_db by def)
	 * @param string $production (des)active les messages d'erreurs
	 */
if(empty($_SESSION['nosql']))
	$_SESSION['nosql'] = new Nosql();

