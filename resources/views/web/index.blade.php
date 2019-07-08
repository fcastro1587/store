@extends('web.layouts.layout')

@section('body')
  <div class="owl-carousel owl-theme">
    <div class="item">
      <img src="{{asset('img/slider-home/froid.jpg')}}" alt="">
    </div>
  </div>


  <div class="destacados">
    <ul>
      <li>Llamanos - 01 55 9119 5202</li>
      <li>Entrega al día siguiente</li>
    </ul>
  </div>

<div class="container">
    <h2>DESTACADOS</h2>
<div class="row offers">
  <div class="col-md-3">
    <div class="item">
      @php
      $name = "banchoco-curves";
      $clv = "a-157";
      $var = $name.'-'.$clv;
      echo $var;
      @endphp
    <a href=""><img src="{{ asset('img/catalogo/thumbs/banchoco-modelo-a-157.jpg') }}" alt=""></a>
      <div class="nom">
        <span class="cotizar">
        <a href="#">Cotizar<img src="{{ asset('img/logo/redes/whatsapp.png') }}" alt=""></a>
        </span>
        <span class="mod">Modelo: A-157</span>
        <span class="marca">Marca: Banchoco</span>
        <span class="desde"><i>Desde: <span>499</span> </i> MXN</span>
      </div>
    </div>
  </div>

  <div class="col-md-3">
    <div class="item">
    <img src="{{ asset('img/catalogo/thumbs/froid-jeans--modelo-f-749.jpg') }}" alt="">
    <div class="nom">
      <span class="cotizar">
      <a href="#">Cotizar<img src="{{ asset('img/logo/redes/whatsapp.png') }}" alt=""></a>
      </span>
      <span class="mod">Modelo: F-749</span>
      <span class="marca">Marca: Froid Jeans</span>
      <span class="desde"><i>Desde: <span>499</span> </i> MXN</span>
    </div>
    </div>
  </div>

  <div class="col-md-3">
    <div class="item">
    <img src="{{ asset('img/catalogo/thumbs/kyrath-jeans-modelos-k-094.jpg') }}" alt="">
    <div class="nom">
      <span class="cotizar">
      <a href="#">Cotizar<img src="{{ asset('img/logo/redes/whatsapp.png') }}" alt=""></a>
      </span>
      <span class="mod">Modelo: 094</span>
      <span class="marca">Marca: Kyrath Jeans</span>
      <span class="desde"><i>Desde: <span>499</span> </i> MXN</span>
    </div>
    </div>
  </div>

  <div class="col-md-3">
    <div class="item">
    <img src="{{ asset('img/catalogo/thumbs/froid-jeans-modelo-f-737.jpg') }}" alt="">
    <div class="nom">
      <span class="cotizar">
      <a href="#">Cotizar<img src="{{ asset('img/logo/redes/whatsapp.png') }}" alt=""></a>
      </span>
      <span class="mod">Modelo: f-737</span>
      <span class="marca">Marca: Froid Jeans</span>
      <span class="desde"><i>Desde: <span>499</span> </i> MXN</span>
    </div>
    </div>
  </div>

  <div class="col-md-3">
    <div class="item">
    <img src="{{ asset('img/catalogo/thumbs/kyrath-jeans-modelo-k-15.jpg') }}" alt="">
    <div class="nom">
      <span class="cotizar">
      <a href="#">Cotizar<img src="{{ asset('img/logo/redes/whatsapp.png') }}" alt=""></a>
      </span>
      <span class="mod">Modelo: k-15</span>
      <span class="marca">Marca: Kyrath Jeans</span>
      <span class="desde"><i>Desde: <span>499</span> </i> MXN</span>
    </div>
    </div>
  </div>

  <div class="col-md-3">
    <div class="item">
    <img src="{{ asset('img/catalogo/thumbs/kyrath-jeans-modelo-k-50.jpg') }}" alt="">
    <div class="nom">
      <span class="cotizar">
      <a href="#">Cotizar<img src="{{ asset('img/logo/redes/whatsapp.png') }}" alt=""></a>
      </span>
      <span class="mod">Modelo: k-50</span>
      <span class="marca">Marca: Kyrath Jeans</span>
      <span class="desde"><i>Desde: <span>499</span> </i> MXN</span>
    </div>
    </div>
  </div>

</div>
</div>



<div class="marcas">
<h2>NUESTRAS MARCAS</h2><br>
<div class="d-flex justify-content-around bd-highlight">
    <div class="p-2 bd-highlight">
      <img src="{{asset('img/logo/marcas/logo-banchoco.jpg')}}" alt="">
    </div>
    <div class="p-2 bd-highlight">
      <img src="{{asset('img/logo/marcas/logo-froid.jpg')}}" alt="">
    </div>
    <div class="p-2 bd-highlight">
      <img src="{{asset('img/logo/marcas/logo-kyrath.jpg')}}" alt="">
    </div>
  </div>
</div>
@endsection
