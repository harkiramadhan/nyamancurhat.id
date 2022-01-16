<div class="content flex-row-fluid mb-3 mb-lg-20 pb-3 pb-lg-10" id="kt_content">
    <!--begin::Layout-->
    <div class="d-flex flex-column flex-lg-row">
        <!--begin::Content-->
        <div class="flex-lg-row-fluid ms-lg-7 ms-xl-10">

            <?php if($coach->num_rows() > 0): ?>
                <input type="hidden" id="userid" value="<?= $coach->row()->id ?>">
                <div class="card-message">
                    <div class="text-center m-20" id="spinner-card-message">
                        <img src="<?= base_url('assets/img/loader.svg') ?>" alt="" class="mb-3" style="height: 75px;"> <br>
                        <small class="fs-5 fw-bolder text-gray-900 text-hover-primary">Loading Messages...</small>
                    </div>
                </div>
            <?php else: ?>
            <?php endif; ?>
        </div>
        <!--end::Content-->
    </div>
    <!--end::Layout-->
</div>