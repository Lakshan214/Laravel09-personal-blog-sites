<?php

namespace App\Http\Controllers;

use App\Models\custeomer;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\blog;
use App\Models\cv;
use Illuminate\Console\View\Components\Alert as ComponentsAlert;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use PDF;

class admin extends Controller

{
    protected $task;
    protected $blog;


    public function __construct()
    {
        $this-> task =new custeomer();
        $this-> blog =new blog();
    }
 

  //  public function dminindex(){

  //   return View('admin.index');
  //  }


    public function index(){
        
        
        $response['blog'] = $this->blog->all();
        return view('welcome')->with( $response);
    }


    public function redirect()
    {
        return view('welcome');
    }



   public function custrome(Request $request){
    $this->task-> create($request->all());
    Alert::class::success('Msage Send!!!','We will contact you soon, Thank you ');
    return redirect()->back();
   
}

public function custrome_view(){
  
  $response['task'] = $this->task->all(); 
  return view('admin.custromer')->with( $response);

}

 public function delete($task_id){

    $task=$this->task->find($task_id);

    $task->delete();

    return redirect()->back()->with ('message',' Added Sucessfully!!');

 }




 public function blogAdd(){

    return view('admin.blogadd');
 }



 public function blogSavve(Request $request){
  
    $blog=new blog();
  $blog->subject=$request->subject;
  $blog->msg=$request->msg;
 
  $imagename=$request->img;
  $imagename=time().'.'.$request->img->extension();
  $request->img->move('img',$imagename);  
  $blog->img=$imagename;
  $blog->save();
  Alert::class::success(' Your Blog is  publish');
   return redirect()->back();

 } 

 public function blogView(){
  
  $response['blog'] = $this->blog->all(); 
  return view('admin.blogView')->with( $response);
}

public function blogdelete($blog_id){

  $blog=$this->blog->find($blog_id);
  $blog->delete();

  return redirect()->back()->with ('message',' Added Sucessfully!!');

}

public function blog(){
  $response['blog'] = $this->blog->all();
  return view('admin.blog')->with( $response);
}

public function edite($blog_id){
  $blog=blog::find($blog_id);
  return view('admin.edite',compact('blog'));
}

public function update(Request $request,$id){
  
  $blog=blog::find($id);
  $blog->subject=$request->subject;
  $blog->msg=$request->msg;
 

  // $blog=$request->img;
  

  // $imagename=$request->img;

 
  //  if($imagename)
  // {
  //   $imagename=time().'.'.$request->img->extension();
  //   $request->img->move('img',$imagename);  
  //   $blog->img=$imagename;
 
  
  // }
 
  $blog->save();
  Alert::class::success(' Your Blog is  Update');
  return redirect()->back();
}


public function printpdf(){
  $cv=cv::all();
  $pdf_file = PDF::class::loadView('admin.pdf',compact('cv'));
  
  return $pdf_file->download('CV.pdf');

}

public function cv(){
  $cv=cv::all();
  return view('admin.cv',compact('cv'));
}

public function SaveCV(Request $request){
  
  $blog=new cv();
  $imagename=$request->img;
  $imagename=time().'.'.$request->img->extension();
  $request->img->move('img',$imagename);  
  $blog->img=$imagename;
  $blog->save();
   
   return redirect()->back();

}

public function CVdelete(Request $request, $id){
  $cv=cv::Find($id);
  $cv->img=$request->img;
  $cv->delete();
  return redirect()->back();
}

}