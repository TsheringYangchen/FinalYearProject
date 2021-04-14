<?php

namespace App\Http\Controllers\Front;

use App\User;
use Redirect;
use App\License;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;


class RegistrationController extends Controller
{

    public function index()
    {
        return view('front.registration.index');
    }

    public function license(Request $request){
    
        $request->validate([
            'LHname' => 'required',
            'license' => 'required|max:9',
            'image' => 'required',
        ]);
       // Upload the image
       if ($request->hasFile('image')) {
        $image = $request->image;
        $image->move('uploads', $image->getClientOriginalName());
        }
        //Save the products
       License::create([
            'LHname' => $request->LHname,
            'license' => $request->license,
            'image' => $request->image->getClientOriginalName(),
            
        ]);


        // Sign the user in
        $request->session()->flash('msg', 'License Holders has been added successfully');

        // Redirect to
        return redirect('/admin/products/create');
    }

    public function store(Request $request)
    {

        // Validate the user
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
        ]);

        // Save the data
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        // Sign the user in
        auth()->login($user);

        $request->session()->flash('msg', 'Your user has been added');

        // Redirect to
        return redirect('/admin/products/create');
    }
   public function viewLicense(){
       
        //Before Applying pagination
             //$license=License::all();
        // After applying pagination
        $license=License::paginate(3);     
        return view('admin.products.viewLicense',['licenses'=>$license]);
    }

    public function search()
    {
        $q = Input::get('q');
        if($q != "")
        {
            $licenses = License::where('LHname', 'LIKE', '%'.$q.'%')
                            ->orWhere('license', 'LIKE', '%'.$q.'%')
                            ->get();
        if(count($licenses) > 0)                    
            return view('admin.products.search',compact('licenses'));
        }
        return redirect('/admin/viewLicense')->with('msg','No results found');

    }
    
    public function editLicense($id)    
    {
        $licenses = License::find($id);
        return view('admin.products.license-edit', compact('licenses, id'));
    }
    public function updateLicense(Request $request, $id)
    {
        // Validation
        $this->validate($request,[
            'LHname' =>'required',
            'license' =>'required'
        ]);
        $licenses = License::find($id);
        $licenses->LHname=$request->get('LHname');
        $licenses->license=$request->get('license');
        $licenses->save();
        return redirect()->route('admin.viewLicense')->with('msg','You have successfully updated License Holder');
    }

    public function  deleteLicense($id){
        $licenses = License::findOrFail($id);  
        $licenses->delete();
        return redirect('/admin/viewLicense');
    }

    public function Holder(Request $request){

        $request -> validate([
            
            'no'=>'required'
        ]);   

    if ($holder = License::where('license','=', Input::get('no'))->first())
    {
        return redirect::route('status');
    }
    
    else
    {
         // Session message
        return back()->with('msg','You have entered wrong License No');
    }
    }
    
}
