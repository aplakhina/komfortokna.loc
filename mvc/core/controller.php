<?php
	class Controller {
		public $view;
		public $model;

        private $viewConfig;
        private $controllerName;
        private $actionName;

        function getViewConfig(){
            return $this->viewConfig;
        }

		function __construct($action){
			$this->view = new View();
            $this->controllerName = str_replace("Controller", "", get_class($this));
            $this->actionName = $action;
		}
		
		function index(){
			$this->formView();
		}


        public function buildPage($resources){
            if(BUILD) {
                $controllerInfo = array(
                    "action" => $this->actionName,
                    "name" => $this->controllerName
                );

                $builder = new FileManager();
                $builder->buildAll($resources, $controllerInfo);
            }
        }

		protected function formView($template_view = "layout.php"){
			$content_view = $this->controllerName ."/" .$this->actionName;

            $this->viewConfig = array(
                "content" => $content_view,
                "template" => $template_view
            );

			$this->view->generate($this);
		}
	}