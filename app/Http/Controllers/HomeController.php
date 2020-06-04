<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
=======
use App\User;
>>>>>>> 57f7c164cb409a5fd263eb4a1290c61ce2a7da9a
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
<<<<<<< HEAD
        return view('home');
=======
        $users = User::latest()->paginate(5);

        return view('home',compact('users'));
//        return view('home');
    }

    public function edit(User $user)
    {
//        dd($user);
        return view('users.edit',compact('user'));
    }

    public function update(Request $request, User $user)
    {
//        dd($request);
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'role' => 'required|numeric|max:1',
        ]);

        $user->update($request->all());

        return redirect()->route('home')
            ->with('success','user updated successfully');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);

        User::create($request->all());

        return redirect()->route('Users.index')
            ->with('success','User created successfully.');
    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('home')
            ->with('success','User deleted successfully');
>>>>>>> 57f7c164cb409a5fd263eb4a1290c61ce2a7da9a
    }
}
