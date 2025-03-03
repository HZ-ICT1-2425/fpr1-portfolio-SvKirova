<x-layout.main
    description="Here is the dashboard table containing information about all of the course subjects that are present in our programme during the first year in HBO-ICT at HZ University of Applied Sciences."
    keywords="Course content, ICT, Dashboard"
    title="Portfolio | Dashboard">
    @push('styles')
        <link rel="stylesheet" href="{{ asset('css-files/dashboard-style.css') }}">
    @endpush

    <h1 id="course-structure">Course structure of the programme</h1>
    <!-- Table showing the course structure of the ICT programme -->
    <table>
        <thead>
        <tr>
            <!-- new row -->
            <th>
                <p> Quartile </p>
            </th>
            <th>
                <p> Course </p>
            </th>
            <th>
                <p> ECs </p>
            </th>
            <th>
                <p> Exam </p>
            </th>
            <th>
                <p> Status </p>
            </th>
            <th>
                <p> Grade</p>
            </th>
        </tr>
        </thead>
        <tbody>
        <tr class="ongoing">
            <!-- new row -->
            <td rowspan="3" class="quartiles">1</td>
            <td>Program- and Career Orientation (PC0)</td>
            <td class="ecs">2.5</td>
            <td>Individual process assessment (Assessment website)</td>
            <td class="status"> Ongoing </td>
            <td class="grades"><input type="text" id="grade1" name="grade1"> <button>Submit</button></td>
        </tr>
        <tr class="ongoing">
            <!-- new row -->
            <!-- Quartile 1 -->
            <td>Computer Science Basics (CSB)</td>
            <td class="ecs">5</td>
            <td>Written knowledge exam</td>
            <td class="status"> Ongoing </td>
            <td class="grades"><input type="text" id="grade2" name="grade2"> <button>Submit</button></td>
        </tr>
        <tr class="ongoing">
            <!-- new row -->
            <!-- Quartile 1 -->
            <td>Programming Basics (PBA)</td>
            <td class="ecs">5</td>
            <td>Case study exam</td>
            <td class="status"> Ongoing </td>
            <td class="grades"><input type="text" id="grade3" name="grade3"> <button>Submit</button></td>
        </tr>
        <tr>
            <!-- new row -->
            <td rowspan="2" class="quartiles">2</td>
            <td rowspan="2">Object-Oriented Programming (OOP)</td>
            <td class="ecs">5</td>
            <td>Presentation</td>
            <td class="status"> Not started </td>
            <td class="grades"><input type="text" id="grade4" name="grade4"> <button>Submit</button></td>
        </tr>
        <tr>
            <!-- new row -->
            <!-- Quartile 2 -->
            <!-- Object Oriented Programming -->
            <td class="ecs">5</td>
            <td>Case Study Exam</td>
            <td class="status"> Not started </td>
            <td class="grades"><input type="text" id="grade5" name="grade5"> <button>Submit</button></td>
        </tr>
        <tr>
            <!-- new row -->
            <td rowspan="4" class="quartiles">3</td>
            <td rowspan="4">Framework Project 1</td>
            <td class="ecs">5</td>
            <td>On-site case
                study exam</td>
            <td class="status"> Not started </td>
            <td class="grades"><input type="text" id="grade6" name="grade6"> <button>Submit</button></td>
        </tr>
        <tr>
            <!-- new row -->
            <!-- Quartile 3 -->
            <!-- Framework Project 1 -->
            <td class="ecs">1.25</td>
            <td>Database exam</td>
            <td class="status"> Not started </td>
            <td class="grades"><input type="text" id="grade7" name="grade7"> <button>Submit</button></td>
        </tr>
        <tr>
            <!-- new row -->
            <!-- Quartile 3 -->
            <!-- Framework Project 1 -->
            <td class="ecs">2.5</td>
            <td>Group presentation on project result</td>
            <td class="status"> Not started </td>
            <td class="grades"><input type="text" id="grade8" name="grade8"> <button>Submit</button></td>
        </tr>
        <tr>
            <!-- new row -->
            <!-- Quartile 3 -->
            <!-- Framework Project 1 -->
            <td class="ecs">1.25</td>
            <td>Group portfolio with individual elements on requirements</td>
            <td class="status"> Not started </td>
            <td class="grades"><input type="text" id="grade9" name="grade9"> <button>Submit</button></td>
        </tr>
        <tr>
            <!-- new row -->
            <td rowspan="3" class="quartiles">4</td>
            <td rowspan="3">Framework Project 2</td>
            <td class="ecs">2.5</td>
            <td>Final delivery</td>
            <td class="status"> Not started </td>
            <td class="grades"><input type="text" id="grade10" name="grade10"> <button>Submit</button></td>
        </tr>
        <tr>
            <!-- new row -->
            <!-- Quartile 4 -->
            <!-- Framework Project 2 -->
            <td class="ecs">2.5</td>
            <td>Report of acceptance tests and optional assessments </td>
            <td class="status"> Not started </td>
            <td class="grades"><input type="text" id="grade11" name="grade11"> <button>Submit</button></td>
        </tr>
        <tr>
            <!-- new row -->
            <!-- Quartile 3 -->
            <!-- Framework Project 2 -->
            <td class="ecs">5</td>
            <td>IT Development portfolio</td>
            <td class="status"> Not started </td>
            <td class="grades"><input type="text" id="grade12" name="grade12"> <button>Submit</button></td>
        </tr>
        <tr>
            <!-- new row -->
            <td class="quartiles">3 & 4</td>
            <td>Business IT Consultancy Basics</td>
            <td class="ecs">2.5</td>
            <td>Video</td>
            <td class="status"> Not started </td>
            <td class="grades"><input type="text" id="grade13" name="grade13"> <button>Submit</button></td>
        </tr>
        <tr>
            <!-- new row -->
            <td class="quartiles">all year</td>
            <td>Personal Professional Development Exploration </td>
            <td class="ecs">12.5</td>
            <td>Criterium focused interview</td>
            <td class="status"> Ongoing </td>
            <td class="grades"><input type="text" id="grade14" name="grade14"> <button>Submit</button></td>
        </tr>
        <tr>
            <!-- new row -->
            <td class="quartiles">all year</td>
            <td> IT Personality 1 & 2 </td>
            <td class="ecs">2.5</td>
            <td>Portfolio</td>
            <td class="status"> Ongoing </td>
            <td class="grades"><input type="text" id="grade15" name="grade15"> <button>Submit</button></td>
        </tr>
        </tbody>
    </table>

    <h2 id="study-monitor"> Study monitor | Progress bar </h2>

    <!-- Progress bar -->
    <div class="progress-bar">
        <div class="progress-bar-value">
            <p id="pass"> 45 ECs </p>
            <p id="max"> 60 ECs </p>
        </div>
        <div class="progress-bar-fill"></div>
    </div>

    <h2 id="requirements">In order to pass your first year in HBO-ICT you need to have gathered at least 45 out of
        60 ECs ( NBSA / Negative Binding Study Advice / = 45 ECs)
    </h2>
</x-layout.main>
