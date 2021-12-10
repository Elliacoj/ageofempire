<?php

namespace Amaur\App\config;

class ConfigLocal {
    const HOST = "localhost";
    const DBNAME = "age_of_empire";
    const USERNAME = "root";
    const PASSWORD = "";

    /**
     * Return information config
     * @return string[]
     */
    public function getConfig(): array {
        return [self::HOST, self::DBNAME, self::USERNAME, self::PASSWORD];
    }
}