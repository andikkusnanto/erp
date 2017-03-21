@extends('layouts.app')

@section('content')

    <p><div class="row"></p>
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Delivery Orders</h2>
            </div>
            <!-- button for go to DeliveryOrder.create form !-->
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('DeliveryOrders.create') }}"> Create New Item</a>
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
            <th>Do Number</th>
            <th>Acc Number</th>
            <th>Date</th>
            <th>Sold To</th>
            <th>Ship To</th>
            <th>Remark</th>
            <th>Receiver</th>
            <th>Approval</th>
            <th width="250px">Action</th>
        </tr>

    @foreach ($items as $key => $item)

    <!-- show table from database !-->
    <tr>
        <td align="center">{{ ++$b }}</td>
        <td>{{ $item->donumber }}</td>
        <td>{{ $item->accnumber }}</td>
        <td>{{ $item->dodate }}</td>
        <td>{{ $item->soldto }}</td>
        <td>{{ $item->shipto }}</td>
        <td>{{ $item->remark }}</td>
        <td>{{ $item->receiver }}</td>
        <td>{{ $item->approval }}</td>
  
        <td>
            <a class="btn btn-info" href="{{ route('DeliveryOrders.show',$item->id) }}">Show</a>
            <a class="btn btn-primary" href="{{ route('DeliveryOrders.edit',$item->id) }}">Edit</a>

            <!-- button delete form !-->
            {!! Form::open(['method' => 'DELETE','route' => ['DeliveryOrders.destroy', $item->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}

        </td>
    </tr>

    @endforeach

    </table>
    <!-- parsing html element to send all data !-->
    {!! $items->render() !!}

@endsection
