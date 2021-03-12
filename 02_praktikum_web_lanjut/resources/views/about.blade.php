@extends('layouts.app')

@section('Content')
<div class="contactus">
   <div class="container-fluid">
            <div class="row">
               <div class="col-md-8 offset-md-2">
                  <div class="title">
                     <h2>About</h2>
                    
                  </div>
               </div>
            </div>
          </div>
</div>



<div class="about">
  <div class="container">
    <div class="row">
      @foreach ($abouts as $item)
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
        <div class="aboutimg">
         
        <h3>{{$item['title']}}</h3>
        <p>{{$item['descriptions']}}</p>
        <a href="#">Read More</a>
        
        </div>
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
        <div class="aboutimg">
        <figure><img src= "{{($item -> image)}}"/></figure>
        
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>
@endsection