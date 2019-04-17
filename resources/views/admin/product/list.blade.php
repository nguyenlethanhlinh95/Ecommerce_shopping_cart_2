@extends('admin.layout.master')

@section('content')
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
                        List product
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline" role="grid">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="dataTables_length" id="dataTables-example_length">
                                            <label>
                                                <select name="dataTables-example_length" aria-controls="dataTables-example" class="form-control input-sm">
                                                    <option value="10">10</option>
                                                    <option value="25">25</option>
                                                    <option value="50">50</option>
                                                    <option value="100">100</option>
                                                </select> records per page</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div id="dataTables-example_filter" class="dataTables_filter">
                                            <label>Search:<input type="search" class="form-control input-sm" aria-controls="dataTables-example">
                                            </label>
                                        </div>
                                    </div>


                                </div>

                                <table class="table table-striped table-bordered table-hover dataTable no-footer" id="table table-striped table-bordered table-hover dataTable no-footer" aria-describedby="dataTables-example_info">
                                    <thead>
                                        <tr role="row">
                                            <th>Product name</th>
                                            <th>Product code</th>
                                            <th>Product price</th>
                                            <th>Product info</th>
                                            <th>Product image</th>
                                            <th>Product splprice</th>
                                            <th>Product create_at</th>
                                            <th>Action</th>
                                        </tr>

                                        @forelse($products as $product)
                                            <tr>
                                                <td>{{ $product->pro_name }}</td>
                                                <td>{{ $product->pro_code }}</td>
                                                <td>{{ $product->pro_price }}</td>
                                                <td>{{ $product->pro_info }}</td>
                                                <td>
                                                    @if ( isset($product->pro_image))
                                                        <img width="50px" height="50px" src="{{asset("/images/products/$product->pro_image ")}}" alt="{{$product->pro_name}}">
                                                    @endif
                                                </td>
                                                <td>{{ $product->spl_price }}</td>
                                                <td>{{ $product->created_at }}</td>
                                                <td class="text-center">
                                                    <a href="{{ route('product.show', ['id' => $product->id]) }}">
                                                        <span class="glyphicon glyphicon-search"></span>
                                                    </a>

                                                    <a href="{{ route('product.edit',['id' => $product->id]) }}">
                                                        <span class="glyphicon glyphicon-pencil"></span>
                                                    </a>

                                                    <a href="#">
                                                        <span class="glyphicon glyphicon-trash"></span>
                                                    </a>
                                                </td>
                                            </tr>
                                        @empty
                                            <h3>None product</h3>
                                        @endforelse
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>

@endsection
