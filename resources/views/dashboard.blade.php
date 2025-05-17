<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard | AMS</title>
  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body class="bg-background text-textMain font-sans">

  @include('layouts.nav')

  <!-- Welcome Section -->
  <div class="flex mt-[5rem] px-6 py-4">
    <div>
      <h1 class="text-xl">
        Welcome
        <span class="underline text-2xl bg-surface px-3 py-1 rounded-xl text-primary font-semibold">
          Krypton!
        </span>
      </h1>
    </div>
  </div>

  <!-- Main Content -->
  <div class="flex flex-col justify-between lg:flex-row w-full h-[20vh]  px-6">

    <!-- Metrics Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mt-6 w-full lg:w-[68%]">
      <div class="bg-surface p-6 rounded-2xl shadow-lg">
        <h1 class="text-primary font-semibold">Total Job Positions</h1>
        <p class="text-3xl font-bold mt-2 text-textSoft">100</p>
      </div>
      <div class="bg-surface p-6 rounded-2xl shadow-lg">
        <h1 class="text-accentBlue font-semibold">Total Applicants</h1>
        <p class="text-3xl font-bold mt-2 text-textSoft">100</p>
      </div>
      <div class="bg-surface p-6 rounded-2xl shadow-lg">
        <h1 class="text-secondary font-semibold">Total Applications</h1>
        <p class="text-3xl font-bold mt-2 text-textSoft">100</p>
      </div>
    </div>

    <!-- Recent Activities -->
    <div class="grid grid-cols-1 gap-4 mt-6 lg:mt-6 lg:ml-6 w-full lg:w-[30%]">
      <h1 class="text-center font-bold text-2xl text-gradientBlue bg-surfaceAlt rounded-lg ">Recent Activities</h1>

      <div class="bg-surface p-4 rounded-2xl shadow-lg backdrop-blur-md">
        <h2 class="text-center text-xl font-semibold text-primary">Recent Added Job Position</h2>
        <ul class="list-disc ml-5 mt-2 text-textSoft">
          <li>Software Developer</li>
          <li>Data Analyst</li>
          <li>System Administrator</li>
        </ul>
      </div>

      <div class="bg-surface p-4 rounded-2xl shadow-lg backdrop-blur-md">
        <h2 class="text-center text-xl font-semibold text-accentBlue">Recent Added Applicants</h2>
        <ul class="list-disc ml-5 mt-2 text-textSoft">
          <li>Jane Doe</li>
          <li>John Smith</li>
          <li>Emily Stone</li>
        </ul>
      </div>

      <div class="bg-surface p-4 rounded-2xl shadow-lg backdrop-blur-md">
        <h2 class="text-center text-xl font-semibold text-secondary">Recent Added Applications</h2>
        <ul class="list-disc ml-5 mt-2 text-textSoft">
          <li>Application A</li>
          <li>Application B</li>
          <li>Application C</li>
        </ul>
      </div>
    </div>
  </div>

</body>
</html>
