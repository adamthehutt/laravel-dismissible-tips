### Laravel Dismissible Tips
This package allows you to present users with in-context helpful tips that can 
be dismissed once or permanently.

#### Installation

Install using composer:
``` bash
composer require adamthehutt/laravel-dismissible-tips
```

Then publish assets and other configuration:
``` bash
php artisan vendor:publish
``` 

Make sure to include the relevant css and js files. You can either incorporate 
them into your existing asset pipeline or reference them directly as:
```html
<link rel="stylesheet" href="/vendor/dismissible-tips/tips.css"/>
<script src="/vendor/dismissible-tips/tips.js"></script>
```

#### Configuration

Tips are defined in lang files, e.g., 
```
/resources/lang/en/vendor/dismissible-tips/en/tips.php
```

To add a new tip, create a new entry, nested it as deeply as you like:
```php
return [
    'zappa' => [
        'wisdom' => [
            'snow' => "Don't eat the yellow snow!"
        ]
    ]
];
```

The code above would create a new tip identified as `zappa.wisdom.snow`.

#### Use

To use the above tip in a blade template:
```blade
@tip('tip' => 'zappa.wisdom.snow')
```

To add an optional link after the tip:
```blade
@tip('tip' => 'zappa.wisdom.snow', 'link' => 'https://example.com/foo/bar')
```

#### Customization

The package publishes its views, css, and javascript in the conventional 
vendor directories. You can safely customize the look and feel of the tips as 
much as you like. 
