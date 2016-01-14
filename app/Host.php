<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Host extends Model
{
    // Attributes that are mass assignable
    protected  $fillable = ['name'];

    /**
     * A Host can have many Domains
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function domains()
    {
        return $this->hasMany('App\Domain');
    }
}
