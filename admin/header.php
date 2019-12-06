<div class="menu">
			<div class="hotro">
				<p>Hỗ trợ: 0706354104 - Tien lap</p>
			</div>
			<div class="avatar">
				<a href="#" onclick="myFunction()">
					<img src="/duan4/view/img/face8.jpg" alt="" class="img-xs rounded-circle">
					<i class="fas fa-sort-down"></i>
				</a>
				<div class="dropdown_menu_profile" id="showdropdown">  <!-- Cot -->
					<div class="dropdown_profile">
						<img src="/duan4/view/img/face8.jpg" alt="" class="img_profile_drp">
						<p class="name_profile">Tien lap</p>
						<p class="email_profile">tienlap@fpt.edu.vn</p>
					</div>
					<a href="" class="dropdown_item">My Profile</a>
						<a href="" class="dropdown_item">Messages</a>
						<a href="" class="dropdown_item">Sign Out</a>
				</div>
			</div>
		</div>
		<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("showdropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>