<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use URL,QrCode;


class ZcardController extends Controller
{

    public function index()
    {      
        $data['card_front'] = asset('images/card/card250x350-01.jpg');
        $data['card_back'] = asset('images/card/card250x350-02.jpg');
        $data['profile'] =  asset('assets/images/avatars/avatar4.png');
        $data['qr_code'] =  asset('images/qr.png');
        return view('z-card', $data);
    }

    public function result(Request $request)
    {    

        $response = array();
    
        $settingProfile = json_decode($request->profile);
        $settingName_KM = json_decode($request->name_km);
        $settingName_EN = json_decode($request->name_en);
      
        $settingGender  = json_decode($request->gender);
        $settingCourse  = json_decode($request->course);
        $settingId      = json_decode($request->id);
        $settingQr      = json_decode($request->qr);
        
        $file_tmp_front_card = false;
        if($request->hasFile('front_card')){
            $file = $request->front_card;           
            $file_tmp  = $file->getPathName();  
            $file_type = $file->getMimeType();  
            $file_str  = file_get_contents($file_tmp);
            $tob64img  = base64_encode($file_str);
            $file_tmp_front_card = 'data:'. $file_type .';base64,'. $tob64img;  
        }

        $file_tmp_back_card = false;
        if($request->hasFile('back_card')){
            $file = $request->back_card;           
            $file_tmp  = $file->getPathName();  
            $file_type = $file->getMimeType();  
            $file_str  = file_get_contents($file_tmp);
            $tob64img  = base64_encode($file_str);
            $file_tmp_back_card = 'data:'. $file_type .';base64,'. $tob64img;  
        }

        $students = Student::get();
        if($students){
            $Allcards = array();
            $card_front = [
                    'x'     => 0,
                    'y'     => 0,
                    'width' => 250 ,
                    'height' => 350, 
                    'image' => $file_tmp_front_card ? $file_tmp_front_card : asset('images/card/card250x350-01.jpg')
                ];
              
            $card_back  = [
                    'x'     => 252,
                    'y'     => 0,
                    'width' => 250 ,
                    'height' => 350, 
                    'image' =>$file_tmp_back_card ? $file_tmp_back_card : asset('images/card/card250x350-02.jpg')
                ];
            $textColor ='#23499E';
    
    
            foreach ($students as $key => $row) {
                $profile = asset('assets/images/avatars/avatar4.png');
                $id      = $row->id;
                $name_km = $row->first_name;
                $name_en = $row->last_name;
                $gender  = ($row->gender == 1) ? 'ប្រុស' : 'ស្រី';
                $course  = 'ព័ត៌មានវិទ្យាសាស្រ្តកំព្យទ័រ';
    
                $MAKE_QR_CODE = array(
                    'id' => $row->id,
                    //'name' => $row->first_name,
                    //'postion'=> 'student'
        
                );
                $serialize  = serialize($MAKE_QR_CODE);
                $encrypt    = base64_encode($serialize);       
                $QRCODE_N_URL = url('/qr/code').'/'.$encrypt;
                $path = public_path('/assets/images/avatars/');
                $qr_img_center = $row->student_image ? $path.$row->student_image : $path.'avatar4.png';
                if(!file_exists($qr_img_center)){
                    $qr_img_center   = $path.'avatar4.png';
                }
                $QRCODE = base64_encode(QrCode::format('png')
                    ->color(38, 38, 38, 0.85)
                    ->backgroundColor(255, 255, 255, 0.82)
                    ->size(70)
                    ->merge($qr_img_center,.1,true)
                    ->generate($QRCODE_N_URL));
    
                $qrCode  = 'data:image/png;base64,'.$QRCODE;
                $make_card = [
                    'id' => str_replace(' ','-',$name_en).'-'.$id,
                    'attrs' => [
                        'width' => 502,
                        'height' => 350,
                    ],
                    'className' => 'Stage',
                    'children' =>
                    [
                        [
                            'attrs' => [],
                            'className' => 'Layer',
                            'children' => [
                                [
                                    'attrs' =>
                                    [
                                        'x'=> $card_front['x'],
                                        'y'=> $card_front['y'],
                                        'width'=> $card_front['width'],
                                        'height'=> $card_front['height'],
                                        'source' => $card_front['image'],
                                    ],
                                    'className' => 'Image',
                                ],
                               
                                [
                                    'attrs' =>
                                    [
                                        'x'=> $card_back['x'],
                                        'y'=> $card_back['y'],
                                        'width'=> $card_back['width'],
                                        'height'=> $card_back['height'],
                                        'source' => $card_back['image'],
                                    ],
                                    'className' => 'Image',
                                ],
                            ],
                        ],
    
                        [
                            'attrs' => [],
                            'className' => 'Layer',
                            'children' => [
                                [
                                    'attrs' => [
                                        'x'          => $settingId ? $settingId->x : 100,
                                        'y'          => $settingId ? $settingId->y : 292,
                                        'text'       =>  $id,
                                        'name'       => 'id',
                                        'fill'       => $textColor,
                                        'scaleX'     => $settingId ? $settingId->scaleX : 1,
                                        'scaleY'     => $settingId ? $settingId->scaleY : 1,
                                        'offsetX'    => $settingId ? $settingId->offsetX :0,
                                        'offsetY'    => $settingId ? $settingId->offsetY :0,
                                        'skewX'      => $settingId ? $settingId->skewX : 0,
                                        'skewY'      => $settingId ? $settingId->skewY : 0,                                  
                                        'fontSize'   => $settingId ? $settingId->fontSize : 14,
                                        'fontFamily' => $settingId ? $settingId->fontFamily : 'NiDAKhmerEmpire',
                                        'fontStyle' =>  $settingId ? $settingId->fontStyle : 'normal',                                     
                                        'width'      => $settingId ? $settingId->width : 150,
                                        'height'     => $settingId ? $settingId->height : 14,
                                    ],
                                    'className' => 'Text',
                                ],
                                [
                                    'attrs' => [                                    
                                        'x'          => $settingName_KM ? $settingName_KM->x : 100,
                                        'y'          => $settingName_KM ? $settingName_KM->y : 205,
                                        'text'       =>  $name_km,
                                        'name'       => 'name_km',
                                        'fill'       => $textColor,
                                        'scaleX'     => $settingName_KM ? $settingName_KM->scaleX : 1,
                                        'scaleY'     => $settingName_KM ? $settingName_KM->scaleY : 1,
                                        'offsetX'    => $settingName_KM ? $settingName_KM->offsetX :0,
                                        'offsetY'    => $settingName_KM ? $settingName_KM->offsetY :0,
                                        'skewX'      => $settingName_KM ? $settingName_KM->skewX : 0,
                                        'skewY'      => $settingName_KM ? $settingName_KM->skewY : 0,                                  
                                        'fontSize'   => $settingName_KM ? $settingName_KM->fontSize : 14,
                                        'fontFamily' => $settingName_KM ? $settingName_KM->fontFamily : 'NiDAKhmerEmpire', 
                                        'fontStyle' =>  $settingName_KM ? $settingName_KM->fontStyle : 'normal',                                
                                        'width'      => $settingName_KM ? $settingName_KM->width : 150,
                                        'height'     => $settingName_KM ? $settingName_KM->height : 14,
                                    ],                                 
                                    'className' => 'Text',
                                ],
                                [
                                    'attrs' =>
                                    [
                                        
                                        'x'          => $settingName_EN ? $settingName_EN->x : 100,
                                        'y'          => $settingName_EN ? $settingName_EN->y : 226,
                                     
                                        'text'       =>  $name_en,
                                        'name'       => 'name_en',
                                        'fill'       => $textColor,
                                        'scaleX'     => $settingName_EN ? $settingName_EN->scaleX : 1,
                                        'scaleY'     => $settingName_EN ? $settingName_EN->scaleY : 1,
                                        'offsetX'    => $settingName_EN ? $settingName_EN->offsetX :0,
                                        'offsetY'    => $settingName_EN ? $settingName_EN->offsetY :0,
                                        'skewX'      => $settingName_EN ? $settingName_EN->skewX : 0,
                                        'skewY'      => $settingName_EN ? $settingName_EN->skewY : 0,                                  
                                        'fontSize'   => $settingName_EN ? $settingName_EN->fontSize : 14,
                                        'fontFamily' => $settingName_EN ? $settingName_EN->fontFamily : 'NiDAKhmerEmpire', 
                                        'fontStyle' =>  $settingName_EN ? $settingName_EN->fontStyle : 'normal',                                
                                        'width'      => $settingName_EN ? $settingName_EN->width : 150,
                                        'height'     => $settingName_EN ? $settingName_EN->height : 14,
                                    ],
                                    'className' => 'Text',
                                ],
                                [
                                    'attrs' => [
                                    
                                        'x'          => $settingCourse ? $settingCourse->x : 100,
                                        'y'          => $settingCourse ? $settingCourse->y : 272,
                                        'text'       =>  $course,
                                        'name'       => 'course',
                                        'fill'       => $textColor,
                                        'scaleX'     => $settingCourse ? $settingCourse->scaleX : 1,
                                        'scaleY'     => $settingCourse ? $settingCourse->scaleY : 1,
                                        'offsetX'    => $settingCourse ? $settingCourse->offsetX :0,
                                        'offsetY'    => $settingCourse ? $settingCourse->offsetY :0,
                                        'skewX'      => $settingCourse ? $settingCourse->skewX : 0,
                                        'skewY'      => $settingCourse ? $settingCourse->skewY : 0,                                  
                                        'fontSize'   => $settingCourse ? $settingCourse->fontSize : 14,
                                        'fontFamily' => $settingCourse ? $settingCourse->fontFamily : 'NiDAKhmerEmpire',
                                        'fontStyle' =>  $settingCourse ? $settingCourse->fontStyle : 'normal',                                     
                                        'width'      => $settingCourse ? $settingCourse->width : 150,
                                        'height'     => $settingCourse ? $settingCourse->height : 14,
                                    ],
                                    'className' => 'Text',
                                ],
                                [
                                    'attrs' => [
                                                                            
                                        'x'          => $settingGender ? $settingGender->x : 100,
                                        'y'          => $settingGender ? $settingGender->y : 248,
                                        'text'       =>  $gender,
                                        'name'       => 'gender',
                                        'fill'       => $textColor,
                                        'scaleX'     => $settingGender ? $settingGender->scaleX : 1,
                                        'scaleY'     => $settingGender ? $settingGender->scaleY : 1,
                                        'offsetX'    => $settingGender ? $settingGender->offsetX :0,
                                        'offsetY'    => $settingGender ? $settingGender->offsetY :0,
                                        'skewX'      => $settingGender ? $settingGender->skewX : 0,
                                        'skewY'      => $settingGender ? $settingGender->skewY : 0,                                  
                                        'fontSize'   => $settingGender ? $settingGender->fontSize : 14,
                                        'fontFamily' => $settingGender ? $settingGender->fontFamily : 'NiDAKhmerEmpire',
                                        'fontStyle' =>  $settingGender ? $settingGender->fontStyle : 'normal',                                     
                                        'width'      => $settingGender ? $settingGender->width : 150,
                                        'height'     => $settingGender ? $settingGender->height : 14,
                                    ],
                                    'className' => 'Text',
                                ],
    
                                [
                                    'attrs' => [
                                        'x' => $settingProfile ? $settingProfile->x : 90,
                                        'y' => $settingProfile ? $settingProfile->y : 110,
                                        'scaleX' => $settingProfile ? $settingProfile->scaleX : 1,
                                        'scaleY' => $settingProfile ? $settingProfile->scaleY : 1,
                                        'offsetX' => $settingProfile ? $settingProfile->offsetX :0,
                                        'offsetY' => $settingProfile ? $settingProfile->offsetY :0,
                                        'skewX' =>$settingProfile ? $settingProfile->skewX : 0,
                                        'skewY' =>$settingProfile ? $settingProfile->skewY : 0,
                                        'width' => $settingProfile ? $settingProfile->width : 75,
                                        'height' => $settingProfile ? $settingProfile->height :  80,
                                        'source'=> $profile,
                                        'name' => 'profile',
                                    ],
                                    'className' => 'Image',
                                ],
    
                                [
                                    'attrs' =>
                                    [
                                       
                                        
                                        'x' => $settingQr ? $settingQr->x : 350,
                                        'y' => $settingQr ? $settingQr->y : 102,
                                        'scaleX' => $settingQr ? $settingQr->scaleX : 1,
                                        'scaleY' => $settingQr ? $settingQr->scaleY : 1,
                                        'offsetX' => $settingQr ? $settingQr->offsetX :0,
                                        'offsetY' => $settingQr ? $settingQr->offsetY :0,
                                        'skewX' =>$settingQr ? $settingQr->skewX : 0,
                                        'skewY' =>$settingQr ? $settingQr->skewY : 0,
                                        'width' => $settingQr ? $settingQr->width : 70,
                                        'height' => $settingQr ? $settingQr->height :  70,
                                        'source'=> $qrCode,
                                        'name' => 'qr-code',
                                    ],
                                    'className' => 'Image',
                                ],
                            ],
                        ],
                    ],
                ];
                $Allcards[] = $make_card;
          
            }      
           
            $response = array(
                'success'   => true,
                'data'      => $Allcards
            );
            //$data['all_cards'] = $Allcards;
            //return view('z-card-result', $data);
        }else{
            $response = array(
                'success'   => false,
                'error'     => true,
                'message'   => 'No Record.'
            );
        }
              
        return $response;
    }
}
