<!doctype html>
<html lang="en">
  <head>
  	<title>Buku Tamu</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="{{ asset('/frontend/css/style.css') }}">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Buku Tamu</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="img" style="background-image: url({{ url('/frontend/images/bg-1.jpg') }});">
			      </div>
						<div class="login-wrap p-4 p-md-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4">Selamat Datang</h3>
			      		</div>
								<div class="w-100">
									<p class="social-media d-flex justify-content-end">
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
									</p>
								</div>
			      	</div>
					  @if (session('status'))
					  <div class="alert alert-success">
						  {{ session('status') }}
					  </div>
					  @endif
					<form action="{{ url('simpan-bukutamu') }}" method="POST" class="signin-form">
						@csrf
			      		<div class="form-group mb-3">
			      			<label class="label" for="name">Nama</label>
			      			<input type="text" name="nama" class="form-control" placeholder="Username" required>
			      		</div>
		            <div class="form-group mb-3">
		            	<label class="label" for="telp">No.Telp</label>
		              <input type="text" name="telepon" class="form-control" placeholder="Nomor Telepon" required>
		            </div>
					<div class="form-group mb-3">
		            	<label class="label" for="telp">Email</label>
		              <input type="email" name="email" class="form-control" placeholder="Email" required>
		            </div>
					<div class="form-group mb-3">
		            	<label class="label" for="alamat">Alamat</label>
						<textarea name="alamat" placeholder="Alamat" class="form-control" cols="3"></textarea>
		              {{-- <input type="text" class="" placeholder="Alamat" required> --}}
		            </div>
		            <div class="form-group">
		            	<button type="submit" class="form-control btn btn-primary rounded submit px-3">Submit</button>
		            </div>
		            {{-- <div class="form-group d-md-flex">
		            	<div class="w-50 text-left">
			            	<label class="checkbox-wrap checkbox-primary mb-0">Remember Me
									  <input type="checkbox" checked>
									  <span class="checkmark"></span>
										</label>
									</div>
									<div class="w-50 text-md-right">
										<a href="#">Forgot Password</a>
									</div>
		            </div> --}}
		          </form>
		          {{-- <p class="text-center">Not a member? <a data-toggle="tab" href="#signup">Sign Up</a></p> --}}
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="{{ asset('/frontend/js/jquery.min.js') }}"></script>
  <script src="{{ asset('/frontend/js/popper.js') }}"></script>
  <script src="{{ asset('/frontend/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('/frontend/js/main.js') }}"></script>

	</body>
</html>

