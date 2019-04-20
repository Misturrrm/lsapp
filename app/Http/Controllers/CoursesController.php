<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Catalogue;
use App\Department;
use App\Course;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use DB;

class CoursesController extends Controller
{
    
 //     use ValidatesRequests;
 //      /**
 //      * Create a new controller instance.
 //      *
 //      * @return void
 //      */
 //     public function __construct()
 //  u   {
 //         $this->middleware('auth', ['except' => ['index','show']]);
 //     }
 //     /**
 //      * Display a listing of the resource.
 //      *
 //      * @return \Illuminate\Http\Response
 //      */
    public function index()
     {
      //$catalogues = Catalogue::all();
      $department = Department::all();
      $course = Course::all();
 //         //return Post::where('title', 'Post Two')-> get();
 //         //$posts = DB::select('SELECT * FROM posts');
 //         //$posts = Post::orderBy('title', 'desc') -> take(1)->get();
         
 // $posts = Post::orderBy('created_at', 'desc') -> paginate(10);
       // $catalogues = Catalogue::all();
       return view('courses.index' )->with(
        array('departments' => $department,
              'courses' => $course));
         
    }

    public function cs2014() 
    {
        $catalogues = DB::table('catalogues')
        ->select('year')
        ->where('year', '=','2014')
        ->get();

        $department = DB::table('department')
        //->join('catalogues', 'catalogues.year', '=','department.catalogue_year')
        ->select('dept_id','dept_name')
        ->get();
        $course = DB::table('course')
        ->select('course_code')
        ->where('department_id', '=','1')
        ->get();

        return view ('courses.cs2014')->with(
            array('catalogues' => $catalogues,'departments' => $department,
                  'courses' => $course));

    }

    public function se2014() 
    {
        $catalogues = DB::table('catalogues')
        ->select('year')
        ->where('year', '=','2014')
        ->get();

        $department = DB::table('department')
        //->join('catalogues', 'catalogues.year', '=','department.catalogue_year')
        ->select('dept_id','dept_name')
        ->get();
        $course = DB::table('course')
        ->select('course_code')
        ->where('department_id', '=','1')
        ->get();

        return view ('courses.se2014')->with(
            array('catalogues' => $catalogues,'departments' => $department,
                  'courses' => $course));

    }

    public function is2014() 
    {
        $catalogues = DB::table('catalogues')
        ->select('year')
        ->where('year', '=','2014')
        ->get();

        $department = DB::table('department')
        //->join('catalogues', 'catalogues.year', '=','department.catalogue_year')
        ->select('dept_id','dept_name')
        ->get();
        $course = DB::table('course')
        ->select('course_code')
        ->where('department_id', '=','1')
        ->get();

        return view ('courses.is2014')->with(
            array('catalogues' => $catalogues,'departments' => $department,
                  'courses' => $course));

    }

    public function CSSheet2014() {
        $catalogues = DB::table('catalogues')
        ->select('year')
        ->where('year', '=','2014')
        ->get();

        $department = DB::table('department')
        //->join('catalogues', 'catalogues.year', '=','department.catalogue_year')
        ->select('dept_id','dept_name')
        ->get();
        $course = DB::table('course')
        ->select('course_code')
        ->where('department_id', '=','1')
        ->get();

        return view ('courses.is2014')->with(
            array('catalogues' => $catalogues,'departments' => $department,
                  'courses' => $course));

    }
 
    public function csstudyguide2014(){
        return view ('courses.csstudyguide2014');
    }

    public function csrequirements2014(){
        $catalogues = DB::table('catalogues')
        ->select('year')
        ->where('year', '=','2014')
        ->get();

        $department = DB::table('department')
        //->join('catalogues', 'catalogues.year', '=','department.catalogue_year')
        ->select('dept_id','dept_name')
        ->get();

        $course = DB::table('course')
            ->select('course_code')
            ->where('major_requirement', '=','1')
            ->get();

       

        return view('courses.csrequirements2014')->with(
            array('catalogues' => $catalogues,'departments' => $department,
                  'courses' => $course));
    }
 
 //     /**
 //      * Show the form for creating a new resource.
 //      *
 //      * @return \Illuminate\Http\Response
 //      */
      public function create()
      {
          return view('catalogues.create');
 
          
          
      }
 
 //     /**
 //      * Store a newly created resource in storage.
 //      *
 //      * @param  \Illuminate\Http\Request  $request
 //      * @return \Illuminate\Http\Response
 //      */
      public function store(Request $request)
      {
          
          $this ->validate($request, [
              'course_id' => 'required',
              'course_code' => 'required',
              'course_name' => 'required',
              'credits'=> 'required',
              'department_id' => 'required',
              'course_catalogue_year'=> 'required',
              'major_requirement'=> 'required',
              //'dept_id'=>'required'
 
         ]);

           // Create Catalogue
           $course = new Course;
      
           $course->course_code = $request->input('course_code');
           $course->course_name = $request->input('course_name');
           $course->course_id = $request->input('course_id');
           $course->credits = $request->input('credits');
           $course->department_id= $request->input('department_id');
           $course->course_catalogue_year = $request->input('course_catalogue_year');

          //$catalogue->id = $request->input('id');
          //$catalogue->admin_id = $request->input('admin_id');
          
           // Create Department
          // $department = new Department;
           //$department->dept_name = $request->input('dept_name');
           //$department->dept_id = $request->input('dept_id');
           //$catalogue->year = auth()->user()->id;
  //         $post->cover_image = $fileNameToStore;
          //$catalogue->user()->associate($user);
           //$course_code->save();
           //$course_name->save();
           $course->save();
           //$department->save();
            return redirect('/catalogues/2014/Computer Science')->with('success', 'Course has been Created');
         
 //             'cover_image' => 'image|nullable|max:1999'
          
 
 //         //Handle file upload
 
 //         if($request->hasFile('cover_image')){
 //             // Get Filename with the extension
 //             $fileNameWithExt = $request->file('cover_image')->getClientOriginalName();
 
 //             // Get just filename
 //             $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
 //             // Get just ext
 //             $extension = $request->file('cover_image')->getClientOriginalExtension();
 //             // Filename to store
 //            $fileNameToStore = $filename.'_'.time().'.'.$extension;
 
 //             // Upload Image
 //             $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
 //         q} else {
 //             $fileNameToStore = 'noimage.jpg';
        
         
 //         // Create Catalogue
          //$catalogue = new Catalogue;
          //$catalogue->year = $request->input('year');
         //$catalogue->id = $request->input('id');
         //$catalogue->admin_id = $request->input('admin_id');
         
          // Create Department
         // $department = new Department;
          //$department->dept_name = $request->input('dept_name');
          //$department->dept_id = $request->input('dept_id');
          //$catalogue->year = auth()->user()->id;
 //         $post->cover_image = $fileNameToStore;
         //$catalogue->user()->associate($user);
          //$catalogue->save();
          //$department->save();
          // return redirect('/catalogues')->with('success', 'Catalogue Created');
 
         
         
    }
 
 //     /**
 //      * Display the specified resource.
 //      *
 //      * @param  int  $id
 //      * @return \Illuminate\Http\Response
 //      */
      public function show($catalogues)
      {
          $catalogue = Catalogue::find($catalogues);
          
          //$department = Department::find($department);
         return view('catalogues.show') ->with('catalogue', $catalogue);
 
      }
 
 
 
 //     /**
 //      * Show the form for editing the specified resource.
 //      *
 //      * @param  int  $id
 //      * @return \Illuminate\Http\Response
 //      */
      public function edit($id)
      {
 //         $post = Post::find($id);
 
 //     // Check for correct 'user
 //     if (auth() ->user()->id !== $post->user_id){
 //         return redirect('/posts')->with('post', 'Unauthorized Page');
 //     }
 //     return view('posts.edit') ->with('post', $post);
  }
 
     
 //     /**
 //      * Update the specified resource in storage.
 //      *
 //      * @param  \Illuminate\Http\Request  $request
 //      * @param  int  $id
 //      * @return \Illuminate\Http\Response
 //      */
      public function update(Request $request, $id)
      {
          $this ->validate($request, [
            'course_id' => 'required',
            'course_code' => 'required',
            'course_name' => 'required',
            'credits'=> 'required',
            'department_id' => 'required',
            'course_catalogue_year'=> 'required',
        ]);
 
 //          //Handle file upload
 
 //         if($request->hasFile('cover_image')){
 //             // Get Filename with the extension
 //             $fileNameWithExt = $request->file('cover_image')->getClientOriginalName();
 
 //             // Get just filename
 //             $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
 //             // Get just ext
 //             $extension = $request->file('cover_image')->getClientOriginalExtension();
 //             // Filename to store
 //            $fileNameToStore = $filename.'_'.time().'.'.$extension;
 
 //             // Upload Image
 //             $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
         
 //         }
 //         // Create Post
 //         $post = Post::find($id);
 //         $post ->title = $request->input('title');
 //         $post ->body = $request->input('body');
 //         if($request->hasFile('cover_image')){
 //             $post->cover_image =$fileNameToStore;
 //         }
 //         $post->save();
 //          return redirect('/posts')->with('success', 'Post Updated');
      }
 
 
 
 //     /**
 //      * Remove the specified resource from storage.
 //      *
 //      * @param  int  $id
 //      * @return \Illuminate\Http\Response
 //      */
      public function destroy($id)
      {
             $catalogue = Catalogue::find($id);
     //         // Check for correct user
     //    if (auth() ->user()->id !== $post->user_id){
     //         return redirect('/posts')->with('post', 'Unauthorized Page');
     //     }
 
     //     if($post->cover_image != 'noimage.jpg'){
     //         // Delete Image
     //         Storage::delete('public/cover_images/'.$post->cover_image);
     //     }
             $catalogue ->delete();
              return redirect('/catalogues')->with('success', 'Catalogue Deleted');
     //     }
     }
  }
 