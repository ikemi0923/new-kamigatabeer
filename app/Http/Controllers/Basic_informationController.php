<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Basic_informations;
use Illuminate\Support\Facades\Validator;

class Basic_informationController extends Controller
{
    function index()
    {
        $basic_informations = Basic_informations::all();
        return view('masters.basic_informations', ['basic_informations' => $basic_informations]);
    }

    function show()
    {
        $basic_informations = Basic_informations::all();
        return view('masters.basic_informations.create', ['basic_informations' => $basic_informations]);
    }

    public function add(Request $request)
    {
        $rules = [
            'office_name' => 'required|string|max:20',
            'office_code' => 'required|char|max:20',
            'office_address' => 'required|string|max:20',
            'office_phone_number' => 'required|string|max:16',
            'representative_name' => 'required|string|max:20',
            'factory_name' => 'required|string|max:20',
            'factory_code' => 'required|char|max:20',
            'factory_address' => 'required|string|max:20',
            'factory_phone_number' => 'required|string|max:16',
            'tax_office' => 'required|string|max:20',
            'tax_accountant' => 'required|string|max:20',
            'tax_phone_number' => 'required|string|max:16',
            'thirty_flg' => 'boolean',
            'thirty_three_flg' => 'boolean',
            'special_adaptation_manufacturer_flg' => 'boolean',
        ];
        $message = [
            'office_name.required' => '名称を20字以内で入力してください',
            'office_code.required' => '郵便番号を20字以内で入力してください',
            'office_address.required' => '住所を20字以内で入力してください',
            'office_phone_number.required' => '電話番号を20字以内で入力してください',
            'representative_name.required' => '代表者氏名を20字以内で入力してください',
            'factory_name.required' => '名称を20字以内で入力してください',
            'factory_code.required' => '郵便番号を20字以内で入力してください',
            'factory_address.required' => '住所を20字以内で入力してください',
            'factory_phone_number.required' => '電話番号を20字以内で入力してください',
            'tax_office.required' => '税務署を20字以内で入力してください',
            'tax_accountant.required' => '税理士を20字以内で入力してください',
            'tax_phone_number.required' => '電話番号を20字以内で入力してください',
            'thirty_flg' => 'チェックを入力してください',
            'thirty_three_flg'
            => 'チェックを入力してください',
            'special_adaptation_manufacturer_flg'
            => 'チェックを入力してください',
            'office_name.max' => '名称を20字以内で入力してください',
            'office_code.max' => '郵便番号を20字以内で入力してください',
            'office_address.max' => '住所を20字以内で入力してください',
            'office_phone_number.max' => '電話番号を20字以内で入力してください',
            'representative_name.max' => '代表者氏名を20字以内で入力してください',
            'factory_name.max' => '名称を20字以内で入力してください',
            'factory_code.max' => '郵便番号を20字以内で入力してください',
            'factory_address.max' => '住所を20字以内で入力してください',
            'factory_phone_number.max' => '電話番号を20字以内で入力してください',
            'tax_office.max' => '税務署を20字以内で入力してください',
            'tax_accountant.max' => '税理士を20字以内で入力してください',
            'tax_phone_number.max' => '電話番号を20字以内で入力してください',
        ];
        $basic_informations = Validator::make($request->all(), $rules, $message);
        if ($basic_informations->fails()) {
            return redirect('/masters/basic_informations/create')
                ->withErrors($basic_informations)
                ->withInput();
        } else {
            $post = new Basic_informations();
            $post->name = $request->name;
            $post->maker = $request->maker;
            $post->auxiliary_raw_material_display_flg = 1;
            $post->save();
            return view('masters.basic_informations.create', ['msg' => '正しく入力されました']);
        }
    }

    public function edit($id, Request $request)
    {
        $basic_information = Basic_informations::findOrFail($id);
        return view('masters.basic_informations.edit', ['basic_informations' =>  $basic_information]);
    }

    public function finish($id, Request $request)
    {
        $rules = [
            'office_name' => 'required|string|max:20',
            'office_code' => 'required|char|max:20',
            'office_address' => 'required|string|max:20',
            'office_phone_number' => 'required|string|max:16',
            'representative_name' => 'required|string|max:20',
            'factory_name' => 'required|string|max:20',
            'factory_code' => 'required|char|max:20',
            'factory_address' => 'required|string|max:20',
            'factory_phone_number' => 'required|string|max:16',
            'tax_office' => 'required|string|max:20',
            'tax_accountant' => 'required|string|max:20',
            'tax_phone_number' => 'required|string|max:16',
            'thirty_flg' => 'boolean',
            'thirty_three_flg' => 'boolean',
            'special_adaptation_manufacturer_flg' => 'boolean',
        ];

        $message = [
            'office_name.required' => '名称を20字以内で入力してください',
            'office_code.required' => '郵便番号を20字以内で入力してください',
            'office_address.required' => '住所を20字以内で入力してください',
            'office_phone_number.required' => '電話番号を20字以内で入力してください',
            'representative_name.required' => '代表者氏名を20字以内で入力してください',
            'factory_name.required' => '名称を20字以内で入力してください',
            'factory_code.required' => '郵便番号を20字以内で入力してください',
            'factory_address.required' => '住所を20字以内で入力してください',
            'factory_phone_number.required' => '電話番号を20字以内で入力してください',
            'tax_office.required' => '税務署を20字以内で入力してください',
            'tax_accountant.required' => '税理士を20字以内で入力してください',
            'tax_phone_number.required' => '電話番号を20字以内で入力してください',
            'thirty_flg' => 'チェックを入力してください',
            'thirty_three_flg'
            => 'チェックを入力してください',
            'special_adaptation_manufacturer_flg'
            => 'チェックを入力してください',
            'office_name.max' => '名称を20字以内で入力してください',
            'office_code.max' => '郵便番号を20字以内で入力してください',
            'office_address.max' => '住所を20字以内で入力してください',
            'office_phone_number.max' => '電話番号を20字以内で入力してください',
            'representative_name.max' => '代表者氏名を20字以内で入力してください',
            'factory_name.max' => '名称を20字以内で入力してください',
            'factory_code.max' => '郵便番号を20字以内で入力してください',
            'factory_address.max' => '住所を20字以内で入力してください',
            'factory_phone_number.max' => '電話番号を20字以内で入力してください',
            'tax_office.max' => '税務署を20字以内で入力してください',
            'tax_accountant.max' => '税理士を20字以内で入力してください',
            'tax_phone_number.max' => '電話番号を20字以内で入力してください',
        ];

        $basic_information = Validator::make($request->all(), $rules, $message);
        if ($basic_information->fails()) {
            return redirect('masters.basic_informations.create')
                ->withErrors($basic_information)
                ->withInput();
        } else {
            $basic_information = Basic_informations::findOrFail($id);
            $basic_information->office_name = $request->office_name;
            $basic_information->office_code = $request->office_code;
            $basic_information->office_address = $request->office_address;
            $basic_information->office_phone_number = $request->office_phone_number;
            $basic_information->representative_name = $request->representative_name;
            $basic_information->factory_name = $request->factory_name;
            $basic_information->factory_code = $request->factory_code;
            $basic_information->factory_address = $request->factory_address;
            $basic_information->factory_phone_number = $request->factory_phone_number;
            $basic_information->tax_office = $request->tax_office;
            $basic_information->tax_accountant = $request->tax_accountant;
            $basic_information->tax_phone_number = $request->tax_phone_number;
            $$basic_information->thirty_flg = $request->thirty_flg;
            $$basic_information->thirty_three_flg = $request->thirty_three_flg;
            $$basic_information->special_adaptation_manufacturer_flg = $request->special_adaptation_manufacturer_flg;
            $$basic_information->save();
            return view('masters.basic_informations.create', ['msg' => '正しく入力されました']);
        }
    }
}