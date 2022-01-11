<?php

namespace Amaur\App\manager;

class BuildOrdersManager extends Manager {
    /**
     * Get a build orders of civilization table
     * @param $civilizationFk
     * @return Object|null
     */
    public static function search($civilizationFk):?Object {
        return self::searchObject("SELECT * FROM ellia_build_orders WHERE civilization_fk = '$civilizationFk'", "BuildOrders");
    }
}