<X-app-layout>
</X-app-layout>

<!DOCTYPE html>
<html lang="en">
<head>
@include("admin.adminss")
</head>
<body>
<div class="container-scroller">
@include("admin.navbar")
<h1>simon mbutu </1>
<!-- </div> -->
<div>

        <div style="position: relative;top: 50px;right: -140;">
            <form action="{{url('/uploadnow')}}" method="post"enctype="multipart/form-data">
            @csrf
            <label> Type of food</label>
            <input type="text" name="type" placeholder="what is ua type" required>
</div>
<div> 
            <label>PRIce</label>
            <input type="text" name="pricetag" placeholder="56, 80 93shs" required>
</div>

<label> Food pic</label>
            <input type="file" name="foodimage" placeholder="what is ua type" required>
</div>
<label>Food description</label>
            <input type="text" name="description" placeholder="what is ua type" required>
</div>
<div>
    <input type="submit" value="save now ">
</div>
</form>
<div>
    <table bgcolor="pink">
        <tr>
            <th style="padding:30px"> Food Name</th>
            <th style="padding:30px"> Price</th>
            <th style="padding:30px"> description</th>
            <th style="padding:30px"> Image</th>
            <th style="padding:30px"> Action</th>
            <th style="padding:30px"> Update</th>
</tr>
    <table bgcolor="green">
       
@foreach($data1 as $data1)
<tr align="center">
    <td> {{$data1->type}}</td>
    <td> {{$data1->pricetag}}</td>
    <td> {{$data1->description}}</td>
    <td> <img  height="300" width ="300" src = "/foodgallery/{{$data1->foodimage}}"></td>
    <td><a href="{{url('/deletefood',$data1->id)}}"> Delete</a></td>
    <td>
      <td><a href="{{url('/updatefood',$data1->id)}}">Updatefoodinfo</a></td>
  </td>
    </tr>
</div>
@endforeach
<!-- </div> -->
@include("admin.adminjscript")

<!-- partial -->
</div>
<!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
</div>

</body>
</html>
