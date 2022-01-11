<?php

namespace Amaur\App\controller;

use Amaur\App\entity\Civilization;
use Amaur\App\entity\Weakness;
use Amaur\App\manager\AssetsManager;
use Amaur\App\manager\CivilizationManager;
use Amaur\App\manager\InformationManager;
use Amaur\App\manager\WeaknessManager;

class InformationController extends Controller {

    /**
     * Redirects into information page
     * @throws \Twig\Error\Error
     */
    public function homePage() {
        $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
        $information = InformationManager::search($id);
        $civilization = CivilizationManager::search($id);
        $assets = AssetsManager::get($id);
        $weakness = WeaknessManager::get($id);

        self::render("information.html.twig", [
            "civilization" => $civilization,
            "information" => $information,
            "assets" => $assets,
            "weakness" => $weakness
        ]);
    }
}