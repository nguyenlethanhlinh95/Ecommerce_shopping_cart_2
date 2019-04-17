@extends('admin.layout.master')

@section('content')
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Product
                        <small>Add new</small>

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
                            {!! Form::text('pro_name',null, ['class'=>'form-control', 'required'=>'', 'minlength' => '5']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('code', 'Code') !!}
                            {!! Form::text('pro_code',null, ['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('price', 'Price') !!}
                            {!! Form::text('pro_price',null, ['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('pro_Description', 'Description') !!}
                            {!! Form::text('pro_info',null, ['class'=>'form-control']) !!}
                        </div>


                        <div class="form-group">
                            {!! Form::label('image', 'Image') !!}
                            {!! Form::file('pro_image',null, ['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('Price', 'Sale Price') !!}
                            {!! Form::text('splPrice',null, ['class'=>'form-control']) !!}
                        </div>

                        {{ Form::submit('Submit', ['class'=> 'btn btn-primary']) }}

                        {!! Form::close() !!}


                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
@endsection
