@extends('layouts.app')
@section('title', $title)
@section('content')
<!-- About Section -->
<section class="py-5 mt-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 mb-4 mb-lg-0">
                <img src="{{ asset('assets/images/avatar.jpg') }}" alt="About Me" class="img-fluid rounded-circle">
            </div>
            <div class="col-lg-7">
                <h2 class="display-5 mb-4">About Me</h2>
                <p class="lead">I'm a passionate web developer with over 2 years of experience creating beautiful and functional websites.</p>
                <p>As a passionate Full Stack Web Developer with hands-on experience in PHP, Laravel, MySQL, JavaScript, Vue.js, React.js, and Tailwind CSS, I thrive on building efficient, scalable, and modern web applications. My strength lies in working seamlessly across both backend and frontend technologies, crafting robust solutions with clean and maintainable code.
                    On the backend, I specialize in Laravel and MySQL, designing APIs and database structures that power reliable and performant systems. On the frontend, I enjoy working with Vue.js to build dynamic, responsive interfaces that deliver intuitive user experiences.</p>
                <div class="row mt-4">
                    <div class="col-md-6">
                        <ul class="list-unstyled">
                            <li class="mb-2"><strong>Name:</strong> Md. Rakibul Hasan</li>
                            <li class="mb-2"><strong>Email:</strong> rakibul.cse.kyau@gmail.com</li>
                            <li class="mb-2"><strong>Phone:</strong> 01701079646</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="list-unstyled">
                            <li class="mb-2"><strong>Experience:</strong> 2+ Years</li>
                            <li class="mb-2"><strong>Location:</strong> Sirajganj, Bangladesh</li>
                            <li class="mb-2"><strong>Freelance:</strong> Available</li>
                        </ul>
                    </div>
                </div>
                <a href="contact.html" class="btn btn-primary mt-3">Contact Me</a>
            </div>
        </div>
    </div>
</section>

<!-- Skills Section -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-5">My Skills</h2>
        <div class="row">
            <div class="col-md-6 mb-4">
                <h5>HTML5</h5>
                <div class="progress">
                    <div class="progress-bar bg-success" style="width: 95%">95%</div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <h5>CSS3</h5>
                <div class="progress">
                    <div class="progress-bar bg-success" style="width: 90%">90%</div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <h5>JavaScript</h5>
                <div class="progress">
                    <div class="progress-bar bg-info" style="width: 85%">85%</div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <h5>Bootstrap</h5>
                <div class="progress">
                    <div class="progress-bar bg-info" style="width: 90%">90%</div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <h5>React</h5>
                <div class="progress">
                    <div class="progress-bar bg-warning" style="width: 80%">80%</div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <h5>Vue.js</h5>
                <div class="progress">
                    <div class="progress-bar bg-warning" style="width: 85%">85%</div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <h5>Laravel</h5>
                <div class="progress">
                    <div class="progress-bar bg-success" style="width: 85%">85%</div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <h5>MySql</h5>
                <div class="progress">
                    <div class="progress-bar bg-success" style="width: 85%">85%</div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection