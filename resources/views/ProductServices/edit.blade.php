@extends('layouts.app')

@section('content')

    <p><div class="row"></p>
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit New Item</h2>
            </div>

            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('ProductServices.index') }}"> Back</a>
            </div>
        </div>
    </div>

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

    {!! Form::model($item, ['method' => 'PATCH','route' => ['ProductServices.update', $item->id]]) !!}

    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>id:</strong>

                {!! Form::text('id', null, array('placeholder' => 'id','class' => 'form-control')) !!}

            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Product Code:</strong>

                {!! Form::text('productcode', null, array('placeholder' => 'productcode','class' => 'form-control')) !!}

            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>productname:</strong>

                {!! Form::text('productname', null, array('placeholder' => 'productname','class' => 'form-control')) !!}

            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Material Type:</strong>

                {!! Form::date('materialtype', null, array('placeholder' => 'materialtype','class' => 'form-control')) !!}

            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Spesification:</strong>

                {!! Form::text('spesification', null, array('placeholder' => 'spesification','class' => 'form-control')) !!}

            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Min Order:</strong>

                {!! Form::text('minorder', null, array('placeholder' => 'minorder','class' => 'form-control')) !!}

            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Min Qty:</strong>

                {!! Form::text('minqty', null, array('placeholder' => 'minqty','class' => 'form-control')) !!}

            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>

        </div>
    </div>

    {!! Form::close() !!}

@endsection
