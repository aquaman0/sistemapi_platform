<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SPController extends Controller
{

    public function index()
    {
        $now = Carbon::today();
        $new_meetings = DB::table('meetings')
                        ->where('meet_date', '>', $now)
                        ->orderBy('meet_date')
                        ->get();
        $old_meetings = DB::table('meetings')
                        ->where('meet_date', '<=', $now)
                        ->orderBy('meet_date')
                        ->get();
        $partners = DB::table('certificates')
                        ->where('type', '=', 'partner')
                        ->orderBy('issue_date')
                        ->get();
        return view('home', ['new_meetings' => $new_meetings, 'old_meetings' => $old_meetings, 'partners' => $partners]);
    }



    public function play(Request $request)
    {
        $playerChoice = $request->input('choice');

        // Add if playerChoice =... //
        $result = 'success';


        // Возвращаем результат игры в представление
        return view('home', ['result' => $result]);
    }
}
