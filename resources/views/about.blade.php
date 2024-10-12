@extends('layouts.app')

@section('content')
    <!-- ========== title-wrapper start ========== -->
    <div class="title-wrapper pt-30">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="title mb-30">
                    <h2>{{ __('About us') }}</h2>
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- ========== title-wrapper end ========== -->

    <div class="card-styles">
        <div class="card-style-3 mb-30">
            <div class="card-content">
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="mb-2">Laravel PlainAdmin</h4>
                        <p class="mb-2">PlainAdmin for Laravel.</p>
                        <p class="mb-2">Recommend to install this preset on a project that you are starting from scratch, otherwise your project's design might break.</p>
                        <p class="mb-2">If you found this project useful, then please consider giving it a ⭐</p>
                        <a href="https://github.com/aleckrh/laravel-plainadmin" target="_blank" class="btn btn-dark btn-hover">
                            <span class="mdi mdi-github"></span> Go to repository
                        </a>
                    </div>
                    <hr class="my-3">
                    <div class="col-md-12">
                        <h4 class="mb-2">Credits</h4>
                        <p class="mb-2">Laravel PlainAdmin uses some open-source third-party libraries/packages, many thanks to the web community.</p>
                        <ul>
                            <li><a href="https://laravel.com" target="_blank">Laravel</a> - Open source framework.</li>
                            <li><a href="https://github.com/DevMarketer/LaravelEasyNav" target="_blank">LaravelEasyNav</a> - Making managing navigation in Laravel easy.</li>
                            <li><a href="https://startbootstrap.com/themes/sb-admin-2" target="_blank">PlainAdmin</a> - Thanks to PlainAdmin.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
