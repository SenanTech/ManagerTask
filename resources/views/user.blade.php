@extends('navbar')
@extends('sidebar')
@extends('body')
@section('contenu')
    <div class="container-fluid px-4">
        <div class="card">
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>User</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Groups</th>
                            <th>Joined Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>User</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Groups</th>
                            <th>Joined Date</th>
                            <th>Actions</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="avatar me-2"><img class="avatar-img img-fluid"
                                            src="assets/img/illustrations/profiles/profile-1.png" /></div>
                                    Tiger Nixon
                                </div>
                            </td>
                            <td><a href="cdn-cgi/l/email-protection.html" class="__cf_email__"
                                    data-cfemail="fe8a97999b8cbe9b939f9792d09d9193">[email&#160;protected]</a></td>
                            <td>Administrator</td>
                            <td>
                                <span class="badge bg-green-soft text-green">Sales</span>
                                <span class="badge bg-blue-soft text-blue">Developers</span>
                                <span class="badge bg-red-soft text-red">Marketing</span>
                                <span class="badge bg-purple-soft text-purple">Managers</span>
                                <span class="badge bg-yellow-soft text-yellow">Customer</span>
                            </td>
                            <td>20 Jun 2021</td>
                            <td>
                                <a class="btn btn-datatable btn-icon btn-transparent-dark me-2"
                                    href="user-management-edit-user.html"><i data-feather="edit"></i></a>
                                <a class="btn btn-datatable btn-icon btn-transparent-dark" href="#!"><i
                                        data-feather="trash-2"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="avatar me-2"><img class="avatar-img img-fluid"
                                            src="assets/img/illustrations/profiles/profile-2.png" /></div>
                                    Garrett Winters
                                </div>
                            </td>
                            <td><a href="cdn-cgi/l/email-protection.html" class="__cf_email__"
                                    data-cfemail="b6d1c1dfd8c2d3c4c5d3f6d3dbd7dfda98d5d9db">[email&#160;protected]</a></td>
                            <td>Administrator</td>
                            <td>
                                <span class="badge bg-green-soft text-green">Sales</span>
                                <span class="badge bg-blue-soft text-blue">Developers</span>
                                <span class="badge bg-red-soft text-red">Marketing</span>
                                <span class="badge bg-purple-soft text-purple">Managers</span>
                                <span class="badge bg-yellow-soft text-yellow">Customer</span>
                            </td>
                            <td>20 Jun 2021</td>
                            <td>
                                <a class="btn btn-datatable btn-icon btn-transparent-dark me-2"
                                    href="user-management-edit-user.html"><i data-feather="edit"></i></a>
                                <a class="btn btn-datatable btn-icon btn-transparent-dark" href="#!"><i
                                        data-feather="trash-2"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="avatar me-2"><img class="avatar-img img-fluid"
                                            src="assets/img/illustrations/profiles/profile-3.png" /></div>
                                    Ashton Cox
                                </div>
                            </td>
                            <td><a href="cdn-cgi/l/email-protection.html" class="__cf_email__"
                                    data-cfemail="f796849f83989994b7929a969e9bd994989a">[email&#160;protected]</a></td>
                            <td>Registered</td>
                            <td>
                                <span class="badge bg-green-soft text-green">Sales</span>
                                <span class="badge bg-red-soft text-red">Marketing</span>
                            </td>
                            <td>20 Jun 2021</td>
                            <td>
                                <a class="btn btn-datatable btn-icon btn-transparent-dark me-2"
                                    href="user-management-edit-user.html"><i data-feather="edit"></i></a>
                                <a class="btn btn-datatable btn-icon btn-transparent-dark" href="#!"><i
                                        data-feather="trash-2"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="avatar me-2"><img class="avatar-img img-fluid"
                                            src="assets/img/illustrations/profiles/profile-4.png" /></div>
                                    Cedric Kelly
                                </div>
                            </td>
                            <td><a href="cdn-cgi/l/email-protection.html" class="__cf_email__"
                                    data-cfemail="23404647514a4048464f63464e424a4f0d404c4e">[email&#160;protected]</a></td>
                            <td>Registered</td>
                            <td>
                                <span class="badge bg-green-soft text-green">Sales</span>
                                <span class="badge bg-purple-soft text-purple">Managers</span>
                            </td>
                            <td>20 Jun 2021</td>
                            <td>
                                <a class="btn btn-datatable btn-icon btn-transparent-dark me-2"
                                    href="user-management-edit-user.html"><i data-feather="edit"></i></a>
                                <a class="btn btn-datatable btn-icon btn-transparent-dark" href="#!"><i
                                        data-feather="trash-2"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="avatar me-2"><img class="avatar-img img-fluid"
                                            src="assets/img/illustrations/profiles/profile-5.png" /></div>
                                    Airi Satou
                                </div>
                            </td>
                            <td><a href="cdn-cgi/l/email-protection.html" class="__cf_email__"
                                    data-cfemail="badbc9dbced5cffadfd7dbd3d694d9d5d7">[email&#160;protected]</a></td>
                            <td>Registered</td>
                            <td><span class="badge bg-yellow-soft text-yellow">Customer</span></td>
                            <td>20 Jun 2021</td>
                            <td>
                                <a class="btn btn-datatable btn-icon btn-transparent-dark me-2"
                                    href="user-management-edit-user.html"><i data-feather="edit"></i></a>
                                <a class="btn btn-datatable btn-icon btn-transparent-dark" href="#!"><i
                                        data-feather="trash-2"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="avatar me-2"><img class="avatar-img img-fluid"
                                            src="assets/img/illustrations/profiles/profile-6.png" /></div>
                                    Brielle Williamson
                                </div>
                            </td>
                            <td><a href="cdn-cgi/l/email-protection.html" class="__cf_email__"
                                    data-cfemail="ccaebba5a0a0a5ada1bfa3a28ca9a1ada5a0e2afa3a1">[email&#160;protected]</a>
                            </td>
                            <td>Registered</td>
                            <td><span class="badge bg-yellow-soft text-yellow">Customer</span></td>
                            <td>20 Jun 2021</td>
                            <td>
                                <a class="btn btn-datatable btn-icon btn-transparent-dark me-2"
                                    href="user-management-edit-user.html"><i data-feather="edit"></i></a>
                                <a class="btn btn-datatable btn-icon btn-transparent-dark" href="#!"><i
                                        data-feather="trash-2"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="avatar me-2"><img class="avatar-img img-fluid"
                                            src="assets/img/illustrations/profiles/profile-1.png" /></div>
                                    Herrod Chandler
                                </div>
                            </td>
                            <td><a href="cdn-cgi/l/email-protection.html" class="__cf_email__"
                                    data-cfemail="ec848d9e9e83888fac89818d8580c28f8381">[email&#160;protected]</a></td>
                            <td>Registered</td>
                            <td><span class="badge bg-green-soft text-green">Sales</span></td>
                            <td>20 Jun 2021</td>
                            <td>
                                <a class="btn btn-datatable btn-icon btn-transparent-dark me-2"
                                    href="user-management-edit-user.html"><i data-feather="edit"></i></a>
                                <a class="btn btn-datatable btn-icon btn-transparent-dark" href="#!"><i
                                        data-feather="trash-2"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="avatar me-2"><img class="avatar-img img-fluid"
                                            src="assets/img/illustrations/profiles/profile-2.png" /></div>
                                    Rhona Davidson
                                </div>
                            </td>
                            <td><a href="cdn-cgi/l/email-protection.html" class="__cf_email__"
                                    data-cfemail="681a000706090c091e010c1b0706280d05090104460b0705">[email&#160;protected]</a>
                            </td>
                            <td>Registered</td>
                            <td>
                                <span class="badge bg-green-soft text-green">Sales</span>
                                <span class="badge bg-purple-soft text-purple">Managers</span>
                            </td>
                            <td>20 Jun 2021</td>
                            <td>
                                <a class="btn btn-datatable btn-icon btn-transparent-dark me-2"
                                    href="user-management-edit-user.html"><i data-feather="edit"></i></a>
                                <a class="btn btn-datatable btn-icon btn-transparent-dark" href="#!"><i
                                        data-feather="trash-2"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="avatar me-2"><img class="avatar-img img-fluid"
                                            src="assets/img/illustrations/profiles/profile-3.png" /></div>
                                    Colleen Hurst
                                </div>
                            </td>
                            <td><a href="cdn-cgi/l/email-protection.html" class="__cf_email__"
                                    data-cfemail="2e4d465b5c5d5a6e4b434f4742004d4143">[email&#160;protected]</a></td>
                            <td>Registered</td>
                            <td><span class="badge bg-blue-soft text-blue">Developers</span></td>
                            <td>20 Jun 2021</td>
                            <td>
                                <a class="btn btn-datatable btn-icon btn-transparent-dark me-2"
                                    href="user-management-edit-user.html"><i data-feather="edit"></i></a>
                                <a class="btn btn-datatable btn-icon btn-transparent-dark" href="#!"><i
                                        data-feather="trash-2"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="avatar me-2"><img class="avatar-img img-fluid"
                                            src="assets/img/illustrations/profiles/profile-4.png" /></div>
                                    Sonya Frost
                                </div>
                            </td>
                            <td><a href="cdn-cgi/l/email-protection.html" class="__cf_email__"
                                    data-cfemail="ee9d889c819d9aae8b838f8782c08d8183">[email&#160;protected]</a></td>
                            <td>Registered</td>
                            <td><span class="badge bg-yellow-soft text-yellow">Customer</span></td>
                            <td>20 Jun 2021</td>
                            <td>
                                <a class="btn btn-datatable btn-icon btn-transparent-dark me-2"
                                    href="user-management-edit-user.html"><i data-feather="edit"></i></a>
                                <a class="btn btn-datatable btn-icon btn-transparent-dark" href="#!"><i
                                        data-feather="trash-2"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="avatar me-2"><img class="avatar-img img-fluid"
                                            src="assets/img/illustrations/profiles/profile-5.png" /></div>
                                    Jena Gaines
                                </div>
                            </td>
                            <td><a href="cdn-cgi/l/email-protection.html" class="__cf_email__"
                                    data-cfemail="452f202b2422242c2b2036052028242c296b262a28">[email&#160;protected]</a>
                            </td>
                            <td>Registered</td>
                            <td><span class="badge bg-yellow-soft text-yellow">Customer</span></td>
                            <td>20 Jun 2021</td>
                            <td>
                                <a class="btn btn-datatable btn-icon btn-transparent-dark me-2"
                                    href="user-management-edit-user.html"><i data-feather="edit"></i></a>
                                <a class="btn btn-datatable btn-icon btn-transparent-dark" href="#!"><i
                                        data-feather="trash-2"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="avatar me-2"><img class="avatar-img img-fluid"
                                            src="assets/img/illustrations/profiles/profile-6.png" /></div>
                                    Quinn Flynn
                                </div>
                            </td>
                            <td><a href="cdn-cgi/l/email-protection.html" class="__cf_email__"
                                    data-cfemail="6e1f08021700002e0b030f0702400d0103">[email&#160;protected]</a></td>
                            <td>Registered</td>
                            <td>
                                <span class="badge bg-green-soft text-green">Sales</span>
                                <span class="badge bg-purple-soft text-purple">Managers</span>
                            </td>
                            <td>20 Jun 2021</td>
                            <td>
                                <a class="btn btn-datatable btn-icon btn-transparent-dark me-2"
                                    href="user-management-edit-user.html"><i data-feather="edit"></i></a>
                                <a class="btn btn-datatable btn-icon btn-transparent-dark" href="#!"><i
                                        data-feather="trash-2"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="avatar me-2"><img class="avatar-img img-fluid"
                                            src="assets/img/illustrations/profiles/profile-1.png" /></div>
                                    Charde Marshall
                                </div>
                            </td>
                            <td><a href="cdn-cgi/l/email-protection.html" class="__cf_email__"
                                    data-cfemail="32515a5340565f5340415a72575f535b5e1c515d5f">[email&#160;protected]</a>
                            </td>
                            <td>Registered</td>
                            <td><span class="badge bg-green-soft text-green">Sales</span></td>
                            <td>20 Jun 2021</td>
                            <td>
                                <a class="btn btn-datatable btn-icon btn-transparent-dark me-2"
                                    href="user-management-edit-user.html"><i data-feather="edit"></i></a>
                                <a class="btn btn-datatable btn-icon btn-transparent-dark" href="#!"><i
                                        data-feather="trash-2"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="avatar me-2"><img class="avatar-img img-fluid"
                                            src="assets/img/illustrations/profiles/profile-2.png" /></div>
                                    Haley Kennedy
                                </div>
                            </td>
                            <td><a href="cdn-cgi/l/email-protection.html" class="__cf_email__"
                                    data-cfemail="51393a343f3f34352811343c30383d7f323e3c">[email&#160;protected]</a></td>
                            <td>Registered</td>
                            <td><span class="badge bg-yellow-soft text-yellow">Customer</span></td>
                            <td>20 Jun 2021</td>
                            <td>
                                <a class="btn btn-datatable btn-icon btn-transparent-dark me-2"
                                    href="user-management-edit-user.html"><i data-feather="edit"></i></a>
                                <a class="btn btn-datatable btn-icon btn-transparent-dark" href="#!"><i
                                        data-feather="trash-2"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="avatar me-2"><img class="avatar-img img-fluid"
                                            src="assets/img/illustrations/profiles/profile-3.png" /></div>
                                    Tatyana Fitzpatrick
                                </div>
                            </td>
                            <td><a href="cdn-cgi/l/email-protection.html" class="__cf_email__"
                                    data-cfemail="dda9bca9bbb4a9a79db8b0bcb4b1f3beb2b0">[email&#160;protected]</a></td>
                            <td>Registered</td>
                            <td><span class="badge bg-yellow-soft text-yellow">Customer</span></td>
                            <td>20 Jun 2021</td>
                            <td>
                                <a class="btn btn-datatable btn-icon btn-transparent-dark me-2"
                                    href="user-management-edit-user.html"><i data-feather="edit"></i></a>
                                <a class="btn btn-datatable btn-icon btn-transparent-dark" href="#!"><i
                                        data-feather="trash-2"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="avatar me-2"><img class="avatar-img img-fluid"
                                            src="assets/img/illustrations/profiles/profile-4.png" /></div>
                                    Michael Silva
                                </div>
                            </td>
                            <td><a href="cdn-cgi/l/email-protection.html" class="__cf_email__"
                                    data-cfemail="88e5e1ebe0e9ede4fbe1e4fee9c8ede5e9e1e4a6ebe7e5">[email&#160;protected]</a>
                            </td>
                            <td>Registered</td>
                            <td><span class="badge bg-blue-soft text-blue">Developers</span></td>
                            <td>20 Jun 2021</td>
                            <td>
                                <a class="btn btn-datatable btn-icon btn-transparent-dark me-2"
                                    href="user-management-edit-user.html"><i data-feather="edit"></i></a>
                                <a class="btn btn-datatable btn-icon btn-transparent-dark" href="#!"><i
                                        data-feather="trash-2"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="avatar me-2"><img class="avatar-img img-fluid"
                                            src="assets/img/illustrations/profiles/profile-5.png" /></div>
                                    Paul Byrd
                                </div>
                            </td>
                            <td><a href="cdn-cgi/l/email-protection.html" class="__cf_email__"
                                    data-cfemail="7b0b1902091f3b1e161a121755181416">[email&#160;protected]</a></td>
                            <td>Registered</td>
                            <td><span class="badge bg-yellow-soft text-yellow">Customer</span></td>
                            <td>20 Jun 2021</td>
                            <td>
                                <a class="btn btn-datatable btn-icon btn-transparent-dark me-2"
                                    href="user-management-edit-user.html"><i data-feather="edit"></i></a>
                                <a class="btn btn-datatable btn-icon btn-transparent-dark" href="#!"><i
                                        data-feather="trash-2"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="avatar me-2"><img class="avatar-img img-fluid"
                                            src="assets/img/illustrations/profiles/profile-6.png" /></div>
                                    Gloria Little
                                </div>
                            </td>
                            <td><a href="cdn-cgi/l/email-protection.html" class="__cf_email__"
                                    data-cfemail="c2a5aeadb0aba3aeabb6b6aea782a7afa3abaeeca1adaf">[email&#160;protected]</a>
                            </td>
                            <td>Registered</td>
                            <td>
                                <span class="badge bg-blue-soft text-blue">Developers</span>
                                <span class="badge bg-purple-soft text-purple">Managers</span>
                            </td>
                            <td>20 Jun 2021</td>
                            <td>
                                <a class="btn btn-datatable btn-icon btn-transparent-dark me-2"
                                    href="user-management-edit-user.html"><i data-feather="edit"></i></a>
                                <a class="btn btn-datatable btn-icon btn-transparent-dark" href="#!"><i
                                        data-feather="trash-2"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="avatar me-2"><img class="avatar-img img-fluid"
                                            src="assets/img/illustrations/profiles/profile-1.png" /></div>
                                    Bradley Greer
                                </div>
                            </td>
                            <td><a href="cdn-cgi/l/email-protection.html" class="__cf_email__"
                                    data-cfemail="0260657067677042676f636b6e2c616d6f">[email&#160;protected]</a></td>
                            <td>Registered</td>
                            <td><span class="badge bg-yellow-soft text-yellow">Customer</span></td>
                            <td>20 Jun 2021</td>
                            <td>
                                <a class="btn btn-datatable btn-icon btn-transparent-dark me-2"
                                    href="user-management-edit-user.html"><i data-feather="edit"></i></a>
                                <a class="btn btn-datatable btn-icon btn-transparent-dark" href="#!"><i
                                        data-feather="trash-2"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="avatar me-2"><img class="avatar-img img-fluid"
                                            src="assets/img/illustrations/profiles/profile-2.png" /></div>
                                    Dai Rios
                                </div>
                            </td>
                            <td><a href="cdn-cgi/l/email-protection.html" class="__cf_email__"
                                    data-cfemail="94f0e6fdfbe7d4f1f9f5fdf8baf7fbf9">[email&#160;protected]</a></td>
                            <td>Registered</td>
                            <td><span class="badge bg-blue-soft text-blue">Developers</span></td>
                            <td>20 Jun 2021</td>
                            <td>
                                <a class="btn btn-datatable btn-icon btn-transparent-dark me-2"
                                    href="user-management-edit-user.html"><i data-feather="edit"></i></a>
                                <a class="btn btn-datatable btn-icon btn-transparent-dark" href="#!"><i
                                        data-feather="trash-2"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
