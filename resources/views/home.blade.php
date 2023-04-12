@extends('layouts.layout')
@section('content')

    <h1 class="mt-4 text-center display-1">Rolling Roads</h1>
    <h2 class="mt-2 text-center display-3"><em>- A travel Blog -</em></h2>

    <div id="carouselExampleFade" class="carousel slide carousel-fade w-50 mx-auto">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{asset("./Images/dino-reichmuth-A5rCN8626Ck-unsplash.jpg")}}" class="d-block w-100" alt="van travel">
          </div>
          <div class="carousel-item">
            <img src="{{asset("./Images/philipp-kammerer-6Mxb_mZ_Q8E-unsplash.jpg")}}" class="d-block w-100" alt="on the water">
          </div>
          <div class="carousel-item">
            <img src="{{asset("./Images/pietro-de-grandi-T7K4aEPoGGk-unsplash.jpg")}}" class="d-block w-100" alt="on a lake">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

    <div class="container mx-5 my-4 d-flex" >
      
        <div>
          <h3 class="text-uppercase">Who we are</h3>
          <p class="w-75" style="text-align: justify">We are travel enthusiasts who have chosen to embrace the freedom of the open road. Our passion for adventure has led us to explore the world from the comfort of our trusty van, and we're always excited to share our experiences with others.
                We believe that traveling with a van is a unique and fulfilling way to experience the world. It allows us to immerse ourselves in the natural beauty of each destination, connect with locals, and create unforgettable memories along the way.
                From breathtaking national parks to charming small towns, we're always on the lookout for hidden gems and off-the-beaten-path destinations that we can share with our community.
                Join us as we explore the world one mile at a time, and let the rolling roads lead us to new adventures and unforgettable experiences.</p>
        </div>

        <div>
          <h3 class="text-uppercase">What we want</h3>
          <p class="w-75" style="text-align: justify">Through our blog and social media channels, our goal is to inspire and empower others to embark on their own van adventuresand discover the joys of slow travel. We want to share our experiences, insights, and tips to help others plan their own journeys and make the most of their van travels.
              We also aim to promote the benefits of slow travel and the van life lifestyle. We believe that traveling with a van offers a unique and fulfilling way to explore the world, connect with nature and local communities, and live a simpler, more sustainable life.
              In addition to sharing our travel stories and recommendations, we want to create a community of van travelers who can connect, share resources, and support each other in their adventures. We hope to foster a positive and inclusive space where everyone can feel welcome and inspired to pursue their own van travel dreams.
              Overall, our blog is a platform for sharing our passion for van travel and encouraging others to join us on this incredible journey.</p>
        </div>
      
    </div>  
@endsection
