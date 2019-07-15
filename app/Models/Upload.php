<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class Upload extends Model
{
//use with store function in controller
    public static function imageUpload($filename,$ObjController, $path = null)
{

    // return $filename;

    if(request()->hasfile($filename))
    {
    $dir = $path; //'uploads/' . $path .'/';
        $file = request()->file($filename);
        $extension = $file->getClientOriginalExtension();
        $filename = time().'.'.$extension;
        // return $filename;
        $file->move($dir,$filename);
        $ObjController= $filename;
        return $filename;
    }
}

//use with update function in controller
public static function imageUpdate($filename,$ObjController, $path = null)
{
    $dir = $path;//'uploads/'. $path .'/';
    $oldfilename = $ObjController;
    if(request()->hasfile($filename))
    {
    if ($ObjController != '' && File::exists($dir . $ObjController))
        File::delete($dir . $ObjController);
        $file = request()->file($filename);
        $extension = $file->getClientOriginalExtension();
        $filename = time().'.'.$extension;
        $file->move($dir,$filename);
        $ObjController= $filename;
    } elseif (request()->remove == 1 && File::exists( $path .'/'. $ObjController)){
        File::delete($dir . $ObjController);
        $ObjController= null;
    } else {
        $ObjController= $oldfilename;
    }

}
//use with destroy or delete function in controller
public static function imageDelete($filename,$ObjController, $path = null)
{
    $dir = $path;//'uploads/'. $path .'/';
    if ($ObjController != '' && File::exists($dir . $ObjController)){
    File::delete($dir . $ObjController);
    }
}    
}
