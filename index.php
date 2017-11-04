<?php include('header.php') ?>

<!-- Hero -->
<div class="container-fluid hero">
    <div class="container">
        <!-- Nav -->
        <div class="row">
          <?php include('navigation.php') ?>
        </div>
        <div class="row">
          <div class="col-sm-6 hero-skater">
            <img class="center-block" src="images/skater-01.png" />
          </div>
          <div class="col-sm-6">
            <p class="hero-text text-gold">
              Hockey Applications <br />
              <span class="text-white text-bold">For Players By Players</span>
            </p>

          </div>
        </div>
    </div><!-- /.container -->
</div><!-- /.container-fluid -->

<!-- Projects -->
<div class="container-fluid bg-dblue">
  <div class="container">
    <!-- Projects -->
    <div id="projects-section" class="row">
      <!-- Leagues -->
      <div class="row">
        <div class="col-sm-6">
          <div class="row pad60">
            <h3 class="text-red mar20-bot">TCT<span class="text-bold text-gold">Leagues</span><span class="alpha mar5-left">ALPHA</span></h3>
            <p class="text-lblue">
              <span class="text-gold"><i>TCT Leagues</i></span> is a full-featured League Management system. League managers
              have the ability to create custom leagues, seasons, schedules, teams, and rosters. <span class="text-gold"><i>TCT Leagues</i></span>
              also automatically generates mailing lists, downloadable calendars that are importable to all the major common calendar applications,
              players stats, league standings, and more.<br /><br />
              <span class="text-gold"><i>TCT Leagues</i></span> also comes with a real-time score keeping system. Scorekeepers can enter goal and penalty
              information into a live scoresheet in real-real time. This data automatically populates the rest of the statistics displayed throughout the rest
              of the season site. You can even do it on your phone!
            </p>
          </div>
        </div>
        <!-- Drafter -->
        <div class="col-sm-6">
          <div class="row pad60">
            <h3 class="text-red mar20-bot">TCT<span class="text-bold text-gold">Draft</span><span class="alpha mar5-left">ALPHA</span></h3>
            <p class="text-lblue">
              <span class="text-gold"><i>TCT Draft</i></span> Takes all of the hassle out of drafting teams for your league. Gone are the days where jumbled scribblings
              on white boards consume hours of your night just to get players placed on teams. <span class="text-gold"><i>TCT Draft</i></span> Imports all your registered players
              complete with ratings, preferred position, ref status, goalie status, buddy pick selection, and GM status. A simple drag and drop interface allows placing and shuffling
              players between teams an absolute breeze. Each team displays relevent information like average team player rating, number of players per position, total number of players, and more.
              And for those who arent looking to micro-manage their league's teams, there's an auto-draft feature! One click and you've got your league's teams ready to go!
            </p>
          </div>
        </div>
        <div class="col-sm-12 pad60-right pad60-left pad60-bot">
          <p class="text-gold text-center">
            ** Notice**<br />
            These applications are currently in alpha testing. If you're interested in trying them out and helping us continue to improve them,
            please <a class="text-bold text-red" href="mailto:contact@topcheddartech.com" target="_blank">contact us</a> and let us know! Thank you!
          </p>
        </div>
      </div>
    </div>
  </div>
</div><!-- END: Projects -->

<!-- Donations -->
<div class="container-fluid bg-blue">
  <div class="container pad60">
    <div clas="row">
      <p class="text-lblue">
        Top Cheddar Technologies applications are built on volunteered time and the associated costs are payed for out-of-pocket. If you like what we're doing and want to help us continue development, donations
        are welcome and greatly appreciated.
      </p>
    </div>
    <div class="row">
      <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
			<input type="hidden" name="cmd" value="_s-xclick">
			<input type="hidden" name="hosted_button_id" value="PUUXG56ZYFJ8Q">
			<input type="hidden" name="on0" value="Donation Amount">

      <div class="row mar20-top">
        <p class="text-lblue text-center">You can choose to donate as little as $5, just choose your amount from the drop down. Every little bit helps keep us going!</p>
  			<p class="text-grey text-center"><select name="os0">
  				<option value="Puck Bunnies">Puck Bunnies $5.00 USD</option>
  				<option value="Boosties">Boosties $10.00 USD</option>
  				<option value="Line mates">Line mates $20.00 USD</option>
  			</select> </p>
  			<input type="hidden" name="currency_code" value="USD">
  			<p class="text-white text-center"><input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!"></p>
        <p class="text-lblue text-center">
          *You will be taken to the Paypal site where you can choose to pay by credit card or your paypal account
        </p>
        <p class="text-white text-center"><img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1"></p>
      </div>

			</form>
    </div>
  </div>
</div><!-- END: Donations -->

<?php include('footer.php') ?>
