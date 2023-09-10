<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MeetController extends Controller
{
    public function index($city)
    {
        $created_url = '/'.$city;
        $meeting = DB::table('meetings')
                        ->where('url', '=', $created_url)
                        ->first();
        return view('meet', ['meeting' => $meeting]);
    }
}
