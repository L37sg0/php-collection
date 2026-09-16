<!-- skills multi-select (in modal) -->
<div>
    <button
        type="button"
        class="inline-block w-full rounded bg-red-500 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-primary-3 transition duration-150 ease-in-out hover:bg-red-600 hover:shadow-primary-2 focus:bg-red-600 focus:shadow-primary-2 focus:outline-none focus:ring-0 active:bg-red-600 active:shadow-primary-2 dark:shadow-black/30 dark:hover:shadow-dark-strong dark:focus:shadow-dark-strong dark:active:shadow-dark-strong"
        onclick="openModal()"
    >
        Select skills
    </button>

    <!-- Modal backdrop -->
    <div id="modalBackdrop" class="fixed inset-0 bg-gray-900 bg-opacity-50 z-50 hidden"></div>

    <!-- Modal -->
    <div id="skillsModal" class="fixed inset-0 flex items-center justify-center z-50 hidden">
        <div class="bg-dark rounded-lg shadow-lg w-full md:w-96 max-h-[80vh] overflow-y-auto p-6">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-xl font-semibold text-black dark:text-white">Select skills</h2>
                <button type="button" class="text-gray-500 hover:text-gray-700" onclick="closeModal()">
                    <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                              d="M3.293 3.293a1 1 0 011.414 0L10 8.586l5.293-5.293a1 1 0 111.414 1.414L11.414 10l5.293 5.293a1 1 0 01-1.414 1.414L10 11.414l-5.293 5.293a1 1 0 01-1.414-1.414L8.586 10 3.293 4.707a1 1 0 010-1.414z"
                              clip-rule="evenodd"/>
                    </svg>
                </button>
            </div>
            <div class="mb-4">
                <ul class="divide-y divide-gray-200 skills-list">
                    <li
                        class="py-2 px-4 cursor-pointer hover:bg-gray-100"
                        onclick="toggleOption(this)"
                    >
                        <input type="checkbox" id="skills_male" name="skills[]" value="1" class="hidden"/>
                        <label for="skills_male" class="block cursor-pointer dark:text-white">Male</label>
                    </li>
                    <!-- Add more options as needed -->
                </ul>
            </div>
            <div class="flex justify-end">
                <button
                    type="button"
                    class="inline-block px-6 py-2 bg-red-500 text-white rounded shadow hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500"
                    onclick="closeModal()"
                >
                    Done
                </button>
            </div>
        </div>
    </div>
</div>
@section('scripts')
<script>
    function openModal() {
        document.getElementById('modalBackdrop').classList.remove('hidden');
        document.getElementById('skillsModal').classList.remove('hidden');
    }

    function closeModal() {
        document.getElementById('modalBackdrop').classList.add('hidden');
        document.getElementById('skillsModal').classList.add('hidden');
    }

    function toggleOption(option) {
        const checkbox = option.querySelector('input[type="checkbox"]');
        checkbox.checked = !checkbox.checked;
        const selected = checkbox.checked;
        option.classList.toggle('bg-red-900', selected);
    }

    $(document).ready(function () {
        loadSkills();

        function loadSkills() {
            $.ajax({
                type: "GET",
                url: "/api/skills",
                dataType: "json",
                success: function (response) {
                    $(".skills-list").html("");
                    data = response.data;
                    $.each(data, function (key, skill) {
                        $(".skills-list").append(
                            '<li class="py-2 px-4 cursor-pointer hover:bg-red-500" onclick="toggleOption(this)">\
                                <input type="checkbox" id="skills_' + skill.id + '" name="skills[]" value="' + skill.id + '" class="hidden"/>\
                            <label for="skills_' + skill.id + '" class="block cursor-pointer dark:text-white">' + skill.name + '</label>\
                        </li>'
                        );
                    });
                }
            });
        }
    });
</script>
@endsection
