<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ExitOrder;
use Illuminate\Support\Facades\DB;

class exitOrderController extends Controller
{
    public function index()
    {
        $eos = ExitOrder::all();
        return view('/Models.exitorderslst')->with('eos', $eos);
    }

    public function create()
    {
        return view('Models.addexitorder');
    }

    public function store(Request $request)
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

            return redirect('/doclst');
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
