<x-site-layout>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* General Styles */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        /* Section Styles */
        .section-bg {
            background-size: cover;
            background-position: center;
            color: white;
            text-align: center;
            padding: 100px 0;
            position: relative;
        }

        .section-bg::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 1;
        }

        .cta-content {
            position: relative;
            z-index: 2;
        }

        .cta-content h2 {
            font-size: 48px;
            margin-bottom: 20px;
        }

        .cta-content p {
            font-size: 24px;
        }

        /* Alert Styles */
        .alert-success {
            margin: 20px auto;
            width: 80%;
            text-align: center;
        }

        /* Carousel Styles */
        .carousel {
            margin: 20px auto;
        }

        .carousel-inner img {
            max-height: 500px;
            object-fit: cover;
        }

        .carousel-indicators li {
            background-color: #333;
        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            background-color: #333;
            border-radius: 50%;
        }

        /* Form Styles */
        .contact-form {
            background: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .contact-form form {
            display: flex;
            flex-direction: column;
            align-items: start;
        }

        .contact-form input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .contact-form button {
            padding: 10px 20px;
            border: none;
            background-color: #5cb85c;
            color: white;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        .contact-form button:hover {
            background-color: #4cae4c;
        }

        /* Container & Row Styles */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
            margin: -15px;
        }

        .col-md-8,
        .col-md-4 {
            padding: 15px;
        }

        .col-md-8 {
            flex: 0 0 66.666667%;
            max-width: 66.666667%;
        }

        .col-md-4 {
            flex: 0 0 33.333333%;
            max-width: 33.333333%;
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            .cta-content h2 {
                font-size: 36px;
            }

            .cta-content p {
                font-size: 18px;
            }

            .carousel-inner img {
                max-height: 300px;
            }

            .contact-form {
                padding: 20px;
            }
        }

        @media (max-width: 576px) {
            .col-md-8,
            .col-md-4 {
                flex: 0 0 100%;
                max-width: 100%;
            }
        }
    </style>
    <title>Product Details</title>
</head>
<body>

@if($products)
<section class="section section-bg" id="call-to-action" style="background-image: url('assets/images/banner-image-1-1920x500.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="cta-content">
                    <br><br>
                    <h2><em><sup>Rs</sup>{{$products->price}}</em></h2>
                    <p>{{$products->name}}</p>
                </div>
            </div>
        </div>
    </div>
</section>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<section class="section">
    <div class="container">
        <br><br>
        <div class="row">
            <div class="col-md-8">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="{{ asset('uploads/product/' . $products->image) }}" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{ asset('uploads/product/' . $products->image) }}" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{ asset('uploads/product/' . $products->image) }}" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <br>
            </div>
            <div class="col-md-4">
                <div class="contact-form">
                <form action="{{ route('cart.add') }}" method="POST">
    @csrf
    <input type="hidden" name="product_id" value="{{ $products->id }}">
    <div class="form-group">
        <label for="quantity">Quantity:</label>
        <input type="number" name="quantity" id="quantity" class="form-control" min="1" required>
    </div>
    <button type="submit" class="btn btn-primary">Add to Cart</button>
</form>

                </div>
                <br>
            </div>
        </div>
    </div>
</section>
@endif

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
    </x-site-layout>
