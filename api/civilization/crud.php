<?php

use Amaur\App\manager\CivilizationManager;

require "../../vendor/autoload.php";

header('Content-Type: application/json');
$request = $_SERVER['REQUEST_METHOD'];

switch ($request) {
    case "GET":
        echo json_encode(get());
        break;
}

/**
 * Return all civilization
 * @return array
 */
function get():array {
    $allData = CivilizationManager::get();
    $allCivilization = [];

    foreach ($allData as $civilization) {
        $allCivilization[] = [
            "id" => $civilization->getId(), "name" => $civilization->getName(),
            "abbreviation" => $civilization->getAbbreviation(), "flag" => $civilization->getFlag()
        ];
    }
    return $allCivilization;
}