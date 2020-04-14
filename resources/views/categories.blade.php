


<style type="text/css">
  .p:hover {
  background-color: #74DF00 !important;
}
</style>

@extends('layout.platillaCategories',['location'=>$location])
        

@section('body')
@php
    if($categories=="salads"){
      $imgIndex="https://www.svgrepo.com/show/53220/salad.svg";
    }else if($categories=="appetizers"){
        $imgIndex="https://image.flaticon.com/icons/svg/1069/1069354.svg";
    }else{
      $imgIndex="https://lh4.googleusercontent.com/proxy/r4sCat01gEsEBMdIVa_TJHwgr_dH0N_aaPSHURmlQIJYPRbQ04YX2DnQ76WUesJvAeEKd6FW1RNJZSuyiCupKkm50tv1_nC9EKIXXrNXeSYOp6jJBnJ4k27EGAuGIcs03QUf_sET8iFJH442";
    }
@endphp
    <div class="row pt-3 align-content-center">
      <div class="col-12" style="text-transform: capitalize;">
        <h1>{{ $categories }}:</h1>
      </div>
    @for (  $i = 0;   $i < count($item);    $i++)

       @php
         $color =rand(1,9);
          $color2 =rand(1,9);
       @endphp
        <div class="text-center p col-6 col-md-3 mt-4" style="border-left: 6px solid #FAAC58; border-bottom: 6px solid #FAAC58;">
           <img class="rounded-circle" src="{{ $imgIndex }}" width="120">
           <p class="m3 text-danger">{{ $item[$i]->name }}</p>

           <p>

              <a class="btn btn-secondary " href="#collapseExample{{ $i }}" data-toggle="collapse" href="/location/" role="button">
                <span class="badge badge-light"><i class="fas fa-dollar-sign"></i> {{ $item[$i]->price }} </span> View details &raquo;
              </a>
           </p>
<div class="collapse" id="collapseExample{{ $i }}">
  <div class="card card-body">
    <p>{{ $item[$i]->name }}:</p>
    {{ $item[$i]->info }}
  </div>
</div>

           <img src="https://media-cdn.grubhub.com/image/upload/d_search:browse-images:default.jpg/w_100,h_100,f_auto,fl_lossy,q_80,c_fit/birpxm2ljtbfldaccneq" width="52" style="position: relative; float: left;">
        </div>
    @endfor

    </div>



@endsection
