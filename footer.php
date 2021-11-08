<footer>    
    <div id="footer_first">
        <div>
            <div id="foot_ques">
                <div>#tags to<span id="span_ques"> question AAP</span>!</div>
                <div id="span_foot_sub">Click/Tap on the hashtags to copy and use them(paste) in your social media posts</div>
            </div>
            <div id="foot_copysec">
                <span onclick="copyTextToClipboard('SisodiaSachBolo')">#SisodiaSachBolo</span>
                <span onclick="copyTextToClipboard('AamAadmiSeJuth')">#AamAadmiSeJuth</span>
                <span onclick="copyTextToClipboard('AamAadmiSeJuth')">#AamAadmiSeJuth</span>
                <span onclick="copyTextToClipboard('Tag5')">#Tag5</span>
                <span onclick="copyTextToClipboard('Tag3')">#Tag3</span>
                <span onclick="copyTextToClipboard('SachBolo')">#SachBolo</span>
                <span onclick="copyTextToClipboard('AamAadmi')">#AamAadmi</span>
                <span onclick="copyTextToClipboard('AAPSachBolo')">#AAPSachBolo</span>
                <span onclick="copyTextToClipboard('AamAadmi')">#AamAadmi</span>
                <span onclick="copyTextToClipboard('AAPSachBolo')">#AAPSachBolo</span>
                <span onclick="copyTextToClipboard('AamAadmi')">#AamAadmi</span>
                <span onclick="copyTextToClipboard('AamAadmiSeJuth')">#AamAadmiSeJuth</span>
            </div>
        </div>
    </div>
    
    <div id="footer_last">
        <div id="foot_last-main">
            <div id="foot_last-main-P1">Demand prayaschit from AAP <br id="br_id1">leaders!</div>
            <div id="foot_last-main-P2">Hold Aam Aadmi Party accountabel for their lies and ask right quistions on - </div>
            <div id="foot_last-main-P3">
                <div class="cls_footLastSocial" onclick="window.open('https://twitter.com/')"><img src="http://localhost/wordpress/wp-content/uploads/2021/11/Twitter_Social_Icon_Circle_Color-1.png" alt="Twitter" srcset=""> Twitter</div>
                <div class="cls_footLastSocial" onclick="window.open('https://www.instagram.com/')"><img src="http://localhost/wordpress/wp-content/uploads/2021/11/Insta_36x36.png" alt="Insta" srcset=""> Instagram</div>
                <div class="cls_footLastSocial" onclick="window.open('https://www.facebook.com/')"><img src="http://localhost/wordpress/wp-content/uploads/2021/11/Facebook_36x36.png" alt="Facebook" srcset=""> Facebook</div>
            </div>
        </div>
    </div>
    <div id="footer_second"></div>
</footer>
<script>
function copyTextToClipboard(text) {
  var textArea = document.createElement("textarea");
  textArea.value = text
  document.body.appendChild(textArea);
  textArea.focus();
  textArea.select();

  try {
    var successful = document.execCommand('copy');
    var msg = successful ? 'successful' : 'unsuccessful';
    console.log('Copying text command was ' + msg);
  } catch (err) {
    console.log('Oops, unable to copy');
  }

  document.body.removeChild(textArea);
}
document.addEventListener("DOMContentLoaded", function(){
// make it as accordion for smaller screens
if (window.innerWidth < 992) {

  // close all inner dropdowns when parent is closed
  document.querySelectorAll('.navbar .dropdown').forEach(function(everydropdown){
    everydropdown.addEventListener('hidden.bs.dropdown', function () {
      // after dropdown is hidden, then find all submenus
        this.querySelectorAll('.submenu').forEach(function(everysubmenu){
          // hide every submenu as well
          everysubmenu.style.display = 'none';
        });
    })
  });

  document.querySelectorAll('.dropdown-menu a').forEach(function(element){
    element.addEventListener('click', function (e) {
        let nextEl = this.nextElementSibling;
        if(nextEl && nextEl.classList.contains('submenu')) {	
          // prevent opening link if link needs to open dropdown
          e.preventDefault();
          if(nextEl.style.display == 'block'){
            nextEl.style.display = 'none';
          } else {
            nextEl.style.display = 'block';
          }

        }
    });
  })
}
// end if innerWidth
}); 
// DOMContentLoaded  end
function MenuFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
<? wp_footer(); ?>
</body>
</html>