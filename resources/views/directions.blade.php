@extends('layouts.app')


@section('content')





<div class="page-inner">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">{{ $direction->name }}</h4>
            </div>
            <div class="card-body">
                <ul class="nav nav-tabs nav-line nav-color-secondary" id="line-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="line-home-tab" data-bs-toggle="pill" href="#line-home" role="tab" aria-controls="pills-home" aria-selected="true">Details</a>
                    </li>
                </ul>
                <div class="tab-content mt-3 mb-3" id="line-tabContent">
                    <div class="tab-pane fade show active" id="line-home" role="tabpanel" aria-labelledby="line-home-tab">
                        <p>
                            {{ $direction->description }}
                        </p>

                    </div>

                </div>
                <button class="btn btn-secondary"><a class="text-light" href="/">← Назад к списку</a></button>
            </div>
        </div>
    </div>
</div>


@endsection