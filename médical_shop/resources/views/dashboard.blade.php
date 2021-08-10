<x-app-layout>
    <div class="container">
    <div class="row">
        @foreach ($products as $product)
        <div class="col-sm-6 col-lg-4 text-center item mb-4">
          <a href=""> <img src="/image/{{$product->image}}" alt="Image" style="width:100%; height:100px% " ></a>
          <h3 class="text-dark"><a href="">{{$product->name}}</a></h3>
          <p class="price">{{$product->price}}</p>
        </div>
        @endforeach
    </div>
      </div>
</x-app-layout>
