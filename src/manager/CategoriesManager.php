<?php

namespace Amaur\App\manager;

class CategoriesManager extends Manager {
    /**
     * Get all data of civilization table
     * @return array
     */
    public static function get():array {
        return self::getObject("SELECT * FROM ellia_categories ORDER BY name asc", "Civilization");
    }
}