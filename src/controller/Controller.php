<?php

namespace Amaur\App\controller;

class Controller {
    /**
     * Change content html into web page
     * @param $view
     * @param $title
     * @param array $data
     */
    public function renders($view, $title, array $data = []) {
        ob_start();
        require_once dirname(__DIR__) . "/../view/" . $view . ".view.php";
        $html = ob_get_clean();
        require_once dirname(__DIR__) . "/../view/__partials/base.view.php";
    }
}