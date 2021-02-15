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
        $tank_number = $request->input('tank_number');
        $series = $request->input('series');
        $start_date = $request->input('start_date');
        $end_date = $request->input('end_date');
        $km = $request->input('km_counter_start');
        $og = $request->input('geh_start');
        $obc = $request->input('leh_start');

        DB::table("exit_orders")
        ->insert(
            [
                'pass_number'=>$pass_number,
                'tank_number'=>$tank_number,
                'series'=>$series,
                'start_date'=>$start_date,
                'end_date'=>$end_date,
                'km_counter_start'=>$km,
                'geh_start'=>$og,
                'leh_start'=>$obc
                ]
            );

            return redirect('/exitorderslst');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function finish($id)
    {
        $eo = ExitOrder::find($id);
        return view('/Models.finishexitorder')->with('eo', $eo);
    }

    public function update(Request $request, $id)
    {
        $eo = ExitOrder::find($id);
        $km = $request->input('km_counter_end');
        $geh = $request->input('geh_end');
        $leh = $request->input('leh_end');
        $heater = $request->input('heater_min');
        $pkt = $request->input('PKT');
        $nswt = $request->input('NSWT');
        $armata = $request->input('2A46');

        DB::table('exit_orders')
        ->where('id', $eo->id)
        ->update(
            [
                'km_counter_end'    =>  $km,
                'geh_end'           =>  $geh,
                'leh_end'           =>  $leh,
                'heater_min'        =>  $heater,
                'PKT'               =>  $pkt,
                'NSWT'              =>  $nswt,
                '2A46'              =>  $armata
            ]
            );
            return redirect("/exitorderslst");
    }

    public function destroy($id)
    {
        //
    }
}
