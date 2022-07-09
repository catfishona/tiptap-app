@extends('layouts.app')

@section('content')


<div class="container">
    <div class="col-md-12 mt-1">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <img class="img-fluid pt-5" src="{{ url('img/checkout.png') }}" alt="">
                    </div>
                    <div class="col-md-6 mt-5">
                        <h2><strong>Payment</strong></h2>
                        <br>
                        <br>
                        <table class="table">
                            <tbody>

                                <tr>
                                    <td>Size</td>
                                    <td>:</td>
                                    <td>{{ $booking->idStorage }}</td>
                                </tr>

                                <tr>
                                    <td>Total</td>
                                    <td>:</td>
                                    <td>Rp. {{ number_format($booking->total) }}</td>
                                </tr>

                                <tr>
                                    <td>Duration</td>
                                    <td>:</td>
                                    <td>{{ $booking->duration }} month</td>
                                </tr>

                                <tr>
                                    <td>Payment Method</td>
                                    <td>:</td>
                                    <td>
                                        <form method="post" action="{{ url('confirmcheckout')}}/{{ $booking->id }}">
                                            @csrf
                                            <!-- <input type="text" name="paymentMethod" placeholder="paymentMethod" class="form-control" required=""> -->

                                            <div class="form-group pt-0">
                                                <select name="paymentMethod" id="idPay" class="form-control">
                                                    <option value="Ovo">OVO</option>
                                                    <option value="Gopay">GoPay</option>
                                                    <option value="Bank Transfer">Bank Transfer</option>
                                                </select>
                                            </div>

                                            <button type="submit" class="btn btn-darkpink">
                                               Checkout</button>

                                            <!-- <button type="submit" class="btn btn-primary mt-2"><i class="fa fa-shopping-cart"></i>Checkout</button> -->
                                        </form>
                                    </td>
                                </tr>
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection