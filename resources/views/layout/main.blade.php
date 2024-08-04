<html>

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <style>
        * {
            font-family: "Inter", sans-serif;
        }

        h4 {
            font-size: 18px;
            font-weight: 800;
        }

        em {
            background-color: yellow;
            font-weight: 600
        }

        .navbar {
            padding: 20px
        }

        .navbar-nav {
            gap: 100px
        }

        .nav-item .nav-link {
            font-weight: 600;
            color: rgba(0, 0, 0, 1) !important;
            !important
        }

        .active-link {
            background: black;
            height: 3px;
            position: absolute;
            width: 60px;
            right: 25px;
            bottom: 20px;
        }

        .passive-link {
            background: black;
            height: 2px;
            position: absolute;
            width: 60px;
            right: 25px;
            bottom: 20px;
        }



        /* Bootstrap 5 CSS and icons included */
        :root {
            --colorPrimaryNormal: #00b3bb;
            --colorPrimaryDark: #00979f;
            --colorPrimaryGlare: #00cdd7;
            --colorPrimaryHalf: #80d9dd;
            --colorPrimaryQuarter: #bfecee;
            --colorPrimaryEighth: #dff5f7;
            --colorPrimaryPale: #f3f5f7;
            --colorPrimarySeparator: #f3f5f7;
            --colorPrimaryOutline: #dff5f7;
            --colorButtonNormal: #00b3bb;
            --colorButtonHover: #00cdd7;
            --colorLinkNormal: #00979f;
            --colorLinkHover: #00cdd7;
        }

        body {
            margin: 24px;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }


        .upload_dropZone {
            color: #0f3c4b;
            background-color: white;
            outline: 2px dashed #DBE0E5;
            padding: 100px;
            border-radius: 10px;
            transition: outline-offset 0.2s ease-out,
                outline-color 0.3s ease-in-out,
                background-color 0.2s ease-out;
        }

        .upload_dropZone.highlight {
            outline-offset: -4px;
            outline-color: var(--colorPrimaryNormal, #0576bd);
            background-color: var(--colorPrimaryEighth, #c8dadf);
        }

        .upload_svg {
            fill: var(--colorPrimaryNormal, #0576bd);
        }

        .btn-upload {
            background-color: #F0F2F5;
            font-size: 14px;
            font-weight: 500 !important;
        }

        .btn-upload:hover,
        .btn-upload:focus {
            background-color: #dddddd;
            rgb(223, 220, 220)
        }

        .upload_img {
            width: calc(33.333% - (2rem / 3));
            object-fit: contain;
        }

        body {
            margin: 0 !important
        }

        .animation {
            transition: ease-out 0.4s;
            right: 63px;

        }

        .search {
            right: 265px;
        }

        .navbar li:nth-child(1) {
            width: 100px;
        }

        .navbar .start-home,
        li:nth-child(1):hover~.animation {
            width: 60px;
            right: 265px;
        }

        .navbar li:nth-child(2) {
            width: 110px;
        }

        .navbar li:nth-child(2):hover~.animation {
            width: 60px;
            right: 63px;
        }
    </style>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white" style="box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.1)">

        <a class="navbar-brand" href="#" style="font-weight: 700"><i class="fa fa-file-pdf-o"
                style="font-size:40px"></i> PDF Elastic Search </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto" style="justify-content: flex-end;
    width: 100%;
}">
                <li class="nav-item active-l">
                    <a class="nav-link " href="{{ route('search') }}">Search<span class="sr-only">(current)</span></a>

                </li>
                <li class="nav-item passive-l">
                    <a class="nav-link" href="{{ route('uploader') }}">Upload</a>
                </li>
                <div class="animation active-link {{ request()->route()->getName() == 'search' || request()->route()->getName() == 'get-results' ? 'search' : '' }}"
                    style="">
                </div>


            </ul>

        </div>

    </nav>
    <main style="  flex: 1;">
        @yield('content')
    </main>

    <footer class="bg-body-tertiary text-center text-lg-start">
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
            Developed by
            <a class="text-body" href="https://github.com/asma-ismail">Asma Ismail</a>
        </div>
        <!-- Copyright -->
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('/js/dragndrop.js') }}"></script>
</body>

</html>
