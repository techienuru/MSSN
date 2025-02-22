
    <link rel="stylesheet" href="./assets/css/style.css">
    <style>
        .btn-add-exco {
            background-color: #03a9f3;
            border: none;
            color: white;
            font-size: 18px;
            padding: 10px 30px;
            border-radius: 30px;
            transition: background-color 0.3s ease;
        }

        .btn-add-exco:hover {
            background-color: #0288d1;
        }

        .exco-card {
            border: none;
            border-radius: 15px;
            background-color: #e8e9ef;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .exco-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .exco-image {
            border-radius: 15px 15px 0 0;
            object-fit: cover;
        }

        .card-body {
            padding: 20px;
        }

        .modal-header {
            background-color: #03a9f3;
            color: white;
            border-bottom: none;
        }

        .modal-body {
            background-color: #f5f5f5;
        }

        .modal-footer {
            border-top: none;
        }

        .btn-secondary {
            background-color: rgba(153, 171, 180, 0.8);
            color: #333;
        }
    </style>

<div id="process" data-name="excos"></div>
        <div class="content">
            <!-- Animated -->
            <div class="animated fadeIn">

                <!-- /Widgets -->
                <!--  Traffic  -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="box-title">Excos</h4>
                                <small>Add and manage all excos</small>
                            </div>

                            <div class="card-body">
                                <!-- Content fall here -->
                                <div class="text-center mb-4">
                                    <button class="btn btn-add-exco" data-toggle="modal" data-target="#addExcoModal">
                                        Add New Exco
                                    </button>
                                </div>

                                <div class="row my-5">
                                    <div class="col-sm-4">
                                        <div class="page-header float-left">
                                            <div class="page-title">
                                                <h1>All Excos</h1>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <form action="" method="POST" autocomplete="off">
                                            <div class="mb-3">
                                                <label for="session" class="form-label">Session</label>
                                                <select name="session" id="session" class="form-control" required>
                                                    <option value="">Select Session</option>
                                                    <option value="2018/2029">2018/2019</option>
                                                    <option value="2019/2020">2019/2020</option>
                                                    <option value="2020/2021">2020/2021</option>
                                                    <option value="2021/2022">2021/2022</option>
                                                    <option value="2022/2023">2022/2023</option>
                                                    <option value="2023/2024">2023/2024</option>
                                                    <option value="2024/2025">2024/2025</option>
                                                </select>
                                            </div>
                                            <button type="button" class="btn btn-success">Filter</button>
                                        </form>
                                    </div>
                                </div>

                                <div class="row text-center">
                                    <?php foreach($excos as $item) : ?>
                                    <div class="col-md-3 mb-4">
                                        <div class="card exco-card shadow-sm">
                                            <img src="<?=PUBLIC_URL.'/files/images/excos/'.$item['image']?>" class="card-img-top exco-image" alt="<?=$item['name']?>">
                                            <div class="card-body">
                                                <h5 class="card-title"><?=$item['name']?></h5>
                                                <p class="card-text"><?=$item['position']?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div><!-- /# column -->
                </div>
                <!--  /Traffic -->

            </div>
            <!-- .animated -->
        </div>
        <!-- /.content -->
        <div class="clearfix"></div>

    </div>
    <!-- /#right-panel -->
    <!-- Modal for Adding Exco -->
    <div class="modal fade" id="addExcoModal" tabindex="-1" aria-labelledby="addExcoModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header d-flex">
                    <h5 class="modal-title" id="addExcoModalLabel">Add New Exco</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="modalform">
                        <div class="mb-3">
                            <label for="session" class="form-label">Session</label>
                            <select name="session" id="session" class="form-control" required>
                               <?php foreach($session as $item) : ?>
                                <option value="<?=$item['session_id']?>"><?=$item['session_name']?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="excoName" class="form-label">Exco Name</label>
                            <input type="text" name="name" class="form-control" id="excoName" required>
                        </div>
                        <div class="mb-3">
                            <label for="excoPosition" class="form-label">Position</label>
                            <select name="position" id="excoPosition" class="form-control" required>
                                <option value="">Select Exco Position</option>
                                <option value="Central Ameer">Central Ameer</option>
                                <option value="Secretary General">Secretary General</option>
                                <option value="Central Ameera">Central Ameera</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="excoImage" class="form-label">Image</label>
                            <input type="file" class="form-control" id="excoImage" name="image" required>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-add-exco">Add Exco</button>
                            <input type="hidden" name="action" value="add" />
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

