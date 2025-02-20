<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
    <title>cars</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Alatsi&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="script.js"></script>
</head>

<body>

    <section class="section">
        <div class=" row">
            <aside class="col-md-4 mb-3 mb-md-0">
                <div class=" ">
                    <!-- <header class="header p-3">
                        <span>FILTER</span>
                        <span><a href="#">Clear All</a></span>
                        <div class="alert alert-dismissible fade show" role="alert">
                            Cars
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>

                    </header> -->
                    <header>
                        <div class="d-flex justify-content-between align-items-center mb-3 p-2">
                            <h5><span id="seating-options">Filter <span id="filter-count" style="display: none;"></span></span></h5>
                            <a href="/index.php">Clear All</a>
                        </div>
                    </header>

                    <div class="accordion accordion-flush border " id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                    MAKE & MODEL
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <ul class="ul-reset">
                                        <li>
                                            <input type="checkbox" class="filter-checkbox" id="Audi">
                                            <label for="Audi">
                                                Audi
                                            </label>
                                        </li>
                                        <li>
                                            <input type="checkbox" class="filter-checkbox" id="VMW">
                                            <label for="VMW">
                                                VMW
                                            </label>
                                        </li>
                                        <li>
                                            <input type="checkbox" class="filter-checkbox" id="Ford">
                                            <label for="Ford">
                                                Ford
                                            </label>
                                        </li>
                                        <li>
                                            <input type="checkbox" class="filter-checkbox" id="Jaguar">
                                            <label for="Jaguar">
                                                Jaguar
                                            </label>
                                        </li>
                                        <li>
                                            <input type="checkbox" class="filter-checkbox" id="Honda">
                                            <label for="Honda">
                                                Honda
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse3" aria-expanded="false" aria-controls="flush-collapseTwo">
                                    PAYMENT & PRICE
                                </button>
                            </h2>
                            <div id="flush-collapse3" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <ul class="ul-reset">
                                        <li>
                                            <label for="vol" class="filter-checkbox">Volume (between 0 and 50):</label>
                                            <input type="range" id="vol" name="vol" min="0" max="50" class="filter-checkbox">
                                            <!-- <input type="submit" value="Submit"> -->
                                        </li>
                                        <li>
                                            <label for="vol">Volume (between 0 and 50):</label>
                                            <input type="range" id="vol" name="vol" min="0" max="50" class="filter-checkbox">
                                            <!-- <input type="submit" value="Submit"> -->
                                        </li>



                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse4" aria-expanded="false" aria-controls="flush-collapseTwo">
                                    FUEL TYPE
                                </button>
                            </h2>
                            <div id="flush-collapse4" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <ul class="ul-reset">
                                        <li>
                                            <input type="checkbox" class="filter-checkbox" id="Diesel">
                                            <label for="Diesel">
                                                Diesel
                                            </label>
                                        </li>
                                        <li>
                                            <input type="checkbox" class="filter-checkbox" id="Electric">
                                            <label for="Electric">
                                                Electric
                                            </label>
                                        </li>
                                        <li>
                                            <input type="checkbox" class="filter-checkbox" id="Gas">
                                            <label for="Gas">
                                                Gas
                                            </label>
                                        </li>
                                        <li>
                                            <input type="checkbox" class="filter-checkbox" id="Hybird">
                                            <label for="Hybird">
                                                Hybird
                                            </label>
                                        </li>


                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed text-uppercase" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse5" aria-expanded="false" aria-controls="flush-collapseTwo">
                                    interior colors
                                </button>
                            </h2>
                            <div id="flush-collapse5" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <ul class="ul-reset">
                                        <li>
                                            <input type="checkbox" class="filter-checkbox" id="Red">
                                            <label for="Red">
                                                Red
                                            </label>
                                        </li>
                                        <li>
                                            <input type="checkbox" class="filter-checkbox" id="Blue">
                                            <label for="Blue">
                                                Blue
                                            </label>
                                        </li>
                                        <li>
                                            <input type="checkbox" class="filter-checkbox" id="Black">
                                            <label for="Black">
                                                Black
                                            </label>
                                        </li>
                                        <li>
                                            <input type="checkbox" class="filter-checkbox" id="White">
                                            <label for="White">
                                                White
                                            </label>
                                        </li>
                                        <li>
                                            <input type="checkbox" class="filter-checkbox" id="Gray">
                                            <label for="Gray">
                                                Gray
                                            </label>
                                        </li>
                                        <li>
                                            <input type="checkbox" class="filter-checkbox" id="Gray">
                                            <label for="Gray">
                                                Gray
                                            </label>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed text-uppercase" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse6" aria-expanded="false" aria-controls="flush-collapseTwo">
                                    Cylinders
                                </button>
                            </h2>
                            <div id="flush-collapse6" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <ul class="ul-reset">
                                        <li>
                                            <input type="checkbox" class="filter-checkbox" id="4 Cylinders">
                                            <label for="4 Cylinders">
                                                4 Cylinders
                                            </label>
                                        </li>
                                        <li>
                                            <input type="checkbox" class="filter-checkbox" id="6 Cylinders">
                                            <label for="6 Cylinders">
                                                6 Cylinders
                                            </label>
                                        </li>
                                        <li>
                                            <input type="checkbox" class="filter-checkbox" id="8 Cylinders">
                                            <label for="8 Cylinders">
                                                8 Cylinders
                                            </label>
                                        </li>
                                        <li>
                                            <input type="checkbox" class="filter-checkbox" id="Other Cylinders">
                                            <label for="Other Cylinders">
                                                Other Cylinders
                                            </label>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>

            <section class="col-md-8 cards d-flex justify-content-between align-items-center ">
                <div class="row row-cols-1 row-cols-sm-2 g-4">

                    <!-- Card 1 -->
                    <div class="col">
                        <div class="card p-2">
                            <img src="Hero.webp" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title car_name">Kia Telluride</h5>
                                <p class="card-text">SX-Prestige X-Pro . 14k Mils</p>
                                <h5 class="card-title card_price">$50,590</h5>
                            </div>
                            <div class="card-footer bg-transparent">Free Shipping</div>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="col">
                        <div class="card p-2">
                            <img src="Hero.webp" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title car_name">Kia Telluride</h5>
                                <p class="card-text">SX-Prestige X-Pro . 14k Mils</p>
                                <h5 class="card-title card_price">$50,590</h5>
                            </div>
                            <div class="card-footer bg-transparent">Free Shipping</div>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="col">
                        <div class="card p-2">
                            <img src="Hero.webp" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title car_name">Kia Telluride</h5>
                                <p class="card-text">SX-Prestige X-Pro . 14k Mils</p>
                                <h5 class="card-title card_price">$50,590</h5>
                            </div>
                            <div class="card-footer bg-transparent">Free Shipping</div>
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div class="col">
                        <div class="card p-2">
                            <img src="Hero.webp" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title car_name">Kia Telluride</h5>
                                <p class="card-text">SX-Prestige X-Pro . 14k Mils</p>
                                <h5 class="card-title card_price">$50,590</h5>
                            </div>
                            <div class="card-footer bg-transparent">Free Shipping</div>
                        </div>
                    </div>
                </div>

            </section>

        </div>
    </section>

</body>

</html>