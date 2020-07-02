<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UsersController extends Controller
{
    //
    public function index()
    {
        // $data = [
        //     'name' => 'ogori',
        //     'email' => 'ogori2@gmail.com',
        //     'password' => bcrypt('pass1234')

        // ];
        // User::create($data);
        return view('users');
    }
    public function uploadAvatar(Request $request)
    {
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            if ($request->file('image')->isValid()) {

                $imageName = $request->image->getClientOriginalName();
                $request->image->storeAs('images', $imageName, 'public');
                $user = auth()->user();
                if (auth()->user()->avatar) {
                    Storage::delete("/public/images/" . auth()->user()->avatar);
                }
                $user->avatar = $imageName;
                $user->save();
                return redirect('/home')->with('message', 'Upload was succesfull');
            }
        } else {
            return redirect('/home')->with('error', 'An error occured! try again');
        }
    }
}
