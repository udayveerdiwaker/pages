<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cars</title>

    <!-- Bootstrap 5 CSS and Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="test.css">

    <!-- Bootstrap JS and Popper -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</head>

<body>
    <header class="header">
        <div class="wrapper">
            <h1 class="site-title">
                Filter accordion
            </h1>
            <div class="subtitle">
                Click on the filter headings to toggle the height of the filter attributes lists.
            </div>
        </div>

        <nav class="navigation">
            <ul class="navigation-list ul-reset wrapper">
                <li class="navigation-item ib">
                    <a href="#" class="navigation-link">
                        Category link 1
                    </a>
                </li>
                <li class="navigation-item ib">
                    <a href="#" class="navigation-link">
                        Category link 2
                    </a>
                </li>
                <li class="navigation-item ib">
                    <a href="#" class="navigation-link">
                        Category link 3
                    </a>
                </li>
                <li class="navigation-item ib">
                    <a href="#" class="navigation-link">
                        Category link 4
                    </a>
                </li>
                <li class="navigation-item ib">
                    <a href="#" class="navigation-link">
                        Category link 5
                    </a>
                </li>
            </ul>
        </nav>
    </header>


    <main class="main" role="main">
        <div class="wrapper cf">
            <div class="breadcrumb">
                <a href="#">Codepen</a> > <a href="#">Filter accordion</a>
            </div>

            <aside class="sidebar">
                <h1 class="sidebar-heading">
                    Filter by
                </h1>

                <ul class="filter ul-reset">
                    <li class="filter-item">
                        <section class="filter-item-inner">
                            <h1 class="filter-item-inner-heading minus">
                                Colour
                            </h1>
                            <ul class="filter-attribute-list ul-reset">
                                <div class="filter-attribute-list-inner">
                                    <li class="filter-attribute-item">
                                        <input type="checkbox" id="colour-attribute-1" class="filter-attribute-checkbox ib-m">
                                        <label for="colour-attribute-1" class="filter-attribute-label ib-m">
                                            White
                                        </label>
                                    </li>
                                    <li class="filter-attribute-item">
                                        <input type="checkbox" id="colour-attribute-2" class="filter-attribute-checkbox ib-m">
                                        <label for="colour-attribute-2" class="filter-attribute-label ib-m">
                                            Lime
                                        </label>
                                    </li>
                                    <li class="filter-attribute-item">
                                        <input type="checkbox" id="colour-attribute-3" class="filter-attribute-checkbox ib-m">
                                        <label for="colour-attribute-3" class="filter-attribute-label ib-m">
                                            Biege
                                        </label>
                                    </li>
                                    <li class="filter-attribute-item">
                                        <input type="checkbox" id="colour-attribute-4" class="filter-attribute-checkbox ib-m">
                                        <label for="colour-attribute-4" class="filter-attribute-label ib-m">
                                            Khaki
                                        </label>
                                    </li>
                                    <li class="filter-attribute-item">
                                        <input type="checkbox" id="colour-attribute-5" class="filter-attribute-checkbox ib-m">
                                        <label for="colour-attribute-5" class="filter-attribute-label ib-m">
                                            Olive
                                        </label>
                                    </li>
                                    <li class="filter-attribute-item">
                                        <input type="checkbox" id="colour-attribute-6" class="filter-attribute-checkbox ib-m">
                                        <label for="colour-attribute-6" class="filter-attribute-label ib-m">
                                            Yellow
                                        </label>
                                    </li>
                                    <li class="filter-attribute-item">
                                        <input type="checkbox" id="colour-attribute-7" class="filter-attribute-checkbox ib-m">
                                        <label for="colour-attribute-7" class="filter-attribute-label ib-m">
                                            Gold
                                        </label>
                                    </li>
                                    <li class="filter-attribute-item">
                                        <input type="checkbox" id="colour-attribute-8" class="filter-attribute-checkbox ib-m">
                                        <label for="colour-attribute-8" class="filter-attribute-label ib-m">
                                            Sepia
                                        </label>
                                    </li>
                                    <li class="filter-attribute-item">
                                        <input type="checkbox" id="colour-attribute-9" class="filter-attribute-checkbox ib-m">
                                        <label for="colour-attribute-9" class="filter-attribute-label ib-m">
                                            Brown
                                        </label>
                                    </li>
                                    <li class="filter-attribute-item">
                                        <input type="checkbox" id="colour-attribute-10" class="filter-attribute-checkbox ib-m">
                                        <label for="colour-attribute-10" class="filter-attribute-label ib-m">
                                            Salmon
                                        </label>
                                    </li>
                                    <li class="filter-attribute-item">
                                        <input type="checkbox" id="colour-attribute-11" class="filter-attribute-checkbox ib-m">
                                        <label for="colour-attribute-11" class="filter-attribute-label ib-m">
                                            Coral
                                        </label>
                                    </li>
                                    <li class="filter-attribute-item">
                                        <input type="checkbox" id="colour-attribute-12" class="filter-attribute-checkbox ib-m">
                                        <label for="colour-attribute-12" class="filter-attribute-label ib-m">
                                            Red
                                        </label>
                                    </li>
                                    <li class="filter-attribute-item">
                                        <input type="checkbox" id="colour-attribute-13" class="filter-attribute-checkbox ib-m">
                                        <label for="colour-attribute-13" class="filter-attribute-label ib-m">
                                            Ruby
                                        </label>
                                    </li>
                                    <li class="filter-attribute-item">
                                        <input type="checkbox" id="colour-attribute-14" class="filter-attribute-checkbox ib-m">
                                        <label for="colour-attribute-14" class="filter-attribute-label ib-m">
                                            Plum
                                        </label>
                                    </li>
                                    <li class="filter-attribute-item">
                                        <input type="checkbox" id="colour-attribute-15" class="filter-attribute-checkbox ib-m">
                                        <label for="colour-attribute-15" class="filter-attribute-label ib-m">
                                            Violet
                                        </label>
                                    </li>
                                </div>
                            </ul>
                        </section>
                    </li>

                    <li class="filter-item">
                        <section class="filter-item-inner">
                            <h1 class="filter-item-inner-heading minus">
                                Size
                            </h1>
                            <ul class="filter-attribute-list ul-reset">
                                <div class="filter-attribute-list-inner">
                                    <li class="filter-attribute-item">
                                        <input type="checkbox" id="size-attribute-1" class="filter-attribute-checkbox ib-m">
                                        <label for="size-attribute-1" class="filter-attribute-label ib-m">
                                            2
                                        </label>
                                    </li>
                                    <li class="filter-attribute-item">
                                        <input type="checkbox" id="size-attribute-2" class="filter-attribute-checkbox ib-m">
                                        <label for="size-attribute-2" class="filter-attribute-label ib-m">
                                            4
                                        </label>
                                    </li>
                                    <li class="filter-attribute-item">
                                        <input type="checkbox" id="size-attribute-3" class="filter-attribute-checkbox ib-m">
                                        <label for="size-attribute-3" class="filter-attribute-label ib-m">
                                            6
                                        </label>
                                    </li>
                                    <li class="filter-attribute-item">
                                        <input type="checkbox" id="size-attribute-4" class="filter-attribute-checkbox ib-m">
                                        <label for="size-attribute-4" class="filter-attribute-label ib-m">
                                            8
                                        </label>
                                    </li>
                                    <li class="filter-attribute-item">
                                        <input type="checkbox" id="size-attribute-5" class="filter-attribute-checkbox ib-m">
                                        <label for="size-attribute-5" class="filter-attribute-label ib-m">
                                            10
                                        </label>
                                    </li>
                                    <li class="filter-attribute-item">
                                        <input type="checkbox" id="size-attribute-6" class="filter-attribute-checkbox ib-m">
                                        <label for="size-attribute-6" class="filter-attribute-label ib-m">
                                            12
                                        </label>
                                    </li>
                                    <li class="filter-attribute-item">
                                        <input type="checkbox" id="size-attribute-7" class="filter-attribute-checkbox ib-m">
                                        <label for="size-attribute-7" class="filter-attribute-label ib-m">
                                            14
                                        </label>
                                    </li>
                                    <li class="filter-attribute-item">
                                        <input type="checkbox" id="size-attribute-8" class="filter-attribute-checkbox ib-m">
                                        <label for="size-attribute-8" class="filter-attribute-label ib-m">
                                            16
                                        </label>
                                    </li>
                                </div>
                            </ul>
                        </section>
                    </li>

                    <li class="filter-item">
                        <section class="filter-item-inner">
                            <h1 class="filter-item-inner-heading minus">
                                Material
                            </h1>
                            <ul class="filter-attribute-list ul-reset">
                                <div class="filter-attribute-list-inner">
                                    <li class="filter-attribute-item">
                                        <input type="checkbox" id="material-attribute-1" class="filter-attribute-checkbox ib-m">
                                        <label for="material-attribute-1" class="filter-attribute-label ib-m">
                                            Cotton
                                        </label>
                                    </li>
                                    <li class="filter-attribute-item">
                                        <input type="checkbox" id="material-attribute-2" class="filter-attribute-checkbox ib-m">
                                        <label for="material-attribute-2" class="filter-attribute-label ib-m">
                                            Flax
                                        </label>
                                    </li>
                                    <li class="filter-attribute-item">
                                        <input type="checkbox" id="material-attribute-3" class="filter-attribute-checkbox ib-m">
                                        <label for="material-attribute-3" class="filter-attribute-label ib-m">
                                            Wool
                                        </label>
                                    </li>
                                    <li class="filter-attribute-item">
                                        <input type="checkbox" id="material-attribute-4" class="filter-attribute-checkbox ib-m">
                                        <label for="material-attribute-4" class="filter-attribute-label ib-m">
                                            Ramie
                                        </label>
                                    </li>
                                    <li class="filter-attribute-item">
                                        <input type="checkbox" id="material-attribute-5" class="filter-attribute-checkbox ib-m">
                                        <label for="material-attribute-5" class="filter-attribute-label ib-m">
                                            Silk
                                        </label>
                                    </li>
                                    <li class="filter-attribute-item">
                                        <input type="checkbox" id="material-attribute-6" class="filter-attribute-checkbox ib-m">
                                        <label for="material-attribute-6" class="filter-attribute-label ib-m">
                                            Denim
                                        </label>
                                    </li>
                                    <li class="filter-attribute-item">
                                        <input type="checkbox" id="material-attribute-7" class="filter-attribute-checkbox ib-m">
                                        <label for="material-attribute-7" class="filter-attribute-label ib-m">
                                            Leather
                                        </label>
                                    </li>
                                    <li class="filter-attribute-item">
                                        <input type="checkbox" id="material-attribute-8" class="filter-attribute-checkbox ib-m">
                                        <label for="material-attribute-8" class="filter-attribute-label ib-m">
                                            Fur
                                        </label>
                                    </li>
                                    <li class="filter-attribute-item">
                                        <input type="checkbox" id="material-attribute-9" class="filter-attribute-checkbox ib-m">
                                        <label for="material-attribute-9" class="filter-attribute-label ib-m">
                                            Nylon
                                        </label>
                                    </li>
                                    <li class="filter-attribute-item">
                                        <input type="checkbox" id="material-attribute-10" class="filter-attribute-checkbox ib-m">
                                        <label for="material-attribute-10" class="filter-attribute-label ib-m">
                                            Polyesters
                                        </label>
                                    </li>
                                    <li class="filter-attribute-item">
                                        <input type="checkbox" id="material-attribute-11" class="filter-attribute-checkbox ib-m">
                                        <label for="material-attribute-11" class="filter-attribute-label ib-m">
                                            Spandex
                                        </label>
                                    </li>
                                    <li class="filter-attribute-item">
                                        <input type="checkbox" id="material-attribute-12" class="filter-attribute-checkbox ib-m">
                                        <label for="material-attribute-12" class="filter-attribute-label ib-m">
                                            Flannel
                                        </label>
                                    </li>
                                    <li class="filter-attribute-item">
                                        <input type="checkbox" id="material-attribute-13" class="filter-attribute-checkbox ib-m">
                                        <label for="material-attribute-13" class="filter-attribute-label ib-m">
                                            Acetate
                                        </label>
                                    </li>
                                    <li class="filter-attribute-item">
                                        <input type="checkbox" id="material-attribute-14" class="filter-attribute-checkbox ib-m">
                                        <label for="material-attribute-14" class="filter-attribute-label ib-m">
                                            Cupro
                                        </label>
                                    </li>
                                    <li class="filter-attribute-item">
                                        <input type="checkbox" id="material-attribute-15" class="filter-attribute-checkbox ib-m">
                                        <label for="material-attribute-15" class="filter-attribute-label ib-m">
                                            Lyocell
                                        </label>
                                    </li>
                                </div>
                            </ul>
                        </section>
                    </li>
                </ul>
            </aside>

            <section class="content">
                <div class="content-upper">
                    <h1 class="content-heading">
                        Content
                    </h1>
                    <p>Lorem ipsum dolor sit amet, ne duo urbanitas eloquentiam consectetuer, vel et stet complectitur intellegebat, malorum alterum mei no. Ut alii reprehendunt cum, homero munere mentitum mei eu. At sit everti aliquid, ad nusquam voluptaria pro, ad pri
                        quot aeterno constituto. Phaedrum volutpat cu vix, vim cu fugit iriure iudicabit, sea dico veri ei. Detracto copiosae platonem nam id, nonumy molestie indoctum sit no. Vix paulo facete an, ne usu viris graece legendos. Cum ei reque iuvaret quaerendum.</p>
                </div>

                <ul class="product-list ul-reset">
                    <li class="product-item ib">
                        <section class="product-item-inner">
                            <img src="http://lorempixel.com/600/600/cats">
                            <h1 class="product-title">
                                <a href="#" class="product-title-link">Product</a>
                            </h1>
                            <div class="product-price">
                                £19.99
                            </div>
                            <input type="submit" value="Add to Cart" class="product-add-to-cart">
                        </section>
                    </li>
                    <li class="product-item ib">
                        <section class="product-item-inner">
                            <img src="http://lorempixel.com/600/600/cats">
                            <h1 class="product-title">
                                <a href="#" class="product-title-link">Product</a>
                            </h1>
                            <div class="product-price">
                                £19.99
                            </div>
                            <input type="submit" value="Add to Cart" class="product-add-to-cart">
                        </section>
                    </li>
                    <li class="product-item ib">
                        <section class="product-item-inner">
                            <img src="http://lorempixel.com/600/600/cats">
                            <h1 class="product-title">
                                <a href="#" class="product-title-link">Product</a>
                            </h1>
                            <div class="product-price">
                                £19.99
                            </div>
                            <input type="submit" value="Add to Cart" class="product-add-to-cart">
                        </section>
                    </li>
                    <li class="product-item ib">
                        <section class="product-item-inner">
                            <img src="http://lorempixel.com/600/600/cats">
                            <h1 class="product-title">
                                <a href="#" class="product-title-link">Product</a>
                            </h1>
                            <div class="product-price">
                                £19.99
                            </div>
                            <input type="submit" value="Add to Cart" class="product-add-to-cart">
                        </section>
                    </li>
                    <li class="product-item ib">
                        <section class="product-item-inner">
                            <img src="http://lorempixel.com/600/600/cats">
                            <h1 class="product-title">
                                <a href="#" class="product-title-link">Product</a>
                            </h1>
                            <div class="product-price">
                                £19.99
                            </div>
                            <input type="submit" value="Add to Cart" class="product-add-to-cart">
                        </section>
                    </li>
                    <li class="product-item ib">
                        <section class="product-item-inner">
                            <img src="http://lorempixel.com/600/600/cats">
                            <h1 class="product-title">
                                <a href="#" class="product-title-link">Product</a>
                            </h1>
                            <div class="product-price">
                                £19.99
                            </div>
                            <input type="submit" value="Add to Cart" class="product-add-to-cart">
                        </section>
                    </li>
                    <li class="product-item ib">
                        <section class="product-item-inner">
                            <img src="http://lorempixel.com/600/600/cats">
                            <h1 class="product-title">
                                <a href="#" class="product-title-link">Product</a>
                            </h1>
                            <div class="product-price">
                                £19.99
                            </div>
                            <input type="submit" value="Add to Cart" class="product-add-to-cart">
                        </section>
                    </li>
                    <li class="product-item ib">
                        <section class="product-item-inner">
                            <img src="http://lorempixel.com/600/600/cats">
                            <h1 class="product-title">
                                <a href="#" class="product-title-link">Product</a>
                            </h1>
                            <div class="product-price">
                                £19.99
                            </div>
                            <input type="submit" value="Add to Cart" class="product-add-to-cart">
                        </section>
                    </li>
                    <li class="product-item ib">
                        <section class="product-item-inner">
                            <img src="http://lorempixel.com/600/600/cats">
                            <h1 class="product-title">
                                <a href="#" class="product-title-link">Product</a>
                            </h1>
                            <div class="product-price">
                                £19.99
                            </div>
                            <input type="submit" value="Add to Cart" class="product-add-to-cart">
                        </section>
                    </li>
                </ul>
            </section>
        </div>
    </main>


    <footer class="footer">
        <div class="wrapper cf">
            <nav class="footer-col">
                <div class="footer-col-inner">
                    <h1 class="footer-col-heading">
                        Footer col 1
                    </h1>
                    <ul class="footer-navigation ul-reset">
                        <li class="footer-navigation-item">
                            <a href="#" class="footer-navigation-link">
                                Footer navigation link 1
                            </a>
                        </li>
                        <li class="footer-navigation-item">
                            <a href="#" class="footer-navigation-link">
                                Footer navigation link 2
                            </a>
                        </li>
                        <li class="footer-navigation-item">
                            <a href="#" class="footer-navigation-link">
                                Footer navigation link 3
                            </a>
                        </li>
                        <li class="footer-navigation-item">
                            <a href="#" class="footer-navigation-link">
                                Footer navigation link 4
                            </a>
                        </li>
                        <li class="footer-navigation-item">
                            <a href="#" class="footer-navigation-link">
                                Footer navigation link 5
                            </a>
                        </li>
                        <li class="footer-navigation-item">
                            <a href="#" class="footer-navigation-link">
                                Footer navigation link 6
                            </a>
                        </li>
                        <li class="footer-navigation-item">
                            <a href="#" class="footer-navigation-link">
                                Footer navigation link 7
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <nav class="footer-col">
                <div class="footer-col-inner">
                    <h1 class="footer-col-heading">
                        Footer col 2
                    </h1>
                    <ul class="footer-navigation ul-reset">
                        <li class="footer-navigation-item">
                            <a href="#" class="footer-navigation-link">
                                Footer navigation link 1
                            </a>
                        </li>
                        <li class="footer-navigation-item">
                            <a href="#" class="footer-navigation-link">
                                Footer navigation link 2
                            </a>
                        </li>
                        <li class="footer-navigation-item">
                            <a href="#" class="footer-navigation-link">
                                Footer navigation link 3
                            </a>
                        </li>
                        <li class="footer-navigation-item">
                            <a href="#" class="footer-navigation-link">
                                Footer navigation link 4
                            </a>
                        </li>
                        <li class="footer-navigation-item">
                            <a href="#" class="footer-navigation-link">
                                Footer navigation link 5
                            </a>
                        </li>
                        <li class="footer-navigation-item">
                            <a href="#" class="footer-navigation-link">
                                Footer navigation link 6
                            </a>
                        </li>
                        <li class="footer-navigation-item">
                            <a href="#" class="footer-navigation-link">
                                Footer navigation link 7
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <nav class="footer-col">
                <div class="footer-col-inner">
                    <h1 class="footer-col-heading">
                        Footer col 3
                    </h1>
                    <ul class="footer-navigation ul-reset">
                        <li class="footer-navigation-item">
                            <a href="#" class="footer-navigation-link">
                                Footer navigation link 1
                            </a>
                        </li>
                        <li class="footer-navigation-item">
                            <a href="#" class="footer-navigation-link">
                                Footer navigation link 2
                            </a>
                        </li>
                        <li class="footer-navigation-item">
                            <a href="#" class="footer-navigation-link">
                                Footer navigation link 3
                            </a>
                        </li>
                        <li class="footer-navigation-item">
                            <a href="#" class="footer-navigation-link">
                                Footer navigation link 4
                            </a>
                        </li>
                        <li class="footer-navigation-item">
                            <a href="#" class="footer-navigation-link">
                                Footer navigation link 5
                            </a>
                        </li>
                        <li class="footer-navigation-item">
                            <a href="#" class="footer-navigation-link">
                                Footer navigation link 6
                            </a>
                        </li>
                        <li class="footer-navigation-item">
                            <a href="#" class="footer-navigation-link">
                                Footer navigation link 7
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <nav class="footer-col">
                <div class="footer-col-inner">
                    <h1 class="footer-col-heading">
                        Footer col 4
                    </h1>
                    <ul class="footer-navigation ul-reset">
                        <li class="footer-navigation-item">
                            <a href="#" class="footer-navigation-link">
                                Footer navigation link 1
                            </a>
                        </li>
                        <li class="footer-navigation-item">
                            <a href="#" class="footer-navigation-link">
                                Footer navigation link 2
                            </a>
                        </li>
                        <li class="footer-navigation-item">
                            <a href="#" class="footer-navigation-link">
                                Footer navigation link 3
                            </a>
                        </li>
                        <li class="footer-navigation-item">
                            <a href="#" class="footer-navigation-link">
                                Footer navigation link 4
                            </a>
                        </li>
                        <li class="footer-navigation-item">
                            <a href="#" class="footer-navigation-link">
                                Footer navigation link 5
                            </a>
                        </li>
                        <li class="footer-navigation-item">
                            <a href="#" class="footer-navigation-link">
                                Footer navigation link 6
                            </a>
                        </li>
                        <li class="footer-navigation-item">
                            <a href="#" class="footer-navigation-link">
                                Footer navigation link 7
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </footer>
</body>

</html>