<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ExitOrder;
use App\Models\User;
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

    public function neworder(Request $request)
    {
        $pass_number = $request->input('pass_number');
        $tank_number = $request->input('tank_number');
        $series = $request->input('series');
        $start_date = $request->input('start_date');
        $end_date = $request->input('end_date');
        $km_s = $request->input('km_start');
        $geh_s = $request->input('geh_start');
        $leh_s = $request->input('leh_start');

        DB::table("exit_orders")
        ->insert(
            [
                'pass_number'=>$pass_number,
                'tank_number'=>$tank_number,
                'series'=>$series,
                'start_date'=>$start_date,
                'end_date'=>$end_date,
                'km_start' => $km_s,
                'geh_start' => $geh_s,
                'leh_start' => $leh_s,
            ]
        );

        return redirect('/exitorderslst');
    }

    public function show($id)
    {
        $eos = DB::table('exit_orders')
        ->where('id', $id)
        ->get();

        $users = User::all();

        return view('/Models.eodetails') -> with('eos', $eos);
    }

    public function edit($id)
    {
        $eo = ExitOrder::find($id);
        return view('Models.editexitorder')->with('eo', $eo);
    }
    
    public function update(Request $request, $id)
    {
        $eos = ExitOrder::find($id);
        
    }
    
    public function finish(Request $request, $id)
    {
        $eo = ExitOrder::find($id);
        $km_e = $request->input('km_end');
        $geh_e = $request->input('geh_end');
        $leh_e = $request->input('leh_end');
        $heater = $request->input('heater');
        $pkt = $request->input('pkt');
        $nswt = $request->input('nswt');
        $armata = $request->input('armata');


        DB::table("exit_orders")
        ->where('id', $id)
        ->update(
            [
                'km_end' => $km_e,
                'geh_end' => $geh_e,
                'leh_end' => $leh_e,
                'heater' => $heater,
                'pkt' => $pkt,
                'nswt' => $nswt,
                'armata' => $armata
            ]
        );

        return redirect('/exitorderslst');
    }

    public function destroy($id)
    {
        //
    }
}
