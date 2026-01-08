<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Bloggers') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="{{ asset('homestyle.css') }}" rel="stylesheet">

        <!-- Scripts -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="min-vh-100 bg-light">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white shadow-sm">
                    <div class="container py-4">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main class="fade-in">
                {{ $slot }}
            </main>
        </div>

        <!-- Footer -->
        <footer class="bg-dark text-white py-4 mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h5 class="mb-3">
                            <i class="fas fa-blog mr-2"></i>Bloggers
                        </h5>
                        <p class="mb-0">A modern blogging platform for sharing ideas and connecting with like-minded people.</p>
                    </div>
                    <div class="col-md-6 text-md-right">
                        <p class="mb-0">&copy; {{ date('Y') }} Bloggers. All rights reserved.</p>
                        <p class="mb-0">Built with <i class="fas fa-heart text-danger"></i> using Laravel</p>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Custom JavaScript for animations -->
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Fade-in animation
                const elements = document.querySelectorAll('.fade-in');
                elements.forEach(el => {
                    el.style.opacity = '0';
                    el.style.transform = 'translateY(20px)';
                    el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
                });

                setTimeout(() => {
                    elements.forEach(el => {
                        el.style.opacity = '1';
                        el.style.transform = 'translateY(0)';
                    });
                }, 100);

                // Button hover effects
                const buttons = document.querySelectorAll('.btn');
                buttons.forEach(btn => {
                    btn.addEventListener('mouseenter', function() {
                        this.style.transform = 'translateY(-2px)';
                    });
                    btn.addEventListener('mouseleave', function() {
                        this.style.transform = 'translateY(0)';
                    });
                });

                // Card hover effects
                const cards = document.querySelectorAll('.post-card, .card');
                cards.forEach(card => {
                    card.addEventListener('mouseenter', function() {
                        this.style.transform = 'translateY(-5px)';
                        this.style.boxShadow = '0 10px 25px rgba(0,0,0,0.15)';
                    });
                    card.addEventListener('mouseleave', function() {
                        this.style.transform = 'translateY(0)';
                        this.style.boxShadow = '0 4px 6px rgba(0,0,0,0.1)';
                    });
                });

                // Comment input animation
                const commentTextarea = document.querySelector('textarea[name="content"]');
                if (commentTextarea) {
                    commentTextarea.addEventListener('focus', function() {
                        this.style.transform = 'scale(1.02)';
                        this.style.transition = 'transform 0.3s ease';
                    });
                    commentTextarea.addEventListener('blur', function() {
                        this.style.transform = 'scale(1)';
                    });
                }
            });
        </script>
    </body>
</html>
