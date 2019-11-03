<?php

namespace App\Http\Controllers;

use DB;

class ChartController extends Controller
{
    public function index()
    {
        // $menu=DB::table('tbl_menu')->find(5);
        $menu = DB::table('tbl_menu')->get()->toArray();

        // return $menu;
        $ref   = [];
        $items = [];
        foreach ($menu as $data) {

            $thisRef = &$ref[$data->id];
            $thisRef['parent'] = $data->parent;
            $thisRef['text'] = $data->text;
            $thisRef['title'] = $data->title;
            $thisRef['href'] = $data->href;
            $thisRef['icon'] = $data->icon;
            $thisRef['target'] = $data->target;
            $thisRef['id'] = $data->id;

            if ($data->parent == 31) {
                $items[$data->id] = &$thisRef;
            } else {
                $ref[$data->parent]['children'][] = &$thisRef;
            }
        }
       // $menu = $items;   

        $toArray = [];
        foreach ($items as $key => $value) {
            $toArray [] = $value;
        }
        $menu = $toArray[0];   
      
        return view("z-chart", compact('menu'));
    }
}
