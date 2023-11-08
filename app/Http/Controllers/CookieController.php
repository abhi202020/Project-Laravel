<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CookieController extends Controller
{
    public function setCookie(Request $request)
    {
        setcookie('cookie_name', 'cookie_value', [
            'expires' => time() + 3600,
            'path' => '/',
            'domain' => 'example.com',
            'secure' => true,
            'httponly' => true,
        ]);

        return response('Cookie set successfully');
    }
}
