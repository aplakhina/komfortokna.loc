<?php
	class View {
		function generate($controller){


            $viewConfig = $controller->getViewConfig();
            include_once "mvc/views/" .$viewConfig["content"] .".php";

            $header = getHeader();
            $resources = getResources();
            $elements = getElements();

            $controller->buildPage($elements, $resources);

			include_once "mvc/views/shared/" .$viewConfig["template"];
		}

		function generatePage(){
			foreach(getElements() as $val){
				$file = "mvc/views/partial/" .$val["type"] ."/" .$val["name"] ."/" .$val["name"] .".php";
				if(file_exists($file))
					include $file;
			}
		}
	}