@extends('layouts.app')

@section('content')

    <p><div class="row"></p>
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Product & Services</h2>
            </div>
            <!-- button for go to ProductServices.create form !-->
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('ProductServices.create') }}"> Create New Item</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))

        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>

    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Product Code</th>
            <th>Product Name</th>
            <th>Material Type</th>
            <th>Spesification</th>
            <th>Min Order</th>
            <th>Min Qty</th>
            <th width="250px">Action</th>
        </tr>

    @foreach ($itemsx as $key => $item)

    <!-- show table from database !-->
    <tr>
        <td align="center">{{ ++$b }}</td>
        <td>{{ $item->productcode }}</td>
        <td>{{ $item->productname }}</td>
        <td>{{ $item->materialtype }}</td>
        <td>{{ $item->spesification }}</td>
        <td>{{ $item->minorder }}</td>
        <td>{{ $item->minqty }}</td>
  
        <td>
            <a class="btn btn-info" href="{{ route('ProductServices.show',$item->id) }}">Show</a>
            <a class="btn btn-primary" href="{{ route('ProductServices.edit',$item->id) }}">Edit</a>

            <!-- button delete form !-->
            {!! Form::open(['method' => 'DELETE','route' => ['ProductServices.destroy', $item->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}

        </td>
    </tr>

    @endforeach

    </table>
    <!-- parsing html element to send all data !-->
    {!! $itemsx->render() !!}

@endsection
