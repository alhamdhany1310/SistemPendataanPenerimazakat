{{-- <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Daftar Penerima</title>
  </head>
  <body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="card">
                    <div class="card-header">{{ __('Tambah Data Penerima Zakat') }}</div>
                    <div class="card-body">
                        <form action="{{route('addIsi')}}" method="POST">
                            @csrf
                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nama Penerima') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name">

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Masukkan Usia') }}</label>

                                <div class="col-md-6">
                                    <input id="usia" type="number" class="form-control" name="usia">

                                    @error('usia')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="provinsi" class="col-md-4 col-form-label text-md-end">{{ __('Masukkan Provinsi') }}</label>

                                <div class="col-md-6">
                                    <input id="provinsi" type="text" class="form-control" name="provinsi">

                                    @error('provinsi')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="kabupaten" class="col-md-4 col-form-label text-md-end">{{ __('Masukkan Kabupaten') }}</label>

                                <div class="col-md-6">
                                    <input id="kabupaten" type="text" class="form-control" name="kabupaten">

                                    @error('kabupaten')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="kecamatan" class="col-md-4 col-form-label text-md-end">{{ __('Masukkan Kecamatan') }}</label>

                                <div class="col-md-6">
                                    <input id="kecamatan" type="text" class="form-control" name="kecamatan">

                                    @error('kecamatan')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="alamat" class="col-md-4 col-form-label text-md-end">{{ __('Masukkan Alamat') }}</label>

                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="alamat"></textarea>
                                        <label for="floatingTextarea">Comments</label>
                                    </div>

                                    @error('alamat')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-2">
                                <Button class="btn btn-primary mt-2">Tambah Data</Button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html> --}}
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Contact Form 07</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link href="https://fonts.googleapis.com/css?family=Roboto:400,100,300,700" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

    <link rel="stylesheet" href="https://system.hamdhany12.repl.co/form/style.css" />
  </head>
  <body class="bg-dark">
    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-10">
            <div class="wrapper">
              <div class="row no-gutters">
                <div class="col-md-7 d-flex align-items-stretch">
                  <div class="contact-wrap w-100 p-md-5 p-4 py-5">
                    <h3 class="mb-4">Isi Data</h3>
                    <form class="contactForm" action="{{route('addIsi')}}" method="POST">
                        @csrf
                        <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <input type="text" class="form-control" name="name" id="name" placeholder="Name" />
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <input type="number" class="form-control" name="usia" id="usia" placeholder="Usia" />
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <input type="text" class="form-control" name="provinsi" id="provinsi" placeholder="Provinsi" />
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <input type="text" class="form-control" name="kabupaten" id="kabupaten" placeholder="Kecamatan" />
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <input type="text" class="form-control" name="kecamatan" id="kecamatan" placeholder="Kecamatan" />
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <textarea name="alamat" class="form-control" id="alamat" cols="15" rows="3" placeholder="alamat"></textarea>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <button class="btn btn-success">Tambah Data</button>
                            {{-- <div class="submitting"></div> --}}
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="col-md-5 d-flex align-items-stretch">
                  <div class="info-wrap w-100 p-md-5 p-4 py-5 img">
					<h3>Infromasi</h3>
					<p class="mb-4">"Data anda akan terlihat di Daftar Penerima jika admin sudah mengkofirmasi atau memverifikasi apakah anda berhak atau tidak menerima zakat." </p>
                    <h3>Renungan</h3>
                    <p class="mb-4">"Allah akan mencabut riba dari segala berkah, tapi akan memberikan peningkatan untuk amalan karena Dia tidak mengasihi makhluk yang tidak tahu berterima kasih dan jahat."</p>
					<div class="text pl-3">
                        <p><span>My</span> <a href="https://www.youtube.com/c/WebCodingAcademy">Youtube</a></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <script src="https://system.hamdhany12.repl.co/form/jquery.min.js"></script>
    <script src="https://system.hamdhany12.repl.co/form/popper.js"></script>
    <script src="https://system.hamdhany12.repl.co/form/bootstrap.min.js"></script>
    <script src="https://system.hamdhany12.repl.co/form/jquery.validate.min.js"></script>
    <script src="https://system.hamdhany12.repl.co/form/main.js"></script>
  </body>
</html>

