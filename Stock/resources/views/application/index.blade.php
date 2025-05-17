<!-- filepath: d:\application\resources\views\applicant\index.blade.php -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Applicants | AMS</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body class="bg-background text-textMain min-h-screen">
    @include('layouts.nav')

    <div class="container mx-auto mt-16 px-4">
        <h1 class="text-3xl py-3 shadow-sm text-textMain font-bold mb-4">Manage Applications</h1>

        <!-- Add Applicant Button -->
        @if($errors->any())
<div class="bg-red-500 text-white p-4 rounded mb-4">
    <ul class="list-disc list-inside">
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
        <button
            class="bg-gradient-to-r from-blue-500 to-purple-600 text-white px-6 py-2 mt-5 rounded-xl shadow hover:opacity-90 transition"
            onclick="document.getElementById('addApplicantModal').classList.remove('hidden')">
            ➕ Add Application
        </button>
       @if(session('success'))
       <div class="bg-green-600 p-5 rounded-lg text-white">
        {{session('success')}}
       </div>
       @endif

        <!-- Modal for Adding Applicant -->
        <div id="addApplicantModal" class="hidden fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50">
            <div class="bg-surface backdrop-blur-md p-6 rounded-2xl  shadow-lg w-full max-w-md border border-white border-opacity-10">
                <h2 class="text-2xl font-semibold text-center text-accentTeal mb-4">Add Application</h2>
                <form action="{{ route('applicant.store') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="name" class="block text-sm font-medium mb-3 text-textMain">Firstname</label>
                        <input type="text" name="firstname" id="name" class="w-full px-4 py-2 bg-surface text-white rounded border border-gray-700 focus:outline-none" required>
                    </div>
                    <div class="mb-4">
                        <label for="lastname" class="block text-sm font-medium mb-3 text-textMain">LastName</label>
                        <input type="text" name="lastname" class="w-full px-4 py-2 bg-surface text-textMain rounded border border-gray-700 focus:outline-none" required>
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium mb-3 text-textMain">Email</label>
                        <input type="email" name="email"  class="w-full px-4 py-2 bg-surface text-textMain rounded border border-gray-700 focus:outline-none" required>
                    </div>
                    <div class="mb-4">
                        <label for="contactnumber" class="block text-sm font-medium mb-3 text-textMain">Contact Number</label>
                        <input type="number" name="contactnumber"   class="w-full px-4 py-2 bg-surface text-textMain rounded border border-gray-700 focus:outline-none" min="10" required>
                    </div>
                    <div class="mb-4">
                        <label for="applicationdate" class="block text-sm font-medium mb-3 text-textMain">Application Date</label>
                        <input type="date" name="applicationdate"  class="w-full px-4 py-2 bg-surface text-textMain rounded border border-gray-700 focus:outline-none" required>
                    </div>
                    <div class="flex justify-end space-x-2">
                        <button type="button"
                            class="px-4 py-2 bg-gray-600 hover:bg-gray-700 rounded text-white"
                            onclick="document.getElementById('addApplicantModal').classList.add('hidden')">
                            Cancel
                        </button>
                        <button type="submit" class="px-4 py-2 bg-gradient-to-r from-gradientBlue to-purple-600 rounded mr-2 hover:bg-opacity-10">
                            Save
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Table to Display Applicants -->
        <div class="mt-8 overflow-x-auto">
            <table class="min-w-full bg-surfaceAlt text-sm text-white rounded-xl overflow-hidden shadow-lg">
                <thead class="bg-surface text-left text-gray-300 uppercase >
                    <tr class="">
                        <th class="py-3 px-6 text-left">FirstName</th>
                        <th class="py-3 px-6 text-left">LastName</th>
                        <th class="py-3 px-6 text-left">Email</th>
                        <th class="py-3 px-6 text-left">ContactNumber</th>
                        <th class="py-3 px-6 text-left">ApplicationDate</th>
                        <th class="py-3 px-6 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody class="text-textMain  text-sm font-light">
                    @foreach ($applicants as $applicant)
                        <tr class="border-t border-gray-700 hover:bg-surface">
                            <td class="py-3 px-6 text-left">{{ $applicant->FirstName }}</td>
                            <td class="py-3 px-6 text-left">{{ $applicant->LastName }}</td>
                            <td class="py-3 px-6 text-left">{{ $applicant->Email }}</td>
                            <td class="py-3 px-6 text-left">{{ $applicant->ContactNumber }}</td>
                            <td class="py-3 px-6 text-left">{{ $applicant->ApplicationDate }}</td>
                            <td class="py-3 px-6 text-center">
                                <button class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600"><a href="{{route('applicant.edit',$applicant->ApplicantId)}}">Edit</a></button>
                                <form action="{{ route('applicant.destroy',$applicant->ApplicantId) }}" method="POST" class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
