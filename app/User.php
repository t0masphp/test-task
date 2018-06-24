<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * User apples relation
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function apples()
    {
        return $this->hasMany(Apple::class, 'user_id', 'id');
    }

    public function getApplesCount()
    {
        return 0;
    }


    /**
     * @param Apple $apple
     * @throws \Throwable
     */
    public function takeApple(Apple $apple)
    {
        $apple->fill(['user_id' => $this->id])->save();
    }

}

