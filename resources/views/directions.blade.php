@extends('layouts.app')
@section('content')

<div class="page-inner">




    <div class="page-header">
        <h3 class="fw-bold mb-3"></h3>
    </div>


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
                <a href="/"><button class="btn btn-secondary">← Назад к списку</button></a>
            </div>
        </div>

    </div>



    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
        <div>
            <h3 class="fw-bold mb-3">Related Products</h3>
        </div>
        <div class="ms-md-auto py-2 py-md-0">
            <a id="manageBtn" href="#" class="btn btn-label-info btn-round me-2" onclick="toggleManage(); return false;">
                Manage
            </a>

            <a id="alert_demo_5" class="btn btn-primary btn-round">
                Add Product
            </a>
        </div>
    </div>


    <div class="row">
        @foreach ($products as $product)
        <div class="col-6 col-sm-4 col-lg-2">
            <div class="card position-relative">



                <div class="card-body p-3 text-center">
                    <div class="d-flex justify-content-between align-items-center">
                        <form action="{{ route('products.destroy', [$direction->symbol_code, $product->id]) }}" method="POST"
                            class="top-0 end-0 mb-3 delete-form d-none"
                            onsubmit="return confirm('Are you sure you want to delete {{ $product->name }}?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-md p-0  text-danger" title="Delete">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </form>
                        @if (!empty($product->amount))
                        <div class="text-end text-success mb-3">
                            {{ $product->amount }}
                            <i class="fas fa-cubes"></i>
                        </div>
                        @endif

                    </div>
                    <div class="h5 m-0">{{ $product->name }}</div>
                    <div class="text-muted mb-3">{{ $product->volume }}</div>
                </div>
            </div>
        </div>
        @endforeach
    </div>


</div>
<form id="addProductForm" style="display: none;" action="{{ route('products.store', $direction->symbol_code) }}" method="POST">
    @csrf
    <div class="card">
        <div class="card-header">
            <div class="card-title">Form Elements</div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="">
                    <div class="form-group">
                        <input name="direction_id" type="hidden" class="form-control" id="in0" placeholder="Relative direction" value="{{ $direction->id }}" />
                    </div>
                    <div class="form-group">
                        <input name="name" type="text" class="form-control" id="in1" placeholder="Enter Name" />
                    </div>
                    <div class="form-group">
                        <input name="description" type="text" class="form-control" id="in2" placeholder="Enter description" />
                    </div>
                    <div class="form-group">
                        <input name="volume" type="text" class="form-control" id="in3" placeholder="Enter volume" />
                    </div>
                    <div class="form-group">
                        <input name="price" type="text" class="form-control" id="in4" placeholder="Enter price" />
                    </div>
                    <div class="form-group">
                        <input name="amount" type="text" class="form-control" id="in5" placeholder="Enter amount" />
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name="is_available" type="checkbox" value="" id="availableCheck">
                        <label class="form-check-label" for="availableCheck">
                            Is available product?
                        </label>
                    </div>
                    <button type="submit" id="realSubmitBtn" style="display: none;"></button>
                </div>
            </div>
        </div>
    </div>

</form>


@endsection

