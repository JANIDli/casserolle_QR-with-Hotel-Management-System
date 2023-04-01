<div class='col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 mb-3'><div class="card animate_animated animate_zoomIn shadow-sm border-radius-1">
    <img class="card-img-top" src="/foods/{{ $dish->image }}" alt="Card image cap">
    <div class="card-body">
      <h3 class="card-title" style="text-align: center;"><b>{{ $dish->name }}</b></h3>
      <h4 class="card-title" style="text-align:center;"><b>{{ $dish->price }}</b></h4>
      <div>
        <img src="/qrs/{{ $dish->qr }}.png" alt="{{ $dish->name }}">
      </div>
      <div class='d-flex justify-content-center'><a href='/food/{{ $dish->id }}' class='button-61'>View</a></div>
    </div>
</div></div>