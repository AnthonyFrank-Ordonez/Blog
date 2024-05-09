@extends('main')

@section('title', '| Homepage')

@section('content')
      <div class="row">
        <div class="col-md-12">
          <div class="jumbotron">
            <h1>Welome to My Blog!</h1>
            <p class="lead">Thank you for visiting, this is muy test website built with laravel, Please Read My Latest Post</p>
            <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular Post</a></p>
          </div>
        </div>
      </div> <!-- End of header .row -->

      <div class="row">
        <div class="col-md-8">
          <div class="post">
            <h3>Post Title</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nobis perferendis delectus voluptatibus vel dignissimos sequi error nam non totam neque, maxime quae consequuntur atque culpa reiciendis odio rerum minima suscipit.</p>
            <a href="#" class="btn btn-primary">Read More</a>
          </div>
          
          <hr>

          <div class="post">
            <h3>Post Title</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nobis perferendis delectus voluptatibus vel dignissimos sequi error nam non totam neque, maxime quae consequuntur atque culpa reiciendis odio rerum minima suscipit.</p>
            <a href="#" class="btn btn-primary">Read More</a>
          </div>

          <hr>

          <div class="post">
            <h3>Post Title</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nobis perferendis delectus voluptatibus vel dignissimos sequi error nam non totam neque, maxime quae consequuntur atque culpa reiciendis odio rerum minima suscipit.</p>
            <a href="#" class="btn btn-primary">Read More</a>
          </div>
          
          <hr>

          <div class="post">
            <h3>Post Title</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nobis perferendis delectus voluptatibus vel dignissimos sequi error nam non totam neque, maxime quae consequuntur atque culpa reiciendis odio rerum minima suscipit.</p>
            <a href="#" class="btn btn-primary">Read More</a>
          </div>

        </div>

        <div class="col-md-3 col-md-offset-1">
          <h2>SideBar</h2>
        </div>

      </div>
@endsection