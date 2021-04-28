<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Documents;
use App\Models\User;
use Illuminate\Support\Facades\DB;


class documentsController extends Controller
{
    public function index()
    {
        $docs = Documents::all();
        return view('/home')->with('docs', $docs);
    }

    public function create()
    {
        return view('/Models.addDoc');
    }

    public function store(Request $request, $p_num)
    {
        // $pass_number = $request->input('pass_number');
        $pass_number = $p_num;
        // dd($pass_number);
        // $pass_number = DB::table('users')
        // ->where('pass_number', $pass_number)
        // ->get();

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

						return redirect('/home');
    }

    public function show($pass_number)
    {
        $docs = DB::table('documents')
        ->where('pass_number', $pass_number)
        ->orderBy('end_date', 'asc')
        ->get();

        return view('/Models.userDocs')->with('docs', $docs);
    }

    public function edit($id)
    {
        $doc = Documents::find($id);
        return view('/Models.editdoc')->with('doc', $doc);
    }

    public function update(Request $request, $id)
    {
        //Update a document

        $doc = Documents::find($id);
        $name = $request->input('name');
        $number = $request->input('number');
        $start_date = $request->input('start_date');
        $end_date = $request->input('end_date');

        DB::table('documents')
        ->where('id', $doc->id)
        ->update(
            [
                'name'=>$name,
                'number'=>$number,
                'start_date'=>$start_date,
                'end_date'=>$end_date
            ]
        );

        return redirect("/doclst");
    }

    public function destroy($id)
    {
        $doc = Documents::find($id);
        DB::table('documents')
        ->where('id', $doc->id)
        ->delete();

        return redirect("/doclst");
    }
}
