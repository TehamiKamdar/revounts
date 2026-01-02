@extends('layouts.layout')

@section('hero')
<!-- Hero Section -->
    <section class="hero-section text-center">
        <div class="container">
            <h1 class="display-4 fw-bold mb-3">Custom Navbar with Bootstrap 5</h1>
            <p class="lead mb-4">This navbar uses your custom CSS variables with a beautiful purple color scheme</p>
            <a href="#colors" class="btn btn-primary-custom btn-lg">View Color Palette</a>
        </div>
    </section>
@endsection

@section('content')
    <!-- Content Section -->
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h2 class="mb-4">About This Navbar</h2>
                <p class="mb-4">This responsive navbar is built with Bootstrap 5 and customized using your CSS variables. It features a dark purple background with light purple accents, matching your color scheme perfectly.</p>

                <h3 class="mb-3" id="colors">Color Palette Used</h3>
                <p class="mb-4">Here are the colors defined in your CSS variables:</p>

                <div class="color-palette">
                    <div class="color-item color-white">
                        <div>--white</div>
                        <div>#ffffff</div>
                    </div>
                    <div class="color-item color-primary-light">
                        <div>--primary-light</div>
                        <div>#9984d4</div>
                    </div>
                    <div class="color-item color-primary">
                        <div>--primary</div>
                        <div>#592e83</div>
                    </div>
                    <div class="color-item color-primary-dark">
                        <div>--primary-dark</div>
                        <div>#450077</div>
                    </div>
                    <div class="color-item color-dark-amethyst">
                        <div>--dark-amethyst</div>
                        <div>#150132</div>
                    </div>
                </div>

                <h3 class="mt-5 mb-3">Features</h3>
                <ul class="list-group mb-4">
                    <li class="list-group-item">Fully responsive design</li>
                    <li class="list-group-item">Uses Bootstrap 5 navbar component</li>
                    <li class="list-group-item">Custom color scheme from your CSS variables</li>
                    <li class="list-group-item">Animated hover effects</li>
                    <li class="list-group-item">Dropdown menu with custom styling</li>
                    <li class="list-group-item">Fixed positioning with scroll effect</li>
                    <li class="list-group-item">Uses Archivo font family as specified</li>
                </ul>
            </div>
        </div>

@endsection