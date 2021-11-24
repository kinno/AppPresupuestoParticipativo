<?php

namespace App\Rules;

use App\Http\Traits\WebserviceTrait;
use Illuminate\Contracts\Validation\Rule;

class ValidaCurpRule implements Rule
{
    use WebserviceTrait;
    private $error;
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
        //
        $responseValidaCurp = $this->validaCurp($value);
        if($responseValidaCurp->mensaje == "EXITO"){
            return true;
        }else{
            $this->error = $responseValidaCurp->response[0]->descripcion;
        }
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return $this->error;
    }
}
