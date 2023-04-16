<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ApiUserController extends Controller
{
    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function login(Request $request): JsonResponse
    {
        /** @var User $user */
        $user = User::query()->firstOrCreate([
            'wall_address' => $request->wall_address
        ], [
            'wall_address' => $request->wall_address
        ]);
        return response()->json([
            'token' => $user->createToken('AUTH')->plainTextToken,
        ]);
    }
}
