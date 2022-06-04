 <X-app-layout>
</X-app-layout> 

<!DOCTYPE html>
<html lang="en">
<head>
    <base href="/public">
@include("admin.adminss")
</head>
<body>
    <div class="container-scoller">

@include("admin.navbar")
<div style="position: relative;top: 50px;right: -140;">
            <form action="{{url('/updatecookdetail',$data1->id)}}" method="post"enctype="multipart/form-data">
            @csrf
            <div>
            <label> name of cheff</label>
            <input type="text" name="cheffname"  placeholder="what is ua type"  value="{{$data1->cheffname}}" required>
</div>
<div>
<label> cheff number </label>
            <input type="number" name="cheffnumber"  placeholder="what is ua type"  value="{{$data1->cheffnumber}}" required>
</div>
<div> 
            <label>cheff department</label>
            <input type="text" name="cheffdepartment" placeholder="56, 80 93shs" value="{{$data1->cheffnumber}}" required>
</div>


<label>cheff specialization</label>
            <input type="text" name="cheffspecks" placeholder="what is ua type" value="{{$data1->cheffspecks}}" required>
</div>

<div>
    <input type="submit" value="save now ">
</div>
</form>
</div>
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
