@extends('layouts.app')

@section('content')

    <p><div class="row"></p>
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Create New Item</h2>
            </div>

            <!-- button back !-->
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('DeliveryOrders.index') }}"> Back</a>
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
    <!-- form action to itemCRUD.store function !-->
    {!! Form::open(array('route' => 'DeliveryOrders.store','method'=>'POST')) !!}

    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>donumber:</strong>
                <!-- No Item form !-->
                {!! Form::text('donumber', null, array('placeholder' => 'donumber','class' => 'form-control')) !!}

            </div>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">
                <strong>accnumber:</strong>
                <!-- form Item Name !-->
                {!! Form::text('accnumber', null, array('placeholder' => 'accnumber','class' => 'form-control')) !!}

            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>dodate:</strong>
                <!-- No Item form !-->
                {!! Form::date('dodate', null, array('placeholder' => 'dodate','class' => 'form-control')) !!}

            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>soldto:</strong>
                <!-- No Item form !-->
                {!! Form::text('soldto', null, array('placeholder' => 'soldto','class' => 'form-control')) !!}

            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>shipto:</strong>
                <!-- No Item form !-->
                {!! Form::text('shipto', null, array('placeholder' => 'shipto','class' => 'form-control')) !!}

            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>remark:</strong>
                <!-- No Item form !-->
                {!! Form::text('remark', null, array('placeholder' => 'remark','class' => 'form-control')) !!}

            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>receiver:</strong>
                <!-- No Item form !-->
                {!! Form::text('receiver', null, array('receiver' => 'shipto','class' => 'form-control')) !!}

            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>approval:</strong>
                <!-- No Item form !-->
                {!! Form::text('approval', null, array('placeholder' => 'approval','class' => 'form-control')) !!}

            </div>
        </div>



        <!-- submit and go to itemCRUD.store function !-->
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>

        </div>
    </div>

    {!! Form::close() !!}

@endsection
