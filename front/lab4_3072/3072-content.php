<?php
$url_host = $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = str_replace('\\', '/', $url_host . $matches[1][0]);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container py-5">
        <h1 class="mb-4 half-underline">Shop</h1>
        <div class="row custom-margin">
            <div class="col-md-9 mt-5" style="font-size: 1.9rem;">
                Showing 1–9 of 11 results
            </div>
            <div class="col-md-3 mt-5">
                <select class="form-select" aria-label="Default sorting" style="font-size: 2rem;">
                    <option selected>Default sorting</option>
                    <option value="1">Sort by popularity</option>
                    <option value="2">Sort by average rating</option>
                    <option value="3">Sort by latest</option>
                    <option value="4">Sort by price: low to high</option>
                    <option value="5">Sort by price: high to low</option>
                </select>
            </div>
        </div>

        <div class="row">
            <!-- Product 1 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="position-relative">
                        <span class="badge position-absolute d-flex align-items-center justify-content-center">
                            <h4 class="mb-0">Sale!</h4>
                        </span>
                        <img src="./public/images/poster_2_up-1-300x300.jpg" class="card-img-top" alt="Flying Ninja">
                    </div>
                    <div class="card-body text-start">
                        <h1 class="card-title mb-3">Flying Ninja</h1>
                        <div class="stars mb-4" style="font-size: 3rem;">
                            ★★★★☆
                        </div>
                        <p class="text-muted" style="font-size: 2rem;">
                            <del class="muted-text">£15.00</del>
                            <span class="text-dark no-underline">£12.00</span>
                        </p>

                        <a href="#" class="custom-btn">
                            <span>Add to cart</span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Product 2 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="./public/images/hoodie_4_front-1-300x300.jpg" class="card-img-top" alt="Happy Ninja">
                    <div class="card-body text-start">
                        <h1 class="card-title mb-3">Happy Ninja</h1>
                        <div class="stars mb-4" style="font-size: 3rem;">
                            ★★★☆☆
                        </div>
                        <p class="text-muted" style="font-size: 2rem;">£35.00</p>

                        <a href="#" class="custom-btn">
                            <span>Add to cart</span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Product 3 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="./public/images/hoodie_5_front-1-300x300.jpg" class="card-img-top" alt="Ninja Silhouette">
                    <div class="card-body text-start">
                        <h1 class="card-title mb-3">Ninja Silhouette</h1>
                        <div class="stars mb-4" style="font-size: 3rem;">
                            ★★★★☆
                        </div>
                        <p class="text-muted" style="font-size: 2rem;">£35.00</p>

                        <a href="#" class="custom-btn">
                            <span>Add to cart</span>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>