<script>
    $(document).ready(function () {
        index();
        function index() {
            $.ajax({
                type: "GET",
                url: "/api/applicants",
                dataType: "json",
                success: function (response) {
                    $(".cv-listing").html("");
                    data = response.data;
                    $.each(data, function (key, item) {
                        $(".cv-listing").append(
                            '<a id="cv-item-' + item.id + '" class="cv-item flex items-start gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]">\
                                    <div class="flex size-12 shrink-0 items-center justify-center rounded-full bg-[#FF2D20]/10 sm:size-16">\
                                        <svg class="size-5 sm:size-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><g fill="#FF2D20"><path d="M24 8.25a.5.5 0 0 0-.5-.5H.5a.5.5 0 0 0-.5.5v12a2.5 2.5 0 0 0 2.5 2.5h19a2.5 2.5 0 0 0 2.5-2.5v-12Zm-7.765 5.868a1.221 1.221 0 0 1 0 2.264l-6.626 2.776A1.153 1.153 0 0 1 8 18.123v-5.746a1.151 1.151 0 0 1 1.609-1.035l6.626 2.776ZM19.564 1.677a.25.25 0 0 0-.177-.427H15.6a.106.106 0 0 0-.072.03l-4.54 4.543a.25.25 0 0 0 .177.427h3.783c.027 0 .054-.01.073-.03l4.543-4.543ZM22.071 1.318a.047.047 0 0 0-.045.013l-4.492 4.492a.249.249 0 0 0 .038.385.25.25 0 0 0 .14.042h5.784a.5.5 0 0 0 .5-.5v-2a2.5 2.5 0 0 0-1.925-2.432ZM13.014 1.677a.25.25 0 0 0-.178-.427H9.101a.106.106 0 0 0-.073.03l-4.54 4.543a.25.25 0 0 0 .177.427H8.4a.106.106 0 0 0 .073-.03l4.54-4.543ZM6.513 1.677a.25.25 0 0 0-.177-.427H2.5A2.5 2.5 0 0 0 0 3.75v2a.5.5 0 0 0 .5.5h1.4a.106.106 0 0 0 .073-.03l4.54-4.543Z"/></g></svg>\
                                    </div>\
                                    <div class="pt-3 sm:pt-5">\
                                        <h2 class="text-xl font-semibold text-black dark:text-white">' + item.first_name + ' ' + item.last_name + '</h2>\
                                        <p class="mt-4 text-sm/relaxed">Email: ' + item.email + '</p>\
                                        <p class="mt-4 text-sm/relaxed">Phone: ' + item.phone + '</p>\
                                        <p class="mt-4 text-sm/relaxed">Born: ' + item.birth_date + '</p>\
                                        <p class="mt-4 text-sm/relaxed">Gender: ' + item.gender_name + '</p>\
                                    </div>\
                                    <svg class="size-6 shrink-0 self-center stroke-[#FF2D20]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"/></svg>\
                                </a>'
                        );
                        $('#cv-item-' + item.id).click(function () {
                            show(item.id)
                        })
                    })
                }
            })
        }

        function show(id) {
            $.ajax({
                type: "GET",
                url: "/api/applicants/" + id,
                dataType: "json",
                success: function (response) {
                    $(".cv-listing").html("");
                    $(".cv-content").html("");
                    $(".pagination").html("");
                    applicant = response.data;
                    educations = applicant.educations;
                    skills = applicant.skills;
                    $(".cv-content").append(
                        '<div class="flex items-start gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]">\
                            <h2 class="text-xl font-semibold text-black dark:text-white">' + applicant.first_name + ' ' + applicant.mid_name + ' ' + applicant.last_name + '</h2>\
                            <div class="pt-3 sm:pt-5">\
                               <p class="mt-4 text-sm/relaxed">Email: ' + applicant.email + '</p>\
                                <p class="mt-4 text-sm/relaxed">Phone: ' + applicant.phone + '</p>\
                                <p class="mt-4 text-sm/relaxed">Born: ' + applicant.birth_date + '</p>\
                                <p class="mt-4 text-sm/relaxed">Gender: ' + applicant.gender_name + '</p>\
                            </div>\
                        </div>\
                        <div class="cv-educations flex items-start gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]">\
                            <h2 class="text-xl font-semibold text-black dark:text-white">Educations</h2>\
                        </div>\
                        <div class="cv-skills flex items-start gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]" >\
                            <h2 class="text-xl font-semibold text-black dark:text-white">Skills</h2>\
                        </div>'
                    );
                    $.each(educations, function (key, education) {
                        $(".cv-educations").append(
                            '<div class="pt-3 sm:pt-5" >\
                                <h2 class="text-xl font-semibold text-black dark:text-white">From: ' + education.date_from + ' To:' + education.date_to + '</h2>\
                                <p class="mt-4 text-sm/relaxed">University: ' + education.university + '</p>\
                                <p class="mt-4 text-sm/relaxed">Specialty: ' + education.specialty + '</p>\
                                <p class="mt-4 text-sm/relaxed">Degree: ' + education.degree_name + '</p>\
                                <p class="mt-4 text-sm/relaxed">Acreditation Assessment: ' + education.accreditation_assessment + '</p>\
                            </div>'
                        )
                    });
                    $.each(skills, function (key, skill) {
                        $(".cv-skills").append(
                            '<div class="pt-3 sm:pt-5" >\
                                <h3 class="mt-4 text-lg/relaxed">\
                                    <span class="inline-block whitespace-nowrap rounded-[0.27rem] bg-danger-100 px-[0.65em] pb-[0.25em] pt-[0.35em] text-center align-baseline text-[0.75em] font-bold leading-none text-danger-700 dark:bg-[#2c0f14] dark:text-danger-500">\
                                     ' + skill.name + '\
                                     </span>\
                                 </h3>\
                            </div>'
                        )
                    });
                }
            });
        }
    })
</script>
