<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use Illuminate\Support\Facades\DB;

class MemberController extends Controller
{

    //one to many
    function oneToMany() {
        return Member::find(2)->getDevice;
    }

    //one to one 
    function oneToOne(){
        return Member::find(1)->getCompany;
    }
    //accessor
    // function accessor(){
    //     return Member::all();
    // }

    //mutator
    // function mutator(){
    //     $member = new Member;
    //     $member->name = "John";
    //     $member->email = "john@example.com";
    //     $member->address = "Delhi";
    //     $member->save();
    // }

    //aggrigate query
    function operations(){
        // return DB::table('members')->min('id');
        // return DB::table('members')->max('id');
        // return DB::table('members')->count('id');
        // return DB::table('members')->avg('id');
        
    }

    //query builder
    function dbOperations(){
    //    return DB::table('members')
    //    ->where('address','USA')
    //    ->get();
    //    return DB::table('members')->find(6);
    //    return DB::table('members')->count();
    //    return DB::table('members')
    //    ->insert(
    //     [
    //         'name' => 'ahmad',
    //         'email' => 'ahmad@test.com',
    //         'address' => 'USA'
    //     ]
    //    );
    //    return DB::table('members')
    //    ->where('id',13)
    //    ->update(
    //     [
    //         'name' => 'ali',
    //         'email' => 'ali@test.com',
    //         'address' => 'UK'
    //     ]
    //    );
    //    return DB::table('members')
    //    ->where('id',13)
    //    ->delete();
        // return view('query',['data' => $data]);
    }

    function show(){
        // $data = Member::paginate(5);
        $data = Member::all();
        return view("list", ['members' => $data]);
    }

    function addData(Request $req){
        $member = new Member;
        $member->name = $req->name;
        $member->email = $req->email;
        $member->address = $req->address;
        $member->save();
        return redirect('add');
    }

    function deleteData($id){
        $data = Member::find($id);
        $data->delete();
        return redirect('list');
    }

    function editData($id){
       $data = Member::find($id);
        return view("edit",['data' => $data]);
    }

    function update(Request $req){
    $data = Member::find($req->id);
    $data->name = $req->name;
    $data->email = $req->email;
    $data->address = $req->address;
    $data->save();
    return redirect('list');

    }

}
