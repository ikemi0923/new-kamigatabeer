<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BasicInformation;
use Illuminate\Support\Facades\Validator;

class BasicInformationController extends Controller
{
    public function index()
    {
        $basicInformation = BasicInformation::first();
        return view('masters.basic_informations.edit', compact('basicInformation'));
    }

    public function update(Request $request)
    {
        $rules = [
            'office_name' => 'required|string|max:20',
            'office_code' => 'required|string|max:20',
            'office_address' => 'required|string|max:20',
            'office_phone_number' => 'required|string|max:16',
            'representative_name' => 'required|string|max:20',
            'factory_name' => 'required|string|max:20',
            'factory_code' => 'required|string|max:20',
            'factory_address' => 'required|string|max:20',
            'factory_phone_number' => 'required|string|max:16',
            'tax_office' => 'required|string|max:20',
            'tax_accountant' => 'required|string|max:20',
            'tax_phone_number' => 'required|string|max:16',
            'thirty_flg' => 'nullable|in:on,1,0',
            'thirty_three_flg' => 'nullable|in:on,1,0',
            'special_adaptation_manufacturer_flg' => 'nullable|in:on,1,0',

        ];
        $messages = [
            'office_name.required' => '名称は必須です（最大20文字）',
            'office_name.max' => '名称は20文字以内で入力してください',

            'office_code.required' => '事業所コードは必須です',
            'office_code.max' => '事業所コードは20文字以内で入力してください',

            'office_address.required' => '事業所住所は必須です',
            'office_address.max' => '事業所住所は20文字以内で入力してください',

            'office_phone_number.required' => '事業所電話番号は必須です',
            'office_phone_number.max' => '事業所電話番号は16文字以内で入力してください',

            'representative_name.required' => '代表者名は必須です',
            'representative_name.max' => '代表者名は20文字以内で入力してください',

            'factory_name.required' => '製造所名称は必須です',
            'factory_name.max' => '製造所名称は20文字以内で入力してください',

            'factory_code.required' => '製造所コードは必須です',
            'factory_code.max' => '製造所コードは20文字以内で入力してください',

            'factory_address.required' => '製造所住所は必須です',
            'factory_address.max' => '製造所住所は20文字以内で入力してください',

            'factory_phone_number.required' => '製造所電話番号は必須です',
            'factory_phone_number.max' => '製造所電話番号は16文字以内で入力してください',

            'tax_office.required' => '税務署は必須です',
            'tax_office.max' => '税務署は20文字以内で入力してください',

            'tax_accountant.required' => '税理士名は必須です',
            'tax_accountant.max' => '税理士名は20文字以内で入力してください',

            'tax_phone_number.required' => '税理士電話番号は必須です',
            'tax_phone_number.max' => '税理士電話番号は16文字以内で入力してください',

            'thirty_flg.in' => '30条該当はチェックボックスで入力してください',
            'thirty_three_flg.in' => '33条該当はチェックボックスで入力してください',
            'special_adaptation_manufacturer_flg.in' => '特例適用製造者はチェックボックスで入力してください',
        ];



        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $basicInformation = BasicInformation::first();
        if (!$basicInformation) {
            $basicInformation = new BasicInformation();
        }

        $basicInformation->fill($request->all());
        $basicInformation->thirty_flg = $request->has('thirty_flg');
        $basicInformation->thirty_three_flg = $request->has('thirty_three_flg');
        $basicInformation->special_adaptation_manufacturer_flg = $request->has('special_adaptation_manufacturer_flg');
        $basicInformation->save();

        return redirect()->back()->with('msg', '更新しました');
    }
}
