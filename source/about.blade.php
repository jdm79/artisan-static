@extends('_layouts.master')

@section('title', 'About')

@section('content')

   

    <p>Currently living and working in Berlin, Germany (and have no intention of going anywhere soon).</p>
    
    <p>Recent (2020) <a href="https://www.city.ac.uk/study/courses/postgraduate/interactive-journalism">
    Interactive Journalism MA</a> graduate from <a href="https://www.city.ac.uk/about/schools/arts-social-sciences/journalism">
    City University, London</a>, focusing
    on data, health and tech. International background with experience living and working
    in tech, education and financial institutions in Australia, Germany, France and the UK.</p>
    
    <p>Regular <a href="https://journocoders.com/">
    Journocoder</a>
    at the News Building (London Bridge) as well as <a href="https://www.hackshackers.com/">Hacks/Hackers</a>.
     Past contributor to <a href="http://hackneypost.co.uk/">Hackney Post</a> and
    <a href="https://www.interhacktives.com/">Interhacktives.com</a>. 
    Worked at ITV News, on the <i>Tonight</i> programme and <i>On Assignment</i>,
     as well as the <i>Meghan & Harry: A Royal Crisis?</i> documentary.</p>

    <p>Now a remote member of the <a href="https://cityjsconf.org/">CityJSConf</a> team based in London. 
    Most recently I helped organise the 2020 CityJS 5-day virtual JavaScript conference on the Remo platform
    with speakers from five different continents.</p>

    <p>Currently working with <a href="https://d3js.org/">D3.js</a> and 
    <a href="https://www.statistikportal.de/en">Statistik Portal</a> using Python and R. 
    Always looking for new ways of finding stories in data, as well as playing with the Twitter API.</p>

    <!-- <ul>
      <li><a href="#interests">Interests</a></li>
      <li><a href="#links">Personal links</a></li>
      <li><a href="#projects">Projects</a></li>
    </ul> -->

    <h2 id="interests">Interests</h2>
    <ul>
      <li>Data journalism</li>
      <li>Twitter bots</li>
      <li>Web scraping</li>
      <li>Python</li>
      <li>Javascript</li>
      <li>R</li>
      <li>Politics and current affairs</li>
      <li>Health</li>
      <li>Tech</li>
    </ul>

    <h2 id="links">Personal links</h2>

    <ul>
        <li><a href="https://twitter.com/{{ $page->owner->twitter }}" target="_blank">My personal Twitter account</a></li>
        <li><a href="https://www.linkedin.com/in/james-malvern/" target="_blank">LinkedIn</a></li>
        <li><a href="https://github.com/{{ $page->owner->github }}" target="_blank">GitHub</a></li>
    </ul>

    <h2 id="projects">Some of my MA projects (2019/2020)</h2>

    <ul>
        <li><a href="https://twitter.com/HansardLord" target="_blank">Hansard House of Lords Twitter bot:</a>
        lists what they get up to every day in the House of Lords. Made with Python, Beautiful Soup and the Twitter API. 
        This bot was chosen to be part of 
        <a href="https://blog.twitter.com/developer/en_us/topics/tools/2020/introducing_new_twitter_api.html">
        Twitter's showcase of Bots</a> that share information 
        and make conversations more fun using the Twitter API)</li>

        <li><a href="https://uk-headline-checker.herokuapp.com" 
        target="_blank">UK Headline Checker:</a> a web-scraping project I made in a week 
        using Python Flask and Beautiful Soup for my API, and React.js for the front end. 
        Hosted for free on <a href="https://www.heroku.com/">Heroku</a>.
         This came from an idea to make an in-house app 
        for a newsroom which would display on a large monitor the latest headlines from the main news websites in the UK and Eire.
        In this way, not only can we see how different publications spin the same story, or choose different headlines,
        we can also see the same stories spread across the screen as something big happens.
        Once loaded, it updates automatically using React.js and Ajax. No refreshing of the screen is required.
        It is scraping the headlines every five minutes,
        and serving them to the front end.
        (This app uses a free Heroku dyno, so will take a while to wake up initially)</li>
    </ul>
@endsection
