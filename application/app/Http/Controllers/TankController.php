<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tank;
use App\Models\Users;
use Illuminate\Support\Facades\DB;

class TankController extends Controller
{
    public function index()
    {
        $tanks = Tank::all();
        return view('Models.tankslst')->with('tanks', $tanks);
    }

    public function create()
    {
        return view('Models.addTank');
    }

    public function store(Request $request)
    {
        $pass_number = $request->input('pass_number');
        $model = $request->input('model');
        $number = $request->input('tank_number');

        DB::table('tanks')
            ->insert(
                [
                    'pass_number'=>$pass_number,
                    'model'=>$model,
                    'tank_number'=>$number
                ]
                );

                return redirect('/home');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
