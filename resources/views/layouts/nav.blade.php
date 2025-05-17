<!-- Top Fixed Navbar -->
<div class="fixed top-0 left-0 w-full z-50 flex justify-between items-center bg-surface shadow-lg backdrop-blur-md px-6 py-4 text-textMain">
  <!-- Title Section -->
  <div class="text-2xl font-bold  text-primary">
    EMPLOYEE APPLICATIONS MANAGEMENT SYSTEM
  </div>

  <!-- Navigation Menu -->
  <ul class="flex  text-base font-medium">
    <li>
      <a href="{{route('dashboard')}}" class="text-textMain hover:text-white hover:bg-gradient-blue-purple px-4 py-2 rounded-full transition duration-200 ease-in-out">
        Dashboard
      </a>
    </li>
    <li>
      <a href="{{route('job.index')}}" class="text-textMain hover:text-white hover:bg-gradient-blue-purple px-4 py-2 rounded-full transition duration-200 ease-in-out">
        Job Position
      </a>
    </li>
    <li>
      <a href="{{route('applicant.index')}}" class="text-textMain hover:text-white hover:bg-gradient-blue-purple px-4 py-2 rounded-full transition duration-200 ease-in-out">
        Applicants
      </a>
    </li>
    <li>
      <a href="#" class="text-textMain hover:text-white hover:bg-gradient-blue-purple px-4 py-2 rounded-full transition duration-200 ease-in-out">
        Application
      </a>
    </li>
    <li>
      <a href="#" class="text-textMain hover:text-white hover:bg-gradient-blue-purple px-4 py-2 rounded-full transition duration-200 ease-in-out">
        Recruitment Stages
      </a>
    </li>
  </ul>
</div>
