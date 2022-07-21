@extends('base')


@section('content')
    @include('components/home-banner')

    <div class="container mb-5">
        <div class="row my-4">
            <div class="col-8">
                <h4 class="fw-normal">Featured businesses</h4>
            </div>
        </div>
        <div class="row">
            @foreach ($business as $item)
            <div class="col" style="max-width: 20%">
                <div class="card">
                    {{-- <img src="{{asset('images/biz/'.$item->image)}}" class="card-img-top w-100" alt=""> --}}
                    <img src="{{$item->image}}" class="card-img-top w-100" alt="">
                    <div class="card-body">
                        <a href="" class="small text-truncate">{{$item->title}}</a>
                        <div class="w-100">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <a href="" class="small">19 Reviews</a>
                        </div>
                        <div class="w-100">
                            <p>{{$item->address}}, {{$item->city}}</p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection