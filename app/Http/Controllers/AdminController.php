<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  Illuminate\Support\Facades\Mail;
use App\Models\User;
use App\Models\Food;
use App\Models\Reserve;
use App\Models\Foofchef;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
class AdminController extends Controller
{

public function user()
{
$data1=user::all();
return view("admin.users",compact("data1"));
}
public function deletethisuser($id)
{
$data1=user::find($id);
$data1->delete();
return redirect()->back();
}
public  function deletefood($id)

{
$data1=food::find($id);
$data1->delete();
return redirect()->back();
}
public function fooditem()
{
$data1= food::all();
return view("admin.fooditem",compact("data1"));
}
//updatin food
public function updatefood($id)
{
$data1= food::find($id);
return view("admin.updatefood",compact("data1"));
}
// reservation
public function reserveplace(Request $request)
{
$data1= new Reserve;
$data1->name=$request->input('name');
$data1->email=$request->input('email');
$data1->phone=$request->input('phone');
$data1->time=$request->input('time');
$data1->date=$request->input('date'); 
$data1->visitor=$request->input('visitor');
$data1->message=$request->input('message'); 
$data1->save();
Mail::send('emails.reservedbok',$data1->toArray(),
function($message){
    $message->to('simonmburu667@gmail.com', 'code here')
    ->subject('Reserved booked succefully');// sending emails to clients
});
return redirect()->back();
}

public function updatefud(Request $request,$id)
{
$data1= food::find($id);

$image=$request->foodimage;
$imagename=time().'.'.$image->getClientOriginalExtension();
$request->foodimage->move('foodgallery',$imagename);

$data1->foodimage=$imagename;


$data1->type=$request->input('type');
$data1->pricetag=$request->input('pricetag');
$data1->description=$request->input('description');

$data1->save();
return redirect()->back();

}

public function uploadnow(Request $request)
{
$data1 = new food;
$image=$request->foodimage;
$imagename=time().'.'.$image->getClientOriginalExtension();
$request->foodimage->move('foodgallery',$imagename);

$data1->foodimage=$imagename;


$data1->type=$request->input('type');
$data1->pricetag=$request->input('pricetag');
$data1->description=$request->input('description');

$data1->save();
return redirect()->back();
}
public function reserved()
{
    if(Auth::id())
    {
$data1 = Reserve::all();
return view("admin.adminreserve",compact("data1"));
}
else
{
    return redirect('login');
}
}
public function viewcheffs()
{
 $data1 = Foofchef::all();
return view("admin.admincheff",compact("data1"));
}
public function savecheff(Request $request)
{
	$data1 = new Foofchef;
$data1->cheffname=$request->input('cheffname');
$data1->cheffspecks=$request->input('cheffspecks');
$data1->cheffnumber=$request->input('cheffnumber');
$data1->cheffdepartment=$request->input('cheffdepartment');

$data1->save();
return redirect()->back();

}
public function updatecook($id)
{
 $data1 = Foofchef::find($id);
return view("admin.updatecheff",compact("data1"));
}
//delete 
public function deletecook($id)
{
 $data1 = Foofchef::find($id);
 $data1->delete();
return redirect()->back();
}

public function updatecookdetail(Request $request,$id)
{
 $data1 = Foofchef::find($id);
// return view("admin.updatecheff",compact("data1"));
$data1->cheffname=$request->input('cheffname');
$data1->cheffspecks=$request->input('cheffspecks');
$data1->cheffnumber=$request->input('cheffnumber');
$data1->cheffdepartment=$request->input('cheffdepartment');

$data1->save();
return redirect()->back();
}
public function confirmorder() 
{
    $data1 = order::all();

    return view("admin.customersorder",compact("data1"));
}

public function  search(Request $request) 

{
     $search=$request->search;
    $data1 = order::where('name','Like','%'.$search.'%')->get();

    return view("admin.customersorder",compact("data1"));
}
}