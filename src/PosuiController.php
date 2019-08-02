<?php

namespace Takielias\Posui;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class PosuiController extends Controller
{
    public function getView()
    {
        return view('Posui::ui');
    }

    public function search(Request $request)
    {
        $result = DB::table('posuis')->where('product_name', 'LIKE', "%{$request->input('q')}%")->get();
        return response()->json($result);
    }

    public function singleItem(Request $request)
    {
        $item = DB::table('posuis')->find($request->id);
        return view('Posui::item', compact('item'));
    }
}