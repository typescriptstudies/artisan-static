<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        @yield('title')
        {{ !empty($__env->yieldContent('title')) ? ' | ' : '' }}
        {{ $page->site->title }}
    </title>

    @include('_partials.head.favicon')
    @include('_partials.head.meta')
    @include('_partials.cms.identity_widget')

    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">    
</head>
<body>
    <header>
        <nav>
            <strong><span class="maintitle">{{ $page->site->title }}</span></strong><br>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/posts">Posts</a></li>
                <!--<li><a href="/about">About</a></li>-->
                <li><a href="/contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <article>
        <section>
            @yield('content')
        </section>
    </article>

    <footer>
        <small>            
            View the <a href="https://github.com/typescriptstudies/artisan-static" target="_blank" rel="noopener noreferrer">GitHub repo</a>.
        </small>
    </footer>

    <script src="{{ mix('js/main.js', 'assets/build') }}"></script>
    @includeWhen($page->production, '_partials.analytics')
    @include('_partials.cms.identity_redirect')
</body>
</html>
