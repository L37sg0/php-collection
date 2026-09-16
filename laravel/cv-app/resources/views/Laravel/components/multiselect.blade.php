<!-- Gender multi-select (collapsible) -->
<div class="relative mb-6" data-twe-input-wrapper-init>
    <div class="relative w-full">
        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
            <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd"
                      d="M2 4a2 2 0 012-2h12a2 2 0 012 2v12a2 2 0 01-2 2H4a2 2 0 01-2-2V4zm2-2a1 1 0 00-1 1v12a1 1 0 001 1h12a1 1 0 001-1V4a1 1 0 00-1-1H4z"
                      clip-rule="evenodd"/>
            </svg>
        </div>
        <div class="relative">
            <button
                type="button"
                class="peer block min-h-[auto] w-full rounded border border-gray-300 bg-transparent px-10 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[twe-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-white dark:placeholder:text-neutral-300 dark:autofill:shadow-autofill dark:peer-focus:text-primary [&:not([data-twe-input-placeholder-active])]:placeholder:opacity-0"
                id="gender_dropdown_toggle"
                aria-haspopup="listbox"
                aria-expanded="false"
                onclick="toggleGenderDropdown()"
            >
                Choose Gender
            </button>
            <ul
                id="gender_dropdown_listbox"
                class="hidden overflow-auto rounded shadow-lg absolute z-10 left-0 mt-1 w-full bg-white border border-gray-300 max-h-56"
                role="listbox"
                aria-labelledby="gender_dropdown_toggle"
                tabindex="-1"
            >
                <li
                    class="relative py-2 px-4 cursor-pointer hover:bg-gray-100"
                    role="option"
                    aria-selected="false"
                    style="background-color: transparent;"
                    onclick="toggleOption(this)"
                >
                    <input type="checkbox" id="gender_male" name="gender[]" value="1" class="hidden"/>
                    <label for="gender_male" class="block cursor-pointer dark:text-white">Male</label>
                </li>
                <li
                    class="relative py-2 px-4 cursor-pointer hover:bg-gray-100"
                    role="option"
                    aria-selected="false"
                    style="background-color: transparent;"
                    onclick="toggleOption(this)"
                >
                    <input type="checkbox" id="gender_female" name="gender[]" value="2" class="hidden"/>
                    <label for="gender_female" class="block cursor-pointer dark:text-white">Female</label>
                </li>
                <li
                    class="relative py-2 px-4 cursor-pointer hover:bg-gray-100"
                    role="option"
                    aria-selected="false"
                    style="background-color: transparent;"
                    onclick="toggleOption(this)"
                >
                    <input type="checkbox" id="gender_other" name="gender[]" value="3" class="hidden"/>
                    <label for="gender_other" class="block cursor-pointer dark:text-white">Other</label>
                </li>
                <!-- Add more options as needed -->
            </ul>
        </div>
    </div>
    <label
        for="gender_dropdown_toggle"
        class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-red-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[twe-input-state-active]:-translate-y-[0.9rem] peer-data-[twe-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-300 dark:peer-focus:text-primary"
    >
    </label>
</div>

<script>
    function toggleGenderDropdown() {
        const dropdown = document.getElementById('gender_dropdown_listbox');
        const expanded = dropdown.getAttribute('aria-expanded') === 'true';
        dropdown.setAttribute('aria-expanded', !expanded);
        dropdown.classList.toggle('hidden');
    }

    function toggleOption(option) {
        const checkbox = option.querySelector('input[type="checkbox"]');
        checkbox.checked = !checkbox.checked;
        const selected = checkbox.checked;
        option.setAttribute('aria-selected', selected);
        if (selected) {
            option.classList.add('bg-gray-100');
        } else {
            option.classList.remove('bg-gray-100');
        }
    }
</script>
