{{-- <x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password
        reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SS-Shop - logion</title>
    <!-- core:css -->
    <link rel="stylesheet" href="{{asset('backend')}}/assets/vendors/core/core.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- end plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('backend')}}/assets/fonts/feather-font/css/iconfont.css">
    <link rel="stylesheet" href="{{asset('backend')}}/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('backend')}}/assets/css/demo_1/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{asset('backend')}}/assets/images/favicon.png" />
</head>

<body>
    <div class="main-wrapper">
        <div class="page-wrapper full-page">
            <div class="page-content d-flex align-items-center justify-content-center">

                <div class="row w-100 mx-0 auth-page">
                    <div class="col-md-8 col-xl-6 mx-auto">
                        <div class="card">
                            <div class="row d-flex align-items-center">
                                <div class="col-md-6 pr-md-0">
                                    <div class="auth-left-wrapper">
                                        <img src="{{asset('backend/assets/images/login.jpg')}}" width="100%"
                                            height="100%" class="object-cover" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6 pl-md-0">
                                    <div class="auth-form-wrapper px-4 py-5 ">
                                        @if (session('status'))
                                            <div class="alert alert-primary">{{session('status')}}</div>
                                        @endif

                                        <a href="#" class="noble-ui-logo d-block mb-2">SS<span>Shop</span></a>
                                        <h5 class="text-muted font-weight-normal mb-4">Forgot your password? No problem.
                                            Just let us know your email address and we will email you a password reset
                                            link that will allow you to choose a new one.</h5>
                                        <form class="forms-sample" method="POST" action="{{ route('password.email') }}">
                                            @csrf
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email address</label>
                                                <input type="email" name="email" required class="form-control"
                                                    id="exampleInputEmail1" placeholder="Email">
                                            </div>

                                            <div class="mt-3">
                                                <button type="submit"
                                                    class="btn btn-primary mr-2 mb-2 mb-md-0 text-white">Email Password
                                                    Reset Link</button>
                                                <a href="{{route('login')}}" class="btn btn-secondary mr-2 mb-2 mb-md-0 text-white">Back</a>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- core:js -->
    <script src="{{asset('backend')}}/assets/vendors/core/core.js"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->
    <!-- end plugin js for this page -->
    <!-- inject:js -->
    <script src="{{asset('backend')}}/assets/vendors/feather-icons/feather.min.js"></script>
    <script src="{{asset('backend')}}/assets/js/template.js"></script>
    <!-- endinject -->
    <!-- custom js for this page -->
    <!-- end custom js for this page -->
</body>

</html>