<!-- skills input modal -->
<div>
    <button
        type="button"
        class="inline-block w-full rounded bg-red-500 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-primary-3 transition duration-150 ease-in-out hover:bg-red-600 hover:shadow-primary-2 focus:bg-red-600 focus:shadow-primary-2 focus:outline-none focus:ring-0 active:bg-red-600 active:shadow-primary-2 dark:shadow-black/30 dark:hover:shadow-dark-strong dark:focus:shadow-dark-strong dark:active:shadow-dark-strong"
        onclick="openModalAddSkill()"
    >
        Add Skill
    </button>

    <!-- Modal backdrop -->
    <div id="modalBackdropAddSkill" class="fixed inset-0 bg-gray-900 bg-opacity-50 z-50 hidden"></div>

    <!-- Modal -->
    <div id="skillsModalAddSkill" class="fixed inset-0 flex items-center justify-center z-50 hidden">
        <div class="bg-dark rounded-lg shadow-lg w-full md:w-96 max-h-[80vh] overflow-y-auto p-6">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-xl font-semibold text-black dark:text-white">Add Skill</h2>
                <button type="button" class="text-gray-500 hover:text-gray-700" onclick="closeModalAddSkill()">
                    <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                              d="M3.293 3.293a1 1 0 011.414 0L10 8.586l5.293-5.293a1 1 0 111.414 1.414L11.414 10l5.293 5.293a1 1 0 01-1.414 1.414L10 11.414l-5.293 5.293a1 1 0 01-1.414-1.414L8.586 10 3.293 4.707a1 1 0 010-1.414z"
                              clip-rule="evenodd"/>
                    </svg>
                </button>
            </div>
                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-700 dark:text-white">Skill:</label>
                    <input type="text" id="name" name="name" class="skill-name-input form-input mt-1 block w-full"
                           placeholder="Enter your skill">
                </div>
                <div class="flex justify-end">
                    <button
                            class="submit-skill  inline-block px-6 py-2 bg-red-500 text-white rounded shadow hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500">
                        Submit
                    </button>
                </div>
        </div>
    </div>
</div>

    <script>
        function openModalAddSkill() {
            document.getElementById('modalBackdropAddSkill').classList.remove('hidden');
            document.getElementById('skillsModalAddSkill').classList.remove('hidden');
        }

        function closeModalAddSkill() {
            document.getElementById('modalBackdropAddSkill').classList.add('hidden');
            document.getElementById('skillsModalAddSkill').classList.add('hidden');
        }
    </script>

@section('scripts')
    <script>
        $(document).ready(function () {
            $(".submit-skill").click(function () {
                name = $(".skill-name-input").value
                submitSkill(name);
            })

            function submitSkill(name) {
                $.ajax({
                    type: "POST",
                    url: "/api/skills/create",
                    data: {
                        name: name
                    },
                    success: function (response) {
                        console.log(response.data);
                    }
                });
            }
        });
    </script>
@endsection
