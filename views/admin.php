<main>
    <div class="row">
        <div class="col-3">
            <?php require 'components/navbar/sidebar.php' ?>
        </div>
        <div class="col-9">

            <div class="tab-content" id="myTabContent">
  
                <h2>Dashboard</h2>


                <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab"
                    tabindex="0">

                    <div class="container mt-5">
                        <div class="card">
                            <div class="card-body">

                                <!-- agregar items -->
                                <div class="d-flex">
                                    <div class="p-2 w-100"></div>
                                    <div class="p-2 flex-shrink-1">
                                        <button class="btn btn-sm btn-dark">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                    </div>
                                </div>

                                <!-- listado items -->
                                <?php include 'components/tables/tableHorarios.php' ?>

                            </div>
                        </div>
                    </div>

                </div>
                
                <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab"
                    tabindex="0">...</div>
                <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab"
                    tabindex="0">...</div>
                <div class="tab-pane fade" id="disabled-tab-pane" role="tabpanel" aria-labelledby="disabled-tab"
                    tabindex="0">...</div>
            </div>

        </div>
    </div>
</main>