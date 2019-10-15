<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Photo;

class Album extends Model
{
    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = ['content'];

    /**
     * Get all the photos data of the album..
     *
     * @return App\Photo
     */
    public function getContentAttribute()
    {
        return Photo::where('album_id', $this->id)->get();
    }
}
