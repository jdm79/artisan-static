@extends('_layouts.master')

@section('title', 'About')

@section('content')

    <img src="https://res.cloudinary.com/dlrwbckxi/image/upload/v1600525472/james_daniel_malvern.png"
     alt="James Malvern" width="250" height="300" class="center">

    <br>
    <hr>

    <ul>
        <li><a href = "mailto: james.malvern@city.ac.uk">Email me here</a></li>
        <li><a href="https://twitter.com/{{ $page->owner->twitter }}" target="_blank">My personal Twitter account</a></li>
        <li><a href="https://www.linkedin.com/in/james-malvern/" target="_blank">LinkedIn</a></li>
        <li><a href="https://github.com/{{ $page->owner->github }}" target="_blank">GitHub</a></li>
    </ul>

    <p>Currently living and working in Berlin, Germany (with no intention of going anywhere else).</p>
    
    <p>I am a recent (2020) <a href="https://www.city.ac.uk/study/courses/postgraduate/interactive-journalism">
    Interactive Journalism MA</a> graduate from <a href="https://www.city.ac.uk/about/schools/arts-social-sciences/journalism">
    City University, London</a>, focusing
    on data, health and tech. International background with experience working
    in tech, education and financial institutions in Australia, Germany, France and the UK.</p>
    
    <p>Regular attendee at <a href="https://journocoders.com/">
    Journocoders</a>
    at the News Building (London Bridge) as well as <a href="https://www.hackshackers.com/">Hacks/Hackers</a> London. 
    Looking forward to attending similar events in Berlin whenever this becomes possible again.
     Past contributor to <a href="http://hackneypost.co.uk/">Hackney Post</a> and
    <a href="https://www.interhacktives.com/">Interhacktives.com</a>.</p>

    <p>Until Covid-19 struck, I was working as a freelance researcher at ITV News (whilst finishing my MA)
     on the investigative journalism programmes <a href="https://www.itv.com/news/topic/tonight"><i>Tonight</i></a> 
    and <a href="https://www.itv.com/news/topic/on-assignment"><i>On Assignment</i></a>,
     as well as the <a href="https://www.imdb.com/title/tt11595544/"><i>Meghan & Harry: A Royal Crisis?</i></a> documentary.</p>

    <p>Now a remote volunteer member of the <a href="https://cityjsconf.org/">CityJSConf</a> team based in London. 
    Most recently I helped organise the 2020 CityJS 5-day virtual JavaScript conference on the Remo platform
    with speakers from five different continents.</p>

    <p>Currently working with <a href="https://d3js.org/">D3.js</a> and 
    <a href="https://www.statistikportal.de/en">Statistik Portal</a> using Python and R. 
    Always looking for new ways of finding stories in data and displaying them, as well as playing with the Twitter API.</p>

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
      <li>Health</li>
      <li>Technology</li>
      <li>Environment</li>
      <li>Green party</li>
    </ul>
@endsection
