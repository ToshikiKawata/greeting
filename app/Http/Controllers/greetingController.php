<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use PhpParser\Node\Stmt\Echo_;

class greetingController extends BaseController
{
    public function greeting ($time) {
            $ar = array( "おはよう", "こんにちは", "こんばんは", "おやすみ");
            shuffle($ar);
        if ( $time == 'morning' ) {
            $time = '朝のあいさつ';
            $aisatsu = 'おはようございます';
        } elseif ( $time == 'afternoon' ) {
            $time = '昼のあいさつ';
            $aisatsu = 'こんにちは';
        } elseif ( $time == 'eveninng' ) {
            $time = '夕方のあいさつ';
            $aisatsu = 'こんばんは';
        } elseif ( $time == 'night' ) {
            $time = '夜のあいさつ';
            $aisatsu = 'おやすみ';
        } elseif ( $time == 'random' ) {
            $time = 'ランダムなメッセージ';
            $aisatsu = $ar[0];
        } else {
        $aisatsu = '誤字があると思います';
    }
    return view('greeting', [
        'time' => $time,
        'aisatsu' => $aisatsu
    ]);
}}