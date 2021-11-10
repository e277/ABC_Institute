<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <!-- component -->
                    <div class="flex justify-center items-center w-full bg-blue-400">
                        <div class="w-1/2 bg-white rounded shadow-2xl p-8 m-4">
                            <h1 class="block w-full text-center text-gray-800 text-2xl font-bold mb-6">Component Form</h1>
                            <form action="/" method="post">
                                <div class="flex flex-col mb-4">
                                    <label class="mb-2 font-bold text-lg text-gray-900" for="first_name">First Name</label>
                                    <input class="border py-2 px-3 text-grey-800" type="text" name="first_name" id="first_name">
                                </div>
                                <div class="flex flex-col mb-4">
                                    <label class="mb-2 font-bold text-lg text-gray-900" for="last_name">Last Name</label>
                                    <input class="border py-2 px-3 text-grey-800" type="text" name="last_name" id="last_name">
                                </div>
                                <div class="flex flex-col mb-4">
                                    <label class="mb-2 font-bold text-lg text-gray-900" for="email">Email</label>
                                    <input class="border py-2 px-3 text-grey-800" type="email" name="email" id="email">
                                </div>
                                <div class="flex flex-col mb-4">
                                    <label class="mb-2 font-bold text-lg text-gray-900" for="password">Password</label>
                                    <input class="border py-2 px-3 text-grey-800" type="password" name="password" id="password">
                                </div>
                                <div class="flex flex-col mb-4">
                                    <label class="mb-2 font-bold text-lg text-gray-900" for="Date">Date</label>
                                    <input class="border py-2 px-3 text-grey-800" type="date" name="date" id="date">
                                </div>
                                <div class="flex flex-col mb-4">
                                    <label class="mb-2 font-bold text-lg text-gray-900" for="File">File</label>
                                    <input class="border py-2 px-3 text-grey-800" type="file" name="file" id="file">
                                </div>
                                <div class="flex flex-col mb-4">
                                    <label class="mb-2 font-bold text-lg text-gray-900" for="color">Range</label>
                                    <input class="border py-2 text-grey-800" type="range" name="range" id="range">
                                </div>
                                <div class="flex flex-col mb-4">
                                    <label class="mb-2 font-bold text-lg text-gray-900" for="textarea">textarea</label>
                                    <textarea class="border py-2 px-3 text-grey-800" name="textarea" id="textarea"></textarea>
                                </div>
                                <div class="flex flex-col mb-4">
                                    <label class="mb-2 font-bold text-lg text-gray-900" for="Select">Select</label>
                                    <select class="border py-2 px-3 text-grey-800">
                                        <option>Surabaya</option>
                                        <option>Jakarta</option>
                                        <option>Bandung</option>
                                        <option>Mojokerto</option>
                                    </select>
                                </div>
                                <button class="block bg-green-400 hover:bg-green-600 text-white uppercase text-lg mx-auto p-4 rounded" type="submit">Save</button>
                            </form>
                        </div>
                    </div> {{-- End of Table --}}

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
