<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Customer;
use  App\Models\Country;
use  App\Models\State;
class Testc extends Controller
{
    public function aboutfun(){

        $w=array(
            'name'=>"Partha",
            'email'=>"p@gmail.com"

        );

       return view("aboutx")->with($w);
    }
    public function form(){
         return view("formpage");
    }
    public function insfrm(Request $r){

        $v=$r->validate([
            'name'=>'required',
            'gender'=>'required',
            'stream'=>'required',
            'marks'=>'required',
            'img'=>'required|mimes:jpg,jpeg,png'
        ]);
        
    $n=$r->name;
    $g=$r->gender;
     $s=$r->stream;
    $m=$r->marks;
    if(isset($r->sub)){
    $sb=implode(",",$r->sub);
}else{
    $sb="";
    }

    $fl=$r->file("img");
    if(isset($fl)){
        $fn=time().$fl->getClientOriginalName();
        $fl->move("upload",$fn);
    }


    $obj=new Customer();
    $obj->name=$n;
    $obj->gender=$g;
    $obj->stream=$s;
    $obj->marks=$m;
    $obj->subject=$sb;
    $obj->image=$fn;
    $obj->save();

}

public function sel(){

    $obj=Customer::all();
    $w=array(
       'row'=>$obj
    );

    return view("sel")->with($w);

}
public function del(Request $r){
   $id=$r->id;
   $obj=Customer::find($id);
   unlink("upload/".$obj->image);
   $obj->delete();
   return redirect(url('/sel'));
}
public function upd(Request $r){
$id=$r->id;

$obj=Customer::find($id);

$sb=explode(",", $obj->subject);
 
$w=array(
    'dt'=>$obj,
    'sub'=>$sb
);
 return view("upd_frm")->with($w);

}
public function upd_ins(Request $r){
     $v=$r->validate([
            'name'=>'required',
            'gender'=>'required',
            'stream'=>'required',
            'marks'=>'required'
          
        ]);

     $id=$r->id;
        
    $n=$r->name;
    $g=$r->gender;
     $s=$r->stream;
    $m=$r->marks;
    if(isset($r->sub)){
    $sb=implode(",",$r->sub);
}else{
    $sb="";
    }

    $fl=$r->file("img");
    if(isset($fl)){
        $fn=time().$fl->getClientOriginalName();
        $fl->move("upload",$fn);
    }


    $obj=Customer::find($id);
    $obj->name=$n;
    $obj->gender=$g;
    $obj->stream=$s;
    $obj->marks=$m;
    $obj->subject=$sb;
    if(isset($fn)){
    $obj->image=$fn;
    }
    $obj->update();

    return redirect(url('/sel'));
}
public function testAjax(){

 $obj=Country::all();
 $w=array(
    'countries'=>$obj
 );

    return view('ajaxform')->with($w);
}
public function abc(Request $r){
    $cid=$r->cid;
    $obj=State::where("country_id","=",$cid)->get();
    foreach($obj as $s){
        echo '<option value="'.$s->id.'">'.$s->name.'</option>';
    }

}
}
