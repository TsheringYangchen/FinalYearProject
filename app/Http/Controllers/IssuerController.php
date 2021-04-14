<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use App\Issuer;
use DB;
use Redirect;

class IssuerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return view('admin.issuers.create');

    }
   
    public function provide(Request $request){
    
        $request->validate([
            'cid' => 'required|max:11',
            'Issuername' => 'required',
            'designation' => 'required',
            'pno' => 'required',
            'email' => 'required',
            'password' => 'required',
            'confirm_password' => 'required',
        ]);
        // Save the data
        $issuer = Issuer::create([
            'cid' => $request->get('cid'),
            'Issuername' => $request->get('Issuername'),
            'designation' => $request->get('designation'),
            'pno' => $request->get('pno'),
            'email' => $request->get('email'),
            'password' => $request->get('password'),
            'confirm_password' => $request->get('confirm_password'),
        ]);

          // Redirect to
          return redirect('/admin/issuers/create')->with('msg', 'BIN/EIN Providers has been created');
      }
      public function store(Request $request)
      {
  
          // Validate the user
          $request->validate([
              'cid' => 'required',
              'Issuername' => 'required',
              'designation' => 'required',
              'pno' => 'required',
              'email' => 'required|email',
              'password' => 'required|confirmed',
              'confirm_password' => 'required',
          ]);
  
          // Save the data
          $issuer = Issuer::create([
              'cid' => $request ->cid,
              'Issuername' => $request->Issuername,
              'designation' => $request->designation,
              'pno' => $request->pno,
              'email' => $request->email,
              'password' => bcrypt($request->password),
              'confirm_password' => bcrypt($request->confirm_password),
          ]);
  
          // Sign the Providers in
          auth()->login($issuer);
  
          $request->session()->flash('msg', 'Your providers has been added');
  
          // Redirect to
          return view('/admin/issuers/create');
      }

      public function viewIssuer()
      {
          $issuer=Issuer::paginate(3);     
          return view('admin.issuers.viewIssuer',['issuers'=>$issuer]);
      }

      public function find()
      {
          $q = Input::get('q');
          if($q != "")
          {
              $issuers = Issuer::where('Issuername', 'LIKE', '%'.$q.'%')
                              ->orWhere('cid', 'LIKE', '%'.$q.'%')
                             ->get();
          if(count($issuers) > 0)                    
              return view('admin.issuers.searchIssuer',compact('issuers'));
          }
          return redirect('/admin/viewIssuer')->with('msg','No results found');
  
      }

      public function  deleteIssuer($id){
        $issuers = Issuer::findOrFail($id);  
        $issuers->delete();
        return redirect('/admin/viewIssuer');
    }


}
