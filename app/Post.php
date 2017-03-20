<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'sentence',
    ];

    /**
     * Posts created by User.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}