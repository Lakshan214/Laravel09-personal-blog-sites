<?php

namespace App\Http\Controllers;

use App\Models\custeomer;
use Illuminate\Http\Request;

class admin extends Controller

{
    protected $task;


    public function __construct()
    {
        $this-> task =new custeomer();
    }
 




    public function index(){
        return view('welcome');
    }


    public function redirect()
    {
        return view('welcome');
    }

   public function custrome(Request $request){
 
    $this->task-> create($request->all());
    return redirect()->back();
}

public function custrome_view(){
  
  $response['task'] = $this->task->all(); 
  return view('admin.custromer')->with( $response);

}

 public function delete($task_id){

    $task=$this->task->find($task_id);

    $task->delete();

    return redirect()->back();


 }


}