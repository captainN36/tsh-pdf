<!-- document.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document Title</title>
    <style>
        /* Add any additional styles you need for your PDF here */
    </style>
</head>
<body>


<h1>Document Title</h1>

<ul id="toc">
    @for($i = 1; $i < 10; $i++)
        <li>
            <a href="#section{{ $i }}">section-{{ $i }}</a>
        </li>
    @endfor
</ul>

@for($i = 1; $i < 10; $i++)
    <div id="section{{ $i }}">
        <h2>header-{{ $i }}</h2>
        <p>Content of section {{ $i }}</p>
    </div>
@endfor

<script>
    // JavaScript for smooth scrolling
    document.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('ul#toc a').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();

                const targetId = this.getAttribute('href').substring(1);
                const targetElement = document.getElementById(targetId);

                if (targetElement) {
                    targetElement.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            });
        });
    });
</script>

</body>
</html>
