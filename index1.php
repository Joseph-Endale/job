<html>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Insert Data</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel="stylesheet" href="./css/dropdown.style.css">
  <link rel="stylesheet" href="./css/form.style.css">
</head>
<title>Job Post</title>
<style media="screen">
  label {
    display: block;
  }
</style>

<body>
  <!DOCTYPE html>

  <body>
    <div class="container">
      <div class="row col-md-6 col-md-offset-3">
        <div class="panel panel-primary">

          <div class="text">
            Vacancy Post
          </div>
          <div class="panel-body">
            <form action="connect.php" method="post">
              <div class="form-group">

                <div class="form-row">
                  <div class="input-data">
                    <input type="text" class="form-control" id="position" name="position" />

                    <div class="underline"></div>
                    <label for="position">Enter Position</label>
                  </div>
                </div>
                <div class="form-row">
                  <div class="input-data">
                    <input type="text" class="form-control" id="type" name="type" />
                    <div class="underline"></div>
                    <label for="type">Job Type</label>
                  </div>
                  <br>

                  <!-- <label for="location">Location</label>
                  <div>
                    <label for="addis ababa" class="radio-inline"><input type="radio" name="location" value="A.A" id="addis ababa" />Addis Ababa</label>
                    <label for="dukem" class="radio-inline"><input type="radio" name="location" value="Duk" id="Dukem" />Dukem</label>
                    <label for="others" class="radio-inline"><input type="radio" name="gender" value="o" id="Other" />Others</label>
                  </div>
                </div> -->

                  <div class="form-row location-parent">
                    <select name="location" id="location">
                      <option>Select a location</option>
                      <option value="A.A">Addis Ababa</option>
                      <option value="Dukem">Dukem</option>
                      <option value="Other">Other</option>
                    </select><br><br>
                  </div>
                  <div class="form-row">
                    <div class="input-data">
                      <input type="level" class="form-control" id="level" name="level" />
                      <label for="level">level</label>
                    </div>
                    <br>

                    <div class="form-row">
                      <div class="input-data">
                        <input type="text" name="description" required>
                        <label for="" class="description">Enter Job Description</label>
                        <div class="underline"></div>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="input-data">
                        <input type="salary" class="form-control" id="salary" name="salary" />
                        <label for="number">Enter Salary</label>
                      </div>
                      <div class="form-row submit-btn">
                        <div class="input-data">
                          <div class="inner"></div>
                          <input type="submit" value="submit">
                        </div>
                      </div>
            </form>
          </div>
          <div class="panel-footer text-right">
            <small>&copy; Victor Doors</small>
          </div>
        </div>
      </div>
    </div>