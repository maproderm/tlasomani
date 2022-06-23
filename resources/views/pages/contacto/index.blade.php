@extends('index')
@section('title','Contacto | Tlasomani')
@section('content')

<div class="mb-120 d-block"></div>
    <!-- Contact Area-->
    <div class="saasbox-contact-us-area">
      <div class="container">
        <div class="row g-4 justify-content-between">
          <!-- Contact Side Info-->
          <div class="col-12 col-lg-5 col-xl-4">
            <div class="contact-side-info mb-4 mb-md-0">
              <h1 class="mb-3">Let's talk about <br> all things!</h1>
              <p class="mb-4">Write to us or give us a call. We will reply to you as soon as possible. But yes, it can take up to 24 hours.</p>
              <div class="contact-mini-card-wrapper">
                <!-- Contact Mini Card-->
                <div class="contact-mini-card">
                  <div class="contact-mini-card-icon"><i class="bi bi-envelope"></i></div>
                  <p>contacto@amoxcalli.com</p>
                </div>
                <!-- Contact Mini Card-->
                <div class="contact-mini-card">
                  <div class="contact-mini-card-icon"><i class="bi bi-headphones"></i></div>
                  <p>(+880) 145 2635896</p>
                </div>
                <!-- Contact Mini Card-->
                <div class="contact-mini-card">
                  <div class="contact-mini-card-icon"><i class="bi bi-tag"></i></div>
                  <p>We are open from 9am — 5pm business days.</p>
                </div>
              </div>
            </div>
          </div>
          <!-- Contact Form-->
          <div class="col-12 col-lg-7">
            <div class="contact-form">
              <form action="#" method="POST">
                <div class="row">
                  <div class="col-12 col-lg-6">
                    <label class="form-label" for="name">Nombre completo:</label>
                    <input class="form-control mb-30" id="name" type="text" placeholder="Ingrese su nombre completo" value="" name="name" required>
                  </div>
                  <div class="col-12 col-lg-6">
                    <label class="form-label" for="email">Correo electrónico</label>
                    <input class="form-control mb-30" id="email" type="email" placeholder="correo@gmail.com" name="email" value="" required>
                  </div>
                  <div class="col-12">
                    <label class="form-label" for="company">Compania:</label>
                    <input class="form-control mb-30" id="topics" type="text" placeholder="Compañía" name="company" value="">
                  </div>
                  <div class="col-12">
                    <label class="form-label" for="message">Mensaje:</label>
                    <textarea class="form-control mb-30" id="message" name="message" placeholder="Escriba su mensaje"></textarea>
                  </div>
                  <div class="col-12 text-center">
                    <button class="btn btn-primary w-100" type="submit">Enviar ahora</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
<div class="mb-120 d-block"></div>

@endsection
