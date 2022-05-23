@extends('layout')

@section('content')

<!-- Container fluid -->
<div class="container-fluid px-6 py-4">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-12">
            <!-- Page header -->
            <div>
                <div class="border-bottom pb-4 mb-4 d-flex align-items-center
                  justify-content-between">
                    <div class="mb-2 mb-lg-0">
                        <h3 class="mb-0 fw-bold">ຈັດການຂໍ້ມູນຜູ້ຮັບຜິດຊອບ</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- row -->
    <div class="row">
        <!-- <div class="col-xl-2 col-lg-3 col-md-12 col-12">
            <div class="mb-4 mb-lg-0">
                <h4 class="mb-1">ເລືອກຜູ້ລົງສະໝັກສຳລັບການໂຫວດ</h4>
                <p class="mb-0 fs-5 text-muted">Select Candidate</p>
            </div>

        </div> -->

        <div class="col-xl-12 col-lg-12 col-md-12 col-12">
            <!-- card -->

            <div class="card mb-6">
                <!-- card body -->
                <div class="card-body">
                    <div class="mb-6">
                        <h1 class="mb-1 text-center">ລາຍຊື່ພະນັກງານທັງໝົດ </h1>

                    </div>
                    <div class="table-responsive">
                        <!-- text -->
                        <form id="add_officer" method='post' action='' enctype="multipart/form-data">

                            <p><button type="button" class="btn btn-primary btn-lg" id="addEMP" data-toggle="modal"
                                    data-target="#myModal">ເພີ້ມ</button></p>

                            <br />
                            <br />
                            @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p id="msg">{{ $message }}</p>
                            </div>
                            @endif


                            <div class="table-responsive">
                                <table id="selected" class="table table-bordered table-striped table-hovered">
                                    <thead>
                                        <!--  <th><input type='checkbox' id='checkAll'> Check</th> -->
                                        <th>ລະຫັດພະນັກງານ</th>
                                        <th>ຊື່ພະນັກງານ</th>
                                        <th>ນາມສະກຸນ</th>
                                        <th>email</th>
                                        <th>ວັນເດືອນປີໝົດອາຍຸ</th>
                                        <th>ລະຫັດຜ່ານ</th>
                                        <th>ທີ່ຢູ່</th>
                                        <th>ສິດເຂົ້ານຳໃຊ້</th>
                                        <th>action</th>
                                    </thead>
                                    <tbody>
                                    @foreach ($data as $key => $user)
                                        <tr>
                                            <!-- <td><input type='checkbox' name='update[]' value=''></td> -->
                                            <td>{{ $user->id }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->lname }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->expiredDate }}</td>
                                            <td>{{ $user->password }}</td>
                                            <td>{{ $user->address }}</td>
                                            <td>{{ $user->permission }}</td>
                                            <td>
                                                <form action="{{ route('admin.home') }}" method="post"></form>
                                                <a href="javascript:void(0)" class="btn btn-info" id="edit_data" data-toggle="modal" data-id="{{ $user->id }}">ແກ້ໄຂ</a>
                                                @csrf
                                                <a href=" #" id="delete-data" data-id="{{ $user->id }}"  class="btn btn-danger">ລົບ</a>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </form>

                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="myModalLabel" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header p-5">
                    <div>
                        <h4 class="mb-1" id="editorModalLabel">ຂໍ້ມູນພຶ້ນຖານ
                        </h4>
                        <p class="mb-0">ກະລຸນາຕື່ມຂໍ້ມູນ ຂ້າງລຸ່ມນີ້ໃຫ້ຖືກຕ້ອງ.</p>
                    </div>

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">

                    </button>
                </div>
                <div class="modal-body p-5">
                    <form class="form-horizontal" method="post" id="addEMPform" action="" enctype="multipart/form-data">
                        <input type="hidden" name="empID" id="empID">
                        @csrf
                        <div class="mb-3 row">
                            <div class="fallback">
                                <input name="file" id="imgInp" type="file" multiple />
                            </div>
                            <label for="Topic" class="form-label">ຮູບພາບປະຈຳຕົວ</label>

                            <img alt="avatar" class="img-fluid" style="width: auto; height: 200px;" id='img-upload' />

                        </div>

                        <div class="mb-3 row">
                            <label for="fullName" class="col-sm-4 col-form-label
                    form-label">ຊື່ ແລະ ນາມສະກຸນ</label>
                            <div class="col-sm-4 mb-3 mb-lg-0">
                                <input type="text" class="form-control" placeholder="First name" name="firstname"
                                    id="firstName" required>
                            </div>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" placeholder="Last name" name="lastName"
                                    id="lastName" required>
                            </div>

                        </div>

                        <div class="mb-3 row">
                            <label class="col-sm-4 col-form-label form-label">ເພດ</label>
                            <div class="col-md-8 col-12">
                                <div class="form-check custom-radio
                      form-check-inline">
                                    <input type="radio" id="SexM" name="Sex" class="form-check-input" value="M" checked>
                                    <label class="form-check-label" for="SexM">ຊາຍ
                                    </label>
                                </div>
                                <div class="form-check custom-radio
                      form-check-inline">
                                    <input type="radio" id="SexF" name="Sex" class="form-check-input" value="F">
                                    <label class="form-check-label" for="SexF">ຍິງ</label>
                                </div>
                            </div>
                        </div>


                        <!-- row -->
                        <div class="mb-3 row">
                            <label for="email" class="col-sm-4 col-form-label
                          form-label">ວັນເດືອນປີເກີດ</label>
                            <div class="col-md-8 col-12">
                                <input type="date" class="form-control" name="birthdate" id="birthdate" required>
                            </div>
                        </div>
                        <!-- row -->
                        <div class="mb-3 row">
                            <label for="Email" class="col-sm-4 col-form-label
                          form-label">Email</label>
                            <div class="col-md-8 col-12">
                                <input type="text" class="form-control" name="email" id="email" required>
                            </div>
                        </div>


                        <!-- row -->
                        <div class="mb-3 row">
                            <label for="permission" class="col-sm-4 col-form-label
                          form-label">ສິດທິໃນການເຂົ້າສູ່ລະບົບ</label>
                            <div class="col-md-8 col-12">
                                <select class="form-select" name="permission" id="permission" required>
                                    <option selected>ກະລຸນາກຳນົດ ສິດໃຫ້ຜູ້ໃຊ້</option>

                                </select>
                            </div>
                        </div>
                        <!-- row -->
                        <div class="mb-3 row">
                            <label for="address" class="col-sm-4 col-form-label
                          form-label">ທີ່ຢູ່</label>
                            <div class="col-md-8 col-12">
                                <textarea name="address" id="address" cols="53" rows="5" style="resize: none;"
                                    Required></textarea>
                            </div>
                        </div>
                        <!-- row -->
                        <div class="mb-3 row">
                            <label for="RegisterDate" class="col-sm-4 col-form-label
                          form-label">ວັນເດືອນປີເປັນສະມາຊິກ</label>
                            <div class="col-md-8 col-12">
                                <input type="date" class="form-control" name="RegisterDate" id="RegisterDate" required>
                            </div>
                        </div>
                        <!-- row -->
                        <div class="mb-3 row">
                            <label for="expiredDate" class="col-sm-4 col-form-label
                          form-label">ວັນເດືອນປີໝົດອາຍຸ</label>
                            <div class="col-md-8 col-12">
                                <input type="date" class="form-control" name="expiredDate" id="expiredDate" required>
                            </div>
                        </div>

                        <div class="col-12">
                            <input type="submit" class="btn btn-primary d-grid" id="bt_save">

                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    @endsection

    @push('js')
    <script>
    $(document).ready(function() {
/*         $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        }); */
    });

    $(document).on('click', '#addEMP', function(e) {
        e.preventDefault();

        $('#bt_save').val("ບັນທຶກ");
        $('#myModal').modal("show");
        $('#empID').val('');
    });
    </script>
    @endpush