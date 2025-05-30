@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h4>{{$product->product_name}}</h4>
                    <a href="{{route('product.list')}}" class="btn btn-primary">Product List</a>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>SL</th>
                            <th>Color Name</th>
                            <th>Size Name</th>
                            <th>Quantity</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($inventories as $sl => $inventory)
                            <tr>
                                <td>{{$sl + 1}}</td>
                                <td>{{$inventory->inv_to_color->color_name}}</td>
                                <td>{{$inventory->inv_to_size->size_name}}</td>
                                <td>{{$inventory->quantity}}</td>
                                <td>
                                    <a href="" class="btn btn-danger btn-icon delete_btn"
                                        data-link="{{route('inventory.delete', $inventory->id)}}">
                                        <i class="link-icon" data-feather="trash"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h4>Add Inventory</h4>
                </div>
                <div class="card-body">
                    <form action="{{route('inventory.store', $product->id)}}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">Color</label>
                            <select name="color_id" id="">
                                <option value="">Select Color</option>
                                @foreach ($colors as $color)
                                    <option value="{{$color->id}}">{{$color->color_name}}</option>
                                @endforeach
                            </select>
                            @error('color_id')
                                <strong class="text-danger">{{$message}}</strong>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Size</label>
                            <select name="size_id" id="">
                                <option value="">Select Size</option>
                                @foreach ($sizes as $size)
                                    <option value="{{$size->id}}">{{$size->size_name}}</option>
                                @endforeach
                            </select>
                            @error('size_id')
                                <strong class="text-danger">{{$message}}</strong>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Quantity</label>
                            <input type="number" name="quantity" class="form-control" id="">
                            @error('quantity')
                                <strong class="text-danger">{{$message}}</strong>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Add Inventory</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('footer_script')
    @if (session('inventory_add'))
        <script>
            Swal.fire({
                position: "top-end",
                icon: "success",
                title: "{{ session('inventory_add') }}",
                showConfirmButton: false,
                timer: 2000
            });
        </script>
    @endif
    @if (session('inventory_increment'))
        <script>
            Swal.fire({
                position: "top-end",
                icon: "success",
                title: "{{ session('inventory_increment') }}",
                showConfirmButton: false,
                timer: 2000
            });
        </script>
    @endif
    @if (session('inventory_delete'))
        <script>
            Swal.fire({
                position: "top-end",
                icon: "success",
                title: "{{ session('inventory_delete') }}",
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