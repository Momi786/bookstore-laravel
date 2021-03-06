@php
    if(Session::has('onlineuser')):
        $value = Session::get('onlineuser');
    endif;
@endphp
@extends("admin.layout.interface")
@section("breadcrumb")
    <li class="breadcrumb-item"><a href="{{URL::to('/admin')}}">Admin</a></li>
    <li class="breadcrumb-item" aria-current="page"><a href="{{URL::to('/admin/book')}}">Book</a></li>
    <li class="breadcrumb-item active" aria-current="page">Add</li>
@endsection
@section("content")
    @if(Session::has('success'))
        @php $message = Session::get('success'); @endphp
            <div class="alert alert-success">{{$message}}</div>
        @php Session::pull('success'); @endphp
    @endif
    <form action="" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                <label for=""> Book Name</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                <label for=""> Price</label>
                <input type="number" name="price" class="form-control" required>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                <label for=""> Image</label>
                <input type="file" name="cover_image" class="form-control" required>
            </div>
        </div>
        <div class="row">
            @if ($value['usertype'] == 2)
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            @else
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
            @endif
                <label for=""> Book Category</label>
                <select name="categoryId" class="form-control" required>
                    @foreach($BookCategory as $cat)
                        <option value="{{$cat->id}}">{{$cat->name}}</option>
                    @endforeach
                </select>
            </div>
            @if ($value['usertype'] != 2)
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                    <label for="">Book Author </label>
                    <select name="authorId" class="form-control" required>
                        @foreach($Author as $Auth)
                            @php
                                $userInfo = $Auth->GetUserInfo();
                            @endphp
                            <option value="{{$userInfo->userId}}">{{$userInfo->name}}</option>
                        @endforeach
                    </select>
                </div>
            @endif
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <label for=""> Short Description</label>
                <textarea name="description" class="form-control"></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <label for=""> Detail Description</label>
                <textarea name="editor1" class="form-control"></textarea>
            </div>
        </div><br>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <label for=""> Recommded For You All</label>
                <input  type="checkbox" class="mr-3" name="recommded_all" value="1" style="height: 11px;">
                <label for=""> Recommded For You Only</label>
                <input  type="checkbox" name="recommded_only" value="1" style="height: 11px;">
            </div>
        </div><br/>

        <input type="submit" class="btn btn-primary" value="Save">
    </form>

@endsection
