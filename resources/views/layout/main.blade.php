<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Zargo</title>

        <!-- Fonts -->
        
        <!-- Fonts -->

        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
        <!-- Styles -->

        <!-- Scripts -->
        <!-- Scripts -->

    </head>

    <body>
    <!-- Header -->
        <div class="header">
            <div class="nav">
                <h1>Zargo</h1>
            </div>
            @yield('header')
        </div>
    <!-- Header -->

    <!-- Content -->
        <div class="content">
            <h2>Content</h2>

            @yield('content')

        </div>
    <!-- Content -->

    <!-- Footer -->
        <div class="footer">
            <h3>Footer</h3>

            @yield('footer')

        </div>
    <!-- Footer -->

    <!-- Post Loaded Scripts -->
     <!-- Vue.js -->
        <script type="text/javascript" 
        src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.3/vue.js"></script>

        @yield('scripts')
                
    <!-- Post Loaded Scripts -->
    </body>

</html>
