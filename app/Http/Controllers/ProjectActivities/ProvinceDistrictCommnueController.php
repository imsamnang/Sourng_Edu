<?php

namespace App\Http\Controllers\ProjectActivities;

use App\Http\Controllers\Controller;
use App\Models\Commune;
use App\Models\District;
use Illuminate\Http\Request;

class ProvinceDistrictCommnueController extends Controller
{
  function getDistrictList(Request $request)
  {
    $districts = District::where("province_id",$request->province_id)
    ->pluck("name_en","id");
    return response()->json($districts);
  }

  function getDistrictListKh(Request $request)
  {
    $districts = District::where("province_id",$request->province_id)
    ->pluck("name_kh","id");
    return response()->json($districts);
  }

  public function getCommuneList(Request $request)
  {
    $communes = Commune::where("district_id",$request->district_id)
    ->pluck("name_en","id");
    return response()->json($communes);
  }

  public function getCommuneListKh(Request $request)
  {
    $communes = Commune::where("district_id",$request->district_id)
    ->pluck("name_kh","id");
    return response()->json($communes);
  }
}
