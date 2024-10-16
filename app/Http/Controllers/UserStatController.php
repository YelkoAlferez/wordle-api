<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserStatsResource;
use App\Models\User;
use App\Models\UserStat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserStatController extends Controller
{
    public function index(){
       
    }

    public function show(User $user){

    }

    public function create(Request $request, User $user){

    }

    public function delete(User $user){
        
    }

    public function stats(){
        $user = Auth::user();

        $stats = UserStat::where("user_id", $user->id)->get();

        return response()->json(new UserStatsResource($stats));
    }
}
