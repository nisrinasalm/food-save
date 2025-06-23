<?php
namespace App\Http\Controllers;

use App\Models\User;

class AdminController extends Controller
{
    public function getUnverifiedUsers()
    {
        return User::where('status', 'unverified')
                    ->whereIn('peran', ['pemberi', 'penerima'])
                    ->get();
    }

    public function approveUser(string $uuid)
    {
        $user = User::findOrFail($uuid);
        $user->approve();

        return response()->json(['status' => $user->status]);
    }

    public function rejectUser(string $uuid)
    {
        $user = User::findOrFail($uuid);
        $user->reject();

        return response()->json(['status' => $user->status]);
    }
}
