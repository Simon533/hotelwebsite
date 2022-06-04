 <X-app-layout>
</X-app-layout> 

<!DOCTYPE html>
<html lang="en">
<head>
@include("admin.adminss")
</head>
<body>
    <div class="container-scoller">

@include("admin.navbar")
<div class="container">
    
</div>
<h2> customers   here  plz page</h2>
<form action="{{url('/search')}}" method="get">
    @csrf
    <input type="text" name="search" style="color:green;">
    <input type="submit" value="search" class="btn btn-success"> 
</form>
<table>
    <tr align="center" bgcolor="red">
        <td style="padding:40px;"> Customer Name</td>
        <td style="padding:40px;"> Customer Phone </td>
        <td style="padding:40px;"> Customer Location</td>
        <td   style="padding:40px;"> Customer Address</td>
        <td   style="padding:30px;">Food type</td>
        <td   style="padding:30px;"> Quality</td>

        <td  style="padding:40px;">Total sum/amount </td>
    </tr>
    @foreach($data1 as $data1)
    <tr>
        <td>{{$data1->name}}</td>
        <td>{{$data1->phone}}</td>
        <td>{{$data1->location}}</td>
    <td>{{$data1->pricetag}}</td>
        <td>{{$data1->address}}</td>
        <td>{{$data1->qlty}}</td>
        <td>{{$data1->type}}</td>
    </tr>
        
    @endforeach
</table>
</div>
@include("admin.adminjscript")

<!-- partial -->
</div>
<!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>

</body>
</html>
