<?php

namespace App\Http\Controllers;

use App\Models\Tank;
use Illuminate\Http\Request;

class TankController extends Controller
{
    public function index()
    {
        $tanks = Tank::all();
        return view('masters.tanks.index', compact('tanks'));
    }

    public function create()
    {
        return view('masters.tanks.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:20',
        ], [
            'name.required' => 'タンク名は必須です',
            'name.max' => 'タンク名は20文字以内で入力してください',
        ]);

        Tank::create($validated);

        return redirect()->route('tanks.index')->with('msg', '保存しました');
    }

    public function edit($id)
    {
        $tank = Tank::findOrFail($id);
        return view('masters.tanks.edit', compact('tank'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:20',
        ], [
            'name.required' => 'タンク名は必須です',
            'name.max' => 'タンク名は20文字以内で入力してください',
        ]);
        
        $tank = Tank::findOrFail($id);
        $tank->update($validated);

        return redirect()->route('tanks.index')->with('msg', '更新しました');
    }

    public function destroy($id)
    {
        Tank::findOrFail($id)->delete();
        return redirect()->route('tanks.index')->with('msg', '削除しました');
    }
}
