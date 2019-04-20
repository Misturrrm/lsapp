<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Department;
use App\Catalogue;
use App\Admin;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use DB;


class DepartmentsController extends Controller
{
        use ValidatesRequests;
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index','show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function index()
    {
        $catalogues = DB::table('catalogues')
                    ->select('year')
                    ->where('year', '=','2014')
                    ->get();
        //print_r($catalogues);exit;
        $department = DB::table('department')
                    ->join('catalogues', 'catalogues.year', '=','department.catalogue_year')
                    ->select('dept_id','dept_name')
                    ->get();
        
        // var_dump($catalogues);
        //$department = DB::select('SELECT * FROM department');

        return view('departments.index' )->with(
            array('departments' => $department,
                  'catalogues' => $catalogues));
        //$admin_id= auth() ->user()->id;
        //$user = Admin::find($admin_id);
       
   }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function create()
     {
         return view ('department.create');

     }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function store(Request $request)
     {
        $this ->validate($request, [
            
            //'admin_id' => 'required',
            'dept_name'=> 'required',
            //'dept_id'=>'required'

       ]);
        
   }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function show($department)
     {
        //$catalogues = Catalogue::all();
        //print_r($catalogues);exit;
        //$department = Department::all();
        $catalogues = Catalogue::find($catalogues);
        $department = Department::find($department);
        
        //$department = Department::all();
        // $department = Department::find($department);
       return view('departments.show' )->with(
            array('departments' => $department,
                  'catalogues' => $catalogues));
     }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function edit($id)
     {
 }

    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function update(Request $request, $id)
     {
     }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function destroy($id)
     {
    }
 }

