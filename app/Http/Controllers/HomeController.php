<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Food;
use App\Models\Cart;
use App\Models\Order;
class HomeController extends Controller
{
    //
    public function  index()
    {
        
            if(Auth::id())
             {
                 return redirect('redirectadmin');

                 // code...
            }
            else
        
    $data1 = food::all();
        return view("home",compact("data1"));
    }
    public function redirectadmin()

    {
        $data1 = food::all();
        $usertype = Auth::user()->usertype;
        if($usertype=='1')
        {
            return view('admin.adminpanel');
        }
        else
        {  
               $user_id=Auth::id();
               $count=cart::where('user_id',$user_id)->count();
               
            return view("home",compact("data1","count"));
        }
    }
    public function addtocart(Request $request,$id)
{
    if (Auth::id())
     {
        $user_id=Auth::id();
        // dd($user_id);
        $foodid = $id;
        $qlty=$request->qlty;
        $cart=new cart;
        $cart->user_id=$user_id;
         $cart->food_id=$foodid;
          $cart->qlty=$qlty;
          $cart->save();
        return redirect()->back();
    }
    else

        return redirect('/login');
}
public function showcart(Request $request,$id)
{
    $count=cart::where('user_id',$id)->count();
    if(Auth::id()==$id)
    {
    $data1=cart::where('user_id',$id)->join('food','carts.food_id','=','food.id')->get();
    return view('admin.showcart',compact("count","data1"));
}
else
{
    return redirect()->back();               
}
}
public function remove($id)
{

    //$data1 =Cart::where('id',$user_id)->firstOrFail();
    $data1=Cart::find($id);
    $data1->delete();
    return redirect()->back();
}
public function confirmorder(Request $request)
{
    foreach($request->type as $key =>$type)
    {
        $data1 = new order;
        $data1->type=$type;
        // $data1->pricetag=$request->pricetag[$key];
        $data1->qlty=$request->qlty[$key];
         $data1->name=$request->name;
          $data1->phone=$request->phone;
           $data1->address=$request->address;
            $data1->location=$request->location;
            $data1->save();
}
    
    return redirect()->back();


}
}
