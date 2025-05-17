<!-- filepath: d:\application\resources\views\applicant\index.blade.php -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Applicants | AMS</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body class="bg-gray-100">
    @include('layouts.nav')

    <div class="container mx-auto mt-[4rem] ">
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
       @if(session('success'))
       <div class="bg-green-600 p-5 rounded-lg text-white">
        {{session('success')}}
       </div>
       @endif

        <!-- Modal for Adding Applicant -->
        <div id="addApplicantModal" class=" fixed inset-0 bg-surfaceAlt   text-textMain mt-6 flex items-center min-h-screen justify-center">
            <div class="bg-surface  p-6 rounded-lg shadow-lg w-1/3">
                <h2 class="text-2xl font-bold text-gradientBlue mb-4">Edit Applicant</h2>
                <form action="{{ route('applicant.update',$applicant->ApplicantId) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-4">
                        <label for="name" class="block text-sm font-medium text-textMain mb-3">Firstname</label>
                        <input type="text" name="firstname" value="{{$applicant->FirstName}}" class="w-full px-4 py-2 border border-gray-600 bg-surface text-center focus:outline" required>
                    </div>
                    <div class="mb-4">
                        <label for="lastname" class="block text-sm font-medium  text-textMain mb-3">LastName</label>
                        <input type="text" name="lastname"  value="{{$applicant->LastName}}" class="w-full px-4 py-2 rounded bg-surface text-textMain text-center border border-gray-600 focus:outline-none " required>
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium text-textMain mb-3">Email</label>
                        <input type="email" name="email"  value="{{$applicant->Email}}"  class="w-full px-4 py-2 rounded bg-surface text-textMain text-center border border-gray-600 focus:outline-none " required>
                    </div>
                    <div class="mb-4">
                        <label for="contactnumber" class="block text-sm font-medium text-textMain mb-3">Contact Number</label>
                        <input type="number" name="contactnumber"  value="{{$applicant->ContactNumber}}"  class="w-full px-4 py-2 rounded bg-surface text-textMain text-center border border-gray-600 focus:outline-none " min="10" required>
                    </div>
                    <div class="mb-4">
                        <label for="applicationdate" class="block text-sm font-medium text-textMain mb-3">Application Date</label>
                        <input type="date" name="applicationdate"  value="{{$applicant->ApplicationDate}}"  class="w-full px-4 py-2 rounded bg-surface text-textMain text-center border border-gray-600 focus:outline-none " required>
                    </div>
                    <div class="flex justify-end">
                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                            Save
                        </button>
                    </div>
                </form>
            </div>
        </div>
