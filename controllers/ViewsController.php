<?php
    require_once "./models/ViewsModel.php";
    class ViewsController extends ViewsModel{
        public function get_template_controller(){
            return require_once "./views/template.php";
        }

        public function get_views_controller(){
            if (isset($_GET['views'])) {
                $route=explode("/", $_GET['views'], 1);

                $res=ViewsModel::get_views_model($route[0]);

            }else{
                $res="index";
            }
            return $res;
        }
    }