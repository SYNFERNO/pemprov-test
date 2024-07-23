<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{

    public function index()
    {
        $rawQuest7 = "SELECT c.course, c.mentor, c.title, COUNT(uc.id_user) AS jumlah_peserta
        FROM courses c
        INNER JOIN user_courses uc ON uc.id_course= c.id
        GROUP BY c.course, c.mentor, c.title ORDER BY c.mentor;";
        $quest7 = DB::select($rawQuest7);
        return view('dashboard', compact('quest7'));
    }
}
