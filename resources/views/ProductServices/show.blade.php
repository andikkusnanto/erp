@extends('layouts.app')

 @section('content')


    <p><div class="row"></p>
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Item</h2>
            </div>

            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('ProductServices.index') }}"> Back</a>
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
                <strong>Product Code :</strong>

                {{ $item->productcode }}

            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Product Name :</strong>

                {{ $item->productname }}

            </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Material Type :</strong>

                  {{ $item->materialtype }}

                </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Spesification :</strong>

                  {{ $item->spesification }}

                </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
              <strong>Min Order :</strong>

                {{ $item->minorder }}

            </div>
        </div>

    </div>


@endsection
