@extends('components.layout')

@section('content')
<div class="col-md-6 col-xl-3">
    <article class="stat-cards-item">
      <div class="stat-cards-icon primary">
        <i data-feather="bar-chart-2" aria-hidden="true"></i>
      </div>
      <div class="stat-cards-info">
        <p class="stat-cards-info__num">1478 286</p>
        <p class="stat-cards-info__title">Total visits</p>
        <p class="stat-cards-info__progress">
          <span class="stat-cards-info__profit success">
            <i data-feather="trending-up" aria-hidden="true"></i>4.07%
          </span>
          Last month
        </p>
      </div>
    </article>
  </div>
@endsection
