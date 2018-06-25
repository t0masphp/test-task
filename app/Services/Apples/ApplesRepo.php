<?php

namespace App\Services\Apples;


use App\Apple;
use App\Exceptions\NoAvailableAppleException;
use App\Exceptions\OddEvenException;
use App\User;
use Config;

class ApplesRepo
{

    /**
     * Get all free apples.
     *
     * @return \Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection
     */
    public function getFreeApples()
    {
        return Apple::query()->whereDoesntHave('user')->get()->map(function (Apple $apple) {
            return 'Apple' . $apple->id;
        });
    }

    /**
     * Make all apples free.
     *
     * @return int
     */
    public function freeApples()
    {
        return Apple::query()->update(['user_id' => null]);
    }

    /**
     * Get free apple for user based on exist apples.
     * @param User $user
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Model|null
     * @throws NoAvailableAppleException
     * @throws OddEvenException
     */
    public function takeFreeApple(User $user)
    {
        $freeApple = Apple::query()->whereDoesntHave('user')->first();
        if (!$freeApple) {
            throw new NoAvailableAppleException();
        }

        $userApples = $user->apples->first();
        if ($userApples) {
            $isEven = $userApples->id % 2 === 0;
            $freeApple = Apple::query()->whereDoesntHave('user')->where(\DB::raw("id % 2"), $isEven ? 0 : 1)->first();
            if (!$freeApple) {
                throw new OddEvenException();
            }
        }

        return $freeApple;
    }

    /**
     * Validate can basket give apple.
     *
     * @return bool
     */
    public function isBasketCanGiveApple()
    {
        $lastUpdatedApple = Apple::query()->orderBy('updated_at', 'desc')->first();
        $timePassed = time() - $lastUpdatedApple->updated_at->getTimestamp();
        return $timePassed > Config::get('app.basket.timeout', 60);
    }
}