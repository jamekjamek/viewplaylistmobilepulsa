<!-- Main Content -->
<div class="page-wrapper">
    <div class="container-fluid">
        <!-- Title -->
        <div class="row heading-bg">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h5 class="txt-dark"><?= $title; ?></h5>
            </div>
            <!-- Breadcrumb -->
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="<?= base_url(); ?>">Home</a></li>
                    <li class="active"><span><?= $title; ?></span></li>
                </ol>
            </div>
            <!-- /Breadcrumb -->
        </div>

        <div class="row">
            <!-- FORM INPUT NOMOR TELFON -->
            <div class="col-lg-6 col-sm-12">
                <div class="panel panel-default card-view">
                    <div class="panel-heading">
                        <div class="pull-left">
                            <h6 class="panel-title txt-dark">Topup pulsa</h6>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="panel-wrapper collapse in">
                        <div class="panel-body">
                            <p class="text-muted">Silahkan masukan nomor tujuan anda di kolom dibawah</p>
                            <div class="pills-struct mt-40">
                                <ul role="tablist" class="nav nav-pills" id="myTabs_6">
                                    <li role="presentation" class="active">
                                        <a data-toggle="tab" id="profile_tab_6" role="tab" href="#pulsa-prabayar" aria-expanded="true">PRABAYAR</a>
                                    </li>
                                    <li class="" role="presentation">
                                        <a aria-expanded="false" data-toggle="tab" role="tab" id="home_tab_6" href="#pulsa-pascabayar">PASCABAYAR</a>
                                    </li>

                                </ul>
                                <div class="tab-content" id="myTabContent_6">
                                    <div id="pulsa-prabayar" class="tab-pane fade active in" role="tabpanel">
                                        <h5 class="h5">Masukan Nomor Telpon anda</h5>
                                        <div class="form-wrap">
                                            <form class="form-inline">
                                                <div class="input-group ">
                                                    <span class="input-group-btn">
                                                        <button type="button" class="btn btn-icon-anim btn-facebook btn-square"><i class="fa fa-phone-square"></i>
                                                        </button>
                                                    </span>
                                                    <input type="text" id="pulsa-prabayar" name="pulsa-prabayar" class="form-control" placeholder="Masukan Nomor telpon">
                                                </div>
                                                <button type="button" class="btn btn-success btn-anim"><i class="icon-rocket"></i><span class="btn-text">Cek Ketersediaan</span></button>
                                            </form>
                                        </div>
                                    </div>
                                    <div id="pulsa-pascabayar" class="tab-pane fade" role="tabpanel">
                                        <h5 class="h5">Masukan Nomor Telpon anda</h5>
                                        <div class="form-wrap">
                                            <form class="form-inline">
                                                <div class="input-group ">
                                                    <span class="input-group-btn">
                                                        <button type="button" class="btn btn-icon-anim btn-facebook btn-square"><i class="fa fa-phone-square"></i>
                                                        </button>
                                                    </span>
                                                    <input type="text" id="pulsa-prabayar" name="pulsa-prabayar" class="form-control" placeholder="Masukan Nomor telpon">
                                                </div>
                                                <button type="button" class="btn btn-warning btn-anim"><i class="icon-rocket"></i><span class="btn-text">Cek Tagihan</span></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- FORM INPUT NOMOR TELFON -->

            <div class="col-lg-6 col-sm-12">
                <div class="panel panel-default card-view">
                    <div class="panel-heading">
                        <div class="pull-left">
                            <h6 class="panel-title txt-dark">Daftar Nominal pengisian pulsa Telkomsel</h6>
                        </div>
                        <div class="clearfix"></div>
                    </div>

                    <div class="scroll" style="height: 220px; width: 100%; overflow-y: auto; overflow-x: hidden;">
                        <div class="panel-wrapper collapse in">
                            <div class="panel panel-default card-view panel-refresh">
                                <div class="refresh-container">
                                    <div class="la-anim-1"></div>
                                </div>
                                <div class="panel-heading">
                                    <div class="pull-left">
                                        <h6 class="panel-title txt-dark">Rp. 98000 - Telkomsel</h6>
                                    </div>

                                    <div class="pull-right">

                                        <a class="pull-left inline-block mr-15 collapsed" data-toggle="collapse" href="#collapse_1" aria-expanded="false">
                                            <i class="zmdi zmdi-chevron-down"></i>
                                            <i class="zmdi zmdi-chevron-up"></i>
                                        </a>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div id="collapse_1" class="panel-wrapper collapse" aria-expanded="false" style="height: 0px;">
                                    <div class="panel-body">
                                        <h5 class="h5">
                                            200 SMS ke semua 1 hari
                                        </h5>
                                        <p>Paket SMS - 200 SMS ke semua 1 hari</p>
                                        <button class="btn btn-success btn-xs">Beli</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="panel-wrapper collapse in">
                            <div class="panel panel-default card-view panel-refresh">
                                <div class="refresh-container">
                                    <div class="la-anim-1"></div>
                                </div>
                                <div class="panel-heading">
                                    <div class="pull-left">
                                        <h6 class="panel-title txt-dark">Rp. 98000 - Telkomsel</h6>
                                    </div>

                                    <div class="pull-right">

                                        <a class="pull-left inline-block mr-15 collapsed" data-toggle="collapse" href="#collapse_2" aria-expanded="false">
                                            <i class="zmdi zmdi-chevron-down"></i>
                                            <i class="zmdi zmdi-chevron-up"></i>
                                        </a>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div id="collapse_2" class="panel-wrapper collapse" aria-expanded="false" style="height: 0px;">
                                    <div class="panel-body">
                                        <h5 class="h5">
                                            200 SMS ke semua 1 hari
                                        </h5>
                                        <p>Paket SMS - 200 SMS ke semua 1 hari</p>
                                        <button class="btn btn-success btn-xs">Beli</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="panel-wrapper collapse in">
                            <div class="panel panel-default card-view panel-refresh">
                                <div class="refresh-container">
                                    <div class="la-anim-1"></div>
                                </div>
                                <div class="panel-heading">
                                    <div class="pull-left">
                                        <h6 class="panel-title txt-dark">Rp. 98000 - Telkomsel</h6>
                                    </div>

                                    <div class="pull-right">

                                        <a class="pull-left inline-block mr-15 collapsed" data-toggle="collapse" href="#collapse_3" aria-expanded="false">
                                            <i class="zmdi zmdi-chevron-down"></i>
                                            <i class="zmdi zmdi-chevron-up"></i>
                                        </a>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div id="collapse_3" class="panel-wrapper collapse" aria-expanded="false" style="height: 0px;">
                                    <div class="panel-body">
                                        <h5 class="h5">
                                            200 SMS ke semua 1 hari
                                        </h5>
                                        <p>Paket SMS - 200 SMS ke semua 1 hari</p>
                                        <button class="btn btn-success btn-xs">Beli</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="panel-wrapper collapse in">
                            <div class="panel panel-default card-view panel-refresh">
                                <div class="refresh-container">
                                    <div class="la-anim-1"></div>
                                </div>
                                <div class="panel-heading">
                                    <div class="pull-left">
                                        <h6 class="panel-title txt-dark">Rp. 98000 - Telkomsel</h6>
                                    </div>

                                    <div class="pull-right">

                                        <a class="pull-left inline-block mr-15 collapsed" data-toggle="collapse" href="#collapse_4" aria-expanded="false">
                                            <i class="zmdi zmdi-chevron-down"></i>
                                            <i class="zmdi zmdi-chevron-up"></i>
                                        </a>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div id="collapse_4" class="panel-wrapper collapse" aria-expanded="false" style="height: 0px;">
                                    <div class="panel-body">
                                        <h5 class="h5">
                                            200 SMS ke semua 1 hari
                                        </h5>
                                        <p>Paket SMS - 200 SMS ke semua 1 hari</p>
                                        <button class="btn btn-success btn-xs">Beli</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="panel-wrapper collapse in">
                            <div class="panel panel-default card-view panel-refresh">
                                <div class="refresh-container">
                                    <div class="la-anim-1"></div>
                                </div>
                                <div class="panel-heading">
                                    <div class="pull-left">
                                        <h6 class="panel-title txt-dark">Rp. 98000 - Telkomsel</h6>
                                    </div>

                                    <div class="pull-right">

                                        <a class="pull-left inline-block mr-15 collapsed" data-toggle="collapse" href="#collapse_5" aria-expanded="false">
                                            <i class="zmdi zmdi-chevron-down"></i>
                                            <i class="zmdi zmdi-chevron-up"></i>
                                        </a>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div id="collapse_5" class="panel-wrapper collapse" aria-expanded="false" style="height: 0px;">
                                    <div class="panel-body">
                                        <h5 class="h5">
                                            200 SMS ke semua 1 hari
                                        </h5>
                                        <p>Paket SMS - 200 SMS ke semua 1 hari</p>
                                        <button class="btn btn-success btn-xs">Beli</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Footer -->
        <footer class="footer container-fluid pl-30 pr-30">
            <div class="row">
                <div class="col-sm-12">
                    <p><?= date('Y'); ?> &copy; Hound. Pampered by Hencework</p>
                </div>
            </div>
        </footer>
        <!-- /Footer -->
    </div>
</div>
<!-- /Main Content -->
