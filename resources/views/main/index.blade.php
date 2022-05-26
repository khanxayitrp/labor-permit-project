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

        <div class="col-xl-12 col-lg-12 col-md-12 col-12">
            <!-- card -->

            <div class="card mb-6">
                <!-- card body -->
                <div class="card-body">
                    <div class="mb-6">
                        <h1 class="mb-1 text-center">ລາຍຊື່ພະນັກງານທັງໝົດ </h1>

                    </div>
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
                        <table id="selected" class="table table-bordered table-striped">
                            <thead>
                                <!--  <th><input type='checkbox' id='checkAll'> Check</th> -->
                                <th>ລະຫັດພະນັກງານ</th>
                                <th>ຊື່ພະນັກງານ</th>
                                <th>ນາມສະກຸນ</th>
                                <th>email</th>
                                <!-- <th>ວັນເດືອນປີໝົດອາຍຸ</th> -->
                                <!-- <th>ລະຫັດຜ່ານ</th> -->
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
                                    <!-- <td>{{ $user->expiredDate }}</td> -->
                                    <!-- <td>{{ $user->password }}</td> -->
                                    <td>{{ $user->address }}</td>
                                    <td>{{ $user->permission }}</td>
                                    <td>

                                        <a href="javascript:void(0)" class="btn btn-info" id="edit_data"
                                            data-toggle="modal" data-id="{{ $user->id }}"
                                            data-target="editModal">ແກ້ໄຂ</a>
                                        <form data-route="{{route('admin.destroy',$user->id)}} method=" post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" id="delete-data"
                                                class="btn btn-xs btn-danger btn-flat" data-id="{{ $user->id }}"
                                                data-toggle="tooltip">ລົບ</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>


                    </p>
                    <!-- </div> -->
                </div>
            </div>

        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{ route('admin.store') }}">
                        <input type="hidden" name="empID">
                        @csrf
                        <div class="mb-3 row">
                            <div class="fallback">
                                <input name="file" type="file" multiple />
                            </div>
                            <label for="Topic" class="form-label">ຮູບພາບປະຈຳຕົວ</label>

                            <img alt="avatar" class="img-fluid" style="width: auto; height: 200px;" />

                        </div>

                        <div class="mb-3 row">
                            <label for="fullName" class="col-sm-4 col-form-label
                    form-label">ຊື່ ແລະ ນາມສະກຸນ</label>
                            <div class="col-sm-4 mb-3 mb-lg-0">
                                <input type="text" class="form-control" placeholder="First name" name="firstName"
                                    required>
                            </div>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" placeholder="Last name" name="lastName"
                                    required>
                            </div>

                        </div>
                        <!-- row -->
                        <div class="mb-3 row">
                            <label for="address" class="col-sm-4 col-form-label
                          form-label">password</label>
                            <div class="col-md-8 col-12">
                                <input type="text" class="form-control" placeholder="password" name="password" required>
                            </div>
                        </div>

                        <!--  <div class="mb-3 row">
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
                        </div> -->

                        <!-- row -->
                        <div class="mb-3 row">
                            <label for="Email" class="col-sm-4 col-form-label
                          form-label">Email</label>
                            <div class="col-md-8 col-12">
                                <input type="email" class="form-control" name="email" required>
                            </div>
                        </div>


                        <!-- row -->
                        <div class="mb-3 row">
                            <label for="permission" class="col-sm-4 col-form-label
                          form-label">ສິດທິໃນການເຂົ້າສູ່ລະບົບ</label>
                            <div class="col-md-8 col-12">
                                <select class="form-select" name="permission" required>
                                    <option selected>ກະລຸນາກຳນົດ ສິດໃຫ້ຜູ້ໃຊ້</option>
                                    @foreach ($data1 as $val)
                                    <option value="{{$val->id}}">{{$val->usertype_name}}</option>
                                    @endforeach

                                </select>
                            </div>
                        </div>
                        <!-- row -->
                        <div class="mb-3 row">
                            <label for="address" class="col-sm-4 col-form-label
                          form-label">ທີ່ຢູ່</label>
                            <div class="col-md-8 col-12">
                                <input type="text" class="form-control" placeholder="address" name="address" required>
                            </div>
                        </div>
                        <!-- row -->
                        <!-- <div class="mb-3 row">
                            <label for="RegisterDate" class="col-sm-4 col-form-label
                          form-label">ວັນເດືອນປີເປັນສະມາຊິກ</label>
                            <div class="col-md-8 col-12">
                                <input type="date" class="form-control" name="RegisterDate" id="RegisterDate" required>
                            </div>
                        </div>
                        <!-- row -->
                        <!--  <div class="mb-3 row">
                            <label for="expiredDate" class="col-sm-4 col-form-label
                          form-label">ວັນເດືອນປີໝົດອາຍຸ</label>
                            <div class="col-md-8 col-12">
                                <input type="date" class="form-control" name="expiredDate" id="expiredDate" required>
                            </div>
                        </div> -->

                        <div class="col-12">
                            <input type="submit" class="btn btn-primary d-grid" id="bt_save">

                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button> -->
                </div>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabe2">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form id="form_id">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="empID" id="empID" value="">
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
                                <input type="text" class="form-control" placeholder="First name" name="firstName"
                                    id="firstName" value="">
                            </div>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" placeholder="Last name" name="lastName"
                                    id="lastName" value="">
                            </div>

                        </div>
                        <!-- row -->
                        <div class="mb-3 row">
                            <label for="address" class="col-sm-4 col-form-label
                          form-label">password</label>
                            <div class="col-md-8 col-12">
                                <input type="text" class="form-control" placeholder="password" name="password"
                                    id="password" required>
                            </div>
                        </div>

                        <!--  <div class="mb-3 row">
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
 -->
                        <!-- row -->
                        <div class="mb-3 row">
                            <label for="Email" class="col-sm-4 col-form-label
                          form-label">Email</label>
                            <div class="col-md-8 col-12">
                                <input type="email" class="form-control" name="email" id="email" value="">
                            </div>
                        </div>


                        <!-- row -->
                        <div class="mb-3 row">
                            <label for="permission" class="col-sm-4 col-form-label
                          form-label">ສິດທິໃນການເຂົ້າສູ່ລະບົບ</label>
                            <div class="col-md-8 col-12">
                                <select class="form-select" name="permission" id="permission" required>
                                    <option selected>ກະລຸນາກຳນົດ ສິດໃຫ້ຜູ້ໃຊ້</option>
                                    @foreach ($data1 as $val)
                                    <option value="{{$val->id}}">{{$val->usertype_name}}</option>
                                    @endforeach

                                </select>
                            </div>
                        </div>
                        <!-- row -->
                        <div class="mb-3 row">
                            <label for="address" class="col-sm-4 col-form-label
                          form-label">ທີ່ຢູ່</label>
                            <div class="col-md-8 col-12">
                                <input type="text" class="form-control" placeholder="address" name="address"
                                    id="address" value="">
                            </div>
                        </div>
                        <!-- row -->
                        <!-- <div class="mb-3 row">
                            <label for="RegisterDate" class="col-sm-4 col-form-label
                          form-label">ວັນເດືອນປີເປັນສະມາຊິກ</label>
                            <div class="col-md-8 col-12">
                                <input type="date" class="form-control" name="RegisterDate" id="RegisterDate" required>
                            </div>
                        </div>
                        <!-- row -->
                        <!--  <div class="mb-3 row">
                            <label for="expiredDate" class="col-sm-4 col-form-label
                          form-label">ວັນເດືອນປີໝົດອາຍຸ</label>
                            <div class="col-md-8 col-12">
                                <input type="date" class="form-control" name="expiredDate" id="expiredDate" required>
                            </div>
                        </div> -->

                        <div class="col-12">
                            <input type="submit" class="btn btn-primary d-grid" id="bt_update">

                        </div>
                    </form>


                </div>
                <div class="modal-footer">
                    <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button> -->
                </div>
            </div>
        </div>
    </div>

    @endsection

    @push('js')
    <script>
    $.noConflict(true);
    $(document).ready(function() {
        $('#selected').DataTable();

    });
    /* When click New User button */
    $('#addEMP').click(function(e) {
        e.preventDefault();
        $('#bt_save').val("ບັນທຶກ");
        $('#myModal').modal('show');
    });

    /* Edit User */
    $('body').on('click', '#edit_data', function(event) {
        event.preventDefault();
        var id = $(this).data('id');
        $('#bt_update').val("ບັນທຶກ");
        console.log(id);
        $('#editModal').modal('show');
        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function() {
            return $(this).text();

        }).get();
        console.log(data);
        $('#empID').val(id);
        $('#firstName').val(data[1]);
        $('#lastName').val(data[2]);
        $('#email').val(data[3]);
        $('#address').val(data[4]);
        $('#permission').val(data[5]);
    });
    /* submit form edit */
    $('#form_id').on('submit', function(e) {
        e.preventDefault();
        var id = $('#empID').val();

        $.ajax({
            type: "PUT",
            url: "admin/" + id,
            data: $('#form_id').serialize(),
            success: function(response) {
                console.log(response);
                $('#editModal').modal('hide');
                swal.fire({
                    icon: "success",
                    //button: false,
                    showDenyButton: false,
                    showCancelButton: false,
                    text: response.message
                });
                window.location.reload();
            },
            error: function(error) {
                console.log(error);
            }
        });

    });
    /* Edit customer */
    $('body').on('click', '#delete-data', function(event) {
        event.preventDefault();
        var id = $(this).data('id');
        event.preventDefault(); //this will hold the url
        swal.fire({
                icon: 'warning',
                title: 'ທ່ານຕ້ອງການລືບຂໍ້ມູນຜູ້ໃຊ້ນີ້ບໍ?',
                showDenyButton: false,
                showCancelButton: true,
                confirmButtonText: 'Yes'
            })
            .then((result) => {
                if (result.isConfirmed) {
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        type: 'DELETE',
                        url: "{{route('admin.store')}}" + '/' + id,
                        success: function(response) {
                            $('#msg').text(response.message);
                            swal.fire({
                                icon: "success",
                                //button: false,
                                showDenyButton: false,
                                showCancelButton: false,
                                text: response.message
                            });

                            location.reload(true); //this will release the event
                        }
                    });
                } else {
                    swal.fire("ການດຳເນີນການຖືກຍົກເລີກ!");
                }
            });
    });
    </script>

    @endpush