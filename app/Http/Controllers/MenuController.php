<?php

namespace App\Http\Controllers;

use DB;

class MenuController extends Controller
{
    public function index()
    {
        $menu = DB::table('tbl_menu')->get()->toArray();
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

            if ($data->parent == 0) {
                $items[$data->id] = &$thisRef;
            } else {
                $ref[$data->parent]['children'][$data->id] = &$thisRef;
            }
        }
       // $menu = $items;   

        $toArray = [];
        foreach ($items as $key => $value) {
            $toArray [] = $value;
        }
        $menu = $toArray;   
        return  view("z-menu", compact('menu'));
    }

    public function save_menu()
    {
        if (request()->get("id")) {

            DB::table('tbl_menu')->where("id", request()->get("id"))->update([
                "icon"    => request()->get("icon"),
                "text"    => request()->get("text"),
                "href"    => request()->get("href"),
                "target"    => request()->get("target"),
                "title"    => request()->get("title"),
            ]);

            $response = array(
                "success" => true,
                "data" => request()->all(),
                "type" => "edit",
            );
        } else {
            $id =  DB::table('tbl_menu')->insertGetId([
                "icon"    => request()->get("icon"),
                "text"    => request()->get("text"),
                "href"    => request()->get("href"),
                "target"    => request()->get("target"),
                "title"    => request()->get("title"),
            ]);


            $data["id"] = $id;
            $data["text"] =  request()->get("text");
            $data["href"] =  request()->get("href");
            $response = array(
                "success" => true,
                "data" =>  $data,
                "type" => "add",
            );
        }


        return $response;
    }
    
    public function save()
    {
        $json = request()->get("data");
        $data = json_decode($json);     

        $response = array(
            "success" => false,
            "data" => $data,
            "message" =>  "data are same before.",
            "type" => "save",
        );

        function parseJsonArray($jsonArray, $parentID = 0)
        {
            $return = array();
            foreach ($jsonArray as $subArray) {
                $returnSubSubArray = array();
             
                if (isset($subArray->children)) {
                    $returnSubSubArray = parseJsonArray($subArray->children, $subArray->id);
                }

                $return[] = array('id' => $subArray->id, 'parentID' => $parentID);
                $return = array_merge($return, $returnSubSubArray);
            }
            return $return;
        }

        $readbleArray = parseJsonArray($data);      
        $i = 0;
        foreach ($readbleArray as $row) {
            $i++;
            $update =  DB::table('tbl_menu')->where("id", $row['id'])->update([
                "parent"    => $row['parentID'],
                "sort"    => $i,
            ]);

            if($update){
                $response = array(
                    "success" => true,
                    "data" => $data,
                    "message" =>  "save successfully",
                    "type" => "save",
                );
            }
        }

        return $response;
    }

    public function delete()
    {
        function recursiveDelete($id)
        {
            $query = DB::table('tbl_menu')->where('parent', $id)->get();
                if ($query) {
                foreach ($query as $row) {                 
                    recursiveDelete($row->id);
                }
               
            }
            DB::table('tbl_menu')->where('id', $id)->delete();  
            
            
            return array(
                "success" => true,
                "message" =>  "delete successfully",
                "type" => "delete",
        );
        }

       return recursiveDelete(request()->get("id"));
    }
}
