<?php

namespace Amaur\App\controller;

use Amaur\App\manager\InformationManager;

class InformationController {

    public function homePage() {
        $information = InformationManager::search(filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT));


    }
}