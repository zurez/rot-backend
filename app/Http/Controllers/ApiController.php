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

   public function messages()
   {
       $gallery=Message::all();
      
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
}
