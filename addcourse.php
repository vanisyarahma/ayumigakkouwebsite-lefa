<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ayumi Nihongo Gakkou</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-qiDyhAp6r2L94MpOE7/M6ftMQ7pcTwPsW3Gm5ld61GTc0ZOxDZhrEWUw77QkPWtFJZzv6aEjjE5bzVXNyvK8Mw==" crossorigin="anonymous" />
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh60/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header>
        <div class="logo"><a href="#"><img src="logo ayumi.png" alt=""></a></div>
            <ul class="navbar">
                <li><a href="dashboard.php">Beranda</a></li>
                <li><a href="">Tambah Course</a></li>
            </ul>
            <ul class="header-icons">

            </ul>
            <!-- <a href="login.php" class="action_btn">Daftar Dulu Yuk!</a> -->
    </header>
<style>
    
#add-course-btn {
  background: #2ea44f;
  color: white;
  border: none;
  border-radius: 4px;
  margin: auto;
  height: 28px;
  margin-top: 10px;
  display: block;
  cursor: pointer;
  /*   padding:5px; */
}

#add-course-btn:hover {
  opacity: 0.9;
}

#add-course-btn span {
  font-size: 20px;
  margin-right: 5px;
}

#course-list {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  margin-top: 20px;
}

.course-card {
  border: 1px solid #CCC;
  border-radius: 8px;
  width: 250px;
  height: 100%;
  padding: 10px;
  margin: 10px;
  /*    */
}

.course-thumbnail {
  width: 100%;
  border-radius: 8px;
}

.course-name {
  font-weight: bolder;
  margin-bottom: 10px;
  text-align: center;
}

.course-duration {
  font-size: 14px;
  align-self: 'flex-start';
}

.course-description {
  font-size: 14px;
  margin: 10px 0px;
}

.enroll-button {
  background: green;
  color: white;
  cursor: pointer;
  width: 100%;
  border: none;
  padding: 5px;
  border-radius: 5px;
  font-weight: bold;

}

/* Styling for the "Add Course" page */
#add-course-page {
  display: none;
  text-align: center;
  margin: 20px;
  padding: 20px;
  background-color: #F7F7F7;
  border-radius: 8px;
}

#add-course-page h2 {
  margin-top: 0;
}

#add-course-page label {
  display: block;
  margin-top: 10px;
}

#add-course-page input,
#add-course-page textarea {
  width: 100%;
  padding: 5px;
  margin-top: 5px;
  border: 1px solid #CCC;
  border-radius: 4px;
}

#add-course-page button {
  margin-top: 10px;
  padding: 8px 20px;
  background-color: #007BFF;
  color: #FFFFFF;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

#add-course-page button[type="submit"] {
  background-color: #28A745;
}

#add-course-page button[type="button"] {
  background-color: #DC3545;
}

/* < !-- HTML !--><button class="button-3" role="button">Button 3</button> */

/* CSS */
.button-3 {
  appearance: none;
  /* background-color: ; */
  border: 1px solid rgba(27, 31, 35, .15);
  border-radius: 6px;
  box-shadow: rgba(27, 31, 35, .1) 0 1px 0;
  box-sizing: border-box;
  color: #fff;
  cursor: pointer;
  display: inline-block;
  font-family: -apple-system, system-ui, "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji";
  font-size: 14px;
  font-weight: 600;
  line-height: 20px;
  padding: 6px 16px;
  position: relative;
  text-align: center;
  text-decoration: none;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  vertical-align: middle;
  white-space: nowrap;
}

.button-3:focus:not(:focus-visible):not(.focus-visible) {
  box-shadow: none;
  outline: none;
}

.button-3:hover {
  background-color: #2c974b;
}

.button-3:focus {
  box-shadow: rgba(46, 164, 79, .4) 0 0 0 3px;
  outline: none;
}

.button-3:disabled {
  background-color: #94d3a2;
  border-color: rgba(27, 31, 35, .1);
  color: rgba(255, 255, 255, .8);
  cursor: default;
}

.button-3:active {
  background-color: #298e46;
  box-shadow: rgba(20, 70, 32, .2) 0 1px 0 inset;
}
</style>
<section class="addc">
<button id="add-course-btn" class="button-3"> + &nbsp Add New Courses</button>
  <main id="course-list">
  </main>
  <div id="add-course-page">
    <h2>Add New Course</h2>
    <form id="course-form" method="post" enctype="multipart/form-data">
      <label for="name">Name:</label>
      <input type="text" name="name" id="name" placeholder="Course Name" required>

      <label for="description">Description:</label>
      <textarea name="description" id="description" placeholder="Description of The Course" rows="4" required></textarea>

      <label for="duration">Price:</label>
      <input type="number" name="duration" value="Month" placeholder="Price" id="duration" required>

      <button type="submit">Add</button>
      <button type="button" id="cancel-btn">Cancel</button>
    </form>
  </div>
</section>


<script>
    // Function to generate and display course cards
    function displayCourses(courses) {
      const courseList = document.getElementById('course-list');
      courseList.innerHTML = ''; // Clear existing course cards

      courses.forEach(course => {
        const courseCard = document.createElement('div');
        courseCard.classList.add('course-card');

        const thumbnail = document.createElement('img');
        thumbnail.src = course.image;
        thumbnail.alt = course.name;
        thumbnail.classList.add('course-thumbnail');
        courseCard.appendChild(thumbnail);

        const courseName = document.createElement('div');
        courseName.classList.add('course-name');
        courseName.textContent = course.name;
        courseCard.appendChild(courseName);

        const courseDuration = document.createElement('div');
        courseDuration.classList.add('course-duration');
        courseDuration.textContent = `Duration: ${course.duration}`;
        courseCard.appendChild(courseDuration);

        const courseDescription = document.createElement('div');
        courseDescription.classList.add('course-description');
        courseDescription.textContent = course.description;
        courseCard.appendChild(courseDescription);

        const enrollButton = document.createElement('button');
        enrollButton.textContent = 'Enroll Now';
        enrollButton.classList.add('enroll-button');
        courseCard.appendChild(enrollButton);

        // Add a click event listener to the "Enroll Now" button
        enrollButton.addEventListener('click', () => {
          alert(`You have enrolled in the course: ${course.name}`);
        });

        courseList.appendChild(courseCard);
      });
    }

    // Fetch courses data from the server using AJAX
    function fetchCourses() {
    fetch('fetch_courses.php')
      .then(response => {
        if (!response.ok) {
          throw new Error('Network response was not ok');
        }
        return response.json();
      })
      .then(courses => {
        // Call the function to display the courses on the page
        displayCourses(courses);
      })
      .catch(error => {
        console.error('Error:', error);
        const errorContainer = document.createElement('div');
        errorContainer.textContent = 'An error occurred while fetching courses. Please try again later.';
        document.getElementById('course-list').appendChild(errorContainer);
      });
  }

    // Function to show the "Add Course" page
    function showAddCoursePage() {
      const courseList = document.getElementById('course-list');
      courseList.style.display = 'none';

      const addCoursePage = document.getElementById('add-course-page');
      addCoursePage.style.display = 'block';
    }

    // Function to hide the "Add Course" page
    function hideAddCoursePage() {
      const courseList = document.getElementById('course-list');
      courseList.style.display = 'flex';

      const addCoursePage = document.getElementById('add-course-page');
      addCoursePage.style.display = 'none';
    }

    // Function to handle form submission
    function addNewCourse(event) {
      event.preventDefault();
      const nameInput = document.getElementById('name');
      const descriptionInput = document.getElementById('description');
      const durationInput = document.getElementById('duration');
      const imageInput = document.getElementById('image');

      const name = nameInput.value.trim();
      const description = descriptionInput.value.trim();
      const duration = durationInput.value.trim();
      const image = imageInput.files[0]; // Get the selected image file

      if (name !== '' && description !== '' && duration !== '') {
        const formData = new FormData();
        formData.append('name', name);
        formData.append('description', description);
        formData.append('duration', duration);

        fetch('save_course.php', {
          method: 'POST',
          body: formData
        })
          .then(response => response.text())
          .then(message => {
            alert(message);
            // Refresh the course list after successful submission
            fetchCourses();
          })
          .catch(error => {
            console.error('Error:', error);
            alert('An error occurred while processing the form.');
          });

        // Clear the form inputs
        nameInput.value = '';
        descriptionInput.value = '';
        durationInput.value = '';
        // Hide the "Add Course" page and show the course list
        hideAddCoursePage();
      } else {
        alert('Please fill in all the required fields and select an image.');
      }
    }

    // Function to handle the "Cancel" button click on the "Add Course" page
    function cancelAddCourse() {
      // Clear the form inputs
      document.getElementById('name').value = '';
      document.getElementById('description').value = '';
      document.getElementById('duration').value = '';
      // Hide the "Add Course" page and show the course list
      hideAddCoursePage();
    }

    // Add event listeners and call the function to display courses when the page loads
    document.getElementById('add-course-btn').addEventListener('click', showAddCoursePage);
    document.getElementById('course-form').addEventListener('submit', addNewCourse);
    document.getElementById('cancel-btn').addEventListener('click', cancelAddCourse);
    window.onload = fetchCourses;
  </script>

</body>
</html>