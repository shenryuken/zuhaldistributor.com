@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Products</h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{{ route('products.create') }}">Add New</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <!-- <div class="box box-primary">
            <div class="box-body"> -->
                
                @foreach($products as $product)
                    <div class="card" style="width: 18rem;">
                      <img src="..." class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                      </div>
                    </div>
                @endforeach
           <!--  </div>
        </div> -->
        <div class="text-center">
        
        </div>
    </div>
@endsection

