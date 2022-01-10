<?php

namespace Amaur\App\controller;

class HomePageController extends Controller {
    /**
     * Redirects into home page
     */
    public function homePage() {
        self::render("homePage.html.twig");
    }
}