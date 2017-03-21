@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading"><a href="{{ url('/ProductServices') }}">Product Services</a></div>
                <div class="panel-heading"><a href="{{ url('/DeliveryOrders') }}">Delivery Order</a></div>
                <div class="panel-body">
                    You are logged in!
                </div>

<!--                 @for ($i = 0; $i < 10; $i++)
                     <div>
                        value is {{ $i }}
                     </div>
                @endfor
 -->
            </div>
        </div>
    </div>
</div>
@endsection

