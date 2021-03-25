<?php
    /*
    * Base controller
    * Loads models and views
    */

    Class Controller {
        // Load model
        public function model($model) {
            // require model file
            require_once '../app/models/' . $model . '.php';

            // instantiate the model
            return new $model();
        }

        // Load View
        public function view($view, $data = []) {
            // Check for the view file
            if (file_exists('../app/views/' . $view . '.php')) {
                require_once '../app/views/' . $view . '.php';
            } else {
                die('view does not exist');
            }
        }

    }