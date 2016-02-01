<?php
    class FileManager {


        public function buildAll($resources, $controllerInfo){
            $this->buildPartialBlocks($resources);
            $this->buildStyles($resources, $controllerInfo, true);
            $this->buildScripts($resources, $controllerInfo, false);
        }

        public function buildStyles($styles, $controllerInfo, $emptyStyles){
            $lessFolder = "content/less/";

            $options = array('compress' => true);
            $parser = new Less_Parser($options);

            $parser->parseFile("content/less/global-mixins.less");
            $parser->parseFile("content/less/global-styles.less");
            $parser->parseFile("content/less/customize.less");

            /*if(isset($styles["additionalStyles"]))
                foreach($styles["additionalStyles"] as $val) {
                    $additionalCss = "scripts/frameworks/" .$val;
                    if(file_exists($additionalCss)) {
                        $parser->parseFile($additionalCss);
                    }
                }*/

            foreach($styles as $val) {
                $pathElement = $lessFolder .$val["name"]. "/" .$val["name"]. ".less";

                if(file_exists($pathElement)) {
                    $parser->parseFile($pathElement);
                } else if($emptyStyles) {
                    $this->createFolder($lessFolder .$val["name"]);
                    file_put_contents($pathElement, "#" .$val['name'] ." { \r\n }");
                }
            }

            $pathBuildCss = "build/css/" .$controllerInfo["name"];
            $buildCss = $pathBuildCss ."/" .$controllerInfo["action"]. ".css";

            $this->createFolder($pathBuildCss);
            file_put_contents($buildCss, $parser->getCss());
        }

        public function buildPartialBlocks($elements){
            foreach($elements as $val){
                $blockPath = "mvc/views/partial/" .$val["type"] ."/" .$val["name"] ."/";
                $blockFile = $blockPath .$val["name"] .".php";

                if(!file_exists($blockFile)) {
                    $this->createFolder($blockPath);
                    $sample = file_get_contents("libs/fileManager/samples/viewSample.php");
                    file_put_contents($blockFile, "<section id='" .$val["name"] ."'>\r\n" .$sample ."\r\n</section>");
                }
            }
        }

        public function buildScripts($scripts, $controllerInfo, $emptyScripts){
            $scriptString;

            /*if(isset($scripts["additionalScripts"]))
                foreach($scripts["additionalScripts"] as $val){
                    $additionalScript = "scripts/frameworks/" .$val;
                    if(file_exists($additionalScript)) {
                        $scriptString .= file_get_contents($additionalScript).PHP_EOL;
                    }
                }*/

            foreach($scripts as $val){
                if(isset($val["scripts"]) && $val["scripts"] == false)
                    continue;

                $pathFolder = "scripts/blocks/" .$val["name"];
                $pathElement = $pathFolder ."/" .$val["name"] .".js";

                if(file_exists($pathElement)) {
                    $scriptString .= file_get_contents($pathElement) .PHP_EOL;
                } else if($emptyScripts) {
                    $this->createFolder($pathFolder);
                    file_put_contents($pathElement, "$(document).ready(function(){ \r\n });");
                    $scriptString .= file_get_contents($pathElement) .PHP_EOL;
                }
            }

            $pathBuildScripts = "build/js/" .$controllerInfo["name"];
            $buildScripts = $pathBuildScripts ."/" .$controllerInfo["action"]. ".js";

            $this->createFolder($pathBuildScripts);

            file_put_contents($buildScripts, $scriptString);
        }

        public function createFolder($path){
            if (!file_exists($path)) {
                mkdir($path, 0777, true);
                return true;
            }
            return false;
        }
    }