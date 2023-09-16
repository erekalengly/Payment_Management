<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Payroll</title>

</head>
<body>
    <h1>Lecture Payment</h1>
    <hr />
    <p>Lecture Payment/Fees Lecture/Edit Fees Lecture/Employee Payroll</p>
    <div class="container-md text-center">
        <!-- Activation button -->
        <button class="btn btn-lg btn-primary" id="NewPayroll"  >
            Monthly Payroll
        </button>
        <br />

    <h2 style="text-align: center;">Employee Payroll</h2>


        <action>

            <select name="" id="" >
                <option value="none">Academic Year</option>
                <option value="none">2022</option>
                <option value="none">2023</option>
                <option value="none">2024</option>
            </select>
            <select name="" id="" >
                <option value="none">Month</option>
                <option value="none">January</option>
                <option value="none">February</option>
                <option value="none">March</option>
                <option value="none">April</option>
                <option value="none">May</option>
                <option value="none">June</option>
                <option value="none">July</option>
                <option value="none">August</option>
                <option value="none">September</option>
                <option value="none">October</option>
                <option value="none">November</option>
                <option value="none">December</option>
            </select>
            <select name="" id="" >
                <option value="none">Degree</option>
                <option value="none">Engineer</option>
            </select>
            <select name="" id="" >
                <option value="none">Department</option>
                <option value="GIC">GIC</option>
            </select>
            <select name="" id="">
                <option value="none">Year</option>
                <option value="Fourth Year">Fourth Year</option>
              </select>
            <select name="" id="">
                <option value="none">Lectures</option>
                <option value="TAL Tongsreng">TAL Tongsreng</option>
                <option value="BOU Chhanna">BOU Chhanna</option>
                <option value="HENG Rathpisey">HENG Rathpisey</option>
                <option value="KHEANG Hongly">KHEANG Hongly</option>
                <option value="HOK Tin">HOK Tin</option>
                <option value="CHUN Thavorac">CHUN Thavorac</option>
                <option value="CHEA Socheat">CHEA Socheat</option>
                <option value="NOP Phearum">NOP Phearum</option>
                <option value="YOU Vanndy">YOU Vanndy</option>
                <option value="CHHEANG Vanny Ratanak">CHHEANG Vanny Ratanak</option>
                <option value="RIN Vannat">RIN Vannat</option>
            </select>
        </action>
        <!-- Table  -->
        <table id="PayrollTable" class="table table-striped table-hover text-info shadow">
            <thead>
                <tr class="text-dark">

                    <th scope="col">Name</th>
                    <th scope="col">Course</th>
                    <th scope="col">Main Salary</th>
                    <th scope="col">Hourly Wage</th>
                    <th scope="col">Hourly Work</th>
                    <th scope="col">TotalHour Pay</th>
                    <th scope="col">Project Incentive</th>
                    <th scope="col">Monthly Pay</th>

                </tr>
            </thead>
            <tbody id="Employees-table">
                <!-- <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>$12.55</td>
                    <td>100</td>
                    <td>$1255</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Norbert</td>
                    <td>Otto</td>
                    <td>$12.55</td>
                    <td>100</td>
                    <td>$1255</td>
                </tr> -->

            </tbody>
            <!-- <tfoot id="Summery " class="fw-bold text-dark">
               <tr>
                <th scope="row">Sum</th>
                <td class="text-sucess">Max: <span id="Max-wage">$13.55</span></td>
                <td class="text-danger">Min: <span id="Min-wage">$12.55</span></td>
                <td class="text-primary">Avg: <span id="Avg-wage">$13.05</span></td>
                <td><span id="Total-WH">200 h</span></td>
                <td><span id="Total-pay">$ 2610</span></td>
               </tr>
            </tfoot> -->
        </table>
    </div>
    <script src="app.js"> </script>



</body>
</html>
