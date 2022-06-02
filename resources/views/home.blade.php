@extends('layouts.app')
@section('content')
    <article>
        <h1>COVID Testing</h1>
        <div class="postimage">
            <img src="images/post1_pict.jpeg" alt="picture of COVID test procedure, and microb pic">
        </div>
        @auth
            <p>
                Seek urgent medical attention if you have serious symptoms, such as: difficulty breathing blue lips or
                face pain or pressure in the chest cold and clammy, or pale and mottled, skin fainting or collapsing
                being confused becoming difficult to wake up little or no urine output coughing up blood
            </p>
        @endauth
        @guest
            <p>
                You need to login to see current infected zones.<br>
                Temporarily showing only few lines as demo. Sign in to get full version.
            </p>
        @endguest
    </article>
@endsection
