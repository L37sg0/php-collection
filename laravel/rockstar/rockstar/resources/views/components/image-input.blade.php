@props([
    'image' => 'https://tecdn.b-cdn.net/img/new/standard/city/041.jpg',
    'id' => '',
    'name' => ''
])

<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>
<div x-data="showImage{{$id}}()" class="flex items-center justify-center h-screen mt-32 mb-32 bg-gray-200">
    <div class="bg-white rounded-lg shadow-xl md:w-9/12 lg:w-1/2">
        <div class="m-4">
            <label class="inline-block mb-2 text-gray-500">Upload
                Image(jpg,png)</label>
            <div class="flex items-center justify-center w-full">
                <label
                    class="flex flex-col w-full h-32 border-4 border-dashed hover:bg-gray-100 hover:border-gray-300">
                    <div class="relative flex flex-col items-center justify-center pt-7">
                        <img id="{{$id}}-preview"
                            src="{{$image}}"
                            class="max-w-sm rounded border bg-white p-1 dark:border-neutral-700 dark:bg-neutral-800 group-hover:text-gray-600"
                            alt="..."/>
                        <p class="pt-1 text-sm tracking-wider text-gray-400 group-hover:text-gray-600">
                            Select a photo</p>
                    </div>
                    <input type="file" class="opacity-0" accept="image/*" @change="showPreview(event)" id="{{$id}}" name="{{$name}}"/>
                </label>
            </div>
        </div>
        <div class="flex p-2 space-x-4">
            <button class="w-full px-4 py-2 text-white bg-red-500 rounded shadow-xl" type="submit">Update</button>
        </div>
    </div>
</div>
<script>
    function showImage{{$id}}() {
        return {
            showPreview(event) {
                if (event.target.files.length > 0) {
                    var src = URL.createObjectURL(event.target.files[0]);
                    var preview = document.getElementById("{{$id}}-preview");
                    preview.src = src;
                    preview.style.display = "block";
                }
            }
        }
    }
</script>
