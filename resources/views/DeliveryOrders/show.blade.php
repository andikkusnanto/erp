@extends('layouts.app')

 @section('content')


    <p><div class="row"></p>
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Item</h2>
            </div>

            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('DeliveryOrders.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Id :</strong>

                {{ $item->id }}

            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Do Number :</strong>

                {{ $item->donumber }}

            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Acc Number :</strong>

                {{ $item->accnumber }}

            </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Date :</strong>

                  {{ $item->dodate }}

                </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Sold To :</strong>

                  {{ $item->soldto }}

                </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
              <strong>Ship To :</strong>

                {{ $item->shipto }}

            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
              <strong>Remark :</strong>

                {{ $item->remark }}

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
              <strong>Receiver :</strong>

                {{ $item->receiver }}

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
              <strong>Approval :</strong>

                {{ $item->approval }}

            </div>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
              <strong>Update At :</strong>

                {{ $item->updated_at }}

            </div>
        </div>
    </div>


@endsection
