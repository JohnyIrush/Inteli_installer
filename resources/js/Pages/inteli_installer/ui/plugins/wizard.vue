<template>
    <div class="wizard-form float-over sec-bg-color card">

        <div class="wizard-header">
            <h3>Digitize Institution</h3>
            <p>Efficient School Management.</p>
        </div>
        <div class="card-body">
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
                                <label for="school_name" class="form-label">School Name</label>
                                <input  type="text" class="form-control" id="school_name" v-model="school.sch_name" placeholder="Enter School">
                            </div>
                        </div>
                        <div class="col-3">

                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="sch_details" role="tabpanel" aria-labelledby="sch_details-tab">
                    <div class="row justify-content-center">
                        <div class="col-3">

                        </div>
                        <div class="col-6">
                            <div class="row">
                                <div class="col-3">
                                    <p>School Logo</p>
                                </div>
                                <div class="col-6">
                                    <img src="/images/logo.png" class="rounded mx-auto d-block sch-logo-size" alt="Logo">
                                </div>
                                <div class="col-3">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                </div>
                                <div class="col-4">
                                    <button class="btn btn-sm btn-outline tertiary-bg-first-color">Upload</button>
                                </div>
                                <div class="col-4">
                                </div>
                            </div>
                        </div>
                        <div class="col-3">

                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-6">
                            <div>
                                <label for="sch_name"  >School Name</label>
                                <input type="text" class="mt-1 block w-full sch_name" v-model="school.sch_name" required autofocus autocomplete="name" >
                            </div>

                            <div class="mt-4">
                                <label for="sch_email" >School Email</label>
                                <input id="sch_email" type="email" class="mt-1 block w-full" v-model="school.sch_email" required >
                            </div>

                            <div class="mt-4">
                                <label for="sch_address" >School Address</label>
                                <input id="sch_address" type="text" class="mt-1 block w-full" v-model="school.sch_address" required >
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mt-4">
                                <label for="sch_phone" >School Phone</label>
                                <input id="sch_phone" type="tel" class="mt-1 block w-full" v-model="school.sch_phone" required >
                            </div>

                            <div class="mt-4">
                                <label for="sch_location" >School Location</label>
                                <input id="sch_location" type="text" class="mt-1 block w-full" v-model="school.sch_location" required >
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="admin_details" role="tabpanel" aria-labelledby="admin_details-tab">
                    <div class="row justify-content-center">
                        <div class="col-3">

                        </div>
                        <div class="col-6">
                            <div>
                                <label for="name"  >Name</label>
                                <input id="name" type="text" class="mt-1 block w-full" v-model="admin.name" required autofocus autocomplete="name" >
                            </div>

                            <div class="mt-4">
                                <label for="email" >Email</label>
                                <input id="email" type="email" class="mt-1 block w-full" v-model="admin.email" required >
                            </div>

                            <div class="mt-4">
                                <label for="phone" >Phone</label>
                                <input id="phone" type="tel" class="mt-1 block w-full" v-model="admin.phone" resquired >
                            </div>
                        </div>
                        <div class="col-3">

                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="payment" role="tabpanel" aria-labelledby="payment-tab">
                    <div class="row mt-5">
                        <div class="col-3">
                            <button class="btn text-white  btn-outline tertiary-bg-color">M-pesa  </button>
                        </div>
                        <div class="col-3">
                            <button class="btn text-white  btn-outline tertiary-bg-color">Stripe <i class="fab fa-cc-stripe fa-2x"></i></button>
                        </div>
                        <div class="col-3">
                            <button class="btn text-white  btn-outline tertiary-bg-color">PayPal <i class="fab fa-cc-paypal fa-2x"></i></button>
                        </div>
                        <div class="col-3">
                            <button class="btn text-white  btn-outline tertiary-bg-color">Google Pay <i class="fab fa-google-pay fa-2x"></i></button>
                        </div>
                    </div>
                    <hr class="bg-dark">
                    <div class="row mt-5">
                        <div class="col-3">
                        </div>
                        <div class="col-6">
                            <button class="btn text-white btn-lg  btn-outline tertiary-bg-first-color" type="button" data-bs-toggle="collapse" data-bs-target="#inteli_code" aria-expanded="false" aria-controls="inteli_code">Paid Already</button>
                            <div class="col">
                                <div class="collapse multi-collapse" id="inteli_code">
                                    <div class="card card-body">
                                        <div class="mt-4">
                                            <label for="intelicode" >Inteli System Code</label>
                                            <input id="intelicode" type="text" class="mt-1 block w-full" v-model="school.inteli_code" placeholder="Enter Inteli System Code" required >
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="installation" role="tabpanel" aria-labelledby="installation-tab">

                </div>
            </div>
        </div>
        <div class="card-footer">
            <div class="row justify-content-end">
                <div class="col">
                    <button class="btn  btn-outline tertiary-bg-first-color">Back</button>
                </div>
                <div class="col">
                    <button class="btn  btn-outline tertiary-bg-first-color">Next</button>
                </div>
            </div>
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
    min-height: 60vh;
    min-width: 800px
}
</style>

<script>
export default {
    data() {
        return {
            school: this.$inertia.form({
                sch_name: '',
                sch_email: '',
                sch_address: '',
                sch_phone: -1,
                sch_location: '',
                inteli_code: ''
            }),
            admin: this.$inertia.form({
                sch_name: '',
                sch_email: '',
                sch_address: '',
                sch_phone: -1,
                sch_location: ''
            }),
        }
    },
}
</script>
