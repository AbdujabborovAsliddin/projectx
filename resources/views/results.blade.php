@extends('layouts.app')
@section('content')



<div class="page-inner">


    @if ($products->isEmpty() && $directions->isEmpty())
    <div class="page-header">
        <h3 class="fw-bold mb-3">Nothing found for "{{ $query }}"</h3>
    </div>
    @else

    <div class="page-header">
        <h3 class="fw-bold mb-3">Search Results for "{{ $query }}"</h3>
    </div>



    @if ($products->isNotEmpty())
    <div class="">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Products</div>
            </div>
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Created_at</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                        <tr>
                            <td>{{$product->id}}</td>
                            <td>{{$product->name}}</td>
                            <td>{{$product->description}}</td>
                            <td>{{$product->created_at}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <br>
    <br>
    @endif

    @if ($directions->isNotEmpty())

    <div class="">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Direction</div>
            </div>
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Created_at</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($directions as $direction)
                        <tr>
                            <td>{{$direction->id}}</td>
                            <td>{{$direction->name}}</td>
                            <td>{{$direction->description}}</td>
                            <td>{{$direction->created_at}}</td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @endif

    @endif

    <a href="/"><button class="btn btn-secondary">← Назад к списку</button></a>
</div>

@endsection

