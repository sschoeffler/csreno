<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="C & S Renovations - Professional remodeling, flooring, decks, and home improvement services in Monmouth and Middlesex Counties, NJ. 7 years of trusted service.">
    <meta name="keywords" content="renovations, remodeling, flooring, decks, landscaping, Monmouth County, Middlesex County, NJ contractor">

    <meta property="og:title" content="C & S Renovations - Quality Home Improvement">
    <meta property="og:description" content="Professional remodeling and renovation services in Monmouth and Middlesex Counties, NJ. 7 years of trusted craftsmanship.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://csreno.com">

    <title>@yield('title', 'C & S Renovations - Quality Home Improvement')</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'cs-navy': '#1e3a5f',
                        'cs-gold': '#c9a227',
                        'cs-gray': '#4a5568',
                    }
                }
            }
        }
    </script>
    <style>
        html { scroll-behavior: smooth; }
    </style>
</head>
<body class="font-sans antialiased">
    @yield('content')
</body>
</html>
