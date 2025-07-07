<h1>Leave feedback</h1>
<form action="/journal/feedback/send" method="POST">
    <div>
        <p class="textBox"><input placeholder="Enter your name" name="user"></p>
        <p class="textBox"><input placeholder="Enter your email" name="email"></p>
        <p class="textBox"><textarea name="comment" placeholder="Add your comment"></textarea></p>
        <p><input type="button" onclick="sendData()" value="Send"><input type="reset" value="Reset"></p>
    </div>
</form>
<script>
 {
 "use strict";
 function sendData() {
 let xhr = new XMLHttpRequest();
 feedbackForm = document.forms[0],
 formData = new FormData(feedbackForm)
 xhr.open("POST", '/journal/feedback/send')

 xhr.onloadend = function() {
 if (xhr.status == 200) {
 if (xhr.response == 1) {
 alert('Added!');
 } else {
 alert(xhr.response);
 }
 } else {
 alert("Error " + this.status);
 }
 };
 xhr.send(formData);
 }
 }
</script>