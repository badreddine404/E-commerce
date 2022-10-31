<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;
class SliderController extends Controller
{
    

 
public function home(){
    $sliders=Slider::where('status',1)->get();
    $produits=Product::where('status',1)->get();
    return view('index')->with('sliders',$sliders)->with('produits',$produits);
  
}
    
     
public function sliders(){
    $sliders=Slider::get();
    $produits=Product::get();
    return view('index')->with('sliders',$sliders)->with('produits',$produits);
}


    public function sauverslider(Request $request){

        $this->validate($request,[  'description1'=>'required',
                                    'description2'=>'required',
                                    'slider_image'=>'image|Nullable|max:2000']);


        if ($request->hasFile('slider_image')) {
        // 1 get file name with ext
        $filleNameWithExt=$request->file('slider_image')->getClientOriginalName();
        //2 just file name
        $filename=pathinfo($filleNameWithExt,PATHINFO_FILENAME);
        // 3 get just file extention
        $extension=$request->file('slider_image')->getClientOriginalExtension() ;
        // 4 file name to store
        $fileNameTOtore=$filename.'_'.time().'.'.$extension;
        //uploade l'image
        $path=$request->file('slider_image')->storeAs('public/slider_image',$fileNameTOtore);

        } else {
        $fileNameTOtore='noimage.jpg';

        }
$slider=new Slider();
$slider->description1=$request->input('description1');
$slider->description2=$request->input('description2');
$slider->slider_image=$fileNameTOtore;
$slider->status=1;

$slider->save();

return redirect('/ajouterslider')->with('status','le slider a ete inserer avec succes ! ');

        
    }

}
