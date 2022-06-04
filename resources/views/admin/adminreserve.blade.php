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
</div>
<div style="position:relative;top:80px;right: -180;">
    <table bgcolor="pink" border="3px">
        
        <tr>
            <th style="padding: 30px;">Name</th>
            <th style="padding: 30px;">Email</th>
            <th style="padding: 30px;">date</th>
            <th style="padding: 30px;">time</th>
            <th  style="padding: 30px;">message</th>
            <th style="padding: 30px;">visitor</th>
            <th style="padding: 30px;">phone</th>
        </tr>
        @foreach($data1 as $data1)
        <tr>
            <td>{{$data1->name}}</td>
            <td>{{$data1->email}}</td>
            <td>{{$data1->date}}</td>
            <td>{{$data1->time}}
            </td>
            <td>{{$data1->message}}</td>
            <td>{{$data1->visitor}}</td>
            <td>{{$data1->phone}}</td>
        </tr>
        @endforeach
    </table>
@include("admin.adminjscript")

<!-- partial -->
</div>
<!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>

</body>
</html>
