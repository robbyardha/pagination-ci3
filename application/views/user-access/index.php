<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-xl-12">
                    <div class="page-title-box">
                        <h4 class="page-title float-left">User</h4>

                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item active"><a>Data User</a></li>
                        </ol>

                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- end row -->


            <div class="row">
                <div class="col-12">
                    <?php if ($this->session->flashdata('useraccess')) : ?>

                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>Data <strong>User </strong>Berhasil <?= $this->session->flashdata('useraccess') ?>
                        </div>

                    <?php endif ?>
                    <div class="card-box">
                        <div class="row mb-2">
                            <div class="col-9">
                                <h4 class="m-t-0 header-title">Daftar User</h4>
                            </div>
                            <div class="col-3 d-flex justify-content-end">
                                <a href="<?= base_url('useraccess/tambah') ?>" class="btn btn-primary">Tambah</a>
                            </div>
                        </div>
                        <!-- <p class="text-muted font-14 m-b-30">
                            DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction function: <code>$().DataTable();</code>.
                        </p> -->
                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <?php $no = 1; ?>
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nomor Induk</th>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>Telp</th>
                                    <th>Ubah</th>
                                    <th>Hapus</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php foreach ($user as $us) : ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $us['nik'] ?></td>
                                        <td><?= $us['nama'] ?></td>
                                        <td><?= $us['alamat'] ?></td>
                                        <td><?= $us['telp'] ?></td>
                                        <td>
                                            <a href="<?= base_url('useraccess/ubah/') ?><?= $us['id'] ?>" class="btn btn-warning">Ubah</a>
                                        </td>
                                        <td>

                                            <a href="<?= base_url('useraccess/hapus/') ?><?= $us['id'] ?>" class="btn btn-danger">Hapus</a>
                                        </td>
                                    </tr>
                                <?php endforeach ?>


                            </tbody>
                        </table>

                        <?php //$this->pagination->create_links() 
                        ?>
                    </div>
                </div>
            </div> <!-- end row -->




        </div> <!-- container -->

    </div> <!-- content -->



</div>
<!-- End content-page -->


<!-- ============================================================== -->
<!-- End Right content here -->
<!-- ============================================================== -->

<!-- Right Sidebar -->
<div class="side-bar right-bar">
    <div class="nicescroll">
        <ul class="nav nav-pills nav-justified">
            <li class="nav-item">
                <a href="#home-2" class="nav-link active" data-toggle="tab" aria-expanded="false">
                    Activity
                </a>
            </li>
            <li class="nav-item">
                <a href="#messages-2" class="nav-link" data-toggle="tab" aria-expanded="true">
                    Settings
                </a>
            </li>
        </ul>

        <div class="tab-content">
            <div class="tab-pane fade active show" id="home-2">
                <div class="timeline-2">
                    <div class="time-item">
                        <div class="item-info">
                            <small class="text-muted">5 minutes ago</small>
                            <p><strong><a href="#" class="text-info">John Doe</a></strong> Uploaded a photo <strong>"DSC000586.jpg"</strong></p>
                        </div>
                    </div>

                    <div class="time-item">
                        <div class="item-info">
                            <small class="text-muted">30 minutes ago</small>
                            <p><a href="" class="text-info">Lorem</a> commented your post.</p>
                            <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em></p>
                        </div>
                    </div>

                    <div class="time-item">
                        <div class="item-info">
                            <small class="text-muted">59 minutes ago</small>
                            <p><a href="" class="text-info">Jessi</a> attended a meeting with<a href="#" class="text-success">John Doe</a>.</p>
                            <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em></p>
                        </div>
                    </div>

                    <div class="time-item">
                        <div class="item-info">
                            <small class="text-muted">1 hour ago</small>
                            <p><strong><a href="#" class="text-info">John Doe</a></strong>Uploaded 2 new photos</p>
                        </div>
                    </div>

                    <div class="time-item">
                        <div class="item-info">
                            <small class="text-muted">3 hours ago</small>
                            <p><a href="" class="text-info">Lorem</a> commented your post.</p>
                            <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em></p>
                        </div>
                    </div>

                    <div class="time-item">
                        <div class="item-info">
                            <small class="text-muted">5 hours ago</small>
                            <p><a href="" class="text-info">Jessi</a> attended a meeting with<a href="#" class="text-success">John Doe</a>.</p>
                            <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="messages-2">

                <div class="row m-t-10">
                    <div class="col-8">
                        <h5 class="m-0">Notifications</h5>
                        <p class="text-muted m-b-0"><small>Do you need them?</small></p>
                    </div>
                    <div class="col-4 text-right">
                        <input type="checkbox" checked data-plugin="switchery" data-color="#1bb99a" data-size="small" />
                    </div>
                </div>

                <div class="row m-t-10">
                    <div class="col-8">
                        <h5 class="m-0">API Access</h5>
                        <p class="m-b-0 text-muted"><small>Enable/Disable access</small></p>
                    </div>
                    <div class="col-4 text-right">
                        <input type="checkbox" checked data-plugin="switchery" data-color="#1bb99a" data-size="small" />
                    </div>
                </div>

                <div class="row m-t-10">
                    <div class="col-8">
                        <h5 class="m-0">Auto Updates</h5>
                        <p class="m-b-0 text-muted"><small>Keep up to date</small></p>
                    </div>
                    <div class="col-4 text-right">
                        <input type="checkbox" checked data-plugin="switchery" data-color="#1bb99a" data-size="small" />
                    </div>
                </div>

                <div class="row m-t-10">
                    <div class="col-8">
                        <h5 class="m-0">Online Status</h5>
                        <p class="m-b-0 text-muted"><small>Show your status to all</small></p>
                    </div>
                    <div class="col-4 text-right">
                        <input type="checkbox" checked data-plugin="switchery" data-color="#1bb99a" data-size="small" />
                    </div>
                </div>

            </div>
        </div>
    </div> <!-- end nicescroll -->
</div>
<!-- /Right-bar -->