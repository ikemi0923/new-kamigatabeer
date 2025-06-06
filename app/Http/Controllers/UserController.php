<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Store;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::with('store')->get();
        return view('masters.users.index', compact('users'));
    }

    public function create()
    {
        $stores = Store::all();
        return view('masters.users.create', compact('stores'));
    }

    public function store(Request $request)
    {
        $rules = [
            'user_id' => 'required|string|max:50|unique:users,user_id',
            'password' => 'required|string|min:6',
            'email' => 'nullable|email|max:255',
            'store_id' => 'required|exists:stores,id',
            'is_admin' => 'nullable', // ← booleanを外す
        ];

        $messages = [
            'user_id.required' => 'ユーザーIDは必須です。',
            'user_id.unique' => 'このユーザーIDは既に使用されています。',
            'password.required' => 'パスワードは必須です。',
            'store_id.required' => '店舗の選択は必須です。',
            'email.email' => 'メールアドレスの形式が正しくありません。',
        ];

        $validated = $request->validate($rules, $messages);

        $validated['password'] = Hash::make($request->password);
        $validated['is_admin'] = $request->has('is_admin') ? 1 : 0;

        User::create($validated);

        return redirect()->route('users.index')->with('msg', '保存しました');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        $stores = Store::all();
        return view('masters.users.edit', compact('user', 'stores'));
    }

    public function update(Request $request, $id)
    {
        $rules = [
            'user_id' => 'required|string|max:50|unique:users,user_id,' . $id,
            'password' => 'nullable|string|min:6',
            'email' => 'nullable|email|max:255',
            'store_id' => 'required|exists:stores,id',
            'is_admin' => 'nullable', // ← booleanを外す
        ];

        $messages = [
            'user_id.required' => 'ユーザーIDは必須です。',
            'user_id.unique' => 'このユーザーIDは既に使用されています。',
            'store_id.required' => '店舗の選択は必須です。',
            'email.email' => 'メールアドレスの形式が正しくありません。',
        ];

        $validated = $request->validate($rules, $messages);

        if ($request->filled('password')) {
            $validated['password'] = Hash::make($request->password);
        } else {
            unset($validated['password']);
        }

        $validated['is_admin'] = $request->has('is_admin') ? 1 : 0;

        $user = User::findOrFail($id);
        $user->update($validated);

        return redirect()->route('users.index')->with('msg', '更新しました');
    }

    public function destroy($id)
    {
        User::findOrFail($id)->delete();
        return redirect()->route('users.index')->with('msg', '削除しました');
    }
}
