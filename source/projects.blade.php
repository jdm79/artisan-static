@extends('_layouts.master')

@section('title', 'Projects')

@section('content')

    <ul>
        <li><a href="https://twitter.com/HansardLord" target="_blank">Hansard House of Lords Twitter bot:</a>
        this bot lists what they get up to every day in the House of Lords. Made during my MA 
        with Python, Beautiful Soup and the Twitter API. 
        This bot was chosen to be part of 
        <a href="https://blog.twitter.com/developer/en_us/topics/tools/2020/introducing_new_twitter_api.html">
        Twitter's showcase of Bots</a> that share information 
        and make conversations more fun using the Twitter API)</li>

        <br>

        <li><a href="https://uk-headline-checker.herokuapp.com" 
        target="_blank">UK Headline Checker:</a> my <i>Advanced Coding and Data</i> project for my MA. 
        A web-scraping journalism tool I built in a week 
        using Python Flask and Beautiful Soup for my API, and React.js for the front end. 
        Hosted for free on <a href="https://www.heroku.com/">Heroku</a>.
         This came from an idea to make an in-house app 
        for a newsroom which would display in real-time on a large monitor the latest headlines from the main news websites in the UK and Eire.
        In this way, not only can we see how different publications spin the same story, or choose different headlines,
        we can also see the same stories spread across the screen as something big happens.
        Once loaded, it updates automatically using React.js and Ajax. No refreshing of the screen is required.
        It is scraping the headlines every five minutes
        and serving them to the front end.
        (This app uses a free Heroku dyno, so will take a while to wake up initially)</li>
        
        <br>
        
        <li>Deutscher Schlagzeilenprüfer: The German headline checker - coming soon!</li>
    </ul>
@endsection
