@extends('components.dashboard')
@section('article','active')
@section('content')
<div class="section__content section__content--p30">
    <div class="container-fluid">

        <div class="row" style="margin-top: -20px;">
            <div class="col-md-12">
                <div class="overview-wrap">
                    <h3>Daftar Artikel Berita Yang Telah Diupload</h3>
                </div>
            </div>
        </div>   
        
        <div class="card">
            <div class="card-header">

            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                        <tr align="center">
                          <th><h5>No</h5></th>
                          <th><h5>Negara</h5></th>
                          <th><h5>Positif</h5></th>
                          <th><h5>Sembuh</h5></th>
                          <th><h5>Meninggal</h5></th>
                        </tr>
                      </thead>
                      <tbody>        
                        <?php for( $i = 0; $i <= 9; $i++ ) { ?>
                            <tr align="center">
                                <td><h6>1</h6></td>
                                <td><h6>1</h6></td>
                                <td><h6>1</h6></td>
                                <td><h6>1</h6></td>
                                <td><h6>1</h6></td>
                            </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                  </div>
            </div>
        </div>

    </div>
</div>
@endsection