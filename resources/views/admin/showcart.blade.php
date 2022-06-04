<!DOCTYPE html>
<html lang="en">

<head>
	<base href="/public">

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

<title>Klassy Cafe - Restaurant HTML Template</title>
<!--

TemplateMo 558 Klassy Cafe

https://templatemo.com/tm-558-klassy-cafe

-->
<!-- Additional CSS Files -->
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

<link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">

<link rel="stylesheet" href="assets/css/owl-carousel.css">

<link rel="stylesheet" href="assets/css/lightbox.css">
//jqery cnd online link
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</head>

<body>

<!-- ***** Preloader Start ***** -->
<div id="preloader">
<div class="jumper">
<div></div>
<div></div>
<div></div>
</div>
</div>  
<!-- ***** Preloader End ***** -->


<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
<div class="container">
<div class="row">
<div class="col-12">
<nav class="main-nav">
<!-- ***** Logo Start ***** -->
<a href="index.html" class="logo">
<img src="assets/images/klassy-logo.png" align="klassy cafe html template">
</a>
<!-- ***** Logo End ***** -->
<!-- ***** Menu Start ***** -->
<ul class="nav">
<li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
<li class="scroll-to-section"><a href="#about">About</a></li>

<!-- 
<li class="submenu">
<a href="javascript:;">Drop Down</a>
<ul>
<li><a href="#">Drop Down Page 1</a></li>
<li><a href="#">Drop Down Page 2</a></li>
<li><a href="#">Drop Down Page 3</a></li>
</ul>
</li>
-->
<li class="scroll-to-section"><a href="#menu">Menu</a></li>
<li class="scroll-to-section"><a href="#chefs">Chefs</a></li> 
<li class="submenu">
<a href="javascript:;">Features</a>
<ul>
<li><a href="#">Features Page 1</a></li>
<li><a href="#">Features Page 2</a></li>
<li><a href="#">Features Page 3</a></li>
<li><a href="#">Features Page 4</a></li>
</ul>
</li>
<!-- <li class=""><a rel="sponsored" href="https://templatemo.com" target="_blank">External URL</a></li> -->
<li class="scroll-to-section"><a href="#reservation">Contact Us</a></li> 
<li>
	<!-- //add cart -->
<li class="scroll-to-section" style="background-color: yellowgreen;"><a href="#reservation">
	@auth
	<a href="{{url('/showcart',Auth::user()->id)}}">
	 cart{{$count}}</a>

@endauth

@guest
Cart[0]
@endguest
<li>
@if (Route::has('login'))
<div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
@auth
<li> 
<x-app-layout>

</x-app-layout>
<!-- <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a></li> -->
@else
<li> <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a></li>

@if (Route::has('register'))
<li> <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a></li>
@endif
@endauth
</div>
@endif
</li>
</ul>        
<a class='menu-trigger'>
<span>Menu</span>
</a>
<!-- ***** Menu End ***** -->
</nav>
</div>
</div>
</div>
</header>
<div id="top">
<table align="center" bgcolor="green">
	<tr>
		<th style="padding:20px;"> Food Name</th>
			
				<th style="padding:40px;"> quality</th>
				<th style="padding:40px;"> Pricetag</th>
				<th style="padding:40px;"> Task/action</th>
	</tr>
	<form  action="{{url('confirmorder')}}" method="post">
		@csrf
	@foreach($data1 as $data1)
	<tr align="center">
		<td>
		<input type="text" name="type[]" value="{{$data1->type}}" hidden="">
		{{$data1->type}}</td>
		

		<td>
			<input type="text" name="qlty[]" value="{{$data1->qlty}}" hidden="">{{$data1->qlty}}</td>
			<td>
			<input type="text" name="pricetag[]" value="{{$data1->pricetag}}" hidden="">{{$data1->pricetag}}</td>
		<td><a href="{{url('/remove',$data1->id)}}" class="btn btn-warning"> Remove</a></td>
		 
	</tr>
	@endforeach

	
</table>
<div align="center" style="padding: 20px;">
	<button  type="button"id="order" class="btn btn-primary"  >Place order</button>
</div>
<div align="center" id="apperclick" style="padding:10px; display: none;">
	<div style="padding: 10px;">
		<label>Name:</label>
		<input type="text" name="name" placeholder="Name">
	</div>

	<div style="padding: 10px;">
		<label>Phone:</label>
		<input type="number" name="phone" fplaceholder="07202020202">
	</div>
	<div style="padding: 10px;">
		<label> Location:</label>
		<input type="text" name="location" placeholder="Enter location">
	</div>
	<div style="padding: 10px;">
		<label>Address:</label>
		<input type="text" name="address" placeholder="Adress name">
	</div>
	<td>
		<input type="text" name="pricetag[]" value="{{$data1->pricetag}}" hidden="">
		{{$data1->pricetag}}</td>
	<div style="padding: 10px;">
		<button class="btn btn-success">confrim order</button>
		<button  id="decline" type="button" class="btn btn-danger">Close</button>
	</div>
</div>
</form>
</div>
<script type="text/javascript">
	$("#order").click(
		function()
		{
			$("#apperclick").show();
		}
		);
	$("#decline").click(
		function()
		{
			$("#apperclick").hide();
		}
		);
</script>
<!-- jQuery -->
<script src="assets/js/jquery-2.1.0.min.js"></script>

<!-- Bootstrap -->
<script src="assets/js/popper.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<!-- Plugins -->
<script src="assets/js/owl-carousel.js"></script>
<script src="assets/js/accordions.js"></script>
<script src="assets/js/datepicker.js"></script>
<script src="assets/js/scrollreveal.min.js"></script>
<script src="assets/js/waypoints.min.js"></script>
<script src="assets/js/jquery.counterup.min.js"></script>
<script src="assets/js/imgfix.min.js"></script> 
<script src="assets/js/slick.js"></script> 
<script src="assets/js/lightbox.js"></script> 
<script src="assets/js/isotope.js"></script> 

<!-- Global Init -->
<script src="assets/js/custom.js"></script>
<script>

$(function() {
var selectedClass = "";
$("p").click(function(){
selectedClass = $(this).attr("data-rel");
$("#portfolio").fadeTo(50, 0.1);
$("#portfolio div").not("."+selectedClass).fadeOut();
setTimeout(function() {
$("."+selectedClass).fadeIn();
$("#portfolio").fadeTo(50, 1);
}, 500);

});
});

</script>
</body>
</html>