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
<form action="{{url('/savecheff')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div>
        <label>name</label>
        <input type="text" name="name" required=""palceholder="enter name">
    </div>
    <label>Cheffnumber</label>
        <input type="number" name="cheffnumber" required=""palceholder="enter name">
    </div>
    <label>cheffspecks</label>
        <input type="text" name="cheffspecks" required=""palceholder="enter name">
    </div>
    <label>cheffdepart</label>
        <input type="text" name="cheffdepartment" required=""palceholder="enter name">
    </div>
    <div>
    <input type="submit" value="save now ">
</div>
</form>
<table bgcolor="green">
    <tr>
        <th style="padding: 30px;">Name</th>
        <th style="padding: 30px;">phone</th>
        <th style="padding: 30px;">specks</th>
        <th style="padding: 30px;">department</th>
          <th style="padding: 30px;">Action</th>
           <th style="padding: 30px;">Action2</th>
    </tr>
    @foreach($data1 as $data1)
        <tr>
            <td>{{$data1->cheffname}}</td>
            <td>{{$data1->cheffnumber}}</td>
            <td>{{$data1->cheffspecks}}</td>
            <td>{{$data1->cheffdepartment}}</td>
            
            <td><a href="{{url('/updatecook',$data1->id)}}">Update</a></td>
              <td><a href="{{url('/deletecook',$data1->id)}}">delete here</a></td>
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
