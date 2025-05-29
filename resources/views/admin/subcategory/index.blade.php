@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-lg-8">
            <div class="row">
                @foreach ($categories as $category)
                    <div class="col-lg-4 mt-3">
                        <div class="card">
                            <div class="card-header">
                                <h6>{{$category->category_name}}</h6>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <tr>
                                        <th>Sub_Category</th>
                                        <th>Action</th>
                                    </tr>
                                    @foreach (App\Models\subCategory::where('category_id', $category->id)->latest()->get() as $subCategory)
                                        <tr>
                                            <td>{{$subCategory->subcategory_name}}</td>
                                            <td>
                                                <a href="" class="btn btn-danger btn-icon delete_btn"
                                                    data-link="{{route('subcategory.delete', $subCategory->id)}}">
                                                    <i class="link-icon" data-feather="trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h3>New SubCategory</h3>
                </div>
                <div class="card-body">
                    <form action="{{route('subcategory.store')}}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">Category</label>
                            <select name="category_id" id="" class="form-control">
                                <option value="">Select Category</option>
                                @foreach ($categories as $category)
                                    <option value="{{$category->id}}">{{$category->category_name}}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                                <strong class="text-danger">{{$message}}</strong>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">SubCategory Name</label>
                            <input type="text" name="subcategory" class="form-control" id="">
                            @error('subcategory')
                                <strong class="text-danger">{{$message}}</strong>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Add SubCategory</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('footer_script')
    @if (session('subcategory_add'))
        <script>
            Swal.fire({
                position: "top-end",
                icon: "success",
                title: "{{ session('subcategory_add') }}",
                showConfirmButton: false,
                timer: 2000
            });
        </script>
    @endif
    @if (session('subcategory_delete'))
        <script>
            Swal.fire({
                position: "top-end",
                icon: "success",
                title: "{{ session('subcategory_delete') }}",
                showConfirmButton: false,
                timer: 2000
            });
        </script>
    @endif
    @if (session('subcategory_error'))
        <script>
            Swal.fire({
                position: "top-end",
                icon: "info",
                title: "{{ session('subcategory_error') }}",
                showConfirmButton: false,
                timer: 2000
            });
        </script>
    @endif
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