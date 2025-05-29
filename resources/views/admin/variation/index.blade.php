@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-lg-8">
            <div class="mb-3">
                <div class="card">
                    <div class="card-header">
                        <h4>Color List</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <th>SL</th>
                                <th>Color Name</th>
                                <th>Color</th>
                                <th>Action</th>
                            </tr>
                            @foreach ($colors as $sl => $color)
                                <tr>
                                    <td>{{$sl + 1}}</td>
                                    <td>{{$color->color_name}}</td>
                                     <td>
                                        <i
                                            style="display: inline-block; width: 50px; height: 30px; background: {{$color->color_name == 'NA' ? ' ' : $color->color_code}}; color:{{$color->color_name == 'NA' ? '' : 'transparent'}};">{{$color->color_name == 'NA' ? $color->color_name : 'Color' }}</i>
                                    </td>
                                    <td>
                                        <a href="" class="btn btn-danger btn-icon delete_btn"
                                            data-link="{{route('color.delete', $color->id)}}">
                                            <i class="link-icon" data-feather="trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <div class="card">
                    <div class="card-header">
                        <h4>Size List</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <th>SL</th>
                                <th>Size Name</th>
                                <th>Action</th>
                            </tr>
                            @foreach ($sizes as $sl => $size)
                                <tr>
                                    <td>{{$sl + 1}}</td>
                                    <td>{{$size->size_name}}</td>
                                    <td>
                                        <a href="" class="btn btn-danger btn-icon size_btn"
                                            data-link="{{route('size.delete', $size->id)}}">
                                            <i class="link-icon" data-feather="trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                        <div class="mt-2 d-flex justify-content-end">
                                {{$sizes->links()}}
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="mb-3">
                <div class="card">
                    <div class="card-header">
                        <h3>New Color</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{route('color.store')}}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="" class="form-label">Color Name</label>
                                <input type="text" name="color_name" class="form-control" id="">
                                @error('color_name')
                                    <strong class="text-danger">{{$message}}</strong>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Color Code</label>
                                <input type="text" name="color_code" class="form-control" id="" placeholder="#ffffff">
                                @error('color_code')
                                    <strong class="text-danger">{{$message}}</strong>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Add Color</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <div class="card">
                    <div class="card-header">
                        <h3>Add Size</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{route('size.store')}}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="" class="form-label">Size Name</label>
                                <input type="text" name="size_name" class="form-control" id="">
                                @error('size_name')
                                    <strong class="text-danger">{{$message}}</strong>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Add Size</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('footer_script')
    @if (session('color_store'))
        <script>
            Swal.fire({
                position: "top-end",
                icon: "success",
                title: "{{ session('color_store') }}",
                showConfirmButton: false,
                timer: 2000
            });
        </script>
    @endif
    @if (session('color_delete'))
        <script>
            Swal.fire({
                position: "top-end",
                icon: "success",
                title: "{{ session('color_delete') }}",
                showConfirmButton: false,
                timer: 2000
            });
        </script>
    @endif
    @if (session('size_delete'))
        <script>
            Swal.fire({
                position: "top-end",
                icon: "success",
                title: "{{ session('size_delete') }}",
                showConfirmButton: false,
                timer: 2000
            });
        </script>
    @endif
    @if (session('size_store'))
        <script>
            Swal.fire({
                position: "top-end",
                icon: "success",
                title: "{{ session('size_store') }}",
                showConfirmButton: false,
                timer: 2000
            });
        </script>
    @endif
    <script>
        $('.size_btn').click(function (e) {
            e.preventDefault();
            var link = $(this).data('link');
            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: "btn btn-success",
                    cancelButton: "btn btn-danger"
                },
                buttonsStyling: false
            });
            swalWithBootstrapButtons.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "Yes, delete it!",
                cancelButtonText: "No, cancel!",
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    swalWithBootstrapButtons.fire({
                        title: "Deleted!",
                        text: "Your file has been deleted.",
                        icon: "success"
                    });
                    window.location.href = link;
                } else if (
                    /* Read more about handling dismissals below */
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    swalWithBootstrapButtons.fire({
                        title: "Cancelled",
                        text: "Your imaginary file is safe :)",
                        icon: "error"
                    });
                }
            });
        })
    </script>
    <script>
        $('.delete_btn').click(function (e) {
            e.preventDefault();
            var link = $(this).data('link');
            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: "btn btn-success",
                    cancelButton: "btn btn-danger"
                },
                buttonsStyling: false
            });
            swalWithBootstrapButtons.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "Yes, delete it!",
                cancelButtonText: "No, cancel!",
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    swalWithBootstrapButtons.fire({
                        title: "Deleted!",
                        text: "Your file has been deleted.",
                        icon: "success"
                    });
                    window.location.href = link;
                } else if (
                    /* Read more about handling dismissals below */
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    swalWithBootstrapButtons.fire({
                        title: "Cancelled",
                        text: "Your imaginary file is safe :)",
                        icon: "error"
                    });
                }
            });
        })
    </script>
@endsection