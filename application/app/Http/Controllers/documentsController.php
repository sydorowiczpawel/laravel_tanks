<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Documents;
use Illuminate\Support\Facades\DB;


class documentsController extends Controller
{
    public function index()
    {
        $docs = Documents::all();
        return view('/Models.doclst')->with('docs', $docs);
    }

    public function create()
    {
        return view('Models.addDoc');
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