@extends('layouts.app')

@section('content')

    <p><div class="row"></p>
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit New Item</h2>
            </div>

            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('DeliveryOrders.index') }}"> Back</a>
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

    {!! Form::model($item, ['method' => 'PATCH','route' => ['DeliveryOrders.update', $item->id]]) !!}

    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>id:</strong>

                {!! Form::text('id', null, array('placeholder' => 'id','class' => 'form-control')) !!}

            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Do Number:</strong>

                {!! Form::text('donumber', null, array('placeholder' => 'donumber','class' => 'form-control')) !!}

            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Acc Number:</strong>

                {!! Form::text('accnumber', null, array('placeholder' => 'accnumber','class' => 'form-control')) !!}

            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Date:</strong>

                {!! Form::date('dodate', null, array('placeholder' => 'dodate','class' => 'form-control')) !!}

            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Sold To:</strong>

                {!! Form::text('soldto', null, array('placeholder' => 'soldto','class' => 'form-control')) !!}

            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Ship To:</strong>

                {!! Form::text('shipto', null, array('placeholder' => 'shipto','class' => 'form-control')) !!}

            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Remark:</strong>

                {!! Form::text('remark', null, array('placeholder' => 'remark','class' => 'form-control')) !!}

            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Receiver:</strong>

                {!! Form::text('receiver', null, array('placeholder' => 'receiver','class' => 'form-control')) !!}

            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Approval:</strong>

                {!! Form::text('approval', null, array('placeholder' => 'approval','class' => 'form-control')) !!}

            </div>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>

        </div>
    </div>

    {!! Form::close() !!}

@endsection
