<!-- Custom fonts for this template-->
<link href="/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

<!-- Custom styles for this template-->
<link href="{{ asset('/admin/css/sb-admin-2.css') }}" rel="stylesheet">
<link href="{{ asset('/admin/css/sb-admin-2.min.css') }}" rel="stylesheet">

<link href="/admin/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
<link href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" rel="stylesheet">

<style>
    .buttondashboard {
        position: absolute;
        bottom: 8px;
        right: 8px;
        width: 50px;
        height: 100%;
        border-radius: 50%;
        cursor: pointer;
        border: none;
        background: none;
        margin-top: 10px;
    }

    button i {
        color: rgb(93, 94, 95);
        margin-top: 15px;
    }

    .searchdashboard {
        width: 260px;
        height: 35px;
        display: block;
        border-radius: 25px;
        font-size: 17px;
        padding: 8px 40px 8px 20px;
        border: none;

    }

    .squadbutton {
        position: absolute;
        bottom: 8px;
        right: 8px;
        width: 50px;
        height: 100%;
        border-radius: 50%;
        cursor: pointer;
        border: none;
        background: none;
        font-size: 18px;
        margin-top: 10px;
    }

    button .squadicon {
        color: rgb(93, 94, 95);
        margin-bottom: 15px;
    }

    .squadsearch {
        width: 260px;
        height: 35px;
        display: block;
        border-radius: 25px;
        font-size: 17px;
        padding: 8px 40px 8px 20px;
        border: none;

    }

    .squaddtab {
        border-collapse: collapse;
        width: 100%;
        margin-top: 40px;
        border: 1px solid black;
    }

    .squaddtab th {
        background-color: #B9B9B9;
        color: black;
        text-align: center;
        border: 1px solid black;
        border-top: 1px solid black;
        padding: 8px;
    }

    .squaddtab td {
        border: 1px solid black;
        border-top: 1px solid black;
        text-align: left;
        padding: 8px;
    }

    .squaddtab tr:nth-child(odd) {
        background-color: #E8E8E8
    }

    .squaddtab tr:nth-child(even) {
        background-color: white
    }

    .prioritydtab {
        border-collapse: collapse;
        width: 100%;
        margin-top: 40px;
        border: 1px solid black;
    }

    .prioritydtab th {
        background-color: #B9B9B9;
        color: black;
        text-align: center;
        border: 1px solid black;
        border-top: 1px solid black;
        padding: 8px;
    }

    .prioritydtabtd {
        border: 1px solid black;
        border-top: 1px solid black;
        text-align: left;
        padding: 8px;
    }

    .prioritydtab tr:nth-child(odd) {
        background-color: #E8E8E8
    }

    .prioritydtab tr:nth-child(even) {
        background-color: white
    }

    .prioritydbutton {
        position: absolute;
        bottom: 0px;
        right: 8px;
        width: 50px;
        height: 100%;
        border-radius: 50%;
        cursor: pointer;
        border: none;
        background: none;
        font-size: 18px;
        margin-top: 10px;
    }

    button .prioritydicon {
        color: rgb(93, 94, 95);
        margin-top: 22px;
    }

    .prioritydsearch {
        width: 260px;
        height: 35px;
        display: block;
        border-radius: 25px;
        font-size: 17px;
        padding: 8px 40px 8px 20px;
        border: none;
        margin-right: 15px;
    }

    .statusdtab {
        border-collapse: collapse;
        width: 100%;
        margin-top: 40px;
        border: 1px solid black;
    }

    .statusdtab th {
        background-color: #B9B9B9;
        color: black;
        text-align: center;
        border: 1px solid black;
        border-top: 1px solid black;
        padding: 8px;
    }

    .statusdtab td {
        border: 1px solid black;
        border-top: 1px solid black;
        text-align: left;
        padding: 8px;
    }

    .statusdtab tr:nth-child(odd) {
        background-color: #E8E8E8
    }

    .statusdtab tr:nth-child(even) {
        background-color: white
    }

    table,
    th,
    td {
        border: 1px solid black;
    }

    th {
        font-weight: bold;
    }

    #pagination {
        display: flex;
        justify-content: end;
        margin-top: 20px;
    }

    .tbutton {
        margin-right: 60px;
        background-color: #0060FF;
        border-radius: 15px;
        width: 90px;
        height: 25px;
        padding: 3px;
    }

    .tbutton h6 {
        color: white;
        text-align: center;
    }

    .cbutton {
        background-color: #0060FF;
        border-radius: 15px;
        width: 90px;
        height: 25px;
        padding: 3px;
        margin-right: 10px;
    }

    .cbutton h6 {
        color: white;
        text-align: center;
    }
</style>
