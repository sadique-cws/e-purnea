@extends('base')

@section('content')
    @include("components/header")


    <div class="card col-6 mx-auto">
        <div class="card-body">
            <form action="{{route('register')}}" method="POST">
                @csrf
                        <div class="mb-3 col">
                            <label for="">name</label>
                            <input type="text" name="name" class="form-control" value="{{old('name')}}">
                            @error('name')
                                <p class="text-danger small">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3 col">
                            <label for="">email</label>
                            <input type="text" name="email" class="form-control" value="{{old('email')}}">
                            @error('email')
                                <p class="text-danger small">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3 col">
                            <label for="">contact</label>
                            <input type="text" name="contact" class="form-control" value="{{old('contact')}}">
                            @error('contact')
                                <p class="text-danger small">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3 col">
                            <label for="">password</label>
                            <input type="password" name="password" class="form-control" value="{{old('password')}}">
                            @error('password')
                                <p class="text-danger small">{{$message}}</p>
                            @enderror
                        </div>
                   
                    <div class="mb-3">
                        <input type="submit" value="create an account" class="btn btn-success w-100">
                    </div>
        
    
            </form>
            <a href="{{route('login')}}" class="small float-end text-decoration-none">Already have an account?</a>

        </div>
    </div>

@endsection