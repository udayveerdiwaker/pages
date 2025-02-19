// Get the modal
var modal = document.getElementById("myModal");
// Get the button that opens the modal
var btn = document.getElementById("myBtn");
// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];
// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}
// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
// Set columns to col-12 when the page loads
function initializeColumns() {
  const storiesCol = document.getElementById('storiesCol');
  const publicationsCol = document.getElementById('publicationsCol');
  storiesCol.classList.add('col-12');
  storiesCol.classList.remove('col-6');
  publicationsCol.classList.add('col-12');
  publicationsCol.classList.remove('col-6');
}

// Call initializeColumns on page load
document.addEventListener('DOMContentLoaded', initializeColumns);

// Main function to open tabs
function openTabs(evt, cityName) {
  document.querySelectorAll(".tabcontent").forEach(tab => {
    tab.style.display = "none";
  });

  document.querySelectorAll(".tablinks").forEach(link => {
    link.classList.remove("active");
  });

  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.classList.add("active");

  // Reset column size when changing tabs
  resetColumns();
}
// Function to toggle column sizes between col-6 and col-12
function toggleColumns() {
  const storiesCol = document.getElementById('storiesCol');
  const publicationsCol = document.getElementById('publicationsCol');

  storiesCol.classList.toggle('col-6');
  storiesCol.classList.toggle('col-12');
  publicationsCol.classList.toggle('col-6');
  publicationsCol.classList.toggle('col-12');
}

// Function to reset columns to col-6
function resetColumns() {
  const storiesCol = document.getElementById('storiesCol');
  const publicationsCol = document.getElementById('publicationsCol');

  storiesCol.classList.add('col-6');
  storiesCol.classList.remove('col-12');
  publicationsCol.classList.add('col-6');
  publicationsCol.classList.remove('col-12');
}

// Event listener for tab links
document.querySelectorAll('.tablinks').forEach(button => {
  button.addEventListener('click', toggleColumns);
});

document.getElementById("publicationTab").addEventListener("click", function () {
  document.getElementById("storiesCol").style.display = "none";
});

// Show 'storiesCol' when 'Stories' tab is clicked
document.getElementById("storiesTab").addEventListener("click", function () {
  document.getElementById("storiesCol").style.display = "block";
});


// data for stories
const customMediaItems = [
  // { type: "image", src: "public/images/Story_Image_0_profile_picture.jpg" },
  // { type: "image", src: "public/images/Story_Image_1_profile_picture.jpg" },
  // { type: "image", src: "image/image1.webp" },
  // { type: "video", src: "video/second.mp4"},
  // { type: "image", src: "image/image3.webp"},
  // { type: "video", src: "video/first.mp4" },
];

let customCurrentIndex = 0;

$(document).ready(function () {
  $('.card').on('click', function () {
    customCurrentIndex = $(this).data('index');
    loadCustomMedia(customCurrentIndex);
  });

  // Function to load media based on the current index
  function loadCustomMedia(index) {
    const currentMedia = customMediaItems[index];
    if (currentMedia.type === "image") {
      $('#customModalImage').attr('src', currentMedia.src).show();
      $('#customModalVideo').hide();
    } else if (currentMedia.type === "video") {
      $('#customModalVideoSource').attr('src', currentMedia.src);
      $('#customModalVideo')[0].load();
      $('#customModalVideo').show();
      $('#customModalImage').hide();
    }
  }

  // Previous button functionality
  $('#customModalPrevButton').on('click', function () {
    customCurrentIndex = (customCurrentIndex > 0) ? customCurrentIndex - 1 : customMediaItems.length - 1;
    loadCustomMedia(customCurrentIndex);
  });

  // Next button functionality
  $('#customModalNextButton').on('click', function () {
    customCurrentIndex = (customCurrentIndex < customMediaItems.length - 1) ? customCurrentIndex + 1 : 0;
    loadCustomMedia(customCurrentIndex);
  });

  // Reset video on modal close
  $('#customModal').on('hidden.bs.modal', function () {
    $('#customModalVideo')[0].pause();
    $('#customModalVideoSource').attr('src', '');
  });

  // Function to open custom modal on clicking StoryImageDiv
  $('.StoryImageDiv').on('click', function () {
    const imageSrc = $(this).find('img').attr('src'); // Get the image source from div
    const videoSrc = $(this).find('video source').attr('src'); // Get the video source from div
    console.log(typeof (imageSrc))

    // Load the media into the custom modal
    if (imageSrc) {
      $('#customModalImage').attr('src', imageSrc).show();
      $('#customModalVideo').hide(); // Hide video if image is loaded
    } else if (videoSrc) {
      $('#customModalVideoSource').attr('src', videoSrc);
      $('#customModalVideo')[0].load(); // Load the video
      $('#customModalVideo').show();
      $('#customModalImage').hide(); // Hide image if video is loaded
    }
    // Show the custom modal
    $('#customModal').modal('show');
  });
});

// data for post
const media = [
  { type: "image", src: "image/image1.webp" },
  { type: "image", src: "image/image2.webp" },
  { type: "video", src: "video/third.mp4" },
  { type: "image", src: "image/image4.webp" },
];

let currentIndex = 0;

$(document).ready(function () {
  $('.card').on('click', function () {
    currentIndex = $(this).data('index'); // Get index of the clicked item
    loadMedia(currentIndex); // Load the selected media
  });

  // Function to load media based on the current index
  function loadMedia(index) {
    const currentMedia = media[index];
    if (currentMedia.type === "image") {
      $('#modalImage').attr('src', currentMedia.src).show();
      $('#modalVideo').hide(); // Hide the video
    } else if (currentMedia.type === "video") {
      $('#modalVideoSource').attr('src', currentMedia.src);
      $('#modalVideo')[0].load(); // Load the video
      $('#modalVideo').show();
      $('#modalImage').hide(); // Hide the image
    }
  }

  // Previous button functionality
  $('#prevButton').on('click', function () {
    currentIndex = (currentIndex > 0) ? currentIndex - 1 : media.length - 1;
    loadMedia(currentIndex);
  });

  // Next button functionality
  $('#nextButton').on('click', function () {
    currentIndex = (currentIndex < media.length - 1) ? currentIndex + 1 : 0;
    loadMedia(currentIndex);
  });

  // Reset video on modal close
  $('#mediaModal').on('hidden.bs.modal', function () {
    $('#modalVideo')[0].pause(); // Pause video when modal is closed
    $('#modalVideoSource').attr('src', ''); // Reset video source
  });
});
