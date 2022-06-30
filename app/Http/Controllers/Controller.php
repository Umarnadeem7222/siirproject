<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\form;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function submit(Request $request)
    {  
        
        $mrn = $request->input('name');
      
        $hello = [

            $data = new form(),

            $data->name = request('name'),
            $data->email = request('Email'),
            $data->Phone = request('Phone'),
            $data->exp = request('exp'),
            $data->Region = request('Region'),
            $data->Address = request('Address'),
            $data->skill = request('skill'),
            $data->ind = request('ind'),
            $data->salary = request('salary'),
            $data->remarks = request('remarks'),
         
            $data->save(),
            'title' => 'Welcome to ItSolutionStuff.com',
            'date' => date('m/d/Y'),
        ];
        //$customPaper = array(0,0,650,530);
          
        //$pdf = PDF::loadView('myPDF', $hello ,compact('data'))->setPaper($customPaper, 'landscape');;
        if($request->IsMethod('post')){
            $request->validate([
             'file' => 'required|file|mimes:jpg,jpeg,bmp,png,doc,docx,csv,rtf,xlsx,xls,txt,pdf,zip',
         ]);
         $oname = $request->file->GetClientOriginalName();
         $fileName = time().'.'.$request->file->extension();  
         
        $path =  $request->file->move(public_path('file'), $fileName);
         $data = $request->all();
         $newfile = new form;
         $newfile->save();
    
   
        
        return view("welcome",compact('mrn','data'));
    }

    }}