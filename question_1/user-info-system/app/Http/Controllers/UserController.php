<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
// use Illuminate\Support\Str;
use App\Http\Requests\StoreUserRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("users.index");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {
        try {
            $data = [
                'name'=> $request->validated('name'),
                'email' => $request->validated('email'),
                'username' => $request->validated('username'),
                'password' => bcrypt($request->validated('password')),
            ];

            $user = User::create($data);

            return redirect()->route("users.index")->with("status","User has been successfully registered");

        } catch (\Exception $e) {
            \Log::error($e->getMessage());
            return redirect()->route("users.index")->with("status","Something went wrong..!");
        }
    }
}
