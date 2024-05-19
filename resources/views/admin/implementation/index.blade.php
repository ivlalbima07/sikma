@extends('admin.app')
@section('content')

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold  mb-4">SIKMA | PELAKSANAAN KERJASAMA</h4>

              <div class="row mb-4">
                <!--  Pricing -->
                <div class="col-12 col-sm-6 col-lg-4 mb-4">
                  <div class="card">
                    <div class="card-body text-center" style="width: 100%">
                      <i class="mb-3 ti ti-currency-dollar ti-lg"></i>
                      <h5>Dosen/Tenaga Ahli dari Dunia Kerja</h5>
                      <button
                        type="button"
                        class="btn btn-primary"
                        data-bs-toggle="modal"
                        data-bs-target="#pricingModal"
                      >
                        Show
                      </button>
                    </div>
                  </div>
                </div>
                <!--/  Pricing -->

                <!--  Add New Credit Card -->
                <div class="col-12 col-sm-6 col-lg-4 mb-4">
                  <div class="card">
                    <div class="card-body text-center">
                      <i class="mb-3 ti ti-credit-card ti-lg"></i>
                      <h5>Add New Credit Card</h5>
                      <p>Quickly collect the credit card details, built in input mask and form validation support.</p>
                      <button
                        type="button"
                        class="btn btn-primary"
                        data-bs-toggle="modal"
                        data-bs-target="#addNewCCModal"
                      >
                        Show
                      </button>
                    </div>
                  </div>
                </div>
                <!--/  Add New Credit Card -->

                <!--  Add New Address -->
                <div class="col-12 col-sm-6 col-lg-4 mb-4">
                  <div class="card">
                    <div class="card-body text-center">
                      <i class="mb-3 ti ti-home ti-lg"></i>
                      <h5>Add New Address</h5>
                      <p>Ready to use form to collect user address data with validation and custom input support.</p>
                      <button
                        type="button"
                        class="btn btn-primary"
                        data-bs-toggle="modal"
                        data-bs-target="#addNewAddress"
                      >
                        Show
                      </button>
                    </div>
                  </div>
                </div>
                <!--/  Add New Address -->

                <!--  Refer & Earn -->
                <div class="col-12 col-sm-6 col-lg-4 mb-4">
                  <div class="card">
                    <div class="card-body text-center">
                      <i class="mb-3 ti ti-gift ti-lg"></i>
                      <h5>Refer & Earn</h5>
                      <p>Use Refer & Earn modal to encourage your exiting customers refer their friends & colleague.</p>
                      <button
                        type="button"
                        class="btn btn-primary"
                        data-bs-toggle="modal"
                        data-bs-target="#referAndEarn"
                      >
                        Show
                      </button>
                    </div>
                  </div>
                </div>
                <!--/  Refer & Earn -->

                <!--  Edit User -->
                <div class="col-12 col-sm-6 col-lg-4 mb-4">
                  <div class="card">
                    <div class="card-body text-center">
                      <i class="mb-3 ti ti-user ti-lg"></i>
                      <h5>Edit User</h5>
                      <p>Easily update the user data on the go, built in form validation and custom controls.</p>
                      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editUser">
                        Show
                      </button>
                    </div>
                  </div>
                </div>
                <!--/  Edit User -->

                <!--  Enable OTP -->
                <div class="col-12 col-sm-6 col-lg-4 mb-4">
                  <div class="card">
                    <div class="card-body text-center">
                      <i class="mb-3 ti ti-device-mobile ti-lg"></i>
                      <h5>Enable OTP</h5>
                      <p>Use this modal to enhance your application security by enabling authentication with OTP.</p>
                      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#enableOTP">
                        Show
                      </button>
                    </div>
                  </div>
                </div>
                <!--/  Enable OTP -->

                <!--  Share Project -->
                <div class="col-12 col-sm-6 col-lg-4 mb-4">
                  <div class="card">
                    <div class="card-body text-center">
                      <i class="mb-3 ti ti-file-text ti-lg"></i>
                      <h5>Share Project</h5>
                      <p>Elegant Share Project options modal popup example, easy to use in any page</p>
                      <button
                        type="button"
                        class="btn btn-primary"
                        data-bs-toggle="modal"
                        data-bs-target="#shareProject"
                      >
                        Show
                      </button>
                    </div>
                  </div>
                </div>
                <!--/  Share Project -->

                <!--  Create App -->
                <div class="col-12 col-sm-6 col-lg-4 mb-4">
                  <div class="card">
                    <div class="card-body text-center">
                      <i class="mb-3 ti ti-box ti-lg"></i>
                      <h5>Create App</h5>
                      <p>Provide application data with this form to create your app, easy to use in page.</p>
                      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createApp">
                        Show
                      </button>
                    </div>
                  </div>
                </div>
                <!--/  Create App -->

                <!--  Two Factor Auth -->
                <div class="col-12 col-sm-6 col-lg-4">
                  <div class="card">
                    <div class="card-body text-center">
                      <i class="mb-3 ti ti-lock ti-lg"></i>
                      <h5>Two Factor Auth</h5>
                      <p>Enhance your application security by enabling two factor authentication.</p>
                      <button
                        type="button"
                        class="btn btn-primary"
                        data-bs-toggle="modal"
                        data-bs-target="#twoFactorAuth"
                      >
                        Show
                      </button>
                    </div>
                  </div>
                </div>
                <!--/  Two Factor Auth -->
              </div>
              <script src="../../assets//js/pages-pricing.js"></script>
            </div>
            <!-- / Content -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
@endsection