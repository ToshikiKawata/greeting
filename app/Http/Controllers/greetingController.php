<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use PhpParser\Node\Stmt\Echo_;

class greetingController extends BaseController
{
    public function greet($time)
    {
        $hash = array("おはよう", "こんにちは", "こんばんは", "おやすみ");
        array_rand($hash);
        if ($time == 'morning') {
            $time = '朝のあいさつ';
            $greeting = 'おはようございます';
        } elseif ($time == 'afternoon') {
            $time = '昼のあいさつ';
            $greeting = 'こんにちは';
        } elseif ($time == 'eveninng') {
            $time = '夕方のあいさつ';
            $greeting = 'こんばんは';
        } elseif ($time == 'night') {
            $time = '夜のあいさつ';
            $greeting = 'おやすみ';
        } elseif ($time == 'random') {
            $time = 'ランダムなメッセージ';
            $greeting = $hash;
        } else {
            $greeting = '誤字があると思います';
        }
        return view('greeting', [
            'time' => $time,
            'greeting' => $greeting
        ]);
    }
}
