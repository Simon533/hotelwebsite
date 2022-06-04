<section class="section" id="menu">
<div class="container">
<div class="row">
<div class="col-lg-4">
<div class="section-heading">
<h6>Our Menu</h6>
<h2>Our selection of cakes with quality taste</h2>
</div>
</div>
</div>
</div>
<div class="menu-item-carousel">
<div class="col-lg-12">
<div class="owl-menu-item owl-carousel">


@foreach($data1 as $data1)
<form action="{{url('/addtocart',$data1->id)}}" method="post">
    @csrf
<div class="item">
    <div style="background-image:url('/foodgallery/{{$data1->foodimage}}');" class='card'>
<div class='card'>
    <div class="price"> <h6> {{$data1->type}}</h6></div>
    <div class='info'>
<h1 class='title'>{{$data1->pricetag}}</h1>
<p class='description'>{{$data1->pricetag}}</p>
<div class="main-text-button">
<div class="scroll-to-section"><a href="#reservation">Make Reservation <i class="fa fa-angle-down"></i></a></div>
</div>
</div>
</div>   
<input type="number" name="qlty" style="width:70px;" >
<input type="submit"  value="add-cart">

</div>
</form>
@endforeach
<div class="item">
<div class='card card5'>
<div class="price"><h6>$8.50</h6></div>
<div class='info'>
<h1 class='title'>Klassy Cup Cake</h1>
<p class='description'>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedii do eiusmod teme.</p>
<div class="main-text-button">
<div class="scroll-to-section"><a href="#reservation">Make Reservation <i class="fa fa-angle-down"></i></a></div>
</div>
</div>
</div>
</div>
<div class="item">
<div class='card card3'>
<div class="price"><h6>$7.25</h6></div>
<div class='info'>
<h1 class='title'>Klassic Cake</h1>
<p class='description'>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedii do eiusmod teme.</p>
<div class="main-text-button">
<div class="scroll-to-section"><a href="#reservation">Make Reservation <i class="fa fa-angle-down"></i></a></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>