<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
// use App\models\login_user;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    
    public function index ()
    {
        // Log::debug('デバッグ');

        return view('Welcome/welcome');
    }

    public function InputLogin (Request $request)
    {
        $fname = $request->lname;
        $lname = $request->fname;

        // $data = login_user::all();
        $data = DB::table('login_users')->first();
        // Log::debug($data['id']);
        Log::debug($data->login_user);
        Log::debug($data->password);
        Log::debug($data->user_name);

        return view('Login/login-page-result', compact('fname','lname'));
    }

}
