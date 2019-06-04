# Color Finder API Documentation
This API allows the user to find colors
in a specific range of redness.

## Find a color within a range of red
**Request Format:** colors.php?min={min}&max={max}

**Request Type:** GET

**Returned Data Format**: Text/plain

**Description:** Returns a list of all colors
whose red channel lies inbetween 'min' and 'max'.

**Example Request:** colors.php?min=20&max=50

**Example Response:**
*Fill in example response in the {}*

  ```
forest green
lime green
sea green
light sea green
dark slate gray
dodger blue
  ```

**Error Handling:**
Will give 503 error if API cannot connect to the database.
Will 400 and provide helpful message if parameters are missing or illegal.
