@extends('layouts.home')


@section('content')


@if (Session::has('message'))

<div class="alert alert-success" role="alert">{{Session::get('message') }} </div>

@endif

<form action="{{ route('save-company') }}" method="POST">
    @csrf
    <div class="form-group"><label>Company</label> <input type="text" class="form-control" name="name">
        @error('name')
        <small class="form-text text-danger"> {{ $message }}</small>
        @enderror
    </div>
    <div class="form-group"><label>Sector</label>
        <select type="text" class="form-control" name="sector_id">
            <option value="0">Choose Category</option>
            @foreach ($categories as $category)

            <option value="{{$category->id}}">{{$category->name}}</option>

            @endforeach
        </select>
        @if (Session::has('error'))

        <div class="alert alert-danger" role="alert">{{Session::get('error') }} </div>

        @endif
    </div>
    <div class="form-group"><label>Website</label> <input type="text" class="form-control" name="website">
        @error('website')
        <small class="form-text text-danger"> {{ $message }}</small>
        @enderror
    </div>
    <div class="form-group"><label>Address</label> <input type="text" class="form-control" name="address">
        @error('address')
        <small class="form-text text-danger"> {{ $message }}</small>
        @enderror
    </div>
    <div class="form-group"><label>Email</label> <input type="text" class="form-control" name="email">
        @error('email')
        <small class="form-text text-danger"> {{ $message }}</small>
        @enderror
    </div>
    <div class="form-group"><label>Phone number</label> <input type="text" class="form-control" name="number">
        @error('number')
        <small class="form-text text-danger"> {{ $message }}</small>
        @enderror</div>
    <div class="form-group"><label>City</label> <input type="text" class="form-control" name="city">
        @error('city')
        <small class="form-text text-danger"> {{ $message }}</small>
        @enderror</div>
    <div class="form-group"><label>sector</label> <input type="text" class="form-control" name="sector">
        @error('sector')
        <small class="form-text text-danger"> {{ $message }}</small>
        @enderror
    </div>
    <button class="btn btn-lg btn-primary" type="submit">Save</button>

</form>
<br><br>
<hr>
@endsection