@php
    if(Session::has('onlineuser')):
        $value = Session::get('onlineuser');
    endif;
@endphp
@extends("admin.layout.interface")
@section("breadcrumb")
    <li class="breadcrumb-item"><a href="{{URL::to('/admin')}}">Admin</a></li>
    <li class="breadcrumb-item" aria-current="page"><a href="{{URL::to('/admin/book')}}">Book</a></li>
    <li class="breadcrumb-item active" aria-current="page">Update</li>
@endsection
@section("content")
    @if(Session::has('success'))
        @php $message = Session::get('success'); @endphp
        <div class="alert alert-success">{{$message}}</div>
        @php Session::pull('success'); @endphp
    @endif
    @if(Session::has('danger'))
        @php $message = Session::get('danger'); @endphp
            <div class="alert alert-danger">{{$message}}</div>
        @php Session::pull('danger'); @endphp
    @endif
    <form action="" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                <label for=""> Book Name</label>
                <input type="text" name="name" value="{{$data->name}}" class="form-control" required>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                <label for=""> Price</label>
                <input type="number" name="price" value="{{$data->price}}" class="form-control" required>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <img src="{{URL::to('storage/app')}}/{{$data->cover_image}}" alt="" class="mb-2" width="100px" height="100px">
                <input type="file" name="cover_image" class="form-control">
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
                        <option value="{{$cat->id}}" {{$cat->id == $data->categoryId ? 'selected' : ''}}>{{$cat->name}}</option>
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
                            <option value="{{$userInfo->userId}}" {{$userInfo->userId == $data->authorId ? 'selected' : ''}}>{{$userInfo->name}}</option>
                        @endforeach
                    </select>
                </div>
            @endif
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <label for=""> Short Description</label>
                <textarea name="description" class="form-control">{{$data->description}}</textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <label for=""> Detail Description</label>
                <textarea name="editor1" class="form-control">
                    @php
                        $detail = html_entity_decode($data->detailDescription);
                        echo $detail;
                    @endphp
                </textarea>
            </div>
        </div>
        <br/>
        <input type="submit" class="btn btn-primary" value="Update">
    </form>
@endsection
