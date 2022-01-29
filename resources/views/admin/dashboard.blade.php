@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8 offset-2">
            <div class="card" style="margin-top:3.5rem;">
                <div class="card-header">
                    My Camps
                </div>
                @include('components.alert')
                <table class="table table-bordered">
                    <thead class="">
                        <tr class="table-dark">
                            <th>User</th>
                            <th>Camp</th>
                            <th>Price</th>
                            <th>Register Data</th>
                            <th>Paid Status</th>
                            <th>Action</th>
                        </tr>
                        @forelse ($checkouts as $checkout)
                        <tr>
                            <td>{{$checkout->User->name}}</td>
                            <td>{{$checkout->Camp->title}}</td>
                            <td>{{$checkout->Camp->price}}</td>
                            <td>{{$checkout->created_at->format('M d Y')}}</td>
                            <td>
                                @if ($checkout->is_paid)
                                <span class=" badge bg-success">Paid</span>
                                @else
                                <span class="badge bg-warning">Waiting</span>
                                @endif
                            </td>
                            <td>
                                @if (!$checkout->is_paid)
                                <form action="{{route('admin.checkout.update', $checkout->id)}}" method="POST">
                                    @csrf
                                    <button class="btn btn-primary btn-sm" type="">set to paid</button>
                                </form>
                                @endif
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="3">No Camp Registered</td>
                        </tr>
                        @endforelse
                    </thead>
                    <tbody>

                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
@endsection
