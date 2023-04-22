@extends('layouts.app')

@section('content')
    <!-- ========== title-wrapper start ========== -->
    <div class="title-wrapper pt-30">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="title mb-30">
                    <h2>{{ __('Users') }}</h2>
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

                <div class="table-wrapper table-responsive">
                    <table class="table striped-table">
                        <thead>
                        <tr>
                            <th></th>
                            <th><h6>Name</h6></th>
                            <th><h6>Email</h6></th>
                        </tr>
                        <!-- end table row-->
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td><h6 class="text-sm">#{{ $user->id }}</h6></td>
                                <td>
                                    <p>{{ $user->name }}</p>
                                </td>
                                <td>
                                    <p>{{ $user->email }}</p>
                                </td>
                            </tr>
                        @endforeach
                        <!-- end table row -->
                        </tbody>
                    </table>
                    <!-- end table -->
                </div>

                <div class="pt-10 pb-10 d-flex flex-wrap justify-content-between">
                    <div class="left"></div>
                    <div class="right">
                        {{ $users->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
