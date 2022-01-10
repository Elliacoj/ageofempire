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

    /**
     * Get a civilization of civilization table
     * @param $id
     * @return Object|null
     */
    public static function search($id):?Object {
        return self::searchObject("SELECT * FROM ellia_civilization WHERE id = '$id'", "Civilization");
    }
}