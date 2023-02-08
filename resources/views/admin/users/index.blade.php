@extends('layouts.admin')

@section('content')
<div class="container-fluid mt-5">

    <!-- Heading -->
    <div class="card mb-4 wow fadeIn">
        <!--Card content-->
        <div class="card-body d-sm-flex justify-content-between">

            <h4 class="mb-2 mb-sm-0 pt-1">
                <a href="https://mdbootstrap.com/docs/jquery/" target="_blank">Home Page</a>
                <span>/</span>
                <span>Dashboard</span>
            </h4>

            <form class="d-flex justify-content-center">
                <!-- Default input -->
                <input type="search" placeholder="Type your query" aria-label="Search" class="form-control">
                <button class="btn btn-primary btn-sm my-0 p" type="submit">
                    <i class="fas fa-search"></i>
                </button>

            </form>

        </div>

    </div>
    <!-- Heading -->

    <!--Grid row-->
    <div class="row wow fadeIn">

        <!--Grid column-->
        <div class="col-md-12">

            <!--Card-->
            <div class="card">
                <!--Card content-->
                <div class="card-body">
                    {{-- <h5>Total Orders : 9</h5> --}}
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->role_as }}</td>

                                <td>
                                    <a href="" class="badge badge-pill btn-primary px-3 py-2">EDIT</a>
                                    <a href="" class="badge bagde-pill btn-danger px-3 py-2">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
            <!--/.Card-->

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-3 mb-4">

            <!--Card-->
            <div class="card">

                <!--Card content-->
                <div class="card-body">
                    <h5>Today Orders : 5</h5>
                </div>

            </div>
            <!--/.Card-->

        </div>
        <!--Grid column-->


    </div>

</div>

@endsection
