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
            <form action="{{url('/updatefud',$data1->id)}}" method="post"enctype="multipart/form-data">
            @csrf
            <label> Type of food</label>
            <input type="text" name="type"  placeholder="what is ua type"  value="{{$data1->type}}" required>
</div>
<div> 
            <label>PRIce</label>
            <input type="text" name="pricetag" placeholder="56, 80 93shs" value="{{$data1->pricetag}}" required>
</div>


<label>Food description</label>
            <input type="text" name="description" placeholder="what is ua type" value="{{$data1->description}}" required>
</div>
<div>
<label> previos image</label>
           <img  height ="200" width="200" src="/foodgallery/{{$data1->foodimage}}">
</div>
<div>
    <label> New Image</label>
    <input type="file" name="foodimage" required>
</div>
<div>
    <input type="submit" value="save now ">
</div>
</form>
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
