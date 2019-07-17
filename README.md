# cdz.ui
UI components for Laravel 5 based on Bootstrap 4.

## How to use?

### Starter Template
Your starter template should look like this:

    {!! ui_doctype() !!}
    <html lang="{{ ui_lang() }}">
      <head>
        {!! ui_charset() !!}
        {!! ui_viewport() !!}
        {!! ui_style('bootstrap') !!}
        {!! ui_style('css/main.css') !!}
        <title>Hello, world!</title>
      </head>
      <body>
        <div class="container">
          <h1>Hello, world!</h1>
        </div>
        {!! ui_script('bootstrap') !!}
        {!! ui_script('js/main.js') !!}
      </body>
    </html>

You can generate this view with the **ui:starter** command that will create a *starter.blade.php* file

    ui: starter

You can also specify the view file name as an argument. Ex : *layout* will create *layout.blade.php*

    ui:starter layout
