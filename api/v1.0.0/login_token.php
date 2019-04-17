<?php
require 'auth.php';
?>
<form method="post" action="api.php/">
<input name="token" value=
<?php
$auth = new PHP_API_AUTH(array(
	'secret'=>'1234567890123456789012',
	'authenticator'=>function($user,$pass){
		try {
			$conexion = Conectar::conexion();
			$sql = "SELECT * FROM `".NAME_DB."`.`".TABLE_USERS."` WHERE `".TABLE_USERS."`.`username` IN ('{$user}') AND `".TABLE_USERS."`.`password` IN ('{$pass}') LIMIT 1";
			$query = $conexion->query($sql);
			$result = Conectar::get_data($query);

			if(isset($result[0])){
				$result = (object) $result[0];

				if ($user==$result->username && $pass==$result->password) $_SESSION['user']=$user;
				
			$req = new stdClass();
			$req->user = $user;
			$req->pass = $pass;
			$session_ = new IntroAPI($req);
			}
			else
				{ throw new Exception('invalid fields'); }

		}
		catch(PDOException $e) {
			$response = new stdClass();
			$response->code = 200;
			$response->error = true;
			$response->response = $e->getMessage();
			$response->req = $req;
			echo json_encode($response);
			exit(0);
		}
		catch(Exception $e) {				
			$response = new stdClass();
			$response->code = 200;
			$response->error = true;
			$response->response = $e->getMessage();
			$response->request  = $req;
			echo json_encode($response);
			exit(0);
		}
		$conexion = null;
	}
));
$auth->executeCommand();
?>/>
<input type="submit" value="ok">
</form>
