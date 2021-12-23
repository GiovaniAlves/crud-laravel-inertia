<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = new User();
        $filtro = "";

        if (request()->has("filtro")) {
            $filtro = request("filtro");
            //filtrando por name ou email
            $users = $users->where('name', 'like', '%' . $filtro . '%')
                ->orWhere('email', 'like', '%' . $filtro . '%');
        }

        // request()->except("page") com isso vou inserir tudo que tiver na url exceto a page que já vem no paginate.
        $users = $users->paginate(8)->appends(request()->except("page"));

        return Inertia::render('Users/Index', ['users' => $users, 'filtro' => $filtro]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render('Users/Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\StoreUserRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserRequest $request)
    {
        User::create($request->validated());
        return Redirect::route('users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $customer = User::find($id);
        return Inertia::render('Users/Show', ['customer' => $customer]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer = User::find($id);
        return Inertia::render('Users/Edit', ['customer' => $customer]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\UpdateUserRequest $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request, $id)
    {
        $customer = User::find($id);
        $customer->update($request->validated());
        return Redirect::route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customer = User::find($id);
        $customer->delete();
        return Redirect::route('users.index');
    }
}
