@extends('_layouts.master')

@section('title', 'About')

@section('content')
    <h1>About</h1>

    <p></p>


    <h1>Interests</h1>
    <ul>
      <li>Data journalism</li>
      <li>Twitter bots</li>
      <li>Web scraping</li>
      <li>Python</li>
      <li>Javascript</li>
      <li>R</li>
    </ul>

    <h2>Links:</h2>

    <ul>
        <li><a href="https://twitter.com/{{ $page->owner->twitter }}" target="_blank">My personal Twitter account</a></li>
        <li><a href="https://www.linkedin.com/in/james-malvern/" target="_blank">LinkedIn</a></li>
        <li><a href="https://github.com/{{ $page->owner->github }}" target="_blank">GitHub</a></li>
    </ul>

    <h2>Projects I made during my MA at City University Journalism department 2019/2020:</h2>

    <ul>
        <li><a href="https://twitter.com/HansardLord" target="_blank">Hansard House of Lords Twitter bot:</a>
        lists what they get up to every day in the House of Lords. Made with Python, Beautiful Soup and the Twitter API. 
        This bot was chosen to be part of 
        <a href="https://blog.twitter.com/developer/en_us/topics/tools/2020/introducing_new_twitter_api.html">
        Twitter's showcase of Bots</a> that share information 
        and make conversations more fun using the Twitter API)</li>
        <li><a href="https://uk-headline-checker.herokuapp.com" 
        target="_blank">UK Headline Checker:</a> a web-scraping project I made in a week 
        using Python Flask, Beautiful Soup on the back React. This came from an idea to make an in-house app 
        for a newsroom which would display the latest headlines from the main news websites in the UK and Eire.
        Once loaded, it updates automatically using React.js and Ajax. (This app uses a free Heroku dyno, so will take a while to wake up initially)</li>
    </ul>
@endsection
