<!--**********************************
            Sidebar start
        ***********************************-->
<div class="deznav">
    <div class="deznav-scroll">
        <ul class="metismenu" id="menu">
            <li><a class="ai-icon" href="{{route('adminhome')}}" aria-expanded="false">
                    <i class="flaticon-381-networking"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>
            <li><a href="{{route('admin_category')}}" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-381-pad"></i>
                    <span class="nav-text">Category List</span>
                </a>
            </li>
            <li><a href="{{route('admin_courses')}}" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-381-news"></i>
                    <span class="nav-text">Course List</span>
                </a>
            </li>
            <li><a href="{{route('admin_message')}}" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-381-folder-5"></i>
                    <span class="nav-text">Contact Messages</span>
                </a>
            </li>
            <li><a href="{{route('admin_review')}}" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-381-list-1"></i>
                    <span class="nav-text">Reviews</span>
                </a>
            </li>
            <li><a href="{{route('admin_faq')}}" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-381-help-1"></i>
                    <span class="nav-text">FAQ</span>
                </a>
            </li>
            <li><a class="has-arrow ai-icon" href="#" aria-expanded="false">
                    <i class="flaticon-381-calendar-6"></i>
                    <span class="nav-text">Orders</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('admin_order')}}">All Orders</a></li>
                    <li><a href="{{route('admin_order_list',['status'=>'new'])}}">New Orders</a></li>
                    <li><a href="{{route('admin_order_list',['status'=>'accepted'])}}">Accepted Orders</a></li>
                    <li><a href="{{route('admin_order_list',['status'=>'canceled'])}}">Canceled Orders</a></li>
                    <li><a href="{{route('admin_order_list',['status'=>'completed'])}}">Completed Orders</a></li>
                </ul>
            </li>
            <li><a href="{{route('admin_users')}}" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-381-user-9"></i>
                    <span class="nav-text">Users</span>
                </a>
            </li>
            <li>
                <a class="ai-icon" href="{{route('admin_setting')}}" aria-expanded="false">
                    <i class="flaticon-381-settings-2"></i>
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
