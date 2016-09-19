=== Google Calendar Agenda ===
Contributors: impression11 
Tags: Google, Widget, Calendar, Agenda
Requires at least: 3.5
Tested up to: 3.9.2
Stable tag: 1.2

A simple widget perfect for displaying upcoming events from your Google Calendar.

== Description ==

Google Calendar Agenda displays your upcoming events from your Google Calendar. It is perfect for showing upcoming gigs, bookings & appointments in your sidebar and posts.

It has been designed to be minimal and quick and should fit in perfectly with your theme.

= Features =
* Custom Widget Title
* Dispay your public Google Calendar
* Cache results for quicker loading
* Perfect for displaying upcoming Gigs and Events
* Shortcode to insert the feed into any Page or Post
* Fits in perfectly with (just about) all themes!

Something not working? [Contact Me](http://impression11.co.uk/contact/)

[View our other plugins](http://profiles.wordpress.org/impression11/)

== Installation ==

1. Extract the zip file and just drop the contents in the wp-content/plugins/ directory of your WordPress installation and then activate the Plugin from Plugins page.

2. Go to "GCal Agenda Options" in the sidebar and input your Google Calendar ID (available under your Calendar Settings) or set your Google Calendar ID in the widget option. Set-up the caching options if required (recommended for faster loading once you're happy with the widget settings).

3. Go to Widgets, drag the "Google Calendar Agenda" widget to the your sidebar and define the widget's Title and how many events you would like it to display.

4. To insert into a post or page use the shortcode [minGcal].

= Shortcode Options =
* count: The number of events you would like to display (numerical) (default: 5)
* calid (new): The ID of the Google Calendar (This takes presidence over the ID in GCal Agenda Options).
* links (new): If you want events of the Widget Title to be linked. Options: 0(Default, no links), 1(Title linked to the Google Calendar), 2(Events linked only), 3(Both Title & Events Linked).

Shortcode Example: [minGcal count="5" calid="en.uk%23holiday@group.v.calendar.google.com" links="0"]

== Changelog ==

= 1.2 =
* Fix for event links
* Documentation corrections

= 1.1 =
* Fix for all day events in subsequent years.
* Fix for recurring events.
* Ability to have multiple widgets with multiple calendar sources.
* Ability to link events to their Google Calendar Event Page.
* Ability to link the Widget Title to the Calendar.
* Ability to cope with caching multiple widgets.

= 1.0 =
* Initial release.