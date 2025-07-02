@extends('layouts.app')
@section('title', $title)
@section('content')
<!-- Portfolio Section -->
<section class="py-5 mt-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-5">My Portfolio</h2>
            <p class="lead">Here are some of my recent projects</p>
        </div>
        
        <!-- Filter Buttons -->
        <div class="text-center mb-4">
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-outline-primary active" data-filter="all">All</button>
                <button type="button" class="btn btn-outline-primary" data-filter="Full-stack">Full Stack Development</button>
                <button type="button" class="btn btn-outline-primary" data-filter="backend">Backend Development</button>
                <button type="button" class="btn btn-outline-primary" data-filter="frontend">Frontend Development</button>
            </div>
        </div>
        
        <!-- Portfolio Grid -->
        <div class="row g-4 portfolio-grid">
            <!-- Project 1 -->
            <div class="col-lg-4 col-md-6 portfolio-item" data-category="backend">
                <div class="card border-0 shadow-sm overflow-hidden">
                    <div class="portfolio-img-wrapper">
                        <img src="{{ asset('assets/images/project1.png') }}" class="card-img-top" alt="Blog Post Api" style="height: 150px;">
                        <div class="portfolio-overlay">
                            <div class="overlay-content">
                                <h5 class="text-white">Blog Post Api</h5>
                                <p class="text-white">Built a secure Laravel blog API with authentication, repositories, events, and scheduled email alerts.</p>
                                <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#project1Modal">View Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Blog Post Api</h5>
                        <p class="card-text text-muted">Backend Development</p>
                    </div>
                </div>
            </div>
            
            <!-- Project 2 -->
            <div class="col-lg-4 col-md-6 portfolio-item" data-category="backend">
                <div class="card border-0 shadow-sm overflow-hidden">
                    <div class="portfolio-img-wrapper">
                        <img src="{{ asset('assets/images/project1.png') }}" class="card-img-top" alt="Blog Post Api" style="height: 150px;">
                        <div class="portfolio-overlay">
                            <div class="overlay-content">
                                <h5 class="text-white">Blog Post Api</h5>
                                <p class="text-white">Built a secure Laravel blog API with authentication, repositories, events, and scheduled email alerts.</p>
                                <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#project1Modal">View Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Blog Post Api</h5>
                        <p class="card-text text-muted">Backend Development</p>
                    </div>
                </div>
            </div>
            
            <!-- Project 3 -->
            <div class="col-lg-4 col-md-6 portfolio-item" data-category="backend">
                <div class="card border-0 shadow-sm overflow-hidden">
                    <div class="portfolio-img-wrapper">
                        <img src="{{ asset('assets/images/project1.png') }}" class="card-img-top" alt="Blog Post Api" style="height: 150px;">
                        <div class="portfolio-overlay">
                            <div class="overlay-content">
                                <h5 class="text-white">Blog Post Api</h5>
                                <p class="text-white">Built a secure Laravel blog API with authentication, repositories, events, and scheduled email alerts.</p>
                                <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#project1Modal">View Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Blog Post Api</h5>
                        <p class="card-text text-muted">Backend Development</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Project Modals -->
<!-- Modal 1 -->
<div class="modal fade" id="project1Modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Laravel Blog API Project</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img src="{{ asset('assets/images/laravel-blog-api.jpg') }}" class="img-fluid mb-4" alt="Laravel Blog API Project">
                <p>This project is a secure and scalable Blog API built with Laravel. It allows authenticated users to perform full CRUD operations on blog posts. Key features include:</p>
                <ul>
                    <li>Authentication using Laravel Passport</li>
                    <li>Repository Pattern for clean architecture</li>
                    <li>Event & Listener system for post update notifications</li>
                    <li>Scheduled email alerts for blog activity</li>
                    <li>API Resource responses with proper formatting</li>
                </ul>
                <p><strong>Technologies used:</strong> Laravel, Passport, MySQL, Event Listeners, Scheduler</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <a href="https://github.com/your-username/laravel-blog-api" target="_blank" class="btn btn-primary">View on GitHub</a>
            </div>
        </div>
    </div>
</div>
@endsection