@extends('layouts/app')

@section('title', 'Inicio')

@section('page-header')
<div class="content-header header-home">
<div class="quote">
    <cite>Toda la naturaleza es un anhelo de servicio.  Sirve la nube, sirve el aire, sirve el surco</cite>
    <span>Gabriel Mistral</span>
</div>
</div>
@endsection

@section('content')
<div class="container">
    <section class="welcome-section">
        <article class="welcome">
            <p>Consequatur excepturi sed esse sunt eligendi non. In odio quidem quibusdam suscipit earum similique dignissimos. Beatae enim qui qui omnis aliquid culpa sint. Corrupti aut deserunt dolor totam quidem natus ut.</p>
        </article>
    </section>
    <section class="pages-thumbnails">
        <article class="page-section">
            <figure class="page-section-image">
                <img src="https://via.placeholder.com/200x200">
            </figure>
            <figcaption class="page-section-text">
                <h2>Acerca de mi</h2>
                <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, id illo quidem praesentium nobis, corrupti doloribus iste officia eligendi ex nostrum tenetur facere asperiores magni nemo perspiciatis distinctio voluptas voluptates.</span>
                <div class="page-section-action">
                    <a href="/about-me">Conoce más</a>
                </div>
            </figcaption>
        </article>
        <article class="page-section">
            <figure class="page-section-image">
                <img src="https://via.placeholder.com/200x200">
            </figure>
            <figcaption class="page-section-text">
                <h2>El Efecto Pancho</h2>
                <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, id illo quidem praesentium nobis, corrupti doloribus iste officia eligendi ex nostrum tenetur facere asperiores magni nemo perspiciatis distinctio voluptas voluptates.</span>
                <div class="page-section-action">
                    <a href="/efecto-pancho">Conoce más</a>
                </div>
            </figcaption>
        </article>
        <article class="page-section">
            <figure class="page-section-image">
                <img src="https://via.placeholder.com/200x200">
            </figure>
            <figcaption class="page-section-text">
                <h2>Media / Blog</h2>
                <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, id illo quidem praesentium nobis, corrupti doloribus iste officia eligendi ex nostrum tenetur facere asperiores magni nemo perspiciatis distinctio voluptas voluptates.</span>
                <div class="page-section-action">
                    <a href="/media-blog">Conoce más</a>
                </div>
            </figcaption>
        </article>
    </section>
</div>

@endsection
