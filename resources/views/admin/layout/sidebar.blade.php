@php
    if(Session::has('onlineuser')):
        $value = Session::get('onlineuser');
    endif;
@endphp
<ul class="accordion-menu">
    <li class="sidebar-title">
        Book Store
    </li>
    <li class="">
        <a href="{{URL::to('/admin')}}"><i class="material-icons-outlined">dashboard</i>Dashboard</a>
    </li>
    <li>
        <a href="#"><i class="material-icons-outlined">book</i>Book<i class="material-icons has-sub-menu">add</i></a>
        <ul class="sub-menu">
            <li>
                <a href="{{URL::to('/admin/book')}}">Books</a>
            </li>
            <li>
                <a href="{{URL::to('admin/book/category')}}">Book Categories</a>
            </li>
        </ul>
    </li>
    <li>
        <a href="#"><i class="material-icons-outlined">article</i>News<i class="material-icons has-sub-menu">add</i></a>
        <ul class="sub-menu">
            <li>
                <a href="{{URL::to('/admin/news')}}">News</a>
            </li>
        </ul>
    </li>
    @if ($value['usertype'] == 1)
        <li>
            <a href="#"><i class="material-icons-outlined">person</i>Users<i class="material-icons has-sub-menu">add</i></a>
            <ul class="sub-menu">
                <li>
                    <a href="{{URL::to('/admin/user')}}">User</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#"><i class="material-icons">settings</i>System Settings<i class="material-icons has-sub-menu">add</i></a>
            <ul class="sub-menu">
                <li>
                    <a href="{{URL::to('admin/system-settings/social-media')}}">Social Media</a>
                </li>
            </ul>
        </li>
    @endif
</ul>

