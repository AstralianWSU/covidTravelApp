@extends('layouts.app')
@section('content')
    <article>
        <h1>COVID hotspot zones</h1>
        <h4>new hotspot item</h4>
        @auth
            <form method="POST" action="{{ route('saveHotspot')}}" accept-charset="UTF-8">
                @csrf
                <div>
                    <input type="text" name="listHotlistItem" required>
                </div>
                <button type="submit">Add hotspot</button>
            </form>
        @endauth
        <div class="head">Location:</div>
        <ul class="locations">
            @foreach ($listHotspot as $listHotspot)
                <li>{{ $listHotspot->name }}</li>
            @endforeach
        </ul>
    </article>
@endsection
