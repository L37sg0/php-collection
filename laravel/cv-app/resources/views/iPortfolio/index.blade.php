@extends('iPortfolio.app')
@section('content')
{{--@include('iPortfolio.components.content.breadcrumbs')--}}
{{--@include('iPortfolio.components.content.testimonials')--}}
{{--@include('iPortfolio.components.content.services')--}}
{{--@include('iPortfolio.components.content.skills')--}}
{{--@include('iPortfolio.components.content.facts')--}}
@include('iPortfolio.components.content.resume-list')
{{--@include('iPortfolio.components.content.about')--}}
{{--@include('iPortfolio.components.content.datatable')--}}

@endsection
@section('scripts')
    <script>
        $(document).ready(function () {
            index();

            function index() {
                $.ajax({
                    type: "GET",
                    url: "/api/applicants",
                    dataType: "json",
                    success: function (response) {
                        $(".resume-list").html("");
                        data = response.data;
                        $.each(data, function (key, applicant) {
                            $(".resume-list").append(
                                '<div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" id="cv-item-' + applicant.id + '">\
                                    <h4 class="title"><a href="/cvs/' + applicant.id + '">' + applicant.first_name + ' ' + applicant.last_name + '</a></h4>\
                                    <p class="description"></p>\
                                    <p class="mt-4 text-sm/relaxed">Email: ' + applicant.email + '</p>\
                                    <p class="mt-4 text-sm/relaxed">Phone: ' + applicant.phone + '</p>\
                                    <p class="mt-4 text-sm/relaxed">Born: ' + applicant.birth_date + '</p>\
                                    <p class="mt-4 text-sm/relaxed">Gender: ' + applicant.gender_name + '</p>\
                                </div>'
                            );
                        })
                    }
                })
            }
        });
    </script>
@endsection
