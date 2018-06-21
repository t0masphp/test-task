<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apple extends Model
{
    protected $table = 'apples';

    protected $fillable = ['user_id'];

    /**
     * Apple owner relation
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
