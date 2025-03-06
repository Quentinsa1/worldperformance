@extends('partials.vitrine.template')

@section('content')
<main class="main">
    <div class="page-title light-background">
        <div class="container">
            <h1>Contact</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="{{ route('website.index') }}">Home</a></li>
                    <li>Contact</li>
                </ol>
            </nav>
        </div>
    </div>

    <section id="contact" class="contact section">
        <div class="container" data-aos="fade">
            <div class="row gy-5 gx-lg-5">
                <div class="col-lg-4">
                    <div class="info">
                        <h3>Envoyez votre message</h3>
                        <p>Envoyez-nous vos messages</p>

                        <div class="info-item d-flex">
                            <i class="bi bi-geo-alt flex-shrink-0"></i>
                            <div>
                                <h4>Localisation:</h4>
                                <p>Maria Gléta, Calavi</p>
                            </div>
                        </div>

                        <div class="info-item d-flex">
                            <i class="bi bi-envelope flex-shrink-0"></i>
                            <div>
                                <h4>Email:</h4>
                                <p>worldperformance7@gmail.com</p>
                            </div>
                        </div>

                        <div class="info-item d-flex">
                            <i class="bi bi-phone flex-shrink-0"></i>
                            <div>
                                <h4>Appel:</h4>
                                <p>+2290143105555</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <form action="{{ route('website.storeContact') }}" method="POST" role="form" class="php-email-form">
                        @csrf <!-- CSRF token pour la sécurité -->
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Votre Nom" required="">
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Votre Email" required="">
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Objet" required="">
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" placeholder="Message" required=""></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit">Envoyer Message</button></div>
                    </form>

                </div>
            </div>
        </div>
    </section>
</main>
@endsection
