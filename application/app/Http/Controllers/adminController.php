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
    public function index() {
        return view ('Models.admin');
    }

    public function all_soldiers() {

        $commander = DB::table('users')
        ->where('function', 'dowódca kompanii')
        ->get();

        // dd($commander);

        // Kadra kierownicza
        $boss = DB::table('users')
        ->where('function', 'szef kompanii')
        ->get();

        $technician = DB::table('users')
        ->where('function', 'technik kompanii')
        ->get();

        $gun_technician = DB::table('users')
        ->where('function', 'technik uzbrojenia')
        ->get();

        // Pluton I
        $p1_c = DB::table('users')
        ->where('function', 'dowódca plutonu')
        ->where('platoon', 'I')
        ->get();

        $p1_pdp= DB::table('users')
        ->where('platoon', 'I')
        ->where ('function', 'pomocnik dowódcy plutonu')
        ->get();

        $p1_od= DB::table('users')
        ->where('platoon', 'I')
        ->where ('function', 'kierowca - starszy instruktor')
        ->get();

        $p1_d= DB::table('users')
        ->where('platoon', 'I')
        ->where ('function', 'kierowca')
        ->get();

        // Pluton II
        $p2_c = DB::table('users')
        ->where('function', 'dowódca plutonu')
        ->where('platoon', 'II')
        ->get();

        $p2_pdp= DB::table('users')
        ->where('platoon', 'II')
        ->where ('function', 'pomocnik dowódcy plutonu')
        ->get();

        $p2_od= DB::table('users')
        ->where('platoon', 'II')
        ->where ('function', 'kierowca - starszy instruktor')
        ->get();

        $p2_d= DB::table('users')
        ->where('platoon', 'II')
        ->where ('function', 'kierowca')
        ->get();

        // Pluton III
        $p3_c = DB::table('users')
        ->where('function', 'dowódca plutonu')
        ->where('platoon', 'III')
        ->get();

        $p3_pdp= DB::table('users')
        ->where('platoon', 'III')
        ->where ('function', 'pomocnik dowódcy plutonu')
        ->get();

        $p3_od= DB::table('users')
        ->where('platoon', 'III')
        ->where ('function', 'kierowca - starszy instruktor')
        ->get();

        $p3_d= DB::table('users')
        ->where('platoon', 'III')
        ->where ('function', 'kierowca')
        ->get();

        // Pluton IV
        $p4_c = DB::table('users')
        ->where('function', 'dowódca plutonu')
        ->where('platoon', 'IV')
        ->get();

        $p4_pdp= DB::table('users')
        ->where('platoon', 'IV')
        ->where ('function', 'pomocnik dowódcy plutonu')
        ->get();

        $p4_od= DB::table('users')
        ->where('platoon', 'IV')
        ->where ('function', 'kierowca - starszy instruktor')
        ->get();

        $p4_d= DB::table('users')
        ->where('platoon', 'IV')
        ->where ('function', 'kierowca')
        ->get();


        return view('Models.a_soldiers')
        ->with('commander', $commander)
        ->with('boss', $boss)
        ->with('technician', $technician)
        ->with('gun_technician', $gun_technician)
        ->with('p1_c', $p1_c)
        ->with('p1_pdp', $p1_pdp)
        ->with('p1_od', $p1_od)
        ->with('p1_d', $p1_d)
        ->with('p2_c', $p2_c)
        ->with('p2_pdp', $p2_pdp)
        ->with('p2_od', $p2_od)
        ->with('p2_d', $p2_d)
        ->with('p3_c', $p3_c)
        ->with('p3_pdp', $p3_pdp)
        ->with('p3_od', $p3_od)
        ->with('p3_d', $p3_d)
        ->with('p4_c', $p4_c)
        ->with('p4_pdp', $p4_pdp)
        ->with('p4_od', $p4_od)
        ->with('p4_d', $p4_d)
        ;
    }

    public function allDocs()
    {
        $docs = DB::table('documents')
        ->orderBy('end_date', 'asc')
        ->get();

        // $docs = Documents::orderBy('end_date', 'desc');
        return view('Models.a_documents')->with('docs', $docs);
    }

    public function allTanks()
    {
        $tanks = Tank::orderBy('id', 'desc');

        return view('Models.a_tanks')
        ->with('tanks', $tanks);
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


