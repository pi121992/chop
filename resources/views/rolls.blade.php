@extends('layout.platillaCategories',['location'=>$location]);



@section('body')
   <h1>Rolls:</h1>
   <div class="row">
   	  <div class="col-6 col-md-4">
   	  	 <x-items-categories :location="$location" title="Tempura Rolls" link="rolls/tempura" imgsrc="https://scontent-dfw5-1.xx.fbcdn.net/v/t1.0-9/91046098_2585981604836602_5026441466784776192_n.jpg?_nc_cat=101&_nc_sid=8bfeb9&_nc_ohc=6zHe5iAnwowAX8Lrnar&_nc_ht=scontent-dfw5-1.xx&oh=727a26f93c4a8ed57e6d2001554a2b8e&oe=5EB8326D"/>
   	  </div>

   	  <div class="col-6 col-md-4">
   	  	 <x-items-categories :location="$location" title="Breaded Rolls" link="rolls/breaded" imgsrc="https://scontent-dfw5-1.xx.fbcdn.net/v/t1.0-9/82808515_2438788582889239_4337258142451630080_n.jpg?_nc_cat=105&_nc_sid=8bfeb9&_nc_ohc=3maZs2d9_pAAX9gowip&_nc_ht=scontent-dfw5-1.xx&oh=e18cca3528281c8ed53895bff69364f8&oe=5EB8501F"/>
   	  </div>

   	  <div class="col-6 col-md-4">
   	  	 <x-items-categories :location="$location" title="Fresh Rolls" link="rolls/fresh" imgsrc="https://scontent-dfw5-2.xx.fbcdn.net/v/t1.0-9/92490233_2613665015401594_4157763638016344064_n.jpg?_nc_cat=108&_nc_sid=8bfeb9&_nc_ohc=UXjeU03v_JAAX_7-VN0&_nc_ht=scontent-dfw5-2.xx&oh=82f83d203c5979c522fc8b1b7f807621&oe=5EB73B16"/>
   	  </div>
   </div>
@endsection