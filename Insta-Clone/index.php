<?php
// Read JSON data from the response file
$jsonData = file_get_contents('json/response.json');
$jsonData_Story = file_get_contents('json/sresponse.json');


// Decode the JSON data into an associative array
$data = json_decode($jsonData, true);
if (isset($data['response']['body']['data']['user']['profile_pic_url'])) {

 $userID = $data['response']['body']['data']['user']['id'];
  
  $profilePicUrl = $data['response']['body']['data']['user']['profile_pic_url'];
  $savePath = 'public/images/'. $userID .'-profile.jpg';
  $imageData = file_get_contents($profilePicUrl);
  if ($imageData !== false) {
    file_put_contents($savePath, $imageData);
  } else {
    echo "Failed to download the image.";
  }
} else {
  echo "Profile Picture URL not found!";
}

//Download Story from Server
// Decode the JSON data into an associative array
$Story_data = json_decode($jsonData_Story, true);
// print_r($Story_data['response']['body']['reels']['49364407523']['items'][0]['image_versions2']['candidates'][0]['url']); 
// exit;
$items = $Story_data['response']['body']['reels']['49364407523']['items'];
foreach ($items as $index => $item) {
  if (isset($item['image_versions2']['candidates'][0]['url'])) {
    $StoryImageUrl = $item['image_versions2']['candidates'][0]['url'];
    $savePath = 'public/images/Story_Image_' . $index . '_profile_picture.jpg';

    $imageData = file_get_contents($StoryImageUrl);
    if ($imageData !== false) {
      file_put_contents($savePath, $imageData);
      echo "";
    } else {
      echo "Failed to download image.<br>";
    }
  } else {
    echo "Image URL not found.<br>";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>InstaStoriesViewer</title>
</head>

<body>
  <div id="app">
    <p>
      <!-- {{ parsedStoryData.response.body.reels}} -->
    </p>


    <!-- <div v-if="parsedStoryData && parsedStoryData.image_versions2 && parsedStoryData.image_versions2.length">
    <h2>Video Versions:</h2>
    <ul>
      <li v-for="(video, index) in parsedStoryData.image_versions2" :key="index">
        <video width="320" height="240" controls>
          <source :src="video.url" type="video/mp4" />
        </video>
        <p>{{ video.description }}</p>
      </li>
    </ul>
  </div> -->

    <!-- Header  Start-->
    <div class="conatiner">
      <div class="row p-4" id="headerdiv">
        <div class="col-sm-6 col-md-6" id="websiteTitle">
          <a class="navbar-brand ms-5 text-white" href="#">Insta<b>Stories</b>Viewer</a>
        </div>
        <div class="col-sm-6 col-md-6" id="HeaderRightButton">
          <div id="HeaderButtons" class="me-5">
            <div>
              <i id="myBtn" class="bi bi-search fs-5 text-white">
                <button id="myBtn" type="submit">Search</button></i>
            </div>
            <div style="display: none;">
              <i id="myBtn" class="bi bi-search fs-5 text-white"></i>
            </div>
            <div>
              <i class="bi bi-globe2 fs-5 text-white">
                <button type="submit">English</button></i>
            </div>

          </div>
        </div>
      </div>
    </div>
    <!-- Header End-->

    <!-- pop-up form - The Modal -->
    <div class="container-fluid">
      <div class="row">
        <div id="myModal" class="modal">
          <span class="close">&times;</span>
          <div class="modal-content" style="width: 50%; position: relative;top: 25%;">

            <div class="input-wrapper ">
              <input type="text" placeholder="Enter username" class="form-control form-control-lg">
              <button onclick="alert('Button clicked!');">
                <img src="image/assets/search.png" class="img-fluid">
              </button>
            </div>
          </div>

        </div>

      </div>
    </div>
    <!-- pop-up form End Model -->

    <!-- Advertising Div Start-->
    <div class="AdvertisingDiv">
      <div><span>Advertising</span></div>
    </div>
    <!-- Advertising Div End -->

    <!-- User Story view Section Start-->
    <div class="contaner mt-5">
      <div class="row">
        <div class="col-sm-5 col-md-5" id="StoryDiv">

          <div class="StoryImageDiv">
            <img :src="imageUrl" alt="Profile Picture" id="ProfilePic" class="img-fluid">
          </div>
        </div>
        <div class="col-sm-7 col-md-5" id="informationDiv">

          <div class="Userinformationdiv">
            <div v-if="parsedMessage.response && parsedMessage.response.body">
              <h3>{{ parsedMessage.response.body.data.user.username }}</h3> <span>(Anonymous profile view)</span>
            </div>
            <div class="followersDiv">
              <div v-if="parsedMessage.response && parsedMessage.response.body">
                <h5>{{ parsedMessage.response.body.data.user.edge_owner_to_timeline_media.count }}</h5>
                <p>Posts</p>
              </div>

              <div v-if="parsedMessage.response && parsedMessage.response.body">
                <h5>{{ parsedMessage.response.body.data.user.edge_followed_by.count }}</h5>
                <p>Followers</p>
              </div>

              <div v-if="parsedMessage.response && parsedMessage.response.body">
                <h5>{{ parsedMessage.response.body.data.user.edge_follow.count }}</h5>
                <p>Following</p>
              </div>

            </div>
            <div v-if="parsedMessage.response && parsedMessage.response.body">
              <p style="width: 300px;">
                {{ parsedMessage.response.body.data.user.biography_with_entities.raw_text }}
              </p>
            </div>

          </div>
        </div>
      </div>
    </div>
    <!-- User Story view Section End-->
    <!-- Tab section start -->
    <div class="tab">
      <button id="storiesTab" class="tablinks " onclick="openTabs(event, 'Stories')">Stories</button>
      <button id="publicationTab" class="tablinks " onclick="openTabs(event, 'Publications')">Publications</button>
    </div>
    <p style="border-top: 1px solid grey;"></p>
    <div class="container-fluid">
      <div class="row">
        <div id="storiesCol" class="col-6">
          <div id="Stories" class="tabcontent active d-flex">
            <div class="col mb-4" style="display: none;">
              <div class="NoStoryShowingDiv">
                <img src="image/assets/box.png">
              </div>
              <div>
                <p><b>No new stories</b></p>
              </div>
            </div>

            <!-- divForStoryShowing -->
            <div style="display: flex;" id="storiesCardID" class="flex-container">

              <div style="display: flex;">
                <div v-for="(image, index) in images" :key="index">
                  <img :src="'public/images/' + image" :alt="'Image ' + index"  width="250px"/>
                </div>
              </div>

               

              <!-- <div class="col-3 flex-item">
                <div class="card" data-toggle="modal" data-target="#customModal" data-type="image" data-index="0">
                  <img src="public/images/Story_Image_0_profile_picture.jpg" class="card-img-top" alt="Image 1">
                </div>
              </div> -->

              <!-- Video Card -->
              <!-- <div class="col-3 flex-item">
                <div class="card" data-toggle="modal" data-target="#customModal" data-type="video" data-index="1">
                  <img src="video-thumbnail/img-2.jfif" class="card-img-top" alt="Video 1">
                </div>
              </div> 
             <div class="col-3 flex-item">
                <div class="card" data-toggle="modal" data-target="#customModal" data-type="image" data-index="2">
                  <img src="image/image3.webp" class="card-img-top" alt="Image 1">
                </div>
              </div>
              
              <div class="col-3 flex-item">
                <div class="card" data-toggle="modal" data-target="#customModal" data-type="video" data-index="3">
                  <img src="video-thumbnail/img.jfif" class="card-img-top" alt="Video 1">
                </div>
              </div> -->

            </div>
            <!-- Image Card -->
            <!-- Custom Modal -->
            <div class="modal fade" id="customModal" tabindex="-1" role="dialog" aria-labelledby="customModalLabel"
              aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="StoriesModalCloseButton">
                  <button type="button" class="close-button" data-dismiss="modal" aria-label="Close">
                    <span>&times;</span>
                  </button>
                </div>
                <div class="modal-content" style="background: transparent;border: none; width: auto;">
                  <!-- <div class="modal-body"> -->
                  <div style="position: relative;top: -28px;">
                    <img id="customModalImage" src="video-thumbnail/img.jfif" alt="Modal Image" style="display:none;">
                    <video id="customModalVideo" controls
                      style="display:none; max-width: 100%; margin-left: auto; margin-right: auto;">
                      <source id="customModalVideoSource" src="video/video.mp4" type="video/mp4">
                    </video>
                  </div>
                  <!-- </div> -->
                  <div class="d-flex justify-content-between w-100" id="StoriesModalButtons"
                    style="position: absolute;top: 50%;">
                    <button class="btn btn-secondary nav-button" id="customModalPrevButton"><span>&lt;</span></button>
                    <button class="btn btn-secondary nav-button" id="customModalNextButton"><span>&gt;</span></button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="publicationsCol" class="col-6">
          <div id="Publications" class="tabcontent">
            <!-- Image Card Div -->
            <div class="col-3">
              <div class="card" data-toggle="modal" data-target="#mediaModal" data-type="image" data-index="0">
                <img src="image/image1.webp" class="card-img-top">
                <div class="overlay"></div>
              </div>
            </div>

            <div class="col-3">
              <div class="card" data-toggle="modal" data-target="#mediaModal" data-type="image" data-index="1">
                <img src="image/image2.webp" class="card-img-top">
                <div class="overlay"></div>
              </div>
            </div>

            <!-- Video Card -->
            <div class="col-3">
              <div class="card" data-toggle="modal" data-target="#mediaModal" data-type="video" data-index="2">
                <img src="video-thumbnail/img3.jfif" class="card-img-top" alt="Video 1">
                <div class="overlay"></div>
              </div>
            </div>
            <div class="col-3">
              <div class="card" data-toggle="modal" data-target="#mediaModal" data-type="video" data-index="3">
                <img src="image/image4.webp" class="card-img-top" alt="Video 1">
                <div class="overlay"></div>
              </div>
            </div>

          </div>
        </div>
        <!-- Image Card Div END-->
        <div class="modal fade" id="mediaModal" tabindex="-1" role="dialog" aria-labelledby="mediaModalLabel"
          aria-hidden="true">
          <div> <button type="button" class="close-button" data-dismiss="modal" aria-label="Close">
              <span>&times;</span>
            </button></div>
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-body">
                <img id="modalImage" src="video-thumbnail/img.jfif" alt="Modal Image" style="display:none;">
                <video id="modalVideo" controls style="display:none; height: 400px;">
                  <source id="modalVideoSource" src="video/video.mp4" type="video/mp4">
                </video>
                <div class="d-flex justify-content-between w-100">
                  <button class="btn btn-secondary nav-button" id="prevButton">Prev</button>
                  <button class="btn btn-secondary nav-button" id="nextButton">Next</button>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
    <!-- Tab section start End-->

    <!-- Advertising Div Start-->
    <div class="AdvertisingDiv">
      <div><span>Advertising</span></div>
    </div>
    <!-- Advertising Div End -->

    <div class="bottomTextinfo">
      <p>
        On this page you can anonymously watch and download stories, highlights and publications 01sagarbhatt from any
        device (computer, laptop, smartphone, etc.). A simple and user-friendly interface will help you quickly view and
        download the material of your choice. The modal window has arrows (left, right) that you can use to scroll through
        publications. There is a digital indicator next to the account autark that displays the number of new stories that
        you have not watched yet.
      </p>
    </div>
    <!-- footer start from here -->
    <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h5>About Us</h5>
            <p>We are dedicated to providing exceptional service and cost-effective design solutions.</p>
          </div>
          <div class="col-md-4">
            <h5>Services</h5>
            <p>High-quality design solutions tailored to your needs.</p>
          </div>
          <div class="col-md-4">
            <h5>Contact Us</h5>
            <p>Email: info@example.com</p>
            <p>Phone: +123 456 7890</p>
          </div>
        </div>
        <div class="text-center mt-4">
          <p>&copy; 2024 Your Company Name. All rights reserved.</p>
        </div>
      </div>
    </footer>
    <!-- footer start end from here -->
  </div>
  <!-- vue js start from here -->
  <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
  <script>
    const app = Vue.createApp({
      data() {
        return {
          message: '<?php echo addslashes($jsonData); ?>',
          StoryData: '<?php echo addslashes($jsonData_Story); ?>',
          parsedMessage: {},
          parsedStoryData: {},
          imageUrl: 'public/images/ -profile.jpg',
          images: [],
        }
      },
      created() {

        // message ko JSON format se JavaScript object mein parse kiya
        this.parsedMessage = JSON.parse(this.message);
        this.parsedStoryData = JSON.parse(this.StoryData);
        this.loadImages();

        // if (this.parsedMessage.response && this.parsedMessage.response.body) {
        //   console.log(this.parsedMessage.response.body.reels);
        // } else {
        //   console.error('Body not found in response');
        // }

      },
      methods: {
        async loadImages() {
      try {
        // Fetch image filenames from the PHP backend
        const response = await fetch('getImages.php');
        const data = await response.json();  // Parse the response as JSON

        // Store the image filenames in the 'images' array
        this.images = data;
      } catch (error) {
        console.error('Error fetching images:', error);  
      }
    }
      },
    })
    app.mount('#app')
  </script>
  <!-- vue js end from here -->
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="script.js"></script>

</html>