<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Documents;
use App\Models\Tank;
use App\Models\User;
use App\Models\Gun;
use App\Models\ExitOrder;
use Illuminate\Support\Facades\DB;


class adminController extends Controller
{
    public function structure() {

        $commander = DB::table('users')
        ->where('function', 'dowódca kompanii')
        ->get();

        // dd($commander);

        $boss = DB::table('users')
        ->where('function', 'szef kompanii')
        ->get();

        $technician = DB::table('users')
        ->where('function', 'technik kompanii')
        ->get();

        $gun_technician = DB::table('users')
        ->where('function', 'technik uzbrojenia')
        ->get();

        $p1c = DB::table('users')
        ->where('function', 'dowódca plutonu I')
        ->get();

        $p1 = DB::table('users')
        ->where('platoon', 'I')
        ->get();

        $p2 = DB::table('users')
        ->where('platoon', 'II')
        ->get();

        $p3 = DB::table('users')
        ->where('platoon', 'III')
        ->get();

        $p4 = DB::table('users')
        ->where('platoon', 'IV')
        ->get();

        return view('Models.admin')
        ->with('commander', $commander)
        ->with('boss', $boss)
        ->with('technician', $technician)
        ->with('gun_technician', $gun_technician)
        ->with('p1c', $p1c)
        ->with('p1', $p1)
        ->with('p2', $p2)
        ->with('p3', $p3)
        ->with('p4', $p4);
    }

    public function allUsers() {

        // $users = DB::table('users')
        $users = User::orderBy('surname')
        -> get();

        // dd($users);

        return view('Models.a_soldiers') -> with('users', $users);
    }

    public function allDocs()
    {
        $docs = Documents::orderBy('id', 'desc')->paginate(100);
        return view('Models.a_documents')->with('docs', $docs);
    }

    public function allTanks()
    {
        $tanks = Tank::orderBy('id', 'desc')->paginate(100);
        return view('Models.a_tanks')->with('tanks', $tanks);
    }

    public function addSoldier()
    {
        return view('Models.addsoldier');
    }

    public function addDoc()
    {
        return view('Models.adddoc');
    }

    public function addTank()
    {
        return view('Models.addtank');
    }

    public function storeSoldier(Request $request)
    {
        $pass_number = $request->input('pass_number');
        $name = $request->input('name');
        $surname = $request->input('surname');
        $rank = $request->input('rank');
        $platoon = $request->input('platoon');
        $email = $request->input('email');
        $password = $request->input('password');

        DB::table("users")
        ->insert(
            [
                'pass_number'=>$pass_number,
                'name'=>$name,
                'surname'=>$surname,
                'rank'=>$rank,
                'platoon'=>$platoon,
                'email'=>$email,
                'password'=>$password
            ]
            );

            return redirect('/admin');
    }

    public function storeDoc(Request $request)
    {
        $pass_number = $request->input('pass_number');
        $name = $request->input('name');
        $number = $request->input('number');
        $start_date = $request->input('start_date');
        $end_date = $request->input('end_date');

        DB::table("documents")
        ->insert(
            [
                'pass_number'=>$pass_number,
                'name'=>$name,
                'number'=>$number,
                'start_date'=>$start_date,
                'end_date'=>$end_date
                ]
            );

            return redirect('/admin');
    }
}
