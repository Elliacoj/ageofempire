<?php

namespace Amaur\App\controller;

use Amaur\App\manager\BuildOrdersManager;
use Amaur\App\manager\CivilizationManager;

class BuildOrdersController extends Controller {
    /**
     * Redirects into build orders page
     */
    public function homePage() {
        $buildOrders = BuildOrdersManager::search(filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT));
        $civilization = CivilizationManager::search(filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT));

        self::render("buildOrder.html.twig", [
            "civilization" => $civilization,
            "buildOrders" => $buildOrders
        ]);
    }
}