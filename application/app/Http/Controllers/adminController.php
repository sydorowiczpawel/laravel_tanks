<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Documents;
use App\Models\Tank;
use App\Models\Gun;
use App\Models\ExitOrder;

class adminController extends Controller
{

    public function allDocs()
    {
        $docs = Documents::orderBy('id', 'desc')->paginate(100);
        return view('Models.admin')->with('docs', $docs);
    }

    public function allTanks()
    {
        $tanks = Tank::orderBy('id', 'desc')->paginate(100);
        return view('Models.admin')->with('tanks', $tanks);
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
