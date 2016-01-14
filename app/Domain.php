<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Domain extends Model
{
    protected  $fillable = [
        'domain',
        'charge',
        'renewal_date',
        'duration',
        'send_notification',
        'email',
        'first_name',
        'last_name',
        'company',
        'notes'
    ];

    // Convert date fields to Carbon instance
    protected $dates = ['renewal_date'];

    /**
     * Mutator to create Carbon instance for date string
     *
     * @param $date
     */
    public function setRenewalDateAttribute($date)
    {
        $this->attributes['renewal_date'] = Carbon::parse($date);
    }
}
