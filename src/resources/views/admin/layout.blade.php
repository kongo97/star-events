<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="icon" href="/images/logo.webp" type="image/gif" sizes="16x16">
        <title>S T A R | E V E N T S - Allestimenti</title>
        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cedarville+Cursive&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- CSS Files -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
        <link href="/css/admin.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        @include('admin.navbar')

        <aside id="aside">
            <section class="column columns is-12">
                @include('admin.sidebar')
                <div id="page" class="column is-10">
                    @include($page)
                </div>
            </section>
        </aside>

        @include('admin.footer')
    </body>
</html>