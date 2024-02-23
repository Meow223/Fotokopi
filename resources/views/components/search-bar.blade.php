<div class="flex items-center">
    <form action="{{ $action }}" method="GET" class="relative">
        <input type="search" name="search" id="search" placeholder="{{ $placeholder }}"
            class="py-1 px-3 bg-gray-200 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400"
            style="width: {{ $width }};">
        <button type="submit" class="absolute right-2 top-1/2 transform -translate-y-1/2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                fill="currentColor">
                <path fill-rule="evenodd"
                    d="M12.707 11.293a1 1 0 010 1.414l-3 3a1 1 0 01-1.414-1.414L10.586 12l-2.293-2.293a1 1 0 111.414-1.414l3 3zM5 9a4 4 0 110 8 4 4 0 010-8zm9 5a5 5 0 11-10 0 5 5 0 0110 0z"
                    clip-rule="evenodd" />
            </svg>
        </button>
    </form>
</div>
