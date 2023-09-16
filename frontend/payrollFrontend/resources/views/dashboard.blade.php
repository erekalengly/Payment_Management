<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <h1>Lecture Payment</h1>
    <hr />
    <p>Lecture Payment/Fees Lecture/Edit Fees Lecture</p>
    <div class="container-md text-center">
        <action>
            <select name="" id="">
              <option value="none">Academic Year</option>
              <option value="2021-2022">2021-2022</option>
              <option value="2022-2023">2022-2023</option>
              <option value="2023-2024">2023-2024</option>
            </select>
            <select name="" id="">
              <option value="none">Degree</option>
              <option value="DUT">DUT</option>
              <option value="Engineer">Engineer</option>
              <option value="Master">Master</option>
              <option value="PHD">PHD</option>
            </select>
            <select name="" id="">
              <option value="none">Department</option>
              <option value="GCI">GCI</option>
              <option value="GCA">GCA</option>
              <option value="GRA">GRA</option>
              <option value="GTI">GTI</option>
              <option value="GEE">GEE</option>
              <option value="GIC">GIC</option>
              <option value="GRU">GRU</option>
              <option value="GGG">GGG</option>
              <option value="GIM">GIM</option>
              <option value="AMS">AMS</option>
              <option value="GTR">GTR</option>
            </select>
            <select name="" id="">
              <option value="none">Year</option>
              <option value="First Year">First Year</option>
              <option value="Second Year">Second Year</option>
              <option value="Third Year">Third Year</option>
              <option value="Fourth Year">Fourth Year</option>
              <option value="Fifth Year">Fifrth Year</option>
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
            <!-- table -->
            <table id="PayrollTable" class="table table-striped table-hover text-info shadow">
              <!-- --Tal tongsreng-- -->
              <!-- <tr style="text-align: center">
                <td>Lecture Name</td>
                <td>Courses</td>
                <td>Total Hours</td>
                <td>Total Salary</td>
                <td>Payment status</td>
                <td>Action</td>
              </tr> -->
              <thead>
                <tr class="text-dark">

                    <th scope="col">Name</th>
                    <th scope="col">Course</th>
                    <th scope="col">Main Salary</th>
                    <th scope="col">TotalHour Pay</th>
                    <th scope="col">Project Incentive</th>
                    <th scope="col">Monthly Pay</th>
                    <th scope="col">Payment status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <!-- Employee table -->
            <tbody id="Employees-table">

            </tbody>

               <tr style="text-align: center">
                <td>TAL Tongsreng</td>
                <td>Software Engineering</td>
                <td>$500</td>
                <td></td>
                <th><input type="project-incentives" /></th>
                <td></td>
                <td>
                  <button>Paid</button>
                </td>
                <td style="padding: 0%;">
                  <button>Edit</button>
                  <button>view</button>
                </td>
              </tr>




            </table>
    </div>
  </body>
</html>
