<?php

namespace Amaur\App\manager;

class InformationManager extends Manager {
    /**
     * Get an information of information table
     * @param $civilizationFk
     * @return Object|null
     */
    public static function search($civilizationFk):?Object {
        return self::searchObject("SELECT * FROM ellia_information WHERE civilization_fk = '$civilizationFk'", "Information");
    }
}