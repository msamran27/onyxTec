@extends('layouts.master')

@section('content')
<body>
    <section id="data-list-view" class="data-list-view-header">
        <div class="table-responsive">
            <table class="table data-list-view" id="datatable">
                <thead>
                <tr>
                    <th></th>
                    <th>firstname</th>
                    <th>lastname</th>
                    <th>cnic</th>
                    <th>Birthday</th>
                    <th>Age</th>
                    <th>gender</th>
                    <th>Course Code</th>
                    <th>created_at</th>
                </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
    </section>
</body>
<script>
    hasMore = true;
    $(document).ready(function () {
        "use strict";
        let table = $('.data-list-view').DataTable({
            responsive: false,
            processing: true,
            serverSide: true,
            mobile
            columns: [
                {data: 'id'}, //dummy col to fix chechkbox issue
                {data: 'firstname', name: 'students.firstname'},
                {data: 'lastname', name: 'students.lastname'},
                {data: 'cnic', name: 'students.cnic'},
                {data: 'birthday', name: 'students.birthday'},
                {data: 'age', name: 'students.age'},
                {data: 'gender', name: 'students.gender'},
                {data: 'course_code', name: 'Courses.course_code'},
                {data: 'created_at', name: 'students.created_at'},
            ],
            columnDefs: [{
                orderable: true,
                targets: 0,
                checkboxes: {selectRow: false},
            }],
            "dom": '<"top"<"actions action-btns"B><"action-filters"f>><"clear">rt<"bottom"<"actions">>',
            "oLanguage": {
                "sLengthMenu": "_MENU_",
                "sSearch": ""
            },
            "aLengthMenu": [[10, 15, 20], [10, 15, 20]],
            select: {
                selector: 'td:first-child',
                style: 'multi'
            },
            order: [[1, 'desc']],
            bInfo: false,
            "pageLength": 50,
            drawCallback: function (settings, json) {
                hasMore = this.api().page.hasMore();
            },
        });

         // Scroller
         $(window).scroll(function() {
            if($(window).scrollTop() + $(window).height() >= $(document).height()) {
                console.log('Has more data', hasMore);
                if(hasMore){
                    $(".hasMoreData").css('display', 'block');
                    table.page.loadMore();
                }
            }
        });
    });


            // Scroller
            // $(window).scroll(function() {
            //     if($(window).scrollTop() + $(window).height() >= $(document).height()) {
            //         console.log('Has more data', hasMore);
            //         if(hasMore){
            //             $(".hasMoreData").css('display', 'block');
            //             table.page.loadMore();
            //         }
            //     }
            // });

            // To append actions dropdown before add new button
            // var actionDropdown = $(".actions-dropodown");
            // actionDropdown.insertBefore($(".top .actions .dt-buttons"));

            // to check and uncheck checkboxes on click of <td> tag
            /*$(".data-list-view, .data-thumb-view").on("click", "tbody td", function () {
                var dtCheckbox = $(this).parent("tr").find(".dt-checkboxes-cell .dt-checkboxes");
                $(this).closest("tr").toggleClass("selected");
                dtCheckbox.prop("checked", !dtCheckbox.prop("checked"));
            });*/

            // $(document).on("change", ".dt-checkboxes", function () {
            //     $(this).closest("tr").toggleClass("selected");
            //     $('#checked_delete_button').toggleClass('disabled');
            // });

            // $(".dt-checkboxes-select-all input").on("click", function () {
            //     var checked = $(".dt-checkboxes-select-all input").prop('checked');
            //     if (checked) {
            //         $(".data-list-view").find("tbody tr").addClass("checked");
            //         $('#checked_delete_button').addClass('disabled');
            //     } else {
            //         $(".data-list-view").find("tbody tr").removeClass("checked");
            //         $('#checked_delete_button').removeClass('disabled');
            //     }
            //     /*$(".data-list-view").find("tbody tr").toggleClass("checked");
            //     $(".data-thumb-view").find("tbody tr").toggleClass("selected");
            //     $('#checked_delete_button').toggleClass('disabled');*/

            //     if ($(".data-list-view").find("tbody tr.selected").length) {
            //         $.each($(".data-list-view").find("tbody tr.selected"), function () {
            //             if ($(".dt-checkboxes-select-all input").prop('checked')) {
            //                 $(".data-list-view").find("tbody tr").addClass("selected");
            //                 $(".data-thumb-view").find("tbody tr").addClass("selected");
            //                 $('#checked_delete_button').removeClass('disabled');
            //             } else {
            //                 $(".data-list-view").find("tbody tr").removeClass("selected");
            //                 $(".data-thumb-view").find("tbody tr").removeClass("selected");
            //                 $('#checked_delete_button').addClass('disabled');
            //             }
            //         })
            //     } else {
            //         $(".data-list-view").find("tbody tr").toggleClass("selected");
            //         $(".data-thumb-view").find("tbody tr").toggleClass("selected");
            //     }
            // });

            // Scrollbar
            // if ($(".data-items").length > 0) {
            //     new PerfectScrollbar(".data-items", {wheelPropagation: false});
            // }

            // Close sidebar
            // $(".hide-data-sidebar, .cancel-data-btn").on("click", function () {
            //     $(".add-new-data").removeClass("show");
            //     $(".overlay-bg").removeClass("show");
            //     $('#new_outlet_form')[0].reset();
            //     $('#address_information_div').hide();
            //     $('#online').prop('selectedIndex', 0);
            //     $('#city_id').empty();
            // });

            // mac chrome checkbox fix
            // if (navigator.userAgent.indexOf('Mac OS X') !== -1) {
            //     $(".dt-checkboxes-cell input, .dt-checkboxes").addClass("mac-checkbox");
            // }

            // setInterval(function () {
            //     if ($(".data-list-view").find("tbody tr.selected").length)
            //         $('#checked_delete_button').removeClass('disabled');
            //     else
            //         $('#checked_delete_button').addClass('disabled');
            // }, 1000);
</script>
@endsection
