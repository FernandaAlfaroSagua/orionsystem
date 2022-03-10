<?php
    class ViewsModel {
        protected function get_views_model($views){
            $list=["soporte","salas-interactivas","e-blocks", "licencias", "conectividad-y-redes", "catalogo", "dcl-101", "dcl-120", "dcl-130", "dcl-140", "dcl-150","inedu-301", "sd-401", "sd-420", "sd-430", "sd-440", "sd-450", "sw-01", "sw-02"];
			
            
            
            if(in_array($views, $list)){
				if(is_file("./views/contents/".$views.".php")){
					$content="./views/contents/".$views.".php";
				}else{
					$content="home";
				}
			
			}elseif($views=="index"){
				$content="home";
			}else{
				$content="home";
			}
			return $content;
        }
    }