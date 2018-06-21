<?php

namespace App\Http\Controllers;

class ApplesController extends Controller
{

    /**
     * Return a list of free apples.
     *
     * @return string
     */
    public function getFree()
    {
        $basketApples = app('apples.repo')->getFreeApples();

        return $basketApples;
    }

    /**
     * Set all apples as free.
     *
     * @return array|string
     */
    public function makeFree()
    {
        $basketApples = app('apples.repo')->freeApples();

        return ['success' => $basketApples > 0];
    }
}
