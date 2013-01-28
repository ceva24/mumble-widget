mumble-widget
=============

A widget to display users and channels on a Mumble server.

Introduction
------------

A small php script that displays the details of a Mumble server that supports the [channel viewer protocol](http://mumble.sourceforge.net/Channel_Viewer_Protocol).

Developed primarily for three reasons:

* *Limit intrusiveness* - doesn't display potentially sensitive information such as administration privileges, idle time and operating system.
* *Dynamic resizing* - other solutions are often within an iframe of pre-determined size. This means potentially unwanted space or a scrollbar.
* *Full customisability* - the stylesheet can be freely modified.

Install
-------

1. Replace the value of `$file` in `mumble.php` with the url to your server's exposed json feed.
2. Use the contents of `mumble.php` as you see fit, e.g. copy the code directly into a side block on a website.
3. Modify the contents of `style.css` to suit your theme. The one provided is a good starting point to customise.

Contribution
------------

Feel free to fork this project to include additional functionality as you desire.