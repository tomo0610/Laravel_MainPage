<?php

namespace App\Http\Controllers;

use App\Models\contacts;
use Illuminate\Http\Request;
use App\Http\Controllers\Mail;

class PortfolioController extends Controller
{
    // 問い合わせメール送信
    public function sendMessage(Request $request)
    {

        $contactName = $request->contactName;
        $contactMailAddress = $request->contactMailAddress;
        $contactDetail = $request->contactDetail;

        // contactのmodelクラスのインスタンスを生成
        $contacts = new contacts();

        $contacts->create([
            'userName' => $contactName,
            'mailAddress' => $contactMailAddress,
            'detail' => $contactDetail,
        ]);

        return view('MainPage/portfolio');
    }
}
