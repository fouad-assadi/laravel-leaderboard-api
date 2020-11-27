<?php

namespace App\Rules;


/*
|  Requirments 
|
*/

use Illuminate\Contracts\Validation\Rule;
use App\ApiUsers;

class RuleApiUsers implements Rule
{

    protected $apiUsers;
    protected $message;
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct(?ApiUsers $apiUsers)
    {
        $this->setApiUsers($apiUsers);
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

        /*
        | just as an example
        | This is just an example of good Rule handling
        |
        */

        if( !$this->getApiUsers() ) {
            return $this->fail('ApiUser Not found!');
        }

        if( $this->getApiUsers()->name == $value ) {
            return $this->fail('everything looks the same!');
        }


        return true;
    }

    public function fail($message)
    {
        $this->message = $message;
        return false;
    }    

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return $this->message;
    }

    /**
     * @return mixed
     */
    public function getApiUsers()
    {
        return $this->apiUsers;
    }

    /**
     * @param mixed $apiUsers
     *
     * @return self
     */
    public function setApiUsers($apiUsers)
    {
        $this->apiUsers = $apiUsers;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param mixed $message
     *
     * @return self
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }
}
