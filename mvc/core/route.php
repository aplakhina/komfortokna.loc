<?php
	class Route {
		static function start(){
			$url_cathegory = "home";
			$url_action = "index";
			$routes = explode("/", $_SERVER["REQUEST_URI"]);

			if(!empty($routes[1])) {

				$url_cathegory = $routes[1];

				if(!empty($routes[2])){
					$url_action = $routes[2];
				}
			}

			$model_name = $url_cathegory."Model";
			$model_path = "mvc/models/" .$model_name  .".php";
			if(file_exists($model_path)){
				include_once $model_path;
			}
//
			$controller_name = $url_cathegory."Controller";
			$controller_path = "mvc/controllers/" .$controller_name .".php";
			if(file_exists($controller_path)){
				include_once $controller_path;

                $action_name = $url_action;
				$controller = new $controller_name($action_name);

				if(method_exists($controller, $action_name)){
					$reflection = new ReflectionMethod($controller_name, $action_name);
					if (!$reflection->isPrivate())
						$controller->$action_name();
				} else {
					Route::error404();
				}
			} else {
				Route::error404();
			}
		}
		
		static function error404(){
			//header('Location: /');
		}
	}