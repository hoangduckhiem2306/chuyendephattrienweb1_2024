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
    <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <title>Privacy Policy</title>
</head>
<body>
        <div class="privacy-policy d-flex align-items-center justify-content-end "> 
            <i class="fas fa-lock me-3"></i>
                <div class="policy-text">
                    <h4>PRIVACY POLICY</h4>
                        <p>
                            Our company pays special attention to privacy of your data. No<br> information from your gadget will be
                            transferred to a third party.<br> We respect our customers.
                        </p>
                    </div>
                </div>
        <div class="container mt-5">
        
        <div class="row">
            <div class="col-md-4">
                <div class="service-card">
                    <img alt="A person signing a document" height="200" src="./public/images/signature-360x185.jpg" width="400" />
                    <h3>CORPORATE SERVICES</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In erat dui, mollis posuere mollis at,
                        vulputate eu odio. In vel neque elit. Nullam vehicula quis elit sit amet tristique.
                    </p>
                    <a href="#" class="btn">READ MORE</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service-card">
                    <img alt="A service bell on a desk" height="200" src="./public/images/corporate_services-01-360x185.jpg" width="400" />
                    <h3>CUSTOMER SERVICE</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In erat dui, mollis posuere mollis at,
                        vulputate eu odio. In vel neque elit. Nullam vehicula quis elit sit amet tristique.
                    </p>
                    <a href="#" class="btn">READ MORE</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service-card">
                    <img alt="A stamp and a phone repair tool" height="200" src="./public/images/Rubber-Stamp-2-360x185.jpg" width="400" />
                    <h3>QUALITY GUARANTEE</h3>
                    <p>
                        Nullam nec pellentesque nibh. Vivamus ipsum nisl, cursus congue diam sed, hendrerit scelerisque
                        tortor. In nec tincidunt augue, vitae elementum magna.
                    </p>
                    <a href="#" class="btn">READ MORE</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
