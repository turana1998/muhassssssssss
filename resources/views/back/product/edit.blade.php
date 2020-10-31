@extends('back.layouts.master')
@section('title','product-edit')
@section('head')
    <script type="text/javascript" src="/back/ckeditor/ckeditor.js"></script>
    {{--    <script type="text/javascript" src="/back/ckeditor/jquery.min.js"></script>--}}
@endsection
@section('page-header')
    {{--    @include('back.layouts.include.page-header',compact('crumbs'))--}}
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
        @include('back.layouts.include.alert-messages')
        <!-- Basic layout-->

            <div class="row">
                <div class="">
                    <div class="panel panel-flat">

                        <div class="panel-heading">
                            <h6 class="panel-title">..<a class="heading-elements-toggle"><i
                                        class="icon-more"></i></a></h6>
                            <div class="heading-elements">
                                <ul class="icons-list">
                                    <li><a data-action="collapse" class=""></a></li>
                                    <li><a data-action="reload"></a></li>
                                    <li><a data-action="close"></a></li>
                                </ul>
                            </div>
                        </div>


                        <div class="panel-body" style="display: block;">
                            <div class="panel-heading">
                                <h5 class="panel-title label label-success">{{$product->name ?? ''}}</h5>
                                <div class="heading-elements">
                                    <a href="{{route('admin.product.index',$product->category_id)}}"><span
                                            class="label label-success">Productlara QAYIT</span></a>
                                </div>
                            </div>

                            <form action="{{route('admin.product.update',$product->id)}}" class="form-horizontal"
                                  method="Post"
                                  enctype="multipart/form-data">
                                @csrf

                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Kategorya:</label>
                                    <div class="col-lg-6">
                                        <select type="text" class="form-control" name="category_id"
                                        >
                                            @foreach($categorys as $category)
                                                <option
                                                    {{$category->id==$product->category_id ? 'selected' : ''}} value="{{$category->id}}">{{$category->name ?? ''}}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Ad:</label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" name="name"
                                               value="{{old('name',$product->name)}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Slug:</label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" name="slug"
                                               value="{{old('slug',$product->slug)}}">
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Ətrafli:</label>
                                    <div class="col-lg-9">
                                <textarea class="ckeditor" name="description" id="editor-readonly" rows="5" cols="5">
                                        {{old('description',$product->description)}}
                                </textarea>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Price:</label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" name="price"
                                               value="{{old('price',$product->price ?? '')}}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-lg-3 control-label">DiscountPrice:</label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" name="discountprice"
                                               value="{{old('discountprice',$product->discountprice ?? '')}}">
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label class="col-lg-3 control-label">kkal:</label>
                                    <div class="col-lg-6">
                                        <input type="number" class="form-control" name="kkal"
                                               value="{{old('kkal',$product->kkal ?? '')}}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-lg-3 control-label">ingredient:</label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" name="ingredient"
                                               value="{{old('ingredient',$product->ingredient ?? '')}}">
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Şəkil:</label>
                                    <div class="col-lg-6">
                                        <input type="file" name="photo" id="productPhoto"
                                               class="file-styled form-control">
                                        <span class="help-block">Qəbul edilən uzantılar: gif, png, jpg, jpeg,webp. Maksimum həcm 500 kb olmalıdır.</span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Teklif edilenler:</label>
                                    <div class="col-lg-6">
                                        <input type="checkbox" class="form-control" value="1" name="proposal"
                                         {{$product->proposal ==1 ? 'checked' : ''}}>
                                    </div>
                                </div>

                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary">Update <i
                                            class="icon-arrow-right14 position-right"></i></button>
                                </div>

                            </form>


                        </div>
                    </div>
                </div>

            </div>

            <!-- /basic layout -->
        </div>

    </div>
@endsection
