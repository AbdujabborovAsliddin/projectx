@extends('layouts.app')
@section('content')



<div class="page-inner">


    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
        <div>
            <h3 class="fw-bold mb-3">Profile Settings</h3>
        </div>
        <div class="ms-md-auto py-2 py-md-0">
            <a href="#" class="btn btn-label-info btn-round me-2">Edit profile</a>
            <a id="alert_demo_5" class="btn btn-primary btn-round">
                Add Product
            </a>
        </div>
    </div>



    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Users list</div>
                </div>
                <div class="card-body">
                    <div class="card-sub">
                        This is the basic table view of the ready dashboard :
                    </div>
                    <table class="table mt-3">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Full Name</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Rights</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>
                                    <button type="button" class="btn btn-icon btn-round btn-black">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                    <button type="button" class="btn btn-icon btn-round btn-danger">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                                <td>
                                    <button type="button" class="btn btn-icon btn-round btn-black">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                    <button type="button" class="btn btn-icon btn-round btn-danger">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td colspan="2">Larry the Bird</td>
                                <td>@twitter</td>
                                <td>
                                    <button type="button" class="btn btn-icon btn-round btn-black">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                    <button type="button" class="btn btn-icon btn-round btn-danger">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>








</div>

















<form id="addProductForm" style="display: none;" action=" " method="POST">
    @csrf
    <div class="card">
        <div class="card-header">
            <div class="card-title">Form Elements</div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="">
                    <div class="form-group">
                        <input name="login" type="text" class="form-control" id="in0" placeholder="Relative direction" value=" " />
                    </div>
                    <div class="form-group">
                        <input name="email" type="text" class="form-control" id="in1" placeholder="Enter Name" />
                    </div>
                    <div class="form-group">
                        <input name="password" type="text" class="form-control" id="in2" placeholder="Enter Description" />
                    </div>

                    <div class="form-group">
                        <label class="form-label">Your skills</label>
                        <div class="selectgroup selectgroup-pills">
                            @foreach($directions as $direction)
                            <label class="selectgroup-item">
                                <input type="checkbox" name="direction_id" value="{{$direction->id}}" class="selectgroup-input">
                                <span class="selectgroup-button">{{$direction->name}}</span>
                            </label>
                            @endforeach
                        </div>
                    </div>

                    <button type="submit" id="realSubmitBtn" style="display: none;"></button>
                </div>
            </div>
        </div>
    </div>

</form>






@endsection




@section('scripts')

<script>
    var SweetAlert2Demo = (function() {
        var initDemos = function() {
            $("#alert_demo_5").click(function(e) {

                const formElement = document.getElementById("addProductForm");

                // Clone the form to avoid DOM removal
                const formClone = formElement.cloneNode(true);
                formClone.id = "addProductFormClone";
                formClone.style.display = "block";


                swal({
                    title: "Input Something",
                    content: formClone,
                    buttons: {
                        cancel: {
                            visible: true,
                            className: "btn btn-danger",
                        },
                        confirm: {
                            className: "btn btn-success",
                        },
                    },
                }).then((willSubmit) => {
                    if (willSubmit) {
                        formClone.submit(); // or document.getElementById("realSubmitBtn").click();
                    }
                });
            });

        };

        return {
            init: function() {
                initDemos();
            },
        };
    })();

    jQuery(document).ready(function() {
        SweetAlert2Demo.init();
    });
</script>

@endsection