

<!DOCTYPE html>
<html lang="en">
<head>
@include("admin.adminss")
</head>
<body>
<div class="container-scroller">
@include("admin.navbar")
<div style="position: relative;top:60px; right: -250px ">
<table bgcolor="white" border="80px">
<div>
     <table>
           <tr>
                 <th style="padding: 50px"> Name</th>
                 <th style="padding: 50px">  Email</th>
                 <th style="padding: 50px">  Action</th>
</tr>
@foreach($data1 as $data1)
<tr align="center">

                 <td>{{$data1->name}}</td>
                 <td> {{$data1->email}}</td>
                 @if($data1->usertype=="0")
                 <td><a href="{{url('/deletethisuser',$data1->id)}}"> Delete</a></td>
                 @else
                 <td><a > Not allowed plz</a></td>
                 @endif
</tr>
@endforeach
</table>
</div>
</div>
@include("admin.adminjscript")
<!-- partial -->

<!-- main-panel ends -->

<!-- page-body-wrapper ends -->


</body>
</html>

