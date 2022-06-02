@extends('layouts.app')
@section('content')
    <article>
        <h1>Reporting</h1>
        <h4>new report</h4>
        <div class="postimage">
            <img src="images/post1_pict.jpeg" alt="picture of COVID test procedure, and microb pic">
        </div>

        @auth
            <form method="POST" action="{{ route('saveHistory')}}" accept-charset="UTF-8">
                @csrf
                <div class="mt-10 d-flex">
                    <div>
                        <input type="text" name="location_a" placeholder="Location A" required>
                    </div>
                    <div>
                        <input type="text" name="location_b" placeholder="Location B" required>
                    </div>
                    <div>
                        <input type="date" name="date_visit" placeholder="Date visit" required>
                    </div>
                </div>
                <button type="submit">Add hotspot</button>
            </form>
        @endauth
        <div class="head">History:</div>
        <ul class="locations">
            @foreach ($histories as $history)
                <li>{{ $history->location_a . " - " . $history->location_b . " visited " . \Carbon\Carbon::create($history->date__visit)->format('d M Y') }}</li>
            @endforeach
        </ul>
    </article>
@endsection
