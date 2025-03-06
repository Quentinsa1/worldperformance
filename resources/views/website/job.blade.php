@extends('partials.vitrine.template')

@section('content')
<main class="main">
    <div class="page-title light-background">
        <div class="container">
            <h1>Job</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="{{ route('website.index') }}">Home</a></li>
                    <li>Job</li>
                </ol>
            </nav>
        </div>
    </div>

    <section id="contact" class="contact section">
        <div class="container" data-aos="fade">
            <div class="row gy-5 gx-lg-5">
                <div class="col-lg-4">
                    <div class="info">
                        <h3>Aucun Emploi</h3>
                    </div>

                </div>
            </div>
        </div>
    </section>
</main>
@endsection
