@extends('admin/layout.layout')


@section('page_title','Vendor Edit')
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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                            <li class="breadcrumb-item active">Registration Details</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Edit</h4>
                                </div>
                            </div>
                        </div> <!-- end page title --> 


                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <!--<h4 class="header-title">Edit </h4>-->
                                       <!-- end nav-->

                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="input-types-preview">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <form id="reg-form-edit" method="post" action="{{url('admin/update/'.$result['0']->id)}}" enctype="multipart/form-data">
                                                            @csrf
                                                            <div class="mb-3">
                                                                <label for="simpleinput" class="form-label">Enter Full Name</label>
                                                                <input type="text" id="full_name" name="full_name" value="{{$result['0']->full_name}}" class="form-control">
                                                                <span class="field_error">  @error('full_name')
                                                                {{$message}}
                                                                @enderror</span>
                                                            </div>
        
                                                           
                                                              <div class="mb-3">
                                                                <label for="example-number" class="form-label">Enter Phone Number</label>
                                                                <input class="form-control" id="phone_number" type="number" value="{{$result['0']->phno}}" name="phone_number">
                                                                <span class="field_error">  @error('phone_number')
                                                                {{$message}}
                                                                @enderror</span>
                                                            </div>
        
                                                           
                                                          
                                                             <div class="mb-3">
                                                                <label for="example-select" class="form-label">Select City</label>
                                                                <select class="form-select" id="city" name="city">
                                                                   @foreach($cities as $c)
                                                                   @if($c->id == $result['0']->city) 
                                                                   <?php $a = "selected";?>
                                                                   @else
                                                                   <?php $a = "";?>
                                                                   @endif
                                                                    <option value="{{$c->id}}" <?php echo $a;?>>{{$c->name}}</option>
                                                                   @endforeach 
                                                                 
                                                                </select>
                                                                <span class="field_error">  @error('city')
                                                                {{$message}}
                                                                @enderror</span>
                                                            </div>   
                                                            <div class="mb-3">
                                                                <label for="example-select" class="form-label">Select Category</label>
                                                                <select class="form-select" id="category" name="category">
                                                                    <!--<option value="">Select Category</option>-->
                                                                   @foreach($cats as $c)
                                                                   @if($c->id == $result['0']->job_category) 
                                                                   <?php $a = "selected";?>
                                                                   @else
                                                                   <?php $a = "";?>
                                                                   @endif
                                                                    <option value="{{$c->id}}" <?php echo $a;?>>{{$c->category_name}}</option>
                                                                   @endforeach
                                                                  
                                 
                                                                </select>
                                                                <span class="field_error">  @error('category')
                                                                 {{$message}}
                                                                @enderror</span>
                                                            </div>
                                                             <div class="mb-3">
                                                                <label for="example-fileinput" class="form-label">Upload Aadhar Card</label>
                                                                <input type="file" id="adhaar_card" name="adhaar_card" class="form-control">
                                                                <span class="field_error">  @error('adhaar_card')
                                                                {{$message}}
                                                                @enderror</span>

                                                            </div>
                                                             <div class="mb-3">
                                                                <label for="example-fileinput" class="form-label">Upload PAN Card</label>
                                                                <input type="file" id="pan_card" name="pan_card" class="form-control">
                                                                <span class="field_error">  @error('pan_card')
                                                                {{$message}}
                                                                @enderror</span>

                                                            </div>
                                                             <div class="mb-3">
                                                                <label for="example-fileinput" class="form-label">Upload License</label>
                                                                <input type="file" id="license" name="license" class="form-control">
                                                                <span class="field_error">  @error('license')
                                                                {{$message}}
                                                                @enderror</span>

                                                            </div>
                                                    
                                                            <button class="btn btn-primary" type="submit" value="submit">Submit
                                                            </button>
                                                        
                                                        
                                                    </div> <!-- end col -->
                                                    <div class="col-lg-6">
                                                        
                                                            <div class="mb-3">
                                                                <label for="example-email" class="form-label">Enter Email</label>
                                                                <input type="email" id="email" name="email" value="{{$result['0']->email_add}}" class="form-control" placeholder="Email">
                                                                <span class="field_error">  @error('email')
                                                                {{$message}}
                                                                @enderror</span>
                                                            </div>
                                                             <div class="mb-3">
                                                                <label for="example-select" class="form-label">Select Wallet Amount</label>
                                                                <select class="form-select" id="amount" name="amount">
                                                                @foreach($wallet as $w)
                                                                   @if($w->id == $result['0']->wallet_bal) 
                                                                   <?php $a = "selected";?>
                                                                   @else
                                                                   <?php $a = "";?>
                                                                   @endif
                                                                    <option value="{{$w->id}}" <?php echo $a;?>>{{$w->bal_amt}}</option>
                                                                   @endforeach
                                                                    <!--<option value="200">₹200</option>
                                                                    <option value="500">₹500</option>
                                                                    <option value="1000">₹1000</option>
                                                                    <option value="1200">₹1200</option>
                                                                    <option value="1500">₹1500</option>-->
                                                                </select>
                                                                <span class="field_error">  @error('amount')
                                                                 {{$message}}
                                                                 @enderror</span>
                                                            </div>   
                                                            <!-- <div class="mb-3">
                                                                <label for="example-password" class="form-label">Change Password</label>
                                                                <input type="password" id="password_1" class="form-control" name="testpassword">
                                                            </div>
                                                             <div class="mb-3">
                                                                <label for="example-password" class="form-label">Re Enter Password</label>
                                                                <input type="password" id="password_2" onchange="checkfunc(this)" class="form-control" name="password">
                                                               
                                                            </div>-->

                                                 </div>

                                                 </form>
                                                </div>
                                                <!-- end row-->                      
                                            </div> <!-- end preview-->
                                        
                                         
                                        </div> <!-- end tab-content-->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card -->
                            </div><!-- end col -->
                        </div><!-- end row -->

     
                    </div> <!-- container -->
                      
@endsection              