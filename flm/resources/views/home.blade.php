@extends('layouts.app')

@section('title','laravel 12')

@section('content')

<div class="container px-4 py-5" id="featured-3">
    <h2 class="pb-2 border-bottom">FLM</h2>
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
      <div class="feature col">
        <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
          <svg class="bi" width="1em" height="1em" aria-hidden="true"><use xlink:href="#collection"></use></svg>
        </div>
        <h3 class="fs-2 text-body-emphasis">EVENTOS</h3>
        <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
        <a href="/home/evento/store" class="bi bi-people-fill">
          Evento
          <svg class="bi" aria-hidden="true"><use xlink:href="#chevron-right"></use></svg>
        </a>
      </div>
      <div class="feature col">
        <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
          <svg class="bi" width="1em" height="1em" aria-hidden="true"><use xlink:href="#people-circle"></use></svg>
        </div>
        <h3 class="fs-2 text-body-emphasis">BENEFICIARIOS</h3>
        <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
        <a href="/home/beneficiario/storeBeneficiario" class="icon-link">
          Beneficiarios
          <svg class="bi" aria-hidden="true"><use xlink:href="#chevron-right"></use></svg>
        </a>
      </div>
      <div class="feature col">
        <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
          <svg class="bi" width="1em" height="1em" aria-hidden="true"><use xlink:href="#toggles2"></use></svg>
        </div>
        <h3 class="fs-2 text-body-emphasis">GRUPO</h3>
        <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
        <a href="/home/grupo/storeGrupo" class="icon-link">
          Grupo
          <svg class="bi" aria-hidden="true"><use xlink:href="#chevron-right"></use></svg>
        </a>
      </div>
    </div>
  </div>

@endsection
    
    