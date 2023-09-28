@extends('dashboard')

@section('content')

<div class="bookings">
    <table class="bookings-table">
        <tr>
            <th>id</th>
            <th>Full Name</th>
            <th># of people</th>
            <th>Pickup Date</th>
            <th>Phone Number</th>
            <th>Email Address</th>
            <th>Pickup Address</th>
            <th>Destination Address</th>
            <th>Status</th>     
        </tr>
        @foreach ($bookings as $booking)
        
        <tr>
            <td>{{ $booking->id }}</td>
            <td>{{ $booking->name }}</td>
            <td>{{ $booking->nr_people }}</td>
            <td>{{ $booking->date }}</td>
            <td>{{ $booking->phone }}</td>
            <td>{{ $booking->email }}</td>
            <td>{{ $booking->pickup }}</td>
            <td>{{ $booking->destination }}</td>
            <form action="/booking/{{$booking->id}}"method="POST">
                @csrf
                <td><button type="submit" class="delete-post">Remove Booking</button></td>
            </form>
        </tr>

        @endforeach
    </table>
</div>

@endsection