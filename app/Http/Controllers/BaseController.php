<?php


namespace App\Http\Controllers;


abstract class BaseController extends Controller
{
    protected function addUserIdToAttributes(array $attributes): array
    {
        $user = [
            'user_id' => auth()->id()
        ];
        return array_merge($attributes, $user);
    }
}
