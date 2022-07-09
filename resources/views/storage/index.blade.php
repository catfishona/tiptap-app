@extends('layouts.app')

@section('content')
<!-- ======= Services Section ======= -->
<section id="services" class="services section-bg">
    <div class="container" data-aos="fade-up">
        <div class="column">
            <div class="section-title">
                <h2>Available Sizes</h2>
            </div>

            <div class="row">
                @foreach($storages as $storage)

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos -delay="100">
                    <div class="card ms-auto me-auto" style="width: 18rem">
                        <div class="card-body">
                            <p class="card-title">
                                {{ $storage->storageSize }}
                            </p>
                            <p class="card-text">
                                {{$storage->description}}</br>
                                    Available: {{$storage->availability}}</br>
                                    Price: Rp. {{number_format($storage->price)}}
                                    </br>
                                    <br>
                                    <button type="submit" class="btn btn-darkpink">
                                    <a style="color:white" href="{{ url('booking') }}/{{ $storage->id }}">Rent Now</a></button>
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
</section>
<!-- ======= End Services Section ======= -->
@endsection