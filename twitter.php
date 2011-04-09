<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * A simple Twitter plugin
 *
 * @author     Dan Horrigan
 * @copyright  Copyright (c) 2011, Dan Horrigan
 * @license    MIT License <http://www.opensource.org/licenses/mit-license.php>
 */
class Plugin_Twitter extends Plugin
{
	/**
	 * Tweets - displays a list of tweets for the given user.
	 *
	 * Usage:
	 * {pyro:twitter:tweets username="dhorrigan" count="5"}
	 *
	 * @param	array
	 * @return	array
	 */
	function tweets()
	{
		$username = $this->attribute('username');
		$count = $this->attribute('count', 5);
		
		$html = <<<HTML
<ul id="twitter_update_list"><li>&nbsp;</li></ul>
<script type="text/javascript" src="http://twitter.com/javascripts/blogger.js"></script> 
<script type="text/javascript" src="http://api.twitter.com/1/statuses/user_timeline/$username.json?callback=twitterCallback2&amp;count=$count&amp;include_rts=true"></script>
HTML;
		
		return $html;
	}
}

/* End of file twitter.php */