<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
    function home(){
        return view('web/home');
    }
    function index(){
        return redirect()->to(route('transcriptlist'));
    }

    function apply(){
        return view('web/apply');
    }
    function saveapplication(Request $request){
        $task = new \App\Models\applytranscript();
        $task->name = $request->name;
        $task->matricule = $request->matricule;
        $task->faculty = $request->faculty;
        $task->department = $request->department;
        $task->degree = $request->degree;
        $task->status = $request->status;
        $task->level = $request->level;
        $task->mode = $request->mode;
        $task->email = $request->email;
        $task->number = $request->number;
        $task->amount = $request->amount;
        
        $task->location = $request->location;
        $task->address = $request->address;
        
        
        $task->save();
        // $task->id

        return view('web/success', compact('task'));
    //    echo(json_encode($request->all()));
    }

    function search(){
        return view('web/search');
    }
    
    
    function delivery(){
        $transcripts = \App\Models\applytranscript::get();
        return view('adminn/delivery', compact('transcripts'));
    }
    

    function checktranscript(Request $request){
        // dd($request->transid);

        $task = \App\Models\uploadtrans::where('transid',$request->transid)->first();
        if($task){
            return view('web/verifytran', compact('task'));
        }else{
            return view('web/search');
        }
    }
    
    function payment(){
        return view('web/payment');
    }
    function success(){
        return view('web/success');
    }
    
    function mode(){
        return view('web/mode');
    }

    function contact(){
        return view('web/contact');
    }
    function savecomplain(Request $request){
        $complain = new \App\Models\contact();
        $complain->matricule = $request->matricule;
        $complain->faculty = $request->faculty;
        $complain->email = $request->email;
        $complain->message = $request->message;
        $complain->save();
        return view('web/consuccess', compact('complain'));
    }

    function pay(){
        return view('adminn/pay');
    }

    function uploaded(){
        return view('adminn/uploaded');
    }

    function transupload(Request $request){
        $trans = \App\Models\uploadtrans::where('transid',  $request->transid)->first();
        $trans = $trans?$trans:(new \App\Models\uploadtrans());

        $trans = new \App\Models\uploadtrans();
        
        $trans->transid = $request->transid;
    
        if($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getclientOriginalExtension();
            $filename = time(). '.' .$extension;
            $file->move('upload/trans/', $filename);
            $trans->image = $filename; 
        }else{

            return $request;
            $trans->image ='';
        }

        $trans->save();
        return view('adminn/successupload');
       
    }

    function dashboard(){
        return view('adminn/dashboard');
    }
    function login(){
        return view('auth/login');
    }
    function transcriptlist(){
        $transcripts = \App\Models\applytranscript::get();
        return view('adminn/transcriptlist', compact('transcripts'));

    }























































































































































    
    function transcriptdetail(){
        $transcripts = \App\Models\applytranscript::get();
        return view('adminn/transcriptdetail', compact('transcripts'));
    }
}
