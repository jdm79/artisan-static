@extends('_layouts.master')

@section('title', 'About')

@section('content')
    <h1>About</h1>

    <p>My name is {{ $page->owner->name }}</p>

    <h1>Interests</h1>
    <ul>
      <li>Twitter bots</li>
      <li>Web scraping</li>
      <li>Data journalism</li>
      <li>Python</li>
      <li>Javascript</li>
      <li>Web-scraping Twitter bots Javascript</li>
    </ul>
R

    <h2>Links:</h2>

    <ul>
        <li><a href="https://twitter.com/{{ $page->owner->twitter }}" target="_blank">Twitter</a></li>
        <li><a href="https://twitter.com/HansardLord" target="_blank">Twitter</a>
        Hansard Lord (Twitter bot listing what they get up to every day in the House of Lords. 
        This bot was chosen to be part of 
        <a href="https://blog.twitter.com/developer/en_us/topics/tools/2020/introducing_new_twitter_api.html">
        Twitter's showcase of Bots</a> that share information 
        and make conversations more fun using the Twitter API)</li>
        <li><a href="https://github.com/{{ $page->owner->github }}" target="_blank">GitHub</a></li>
        <li><a href="https://uk-headline-checker.herokuapp.com" 
        target="_blank">UK Headline Checker (uses a free Heroku dyno, so will take a while to wake up initially)</a></li>
    </ul>
@endsection
