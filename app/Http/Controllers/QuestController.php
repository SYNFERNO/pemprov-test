<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuestController extends Controller
{
    public function questb5()
    {
        $rawsql = "SELECT u.id, u.username, c.course, c.mentor, c.title 
FROM users u
INNER JOIN user_courses uc ON u.id = uc.id_user
INNER JOIN courses c ON c.id = uc.id_course
WHERE c.title LIKE 'S.%';";

        $result = DB::select($rawsql);
        return response()->json($result);
    }

    public function questb6()
    {
        $rawsql = "SELECT u.id, u.username, c.course, c.mentor, c.title 
FROM users u
INNER JOIN user_courses uc ON u.id = uc.id_user
INNER JOIN courses c ON c.id = uc.id_course
WHERE c.title LIKE 'M.%' OR c.title LIKE 'Dr.%';";

        $result = DB::select($rawsql);
        return response()->json($result);
    }

    public function questb7()
    {
        $rawsql = "SELECT c.course, c.mentor, c.title, COUNT(uc.id_user) AS jumlah_peserta
FROM courses c
INNER JOIN user_courses uc ON uc.id_course= c.id
GROUP BY c.course, c.mentor, c.title ORDER BY c.mentor;";

        $result = DB::select($rawsql);
        return response()->json($result);
    }

    public function questb8()
    {
        // $rawsql = "SELECT u.id, u.username, c.course, c.mentor, c.title 
        // FROM users u
        // INNER JOIN user_courses uc ON u.id = uc.id_user
        // INNER JOIN courses c ON c.id = uc.id_course
        // WHERE c.title LIKE 'S.%';";

        // $result = DB::select($rawsql);
        return response()->json(["message" => "TODO"]);
    }
}
