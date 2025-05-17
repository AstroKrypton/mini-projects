<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Manage Job Position | AMS</title>
  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body class="bg-[#0f0f0f] text-[#f5f5f5] min-h-screen">
  @include('layouts.nav')

  <div class="container mx-auto mt-16 px-4">
    <h1 class=" pb-4 text-3xl   mt-[5rem] w-[500px] font-bold font-fontFamily  text-textMain ">
      Manage Job Positions
    </h1>

    <!-- Add Button -->
    <button
      class="bg-gradient-to-r from-blue-500 to-purple-600 text-white px-6 py-2 mt-5 rounded-xl shadow hover:opacity-90 transition"
      onclick="document.getElementById('addJobModal').classList.remove('hidden')">
      + Add Job Position
    </button>

    <!-- Modal -->
    <div id="addJobModal" class="hidden fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50">
      <div class="bg-[#1e1e1e] backdrop-blur-md p-6 rounded-2xl shadow-lg w-full max-w-md border border-white border-opacity-10">
        <h2 class="text-2xl font-semibold text-center text-[#00dfd8] mb-4">Add Job Position</h2>
        <form action="{{ route('job.store') }}" method="POST" class="space-y-4">
          @csrf
          <div>
            <label class="block text-sm mb-1">Job Title</label>
            <input type="text" name="title" required class="w-full px-4 py-2 bg-[#121212] text-white rounded border border-gray-700 focus:outline-none" />
          </div>
          <div>
            <label class="block text-sm mb-1">Department</label>
            <input type="text" name="department" required class="w-full px-4 py-2 bg-[#121212] text-white rounded border border-gray-700 focus:outline-none" />
          </div>
          <div>
            <label class="block text-sm mb-1">Description</label>
            <textarea name="description" rows="3" required class="w-full px-4 py-2 bg-[#121212] text-white rounded border border-gray-700 focus:outline-none"></textarea>
          </div>
          <div>
            <label class="block text-sm mb-1">Required Qualification</label>
            <input type="text" name="requiredQualifications" required class="w-full px-4 py-2 bg-[#121212] text-white rounded border border-gray-700 focus:outline-none" />
          </div>
          <div class="flex justify-end space-x-2">
            <button type="button"
              class="px-4 py-2 bg-gray-600 hover:bg-gray-700 rounded text-white"
              onclick="document.getElementById('addJobModal').classList.add('hidden')">
              Cancel
            </button>
            <button type="submit" class="px-4 py-2 bg-gradient-to-r from-blue-500 to-purple-600 text-white rounded hover:opacity-90">
              Save
            </button>
          </div>
        </form>
      </div>
    </div>

    <!-- Success Message -->
    @if(session('success'))
      <div class="mt-4 bg-green-600 text-white px-4 py-3 rounded shadow">
        {{ session('success') }}
      </div>
    @endif

    <!-- Table -->
    <div class="mt-8 overflow-x-auto">
      <table class="min-w-full bg-[#121212] text-sm text-white rounded-xl overflow-hidden shadow-lg">
        <thead class="bg-[#1e1e1e] text-left text-gray-300 uppercase">
          <tr>
            <th class="px-6 py-3">Job Title</th>
            <th class="px-6 py-3">Department</th>
            <th class="px-6 py-3">Description</th>
            <th class="px-6 py-3">Qualification</th>
            <th class="px-6 py-3 text-center">Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($jobpositions as $job)
            <tr class="border-t border-gray-700 hover:bg-[#1a1a1a]">
              <td class="px-6 py-4">{{ $job->Title }}</td>
              <td class="px-6 py-4">{{ $job->Department }}</td>
              <td class="px-6 py-4">{{ $job->Description }}</td>
              <td class="px-6 py-4">{{ $job->RequiredQualifications }}</td>
              <td class="px-6 py-4 text-center space-x-2">
                <a href="{{ route('edit.job', $job->JobId) }}"
                   class="px-3 py-1 rounded bg-yellow-500 hover:bg-yellow-600 text-white">
                  Edit
                </a>
                <form action="{{ route('job.destroy', $job->JobId) }}" method="POST" class="inline">
                  @csrf
                  @method('DELETE')
                  <button type="submit"
                          class="px-3 py-1 rounded bg-red-500 hover:bg-red-600 text-white">
                    Delete
                  </button>
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
