<footer>
  <div class="container">
      <div class="footer-box">
	  <?php 
	        date_default_timezone_set('Asia/karachi');
	           $date = date("Y-m-d");
               $newDate = date("d-m-Y", strtotime($date));
      ?>			   
               
        <p>Developer &copy; <?php echo date("Y"); ?> ATTAULLAH CHACHAR</p>
		</div>
  </div>
</footer>
</body>
</html>