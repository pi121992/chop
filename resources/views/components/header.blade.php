<main role="main" class="container mt-5">
      <div class="jumbotron">
      	<div class="row">
      		<div class="col-4">
      			<h2 style="text-transform: capitalize;">{{ $title }}</h2>
        <p class="lead">
          {{--aqui dentro va texto del body del elemento --}}
        </p>
        <a class="btn btn-lg btn-primary mb-2" href="tel:{{ $phone }}" role="button" >Call &raquo; {{ $phone }}</a>
      		</div>

      		<div class="col-12 col-md-8">
      			<iframe src="{{ $direction }}" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      		</div>
      	</div>
        
      </div>
    </main>