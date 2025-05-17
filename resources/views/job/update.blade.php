<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Job Position | AMS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body class="bg-gray-100 flex justify-space-between">
    @include('layouts.nav')

    <div class="container mx-auto mt-8">
        <h1 class="text-2xl font-bold mb-4">Edit Job Positions</h1>

        <!-- Modal for Adding Job Position -->
        <div id="addJobModal" class=" fixed inset-0 mt-4 bg-surfaceAlt flex items-center justify-center">
            <div class="bg-surface p-6 rounded shadow-lg w-1/3">
                <h2 class="text-xl text-textMain font-bold mb-4">Edit Job Position</h2>
                <form action="{{ route('job.update',$jobposition->JobId) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-4">
                        <label for="title" class="block text-sm font-medium text-textMain mb-3">Job Title</label>
                        <input type="text" name="title" id="title" class="w-full px-4 py-2 border border-gray-600 bg-surface text-textMain text-center focus:outline" value="{{$jobposition->Title}}" required>
                    </div>
                    <div class="mb-4">
                        <label for="department" class="block text-sm font-medium text-textMain mb-3">Department</label>
                        <input type="text" name="department" id="department" class="w-full px-4 py-2 border border-gray-600 text-textMain bg-surface text-center focus:outline" value="{{$jobposition->Department}}" required>
                    </div>
                    <div class="mb-4">
                        <label for="description" class="block text-sm font-medium text-textMain mb-3">Description</label>
                        <input type="text" name="description" id="description" class="w-full px-4 py-2 border border-gray-600 text-textMain bg-surface text-center focus:outline" rows="4"  value="{{$jobposition->Description}}" required >
                    </div>
                    <div class="mb-4">
                        <label for="RequiredQualification" class="block text-sm font-medium text-textMain mb-3">Required Qualification</label>
                        <input type="text" name="requiredQualifications" id="RequiredQualification" class="w-full px-4 py-2 text-textMain border border-gray-700 bg-surface text-center focus:outline" value="{{$jobposition->RequiredQualifications}}" required>
                    </div>

                    <div class="flex justify-end">
                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                            Save
                        </button>
                    </div>
                </form>
            </div>
        </div>
          @if(session('success'))
            <div class="bg-green-500 text-white p-4 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif
