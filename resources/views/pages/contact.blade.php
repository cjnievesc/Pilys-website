@extends('layouts/app')

@section('title', 'Contacto')

@section('page-header')
<div class="content-header header">
    <div class="container">
        <h2>Contacto</h2>
    </div>
</div>
@endsection

@section('content')
<div class="container contact-content">
    <div class="contact-text">
        <div>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Expedita cupiditate omnis aut tempore possimus repellat officia fuga eum est, sed aperiam at ducimus enim perspiciatis dolor. A aliquam libero officia?
        </div>
    </div>
    <div class="contact-form">
        <form>
            <h1>&iexcl;Conversemos!</h1>
            <label for="name" style="display:none">Nombre completo</label>
            <input name="name" type="text" placeholder="Tu nombre completo">
            <label for="alias" style="display:none">Alias</label>
            <input name="alias" type="text" placeholder="¿Cómo te gusta que te llamen?">
            <label for="email" style="display:none">Correo electronico</label>
            <input name="email" type="text" placeholder="Dirección de correo electrónico">
            <label for="message" style="display:none">Mensaje</label>
            <textarea name="message" placeholder="Tu mensaje" rows="3"></textarea>
            <button type="submit">Enviar</button>
        </form>
    </div>

</div>
@endsection
