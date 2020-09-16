@extends('_layouts.master')

@section('title', 'About')

@section('content')
    <h1>About</h1>

    <p>Currently living and working in Berlin, Germany</p>
    
    <p>Recent interactive journalism MA graduate from the City University of London, focusing
    on data, health and tech. International background with experience living and working
    in tech, education and financial institutions in Australia, Germany, France and the UK. Regular Journocoder
    at the News Building (London Bridge). Past contributor to Hackney Post and
    Interhacktives.com.</p>

    <p>Now a remote member of the <a href="https://cityjsconf.org/">CityJSConf</a> team based in London. 
    Most recently I helped organise the 2020 CityJS virtual 5-day conference on the Remo platform
    with speakers from five different continents.</p>

    <p>Currently working with D3.js and <a href="https://www.statistikportal.de/en">Statistik Portal</a> using Python and R. 
    Always looking for new ways of using the Twitter API.</p>


    <h1>Interests</h1>
    <ul>
      <li>Data journalism</li>
      <li>Twitter bots</li>
      <li>Web scraping</li>
      <li>Python</li>
      <li>Javascript</li>
      <li>R</li>
      <li>Health</li>
      <li>Tech</li>
    </ul>

    <h2>Personal links:</h2>

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
