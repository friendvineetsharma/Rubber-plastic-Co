<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\User;
use App\service;
use App\rubbersheet;
use Validator;
use Auth;

class MainController extends Controller
{
  function index()
  {
   return view('login');
  }

  function services(){
    $data= service::all();
    return view('services',['data'=>$data]);
  }

  function card(Request $request)
  {
    $data = rubbersheet::where('id',$request->get('id'))->get();
    return view('card',['data' => $data]);
  }

  function del(Request $request)
  {
    rubbersheet::where('id',$request->get('id'))->delete();
    return redirect('/erubber_sheets');
  }

  function rubber_sheets()
  {
    $data = rubbersheet::all();
    return view('rubber_sheets',['data' => $data ]);
  }

  function add_s()
  {
   return view('add_s');
  }

  function rs_add(Request $request)
  {
    $this->validate($request, [
     'rsname'   => 'required|unique:services,sname',
     'rsprice'  => 'required',
     'rscategory'  => 'required',
     'rsintro'  => 'required|min:10',
     'rsdescription'  => 'required|min:10',
     'rswidth'  => 'required',
     'rslenght'  => 'required',
     'rsthickness'  => 'required',
     'rsreinforcement'  => 'required',
     'rscolor'  => 'required',
     'rsapplication'  => 'required',
     'rsgravity'  => 'required',
     'rshardness'  => 'required',
     'rstensile'  => 'required',
     'rselongation'  => 'required',
     'rscompression'  => 'required',
     'rstemp'  => 'required',
     'rsimg1'  => 'required',
     'rsimg2'  => 'required',
     'rsimg3'  => 'required',
    ]);

    if($request->file('rsimg1') && $request->file('rsimg2') && $request->file('rsimg3'))
        {
          $images = array(
            'rsimg1' => $request->file('rsimg1'),
            'rsimg2' => $request->file('rsimg2'),
            'rsimg3' => $request->file('rsimg3'),
          );
          foreach ($images as $item):
            $var = date_create();
            $time = date_format($var, 'YmdHis');
            $pin = mt_rand(100000, 999999);
            $imageName = $time . $pin . '.' . $item->extension();
            $item->move(public_path('assets/img/rubbersheets'),$imageName);
            $arr[] = $imageName;
        endforeach;
        $rubbersheet = new rubbersheet;
        $rubbersheet->rsname = $request->input('rsname');
        $rubbersheet->rsprice = $request->input('rsprice');
        $rubbersheet->rscategory = $request->input('rscategory');
        $rubbersheet->rsintro = $request->input('rsintro');
        $rubbersheet->rsdescription = $request->input('rsdescription');
        $rubbersheet->rswidth = $request->input('rswidth');
        $rubbersheet->rslenght = $request->input('rslenght');
        $rubbersheet->rsthickness = $request->input('rsthickness');
        $rubbersheet->rsreinforcement = $request->input('rsreinforcement');
        $rubbersheet->rscolor = $request->input('rscolor');
        $rubbersheet->rsapplication = $request->input('rsapplication');
        $rubbersheet->rsgravity = $request->input('rsgravity');
        $rubbersheet->rshardness = $request->input('rshardness');
        $rubbersheet->rstensile = $request->input('rstensile');
        $rubbersheet->rselongation = $request->input('rselongation');
        $rubbersheet->rscompression = $request->input('rscompression');
        $rubbersheet->rstemp = $request->input('rstemp');
        $rubbersheet->rsimg1 = $arr[0];
        $rubbersheet->rsimg2 = $arr[1];
        $rubbersheet->rsimg3 = $arr[2];
        $rubbersheet->save();
          return redirect('http://127.0.0.1:8000/erubber_sheets');
        }
     else {
       return back()->with('error', 'Wrong Login Details');
     }
  }

  function add_rs()
  {
   return view('Add-Product.add_rs');
  }

  function s_add(Request $request)
  {
    $this->validate($request, [
     'sname'   => 'required|unique:services,sname',
     'sdescription'  => 'required|min:10'
    ]);

    $service = service::create(request(['sname', 'sdescription']));
    return redirect('/eservices');
  }

  function checklogin(Request $request)
    {
     $this->validate($request, [
      'email'   => 'required|email',
      'password'  => 'required|alphaNum|min:3'
     ]);

     $user_data = array(
      'email'  => $request->get('email'),
      'password' => $request->get('password')
     );

     if(Auth::attempt($user_data))
     {
      return redirect('/eservices');
     }
     else
     {
      return back()->with('error', 'Wrong Login Details');
     }

    }

    function successlogin()
    {
      $data= service::all();
      return view('eservices',['data'=>$data]);
    }

    function erubber_sheets()
    {
      $data= rubbersheet::all();
      return view('erubber_sheets',['data'=>$data]);
    }

    function logout()
    {
     Auth::logout();
     return redirect('main');
    }
}
