@extends('layouts.app')

@section('content')

    <p><div class="row"></p>
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Create New Item</h2>
            </div>

            <!-- button back !-->
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('ProductServices.index') }}"> Back</a>
            </div>
        </div>
    </div>
    <!-- checking if data empty !-->
    @if (count($errors) > 0)

        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>

                @foreach ($errors->all() as $error)

                    <li>{{ $error }}</li>

                @endforeach

            </ul>
        </div>

    @endif
    <!-- form action to productcode.store function !-->
    {!! Form::open(array('route' => 'ProductServices.store','method'=>'POST')) !!}

    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Product Code:</strong>
                <!-- No Item form !-->
                {!! Form::text('productcode', null, array('placeholder' => 'productcode','class' => 'form-control')) !!}

            </div>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">
                <strong>Product Name:</strong>
                <!-- form Item Name !-->
                {!! Form::text('productname', null, array('placeholder' => 'productname','class' => 'form-control')) !!}

            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Material Type:</strong>
                <!-- No Item form !-->
                {!! Form::date('materialtype', null, array('placeholder' => 'materialtype','class' => 'form-control')) !!}

            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Spesification:</strong>
                <!-- No Item form !-->
                {!! Form::text('spesification', null, array('placeholder' => 'spesification','class' => 'form-control')) !!}

            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Min Order:</strong>
                <!-- No Item form !-->
                {!! Form::text('minorder', null, array('placeholder' => 'minorder','class' => 'form-control')) !!}

            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Min Qty:</strong>
                <!-- No Item form !-->
                {!! Form::text('minqty', null, array('placeholder' => 'minqty','class' => 'form-control')) !!}

            </div>
        </div>

        <!-- submit and go to itemCRUD.store function !-->
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>

        </div>
    </div>

    {!! Form::close() !!}

@endsection
