<?php

namespace App\Http\Controllers\Backend;

use App\Helpers\ToastrHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function list()
    {
        $masterData = config('masterdata')['user'];
        $users = User::query()->withoutGlobalScopes()->paginate(14);
        foreach ($users as $user) {
            $user->role = $masterData['role'][$user->role];
            $user->is_active = $masterData['status'][$user->is_active];
            if (!Str::is('http', $user->avatar)) {
                $user->avatar = env('APP_URL') . '/' . $user->avatar;
            }
        }
        return view('backend/user/list', compact('users'));
    }

    public function create()
    {
        return view('backend/user/create');
    }

    public function store(Request $request)
    {
        try {
            $user = new User;

            $user->username = $request->username;
            $user->email = $request->email;
            $user->first_name = $request->first_name;
            $user->last_name = $request->last_name;
            $user->address = $request->address;
            $user->phone = $request->phone;
            $user->password = Hash::make($request->password);
            $user->is_active = $request->is_active ?? 0;
            $user->role = $request->role;
            $user->avatar = 'uploads/users/' . $request->file('avatar')->getClientOriginalName();

            $request->file('avatar')->move('uploads/users/', $request->file('avatar')->getClientOriginalName());
            $user->save();
            ToastrHelper::alert([
                'status' => SUCCESS,
                'title' => SUCCESS,
                'content' => 'Tạo tài khoản thành công'
            ]);
        } catch (\Exception $exception) {
            ToastrHelper::alert([
                'status' => ERROR,
                'title' => ERROR,
                'content' => 'Tạo tài khoản không thành công'
            ]);
            return back();
        }

        return redirect()->route('admin-user-list');
    }

    public function edit(Request $request)
    {
        $user = User::query()->withoutGlobalScopes()->findOrFail($request->id);
        return view('backend/user/edit', compact('user'));
    }

    public function update(Request $request)
    {
        try {

            $user = User::query()->withoutGlobalScopes()->findOrFail($request->id);

            $user->username = $request->username;
            $user->email = $request->email;
            $user->first_name = $request->first_name;
            $user->last_name = $request->last_name;
            $user->address = $request->address;
            $user->phone = $request->phone;
            $user->password = Hash::make($request->password);
            $user->is_active = $request->is_active ?? 0;
            $user->role = $request->role;
            $user->avatar = 'uploads/users/' . $request->file('avatar')->getClientOriginalName();

            $request->file('avatar')->move('uploads/users/', $request->file('avatar')->getClientOriginalName());
            $user->update();
            ToastrHelper::alert([
                'status' => SUCCESS,
                'title' => SUCCESS,
                'content' => 'Cập nhật tài khoản thành công'
            ]);
        } catch (\Exception $exception) {
            ToastrHelper::alert([
                'status' => ERROR,
                'title' => ERROR,
                'content' => 'Cập nhật tài khoản không thành công'
            ]);
            return back();
        }

        return redirect()->route('admin-user-list');
    }

    public function delete(Request $request)
    {
        try {
            User::destroy($request->id);
            ToastrHelper::alert([
                'status' => SUCCESS,
                'title' => SUCCESS,
                'content' => 'Đã xóa tài khoản'
            ]);
        } catch (\Exception $exception) {
            ToastrHelper::alert([
                'status' => ERROR,
                'title' => ERROR,
                'content' => 'Không thể xóa tài khoản'
            ]);
        }
        return redirect()->route('admin-user-list');
    }
}
