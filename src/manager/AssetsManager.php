<?php

namespace Amaur\App\manager;

class AssetsManager extends Manager {
    /**
     * Get all data of assets table for one civilization
     * @param $civilizationFk
     * @return array
     */
    public static function get($civilizationFk):array {
        return self::getObject("SELECT * FROM ellia_assets WHERE civilization_fk = '$civilizationFk'", "Assets");
    }
}