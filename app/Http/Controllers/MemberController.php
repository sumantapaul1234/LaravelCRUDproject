<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use Hash;

class MemberController extends Controller
{
    //show registration page
    function ShowRegister(){
        return view('register');
    }

    // registration page submit
    // paramiter pass for post data && validation unique in users table
    public function registerUser(Request $request){ //paramiter pass for post data && validation unique in users table
        $request->validate([
            'name'=>'required',
            'phone'=>'required|min:10|max:10|unique:users', //foe unique phone number
            'password'=>'required',
        ]);
        // value submited from html form to users table by User model first create an object of modal then model value equal to form value
        $user= new User();//create objedt of model with the help of object we do every operation
        $user->name= $request->name;
        $user->phone= $request->phone;
        // $user->password=$request->password; //use this of you are not provide hashing methof
        $user->password= Hash::make($request->password); //secure password using hashing ||use this if you want to secure password
        // save data into the data base
        $res=$user->save();
        //for success or not
        if($res){
            return back()->with('success','value inserted successfully'); //if true/success return this msg
        }else{
            return back()->with('fail','something wrong');//if false/fail return this msg
        }
    }
    //show all members list from database
    function show(){
        $data=user::paginate(6);  //use paginate rather than "User::all()"
        return view('list',['users'=>$data]);
    }
    //show particular id data for update
    function showData($id){
        $data= user::find($id);
        return view('edit',['data'=>$data]);
    }

    //submit update form
    function update(Request $req){
        $data= user::find($req->id);
        $data->name=$req->name;
        $data->phone=$req->phone;
        $data->password=$req->password;
        $data->save();
        return redirect('list');
    }
    //delete a particular id
    function delete($id){
        $data= user::find($id);
        $data->delete();
        return redirect('list');
    }
    
    
   
   
}
