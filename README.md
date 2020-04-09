# Alert Plugin for OctoberCMS
A simple OctoberCMS plugin that provides fancy flash alerts on the frontend.

This is less needed nowadays with the usage of flash natively in OctoberCMS, however, it's still cool to use!

## Purpose
This plugin is intended to be used for in-house projects only and installed/managed via the private plugins and themes partnership with the OctoberCMS project. Anyone, however, is free to use this plugin if they find value.

## Install
Install by running `git clone https://github.com/albrightlabs/albright-plugin-alert.git plugins/albrightlabs/alert; php artisan october:up;` from project root.

## Usage
Add the Alert component to the layout you wish to support flash alerts. Customize the HTML and CSS as needed.

To show an alert, trigger the function `onFlashAlert()` with the post data being `type` and `message`. Type can be `success`, `info`, `warning`, or `danger` just like the standard BootStrap.

## Contribute
Feel free to fork and contribute to this plugin! Please email support@albrightlabs.com with any and all questions.
