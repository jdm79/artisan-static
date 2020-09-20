---
title: 'I stayed up all night making a House of Lords Twitter bot. Here’s exactly how I did it.'
date: 2020-03-03
image: https://res.cloudinary.com/dlrwbckxi/image/upload/v1600557237/house-of-lords_oxcy0p.png
comments: true
---

Bots are everywhere. 
We argue with them on Twitter every day, they’re accused of creating online consensus on social media platforms, 
they allegedly help influence elections and they almost always have a long string of numbers after their fake name. 
They even recruit our fridges to join them in launching DDoS attacks on websites they don’t like. 
Bots are clearly great.

The combination of some coding and web scraping skills, 
and knowledge of how to interact with an application programming interface (API), 
can be a dangerous thing. With these ingredients, you are ready to make a bot. 
Whether it is a benevolent bot or a malevolent bot is up to you.

<p align="center">
  <img src="https://res.cloudinary.com/dlrwbckxi/image/upload/v1600557360/hansardbot2_xi1nuc.png" />
</p>
<p class="description">Hansard Lord Twitter bot</p>


##Aim

I decided I wanted to make an app that would scrape a website and then tweet the information gleaned from it. 
Something simple, which would suit Twitter, with its 280-character limit. 

In my late-night hunt I’d stumbled across the House of Lords Hansard homepage, 
which lists the issues being debated that day in the Lords. I wanted to know what they do every day. 
Once I found out, I wanted to share the information with the world. So I made a House of Lords bot.

I made my bot in the programming language Ruby, because this is the language I know best. 
Python – which is similar to Ruby – might be a better choice because there are more libraries and packages available. 
Next time I will try Python.

<p align="center">
  <img src="https://res.cloudinary.com/dlrwbckxi/image/upload/v1600557360/hansardbot_pg84qr.png" />
</p>
<p class="description">Hansard Lord Twitter bot</p>

##Ingredients

- Twitter developer account and handle
- Ruby application
- Chatterbot/dsl package to simplify the Twitter API methods
- Server (this bot is running off my computer at home)

##Method

First, I created a Twitter developer account, where I had to explain to Twitter what I wanted to make, why, 
and how I’d use it. Keeping the answers clear helps with the application. 
Warning: this process will take a day or two to be approved. 
This step was necessary in order to get the secret API keys, 
which you must add in a file on your app in order to link the code with your Twitter bot.

<p align="center">
  <img src="https://res.cloudinary.com/dlrwbckxi/image/upload/v1600557237/yaml_whmknp.png" />
</p>
<p class="description">Hansard Lord Twitter bot</p>

Next, I had to write the code. Whenever I create an application, 
I break the code down into small steps and iterate on it, once I’m sure that block is working. 
This is how large codebases are built – as well as this small one. 
Writing it all in one go without testing it is a proven recipe for disaster. 

Anyway, after a few hours I had 52 lines of code (a bit of refactoring from a better coder would probably halve this) 
and the bot was alive. I made sure I was pushing my code to my Github account at regular intervals. 
This is handy for keeping your code in one place online, rather than just on your computer. 
It’s also great for having others online look at your code if you’re stuck.

<p align="center">
  <img src="https://res.cloudinary.com/dlrwbckxi/image/upload/v1600557236/ruby-code_yxnjre.png" />
</p>
<p class="description">Hansard Lord Twitter bot</p>

Let’s break down the code into pieces and explain what’s going on:

##Step 1

Load in the libraries which contain all the methods we’ll be using in the app. 
All of these libraries are open source and made by people in the community so that we don’t have to reinvent the wheel.

<p align="center">
  <img src="https://res.cloudinary.com/dlrwbckxi/image/upload/v1600557236/ruby_libraries_d8jvyb.png" />
</p>
<p class="description">Hansard Lord Twitter bot</p>

##Step 2

Use the Hansard page URL as the target to scrape. 
Grab it with the HTTParty library method ‘get()’, 
then turn it into something we can work with using the Nokogiri library. 
You don’t even need to select a date to add to your URL string. 
As long as you scrape the website after 6pm, you will have that day’s list of issues. 
If you scrape too early in the day you will not find anything listed.

<p align="center">
  <img src="https://res.cloudinary.com/dlrwbckxi/image/upload/v1600557236/get_url_h9wlgh.png" />
</p>
<p class="description">Hansard Lord Twitter bot</p>

##Step 3

Here we target the exact part of the HTML we want to grab. 
This can take a bit of trial and error. I didn’t quite drill down to the exact div, 
but was able to clean up what I did grab and work with that. 
Loop over all the issues on the HTML page and put them into an array to use later.

<p align="center">
  <img src="https://res.cloudinary.com/dlrwbckxi/image/upload/v1600557236/parse_page_te5pek.png" />
</p>
<p class="description">Hansard Lord Twitter bot</p>

##Step 4

Loop over the array, sort the issues alphabetically, 
and create a string which separates each issue with a comma and space.

<p align="center">
  <img src="https://res.cloudinary.com/dlrwbckxi/image/upload/v1600557236/create_string_b7cc7h.png" />
</p>
<p class="description">Hansard Lord Twitter bot</p>

##Step 5

Finally, I checked if the string I’d created was small enough to post as a tweet (under 280 characters). 
If it’s not, I’ve written some code which deals with that and breaks the string in half, 
sends it out in two tweets. That’s what’s happening in the if/else conditional. 
I’ve used 262 because ‘Today, the lords discussed: ‘ is 18 characters by itself already. 
If the tweet is longer than 280 characters, it will simply not post to Twitter. So we need to handle this.

<p align="center">
  <img src="https://res.cloudinary.com/dlrwbckxi/image/upload/v1600557237/url_scraper_rexold.png" />
</p>
<p class="description">Hansard Lord Twitter bot</p>

##Step 6

Having put all the code into a function called ‘url_scraper’, I make a simple loop which runs every 24 hours.

<p align="center">
  <img src="https://res.cloudinary.com/dlrwbckxi/image/upload/v1600557237/Screenshot-2020-03-03-at-15.05.39_qohht9.png" />
</p>
<p class="description">Hansard Lord Twitter bot</p>

##Step 7

And finally, I run this script on the terminal on my computer. 
As long as the computer is on, this script will run forever. I’m basically using this computer as a server.

<p align="center">
  <img src="https://res.cloudinary.com/dlrwbckxi/image/upload/v1600557237/terminal_y3mjip.png" />
</p>
<p class="description">Hansard Lord Twitter bot</p>

##Last words

The Twitter API makes it easy. 
The methods are there in the documentation for you to play with. 
And the chatterbot/dsl library makes it even easier by taking those methods and making them work seamlessly in Ruby. 
The power you have to tweet, retweet, favourite, follow, message is truly frightening – 
you begin to appreciate how these insidious bots are autonomously and computationally wreaking havoc online. 
It’s not too difficult to get going.

I had another Twitter bot which was favouriting everything on its timeline every hour, 
which was turning into thousands of tweets being favourited in less than a second. 
Twitter has limits on how much you can do in a small period of time, though; 
smash through those thresholds and it freezes your account. Twitter asks you to prove you are not a robot, 
which seems a bit ironic. But this is a bot with a manual override. For now…

Follow the House of Lords Hansard bot here.

Read this article on Interhacktives.com [here](http://www.interhacktives.com/2020/03/03/i-built-a-house-of-lords-twitter-bot-3/)