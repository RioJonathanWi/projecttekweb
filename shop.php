<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!-- Jquery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <!-- Javascript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <!-- Sweet Alert -->
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <title>Shop</title>

  <style>
    .navbar {
      background-color: #D8D8D8;
      box-shadow: 0 2px 4px 0 rgba(0, 0, 0, .2);
    }

    .nav-link {
      /* font-family: 'Lemon/Milk light', sans-serif; */
      font-family: "Poppins", sans-serif;
      font-style: normal;
      font-size: 20px;
      text-align: center;
      margin: 10px;
    }

    .active:hover {
      font-weight: bold;
    }

    body {
      background-color: #D8D8D8;
    }

    content {
      padding: 25px;
    }

    content table {
      margin-top: 20px;
    }

    content button {
      margin-bottom: 20px;
      float: right;
    }

    main {
      background-color: #50545c
    }

    .img-fluid {
      height: 200px;
    }

    #cart {
      color: white;
      border: 2px solid black;
    }

    tfoot td {
      font-weight: bold;
    }

    .card {
      text-align: center;
      color: white;
      background-color: #50545c;
      box-shadow: 0 2px 4px 0 rgba(0, 0, 0, .2);
    }

    .card img {
      max-width: 80%;
      height: auto;
      margin-top: 40px;
    }

    .card:hover {
      background-color: #4f4c53;
    }

    #katalog {
      padding: 15px;
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light ">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav col d-flex justify-content-center">
        <li class="nav-item">
          <a class="nav-link active" href="#">SHOP</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">CATALOG</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="contactus.php">CONTACT US</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">LOGO NAME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">HIRING NOW</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">ORDER HISTORY</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="row">
    <div class="container">
      <content class="row">
        <main class="col-md-6">
          <!-- tabel keranjang -->
          <table id="cart" class="table table-bordered">
            <thead>
              <tr>
                <th></th>
                <th>Name</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Subtotal</th>
              </tr>
            </thead>
            <tbody id="tbody-cart">
            </tbody>
          </table>
          <!-- buy button -->
          <div class="buyBtn">
            <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#isiDataModal">
              BUY
            </button>
          </div>
        </main>
        <footer>
        </footer>
      </content>

      <!-- modal isi data pembeli -->
      <div class="modal fade" id="isiDataModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Pembelian</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form>
                <div class="mb-3">
                  <label for="namaPembeli" class="form-label">Nama</label>
                  <input type="text" class="form-control" id="namaPembeli" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="alamatPembeli" class="form-label">Alamat</label>
                  <input type="text" class="form-control" id="alamatPembeli">
                </div>
                <div class="mb-3">
                  <label for="telpPembeli" class="form-label">No. Telepon</label>
                  <input type="text" class="form-control" id="telpPembeli">
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary" id="submitBtn">Submit</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="row row-cols-4 g-4" id="katalog">
    <div class="col-4">
      <div class="card h-100 mb-3" id="produk">
        <img src="tas.jpg" class="card-img-top mx-auto d-block" alt="...">
        <div class="card-body">
          <h5 class="card-title" id="nama">THE BACKPACK 1</h5>
          <p class="card-text">Rp 100.000</p>
          <h2 class="price-hidden d-none" id="harga">100000</h2>
        </div>
      </div>
    </div>

    <div class="col-4">
      <div class="card h-100 mb-3" id="produk">
        <img src="tas.jpg" class="card-img-top mx-auto d-block" alt="...">
        <div class="card-body">
          <h5 class="card-title" id="nama">THE BACKPACK 2</h5>
          <p class="card-text">Rp 100.000</p>
          <h2 class="price-hidden d-none" id="harga">100000</h2>
        </div>
      </div>
    </div>

    <div class="col-4">
      <div class="card h-100 mb-3" id="produk">
        <img src="tas.jpg" class="card-img-top mx-auto d-block" alt="...">
        <div class="card-body">
          <h5 class="card-title" id="nama">THE BACKPACK 3</h5>
          <p class="card-text">Rp 100.000</p>
          <h2 class="price-hidden d-none" id="harga">100000</h2>
        </div>
      </div>
    </div>

    <div class="col-4">
      <div class="card h-100 mb-3" id="produk">
        <img src="tas.jpg" class="card-img-top mx-auto d-block" alt="...">
        <div class="card-body">
          <h5 class="card-title" id="nama">THE BACKPACK 4</h5>
          <p class="card-text">Rp 100.000</p>
          <h2 class="price-hidden d-none" id="harga">100000</h2>
        </div>
      </div>
    </div>

    <div class="col-4">
      <div class="card h-100 mb-3" id="produk">
        <img src="tas.jpg" class="card-img-top mx-auto d-block" alt="...">
        <div class="card-body">
          <h5 class="card-title" id="nama">THE BACKPACK 5</h5>
          <p class="card-text">Rp 100.000</p>
          <h2 class="price-hidden d-none" id="harga">100000</h2>
        </div>
      </div>
    </div>

    <div class="col-4">
      <div class="card h-100 mb-3" id="produk">
        <img src="tas.jpg" class="card-img-top mx-auto d-block" alt="...">
        <div class="card-body">
          <h5 class="card-title" id="nama">THE BACKPACK 6</h5>
          <p class="card-text">Rp 100.000</p>
          <h2 class="price-hidden d-none" id="harga">100000</h2>
        </div>
      </div>
    </div>
  </div>
</body>


<script>
  $(document).ready(function() {

    let products = document.querySelectorAll('#produk');

    products.forEach((elm) => {
      elm.addEventListener("click", (e) => {
        let name = e.currentTarget.querySelector('#nama').innerHTML;
        let price = e.currentTarget.querySelector('#harga').innerHTML;


        $.ajax({
          url: "api/keranjang.php",
          method: "POST",
          data: {
            name: name,
            price: price
          },
          success: function(output) {
            document.getElementById('tbody-cart').innerHTML = output;
          }
        })
      })
    })

    $('#submitBtn').on('click', function() {
      event.preventDefault();


      var nama = $('#namaPembeli').val();
      var alamat = $('#alamatPembeli').val();
      var no_telp = $('#telpPembeli').val();

      if (nama != '' && alamat != '' && no_telp != '') {
        $('#isiDataModal').modal('hide')
        $.ajax({
          url: "api/prosesOrder.php",
          method: "POST",
          data: {
            nama: nama,
            alamat: alamat,
            no_telp: no_telp
          },
          success: Swal.fire({
            icon: 'success',
            text: 'Pembelian Berhasil!'
          })
        })
      } else {
        Swal.fire({
          icon: 'warning',
          text: 'Silahkan lengkapi data terlebih dahulu!'
        })
      }

    });
  })

  function deleteKeranjang(id) {
    $.ajax({
      url: "api/deleteKeranjang.php",
      type: "POST",
      data: {
        id: id
      },
      success: function(result) {
        document.getElementById('tbody-cart').innerHTML = result;
      }
    })
  }
</script>

</html>