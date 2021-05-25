mumble-widget
=============

This is a widget I wrote to display users and channels on a Mumble server I used to administer.

Introduction
------------

A small PHP script that displays the details of a Mumble server that supports the [channel viewer protocol](http://mumble.sourceforge.net/Channel_Viewer_Protocol).

Developed primarily for three reasons:

* *Limit intrusiveness* - doesn't display potentially sensitive information such as administration privileges, idle time and Operating System.
* *Dynamic resizing* - other solutions are often within an iframe of pre-determined size. This means potentially unwanted space or a scrollbar.
* *Full customisability* - the stylesheet can be freely modified.

Also has a [JavaScript implementation](https://github.com/ceva24/mumble-widget.js).

Install
-------

1. Set the value of `$file` in `mumble.php` to the url of your server's exposed JSON feed.
2. Use the contents of `mumble.php` as you see fit, e.g. copy the code directly into a side block on a website.
3. Modify the contents of `style.css` to suit your theme. The one provided is a good starting point to customise.

Example
------------
![mumble widget](https://www.ceva24.dev/public/images/mumble-widget.png "mumble-widget example screenshot")
