# Alert Plugin for OctoberCMS

**Background**  
This adds flash alerts to the front-end that can be triggered by returning data to a div by ID. Supports the default Bootstrap alert levels e.g. info, success, warning, danger. This is less useful nowadays because OctoberCMS supports front-end flash natively, but it is useful when you want to create custom flash alerts.

**Features**  
- Provides a component that allows you to push alerts to the front-end from the backend

**Install**  
There are two options:
- `git clone https://github.com/albrightlabs/albright-plugin-alert.git plugins/albrightlabs/alert` and run `php artisan october:up` or
- `git submodule add -b master https://github.com/albrightlabs/albright-plugin-alert.git plugins/albrightlabs/alert` and run `php artisan october:up`

**Update**  
- `git pull origin master` or
- `git pull --recursive-submodules`

**Usage**  
1. Add the Alert component to the layout you wish to support flash alerts. Customize the HTML and CSS as needed.
2. To show an alert, submit a post request to `onFlashAlert()` with the data being `type` and `message`. Type can be `success`, `info`, `warning`, or `danger`.

**Contribute**  
Feel free to fork and contribute to this plugin! Please email support@albrightlabs.com with any and all questions.
