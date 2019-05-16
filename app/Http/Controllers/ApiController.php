<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Gallery;
use App\GalleryImage;
use App\Message;
use App\NewsLetter;
use App\Bearers;
use App\User;
use App\Volunteer;
use App\Timeline;
use DB;
class ApiController extends Controller
{
   public function gallery()
   {
       $gallery=Gallery::all();
       foreach ($gallery as $g) {

           $g->images=GalleryImage::where('gallery_id',$g->id)->get();
       }
       return response()->json($gallery);
   }

   public function galleryimage($gallery_id)
   {
       return response()->json(GalleryImage::where('gallery_id',$gallery_id)->get());
   }

   public function messages($user_id=null)
   {
       $gallery=Message::all();

       ;
       if($user_id){
       // $gallery=$gallery->where('volunteer.user_id',$user_id)->where('');
       }
       
      
       return response()->json($gallery);
   
   }

   public function newsletter()
   {
    return response()->json(NewsLetter::all());
   }

   public function bearers()
   {
        $bearers=Bearers::all();
        foreach ($bearers as $b) {
            $b->user=User::find($b->user_id);
        }
       return response()->json($bearers);
   }

   public function volunteer(Requests $r)
   {
    $does_exist=Volunteer::where('event_id',$r->event_id)->where('user_id',$r->user_id)->get();

    if(sizeof($does_exist)>0){
      return response()->json(['status'=>'notok']);
    }
       $v= new Volunteer;
       $v->user_id=$r->user_id;
       $v->event_id=$r->event_id;
       $v->save();

       return response()->json(['status'=>'ok','user_id'=>$r->user_id,'event_id'=>$r->event_id]);
   }


   public function timeline()
   {
      $timeline=DB::select(DB::raw("
          SELECT timeline.date as time,
          timeline.title,
          timeline.description
          FROM 
          timeline
          order by timeline.date desc
        "));
      return response()->json(['timeline'=>$timeline]);
   }
}
