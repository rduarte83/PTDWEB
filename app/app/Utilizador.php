<?php

namespace App;
use Illuminate\Auth\Middleware;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Utilizador extends Authenticatable
{

    //
    protected $fillable = [
        'nome',
        'email',
        'password',

    ];

    protected $table = 'utilizadores';

    protected $redirectTo = "/";

    /**
     * Show the application's login form.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Handle a login request to the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Http\JsonResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */



}
