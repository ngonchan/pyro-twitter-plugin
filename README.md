#PyroCMS Twitter Plugin

A simple plugin that allows you to display a list of tweets.

##Installation

Copy twitter.php into addons/plugins.

##Usage

In you layout or theme use the tag as follows:

    {pyro:twitter:tweets username="dhorrigan" count="5"}

If you do not specify *count* then it will default to 5.

The HTML generated will look like this:

    <ul id="twitter_update_list"><li>&nbsp;</li></ul> 
    <script type="text/javascript" src="http://twitter.com/javascripts/blogger.js"></script> 
    <script type="text/javascript" src="http://twitter.com/statuses/user_timeline/dhorrigan.json?callback=twitterCallback2&amp;count=5"></script>

All you need to do is style the #twitter\_update\_list unordered list.