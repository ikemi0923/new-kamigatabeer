<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Recipe;
use App\Models\Malt;
use App\Models\Hop;
use App\Models\Yeast;
use App\Models\WheatRiceSugar;
use App\Models\AuxiliaryRawMaterial;
use App\Models\Tank;
use App\Models\Item;

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
        $yeasts = Yeast::all();
        $wheatRiceSugars = WheatRiceSugar::all();
        $auxiliaryRawMaterials = AuxiliaryRawMaterial::all();
        $tanks = Tank::all();
        $items = Item::all();

        return view('recipes.create', compact(
            'malts',
            'hops',
            'yeasts',
            'wheatRiceSugars',
            'auxiliaryRawMaterials',
            'tanks',
            'items'
        ));
    }

    public function store(Request $request)
    {
        // レシピ本体の保存
        $validated = $request->validate([
            'recipe_name' => 'required|string|max:50',
            'brewed_at' => 'nullable|date',
            'item_id' => 'required|exists:items,id',
            'tank_id' => 'required|exists:tanks,id',
        ]);

        $recipe = Recipe::create($validated);

        // モルト
        if ($request->has('malts')) {
            foreach ($request->malts as $malt) {
                if (!empty($malt['malt_id']) && !empty($malt['amount'])) {
                    DB::table('recipe_malt')->insert([
                        'recipe_id' => $recipe->id,
                        'malt_id' => $malt['malt_id'],
                        'amount' => $malt['amount'],
                        'ratio' => $malt['ratio'] ?? null,
                        'note' => $malt['note'] ?? null,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]);
                }
            }
        }

        // ホップ
        if ($request->has('hops')) {
            foreach ($request->hops as $hop) {
                if (!empty($hop['hop_id']) && !empty($hop['amount'])) {
                    DB::table('recipe_hop')->insert([
                        'recipe_id' => $recipe->id,
                        'hop_id' => $hop['hop_id'],
                        'amount' => $hop['amount'],
                        'alpha_acid' => $hop['alpha_acid'] ?? null,
                        'ibu' => $hop['ibu'] ?? null,
                        'boil_time' => $hop['boil_time'] ?? null,
                        'note' => $hop['note'] ?? null,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]);
                }
            }
        }

        // 酵母
        if ($request->has('yeasts')) {
            foreach ($request->yeasts as $yeast) {
                if (!empty($yeast['yeast_id']) && !empty($yeast['amount'])) {
                    DB::table('recipe_yeast')->insert([
                        'recipe_id' => $recipe->id,
                        'yeast_id' => $yeast['yeast_id'],
                        'amount' => $yeast['amount'],
                        'note' => $yeast['note'] ?? null,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]);
                }
            }
        }

        // 副原料
        if ($request->has('auxiliary_raw_materials')) {
            foreach ($request->auxiliary_raw_materials as $aux) {
                if (!empty($aux['auxiliary_raw_material_id']) && !empty($aux['amount'])) {
                    DB::table('recipe_auxiliary_raw_material')->insert([
                        'recipe_id' => $recipe->id,
                        'auxiliary_raw_material_id' => $aux['auxiliary_raw_material_id'],
                        'amount' => $aux['amount'],
                        'note' => $aux['note'] ?? null,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]);
                }
            }
        }

        // 米・小麦・糖
        if ($request->has('wheat_rice_sugars')) {
            foreach ($request->wheat_rice_sugars as $wrs) {
                if (!empty($wrs['wheat_rice_sugar_id']) && !empty($wrs['amount'])) {
                    DB::table('recipe_wheat_rice_sugar')->insert([
                        'recipe_id' => $recipe->id,
                        'wheat_rice_sugar_id' => $wrs['wheat_rice_sugar_id'],
                        'amount' => $wrs['amount'],
                        'note' => $wrs['note'] ?? null,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]);
                }
            }
        }

        return redirect()->route('recipes.index')->with('msg', '保存しました');
    }


    public function edit($id)
    {
        $recipe = Recipe::findOrFail($id);

        // 中間テーブルから既存の原料データを取得
        $selectedMalts = DB::table('recipe_malt')->where('recipe_id', $id)->get();
        $selectedHops = DB::table('recipe_hop')->where('recipe_id', $id)->get();
        $selectedYeasts = DB::table('recipe_yeast')->where('recipe_id', $id)->get();
        $selectedAuxiliaryRawMaterials = DB::table('recipe_auxiliary_raw_material')->where('recipe_id', $id)->get();
        $selectedWheatRiceSugars = DB::table('recipe_wheat_rice_sugar')->where('recipe_id', $id)->get();

        // マスタデータ（セレクト用）
        $malts = Malt::all();
        $hops = Hop::all();
        $yeasts = Yeast::all();
        $wheatRiceSugars = WheatRiceSugar::all();
        $auxiliaryRawMaterials = AuxiliaryRawMaterial::all();
        $tanks = Tank::all();
        $items = Item::all();

        return view('recipes.edit', compact(
            'recipe',
            'selectedMalts',
            'selectedHops',
            'selectedYeasts',
            'selectedAuxiliaryRawMaterials',
            'selectedWheatRiceSugars',
            'malts',
            'hops',
            'yeasts',
            'wheatRiceSugars',
            'auxiliaryRawMaterials',
            'tanks',
            'items'
        ));
    }


    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'recipe_name' => 'required|string|max:50',
            'brewed_at' => 'nullable|date',
            'item_id' => 'required|exists:items,id',
            'tank_id' => 'required|exists:tanks,id',
        ]);
    
        $recipe = Recipe::findOrFail($id);
        $recipe->update($validated);
    
        // 各中間テーブルを一旦削除
        DB::table('recipe_malt')->where('recipe_id', $id)->delete();
        DB::table('recipe_hop')->where('recipe_id', $id)->delete();
        DB::table('recipe_yeast')->where('recipe_id', $id)->delete();
        DB::table('recipe_auxiliary_raw_material')->where('recipe_id', $id)->delete();
        DB::table('recipe_wheat_rice_sugar')->where('recipe_id', $id)->delete();
    
        // モルト再登録
        if ($request->has('malts')) {
            foreach ($request->malts as $malt) {
                if (!empty($malt['malt_id']) && !empty($malt['amount'])) {
                    DB::table('recipe_malt')->insert([
                        'recipe_id' => $id,
                        'malt_id' => $malt['malt_id'],
                        'amount' => $malt['amount'],
                        'ratio' => $malt['ratio'] ?? null,
                        'note' => $malt['note'] ?? null,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]);
                }
            }
        }
    
        // ホップ再登録
        if ($request->has('hops')) {
            foreach ($request->hops as $hop) {
                if (!empty($hop['hop_id']) && !empty($hop['amount'])) {
                    DB::table('recipe_hop')->insert([
                        'recipe_id' => $id,
                        'hop_id' => $hop['hop_id'],
                        'amount' => $hop['amount'],
                        'alpha_acid' => $hop['alpha_acid'] ?? null,
                        'ibu' => $hop['ibu'] ?? null,
                        'boil_time' => $hop['boil_time'] ?? null,
                        'note' => $hop['note'] ?? null,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]);
                }
            }
        }
    
        // 酵母再登録
        if ($request->has('yeasts')) {
            foreach ($request->yeasts as $yeast) {
                if (!empty($yeast['yeast_id']) && !empty($yeast['amount'])) {
                    DB::table('recipe_yeast')->insert([
                        'recipe_id' => $id,
                        'yeast_id' => $yeast['yeast_id'],
                        'amount' => $yeast['amount'],
                        'note' => $yeast['note'] ?? null,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]);
                }
            }
        }
    
        // 副原料再登録
        if ($request->has('auxiliary_raw_materials')) {
            foreach ($request->auxiliary_raw_materials as $aux) {
                if (!empty($aux['auxiliary_raw_material_id']) && !empty($aux['amount'])) {
                    DB::table('recipe_auxiliary_raw_material')->insert([
                        'recipe_id' => $id,
                        'auxiliary_raw_material_id' => $aux['auxiliary_raw_material_id'],
                        'amount' => $aux['amount'],
                        'note' => $aux['note'] ?? null,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]);
                }
            }
        }
    
        // 米・小麦・糖再登録
        if ($request->has('wheat_rice_sugars')) {
            foreach ($request->wheat_rice_sugars as $wrs) {
                if (!empty($wrs['wheat_rice_sugar_id']) && !empty($wrs['amount'])) {
                    DB::table('recipe_wheat_rice_sugar')->insert([
                        'recipe_id' => $id,
                        'wheat_rice_sugar_id' => $wrs['wheat_rice_sugar_id'],
                        'amount' => $wrs['amount'],
                        'note' => $wrs['note'] ?? null,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]);
                }
            }
        }
    
        return redirect()->route('recipes.index')->with('msg', '更新しました');
    }
    

    public function destroy($id)
    {
        Recipe::destroy($id);
        return redirect()->route('recipes.index')->with('msg', '削除しました');
    }
}
