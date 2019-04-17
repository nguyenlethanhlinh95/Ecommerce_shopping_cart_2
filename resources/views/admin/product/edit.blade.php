@extends('admin.layout.master')

@section('content')
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Product
                        <small>Edit product</small>

                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                <div class="col-lg-7" style="padding-bottom:120px">
                    @if(count($errors) > 0)
                        <div class="alert alert-danger alertBox">
                            @foreach($errors->all() as $err)
                                <strong>{{$err}}</strong><br/>
                            @endforeach
                        </div>
                    @endif

                    @if(session('success'))
                        <div class="alert alert-success alertBox">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if(session('err'))
                        <div class="alert alert-danger alertBox">
                            {{ session('err') }}
                        </div>
                    @endif
                    {!! Form::open(['route'=>'product.store', 'method'=> 'post' , 'files' => true, 'enctype'=>'multipart/form-data']) !!}
                    <div class="form-group">
                        {!! Form::label('name', 'Name') !!}
                        {!! Form::text('pro_name',$product->pro_name, ['class'=>'form-control', 'required'=>'', 'minlength' => '5']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('code', 'Code') !!}
                        {!! Form::text('pro_code',$product->pro_code, ['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('price', 'Price') !!}
                        {!! Form::text('pro_price',$product->pro_price, ['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('pro_Description', 'Description') !!}
                        {!! Form::text('pro_info',$product->pro_info, ['class'=>'form-control']) !!}
                    </div>


                    <div class="form-group">
                        {!! Form::label('image', 'Image') !!}
                        <input type="file" name="pro_image" id="pro_image" value="{{ $product->pro_image }}" >
                        {{--{!! Form::file('pro_image',$product->pro_image, ['class'=>'form-control']) !!}--}}
                    </div>

                    <div class="form-group">
                        {!! Form::label('Price', 'Sale Price') !!}
                        {!! Form::text('splPrice',$product->spl_price, ['class'=>'form-control']) !!}
                    </div>

                    {{ Form::submit('Update', ['class'=> 'btn btn-info']) }}

                    {!! Form::close() !!}


                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
@endsection
