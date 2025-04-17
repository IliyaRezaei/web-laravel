<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("title","my laravel app")</title>
    <style>
        html, body, div, span, applet, object, iframe,
        h1, h2, h3, h4, h5, h6, p, blockquote, pre,
        a, abbr, acronym, address, big, cite, code,
        del, dfn, em, img, ins, kbd, q, s, samp,
        small, strike, strong, sub, sup, tt, var,
        b, u, i, center,
        dl, dt, dd, ol, ul, li,
        fieldset, form, label, legend,
        table, caption, tbody, tfoot, thead, tr, th, td,
        article, aside, canvas, details, embed,
        figure, figcaption, footer, header, hgroup,
        menu, nav, output, ruby, section, summary,
        time, mark, audio, video {
            margin: 0;
            padding: 0;
            border: 0;
            font-size: 100%;
            font: inherit;
            vertical-align: baseline;
        }
        /* HTML5 display-role reset for older browsers */
        article, aside, details, figcaption, figure,
        footer, header, hgroup, menu, nav, section {
            display: block;
        }
        body {
            line-height: 1;
        }
        ol, ul {
            list-style: none;
        }
        blockquote, q {
            quotes: none;
        }
        blockquote:before, blockquote:after,
        q:before, q:after {
            content: '';
            content: none;
        }
        table {
            border-collapse: collapse;
            border-spacing: 0;
        }

        header {
            display: flex;
            flex-direction: row;
            justify-content: space-around;
            align-items: center;
            background-color: #333333;
            color: #eee;
            padding: 1.5rem;
            font-size: 1.5rem;
        }
        nav {
            display: flex;
            flex-direction: row;
            gap: 2rem;
            font-size: 1rem;
        }
        nav a {
            color: #eee;
            text-decoration: none;
        }

        html, body {
            height: 100%;
        }

        body {
            display: flex;
            flex-direction: column;
        }

        main {
            flex: 1;
        }

        footer {
            text-align: center;
            background-color: #333;
            color: #eee;
            padding: 1rem;
            margin-top: 1rem;
        }
    </style>
    @stack('styles')
</head>
<body>
<header>
    <h1>Laravel/Blade</h1>
    <nav>
        <div><a href="{{route('users.index')}}">Users</a></div>
    </nav>
</header>
<main>@yield("content")</main>
<footer>
    <div>Laravel/Blade</div>
</footer>
</body>
</html>
