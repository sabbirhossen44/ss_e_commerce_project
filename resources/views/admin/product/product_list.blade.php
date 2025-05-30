@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h3>Produc List</h3>
                    <a href="{{route('product')}}" class="btn btn-primary">Add Produc</a>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>SL</th>
                            <th>Product Name</th>
                            <th>Category</th>
                            <th>Sub Category</th>
                            <th>Price</th>
                            <th>Discount</th>
                            <th>Status</th>
                            <th>Discout50%</th>
                            <th>Discout30%</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($products as $sl => $product)
                            <tr>
                                <td>{{$products->firstItem() + $sl}}</td>
                                <td class="text-wrap">{{$product->product_name}}</td>
                                <td class="text-wrap">{{$product->pro_to_cat->category_name}}</td>
                                <td class="text-wrap">{{$product->pro_to_sub->subcategory_name}}</td>
                                <td>{{$product->price}}</td>
                                <td>{{$product->discount}}%</td>
                                <td>

                                    <input type="checkbox" {{ $product->status == 1 ? 'checked' : '' }} name=""
                                        data-id="{{ $product->id }}" class="status" data-toggle="toggle"
                                        value="{{ $product->status }}">
                                </td>
                                <td>
                                    <input type="checkbox" data-toggle="toggle" {{$product->discount50 == 1 ? 'checked' : ''}}
                                        data-id="{{$product->id}}" class="discount50" value="{{$product->discount50}}">
                                </td>
                                <td>
                                    <input type="checkbox" data-toggle="toggle" {{$product->discount30 == 1 ? 'checked' : ''}}
                                        data-id="{{$product->id}}" class="discount30" value="{{$product->discount30}}">
                                </td>
                                <td>
                                    <a href="{{route('inventory', $product->id)}}" class="btn btn-primary btn-icon">
                                        <i data-feather="layers"></i>
                                    </a>
                                    <a href="{{route('product.edit', $product->id)}}" class="btn btn-secondary btn-icon">
                                        <i data-feather="edit"></i>
                                    </a>
                                    <a href="" class="btn btn-danger btn-icon delete_btn"
                                        data-link="{{route('product.delete', $product->id)}}">
                                        <i data-feather="trash"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
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
                url: '/product/getstatus',
                data: {
                    'product_id': product_id,
                    'status': status
                },
                success: function (data) {

                }
            });
        });
        $('.discount50').change(function () {
            var product_id = $(this).attr('data-id');
            var discount50 = $(this).is(':checked') ? 1 : 0;
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: 'POST',
                url: '/product/discount50',
                data: {
                    'product_id': product_id,
                    'discount50': discount50
                },
                success: function (data) {

                }
            });
        })
        $('.discount30').change(function () {
            var product_id = $(this).attr('data-id');
            var discount30 = $(this).is(':checked') ? 1 : 0;
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: 'POST',
                url: '/product/discount30',
                data: {
                    'product_id': product_id,
                    'discount30': discount30
                },
                success: function (data) {

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
    @if (session('product_delete'))
        <script>
            Swal.fire({
                position: "top-end",
                icon: "success",
                title: "{{ session('product_delete') }}",
                showConfirmButton: false,
                timer: 2000
            });
        </script>
    @endif
@endsection