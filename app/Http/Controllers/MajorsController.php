<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Major;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use DB;
class MajorsController extends Controller
{
    //
    public function index()
    {
     $majors = Major::all();
     
//         //return Post::where('title', 'Post Two')-> get();
//         //$posts = DB::select('SELECT * FROM posts');
//         //$posts = Post::orderBy('title', 'desc') -> take(1)->get();
        
// $posts = Post::orderBy('created_at', 'desc') -> paginate(10);
      // $catalogues = Catalogue::all();
      return view('majors.index' )->with('majors', $majors);
        
   }
}