document.querySelectorAll('.image').forEach(function(img) {
    img.addEventListener("click", function() {
      var imageId = this.getAttribute("data-id");
      document.getElementById("image_id").value = imageId;
      img.classList.add("hover");
    });
  });
  function previewImage() {
    var input = document.getElementById('image');
    var avatar = document.getElementById('avatar');
    var preview = document.getElementById('preview-image');
    var previewContainer = document.querySelector('.file-upload-preview');
    var textContainer = document.querySelector('.file-upload-text');

    if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function (e) {
        preview.src = e.target.result;
        previewContainer.style.display = 'block';
        textContainer.style.display = 'none';
      }

      reader.readAsDataURL(input.files[0]);
    }
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function (e) {
        avatar.src = e.target.result;
      }

      reader.readAsDataURL(input.files[0]);
    }
  }
  function showLogo() {
    var input = document.getElementById('logo');
    var preview = document.getElementById('preview-logo');
    var previewContainer = document.querySelector('.logo-upload-preview');
    var textContainer = document.querySelector('.file-upload-text');

    if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function (e) {
        preview.src = e.target.result;
        previewContainer.style.display = 'block';
        textContainer.style.display = 'none';
      }

      reader.readAsDataURL(input.files[0]);
    }
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function (e) {
        avatar.src = e.target.result;
      }

      reader.readAsDataURL(input.files[0]);
    }
  }

