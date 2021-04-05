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
        <a href="#"><i class="material-icons-outlined">credit_card</i>Author<i class="material-icons has-sub-menu">add</i></a>
        <ul class="sub-menu">
            <li>
                <a href="{{URL::to('/admin/author')}}">Author</a>
            </li>
        </ul>
    </li>
</ul>
