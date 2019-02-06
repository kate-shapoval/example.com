<?php
require_once (DEV_ROOT_PATH.'application/core/Config.php');
/*
 * Router
*/
class Router
{
	private $routes;
	public function __construct(){
		$this->routes = Config::get('routes');
	}
	private static function ErrorPage404(){
		require_once(DEV_ROOT_PATH.'application/controllers/ErrorController.php');
		$controllerObject=new ErrorController();
		$controllerObject->actionView();
		return true;
    }
	public function start($uri){
		$uri=trim($uri,'/');
		$result = 0;
		foreach ($this->routes as $uriPattern=> $path) {
			if(preg_match("~$uriPattern~", $uri)){
				$internalRoute = preg_replace("~$uriPattern~", $path, $uri);
				$parametrsForController=explode('/', $internalRoute);
				$controllerName= ucfirst(array_shift($parametrsForController).'Controller');
				echo $controllerName;
				$actionName='action'.ucfirst(array_shift($parametrsForController));
				echo $actionName;
				$controllerFile=DEV_ROOT_PATH.'application/controllers/'.$controllerName.'.php';
				if(file_exists($controllerFile)){
					require_once($controllerFile);
					if(class_exists($controllerName)){
						$controllerObject=new $controllerName();
						//$result=$controllerObject->$actionName();
						$result = call_user_func_array(array($controllerObject, $actionName), $parametrsForController);
						if ($result !=null){
							break;
						}
					}
					else{
						Router::ErrorPage404();
					}
					
				}
				else{
					Router::ErrorPage404();
				}
			}
		}
		if (!$result){
			Router::ErrorPage404();
		}
		return true;
	}	
}
?>