@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        
        <div class="col-md-12 py-5">
            <div class="card">
                <div class="card-body">
                    <h3><strong> History</strong></h3>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Booking ID</th>
                                <th>Date Ordered</th>
                                <th>Storage Type</th>
                                <th>Total Price</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            @foreach($bookings as $booking)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>B00{{ $booking->id}}</td>
                                <td>{{ $booking->created_at }}</td>
                                <td>{{ $booking->idStorage}}</td>
                                <td>Rp. {{ number_format($booking->total)}}</td>
                                <td>
                                    <a href="{{ route('historyDelete', ['id' => $booking->id]) }}" class="btn btn-sm btn-danger"> Erase</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection