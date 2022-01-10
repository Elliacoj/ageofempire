<?php

namespace Amaur\App\controller;

use Amaur\App\entity\Civilization;
use Amaur\App\manager\CivilizationManager;
use Amaur\App\manager\InformationManager;

class InformationController extends Controller {

    /**
     * Redirects into information page
     * @throws \Twig\Error\Error
     */
    public function homePage() {
        $information = InformationManager::search(filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT));
        $civilization = CivilizationManager::search(filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT));

        self::render("information.html.twig", [
            "civilization" => $civilization,
            "information" => $information
        ]);
    }
}