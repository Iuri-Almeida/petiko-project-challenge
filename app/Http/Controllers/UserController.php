<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function saveOrder() {

        // verificando se algum campo está vazio
        if (
            !$_POST['cep'] ||
            !$_POST['address'] ||
            !$_POST['number'] ||
            !$_POST['district'] ||
            !$_POST['city'] ||
            !$_POST['state']
        ) { return view('failed'); }

        // adicionando as informações ao BD
        $user = new User();
        $user->name = 'Iuri Almeida';
        $user->email = 'iurilopesalmeida@gmail.com';
        $user->cep = $_POST['cep'];
        $user->address = $_POST['address'];
        $user->number = $_POST['number'];
        $user->complement = $_POST['complement'];
        $user->district = $_POST['district'];
        $user->city = $_POST['city'];
        $user->state = $_POST['state'];

        // criando uma hash para cada pedido
        $hash = Hash::make(strval(implode(':', $_POST)));
        
        $user->hash = $hash;
        $user->save();

        // buscando as informações no BD
        $user = User::where('hash', '=', $hash)->first();
        
        return view('success', [ 'user' => $user ]);
    }
}
