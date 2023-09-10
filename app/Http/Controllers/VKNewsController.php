<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VKNewsController extends Controller
{
    $response = \Http::get("https://oauth.vk.com");

    if ($response->successful()) {
        dump("success");
        $data = $response->body();
    }
}
