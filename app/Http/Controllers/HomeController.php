<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    function index()
    {
//        DB::table('users')->insert(
//            [
//                [
//                'name' => 'asdqwe',
//                'email' => 'asdqew@gmail.com',
//                'password' => Hash::make('password'),
//                ],
//                [
//                    'name' => 'www',
//                    'email' => 'www@gmail.com',
//                    'password' => Hash::make('password'),
//                ]
//            ]
//        );

//        $users = DB::table('users')->get();
//        $spec_users_query = DB::table('users')->where('id', '1')->first();
//        $spec_users_query_2 = DB::table('users')->where('email', 'moustafa@gmail.com')->where('id', '14')->first();
//        $spec_users_query_3 = DB::table('users')->where('id', '>' , 2)->get();
//
//        return $spec_users_query_3;

//        DB::table('users')->where('id', '14')->update([
//            'name' => 'Moustafa Samir',
//            'email' => 'moustafasamir@gmail.com',
//        ]);


//        DB::table('users')->where('id', '10')->delete();
//        DB::table('users')->where('id','>', 20)->delete();

//        $Blogs = DB::table('blogs')->select('title','description')->get();
        $Blogs = DB::table('blogs')->pluck('title','id')->toArray();

        dd($Blogs);

        return view('welcome');
    }

    function showAboutPage()
    {
        return view('about');
    }

}
