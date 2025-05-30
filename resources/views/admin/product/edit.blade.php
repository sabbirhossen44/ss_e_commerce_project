@extends('layouts.admin')
@section('style')
    <style>
        .upload__box {
            /* padding: 40px; */
        }

        .upload__inputfile {
            width: 0.1px;
            height: 0.1px;
            opacity: 0;
            overflow: hidden;
            position: absolute;
            z-index: -1;
        }

        .upload__btn {
            display: block;
            font-weight: 600;
            text-align: left;
            min-width: 116px;
            padding: 7px;
            transition: all 0.3s ease;
            cursor: pointer;
            border: 2px solid;
            background-color: transparent;
            border-color: #f2f2f2;
            line-height: 26px;
            font-size: 14px;
            color: #000000c9;
        }

        .upload__btn:hover {
            background-color: unset;
            color: #4045ba;
            transition: all 0.3s ease;
        }

        .upload__btn-box {
            margin-bottom: 10px;
        }

        .upload__img-wrap {
            display: flex;
            flex-wrap: wrap;
            margin: 0 -10px;
        }

        .upload__img-box {
            width: 200px;
            padding: 0 10px;
            margin-bottom: 12px;
        }

        .upload__img-close {
            width: 24px;
            height: 24px;
            border-radius: 50%;
            background-color: rgba(0, 0, 0, 0.5);
            position: absolute;
            top: 10px;
            right: 10px;
            text-align: center;
            line-height: 28px;
            z-index: 1;
            cursor: pointer;
        }

        .upload__img-close::after {
            content: "✖";
            font-size: 14px;
            color: white;
        }

        .img-bg {
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            position: relative;
            padding-bottom: 100%;
        }
    </style>
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between items-center">
                    <h3>Edit Product</h3>
                    <a href="{{route('product.list')}}" class="btn btn-primary">Product List</a>
                </div>
                <div class="card-body">
                    <form action="{{route('product.update' , $product->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="" class="form-label">Category</label>
                                    <select name="category_id" class="form-control category" id="">
                                        <option value="{{$product->category_id}}">{{$product->pro_to_cat->category_name}}
                                        </option>
                                        @foreach ($categories as $category)
                                            <option value="{{$category->id}}">{{$category->category_name}}</option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                        <strong class="text-danger">{{$message}}</strong>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="" class="form-label">Sub_Category</label>
                                    <select name="sub_category_id" class="form-control subcategory" id="">
                                        <option value="{{$product->subcategory_id}}">
                                            {{$product->pro_to_sub->subcategory_name}}
                                        </option>
                                        @foreach ($subcategories as $subcategory)
                                            <option value="{{$subcategory->id}}">{{$subcategory->subcategory_name}}</option>
                                        @endforeach
                                    </select>
                                    @error('sub_category_id')
                                        <strong class="text-danger">{{$message}}</strong>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="" class="form-label">Brand</label>
                                    <select name="brand_id" class="form-control" id="">
                                        <option value="{{$product->brand_id}}">{{$product->pro_to_br->brand_name}}</option>
                                        @foreach ($brands as $brand)
                                            <option value="{{$brand->id}}">{{$brand->brand_name}}</option>
                                        @endforeach
                                    </select>
                                    @error('brand')
                                        <strong class="text-danger">{{$message}}</strong>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="" class="form-label">Product Name</label>
                                    <input type="text" name="product_name" class="form-control" id=""
                                        value="{{$product->product_name}}">
                                    @error('product_name')
                                        <strong class="text-danger">{{$message}}</strong>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="" class="form-label">Product Price</label>
                                    <input type="number" name="price" class="form-control" id=""
                                        value="{{$product->price}}">
                                    @error('price')
                                        <strong class="text-danger">{{$message}}</strong>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="" class="form-label">Discount Price(%)</label>
                                    <input type="number" name="dis_price" class="form-control" id=""
                                        value="{{$product->discount}}">
                                    @error('dis_price')
                                        <strong class="text-danger">{{$message}}</strong>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="" class="form-label">Tags</label>
                                    <select id="select-gear" class="demo-default " name="tags[]" multiple
                                        placeholder="Select Tags">
                                        <option value="">Select Tags.</option>
                                        <optgroup label="Climbing">
                                            @foreach ($tags as $tag)
                                                <option value="{{$tag->id}}" {{ in_array($tag->id, $selected_tags) ? 'selected' : '' }}>
                                                    {{$tag->tag_name}}
                                                </option>
                                            @endforeach
                                        </optgroup>

                                    </select>
                                    @error('dis_price')
                                        <strong class="text-danger">{{$message}}</strong>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="" class="form-label">Short Description</label>
                                    <input type="text" name="sort_desc" class="form-control" id=""
                                        value="{{$product->short_desc}}">
                                    @error('sort_desc')
                                        <strong class="text-danger">{{$message}}</strong>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="" class="form-label">Long Description</label>
                                    <textarea class="summernote" name="long_desc">{{$product->long_desc}}"</textarea>
                                    @error('long_desc')
                                        <strong class="text-danger">{{$message}}</strong>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="" class="form-label">Additional Information</label>
                                    <textarea class="summernote" name="addi_info">{{$product->addi_info}}</textarea>
                                    @error('addi_info')
                                        <strong class="text-danger">{{$message}}</strong>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="" class="form-label">Preview Image</label>
                                    <input type="file" name="preview" id="" class="form-control"
                                        onchange="document.getElementById('preview').src = window.URL.createObjectURL(this.files[0])">
                                    @error('preview')
                                        <strong class="text-danger">{{$message}}</strong>
                                    @enderror
                                    <img src="{{asset('uploads/product/preview/' . $product->preview)}}" width="100"
                                        id="preview" alt="" class="mt-2">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <div class="upload__box">
                                        <div class="upload__btn-box">
                                            <label for="text" class="form-label">Gallery Image</label> <br>
                                            <label class="upload__btn">
                                                <p>Chose File</p>
                                                <input type="file" multiple="" data-max_length="20" name="gallery[]"
                                                    class="upload__inputfile form-control">
                                                @error('gallery')
                                                    <strong class="text-danger">{{$message}}</strong>
                                                @enderror
                                            </label>
                                        </div>
                                        <div class="upload__img-wrap">
                                            @foreach ($product_gallery as $image)
                                                <div class="img-box" id="img-box-{{ $image->id }}"
                                                    style="position: relative; display: inline-block;  margin: 10px;">
                                                    <img src="{{ asset('uploads/product/productgallery/' . $image->gallery) }}"
                                                        height="150" width="150" class="mt-2" alt="">

                                                    <!-- Delete Button -->
                                                    <button type="button" class="delete-img-btn" data-id="{{ $image->id }}"
                                                        style="position: absolute; top: 15px; right: 5px; background-color: red; color: white; border: none; border-radius: 50%; width: 20px; height: 20px; font-weight: bold;">
                                                        ×
                                                    </button>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary">Update Product</button>
                                    <a href="{{route('product.list')}}" class="btn btn-secondary">Back</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('footer_script')
    <script>
        $(document).ready(function () {
            $('.delete-img-btn').click(function () {
                var imageId = $(this).data('id');
                var confirmed = confirm('Are you sure you want to delete this image?');

                if (confirmed) {
                    $.ajax({
                        url: '/ajax-gallery-image-delete/' + imageId,
                        type: 'DELETE',
                        data: {
                            _token: '{{ csrf_token() }}'
                        },
                        success: function (response) {
                            if (response.success) {
                                $('#img-box-' + imageId).fadeOut(300, function () {
                                    $(this).remove();
                                });
                            }
                        },
                        error: function () {
                            alert('Something went wrong!');
                        }
                    });
                }
            });
        });
    </script>
    <script>
        $('.category').click(function () {
            var category_id = $(this).val();
            $.ajax({
                type: 'POST',
                url: '/getsubcategory',
                data: { 'category_id': category_id },
                headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                success: function (data) {
                    $(".subcategory").html(data);
                    // alert(data)
                }
            })
        })

    </script>
    <script>
        $('#select-gear').selectize({ sortField: 'text' })
    </script>
    <script>
        $(document).ready(function () {
            $('.summernote').summernote();
        });
    </script>
    <script>
        jQuery(document).ready(function () {
            ImgUpload();
        });

        function ImgUpload() {
            var imgWrap = "";
            var imgArray = [];

            $('.upload__inputfile').each(function () {
                $(this).on('change', function (e) {
                    imgWrap = $(this).closest('.upload__box').find('.upload__img-wrap');
                    var maxLength = $(this).attr('data-max_length');

                    var files = e.target.files;
                    var filesArr = Array.prototype.slice.call(files);
                    var iterator = 0;
                    filesArr.forEach(function (f, index) {

                        if (!f.type.match('image.*')) {
                            return;
                        }

                        if (imgArray.length > maxLength) {
                            return false
                        } else {
                            var len = 0;
                            for (var i = 0; i < imgArray.length; i++) {
                                if (imgArray[i] !== undefined) {
                                    len++;
                                }
                            }
                            if (len > maxLength) {
                                return false;
                            } else {
                                imgArray.push(f);

                                var reader = new FileReader();
                                reader.onload = function (e) {
                                    var html = "<div class='upload__img-box'><div style='background-image: url(" + e.target.result + ")' data-number='" + $(".upload__img-close").length + "' data-file='" + f.name + "' class='img-bg'><div class='upload__img-close'></div></div></div>";
                                    imgWrap.append(html);
                                    iterator++;
                                }
                                reader.readAsDataURL(f);
                            }
                        }
                    });
                });
            });

            $('body').on('click', ".upload__img-close", function (e) {
                var file = $(this).parent().data("file");
                for (var i = 0; i < imgArray.length; i++) {
                    if (imgArray[i].name === file) {
                        imgArray.splice(i, 1);
                        break;
                    }
                }
                $(this).parent().parent().remove();
            });
        }
    </script>
    @if (session('product_update'))
        <script>
            Swal.fire({
                position: "top-end",
                icon: "success",
                title: "{{ session('product_update') }}",
                showConfirmButton: false,
                timer: 2000
            });
        </script>
    @endif

@endsection