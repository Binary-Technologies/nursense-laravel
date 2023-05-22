// validate to only insert numbers
function onlyNumberKey(evt) {
    // Only ASCII character in that range allowed
    var ASCIICode = (evt.which) ? evt.which : evt.keyCode
    if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57)) {
        return false;
    }
    return true;
}
// validate to only insert numbers end

// Use this code to pass csrf token to ajax function. you dont have to include this token in ajax data property. Just let it be
$(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-Token': $('meta[name="_token"]').attr('content')
        }
    });
});


//-----------------------------------------------------------------------------------------------------------------------------


// Sweet Alert Library Trigger for Js
// function swal_alert(type, title, text) {
//     Swal.fire({
//         position: 'center',
//         icon: type,
//         title: title,
//         text: text,
//         showConfirmButton: false,
//         customClass: 'swal-wide',
//         timer: 1000
//     })
// }

// function swal_confirm(title, text, id, type) {
//     swal({
//         title: title,
//         text: text,
//         icon: "warning",
//         type: "warning",
//         buttons: ["Cancel", "Yes!"],
//         confirmButtonColor: '#3085d6',
//         cancelButtonColor: '#d33',
//         confirmButtonText: 'Yes, delete it!'
//     }).then((willDelete) => {
//         if (willDelete) {
//             if (type == "vendor") {
//                 deleteVendorConfirm(id);
//             } else if (type == "employee") {
//                 deleteEmployeeConfirm(id);
//             } else if (type == "vehicle") {
//                 deleteVehicleConfirm(id);
//             } else if (type == "customer") {
//                 deleteCustomerConfirm(id);
//             } else if (type == "adjustment") {
//                 deleteAdjConfirm(id);
//             } else if (type == "priceLevel") {
//                 deletePriceLvlConfirm(id);
//             } else if (type == "item") {
//                 deleteItemConfirm(id);
//             }else if(type == "overpayment"){
//                 add_overpayment();
//             }

//         }
//     });
// }
