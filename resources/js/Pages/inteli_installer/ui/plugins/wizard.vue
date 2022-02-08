<template>
    <div class="wizard-form float-over sec-bg-color card">
        <div class="wizard-header">
            <h3>Digitize Institution</h3>
            <p>Efficient School Management.</p>
        </div>
        <ul class="nav nav-tabs" id="install-wizard" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="sch_name-tab" data-bs-toggle="tab" data-bs-target="#sch_name" type="button" role="tab" aria-controls="home" aria-selected="true">School Name</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#sch_details" type="button" role="tab" aria-controls="sch_details" aria-selected="false">School Details</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#admin_details" type="button" role="tab" aria-controls="admin_details" aria-selected="false">Admin Details</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="payment-tab" data-bs-toggle="tab" data-bs-target="#payment" type="button" role="tab" aria-controls="payment" aria-selected="false">Payment</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="installation-tab" data-bs-toggle="tab" data-bs-target="#installation" type="button" role="tab" aria-controls="installation" aria-selected="false">Installation</button>
            </li>
        </ul>
        <div class="tab-content" id="install-wizard-steps">
            <div class="tab-pane fade show active" id="sch_name" role="tabpanel" aria-labelledby="sch_name-tab">
                <div class="row justify-content-center">
                    <div class="col-3">

                    </div>
                    <div class="col-6">
                        <div class="mb-3 mt-3">
                            <label for="sch_name" class="form-label">School Name</label>
                            <input type="text" class="form-control" id="sch_name" placeholder="...School">
                        </div>
                    </div>
                    <div class="col-3">

                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="sch_details" role="tabpanel" aria-labelledby="sch_details-tab">2</div>
            <div class="tab-pane fade" id="admin_details" role="tabpanel" aria-labelledby="admin_details-tab">3</div>
            <div class="tab-pane fade" id="payment" role="tabpanel" aria-labelledby="payment-tab">4</div>
            <div class="tab-pane fade" id="installation" role="tabpanel" aria-labelledby="installation-tab">5</div>
        </div>
    </div>
</template>

<style>
.float-over
{
    left: 30% !important;
    /*float: left !important;*/
    position: fixed;
}
#install-wizard-steps
{
    min-height: 50vh;
    min-width: 800px
}
</style>

<script>
export default {

}
</script>
