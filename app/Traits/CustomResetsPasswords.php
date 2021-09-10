<?php
namespace App\Traits;

use Illuminate\Foundation\Auth\ResetsPasswords;

trait CustomResetsPasswords 
{
    use ResetsPasswords;


    public function rules()
    {
        return [
            'token' => 'required',
            'email' => 'required|email',
            'password' => ['required', 'confirme', 'min:6', 'regex:/^(?=.*[a-z|A-Z])(?=.*\d).+$/'],
        ];
    }
}
