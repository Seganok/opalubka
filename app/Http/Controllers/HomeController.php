<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;


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
        $tasks=Task::all();
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
        $file= $request->file('image');
        $filename = $file->getClientOriginalName();
        $file->move('images',$filename);
        $lot->image = '/public/'.$filename;
        $lot->save();
        return redirect('home')->with('status','Запись успешно добавлена');
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
        $file= $request->file('image');
        $filename = $file->getClientOriginalName();
        $file->move('images',$filename);
        $lot->image = '/public/'.$filename;
        $lot->image = $request->image;
        $lot->save();
        return redirect('home')->with('status','Запись успешно изменена');
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
        $task->delete();

        return redirect('home')->with('status','Запись успешно удалена');
    }
}
