<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    {{-- <link rel="stylesheet" href="css/app.css"> --}}
<style>
        * {
        box-sizing: border-box
        }
        html,
        body {
            height: 100%;
            box-sizing: border-box;
            padding: 0;
            margin: 0;
            font-weight: 400;
            font-size: 16px;
            line-height: 24px;
        }
        .wrapper {
            display: flex;
            flex-direction: column;
            min-height: 100%;
            position: relative;
            overflow: hidden;
        }
        main {
            margin-top: 100px;
        }
        .nav-link.active {
            font-weight: 600;
        }
</style>

</head>
    <body>
        <div class="wrapper">
            <nav class="navbar bg-body-tertiary fixed-top">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">{{ $slot }}</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Реестр квартир</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Закрыть"></button>
                        </div>
                        <div class="offcanvas-body">
                            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                                <li class="nav-item">
                                    <x-nav-link href="/" :active="request()->is('/')">HOME</a></x-nav-link>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>

            <main class="h-100">
                <div class="container">
                    {{ $content }}
                </div>
            </main>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    </body>
</html>