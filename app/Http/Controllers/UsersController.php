<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreusersRequest;
use App\Http\Requests\UpdateusersRequest;
use App\Models\User;

use function Pest\Laravel\get;
use function Pest\Laravel\post;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('pages.home', ['users' => $users]);
    }

    public function create()
    {
        //
    }

    public function store(StoreusersRequest $request)
    {
        //
    }

    public function show(User $id)
    {
        //
    }

    public function edit(User $user)
    {
        //
    }

    public function update(UpdateusersRequest $request, User $user)
    {
        //
    }

    public function destroy(User $user)
    {
        //
    }
}
