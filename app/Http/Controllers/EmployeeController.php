<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Store;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::with('store')->get();
        return view('masters.employees.index', compact('employees'));
    }
    public function create()
    {
        return view('masters.employees.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'last_name' => 'required|string|max:20',
            'first_name' => 'required|string|max:20',
        ], [
            'last_name.required' => '姓は必須です',
            'last_name.max' => '姓は20文字以内で入力してください',
            'first_name.required' => '名は必須です',
            'first_name.max' => '名は20文字以内で入力してください',
        ]);

        $validated['store_id'] = 1;
        Employee::create($validated);

        return redirect()->route('employees.index')->with('msg', '保存しました');
    }

    public function edit($id)
    {
        $employee = Employee::findOrFail($id);
        return view('masters.employees.edit', compact('employee'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'last_name' => 'required|string|max:20',
            'first_name' => 'required|string|max:20',
        ], [
            'last_name.required' => '姓は必須です',
            'last_name.max' => '姓は20文字以内で入力してください',
            'first_name.required' => '名は必須です',
            'first_name.max' => '名は20文字以内で入力してください',
        ]);

        $validated['store_id'] = 1;

        $employee = Employee::findOrFail($id);
        $employee->update($validated);

        return redirect()->route('employees.index')->with('msg', '更新しました');
    }

    public function destroy($id)
    {
        $employee = Employee::findOrFail($id);
        $employee->delete();

        return redirect()->route('employees.index')->with('msg', '削除しました');
    }
}
