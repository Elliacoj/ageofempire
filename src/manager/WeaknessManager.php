<?php

namespace Amaur\App\manager;

class WeaknessManager extends Manager {
    /**
     * Get all data of weakness table for one civilization
     * @param $civilizationFk
     * @return array
     */
    public static function get($civilizationFk):array {
        return self::getObject("SELECT * FROM ellia_weakness WHERE civilization_fk = '$civilizationFk'", "Weakness");
    }
}