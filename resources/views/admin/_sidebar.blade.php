<!--**********************************
            Sidebar start
        ***********************************-->
<div class="deznav">
    <div class="deznav-scroll">
        <ul class="metismenu" id="menu">
            <li><a class="has-arrow ai-icon" href="javascript:void(0)" aria-expanded="false">
                    <i class="flaticon-381-networking"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="index.html">Dashboard</a></li>
                    <li><a href="workout-statistic.html">Workout Statistic</a></li>
                    <li><a href="workoutplan.html">Workout Plan</a></li>
                    <li><a href="distance-map.html">Distance Map</a></li>
                    <li><a href="food-menu.html">Diet Food Menu</a></li>
                    <li><a href="personal-record.html">Personal Record</a></li>
                </ul>
            </li>
            <li>
                <a class="has-arrow ai-icon" href="javascript:void(0)" aria-expanded="false">
                    <i class="flaticon-381-heart"></i>
                    <span class="nav-text">Shop</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('admin_category')}}">Category List</a></li>
                    <li><a href="{{route('admin_courses')}}">Course List</a></li>
                    <li><a href="./ecom-product-order.html">Order</a></li>
                    <li><a href="./ecom-checkout.html">Checkout</a></li>
                    <li><a href="./ecom-invoice.html">Invoice</a></li>
                    <li><a href="./ecom-customers.html">Customers</a></li>
                </ul>
            </li>
            <li>
                <a class="has-arrow ai-icon" href="{{route('admin_setting')}}" aria-expanded="false">
                    <i class="flaticon-381-settings-1"></i>
                    <span class="nav-text">Settings</span>
                </a>
            </li>
        </ul>
        <div class="add-menu-sidebar">
            <img src="{{ asset('assets') }}/admin/images/calendar.png" alt="" class="mr-3">
            <p class="	font-w500 mb-0">Create Workout Plan Now</p>
        </div>
        <div class="copyright">
            <p><strong>Gymove Fitness Admin Dashboard</strong> © 2020 All Rights Reserved</p>
            <p>Made with <span class="heart"></span> by DexignZone</p>
        </div>
    </div>
</div>
<!--**********************************
    Sidebar end
***********************************-->
