@extends('layout')

@section('content')
        <!-- Container fluid -->
        <div class="bg-primary pt-10 pb-21"></div>
        <div class="container-fluid mt-n22 px-6">

          <!-- ສັງລວມຈຳນວນຄົນໂຫວດຄະແນນ -->
          <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
              <!-- Page header -->
              <div>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="mb-2 mb-lg-0">
                    <h3 class="mb-0 fw-bold text-white">Projects</h3>
                  </div>
                  <div>
                    <!-- <a href="#" class="btn btn-white" data-bs-toggle="modal" data-bs-target="#billingAddressModal">Create New Project</a> -->
                  </div>
                </div>
              </div>
            </div>
            <div id="show1" class="col-xl-3 col-lg-6 col-md-12 col-12 mt-6">
              <!-- card -->
              <div class="card rounded-3">
                <!-- card body -->
                <div class="card-body">
                  <!-- heading -->
                  <div class="d-flex justify-content-between align-items-center
                    mb-3">
                    <div>
                      <h4 class="mb-0">Projects</h4>
                    </div>
                    <div class="icon-shape icon-md bg-light-primary text-primary
                      rounded-1">
                      <i class="bi bi-briefcase fs-4"></i>
                    </div>
                  </div>
                  <!-- project number -->
                  <div>
                    <h1 class="fw-bold">18</h1>
                    <p class="mb-0"><span class="text-dark me-2">2</span>Completed</p>
                  </div>
                </div>
              </div>
            </div>
            <div id="show2" class="col-xl-3 col-lg-6 col-md-12 col-12 mt-6">
              <!-- card -->
              <div class="card rounded-3">
                <!-- card body -->
                <div class="card-body">
                  <!-- heading -->
                  <div class="d-flex justify-content-between align-items-center
                    mb-3">
                    <div>
                      <h4 class="mb-0">Active Task</h4>
                    </div>
                    <div class="icon-shape icon-md bg-light-primary text-primary
                      rounded-1">
                      <i class="bi bi-list-task fs-4"></i>
                    </div>
                  </div>
                  <!-- project number -->
                  <div>
                    <h1 class="fw-bold">132</h1>
                    <p class="mb-0"><span class="text-dark me-2">28</span>Completed</p>
                  </div>
                </div>
              </div>
            </div>
            <div id="show3" class="col-xl-3 col-lg-6 col-md-12 col-12 mt-6">
              <!-- card -->
              <div class="card rounded-3">
                <!-- card body -->
                <div class="card-body">
                  <!-- heading -->
                  <div class="d-flex justify-content-between align-items-center
                    mb-3">
                    <div>
                      <h4 class="mb-0">Teams</h4>
                    </div>
                    <div class="icon-shape icon-md bg-light-primary text-primary
                      rounded-1">
                      <i class="bi bi-people fs-4"></i>
                    </div>
                  </div>
                  <!-- project number -->
                  <div>
                    <h1 class="fw-bold">12</h1>
                    <p class="mb-0"><span class="text-dark me-2">1</span>Completed</p>
                  </div>
                </div>
              </div>

            </div>
            <div id="show4" class="col-xl-3 col-lg-6 col-md-12 col-12 mt-6">
              <!-- card -->
              <div class="card rounded-3">
                <!-- card body -->
                <div class="card-body">
                  <!-- heading -->
                  <div class="d-flex justify-content-between align-items-center
                    mb-3">
                    <div>
                      <h4 class="mb-0">Productivity</h4>
                    </div>
                    <div class="icon-shape icon-md bg-light-primary text-primary
                      rounded-1">
                      <i class="bi bi-bullseye fs-4"></i>
                    </div>
                  </div>
                  <!-- project number -->
                  <div>
                    <h1 class="fw-bold">76%</h1>
                    <p class="mb-0"><span class="text-success me-2">5%</span>Completed</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- ຕາຕະລາງສຳລັບສະແດງຜົນການໂຫວດ -->
          
          <!-- row  -->
          <div class="row mt-6">
            <div class="col-md-12 col-12">
              <!-- card  -->
              <div class="card">
                <!-- card header  -->
                <div class="card-header bg-white border-bottom-0 py-4">
                  <h4 class="mb-0">Active Projects</h4>
                </div>

                  <!-- text -->
                  
                <div class="card-body">
                  <form id ="update_form" method='POST' action='' enctype="multipart/form-data">
                <p><input type='submit' value='ຕິດຕາມຜົນການໂຫວດ' class="btn btn-success" name='but_update'></p>
                
                    <br />
                    <div class="mb-3 row">
                      <label for="topic" class="col-sm-4 col-form-label
                          form-label">ຫົວຂໍ້ການໂຫວດ <span class="text-muted">(ຕ້ອງເລືອກ)</span></label>
                      <div class="col-md-8 col-12">
                      <select class="form-select" name="TopicVote"  required>
                            <option value=0 selected>ກະລຸນາເລືອກ ຫົວຂໍ້ການໂຫວດ</option>
                        </select>
                      </div>
                    </div>
                <!-- table  -->
                <div id="show5" class="table-responsive">
          
                </div>

                </form>
                </div>  

                <!-- card footer  -->
                <div class="card-footer bg-white text-center">
                  <a href="#">View All Projects</a>

                </div>
              </div>

            </div>
          </div>



        </div>



      </div>
    </div>

  <!-- Billing Address Modal -->
  <div class="modal fade" id="billingAddressModal" tabindex="-1" aria-labelledby="billingAddressModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header p-5">
          <div>
            <h4 class="mb-1" id="billingAddressModalLabel">Billing Address
            </h4>
            <p class="mb-0">Please provide the billing address with the credit card you ve provided.</p>
          </div>

          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">

          </button>
        </div>
        <div class="modal-body p-5">
          <form class="row">
            <div class="mb-3 col-12">
              <label for="country" class="form-label">Country</label>
              <select class="form-select" id="country">
                <option selected>India</option>
                <option value="US">US</option>
                <option value="UK">UK</option>
                <option value="UAE">UAE</option>
              </select>

            </div>
            <div class="mb-3 col-12">
              <label for="addressOne" class="form-label">Address line 1</label>
              <input type="text" class="form-control" placeholder="123 Ocean Ave" id="addressOne" required>

            </div>
            <div class="mb-3 col-12">
              <label for="addressTwo" class="form-label">Address line 2</label>
              <input type="text" class="form-control" placeholder="123 Ocean Ave" id="addressTwo" required>

            </div>
            <div class="mb-3 col-12">
              <label for="city" class="form-label">City</label>
              <select class="form-select" id="city">
                <option selected>Ahmedabad</option>
                <option value="New York">New York</option>
                <option value="Los Angeles">Los Angeles</option>
                <option value="Chicago">Chicago</option>
              </select>

            </div>
            <div class="mb-3 col-md-6 col-12">
              <label for="state" class="form-label">State</label>
              <input class="form-control" type="text" placeholder="Gujarat" id="state" required>
            </div>
            <div class="mb-3 col-md-6 col-12">
              <label for="zipCode" class="form-label">Zip/Postal Code</label>
              <input class="form-control" type="text" placeholder="000000" id="zipCode" required>
            </div>
            <div class="col-12 mb-3">
              <div class="form-check custom-checkbox">
                <input type="checkbox" class="form-check-input" id="customCheckAddress">
                <label class="form-check-label" for="customCheckAddress">Make this my default payment
                  method.</label>
              </div>
            </div>
            <div class="col-12">
              <button type="submit" class="btn btn-primary d-grid">Save
                Address</button>

            </div>
          </form>
        </div>

      </div>
    </div>
  </div>


@endsection



@push('js')

  <!-- <script>
  $(document).ready(function () {

	setInterval(function(){
    console.log(Topic);
		$('#show5').load("refresh_score_2.php?TopicID=" + Topic +"&role=" + role).fadeIn("slow");
	},3000);
	
  


});
function addScore(id){
    var xhr = new XMLHttpRequest();
      xhr.open('GET', 'AddScore.php?id=' + id);
      xhr.onload = function() {
          if (xhr.status === 200) {
              alert('ຄະແນນເພີ້ມຂຶ້ນ');
          }
          else {
              alert('Request failed.  Returned status of ' + xhr.status);
          }
      };
      xhr.send();

  }
function minusScore(id){
    var xhr = new XMLHttpRequest();
      xhr.open('GET', 'MinusScore.php?id=' + id);
      xhr.onload = function() {
          if (xhr.status === 200) {
            alert('ຄະແນນລຸດລົງ');
          }
          else {
              alert('Request failed.  Returned status of ' + xhr.status);
          }
      };
      xhr.send();
    
}
</script>
 -->

@endpush
