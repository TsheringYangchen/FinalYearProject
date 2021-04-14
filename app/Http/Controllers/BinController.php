<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use App\Bin;

class BinController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'lno' => 'required',
            'lda' => 'required',
            'lna' => 'required',
            'cno' => 'required|max:11',
            'ena' => 'required',
            'lp' => 'required',
            'image' => 'required',
        ]);
       // Upload the image
       if ($request->hasFile('image')) {
        $image = $request->image;
        $image->move('uploads/bin', $image->getClientOriginalName());
        }
        //Save the products
       bin::create([
        'lno' => $request->lna,
        'lda' => $request->lda,
        'lna' => $request->lna,
        'cno' => $request->cno,
        'ena' => $request->ena,
        'lp' => $request->lp,
        'image' => $request->image->getClientOriginalName()
            
        ]);

        // Redirect to
        return view('front/bin');
    }
}