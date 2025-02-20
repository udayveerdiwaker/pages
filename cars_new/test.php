<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cars</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <!-- Google Fonts -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alatsi&family=Inter:wght@100..900&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="test.css">
</head>

<body>
    <section class="container py-4">
        <div class="row">
            <!-- Sidebar Filter -->
            <aside class="col-lg-4 mb-4">
                <div class="p-3 border rounded shadow-sm">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h5>Filter</h5>
                        <a href="#" class="text-decoration-none">Clear All</a>
                    </div>
                    <div class="accordion" id="filterAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                    LOREM IPSUM
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#filterAccordion">
                                <div class="accordion-body">
                                    <ul class="list-unstyled">
                                        <li><input type="checkbox" id="option1"> <label for="option1">LOREM</label></li>
                                        <li><input type="checkbox" id="option2"> <label for="option2">LOREM</label></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>

            <!-- Car Listings -->
            <section class="col-lg-8">
                <div class="row row-cols-1 row-cols-md-2 g-4">
                    <!-- Car Card Template -->
                    <div class="col">
                        <div class="card p-2 shadow-sm">
                            <img src="Hero.webp" class="card-img-top" alt="Kia Telluride">
                            <div class="card-body">
                                <h5 class="card-title">Kia Telluride</h5>
                                <p class="card-text">SX-Prestige X-Pro . 14k Miles</p>
                                <h5 class="text-primary">$50,590</h5>
                            </div>
                            <div class="card-footer bg-transparent text-center">Free Shipping</div>
                        </div>
                    </div>
                    <!-- Repeat for more cars -->
                </div>
            </section>
        </div>
    </section>
<div class="grid gap-16 p-32"><label data-testid="Checkbox" class="sc-6917afb6-0 gYtJgW w-full mb-0 c10pta7s"><input id="colors - Black Exterior" type="checkbox" aria-checked="false" class="hopfmpb" value=""><div class="checkbox__outline"></div><span class="checkbox__label"><div class="py-2 flex items-center justify-between"><div class="flex items-baseline gap-8"><span>Black</span></div><div class="border-1 h-[24px] w-[24px] rounded-full border border-solid" style="background:#000000;border-color:#000000"></div></div></span></label><label data-testid="Checkbox" class="sc-6917afb6-0 gYtJgW w-full mb-0 c10pta7s"><input id="colors - Blue Exterior" type="checkbox" aria-checked="false" class="hopfmpb" value=""><div class="checkbox__outline"></div><span class="checkbox__label"><div class="py-2 flex items-center justify-between"><div class="flex items-baseline gap-8"><span>Blue</span></div><div class="border-1 h-[24px] w-[24px] rounded-full border border-solid" style="background:#3f72b0;border-color:#3f72b0"></div></div></span></label><label data-testid="Checkbox" class="sc-6917afb6-0 gYtJgW w-full mb-0 c10pta7s"><input id="colors - Brown Exterior" type="checkbox" aria-checked="false" class="hopfmpb" value=""><div class="checkbox__outline"></div><span class="checkbox__label"><div class="py-2 flex items-center justify-between"><div class="flex items-baseline gap-8"><span>Brown</span></div><div class="border-1 h-[24px] w-[24px] rounded-full border border-solid" style="background:#76523c;border-color:#76523c"></div></div></span></label><label data-testid="Checkbox" class="sc-6917afb6-0 gYtJgW w-full mb-0 c10pta7s"><input id="colors - Gold Exterior" type="checkbox" aria-checked="false" class="hopfmpb" value=""><div class="checkbox__outline"></div><span class="checkbox__label"><div class="py-2 flex items-center justify-between"><div class="flex items-baseline gap-8"><span>Gold</span></div><div class="border-1 h-[24px] w-[24px] rounded-full border border-solid" style="background:#c29050;border-color:#c29050"></div></div></span></label><label data-testid="Checkbox" class="sc-6917afb6-0 gYtJgW w-full mb-0 c10pta7s"><input id="colors - Gray Exterior" type="checkbox" aria-checked="false" class="hopfmpb" value=""><div class="checkbox__outline"></div><span class="checkbox__label"><div class="py-2 flex items-center justify-between"><div class="flex items-baseline gap-8"><span>Gray</span></div><div class="border-1 h-[24px] w-[24px] rounded-full border border-solid" style="background:#989898;border-color:#989898"></div></div></span></label><label data-testid="Checkbox" class="sc-6917afb6-0 gYtJgW w-full mb-0 c10pta7s"><input id="colors - Green Exterior" type="checkbox" aria-checked="false" class="hopfmpb" value=""><div class="checkbox__outline"></div><span class="checkbox__label"><div class="py-2 flex items-center justify-between"><div class="flex items-baseline gap-8"><span>Green</span></div><div class="border-1 h-[24px] w-[24px] rounded-full border border-solid" style="background:#748959;border-color:#748959"></div></div></span></label><label data-testid="Checkbox" class="sc-6917afb6-0 gYtJgW w-full mb-0 c10pta7s"><input id="colors - Orange Exterior" type="checkbox" aria-checked="false" class="hopfmpb" value=""><div class="checkbox__outline"></div><span class="checkbox__label"><div class="py-2 flex items-center justify-between"><div class="flex items-baseline gap-8"><span>Orange</span></div><div class="border-1 h-[24px] w-[24px] rounded-full border border-solid" style="background:#da7a38;border-color:#da7a38"></div></div></span></label><label data-testid="Checkbox" class="sc-6917afb6-0 gYtJgW w-full mb-0 c10pta7s"><input id="colors - Other Exterior" type="checkbox" aria-checked="false" class="hopfmpb" value=""><div class="checkbox__outline"></div><span class="checkbox__label"><div class="py-2 flex items-center justify-between"><div class="flex items-baseline gap-8"><span>Other</span></div><img class="h-[24px]" src="https://assets.fastly.carvana.io/serenity-ui/images/other.png" alt="other"></div></span></label><label data-testid="Checkbox" class="sc-6917afb6-0 gYtJgW w-full mb-0 c10pta7s"><input id="colors - Red Exterior" type="checkbox" aria-checked="false" class="hopfmpb" value=""><div class="checkbox__outline"></div><span class="checkbox__label"><div class="py-2 flex items-center justify-between"><div class="flex items-baseline gap-8"><span>Red</span></div><div class="border-1 h-[24px] w-[24px] rounded-full border border-solid" style="background:#dc4444;border-color:#dc4444"></div></div></span></label><label data-testid="Checkbox" class="sc-6917afb6-0 gYtJgW w-full mb-0 c10pta7s"><input id="colors - Silver Exterior" type="checkbox" aria-checked="false" class="hopfmpb" value=""><div class="checkbox__outline"></div><span class="checkbox__label"><div class="py-2 flex items-center justify-between"><div class="flex items-baseline gap-8"><span>Silver</span></div><div class="border-1 h-[24px] w-[24px] rounded-full border border-solid" style="background:#e0e0e0;border-color:#e0e0e0"></div></div></span></label><label data-testid="Checkbox" class="sc-6917afb6-0 gYtJgW w-full mb-0 c10pta7s"><input id="colors - White Exterior" type="checkbox" aria-checked="false" class="hopfmpb" value=""><div class="checkbox__outline"></div><span class="checkbox__label"><div class="py-2 flex items-center justify-between"><div class="flex items-baseline gap-8"><span>White</span></div><div class="border-1 h-[24px] w-[24px] rounded-full border border-solid" style="background:#ffffff;border-color:var(--cvna-color-grey-2)"></div></div></span></label></div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>