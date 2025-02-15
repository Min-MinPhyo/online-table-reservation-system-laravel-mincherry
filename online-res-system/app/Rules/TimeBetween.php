<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Carbon;

class TimeBetween implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $pickupDate=Carbon::parse($value);
        $pickupTime=Carbon::createFromTime($pickupDate->hour,$pickupDate->minute,$pickupDate->second);

        //when the res is open
        $earliestTime=Carbon::createFromTimeString('1:00:00');
        $lastTime=Carbon::createFromTimeString('24:00:00');


        return $pickupTime->between($earliestTime,$lastTime) ? true :false;

    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Please choose the time between 17:00:00 to 23:00:00, thank you!';
    }
}