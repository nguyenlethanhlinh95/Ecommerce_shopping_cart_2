@extends('admin.layout.master')

@section('content')
    <?php //var_dump($product) ?>
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Dashboard</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        View product
                    </div>

                </div>
            </div>


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

                <div class="form-group">
                    {!! Form::label('name', 'Name') !!}
                    {!! Form::text('pro_name',$product->pro_name, ['class'=>'form-control', 'required'=>'', 'minlength' => '5', 'disabled']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('code', 'Code') !!}
                    {!! Form::text('pro_code',$product->pro_code, ['class'=>'form-control', 'disabled']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('price', 'Price') !!}
                    {!! Form::text('pro_price',$product->pro_price, ['class'=>'form-control', 'disabled']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('pro_Description', 'Description') !!}
                    {!! Form::text('pro_info',$product->pro_info, ['class'=>'form-control', 'disabled']) !!}
                </div>


                <div class="form-group">
                    {!! Form::label('image', 'Image') !!}
                    <img src="images/products/{{ $product->pro_image }}" width="50px" height="50px" alt="">

                </div>

                <div class="form-group">
                    {!! Form::label('Price', 'Sale Price') !!}
                    {!! Form::text('splPrice',$product->spl_price, ['class'=>'form-control', 'disabled']) !!}
                </div>




            </div>
        </div>
    </div>
@endsection
