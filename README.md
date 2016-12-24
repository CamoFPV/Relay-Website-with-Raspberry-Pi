# Relay-Website-with-Raspberry-Pi
This is my devlopment of my website that controls GPIO on the Pi to power any 16 channel relay.

To use this script, you have to have installed a LAMP server on the Pi.

Connect all 16 inputs from the relay board to the following pins in 5v, 2, 3, 4, 17, 27, 22, 10, 9, 11, 5, 6, 13, 19, 26, 21, 20, GND.

Im using a Raspberry Pi rev 2 B+ (Old Pi without video out) not sure if there is any diffrence on other Pis.

http://www.ebay.ca/itm/201326973482?_trksid=p2057872.m2749.l2649&ssPageName=STRK%3AMEBIDX%3AIT

is what Im using with this code. Will work fine with others on the same GPIO ports.

You must also add www-data to you're sudoers file. On rasbian do the following:

1. nano /etc/sudoers
2. www-data ALL = NOPASSWD: ALL

You may change the "ALL" to a directory. Example /var/www/html/* for the web server.


Check out my site : https://camofpv.com 
Check me out on YouTube : https://www.youtube.com/channel/UC6hCfu4P6eIGZm_kpJ0K5mg

![alt tag](https://diamondnode.net/owncloud/index.php/apps/files_sharing/ajax/publicpreview.php?x=2560&y=752&a=true&file=Screen%2520Shot%25202016-12-23%2520at%252011.43.38%2520PM.png&t=X1HSd7idq8RCKyj&scalingup=0)
![alt tag](https://diamondnode.net/owncloud/index.php/apps/files_sharing/ajax/publicpreview.php?x=2560&y=664&a=true&file=Screen%2520Shot%25202016-12-23%2520at%252011.41.55%2520PM.png&t=RYmB6bIjntv6CaO&scalingup=0)
