<?  $usuario="root";
	$pass="123";
	$host="localhost";
	$baseDatos="intranet";
	$idf=mysql_connect($host,$usuario,$pass);
	mysql_select_db($baseDatos,$idf)or die("error en la conexion");

if($_GET['salir']=='endsess')
{
	session_destroy();
	header("Location: ".$_SERVER['PHP_SELF']."");
}


if($_POST['iniciar_ses']=='startsess')
{
	$usuario=$_POST['usuario'];
	$password=$_POST['password'];
	//$pagina="http://100.100.100.55/intranet/www/principal.php";
	
	if($usuario&&$password)
	{

		$sql="SELECT * FROM usuario WHERE usuario='".$usuario."' AND password='".$password."'";
		//echo $sql;
		$res=mysql_query($sql)or die ("<br>Error al realizar la consulta");
		if(mysql_num_rows($res)<=0)
		{

			echo "<script> alert('Error en el usuario y/o Password')</script>";
			
		}
		else
		{
			$obj=mysql_fetch_object($res);
			$_SESSION['identificador']=$obj->id;
			$_SESSION['n_usuario']=$obj->usuario;
			$_SESSION['usuario']=$obj->nombre;
			$_SESSION['nivel']=$obj->t_cuenta;
			$_SESSION['empresa']=$obj->empresa;
			$_SESSION['imagen']=$obj->imagen;
			$_SESSION['numero_vend']=$obj->no_vendedor;
			//header("Location: ".$pagina);
			mysql_free_result($res); 
			echo "<script> history.back(alert('Vienvenido a tu sesión'))</script>";

			
		}
	}
	else
	{
		echo "<script> alert('Error en el usuario y/o Password')</script>";
	}
}


function autorizado($listado)
{
	if(!$_SESSION['nivel'])
		$acceso=false;
	else
	{
		$niveles=explode(",",$listado);
		$acceso=false;
		if($_SESSION['nivel']=='administrador'||$_SESSION['nivel']=='gerente' ||$_SESSION['nivel']=='sistemas')
		{
			$acceso=true;
		}
		else
		{
			for($i=0;$i<count($niveles);$i++)
			{
				if($_SESSION['nivel']==$niveles[$i])
					$acceso=true;
			}
		}
	}
		return $acceso;
}

?>