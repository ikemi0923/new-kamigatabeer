<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;
use App\Models\Malt;
use App\Models\Hop;

class RecipeController extends Controller
{
    public function index()
    {
        $recipes = Recipe::all();
        return view('recipes.index', compact('recipes'));
    }
    
    public function create()
    {
        $malts = Malt::all();
        $hops = Hop::all();
    
        return view('recipes.create', compact('malts', 'hops'));
    }
    
    public function store(Request $request)
    {
        // バリデーションとレシピ保存処理（次ステップで実装）
        return redirect()->route('recipes.index')->with('msg', '保存しました');
    }

    public function edit($id)
    {
        $recipe = Recipe::findOrFail($id);
        return view('recipes.edit', compact('recipe'));
    }

    public function update(Request $request, $id)
    {
        // バリデーションと更新処理（次ステップで実装）
        return redirect()->route('recipes.index')->with('msg', '更新しました');
    }

    public function destroy($id)
    {
        Recipe::destroy($id);
        return redirect()->route('recipes.index')->with('msg', '削除しました');
    }
}
