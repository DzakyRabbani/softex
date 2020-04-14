var thisLink = window.location .protocol + "//" + window.location.host + "/" + window.location.pathname.split('/')[1] + "/";
;
$(document).ready(function (){
    
    //tabletower
    $('#tabletower').DataTable({
        "scrollX": true,
        "processing": true,
        "serverSide": true,
        "ordering": false,
        "ajax":
        {
            "url": thisLink + "TowerController/datatables",
            "type": "POST"
        },
        "deferRender": true,
        "aLengthMenu": [[5, 10, 50], [5, 10, 50]],
        "columns": [
            {
                render: function (data, type, row, meta) {
                    var angka = meta.row + meta.settings._iDisplayStart + 1;

                    return angka

                }
            },
            { "data": "nama_tower" },
            {
                "render": function (data, type, row) {
                    var html = "<img width='200px' height='200px' src='" + thisLink + "assets/img/tower/" + row.logo_img + "'>"

                    return html
                }
            },
            { "data": "created_at" },
            {
                "render": function (data, type, row) {
                    var html = "<a href='" + thisLink + "tower/view/" + row['id_tower'] + "' class='btn btn-primary' ><i class='fa fa-pencil'></i></a> "
                    html += "<button type='button' onclick='del(" + row['id_tower'] + ")' class='btn btn-danger'><i class='fa fa-trash'></i></button> "

                    return html
                }
            },
        ],
    });

    //tablepilihtower
    $('#tablepilihtower').DataTable({
        "scrollX": true,
        "processing": true,
        "serverSide": true,
        "ordering": false,
        "ajax":
        {
            "url": thisLink + "FrontController/datatables",
            "type": "POST"
        },
        "deferRender": true,
        "aLengthMenu": [[5, 10, 50], [5, 10, 50]],
        "columns": [
            {
                render: function (data, type, row, meta) {
                    var angka = meta.row + meta.settings._iDisplayStart + 1;

                    return angka

                }
            },
            { "data": "nama_tower" },
            {
                "render": function (data, type, row) {
                    var html = "<img width='200px' height='200px' src='" + thisLink + "assets/img/front/" + row.img_background + "'>"

                    return html
                }
            },
            {
                "render": function (data, type, row) {

                    var html;

                    if (row.status == 1) {
                        html = "<button type='submit' class='btn btn-success'>Active</button>"

                    } else if (row.status == 0) {
                        html = "<button type='submit' class='btn btn-secondary active'>Inactive</button>"
                    }

                    return html;

                }
            },
            { "data": "tanggal_front" },
            {
                "render": function (data, type, row) {

                    var id = 'asdas'

                    console.log(id)

                    var html = "<button type='button' onclick='pilih("+id+",gjgh)'  class='btn btn-primary'><i class='fa fa-check'></i></button> "

                    return html
                }
            },
        ],
    });

    //tablefront
    $('#tablefront').DataTable({
        "scrollX": true,
        "processing": true,
        "serverSide": true,
        "ordering": false,
        "ajax":
        {
            "url": thisLink + "FrontController/datatables",
            "type": "POST"
        },
        "deferRender": true,
        "aLengthMenu": [[5, 10, 50], [5, 10, 50]],
        "columns": [
            {
                render: function (data, type, row, meta) {
                    var angka = meta.row + meta.settings._iDisplayStart + 1;

                    return angka

                }
            },
            { "data": "nama_tower" },
            {
                "render": function (data, type, row) {
                    var html = "<img width='200px' height='200px' src='" + thisLink + "assets/img/front/" + row.img_background + "'>"

                    return html
                }
            },
            {
                "render": function (data, type, row) {

                    var html;

                    if (row.status == 1) {
                        html = "<form method='post' action='" + thisLink + "update/status-front/" + row.id_front +"'>" +
                               "<input type='hidden' name='status' value='0'>"+
                               "<button type='submit' class='btn btn-success'>Active</button>"+
                               "</form>"

                    } else if (row.status == 0) {
                        html = "<form method='post' action='" + thisLink + "update/status-front/" + row.id_front +"'>" +
                                "<input type='hidden' name='status' value='1'>" +
                                "<button type='submit' class='btn btn-secondary active'>Inactive</button>" +
                                "</form>"
                    }

                    return html;

                }
            },
            { "data": "tanggal_front" },
            {
                "render": function (data, type, row) {
                    var html = "<a href='" + thisLink + "front/view/" + row['id_front'] + "' class='btn btn-primary' ><i class='fa fa-pencil'></i></a> "
                    html += "<button type='button' onclick='del(" + row['id_front'] + ")' class='btn btn-danger'><i class='fa fa-trash'></i></button> "

                    return html
                }
            },
        ],
    });

    //tablelobby
    $('#tablelobby').DataTable({
        "scrollX": true,
        "processing": true,
        "serverSide": true,
        "ordering": false,
        "ajax":
        {
            "url": thisLink + "LobbyController/datatables",
            "type": "POST"
        },
        "deferRender": true,
        "aLengthMenu": [[5, 10, 50], [5, 10, 50]],
        "columns": [
            {
                render: function (data, type, row, meta) {
                    var angka = meta.row + meta.settings._iDisplayStart + 1;

                    return angka

                }
            },
            {
                "render": function (data, type, row) {
                    var html = "<img width='200px' height='200px' src='" + thisLink + "assets/img/front/" + row.img_front + "'>"

                    return html
                }
            },
            {"data" : "nama_lobby"},
            {
                "render": function (data, type, row) {
                    var html = "<img width='200px' height='200px' src='" + thisLink + "assets/img/lobby/" + row.img_background + "'>"

                    return html
                }
            },
            {
                "render": function (data, type, row) {

                    var html;

                    if (row.status == 1) {
                        html = "<form method='post' action='" + thisLink + "update/status/" + row.id_lobby + "'>" +
                            "<input type='hidden' name='status' value='0'>" +
                            "<button type='submit' class='btn btn-success'>Active</button>" +
                            "</form>"

                    } else if (row.status == 0) {
                        html = "<form method='post' action='" + thisLink + "update/status/" + row.id_lobby + "'>" +
                            "<input type='hidden' name='status' value='1'>" +
                            "<button type='submit' class='btn btn-secondary active'>Inactive</button>" +
                            "</form>"
                    }

                    return html;

                }
            },
            { "data": "created_at" },
            {
                "render": function (data, type, row) {
                    var html = "<a href='" + thisLink + "lobby/view/" + row['id_lobby'] + "' class='btn btn-primary' ><i class='fa fa-pencil'></i></a> "
                    html += "<button type='button' onclick='del(" + row['id_lobby'] + ")' class='btn btn-danger'><i class='fa fa-trash'></i></button> "

                    return html
                }
            },
        ],
    });

    //tablepage
    $('#tablepage').DataTable({
        "scrollX": true,
        "processing": true,
        "serverSide": true,
        "ordering": false,
        "ajax":
        {
            "url": thisLink + "PageController/datatables",
            "type": "POST"
        },
        "deferRender": true,
        "aLengthMenu": [[5, 10, 50], [5, 10, 50]],
        "columns": [
            {
                render: function (data, type, row, meta) {
                    var angka = meta.row + meta.settings._iDisplayStart + 1;

                    return angka

                }
            },
            { "data": "nama_lobby" },
            { "data": "nama_page" },
            {
                "render": function (data, type, row) {
                    var html = "<img width='200px' height='200px' src='" + thisLink + "assets/img/page/" + row.logo_page + "'>"

                    return html
                }
            },
            {
                "render": function (data, type, row) {

                    var html;

                    if (row.status == 1) {
                        html = "<form method='post' action='" + thisLink + "update/status-page/" + row.id_page + "'>" +
                            "<input type='hidden' name='status' value='0'>" +
                            "<button type='submit' class='btn btn-success'>Active</button>" +
                            "</form>"

                    } else if (row.status == 0) {
                        html = "<form method='post' action='" + thisLink + "update/status-page/" + row.id_page + "'>" +
                            "<input type='hidden' name='status' value='1'>" +
                            "<button type='submit' class='btn btn-secondary active'>Inactive</button>" +
                            "</form>"
                    }

                    return html;

                }
            },
            { "data": "created_at" },
            {
                "render": function (data, type, row) {
                    var html = "<a href='" + thisLink + "page/view/" + row['id_page'] + "' class='btn btn-primary' ><i class='fa fa-pencil'></i></a> "
                    html += "<button type='button' onclick='del(" + row['id_page'] + ")' class='btn btn-danger'><i class='fa fa-trash'></i></button> "

                    return html
                }
            },
        ],
    });

    //tablefloor
    $('#tablefloor').DataTable({
        "scrollX": true,
        "processing": true,
        "serverSide": true,
        "ordering": false,
        "ajax":
        {
            "url": thisLink + "FloorController/datatables",
            "type": "POST"
        },
        "deferRender": true,
        "aLengthMenu": [[5, 10, 50], [5, 10, 50]],
        "columns": [
            {
                render: function (data, type, row, meta) {
                    var angka = meta.row + meta.settings._iDisplayStart + 1;

                    return angka

                }
            },
            { "data": "nama_page" },
            {
                "render": function (data, type, row) {
                    var html = "<img width='200px' height='200px' src='" + thisLink + "assets/img/floor/" + row.img_floor + "'>"

                    return html
                }
            },
            { "data": "nama_kategori" },
            {
                "render": function (data, type, row) {

                    var html;

                    if (row.status == 1) {
                        html = "<form method='post' action='" + thisLink + "update/status-floor/" + row.id_floor + "'>" +
                            "<input type='hidden' name='status' value='0'>" +
                            "<button type='submit' class='btn btn-success'>Active</button>" +
                            "</form>"

                    } else if (row.status == 0) {
                        html = "<form method='post' action='" + thisLink + "update/status-floor/" + row.id_floor + "'>" +
                            "<input type='hidden' name='status' value='1'>" +
                            "<button type='submit' class='btn btn-secondary active'>Inactive</button>" +
                            "</form>"
                    }

                    return html;

                }
            },
            { "data": "created_at" },
            {
                "render": function (data, type, row) {
                    var html = "<a href='" + thisLink + "floor/view/" + row['id_floor'] + "' class='btn btn-primary' ><i class='fa fa-pencil'></i></a> "
                    html += "<button type='button' onclick='del(" + row['id_floor'] + ")' class='btn btn-danger'><i class='fa fa-trash'></i></button> "

                    return html
                }
            },
        ],
    });


    //tablefloorunit
    $('#tablefloorunit').DataTable({
        "scrollX": true,
        "processing": true,
        "serverSide": true,
        "ordering": false,
        "ajax":
        {
            "url": thisLink + "FloorunitController/datatables",
            "type": "POST"
        },
        "deferRender": true,
        "aLengthMenu": [[5, 10, 50], [5, 10, 50]],
        "columns": [
            {
                render: function (data, type, row, meta) {
                    var angka = meta.row + meta.settings._iDisplayStart + 1;

                    return angka

                }
            },
            { "data": "nama_show" },
            {
                "render": function (data, type, row) {
                    var html = "<img width='200px' height='200px' src='" + thisLink + "assets/img/floor-unit/" + row.img + "'>"

                    return html
                }
            },
            { "data": "nama_kategori" },
            {
                "render": function (data, type, row) {

                    var html;

                    if (row.status == 1) {
                        html = "<form method='post' action='" + thisLink + "update/status-floor-unit/" + row.id_floor_unit + "'>" +
                            "<input type='hidden' name='status' value='0'>" +
                            "<button type='submit' class='btn btn-success'>Active</button>" +
                            "</form>"

                    } else if (row.status == 0) {
                        html = "<form method='post' action='" + thisLink + "update/status-unit/" + row.id_floor_unit + "'>" +
                            "<input type='hidden' name='status' value='1'>" +
                            "<button type='submit' class='btn btn-secondary active'>Inactive</button>" +
                            "</form>"
                    }

                    return html;

                }
            },
            { "data": "created_at" },
            {
                "render": function (data, type, row) {
                    var html = "<a href='" + thisLink + "floor-unit/view/" + row['id_floor_unit'] + "' class='btn btn-primary' ><i class='fa fa-pencil'></i></a> "
                    html += "<button type='button' onclick='del(" + row['id_floor_unit'] + ")' class='btn btn-danger'><i class='fa fa-trash'></i></button> "

                    return html
                }
            },
        ],
    });


    //tableshow
    $('#tableshow').DataTable({
        "scrollX": true,
        "processing": true,
        "serverSide": true,
        "ordering": false,
        "orderable": false,
        "ajax":
        {
            "url": thisLink + "ShowController/datatables",
            "type": "POST"
        },
        "deferRender": true,
        "aLengthMenu": [[5, 10, 50], [5, 10, 50]],
        "columns": [
            {
                render: function (data, type, row, meta) {
                    var angka = meta.row + meta.settings._iDisplayStart + 1;

                    return angka

                }
            },
            { "data": "nama_page" },
            { "data": "nama_show" },
            {
                "render": function (data, type, row) {

                    var html;

                    if (row.status == 1) {
                        html = "<form method='post' action='" + thisLink + "update/status-show/" + row.id_show + "'>" +
                            "<input type='hidden' name='status' value='0'>" +
                            "<button type='submit' class='btn btn-success'>Active</button>" +
                            "</form>"

                    } else if (row.status == 0) {
                        html = "<form method='post' action='" + thisLink + "update/status-show/" + row.id_show + "'>" +
                            "<input type='hidden' name='status' value='1'>" +
                            "<button type='submit' class='btn btn-secondary active'>Inactive</button>" +
                            "</form>"
                    }

                    return html;

                }
            },
            { "data": "created_at" },
            {
                "render": function (data, type, row) {
                    var html = "<a href='" + thisLink + "show/view/" + row['id_show'] + "' class='btn btn-primary' ><i class='fa fa-pencil'></i></a> "
                    html += "<button type='button' onclick='del(" + row['id_show'] + ")' class='btn btn-danger'><i class='fa fa-trash'></i></button> "

                    return html
                }
            },
        ],
    });

    //tableunit
    $('#tableunit').DataTable({
        "scrollX": true,
        "processing": true,
        "serverSide": true,
        "ordering": false,
        "ajax":
        {
            "url": thisLink + "UnitController/datatables",
            "type": "POST"
        },
        "deferRender": true,
        "aLengthMenu": [[5, 10, 50], [5, 10, 50]],
        "columns": [
            {
                render: function (data, type, row, meta) {
                    var angka = meta.row + meta.settings._iDisplayStart + 1;

                    return angka

                }
            },
            { "data": "nama_show" },
            {
                "render": function (data, type, row) {
                    var html = "<img width='200px' height='200px' src='" + thisLink + "assets/img/unit/" + row.img_background + "'>"

                    return html
                }
            },
            {
                "render": function (data, type, row) {

                    var html;

                    if (row.status == 1) {
                        html = "<form method='post' action='" + thisLink + "update/status-unit/" + row.id_unit + "'>" +
                            "<input type='hidden' name='status' value='0'>" +
                            "<button type='submit' class='btn btn-success'>Active</button>" +
                            "</form>"

                    } else if (row.status == 0) {
                        html = "<form method='post' action='" + thisLink + "update/status-unit/" + row.id_unit + "'>" +
                            "<input type='hidden' name='status' value='1'>" +
                            "<button type='submit' class='btn btn-secondary active'>Inactive</button>" +
                            "</form>"
                    }

                    return html;

                }
            },
            { "data": "created_at" },
            {
                "render": function (data, type, row) {
                    var html = "<a href='" + thisLink + "unit/view/" + row['id_unit'] + "' class='btn btn-primary' ><i class='fa fa-pencil'></i></a> "
                    html += "<button type='button' onclick='del(" + row['id_unit'] + ")' class='btn btn-danger'><i class='fa fa-trash'></i></button> "

                    return html
                }
            },
        ],
    });

    //tableonsen
    $('#tableonsen').DataTable({
        "scrollX": true,
        "processing": true,
        "serverSide": true,
        "ordering": false,
        "ajax":
        {
            "url": thisLink + "OnsenController/datatables",
            "type": "POST"
        },
        "deferRender": true,
        "aLengthMenu": [[5, 10, 50], [5, 10, 50]],
        "columns": [
            {
                render: function (data, type, row, meta) {
                    var angka = meta.row + meta.settings._iDisplayStart + 1;

                    return angka

                }
            },
            { "data": "nama_page" },
            {
                "render": function (data, type, row) {
                    var html = "<img width='200px' height='200px' src='" + thisLink + "assets/img/onsen/" + row.img_background + "'>"

                    return html
                }
            },
            {
                "render": function (data, type, row) {

                    var html;

                    if (row.status == 1) {
                        html = "<form method='post' action='" + thisLink + "update/status-onsen/" + row.id_onsen + "'>" +
                            "<input type='hidden' name='status' value='0'>" +
                            "<button type='submit' class='btn btn-success'>Active</button>" +
                            "</form>"

                    } else if (row.status == 0) {
                        html = "<form method='post' action='" + thisLink + "update/status-onsen/" + row.id_onsen + "'>" +
                            "<input type='hidden' name='status' value='1'>" +
                            "<button type='submit' class='btn btn-secondary active'>Inactive</button>" +
                            "</form>"
                    }

                    return html;

                }
            },
            { "data": "created_at" },
            {
                "render": function (data, type, row) {
                    var html = "<a href='" + thisLink + "onsen/view/" + row['id_onsen'] + "' class='btn btn-primary' ><i class='fa fa-pencil'></i></a> "
                    html += "<button type='button' onclick='del(" + row['id_onsen'] + ")' class='btn btn-danger'><i class='fa fa-trash'></i></button> "

                    return html
                }
            },
        ],
    });

    //tablefacility
    $('#tablefacility').DataTable({
        "scrollX": true,
        "processing": true,
        "serverSide": true,
        "ordering": false,
        "ajax":
        {
            "url": thisLink + "FacilityController/datatables",
            "type": "POST"
        },
        "deferRender": true,
        "aLengthMenu": [[5, 10, 50], [5, 10, 50]],
        "columns": [
            {
                render: function (data, type, row, meta) {
                    var angka = meta.row + meta.settings._iDisplayStart + 1;

                    return angka

                }
            },
            { "data": "nama_facility" },
            {
                "render": function (data, type, row) {
                    var html = "<img width='200px' height='200px' src='" + thisLink + "assets/img/facility/" + row.img_background + "'>"

                    return html
                }
            },
            { "data": "isi_text" },
            {
                "render": function (data, type, row) {

                    var html;

                    if (row.status == 1) {
                        html = "<form method='post' action='" + thisLink + "update/status-facility/" + row.id_facility + "'>" +
                            "<input type='hidden' name='status' value='0'>" +
                            "<button type='submit' class='btn btn-success'>Active</button>" +
                            "</form>"

                    } else if (row.status == 0) {
                        html = "<form method='post' action='" + thisLink + "update/status-facility/" + row.id_facility + "'>" +
                            "<input type='hidden' name='status' value='1'>" +
                            "<button type='submit' class='btn btn-secondary active'>Inactive</button>" +
                            "</form>"
                    }

                    return html;

                }
            },
            { "data": "created_at" },
            {
                "render": function (data, type, row) {
                    var html = "<a href='" + thisLink + "facility/view/" + row['id_facility'] + "' class='btn btn-primary' ><i class='fa fa-pencil'></i></a> "
                    html += "<button type='button' onclick='del(" + row['id_facility'] + ")' class='btn btn-danger'><i class='fa fa-trash'></i></button> "

                    return html
                }
            },
        ],
    });

    //tableboulevard
    $('#tableboulevard').DataTable({
        "scrollX": true,
        "processing": true,
        "serverSide": true,
        "ordering": false,
        "ajax":
        {
            "url": thisLink + "BoulevardController/datatables",
            "type": "POST"
        },
        "deferRender": true,
        "aLengthMenu": [[5, 10, 50], [5, 10, 50]],
        "columns": [
            {
                render: function (data, type, row, meta) {
                    var angka = meta.row + meta.settings._iDisplayStart + 1;

                    return angka

                }
            },
            { "data": "nama_boulevard" },
            {
                "render": function (data, type, row) {
                    var html = "<img width='200px' height='200px' src='" + thisLink + "assets/img/boulevard/" + row.img_background + "'>"

                    return html
                }
            },
            { "data": "isi_text" },
            {
                "render": function (data, type, row) {

                    var html;

                    if (row.status == 1) {
                        html = "<form method='post' action='" + thisLink + "update/status-boulevard/" + row.id_boulevard + "'>" +
                            "<input type='hidden' name='status' value='0'>" +
                            "<button type='submit' class='btn btn-success'>Active</button>" +
                            "</form>"

                    } else if (row.status == 0) {
                        html = "<form method='post' action='" + thisLink + "update/status-boulevard/" + row.id_boulevard + "'>" +
                            "<input type='hidden' name='status' value='1'>" +
                            "<button type='submit' class='btn btn-secondary active'>Inactive</button>" +
                            "</form>"
                    }

                    return html;

                }
            },
            { "data": "created_at" },
            {
                "render": function (data, type, row) {
                    var html = "<a href='" + thisLink + "boulevard/view/" + row['id_boulevard'] + "' class='btn btn-primary' ><i class='fa fa-pencil'></i></a> "
                    html += "<button type='button' onclick='del(" + row['id_boulevard'] + ")' class='btn btn-danger'><i class='fa fa-trash'></i></button> "

                    return html
                }
            },
        ],
    });

    //tableboulevardpage
    $('#tableboulevardpage').DataTable({
        "scrollX": true,
        "processing": true,
        "serverSide": true,
        "ordering": false,
        "ajax":
        {
            "url": thisLink + "BoulevardPageController/datatables",
            "type": "POST"
        },
        "deferRender": true,
        "aLengthMenu": [[5, 10, 50], [5, 10, 50]],
        "columns": [
            {
                render: function (data, type, row, meta) {
                    var angka = meta.row + meta.settings._iDisplayStart + 1;

                    return angka

                }
            },
            { "data": "nama_boulevard" },
            { "data": "nama_page" },
            {
                "render": function (data, type, row) {
                    var html = "<img width='200px' height='200px' src='" + thisLink + "assets/img/boulevard-page/" + row.logo_page + "'>"

                    return html
                }
            },
            {
                "render": function (data, type, row) {

                    var html;

                    if (row.status == 1) {
                        html = "<form method='post' action='" + thisLink + "update/status-boulevard-page/" + row.id_page + "'>" +
                            "<input type='hidden' name='status' value='0'>" +
                            "<button type='submit' class='btn btn-success'>Active</button>" +
                            "</form>"

                    } else if (row.status == 0) {
                        html = "<form method='post' action='" + thisLink + "update/status-boulevard-page/" + row.id_page + "'>" +
                            "<input type='hidden' name='status' value='1'>" +
                            "<button type='submit' class='btn btn-secondary active'>Inactive</button>" +
                            "</form>"
                    }

                    return html;

                }
            },
            { "data": "created_at" },
            {
                "render": function (data, type, row) {
                    var html = "<a href='" + thisLink + "boulevard-page/view/" + row['id_page'] + "' class='btn btn-primary' ><i class='fa fa-pencil'></i></a> "
                    html += "<button type='button' onclick='del(" + row['id_page'] + ")' class='btn btn-danger'><i class='fa fa-trash'></i></button> "

                    return html
                }
            },
        ],
    });

    //tableshopping
    $('#tableshopping').DataTable({
        "scrollX": true,
        "processing": true,
        "serverSide": true,
        "ordering": false,
        "ajax":
        {
            "url": thisLink + "ShoppingController/datatables",
            "type": "POST"
        },
        "deferRender": true,
        "aLengthMenu": [[5, 10, 50], [5, 10, 50]],
        "columns": [
            {
                render: function (data, type, row, meta) {
                    var angka = meta.row + meta.settings._iDisplayStart + 1;

                    return angka

                }
            },
            { "data": "nama_shopping" },
            {
                "render": function (data, type, row) {
                    var html = "<img width='200px' height='200px' src='" + thisLink + "assets/img/shopping/" + row.img_background + "'>"

                    return html
                }
            },
            {
                "render": function (data, type, row) {

                    var html;

                    if (row.status == 1) {
                        html = "<form method='post' action='" + thisLink + "update/status-shopping/" + row.id_shopping + "'>" +
                            "<input type='hidden' name='status' value='0'>" +
                            "<button type='submit' class='btn btn-success'>Active</button>" +
                            "</form>"

                    } else if (row.status == 0) {
                        html = "<form method='post' action='" + thisLink + "update/status-shopping/" + row.id_shopping + "'>" +
                            "<input type='hidden' name='status' value='1'>" +
                            "<button type='submit' class='btn btn-secondary active'>Inactive</button>" +
                            "</form>"
                    }

                    return html;

                }
            },
            { "data": "created_at" },
            {
                "render": function (data, type, row) {
                    var html = "<a href='" + thisLink + "shopping/view/" + row['id_shopping'] + "' class='btn btn-primary' ><i class='fa fa-pencil'></i></a> "
                    html += "<button type='button' onclick='del(" + row['id_shopping'] + ")' class='btn btn-danger'><i class='fa fa-trash'></i></button> "

                    return html
                }
            },
        ],
    });


    //tableshoppingpage
    $('#tableshoppingpage').DataTable({
        "scrollX": true,
        "processing": true,
        "serverSide": true,
        "ordering": false,
        "ajax":
        {
            "url": thisLink + "ShoppingPageController/datatables",
            "type": "POST"
        },
        "deferRender": true,
        "aLengthMenu": [[5, 10, 50], [5, 10, 50]],
        "columns": [
            {
                render: function (data, type, row, meta) {
                    var angka = meta.row + meta.settings._iDisplayStart + 1;

                    return angka

                }
            },
            { "data": "nama_shopping" },
            { "data": "nama_page" },
            {
                "render": function (data, type, row) {
                    var html = "<img width='200px' height='200px' src='" + thisLink + "assets/img/shopping-page/" + row.logo_page + "'>"

                    return html
                }
            },
            {
                "render": function (data, type, row) {

                    var html;

                    if (row.status == 1) {
                        html = "<form method='post' action='" + thisLink + "update/status-shopping-page/" + row.id_page + "'>" +
                            "<input type='hidden' name='status' value='0'>" +
                            "<button type='submit' class='btn btn-success'>Active</button>" +
                            "</form>"

                    } else if (row.status == 0) {
                        html = "<form method='post' action='" + thisLink + "update/status-shopping-page/" + row.id_page + "'>" +
                            "<input type='hidden' name='status' value='1'>" +
                            "<button type='submit' class='btn btn-secondary active'>Inactive</button>" +
                            "</form>"
                    }

                    return html;

                }
            },
            { "data": "created_at" },
            {
                "render": function (data, type, row) {
                    var html = "<a href='" + thisLink + "shopping-page/view/" + row['id_page'] + "' class='btn btn-primary' ><i class='fa fa-pencil'></i></a> "
                    html += "<button type='button' onclick='del(" + row['id_page'] + ")' class='btn btn-danger'><i class='fa fa-trash'></i></button> "

                    return html
                }
            },
        ],
    });

    //tableshoppingunit
    $('#tableshoppingunit').DataTable({
        "scrollX": true,
        "processing": true,
        "serverSide": true,
        "ordering": false,
        "ajax":
        {
            "url": thisLink + "ShoppingUnitController/datatables",
            "type": "POST"
        },
        "deferRender": true,
        "aLengthMenu": [[5, 10, 50], [5, 10, 50]],
        "columns": [
            {
                render: function (data, type, row, meta) {
                    var angka = meta.row + meta.settings._iDisplayStart + 1;

                    return angka

                }
            },
            { "data": "nama_shopping" },
            { "data": "nama_page" },
            { "data": "nama_show" },
            {
                "render": function (data, type, row) {
                    var html = "<img width='200px' height='200px' src='" + thisLink + "assets/img/shopping-unit/" + row.img_background + "'>"

                    return html
                }
            },
            {
                "render": function (data, type, row) {

                    var html;

                    if (row.status == 1) {
                        html = "<form method='post' action='" + thisLink + "update/status-shopping-unit/" + row.id_show + "'>" +
                            "<input type='hidden' name='status' value='0'>" +
                            "<button type='submit' class='btn btn-success'>Active</button>" +
                            "</form>"

                    } else if (row.status == 0) {
                        html = "<form method='post' action='" + thisLink + "update/status-shopping-unit/" + row.id_show + "'>" +
                            "<input type='hidden' name='status' value='1'>" +
                            "<button type='submit' class='btn btn-secondary active'>Inactive</button>" +
                            "</form>"
                    }

                    return html;

                }
            },
            { "data": "created_at" },
            {
                "render": function (data, type, row) {
                    var html = "<a href='" + thisLink + "shopping-unit/view/" + row['id_show'] + "' class='btn btn-primary' ><i class='fa fa-pencil'></i></a> "
                    html += "<button type='button' onclick='del(" + row['id_show'] + ")' class='btn btn-danger'><i class='fa fa-trash'></i></button> "

                    return html
                }
            },
        ],
    });

    //tablefloorplanshopping
    $('#tablefloorplanshopping').DataTable({
        "scrollX": true,
        "processing": true,
        "serverSide": true,
        "ordering": false,
        "ajax":
        {
            "url": thisLink + "FloorpanShoppingController/datatables",
            "type": "POST"
        },
        "deferRender": true,
        "aLengthMenu": [[5, 10, 50], [5, 10, 50]],
        "columns": [
            {
                render: function (data, type, row, meta) {
                    var angka = meta.row + meta.settings._iDisplayStart + 1;

                    return angka

                }
            },
            { "data": "nama_shopping" },
            {
                "render": function (data, type, row) {

                    if (row.id_kategori == 4) {

                        var video = row.img_floor;

                        var extention = video.slice(video.length - 3);

                        var html = "<video width='200' height='200' controls>" +
                            "<source src='assets/img/floorplan-shopping/" + video + "' type='video/"+ extention +"'>"+
                            "</video>"

                    }else{
                        var html = "<img width='200px' height='200px' src='" + thisLink + "assets/img/floorplan-shopping/" + row.img_floor + "'>"
                    }

                    return html
                }
            },
            { "data": "nama_kategori" },
            {
                "render": function (data, type, row) {

                    var html;

                    if (row.status == 1) {
                        html = "<form method='post' action='" + thisLink + "update/status-floorplan-shopping/" + row.id_floor + "'>" +
                            "<input type='hidden' name='status' value='0'>" +
                            "<button type='submit' class='btn btn-success'>Active</button>" +
                            "</form>"

                    } else if (row.status == 0) {
                        html = "<form method='post' action='" + thisLink + "update/status-floorplan-shopping/" + row.id_floor + "'>" +
                            "<input type='hidden' name='status' value='1'>" +
                            "<button type='submit' class='btn btn-secondary active'>Inactive</button>" +
                            "</form>"
                    }

                    return html;

                }
            },
            { "data": "created_at" },
            {
                "render": function (data, type, row) {
                    var html = "<a href='" + thisLink + "floorplan-shopping/view/" + row['id_floor'] + "' class='btn btn-primary' ><i class='fa fa-pencil'></i></a> "
                    html += "<button type='button' onclick='del(" + row['id_floor'] + ")' class='btn btn-danger'><i class='fa fa-trash'></i></button> "

                    return html
                }
            },
        ],
    });

    //tablefloorplanunit
    $('#tablefloorplanunit').DataTable({
        "scrollX": true,
        "processing": true,
        "serverSide": true,
        "ordering": false,
        "ajax":
        {
            "url": thisLink + "FloorpanShoppingUnitController/datatables",
            "type": "POST"
        },
        "deferRender": true,
        "aLengthMenu": [[5, 10, 50], [5, 10, 50]],
        "columns": [
            {
                render: function (data, type, row, meta) {
                    var angka = meta.row + meta.settings._iDisplayStart + 1;

                    return angka

                }
            },
            { "data": "nama_shopping" },
            { "data": "nama_page" },
            {
                "render": function (data, type, row) {

                    if (row.id_kategori == 4) {

                        var video = row.img_floor;

                        var extention = video.slice(video.length - 3);

                        var html = "<video width='200' height='200' controls>" +
                            "<source src='assets/img/floorplan-unit/" + video + "' type='video/" + extention + "'>" +
                            "</video>"

                    } else {
                        var html = "<img width='200px' height='200px' src='" + thisLink + "assets/img/floorplan-unit/" + row.img_floor + "'>"
                    }

                    return html
                }
            },
            { "data": "nama_kategori" },
            {
                "render": function (data, type, row) {

                    var html;

                    if (row.status == 1) {
                        html = "<form method='post' action='" + thisLink + "update/status-floorplan-unit/" + row.id_floor + "'>" +
                            "<input type='hidden' name='status' value='0'>" +
                            "<button type='submit' class='btn btn-success'>Active</button>" +
                            "</form>"

                    } else if (row.status == 0) {
                        html = "<form method='post' action='" + thisLink + "update/status-floorplan-unit/" + row.id_floor + "'>" +
                            "<input type='hidden' name='status' value='1'>" +
                            "<button type='submit' class='btn btn-secondary active'>Inactive</button>" +
                            "</form>"
                    }

                    return html;

                }
            },
            { "data": "created_at" },
            {
                "render": function (data, type, row) {
                    var html = "<a href='" + thisLink + "floorplan-unit/view/" + row['id_floor'] + "' class='btn btn-primary' ><i class='fa fa-pencil'></i></a> "
                    html += "<button type='button' onclick='del(" + row['id_floor'] + ")' class='btn btn-danger'><i class='fa fa-trash'></i></button> "

                    return html
                }
            },
        ],
    });

    //tableversi
    $('#tableversi').DataTable({
        "scrollX": true,
        "processing": true,
        "serverSide": true,
        "ordering": false,
        "ajax":
        {
            "url": thisLink + "VersiController/datatables",
            "type": "POST"
        },
        "deferRender": true,
        "aLengthMenu": [[5, 10, 50], [5, 10, 50]],
        "columns": [
            {
                render: function (data, type, row, meta) {
                    var angka = meta.row + meta.settings._iDisplayStart + 1;

                    return angka

                }
            },
            { "data": "nama_versi" },
            { "data": "created_at" },
            {
                "render": function (data, type, row) {
                    var html = "<a href='" + thisLink + "versi/view/" + row['id_versi'] + "' class='btn btn-primary' ><i class='fa fa-pencil'></i></a> "
                    html += "<button type='button' onclick='del(" + row['id_versi'] + ")' class='btn btn-danger'><i class='fa fa-trash'></i></button> "

                    return html
                }
            },
        ],
    });

})
