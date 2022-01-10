<?php

use Amaur\App\manager\CategoriesManager;
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
    $all = [];

    $civilizationArray = [];
    foreach ($allData as $civilization) {
        $civilizationArray[] = [
            "id" => $civilization->getId(), "name" => $civilization->getName(),
            "abbreviation" => $civilization->getAbbreviation(), "flag" => $civilization->getFlag()
        ];
    }

    $all[] = ["civilization" => $civilizationArray];
    $allData = CategoriesManager::get();
    $categoriesArray = [];
    foreach ($allData as $category) {
        $categoriesArray[] = [
            "id" => $category->getId(), "name" => $category->getName()
        ];
    }
    $all[] = ["categories" => $categoriesArray];
    return $all;
}