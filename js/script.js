// window.onload = function() {
//     document.body.onselectstart = function() {
//         return false;
//     }
// }

$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})

function toggleIconMenu(x) {
  x.classList.toggle("change");
}

/* $(document).ready(function() {
  $('button[name="orderNow"]').click(function(e) {
    e.preventDefault(); // Prevent the default form submission

    Swal.fire({
      title: 'Success!',
      text: 'Order Successfully',
      icon: 'success',
      timer: 1500,
      confirmButtonText: 'Oke'
    }).then(() => {
      $('#myModal').modal('hide'); // Hide the modal
      $('#myForm').submit(); // Submit the form
    });
  });
});

document.getElementById("myForm").addEventListener("submit", function(event) {
  event.preventDefault(); // Prevent the form from submitting traditionally

  const inputFieldValue = document.getElementById("inputField").value;

  // Send an AJAX request
  fetch("process.php", {
      method: "POST",
      headers: {
          "Content-Type": "application/x-www-form-urlencoded"
      },
      body: "inputField=" + encodeURIComponent(inputFieldValue)
  })
  .then(response => response.json())
  .then(data => {
      // Update the output element with the response from the server
      document.getElementById("output").innerHTML = data.message;
  })
  .catch(error => {
      console.error("Error:", error);
  });
}); Optional AJAX Request

function formatNumber(number) {
  return new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(number);
}

document.addEventListener("DOMContentLoaded", function() {
  const form = document.getElementById("myForm");

  form.addEventListener("submit", function(event) {
    event.preventDefault();

    // Get input values
    const noriASQuantity = document.getElementsByName("noriAS")[0].value;
    const noriITQuantity = document.getElementsByName("noriIT")[0].value;
    const noriTMQuantity = document.getElementsByName("noriTM")[0].value;
    const noriRQuantity = document.getElementsByName("noriR")[0].value;
    const musubiQuantity = document.getElementsByName("musubi")[0].value;
    const fullName = document.getElementsByName("fname")[0].value;
    const whatsappNumber = document.getElementsByName("no_hp")[0].value;

    const onigiriPrice = 13000
    const musubiPrice = 15000

    const noriAS = onigiriPrice * noriASQuantity
    const noriTM = onigiriPrice * noriITQuantity
    const noriIT = onigiriPrice * noriTMQuantity
    const noriR = onigiriPrice * noriRQuantity
    const musubi = onigiriPrice * musubiQuantity

    const totalPrice = noriAS + noriTM + noriIT + noriR + musubi
    const formatTotalPrice = formatNumber(totalPrice)

    // Update the modal content with input values
    const modal = document.getElementById("exampleModal");
    const modalContent = modal.querySelector(".modal-body");
    modalContent.innerHTML = `
      <h1>Order Detail</h1>
      <p>Onigiri Ayam Suwir(${noriASQuantity})</p>
      <p>Onigiri Ikan Tongkol(${noriITQuantity})</p>
      <p>Onigiri Tuna Mayo(${noriTMQuantity})</p>
      <p>Onigiri Rendang(${noriRQuantity})</p>
      <p>Musubi(${musubiQuantity})</p>
      <p>Total Price (Rp. ${formatTotalPrice})</p>
      <p>Harga ini belum termasuk ongkos kirim</p>
    `;

    // Show the modal
    const modalInstance = new bootstrap.Modal(modal);
    modalInstance.show();
    console.log(formatTotalPrice)

    const xhr = new XMLHttpRequest();
    xhr.open("POST", "process.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function() {
      if (xhr.readyState === 4 && xhr.status === 200) {
        console.log("AJAX response:", xhr.responseText);
        // You can handle the response from PHP here
      }
    };
    const params = "totalPrice=" + encodeURIComponent(formatTotalPrice);
    xhr.send(params);
  });
});
*/
