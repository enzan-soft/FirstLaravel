<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;
use App\Http\Requests\DataRequest;

class DataController extends Controller
{
    //
    public function index(Request $request){
        if (isset($request->id)){
            $param = ['id'=>$request->id];
            $items = DB::select('select * from people where id = :id', $param);
        } else {
            $items = DB::select('select * from people');
        }
        return view('data.index', ['items'=>$items]);
    }

    public function add(){
        return view('data.add');
    }

    public function create(DataRequest $request){
        $param =[
            'name' => $request->name,
            'mail' => $request->mail,
            'age' => $request->age,
        ];

        DB::insert('insert into people (name, mail, age) values (:name, :mail, :age)', $param);
        return redirect('/data');
    }

    public function edit(Request $request){
        $param = ['id' => $request->id];
        $item = DB::select('select * from people where id = :id', $param);
        return view('data.edit', ['form' => $item[0]]);
    }

    public function update(DataRequest $request){
        $param =[
            'id' => $request->id,
            'name' => $request->name,
            'mail' => $request->mail,
            'age' => $request->age,
        ];

        DB::insert('update people set name = :name, mail = :mail, age = :age where id = :id', $param);
        return redirect('/data');
    }

    public function del(Request $request){
        $param = ['id' => $request->id];
        $item = DB::select('select * from people where id = :id', $param);
        return view('data.del', ['form' => $item[0]]);
    }

    public function remove(Request $request){
        $param = ['id' => $request->id];
        DB::insert('delete from people where id = :id', $param);
        return redirect('/data');
    }
}
