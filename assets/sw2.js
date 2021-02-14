function hapus() {
  const swalWithBootstrapButtons = Swal.mixin({
    customClass: {
      confirmButton: 'btn btn-success',
      cancelButton: 'btn btn-danger'
    },
    buttonsStyling: false
  })

  swalWithBootstrapButtons.fire({
    title: 'Siap Untuk Keluar?',
    text: "Pilih Logout Untuk Keluar!",
    icon: 'warning',
    showCancelButton: false,
    confirmButtonText: 'Logout!',
    cancelButtonText: 'Batal!',
    reverseButtons: true
  }).then((result) => {
    if (result.isConfirmed) {
      swalWithBootstrapButtons.fire(
        'LogOut!',
        'Sesi Anda Akan Di Bersihkan.',
        'success'
      )
    } else if (
      /* Read more about handling dismissals below */
      result.dismiss === Swal.DismissReason.cancel
    ) {
      swalWithBootstrapButtons.fire(
        'Cancelled',
        'Gagal Keluar  :)',
        'error'
      )
    }
  })
}

function loginsuccess() {
  Swal.fire({
    position: 'top-end',
    icon: 'success',
    title: 'Your work has been saved',
    showConfirmButton: false,
    timer: 1500
  })
}