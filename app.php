<!DOCTYPE html>
<html>
    <head>
        <title>ArtSpark Commission Form</title>
        <link rel="stylesheet" href="app.css">
    </head>
    <body>
    <div class="container">
    <h2>ArtSpark: Custom Art Commission Form</h2>

    <form action="process.php" method="POST" enctype="multipart/form-data">

      <label>Client Name</label>
      <input type="text" name="client_name"required>

      <label>Email</label>
      <input type="email" name="email" required>

      <label>Contact Number</label>
      <input type="tel" name="con_number" required>

      <label>Artwork Type</label>
      <select name="art_type">
        <option value="">select art type</option>
        <option value="potrait">Portrait</option>
        <option value="digital">Digital</option>
        <option value="sketch">Sketch</option>
      </select>

      <label>Style Preference</label>
      <select name="style_preference">
        <option value="">select style</option>
        <option value="realistic">Realistic</option>
        <option value="anime">Anime</option>
        <option value="cartoon">Cartoon</option>
        <option value="abstract">Abstract</option>
      </select>

      <label>color preference</label>
      <select name="color_preference">
        <option value="">select color</option>
        <option value="black and white">Black & White</option>
        <option value="coloured">Coloured</option>
        <option value="specific palette">Specific Palette</option>
      </select>

      <label>Reference Image</label>
      <input type="file" name="reference_image">

      <label>Description of Artwork</label>
      <textarea rows="4" Name="description"></textarea>

      <div class="row">
        <div>
          <label>Size</label>
          <input type="number" name="size">
        </div>

        <div>
          <label>Deadline</label>
          <input type="date" name="deadline">
        </div>
      </div>

      <label>Budget</label>
      <input type="number" name="budget">

      <label>Usage Rights</label>
      <select name="usage">
        <option value="">select usage</option>
        <option value="personal">Personal</option>
        <option value="commercial">Commercial</option>
      </select>

       <label>Payment Method</label>
      <select name="payment">
        <option value="">select payment</option>
        <option value="UPI">UPI</option>
        <option value="card">Card</option>
        <option value="cheque">cheque</option>
        <option value="Paytm">Paytm</option>
        <option value="Cash">cash</option>
      </select>

      <label>Additional Notes</label>
      <textarea rows="3" name="additional_notes"></textarea>

      <label>
        <input type="checkbox" name="termsandconditions" required><center> I agree to Terms & Conditions</center>
      </label>

      <button type="submit" value="submit">Submit Request</button>
    </form>
  </div>
    </body>
</html>