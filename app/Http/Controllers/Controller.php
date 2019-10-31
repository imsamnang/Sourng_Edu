<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
   use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
  function make_slug($string) {
    // return preg_replace('/\s+/u', '-', trim($string));
    return str_replace('?', '', preg_replace('/\s+/u', '-', trim($string)));
  }

    // $('#title').on('blur',function(){
    //   var theTitle = this.value.toLowerCase().trim(),
    //     slugInput = $('#slug'),
    //     theSlug = theTitle.replace(/&/g,'-and-')
    //                       .replace(/[^a-z0-9-]+/g,'-')
    //                       .replace(/\-\-+/g,'-')
    //                       .replace(/^-+|-+$/g,'');

    //     slugInput.val(theSlug);
    // });
    
}
