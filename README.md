# Statamic Calendar Links

> A Statamic addon that provides a calendar link fieldtype, allowing users to create calendar events that can be added to Google Calendar, Apple Calendar, Yahoo Calendar, and Outlook. Built using spatie/calendar-links.

## Features
- Custom fieldtype for calendar events
- Generate calendar links for multiple platforms:
	- Google Calendar
  - Apple Calendar (ICS)
  - Yahoo Calendar
  - Outlook Web
- Input fields for:
	- Button Label
	- Event Title
	- Start Date/Time
	- End Date/Time
	- Location
	- Description

## How to Install

You can install this addon via Composer:

``` bash
composer require darinlarimore/statamic-calendar-links
```

## How to Use

### Adding the Field
Add the calendar link field to your blueprint:

![Calendar Link Field](/fieldType.png)

The default handle is `calendar_link_field` but you can change it to whatever you like.

### Using the Field
![Calendar Link Fields](/fields.png)

When the Calendar Link field is configured to be required, the Button Label, Event Title, Start Date/Time, and End Date/Time fields are required.

### Template Usage

To use the calendar link in your templates, you can use the following code:

``` html
{{ calendar_link_field:button_label }}
{{ calendar_link_field:google_link }}
{{ calendar_link_field:yahoo_link }}
{{ calendar_link_field:webOutlook_link }}
{{ calendar_link_field:ics_link }}
```
