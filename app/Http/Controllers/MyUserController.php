<?php

namespace App\Http\Controllers;

use App\Models\MyUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Session;


class MyUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_user = MyUser::all();
        return view('contents.list',compact('all_user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contents.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dataInsertToDatabase = array(
            'name'  => $request->name,
            'age' => $request->age,
            'email' => $request->email,
        );
        if (MyUser::all('name')->where('name',$request->name)->first()===NULL) {
            DB::table('my_users')->insert($dataInsertToDatabase);
            Session::flash('success', 'CREATE SUCCESS!');
            return Redirect('my_user');
        }else {                      
            Session::flash('error', 'CREATE FAIL! EXISTED USER');
            return Redirect('my_user');
        } 
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
        
        $data = MyUser::all()->where('id',$id);
        return view('contents.edit')->with('my_user',$data);
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
        $update = MyUser::find($id);

        $update->name = $request->name;
        $update->age = $request->age;
        $update->email = $request->email;

        if($update->save){
            Session::flash('success', 'CREATE SUCCESS!');
            return Redirect('my_user');
        }else {                    
            Session::flash('error', 'CREATE FAIL! EXISTED USER');
            return Redirect('my_user');
        } 

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        MyUser::destroy($id);
        return redirect('my_user');
    }
}
