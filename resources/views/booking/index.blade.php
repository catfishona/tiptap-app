@extends('layouts.app')

@section('content')
<div class="container">

    <div class="col-md-12 mt-1">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        @if ($storage->id == 1)
                        <img src="{{ url('img/small.jpeg') }}" class="rounded mx-auto d-block" width="100%" alt="Small Storage" />

                        @elseif ($storage->id == 2)
                        <img src="{{ url('img/medium.png') }}" class="rounded mx-auto d-block" width="100%" alt="Medium Storage" />

                        @else
                        <img src="{{ url('img/large.png') }}" class="rounded mx-auto d-block" width="100%" alt="Large Storage" />
                        @endif



                    </div>
                    <div class="col-md-6 mt-5">
                        <h2><strong>Book A {{ $storage->storageSize }} Storage!</strong></h2>
                        </br>
                        <table class="table">
                           
                                <tr>
                                    <td>Rent price (per month)</td>
                                    <td>:</td>
                                    <td>Rp. {{ number_format($storage->price) }}</td>
                                </tr>
                                <tr>
                                    <td>Storages available</td>
                                    <td>:</td>
                                    <td>{{ $storage->availability }}</td>
                                </tr>
                                <tr>
                                    <td>Dimensions</td>
                                    <td>:</td>
                                    <td>{{ $storage->description }}</td>
                                </tr>

                                <tr>
                                    <td>
                                        <form method="post" action="{{ url('checkout') }}/{{ $storage->id }}">
                                            @csrf
                                            <div class="form-group pt-3">
                                                <label for="duration">Duration</label>
                                                <select name="duration" id="duration" class="form-control">
                                                    <option value="1">1 Month</option>
                                                    <option value="3">3 Months</option>
                                                    <option value="6">6 Months</option>
                                                </select>
                                            </div>

                                            <div class="form-group pt-3">
                                                <label for="sdate">Start Date of Rental</label>
                                                <input type="date" name="startDate" class="form-control" required="">
                                                </select>
                                            </div>


                                            <button type="submit" class="btn btn-primary mt-2"><i class="fa fa-shopping-cart"></i>&nbsp;&nbsp;Continue</button>
                                        </form>
                                    </td>
                                </tr>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection