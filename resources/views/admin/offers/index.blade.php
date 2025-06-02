@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4>Offers50%</h4>
                </div>
                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">Title</label>
                            <input type="text" name="title" class="form-control" id="">
                            @error('title')
                                <strong class="text-danger">{{$message}}</strong>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Offer Title</label>
                            <input type="text" name="off_title" class="form-control" id="">
                            @error('off_title')
                                <strong class="text-danger">{{$message}}</strong>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Time</label>
                            <input type="date" name="time" class="form-control" id="">
                            @error('time')
                                <strong class="text-danger">{{$message}}</strong>
                            @enderror
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-6"></div>
    </div>
@endsection