<?php

namespace Amaur\App\manager;

use Amaur\App\entity\Civilization;

class CivilizationManager extends Manager {

    /**
     * Get all data of civilization table
     * @return array
     */
    public static function get():array {
        return self::getObject("SELECT * FROM ellia_civilization ORDER BY name asc", "Civilization");
    }
}