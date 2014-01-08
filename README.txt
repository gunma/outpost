Project Outpost FAQ

A first defense of web application security

It rejects/redirects the user agent that are known to be with bad intention, such as sql injection payload from sqlmap, scanners and so on.

What user agent that outpost reject?
Currently: Sqlmap, Paros Proxy, W3AF, TorsHammer, schemafuzz & Wapiti.

Do you think this is useful?
It can be use in conjuction with WAF (Web Application Firewall) or just Outpost. Because WAF its not easy to set up.

I can change the tool's user agent
I notice that, in sqlmap for example, you can use the switch "--radom-agent". I often forgot to change user agent on the tools i was using and it gets recorded on the server log. Well, some tools even dont have the switch to change the user agent, be careful with that tools.

It only support PHP
Currently, yes.

It doesnt work
On which part? What are trying to do? where do you put the Outpost's files?, mostly because of file permissions settings.

Here's the step to install outpost:
1. Download the files
2. Put this line below on your php page that you want to protect

<?php
include('./outpost.php');
?>

*advance
Put outpost.php path on your .htaccess and(or) robots.txt

3. Done

