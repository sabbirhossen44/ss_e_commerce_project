@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4>Shop Page Content List</h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>SL</th>
                            <th>Title</th>
                            <th>Photo</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($contents as $sl => $content)
                            <tr>
                                <td>{{$sl + 1}}</td>
                                <td class="text-wrap">{{$content->title}}</td>
                                <td>
                                    @php
                                        $photo = public_path('uploads/shop_page/' . $content->photo);
                                    @endphp
                                    @if ($content->photo && file_exists($photo))
                                        <img src="{{asset('uploads/shop_page/' . $content->photo)}}" alt="">
                                    @endif
                                </td>
                                <td>
                                    <input type="checkbox" {{$content->status == 1 ? 'checked' : ''}} data-id="{{$content->id}}"
                                        name="" class="status" data-toggle="toggle" id="" value="{{$content->status}}">
                                </td>
                                <td>

                                    <a href="{{route('shop_page.edit', $content->id)}}" class="btn btn-secondary btn-icon">
                                        <i data-feather="edit"></i>
                                    </a>
                                    <a href="" class="btn btn-danger btn-icon delete_btn" data-link="{{route('shop.page.delete', $content->id)}}">
                                        <i data-feather="trash"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h4>Add Content</h4>
                </div>
                <div class="card-body">
                    <form action="{{route('shop.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">Title</label>
                            <input type="text" name="title" class="form-control" id="">
                            @error('title')
                                <strong class="text-danger">{{$message}}</strong>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Photo</label>
                            <input type="file" name="photo" class="form-control" id="">
                            @error('photo')
                                <strong class="text-danger">{{$message}}</strong>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Add Content</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer_script')
    <script>
        $('.status').change(function () {
            var product_id = $(this).attr('data-id');
            var status = $(this).is(':checked') ? 1 : 0;
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: 'POST',
                url: '/shop/getstatus',
                data: {
                    'product_id': product_id,
                    'status': status
                },
                success: function (data) {

                }
            });
        });
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
                    setTimeout(() => {
                        window.location.href = link;
                    }, 1000);
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
    @if (session('shoppage_store'))
        <script>
            Swal.fire({
                position: "top-end",
                icon: "success",
                title: "{{ session('shoppage_store') }}",
                showConfirmButton: false,
                timer: 2000
            });
        </script>
    @endif
    @if (session('delete'))
        <script>
            Swal.fire({
                position: "top-end",
                icon: "success",
                title: "{{ session('delete') }}",
                showConfirmButton: false,
                timer: 2000
            });
        </script>
    @endif
@endsection