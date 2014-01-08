<?php

/* 

Author: mardian@meshsecure.com, gunawanmardian@gmail.com, www.neshsecure.com
File: outpost.php
Version: 0.1
Description: A simple php redirector from vulnerability scanner, exploitation & flood tools by detecting its user agent

hey, it works!


1. I have a lot scanner, flood tools, exploitation tools etc. And sometimes i forget to change the user-agent when I'm doing pen-testing, and yes these tools are really noisy on the server logs.
2. I then try to see whats on the log when I'm using these tools:

rootmesh@meshsecure:/var/log/apache2$ tail -f access.log

127.0.0.1 - - [08/Jan/2014:23:19:29 +0700] "GET /outpost/outpost.php HTTP/1.1" 302 463 "-" "Paros/3.2.13"
127.0.0.1 - - [08/Jan/2014:23:21:10 +0700] "GET /outpost/outpost.php HTTP/1.1" 302 481 "-" "Paros/3.2.13"

some of the logs snippet.

3. But I can easily change the user-agent on the tools?
Yes you can, I notice that too. in sqlmap you use the switch --random-agent for example. But kiddies wont know that, they just run the tool and spawn hell on any website.

4. So why not have this script embedded in php pages? It might save you from something ;)

PS: You can redirect it(default) or do something with the requests.
*/




// W3AF

if (preg_match("(w3af.org)", getenv("HTTP_USER_AGENT"))) {
 header("Location: http://www.google.com");
	exit;
}

// Paros 

if (preg_match("(Paros/3.2.13)", getenv("HTTP_USER_AGENT"))) {
 header("Location: http://www.google.com");
	exit;
}

// Wapiti

if (preg_match("(python-requests/2.0.0 CPython/2.7.3 Linux/3.2.0-29-generic-pae)", getenv("HTTP_USER_AGENT"))) {
 header("Location: http://www.google.com");
	exit;
}

// Sqlmap

if (preg_match("(sqlmap/1.0-dev (http://sqlmap.org))", getenv("HTTP_USER_AGENT"))) {
 header("Location: http://www.google.com");
	exit;
}

// Schemafuzzy

if (preg_match("(Python-urllib/2.7)", getenv("HTTP_USER_AGENT"))) {
 header("Location: http://www.google.com");
	exit;
}

// TorsHammer

if (preg_match("(Mozilla/5.0 (compatible; Yahoo! Slurp; http://help.yahoo.com/help/us/ysearch/slurp))", getenv("HTTP_USER_AGENT"))) {
  header("Location: http://www.google.com");
}

if (preg_match("(YahooSeeker/1.2 (compatible; Mozilla 4.0; MSIE 5.5; yahooseeker at yahoo-inc dot com ; http://help.yahoo.com/help/us/shop/merchant/))", getenv("HTTP_USER_AGENT"))) {
  header("location: http://www.google.com");
}

?>
