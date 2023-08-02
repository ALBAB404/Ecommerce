

const base_url = window.location.origin;
const admin_base_url = `${window.location.origin}/admin/`;

const generateAdminURL = (param) => `${admin_base_url}${param}/`;

const deleteBySwal = (url,cb) => {
    swal({
        title: "Are you sure?",
        text: "Once deleted, you will not be able to recover this imaginary file!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
        })
        .then((willDelete) => {
        if (willDelete) {
            axios.post(url).then(res => {
            cb();
            })
            swal("Poof! Your imaginary file has been deleted!", {
            icon: "success",
            });
        } else {
            swal("Your imaginary file is safe!");
        }
        });
}


// image preview function
function previewImage(inputElement, imageElement) {
    inputElement.addEventListener('change', function(event) {
        var reader = new FileReader();
        reader.onload = function(e) {
            imageElement.src = e.target.result;
        };
        reader.readAsDataURL(event.target.files[0]);
    });
}
// image preview function end


