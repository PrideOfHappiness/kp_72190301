<body>
@include('template/header')
@include('template/navbar')
@include('template/sidebar')

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="card card-warning">
                    <div class="card-header">
                        <h3 class="card-title"> Form Unggah Data</h3>
                    </div>
                    <form action="{{ route('importData') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="inputData"> Silahkan Pilih File </label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="inputData" name="file" required="required">
                                        <label class="custom-file-label" for="inputData"> Pilih Data </label>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary"> Unggah Data </button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@include('template/footer')
</body>
