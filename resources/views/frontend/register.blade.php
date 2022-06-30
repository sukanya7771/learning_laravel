@extends('frontend/layout.layout')


@section('page_title','Vendor Registration')
@section('container')

<div class="banner-log">
    <div class="container">
        <div class="row">
            <div class="col-md-4 ml-auto">
                <div class="banner-form">
                    <form id="reg-form" method="post" action="{{url('admin/register/submit')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Full name</label>
                            <input type="text" name="full_name" id="full_name" class="form-control" placeholder="Enter Full name">
                            <span class="field_error">  @error('full_name')
                        {{$message}}
                        @enderror</span>
                        </div>
                        <div class="form-group">
                            <label>Phone Number</label>
                            <input type="text" name="phno" id="phno" class="form-control" placeholder="Enter Phone Number">
                            <span class="field_error">  @error('phno')
                        {{$message}}
                        @enderror</span>
                        </div>
                        <div class="form-group">
                            <label>Email Address</label>
                            <input type="text" name="email" id="email" class="form-control" placeholder="Enter Email Address">
                            <span class="field_error">  @error('email')
                        {{$message}}
                        @enderror</span>
                        </div>
                         <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="pass" id="pass" class="form-control" placeholder="Enter Password">
                            <span class="field_error">  @error('pass')
                        {{$message}}
                        @enderror</span>
                        </div>
                       
                        <div class="form-group">
                            <label>Select City</label>
                                <select class="form-control" id="city" name="city">
                                    <option value="">Select City</option>
                                    @foreach($result as $res)
                                   
                                    <option value="{{$res->id}}">{{$res->name}}</option>
                                    <!--<option value="2">Delhi</option>
                                    <option value="3">Mumbai</option>
                                    <option value="4">Chennai</option>-->
                                    @endforeach
                                </select>
                                 <span class="field_error">  @error('city')
                        {{$message}}
                        @enderror</span>

                        </div>
                        <div class="form-group">
                            <label>Select Category</label>
                                <select class="form-control" id="category" name="category">
                                    <option value="">Select Category</option>
                                    <option value="1">Electrician</option>
                                    <option value="2">Plumber</option>
                                    <option value="3">Carpenter</option>
                                    <option value="4">Painter</option>
                                    <option value="5">Mason</option>
                                    <option value="6">Aluminium door worker</option>
                                    <option value="7">Welder & fabricator</option>
                                    <option value="8">Distilled water supply</option>
                                    <option value="9">Security Guard</option>
                                    <option value="10">Tailor Service</option>
                                    <option value="11">Packer & Movers</option>
                                    <option value="12">Gardener</option>
                                    <option value="13">House keeping</option>
                                    <option value="14">Medicine delivery</option>
                                    <option value="15">A.C. repair</option>
                                    <option value="16">Washing machine</option>
                                    <option value="17">TV</option>
                                    <option value="18">Gyser</option>
                                    <option value="19">Refrigerator</option>
                                    <option value="20">Inverter</option>
                                    <option value="21">Microwave</option>
                                    <option value="22">Water purifier</option>
                                    <option value="23">Borewell water pump</option>
                                    <option value="24">DTH</option>
                                    <option value="25">Solar heater</option>
                                    <option value="26">Computer/Lepatop</option>
                                    <option value="27">Mobile</option>
                                    <option value="28">Printer</option>
                                    <option value="29">CCTV</option>
                                    <option value="30">Xerox</option>
                                    <option value="31"> Water cooler</option>
                                    <option value="32">Civil engineer</option>
                                    <option value="33">Architect</option>
                                    <option value="34">Contractor</option>
                                    <option value="35">Interior designer</option>
                                    <option value="36">False ceiling</option>
                                    <option value="37">Water purifier</option>
                                    <option value="38">PVC</option>
                                    <option value="39">POP</option>
                                    <option value="40">Vehicle</option>
                                    <option value="41">Car repair</option>
                                    <option value="42">Bike repair</option>
                                    <option value="43">Breakdown Service</option>
                                    <option value="44">Car wash</option>
                                    <option value="45">Car renting</option>
                                    <option value="46">C.A. (business)</option>
                                    <option value="47">C.A. (I.T. Filling)</option>
                                    <option value="48">Visa service</option>
                                    <option value="49">GST</option>
                                    <option value="50">Lawyer</option>
                                    <option value="51">Pan card service</option>
                                    <option value="52">Notary</option>
                                    <option value="53">Passport</option>
                                    <option value="54">Home cleaning</option>
                                    <option value="55">Bathroom cleaning</option>
                                    <option value="56"> Kitchen cleaning</option>
                                    <option value="57">Sofa cleaning</option>
                                    <option value="58">Carpet cleaning</option>
                                    <option value="59">Window/glass cleaning</option>
                                    <option value="60">Office cleaning</option>
                                    <option value="61">Pest control</option>
                                    <option value="62">Sewage cleaning</option>
                                    <option value="63">Water tank cleaning</option>
                                    <option value="64">Laundry service</option>
                                    <option value="65">Health & Fitness</option>
                                    <option value="66">Dietician</option>
                                    <option value="67">Nutritionist</option>
                                    <option value="68">Yoga trainer</option>
                                    <option value="69">Nurse</option>
                                    <option value="70">Beauty & salon</option>
                                    <option value="71">Bridal make-up</option>
                                    <option value="72">Facial</option>
                                    <option value="73">Threading</option>
                                    <option value="74">Pedicure/manicure</option>
                                    <option value="75">Mehendi artists</option>
                                    <option value="76"> Occasion & event service</option>
                                    <option value="77">Wedding photography</option>
                                    <option value="78">Pre-wedding photography</option>
                                    <option value="79">Events photography</option>
                                    <option value="80">Baby photography</option>
                                    <option value="81">Maternity photography</option>
                                    <option value="82">Product shoot</option>
                                    <option value="83">DJ/music party shoot</option>
                                    <option value="84">Birthday event</option>
                                    <option value="85">Wedding event</option>
                                    <option value="86">Engagement event</option>
                                    <option value="87">Reception event</option>
                                    <option value="88">Baby shower event</option>
                                </select>
                                 <span class="field_error">  @error('category')
                        {{$message}}
                        @enderror</span>
                        </div>
                        <div class="form-group">
                            <label>Wallel Amount</label>
                                <select class="form-control" id="amount" name="amount">
                                    <option value="1">₹200</option>
                                    <option value="2">₹500</option>
                                    <option value="3">₹1000</option>
                                </select>
                                 <span class="field_error">  @error('amount')
                        {{$message}}
                        @enderror</span>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-block" >Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!--  -->
<section class="mt-5 mb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="hding text-center">
                    <h3>OYZER ADVANTAGE</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="book-bg">
                    <div class="book-icon">
                        <img src="{{asset('front_assets/img/pic1.jpg')}}" alt="" class="img-fluid">
                    </div>
                    <div class="book-text">
                        <h3>Regular Trips</h3>
                        <p>With our growing presence across multiple cities, we always have our hands full! 
                            This means you will never run out of trips.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="book-bg">
                    <div class="book-icon">
                        <img src="{{asset('front_assets/img/pic2.jpg')}}" alt="" class="img-fluid">
                    </div>
                    <div class="book-text">
                        <h3>Better Earning</h3>
                        <p>Earn more by partnering with the best! Regular trips and efficient
                             service can grow your earnings!</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="book-bg">
                    <div class="book-icon">
                        <img src="{{asset('front_assets/img/pic3.jpg')}}" alt="" class="img-fluid">
                    </div>
                    <div class="book-text">
                        <h3>On-Time Payment</h3>
                        <p>Be assured to receive all payments on time & get the best in class support, 
                            when you attach mini truck with Porter.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class=" making my-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="hding text-center mb-5">
                    <h3>MAKING YOUR LIFE EASY</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="make-left">
                    <img src="{{asset('front_assets/img/making-gif.gif')}}" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-md-6">
                <div class="make-text">
                    <div class="make-text-inner">
                        <h6>Attach your two wheeler or commercial vehicle</h6>
                    <p>If you got a 2 wheeler, or a tata ace commercial vehicle, you are good to go! With Porter, get a delivery job and deliver goods,
                         packages, and courier.</p>
                    </div>
                    <div class="make-text-inner">
                        <h6>No more waiting on the stand</h6>
                    <p>Attach tata ace with Porter to have a steady stream of trips with minimum assured income and added incentives,
                         so that there is no waiting and idle time at the stand!</p>
                    </div>
                    <div class="make-text-inner">
                        <h6>No more bargaining. Standard Rates</h6>
                    <p>The rates and calculation methods are standardized and completely transparent.
                         No more wasting time in fixing the rates for every trip.</p>
                    </div>
                    <div class="make-text-inner">
                        <h6>Hassle Free Navigation</h6>
                    <p>With our GPS-based navigation you can drive anywhere across your city without worrying about the directions. 
                        Get real-time navigation assistance on the go!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="my-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="hding text-center mb-4">
                    <h3>ADDITIONAL BENEFITS</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="addi-bg">
                    <div class="addi-icon">
                        <img src="{{asset('front_assets/img/add-pic1.jpg')}}" alt="" class="img-fluid">
                    </div>
                    <div class="addi-text">
                        <h6>Health Care Assistance</h6>
                        <p>Get healthcare benefits for you and your family with mini truck attachment.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="addi-bg">
                    <div class="addi-icon">
                        <img src="{{asset('front_assets/img/add-pic2.jpg')}}" alt="" class="img-fluid">
                    </div>
                    <div class="addi-text">
                        <h6>Discount on Insurance</h6>
                        <p>Save money with reduced annual maintenance and insurance costs on your vehicle.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="addi-bg">
                    <div class="addi-icon">
                        <img src="{{asset('front_assets/img/add-pic3.jpg')}}" alt="" class="img-fluid">
                    </div>
                    <div class="addi-text">
                        <h6>Fuel card for Savings</h6>
                        <p>Save big on fuel costs with our smart fuel card and increase your profit margins!</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="addi-bg">
                    <div class="addi-icon">
                        <img src="{{asset('front_assets/img/add-pic4.jpg')}}" alt="" class="img-fluid">
                    </div>
                    <div class="addi-text">
                        <h6>Discount on Vehicle Purchase</h6>
                        <p>Get major discounts on purchase of new vehicles. Add to your fleet and grow your business!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="testi my-5">
    <div class="container rounded">
       <div class="row">
           <div class="col-md-12">
            <div class="hding text-center">
                <h3>CHANGING LIFE OF PEOPLE</h3>
            </div>
           </div>
       </div>
        <div class="row">
            <div class="col-md-12">
                <div class="owl-carousel owl-theme testi-carousel">
                    <div class="owl-item">
                        <div class="card d-flex flex-column">
                            <div class="card-body">
                            <div class="ct-pic">
                                <img src="{{asset('front_assets/img/cot.png')}}" alt="" class="img-fluid">
                            </div>
                            <div class="testimonial">
                                “Getting business at vehicle stand has become very tough today due to intense competition. 
                                But with Porter's partner driver app, transparent fare structure and standard pricing, my life has become easier. 
                                Now I don't worry 
                                about finding customers and getting payments.”
                                </div>
                            </div>   
                            <div class="d-flex flex-row profile pt-4 mt-auto"> <img src="https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="" class="rounded-circle">
                                <div class="d-flex flex-column pl-2">
                                    <div class="name">KRISHNA</div>
                                    <p class="text-muted designation">Hyderabad</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item">
                        <div class="card d-flex flex-column">
                            <div class="card-body">
                            <div class="ct-pic">
                                <img src="{{asset('front_assets/img/cot.png')}}" alt="" class="img-fluid">
                            </div>
                            <div class="testimonial">
                                “Earlier there were many restrictions on earnings because I got limited trips in market which were 
                                only from my known customers and to nearby places. I gave my truck on rent with Porter
                                 there are no such restrictions, 
                                there are a lot of orders throughout city. I enjoy being a part of Porter family.”
                                </div>
                            </div>    
                            <div class="d-flex flex-row profile pt-4 mt-auto"> <img src="https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="" class="rounded-circle">
                                <div class="d-flex flex-column pl-2">
                                    <div class="name">UMESH</div>
                                    <p class="text-muted designation">Hyderabad</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item">
                        <div class="card d-flex flex-column">
                            <div class="card-body">
                            <div class="ct-pic">
                                <img src="{{asset('front_assets/img/cot.png')}}" alt="" class="img-fluid">
                            </div>
                            <div class="testimonial">
                                “I was new to Chennai and went ahead to attach my tata ace with Porter. 
                                Porter app's inbuilt map and navigational capability never made me feel new to city. 
                                Payment is done on time and their vendor helpdesk provides immediate solutions to all my issues.”
                                </div>
                            </div>    
                            <div class="d-flex flex-row profile pt-4 mt-auto"> <img src="https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="" class="rounded-circle">
                                <div class="d-flex flex-column pl-2">
                                    <div class="name">BIRJU</div>
                                    <p class="text-muted designation">Chennai</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--<div class="owl-item">
                        <div class="card d-flex flex-column">
                            <div class="mt-2"> <span class="fas fa-star active-star"></span> <span class="fas fa-star active-star"></span> <span class="fas fa-star active-star"></span> <span class="fas fa-star active-star"></span> <span class="fas fa-star-half-alt active-star"></span> </div>
                            <div class="main font-weight-bold pb-2 pt-1">Great Service</div>
                            <div class="testimonial"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magni dolores molestias veniam inventore itaque eius iure omnis, temporibus culpa id. </div>
                            <div class="d-flex flex-row profile pt-4 mt-auto"> <img src="https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="" class="rounded-circle">
                                <div class="d-flex flex-column pl-2">
                                    <div class="name">Megan</div>
                                    <p class="text-muted designation">CEO of My Company</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item">
                        <div class="card d-flex flex-column">
                            <div class="mt-2"> <span class="fas fa-star active-star"></span> <span class="fas fa-star active-star"></span> <span class="fas fa-star active-star"></span> <span class="fas fa-star active-star"></span> <span class="fas fa-star-half-alt active-star"></span> </div>
                            <div class="main font-weight-bold pb-2 pt-1">Great Service</div>
                            <div class="testimonial"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magni dolores molestias veniam inventore itaque eius iure omnis, temporibus culpa id. </div>
                            <div class="d-flex flex-row profile pt-4 mt-auto"> <img src="https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="" class="rounded-circle">
                                <div class="d-flex flex-column pl-2">
                                    <div class="name">Megan</div>
                                    <p class="text-muted designation">CEO of My Company</p>
                                </div>
                            </div>
                        </div>
                    </div>-->
                </div>
            </div>
        </div>
    </div>
</section>

<!-- own multiple  -->
<section class="multiple my-5">
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="hding text-center mb-4">
                    <h3>OWN MULTIPLE VEHICLES?</h3>
                </div>
                <div class="own-pic">
                    <img src="{{asset('front_assets/img/pic4.jpg')}}" alt="" class="img-fluid">
                </div>
                <div class="own-text">
                    <h6>If you are a fleet owner and own multiple vehicles.</h6>
                    <p>Keeping track of your vehicle fleet and optimising
                         their efficiency can be a huge challenge. Partner 
                         with Porter to boost your earnings and manage your 
                         vehicles easily.</p>
                     <div class="own-btn">
                         <a href="#" class="btn btn-success">CONTACT US</a>
                     </div>    
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ -->
<section class="faq my-5">
    <div class="container">
      <div class="row">
          <div class="col-md-8 mx-auto">
            <div class="faq-title">
                <h3>FREQUENTLY ASKED QUESTIONS</h3>
              </div>
              <ul class="faq-list">
                <li data-aos="fade-up" data-aos-delay="100" class="aos-init aos-animate">
                  <a data-toggle="collapse" class="collapsed" href="#faq1" aria-expanded="false">
                    How to attach Tata ace or any goods vehicle in Oyzer?<i class="fa fa-angle-down"></i>
                    </a>
                  <div id="faq1" class="collapse" data-parent=".faq-list" style="">
                    <p>
                        Becoming a Porter partner and attaching your truck with us is a very easy process. 
                        You can do it with three easy steps from the comfort of your home!
                    </p>
                  </div>
                </li>
        
                <li data-aos="fade-up" data-aos-delay="200" class="aos-init aos-animate">
                  <a data-toggle="collapse" href="#faq2" class="collapsed">
                    How to attach two wheeler in Oyzer? <i class="fa fa-angle-down"></i>
                    </a>
                  <div id="faq2" class="collapse" data-parent=".faq-list">
                    <p>
                      Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                    </p>
                  </div>
                </li>
        
                <li data-aos="fade-up" data-aos-delay="300" class="aos-init aos-animate">
                  <a data-toggle="collapse" href="#faq3" class="collapsed">
                    Can I attach my tata ace on a monthly contract or rent mini trucks on monthly basis? <i class="fa fa-angle-down"></i>
                    </a>
                  <div id="faq3" class="collapse" data-parent=".faq-list">
                    <p>
                        You can attach your commercial vehicle to Oyzer on a daily, weekly or
                         monthly basis for a part-time or full-time engagement.
                    </p>
                  </div>
                </li>
        
                <li data-aos="fade-up" data-aos-delay="400" class="aos-init aos-animate">
                  <a data-toggle="collapse" href="#faq4" class="collapsed">
                    What documents and permits do I need to on-board Oyzer? <i class="fa fa-angle-down"></i>
                    </a>
                  <div id="faq4" class="collapse" data-parent=".faq-list">
                    <p>
                        For commercial vehicle attachment following documents are required:
                         RC book | Fitness certificate | Insurance | Pollution Control | Owner/Driver documents :
                          Driving License | PAN card | Bank Details | Address Proof
                    </p>
                  </div>
                </li>
        
                <li data-aos="fade-up" data-aos-delay="500" class="aos-init aos-animate">
                  <a data-toggle="collapse" href="#faq5" class="collapsed">
                    Is there any registration fee to join Oyzer?<i class="fa fa-angle-down"></i>
                    </a>
                  <div id="faq5" class="collapse" data-parent=".faq-list">
                    <p>
                        Porter charges nominal fees at the time of on-boarding for vehicle attachment. 
                        Fee varies as per the vehicle type.
                    </p>
                  </div>
                </li>
        
                <li data-aos="fade-up" data-aos-delay="600" class="aos-init aos-animate">
                  <a data-toggle="collapse" href="#faq6" class="collapsed">
                    Which type of vehicle one can attach to Oyzer?<i class="fa fa-angle-down"></i>
                    </a>
                  <div id="faq6" class="collapse" data-parent=".faq-list">
                    <p>
                        You can attach 2 wheelers such as bike and scooter, and commercial vehicles with 
                        carrying capacity of 1 ton, 2 ton, and 3 ton for our On Demand Services.
                    </p>
                  </div>
                </li>
              </ul>
          </div>
      </div>
    </div>
  </section>
@endsection