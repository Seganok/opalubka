<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use Illuminate\Support\Facades\File;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks=Task::orderBy('id')->get();
        return view('/home',['tasks'=>$tasks]);
    }
     public function create()
    {
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $lot = new Task;
        $lot->title = $request->title;
        $lot->slug = $request->title;
        $lot->izmer = $request->izmer;
        $lot->price = $request->price;
        $lot->otovare = $request->otovare;
        $lot->type = $request->type;
        if($request->hasFile('image')){
            $file= $request->file('image');
            $filename = $file->getClientOriginalName();
            $file->move('images',$filename);
        $lot->image = '/images/'.$filename;
        $lot->save();
        return redirect('home')->with('status','Запись успешно добавлена');
        }else{
            $lot->save();
            return redirect('home')->with('status','Запись успешно добавлена');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tasks = Task::findOrFail($id);
        return view('pages.edit',['tasks'=>$tasks]);    
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
        $lot = Task::findOrFail($id);
        $lot->title = $request->title;
        $lot->slug = $request->title;
        $lot->izmer = $request->izmer;
        $lot->price = $request->price;
        $lot->otovare = $request->otovare;
        $lot->type = $request->type;
        if($request->hasFile('image')){
            $file= $request->file('image');
            $filename = $file->getClientOriginalName();
            $file->move('images',$filename);
        $lot->image = '/images/'.$filename;
        $lot->save();
        return redirect('home')->with('status','Запись успешно добавлена');
        }else{
            $lot->save();
            return redirect('home')->with('status','Запись успешно добавлена');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        $task = Task::findOrFail($id);
        if (File::exists(public_path($task->image))) {
            File::delete(public_path($task->image));
            $task->delete();
            }
        else
           $task->delete();

        return redirect()->back()->with('status','Запись успешно удалена');
    }
}
