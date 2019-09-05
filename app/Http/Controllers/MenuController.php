<?php

namespace App\Http\Controllers;

use DB;

class MenuController extends Controller
{
    public function index()
    {
			$menu = DB::table('menus')->get()->toArray();
			$ref   = [];
			$items = [];
			foreach ($menu as $data) {
					$thisRef = &$ref[$data->id];
					$thisRef['parent'] = $data->parent;
					$thisRef['label'] = $data->label;
					$thisRef['link'] = $data->link;
					$thisRef['id'] = $data->id;
					if ($data->parent == 0) {
							$items[$data->id] = &$thisRef;
					} else {
							$ref[$data->parent]['child'][$data->id] = &$thisRef;
					}
			}
			$menu = $items;
			return  view("z-menu", compact('menu'));
		}
		
    public function save_menu()
    {
			if (request()->get("id")) {
					DB::table('menus')->where("id", request()->get("id"))->update([
							"label"    => request()->get("label"),
							"link"    => request()->get("link"),
					]);
					$response = array(
							"success" => true,
							"data" => request()->all(),
							"type" => "edit",
					);
			} else {
					$id =  DB::table('menus')->insertGetId([
							"label"    => request()->get("label"),
							"link"    => request()->get("link"),
					]);
					$data["id"] = $id;
					$data["label"] =  request()->get("label");
					$data["link"] =  request()->get("link");
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
			$data = json_decode(request()->get('data'));
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
					DB::table('menus')->where("id", $row['id'])->update([
							"parent"    => $row['parentID'],
							"sort"    => $i,
					]);
			}
		}
		
    public function delete()
    {
			function recursiveDelete($id)
			{
				$query = DB::table('menus')->where('parent', $id)->get()->toArray();				
				if ($query) {
					foreach ($query as $row) {
						recursiveDelete($row['id']);
					}
				}
				DB::table('tbl_menu')->where('id', $id)->delete();         
			}
			recursiveDelete(request()->get("id"));
    }
}
