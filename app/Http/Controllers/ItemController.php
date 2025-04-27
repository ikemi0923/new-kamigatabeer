<!-- <?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use App\Items;
// use Illuminate\Support\Facades\Validator;

// class ItemController extends Controller
// {
//     function index()
//     {
//         $items = Items::all();
//         return view('masters.items', ['items' => $items]);
//     }

//     function show()
//     {
//         $items = Items::all();
//         return view('masters.items.create', ['items' => $items]);
//     }

//     public function add(Request $request)
//     {
//         $rules = [
//             'name' => 'required|string|max:20',
//             'delete_flg' => 'boolean',
//         ];
//         $message = [
//             'name.required' => '名前を20字以内で入力してください',
//             'delete_flg' => 'チェックを入力してください',
//             'name.max' => '名前は20文字以内で入力してください',
//         ];
//         $item = Validator::make($request->all(), $rules, $message);
//         if ($item->fails()) {
//             return redirect('/masters/items/create')
//                 ->withErrors($item)
//                 ->withInput();
//         } else {
//             $post = new Items();
//             $post->name = $request->name;
//             $post->delete_flg = 1;
//             $post->save();
//             return view('masters.items.create', ['msg' => '正しく入力されました']);
//         }
//     }

//     public function edit($id, Request $request)
//     {
//         $items = Items::findOrFail($id);
//         return view('masters.items.edit', ['item' =>  $items,]);
//     }

//     public function finish($id, Request $request)
//     {
//         $rules = [
//             'name' => 'required|string|max:20',
//             'delete_flg' => 'boolean',
//         ];

//         $message = [
//             'name.required' => '名前を20字以内で入力してください',
//             'hops_display_flg' => 'チェックを入力してください',
//             'name.max' => '名前は20文字以内で入力してください',
//         ];

//         $item = Validator::make($request->all(), $rules, $message);
//         if ($item->fails()) {
//             return redirect('/masters/items/create')
//                 ->withErrors($item)
//                 ->withInput();
//         } else {
//             $post = new Items();
//             $post->name = $request->name;
//             $post->delete_flg = 1;
//             $post->save();
//             return view('masters.items.create', ['msg' => '正しく入力されました']);
//         }
//     }


//     function delete($id, Request $request)
//     {
//         $db_data = new Items;
//         $db_data->destroy(1);
//     }
// } -->
