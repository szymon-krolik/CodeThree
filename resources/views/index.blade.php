@extends('./layouts/master')
@section('content')
<style>
body{
  background-color: #232323;
}

.karuzela{
  margin-top: 60px;
  margin-bottom: 60px;
}

.card{
  background-color: black;
  color: white;
}
</style>
<div class="karuzela">
<div class="container-fluid">
  <div class="row">
        <!-- /.col-lg-3 -->
        <div class="col-12">
          <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="https://www.aftershockpc.com/backend/public/slider/thumbs/4_TRIPLE%20AWARD%20WEBVISUAL.png" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="http://www.xidu-e.com/uploadfile/2018/0312/20180312105739649.jpg" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="https://www.webantics.com/Content/Images/uploaded/GE72_2QD_Apach.jpg" alt="Third slide">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    <div class="container">
            <div class="row">
                @foreach($products as $product)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <a href="/Product/{{$product->id}}"><img class="card-img-top" src="{{$product -> pic  }}" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="/Product/{{$product -> id  }}">{{ $product -> name }}</a>
                            </h4>
                            <h5>{{ $product -> price}} $</h5>
                            <p class="card-text">{{$product -> description }}</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                        </div>
                    </div>
                </div>
               @endforeach
            </div>
        </div>
    @endsection
