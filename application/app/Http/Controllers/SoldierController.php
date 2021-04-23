<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class SoldierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($p_num)
    {
        $user = DB::table('users')
        ->where('pass_number', $p_num)
        ->get();

        $docs = DB::table('documents')
        ->where('pass_number', $p_num)
        ->get();

        return view('/Models.personalFile')
        ->with('docs', $docs)
        ->with('user', $user);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Models.addSoldier');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pass_number = $request->input('pass_number');
        $rank = $request->input('rank');
        $name = $request->input('name');
        $surname = $request->input('surname');
        $function = $request->input('function');
        $platoon = $request->input('platoon');
        $email = $request->input('email');
        $password = $request->input('password');

        DB::table("users")
        ->insert(
            [
                'pass_number'=>$pass_number,
                'rank'=>$rank,
                'name'=>$name,
                'surname'=>$surname,
                'function'=>$function,
                'platoon'=>$platoon,
                'email'=>$email,
                'password'=>$password
            ]
            );

            return redirect('/admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('/Models.editSoldier')->with('user', $user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $pass_number = $request->input('pass_number');
        $name = $request->input('name');
        $surname = $request->input('surname');
        $rank = $request->input('rank');
        $platoon = $request->input('platoon');
        $email = $request->input('email');
        $password = $request->input('password');

        DB::table("users")
        ->where(['id' => $id])
        ->update(
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $users = DB::table('users')
        ->where(['id' => $id])
        ->delete();

            return redirect('/admin');
    }
}
