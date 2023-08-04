@extends('layouts.admin')
@section('pageTitle', $pageTitle)

@section('pageInnerStyle')
    <link rel="stylesheet" href="{{ asset('css/calendar.css') }}">
@endsection

@section('content')
    <div id="kt_docs_fullcalendar_selectable"></div>
    @include('admin.followup.components.table')
@endsection

@section('pageScriptFiles')
    <script src="{{ asset('js/calendar.js') }}"></script>
@endsection

@push('pageInnerScript')
    <script>
        var calendarEl = document.getElementById("kt_docs_fullcalendar_selectable");

        var calendar = new FullCalendar.Calendar(calendarEl, {
            headerToolbar: {
                left: "prev,next today",
                center: "title",
                right: "dayGridMonth,timeGridWeek,timeGridDay"
            },
            initialDate: new Date,
            navLinks: true, // can click day/week names to navigate views
            selectable: true,
            selectMirror: true,

            // Create new event
            select: function (arg) {
                Swal.fire({
                    html: '<div class="mb-7">Create new event?</div>' +
                        '<div class="fw-bolder mb-5">Event Name:</div>' +
                        '<input type="text" class="form-control" name="event_name"/>',
                    icon: "info",
                    showCancelButton: true,
                    buttonsStyling: false,
                    confirmButtonText: "Yes, create it!",
                    cancelButtonText: "No, return",
                    customClass: {
                        confirmButton: "btn btn-primary",
                        cancelButton: "btn btn-active-light"
                    }
                }).then(function (result) {
                    if (result.value) {
                        var title = document.querySelector("input[name='event_name']").value;
                        if (title) {
                            calendar.addEvent({
                                title: title,
                                start: arg.start,
                                end: arg.end,
                                allDay: arg.allDay
                            })
                        }
                        calendar.unselect()
                    } else if (result.dismiss === "cancel") {
                        Swal.fire({
                            text: "Event creation was declined!.",
                            icon: "error",
                            buttonsStyling: false,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn btn-primary",
                            }
                        });
                    }
                });
            },

            // Delete event
            eventClick: function (arg) {
                Swal.fire({
                    text: "Are you sure you want to delete this event?",
                    icon: "warning",
                    showCancelButton: true,
                    buttonsStyling: false,
                    confirmButtonText: "Yes, delete it!",
                    cancelButtonText: "No, return",
                    customClass: {
                        confirmButton: "btn btn-primary",
                        cancelButton: "btn btn-active-light"
                    }
                }).then(function (result) {
                    if (result.value) {
                        arg.event.remove()
                    } else if (result.dismiss === "cancel") {
                        Swal.fire({
                            text: "Event was not deleted!.",
                            icon: "error",
                            buttonsStyling: false,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn btn-primary",
                            }
                        });
                    }
                });
            },
            editable: true,
            dayMaxEvents: true, // allow "more" link when too many events
            events: [
                {
                    title: "All Day Event",
                    start: "2023-07-01"
                },
                {
                    title: "Long Event",
                    start: "2023-07-07",
                    end: "2023-07-10"
                },
                {
                    groupId: 999,
                    title: "Repeating Event",
                    start: "2023-07-09T16:00:00"
                },
                {
                    groupId: 999,
                    title: "Repeating Event",
                    start: "2023-07-16T16:00:00"
                },
                {
                    title: "Conference",
                    start: "2023-07-11",
                    end: "2023-07-13"
                },
                {
                    title: "Meeting",
                    start: "2023-07-12T10:30:00",
                    end: "2023-07-12T12:30:00"
                },
                {
                    title: "Lunch",
                    start: "2023-07-12T12:00:00"
                },
                {
                    title: "Meeting",
                    start: "2023-07-12T14:30:00"
                },
                {
                    title: "Happy Hour",
                    start: "2023-07-12T17:30:00"
                },
                {
                    title: "Dinner",
                    start: "2023-07-12T20:00:00"
                },
                {
                    title: "Birthday Party",
                    start: "2023-07-13T07:00:00"
                },
                {
                    title: "Testing URL",
                    url: "https://www.google.com",
                    start: "2023-07-28"
                }
            ]
        });

        calendar.render();
    </script>
@endpush