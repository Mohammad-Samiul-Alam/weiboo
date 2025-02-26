@extends('layouts.dashboard')

@section('content')
<div class="breadcrumb-wrapper breadcrumb-contacts">
    <div>
        <h1>User profile</h1>
        <p class="breadcrumbs"><span><a href="{{route('home')}}">Dashboard</a></span>
            <span><i class="mdi mdi-chevron-right"></i></span>Profile
        </p>
    </div>
    <div>
        <a href="user-list.html" class="btn btn-primary">Edit</a>
    </div>
</div>
<div class="user_profile_wrapper_top card">
    <div class="user_profile_top_bg"></div>
    <div class="user_profile_top_des">
        <div class="user_profile_img">
            @if (Auth::user()->image == null)
                <img src="{{Avatar::create(Auth::user()->name)->toBase64()}}" alt="">
            @else
                <img width="100" src="{{asset('uploads/users')}}/{{Auth::user()->image}}" class="user-image" alt="User Image" />
            @endif
        </div>
        <div class="user_profile_text_top">
            <h3>{{Auth::user()->name}}</h3>
            <p>{{Auth::user()->email}}</p>
            {{-- <p>2118 Thornridge Cir. Syracuse, Connecticut 35624</p> --}}
        </div>
    </div>
    
</div>
<div class="card bg-white profile-content">
    <div class="row">
        <div class="col-lg-4 col-xl-3">
            <div class="profile-content-left profile-left-spacing">
                {{-- <div class="product_card_bottom_wrapper">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card_bottom_items">
                                <div class="card_bottom_item_icon">
                                    <img src="assets/img/icons/shoping.png" alt="">
                                </div>
                                <div class="card_bottom_item_text">
                                    <p>Purchased</p>
                                    <h3>5782</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="card_bottom_items">
                                <div class="card_bottom_item_icon">
                                    <img src="assets/img/icons/cart.png" alt="">
                                </div>
                                <div class="card_bottom_item_text">
                                    <p>In order</p>
                                    <h3>1245</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="card_bottom_items">
                                <div class="card_bottom_item_icon">
                                    <img src="assets/img/icons/doller.png" alt="">
                                </div>
                                <div class="card_bottom_item_text">
                                    <p>Amount</p>
                                    <h3>$82,950</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="card_bottom_items">
                                <div class="card_bottom_item_icon">
                                    <img src="assets/img/icons/chart.png" alt="">
                                </div>
                                <div class="card_bottom_item_text">
                                    <p>In stock</p>
                                    <h3>7325</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}

                <hr class="w-100">

                <div class="contact-info pt-4">
                    <h5 class="text-dark">Contact Information</h5>
                    <div class="contact_info_sidebar_item">
                        <h3>Address</h3>
                        <p>4517 Washington Ave. Manchester, Kentucky 39495</p>
                    </div>

                    <div class="contact_info_sidebar_item">
                        <h3>Email</h3>
                        <p>kenzi.lawson@example.com</p>
                    </div>
                    <div class="contact_info_sidebar_item">
                        <h3>Phone number</h3>
                        <p>(217) 555-0113</p>
                    </div>

                    <div class="contact_info_sidebar_item">
                        <h3>Social Profile</h3>
                        
                        <ul>
                            <li>
                                <a href="#" class="mb-1 btn btn-outline btn-twitter rounded-circle">
                                    <i class="mdi mdi-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="mb-1 btn btn-outline btn-linkedin rounded-circle">
                                    <i class="mdi mdi-linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="mb-1 btn btn-outline btn-facebook rounded-circle">
                                    <i class="mdi mdi-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="mb-1 btn btn-outline btn-skype rounded-circle">
                                    <i class="mdi mdi-skype"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    
                    
                </div>
            </div>
        </div>

        <div class="col-lg-8 col-xl-9">
            <div class="profile-content-right profile-right-spacing py-5">
                <ul class="nav nav-tabs px-3 px-xl-5 nav-style-border" id="myProfileTab" role="tablist">
                    {{-- <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="purchased-tab" data-bs-toggle="tab"
                            data-bs-target="#purchased" type="button" role="tab"
                            aria-controls="purchased" aria-selected="true">Purchased</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="orders-tab" data-bs-toggle="tab"
                            data-bs-target="#r-orders" type="button" role="tab"
                            aria-controls="orders" aria-selected="false">Recent orders</button>
                    </li> --}}
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="settings-tab" data-bs-toggle="tab"
                            data-bs-target="#settings" type="button" role="tab"
                            aria-controls="settings" aria-selected="false">Settings</button>
                    </li>
                </ul>
                <div class="tab-content px-3 px-xl-5" id="myTabContent">

                    {{-- <div class="tab-pane fade show active" id="purchased" role="tabpanel"
                        aria-labelledby="purchased-tab">
                        <div class="tab-widget mt-5">
                            <div class="user_profile_top_heading">
                                <h3>All purchased products</h3>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="card-wrapper">
                                        <div class="card-container">
                                            <div class="card-top">
                                                <img class="card-image" src="assets/img/products/pro-big-1.png" alt="">
                                            </div>
                                            <div class="card-bottom">
                                                <h3><a href="product-detail.html">Casual shirt for men</a></h3>
                                                <p>$195.00</p>
                                            </div>
                                            <div class="card-action">
                                                <div class="card-edit"><i class="mdi mdi-circle-edit-outline"></i></div>
                                                <div class="card-preview"><i class="mdi mdi-eye-outline"></i>
                                                </div>
                                                <div class="card-remove"><i class="mdi mdi mdi-delete-outline"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="card-wrapper">
                                        <div class="card-container">
                                            <div class="card-top">
                                                <img class="card-image" src="assets/img/products/pro-big-2.png" alt="">
                                            </div>
                                            <div class="card-bottom">
                                                <h3><a href="product-detail.html">Casual shirt for boys</a></h3>
                                                <p>$195.00</p>
                                            </div>
                                            <div class="card-action">
                                                <div class="card-edit"><i class="mdi mdi-circle-edit-outline"></i></div>
                                                <div class="card-preview"><i class="mdi mdi-eye-outline"></i>
                                                </div>
                                                <div class="card-remove"><i class="mdi mdi mdi-delete-outline"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="card-wrapper">
                                        <div class="card-container">
                                            <div class="card-top">
                                                <img class="card-image" src="assets/img/products/pro-big-3.png" alt="">
                                            </div>
                                            <div class="card-bottom">
                                                <h3><a href="product-detail.html">Casual shirt for boys</a></h3>
                                                <p>$155.00</p>
                                            </div>
                                            <div class="card-action">
                                                <div class="card-edit"><i class="mdi mdi-circle-edit-outline"></i></div>
                                                <div class="card-preview"><i class="mdi mdi-eye-outline"></i>
                                                </div>
                                                <div class="card-remove"><i class="mdi mdi mdi-delete-outline"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="card-wrapper">
                                        <div class="card-container">
                                            <div class="card-top">
                                                <img class="card-image" src="assets/img/products/pro-big-4.png" alt="">
                                            </div>
                                            <div class="card-bottom">
                                                <h3><a href="product-detail.html">Pink inner for women</a></h3>
                                                <p>$145.00</p>
                                            </div>
                                            <div class="card-action">
                                                <div class="card-edit"><i class="mdi mdi-circle-edit-outline"></i></div>
                                                <div class="card-preview"><i class="mdi mdi-eye-outline"></i>
                                                </div>
                                                <div class="card-remove"><i class="mdi mdi mdi-delete-outline"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="card-wrapper">
                                        <div class="card-container">
                                            <div class="card-top">
                                                <img class="card-image" src="assets/img/products/pro-big-5.png" alt="">
                                            </div>
                                            <div class="card-bottom">
                                                <h3><a href="product-detail.html">Sports t-shirt</a></h3>
                                                <p>$105.90</p>
                                            </div>
                                            <div class="card-action">
                                                <div class="card-edit"><i class="mdi mdi-circle-edit-outline"></i></div>
                                                <div class="card-preview"><i class="mdi mdi-eye-outline"></i>
                                                </div>
                                                <div class="card-remove"><i class="mdi mdi mdi-delete-outline"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="card-wrapper">
                                        <div class="card-container">
                                            <div class="card-top">
                                                <img class="card-image" src="assets/img/products/pro-big-6.png" alt="">
                                            </div>
                                            <div class="card-bottom">
                                                <h3><a href="product-detail.html">Casual shirt for men</a></h3>
                                                <p>$195.00</p>
                                            </div>
                                            <div class="card-action">
                                                <div class="card-edit"><i class="mdi mdi-circle-edit-outline"></i></div>
                                                <div class="card-preview"><i class="mdi mdi-eye-outline"></i>
                                                </div>
                                                <div class="card-remove"><i class="mdi mdi mdi-delete-outline"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="card-wrapper">
                                        <div class="card-container">
                                            <div class="card-top">
                                                <img class="card-image" src="assets/img/products/pro-big-7.png" alt="">
                                            </div>
                                            <div class="card-bottom">
                                                <h3><a href="product-detail.html">Casual shirt for men</a></h3>
                                                <p>$195.00</p>
                                            </div>
                                            <div class="card-action">
                                                <div class="card-edit"><i class="mdi mdi-circle-edit-outline"></i></div>
                                                <div class="card-preview"><i class="mdi mdi-eye-outline"></i>
                                                </div>
                                                <div class="card-remove"><i class="mdi mdi mdi-delete-outline"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="card-wrapper">
                                        <div class="card-container">
                                            <div class="card-top">
                                                <img class="card-image" src="assets/img/products/pro-big-8.png" alt="">
                                            </div>
                                            <div class="card-bottom">
                                                <h3><a href="product-detail.html">Smart watch</a></h3>
                                                <p>$589.00</p>
                                            </div>
                                            <div class="card-action">
                                                <div class="card-edit"><i class="mdi mdi-circle-edit-outline"></i></div>
                                                <div class="card-preview"><i class="mdi mdi-eye-outline"></i>
                                                </div>
                                                <div class="card-remove"><i class="mdi mdi mdi-delete-outline"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="card-wrapper">
                                        <div class="card-container">
                                            <div class="card-top">
                                                <img class="card-image" src="assets/img/products/pro-big-9.png" alt="">
                                            </div>
                                            <div class="card-bottom">
                                                <h3><a href="product-detail.html">Laptop</a></h3>
                                                <p>$1495.00</p>
                                            </div>
                                            <div class="card-action">
                                                <div class="card-edit"><i class="mdi mdi-circle-edit-outline"></i></div>
                                                <div class="card-preview"><i class="mdi mdi-eye-outline"></i>
                                                </div>
                                                <div class="card-remove"><i class="mdi mdi mdi-delete-outline"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="card-wrapper">
                                        <div class="card-container">
                                            <div class="card-top">
                                                <img class="card-image" src="assets/img/products/pro-big-10.png" alt="">
                                            </div>
                                            <div class="card-bottom">
                                                <h3><a href="product-detail.html">Casual shirt for men</a></h3>
                                                <p>$195.00</p>
                                            </div>
                                            <div class="card-action">
                                                <div class="card-edit"><i class="mdi mdi-circle-edit-outline"></i></div>
                                                <div class="card-preview"><i class="mdi mdi-eye-outline"></i>
                                                </div>
                                                <div class="card-remove"><i class="mdi mdi mdi-delete-outline"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="card-wrapper">
                                        <div class="card-container">
                                            <div class="card-top">
                                                <img class="card-image" src="assets/img/products/pro-big-11.png" alt="">
                                            </div>
                                            <div class="card-bottom">
                                                <h3><a href="product-detail.html">Casual shirt for men</a></h3>
                                                <p>$195.00</p>
                                            </div>
                                            <div class="card-action">
                                                <div class="card-edit"><i class="mdi mdi-circle-edit-outline"></i></div>
                                                <div class="card-preview"><i class="mdi mdi-eye-outline"></i>
                                                </div>
                                                <div class="card-remove"><i class="mdi mdi mdi-delete-outline"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="card-wrapper">
                                        <div class="card-container">
                                            <div class="card-top">
                                                <img class="card-image" src="assets/img/products/pro-big-12.png" alt="">
                                            </div>
                                            <div class="card-bottom">
                                                <h3><a href="product-detail.html">Double sofa set</a></h3>
                                                <p>$195.00</p>
                                            </div>
                                            <div class="card-action">
                                                <div class="card-edit"><i class="mdi mdi-circle-edit-outline"></i></div>
                                                <div class="card-preview"><i class="mdi mdi-eye-outline"></i>
                                                </div>
                                                <div class="card-remove"><i class="mdi mdi mdi-delete-outline"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="r-orders" role="tabpanel"
                        aria-labelledby="orders-tab">
                        <div class="tab-widget mt-5">
                        <div class="user_profile_top_heading">
                            <h3>Recent orders</h3>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="card card-default">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table id="responsive-data-table" class="table" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Product name</th>
                                                        <th>Unit</th>
                                                        <th>Price</th>
                                                        <th>Order date</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </thead>
    
                                                <tbody>
                                                    <tr>
                                                        <td>#JK5876GH</td>
                                                        <td>Corporate office chair</td>
                                                        <td>10 Units</td>
                                                        <td>$10,000</td>
                                                        <td>25 Feb 2022</td>
                                                        <td>Completed</td>
                                                    </tr>
                                                    <tr>
                                                        <td>#JK5876GH</td>
                                                        <td>Corporate office chair</td>
                                                        <td>10 Units</td>
                                                        <td>$10,000</td>
                                                        <td>25 Feb 2022</td>
                                                        <td>Completed</td>
                                                    </tr>
                                                    <tr>
                                                        <td>#JK5876GH</td>
                                                        <td>Corporate office chair</td>
                                                        <td>10 Units</td>
                                                        <td>$10,000</td>
                                                        <td>25 Feb 2022</td>
                                                        <td>Completed</td>
                                                    </tr>
                                                    <tr>
                                                        <td>#JK5876GH</td>
                                                        <td>Corporate office chair</td>
                                                        <td>10 Units</td>
                                                        <td>$10,000</td>
                                                        <td>25 Feb 2022</td>
                                                        <td>Completed</td>
                                                    </tr>
                                                    <tr>
                                                        <td>#JK5876GH</td>
                                                        <td>Corporate office chair</td>
                                                        <td>10 Units</td>
                                                        <td>$10,000</td>
                                                        <td>25 Feb 2022</td>
                                                        <td>Completed</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div> --}}

                    <div class="tab-pane fade show active" id="settings" role="tabpanel"
                        aria-labelledby="settings-tab">
                        <div class="tab-widget mt-5">
                            <div class="user_profile_top_heading">
                                <h3>User settings</h3>
                            </div>
                        <div class="tab-pane-content mt-5">
                            <form method="POST" enctype="multipart/form-data" action="{{route('profile.update')}}">
                                @csrf
                                <div class="row mb-2">

                                    <div class="col-lg-6">
                                        <div class="form-group mb-4">
                                            <label for="userName">User name</label>
                                            <input type="text" name="name" class="form-control" id="userName" value="{{Auth::user()->name}}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-4">
                                            <label for="email">Email</label>
                                            <input type="email" name="email" class="form-control" id="email" value="{{Auth::user()->email}}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-4">
                                            <label for="newPassword">New password</label>
                                            <input type="password" name="password" class="form-control" placeholder="new password" id="newPassword">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-4">
                                            <label for="conPassword">Confirm password</label>
                                            <input type="password" name="password_confirmation" class="form-control" placeholder="confirm password" id="conPassword">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form_customer_profilr_img">
                                            <label for="" class="form-label">user image</label>
                                            <input type="file" name="image" class="form-control" onchange="document.getElementById('image').src = window.URL.createObjectURL(this.files[0])">
                                        </div>
                                        <img width="100" class="mt-3" id="image" height="auto" src="{{asset('uploads/users')}}/{{Auth::user()->image}}" alt="">
                                    </div>
                                </div>

                                <div class="d-flex justify-content-end mt-5">
                                    <button type="submit"
                                        class="btn btn-primary mb-2 btn-pill">Update
                                        user</button>
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
@endsection