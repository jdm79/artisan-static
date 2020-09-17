@extends('_layouts.master')

@section('title', 'Contact')

@section('content')

    <ul>
        <li><a href = "mailto: james.malvern@city.ac.uk">Email me here</a></li>
        <li><a href="https://twitter.com/{{ $page->owner->twitter }}" target="_blank">My personal Twitter account</a></li>
        <li><a href="https://www.linkedin.com/in/james-malvern/" target="_blank">LinkedIn</a></li>
        <li><a href="https://github.com/{{ $page->owner->github }}" target="_blank">GitHub</a></li>
    </ul>

@endsection
