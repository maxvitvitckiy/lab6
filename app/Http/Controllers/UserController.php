<?php

namespace App\Http\Controllers;

use App\Models\MyUser;
use Illuminate\Http\Request;
use App\Models\Game;


class UserController extends Controller
{
    public function index() {
        $Users = MyUser::all();
        $Games = [];
        foreach ($Users as $user) {
            array_push($Games, Game::find($user->game_id));
        }
        return view('main', ['Users' => $Users, 'Games' => $Games]);
    }

    public function searchUser($id) {
        $user = MyUser::find($id);
        return view('UserPage', ['user' => $user, 'game' => Game::find($user->game_id)]);
    }

    public function searchGame($id) {
        $Users = MyUser::all();
        $game_users = [];
        foreach ($Users as $user)
            if ($user->game_id == $id) array_push($game_users, $user);
        return view('GamePage', ['Users' => $game_users, 'game' => Game::find($id)]);
    }
}
