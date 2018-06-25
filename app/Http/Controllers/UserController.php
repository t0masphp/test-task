<?php

namespace App\Http\Controllers;

use App\Exceptions\NoAvailableAppleException;
use App\Exceptions\OddEvenException;
use App\Exceptions\UserNotFoundException;
use App\User;
use Config;

class UserController extends Controller
{
    private $showedFields = ['id', 'name'];

    /**
     * Return a list of users.
     *
     * @return string
     */
    public function index()
    {
        return User::all($this->showedFields)->load('apples');
    }

    /**
     * Return a single user by id.
     *
     * @param $id
     * @return string
     */
    public function getById($id)
    {
        return User::where('id', $id)->first($this->showedFields)->load('apples');
    }

    /**
     * Return a list of free apples.
     *
     * @param $id
     * @return array|string
     */
    public function grabAnApple($id)
    {
        $timeout = Config::get('app.basket.timeout');
        $appleRepo = app('apples.repo');

        if (!$appleRepo->isBasketCanGiveApple()) {
            return ['success' => false, 'message' => sprintf('Basket cant give more than one apple per %d sec', $timeout)];
        }

        try {
            $user = User::query()->find($id);
            if (!$user) {
                throw new UserNotFoundException($id);
            }

            $appleModel = $appleRepo->takeFreeApple($user);
            $user->takeApple($appleModel);

            return ['success' => true, 'user' => $this->getById($id)];
        } catch (OddEvenException | NoAvailableAppleException | UserNotFoundException $ex) {
            return ['success' => false, 'message' => $ex->getMessage()];
        }
    }
}
