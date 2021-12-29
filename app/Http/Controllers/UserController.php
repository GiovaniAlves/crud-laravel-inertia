<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use mysql_xdevapi\Exception;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Inertia\Inertia
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
        $users = $users->orderBy('id')->paginate(8)->appends(request()->except("page"));

        return Inertia::render('Users/Index', ['users' => $users, 'filtro' => $filtro]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Inertia\Inertia
     */
    public function create()
    {
        return Inertia::render('Users/Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\StoreUserRequest $request
     * @return Illuminate\Support\Facades\Redirect
     */
    public function store(StoreUserRequest $request)
    {
        User::create($request->validated());
        return Redirect::route('users.index')->with('message', 'Usuário Criado com Sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Inertia\Inertia
     */
    public function show($id)
    {
        $customer = User::findOrFail($id);
        return Inertia::render('Users/Show', ['customer' => $customer]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Inertia\Inertia
     */
    public function edit($id)
    {
        $customer = User::findOrFail($id);
        return Inertia::render('Users/Edit', ['customer' => $customer]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\UpdateUserRequest $request
     * @param int $id
     * @return Illuminate\Support\Facades\Redirect
     */
    public function update(UpdateUserRequest $request, $id)
    {
        $customer = User::find($id);
        $customer->update($request->validated());

        //Estou usando o request global pq não validei o avatar
        if (request()->hasFile('avatar')) {
            $customer->updateProfilePhoto(request()->file('avatar'));
        }
        return Redirect::route('users.index')->with('message', 'Usuário Atualizado com Sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Illuminate\Support\Facades\Redirect
     */
    public function destroy($id)
    {
        $customer = User::find($id);
        $customer->delete();
        return Redirect::back()->with('message', 'Usuário Deletado com Sucesso!');
    }

    /**
     * Remove the avatar from storage.
     *
     * @param User $user
     * @return Illuminate\Support\Facades\Redirect
     */
    public function deletarAvatar(User $user)
    {
        $user->deleteProfilePhoto();
        return Redirect::back()->with('message', 'Avatar Deletado com sucesso!');
    }
}
