@extends('layouts.app')

@section('content')



<div class="container">

    <div class="col-md-12 mt-1">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <img src="" class="rounded mx-auto d-block" width="100%" alt="">
                    </div>
                    <div class="col-md-6 mt-5">
                        <h2>Any special items?</h2>
                        <table class="table">
                            <tbody>

                                <tr>
                                    <td>Item</td>
                                    <td>:</td>
                                    <td>
                                        <form method="post" action="{{ url('booking') }}/{{ $storage->id }}">
                                            @csrf
                                            <input type="text" name="duration" placeholder="duration" class="form-control" required="">

                                            <input type="date" name="startDate" class="form-control" required="">

                                            <button type="submit" class="btn btn-primary mt-2"><i class="fa fa-shopping-cart"></i>Pay</button>
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