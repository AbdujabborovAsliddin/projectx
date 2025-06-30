console.log(333);

function toggleManage() {
    const isActive = localStorage.getItem('manageMode') === '1';
    const newState = !isActive;
    localStorage.setItem('manageMode', newState ? '1' : '0');

    document.getElementById('manageBtn').classList.toggle('active', newState);
    document.querySelectorAll('.delete-form').forEach(el => {
        el.classList.toggle('d-none', !newState);
    });
}

// On page load → restore Manage state
window.addEventListener('DOMContentLoaded', () => {
    const isActive = localStorage.getItem('manageMode') === '1';
    if (isActive) {
        document.getElementById('manageBtn').classList.add('active');
        document.querySelectorAll('.delete-form').forEach(el => {
            el.classList.remove('d-none');
        });
    }
});


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




