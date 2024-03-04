<?php

namespace App\Http\Controllers;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{

    public function index(): \Illuminate\View\View
    {
        $users = [];
        $cities = [];

//        $cities = DB::table('city')->select(['ID', 'Name'])->whereIn('ID', [1, 2, 3])->get();
//        $cities = DB::table('city')->where('Name', 'like', 'am%')->get();
//        $cities = DB::table('users')->whereDate('created_at', '>', '2024-02-01')->get();

        /*$cities = DB::table('city')
            ->select('city.ID', 'city.Name', 'city.CountryCode', 'country.Name as country_name')
            ->leftJoin('country', 'city.CountryCode', '=', 'country.Code')
            ->limit(10)
            ->offset(10)
            ->get();*/

        // ONLY_FULL_GROUP_BY
//        dump(DB::select('select @@sql_mode'));
//        DB::statement("set sql_mode = 'STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION'");
//        dump(DB::select('select @@sql_mode'));
//        config()->set('database.connections.mysql.strict', false);
//        DB::reconnect();
        /*        $cities = DB::table('city')
                    ->selectRaw('sum(Population) as s_p, CountryCode, min(Name)')
                    ->groupBy('CountryCode')
                    ->having('s_p', '>', 10_000_000)
                    ->get();*/
//        config()->set('database.connections.mysql.strict', true);
//        DB::reconnect();

//        dump($cities);

        /*dump(
            DB::table('users')->insertOrIgnore([
                [
                    'name' => 'User 2',
                    'email' => 'user2@mail.com',
                    'password' => '222',
                ],
                [
                    'name' => 'User 4',
                    'email' => 'user4@mail.com',
                    'password' => '444',
                ]
            ])
        );*/

        /*dump(DB::table('users')->insertGetId(
            [
                'name' => 'User 5',
                'email' => 'user5@mail.com',
                'password' => '555',
            ])
        );*/

        /*dump(
            DB::table('users')
                ->where('id', '=', 16)
                ->update(['name' => 'Darc', 'email' => 'darc_new@mail.com'])
        );*/

        /*dump(
            DB::table('users')
                ->updateOrInsert(
                    ['email' => 'darc_new2@mail.com'],
                    ['name' => 'Darc New 2', 'password' => 'new_password2']
                )
        );*/

        dump(DB::table('users')->where('id', '>', 23)->delete());

        return view('home.index', compact('users'));
    }

    public function test(): \Illuminate\View\View
    {
        return view('home.test', ['title' => 'Test page']);
    }

    public function contact(): \Illuminate\View\View
    {
        return view('home.contact', ['title' => 'Contact page']);
    }

}
