## Sun Flash

[![Total Downloads](https://poser.pugx.org/sun/laravel-flash/downloads)](https://packagist.org/packages/sun/laravel-flash) [![Latest Stable Version](https://poser.pugx.org/sun/laravel-flash/v/stable)](https://packagist.org/packages/sun/laravel-flash) [![Latest Unstable Version](https://poser.pugx.org/sun/laravel-flash/v/unstable)](https://packagist.org/packages/sun/laravel-flash) [![License](https://poser.pugx.org/sun/laravel-flash/license)](https://packagist.org/packages/sun/laravel-flash)

Sun Flash message helps you to add flash messages to your Laravel application.

## Installation Process

In order to install Sun Flash, just add

```
 "sun/laravel-flash": "1.*"
```
to your composer.json. Then run composer install or composer update.

Then in your config/app.php add

```
 Sun\Flash\FlashServiceProvider::class,
```
in the providers array and

```
 'Flash' => Sun\Flash\FlashFacade::class,
```
to the aliases array.

and also added Sun Flash message view where you want to show flash message.

```
 @include('sun::flash')
```

#### To Publish Sun Flash View

```
 php artisan vendor:publish
```

In the Sun Flash message view I used Bootstrap css framework for flash message styling. You also need to add bootstrap to your project. 

###### Bootstrap css, js and jQuery cdn 
```html
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
 <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
```

Add this line at the bottom of your page
 
 ```html
 <script>
     $(function () {
         $('.flash-modal').modal();
 
     })
 </script>
 ```

## All Methods

###### To show success message

```php
Flash::success('Hello');
```

###### To show error message

```php
Flash::error('Whoops! There were some problems with your input.');
```

###### To show info message

```php
Flash::info('your message');
```

###### To show warning message

```php
Flash::warning('your message');
```

###### To show confirm message

```php
Flash::confirm('Message Title', 'Your Message');
```

###### To show bootstrap modal popup message

```php
Flash::overlay(
                 'Message Title',
                 'Your Message',
                 true,
                 'Allow Button Text',
                 'Allow Button Type',
                 'Dismiss Button Text',
                 'Dismiss Button Type
                 );
```

Defalut value for --

```
 Submit Button = false
 Allow Button Text = Save
 Allow Button Type = success
 Dismiss Button Text = Close
 Dismiss Button Type = default
```

## Screenshots

###### Flash Message Overlay:
![Overlay view](https://github.com/IftekherSunny/screenshot/blob/master/Laravel-Flash/overlay.png)

###### Flash Message Success:
![Overlay view](https://github.com/IftekherSunny/screenshot/blob/master/Laravel-Flash/success.png)

###### Flash Message Error:
![Overlay view](https://github.com/IftekherSunny/screenshot/blob/master/Laravel-Flash/error.png)

## License

This package is licensed under the [MIT License](https://github.com/IftekherSunny/laravel-flash/blob/master/LICENSE)
