@extends('iPortfolio.app')
@section('content')
@include('iPortfolio.components.content.about')
@include('iPortfolio.components.content.skills')
@include('iPortfolio.components.content.educations')
@endsection

@section('scripts')
    <script>
        $(document).ready(function () {
            show({{ $id }});

            function show(id) {
                $.ajax({
                    type: "GET",
                    url: "/api/applicants/" + id,
                    dataType: "json",
                    success: function (response) {
                        applicant = response.data;

                        $(".about-name").html("");
                        $(".about-name").append(applicant.first_name + " " + applicant.last_name);
                        $(".about-birthday").html("");
                        $(".about-birthday").append(applicant.birth_date);
                        $(".about-phone").html("");
                        $(".about-phone").append(applicant.phone);
                        // $(".about-degree").html("");
                        // $(".about-degree").append(applicant.degree);
                        $(".about-email").html("");
                        $(".about-email").append(applicant.email);
                        $(".resume-list").html("");

                        $(".about-skills").html("");
                        $.each(applicant.skills, function (key, skill) {
                            $(".about-skills").append(
                                '<div class="progress">\
                                    <span class="skill"> ' + skill.name + ' <i class="val">100%</i></span>\
                                    <div class="progress-bar-wrap">\
                                        <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0"\
                                             aria-valuemax="100"></div>\
                                    </div>\
                                </div>'
                            );

                            console.log(skill.name)
                        });

                        $(".about-educations").html("");
                        $.each(applicant.educations, function (key, education) {
                            $(".about-educations").append(
                                '<div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">\
                                    <div class="icon"><i class="bi bi-briefcase"></i></div>\
                                    <h4 class="title"><a href="/api/universities/' + education.unv_id + '">' + education.university + '</a></h4>\
                                    <p class="description">From: ' + education.date_from + '</p>\
                                    <p class="description">To: ' + education.date_to + '</p>\
                                    <p class="description">Specialty: ' + education.specialty + '</p>\
                                    <p class="description">Degree: ' + education.degree_name + '</p>\
                                    <p class="description">Acc. Assessment: ' + education.accreditation_assessment + '</p>\
                                </div>'
                            );
                        })
                    }
                })
            }
        });
    </script>
@endsection


