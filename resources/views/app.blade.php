<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="preload" href="/css/app.css" as="style">
        <link rel="preload" href="/js/manifest.js" as="script">
        <link rel="preload" href="/js/vendor.js" as="script">
        <link rel="preload" href="/js/app.js" as="script">
        {!! Html::style('/css/app.css') !!}
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
        <title>{{ env('APP_NAME') }}</title>
    </head>
    <body>
        <div id="app"></div>
        {!! Html::script(mix('/js/manifest.js')) !!}
        {!! Html::script(mix('/js/vendor.js')) !!}
        {!! Html::script(mix('/js/app.js')) !!}
    </body>
</html>
