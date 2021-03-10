@extends('layouts.app')

@section('Content')
<div class="container">
   <div class="row">
    @foreach ($blogs as $item)
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 margin">
                   <div class="news-box">
                       <figure><img src="images/blol.jpg" alt="img" /></figure>
                       <h3>{{$item['title']}}</h3>
                       <span> March 20</span><span>Comment</span>
                       <p>{{$item['content']}} </p>
                   </div>
               </div>
               <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 margin">
                   <div class="news-box">
                       <figure><img src="images/blog.jpg" alt="img" /></figure>
                       <h3>{{$item['title']}}</h3>
                       <span> March 20</span><span>Comment</span>
                       <p>{{$item['content']}} </p>
                   </div>
               </div>
               <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 ">
                   <div class="news-box">
                       <figure><img src="images/blog.jpg" alt="img" /></figure>
                       <h3>{{$item['title']}}</h3>
                       <span> March 20</span><span>Comment</span>
                       <p>{{$item['content']}} </p>
                   </div>
                   @endforeach
               </div>
               <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                   <div class="news-box">
                       <figure><img src="images/blol.jpg" alt="img" /></figure>
                       <h3>Best Teble</h3>
                       <span> March 20</span><span>Comment</span>
                       <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, </p>
                   </div>
               </div>
   </div>
 </div>
</div>
@endsection