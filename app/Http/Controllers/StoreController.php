<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\StoreRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class StoreController extends Controller
{
    public function index(StoreRequest $request) {
        $data = $request->validated();
        $data['password'] = Hash::make($data['password']);
        User::firstOrCreate([
            'email' => $data['email']
        ], $data);
        return response([]);
    }
}
