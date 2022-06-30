@extends('super/layout.layout')


@section('page_title','Vendor Listing')
@section('container')


   <!-- end Topbar -->

                        <div class="container-fluid">
                        
                        <!-- start page title -->
                       <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Hyper</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                                            <li class="breadcrumb-item active">Data Tables</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Data Tables</h4>
                                    {{session('msg')}}

                                </div>
                            </div>
                        </div> <!-- end page title --> 


                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Basic Data Table</h4>
                                        <div class="tab-content">
                                                <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                                                    <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>City</th>
                                                            <th>Category</th>
                                                            <th>Email</th>
                                                            <th>Wallet Balance</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                
                                                
                                                    <tbody>
                                                        @foreach($result as $list)
                                                        
                                                        <tr>
                                                            <td>{{$list->full_name}}</td>
                                                            <td>{{$list->city}}</td>
                                                            <td>{{$list->job_category}}</td>
                                                            <td>{{$list->email_add}}</td>
                                                            <td>{{$list->wallet_bal}}</td>
                                                            <td>@if($list->status == 0)



                                                                <a href="{{url('/superadmin/edit_inactive/'.$list->id)}}" class="btn btn-danger">Inactive</a></td>
                                                               @else
                                                                <a href="{{url('/superadmin/edit_active/'.$list->id)}}" class="btn btn-success">Active</a></td>
                                                                @endif

                                                        </tr>
                                                       @endforeach
                                                    </tbody>
                                                </table>                                           
                                        </div> <!-- end tab-content-->

                                    </div> <!-- end card body-->
                                </div> <!-- end card -->
                            </div><!-- end col-->
                        </div> <!-- end row-->
                    </div> <!-- container -->
                      
@endsection              