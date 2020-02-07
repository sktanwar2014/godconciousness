
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
<script>
$(function(){
    // var value="http://localhost/gc/";
  // var value="http://gc.sargatechnology.com/";
  var value="http://godsconsciousness.com/";
//   var value="http://test.godsconsciousness.com/";
    replacepaths("{{siteUrl}}",value);
    replacepaths("{{ siteUrl }}",value);
    
    window.setTimeout(function(){
    $(".btnmodal").on('click', function (e) {
        Swal.fire(
        {'html':'<div class="text-justify" style="max-height:500px;overflow:scroll;">'+$('#data'+this.id.replace('b','')).html()+'</div>',
width:'90%',        
showCloseButton: true,
showCancelButton: false,
showConfirmButton: false,
        });
    });
},500);

    $.urlParam = function(name){
    var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
    if (results==null) {
       return null;
    }
    return decodeURI(results[1]) || 0;
}

let daysbox='';
let dayscount=new Date(new Date().getFullYear(), $.urlParam('month'), 0).getDate()
for(let i=1;i<=dayscount;i++){
daysbox+=`
<div class="col-md-2 col-4 p-0">
	<div class="gridbox">
							<a class="daybox" day="`+i+`" id="" target="_self">
								<div class="inner-div box-border d-flex justify-content-center align-items-center">
									<h1 class="text-light thin" style="font-size:4em;">`+i+`</h1>
								</div>
							</a>
						</div>
					</div>
`;
}
$('.daysbox').html(daysbox);

    $("a.daybox").on('click',function(e){
            e.preventDefault();
            window.location=value+"prayer?month="+$.urlParam('month')+"&day="+$(this).attr('day');
        });
  });
function replacepaths(name,value){
  var re = new RegExp(name,"g");
    $("a[href*='"+name+"']").each(function(){$(this).attr('href',$(this).attr('href').replace(re,value));});
    $("img[src*='"+name+"']").each(function(){$(this).attr('src',$(this).attr('src').replace(re,value));});
    $("div[style*='"+name+"']").each(function(){$(this).attr('style',$(this).attr('style').replace(re,value));});
}
  </script>
<footer class="site-footer" >
      <div class="container">
        
        <div class="row">
          <div class="col-md-5">
            
            <h3 class="footer-heading mb-4 text-white" style="padding-top: 28px;">ABOUT</h3>
            <p>Prayers are SIMPLE and DOABLE and have all those lead a more peaceful, successful, glorious, magnificent,
		healthy,
		prosperous and abundant life.</p>
            <p><a href="intro/" class="btn btn-primary pill text-white px-4 greybutton">Read More</a></p>
          </div>
          
              <div class="col-md-4 col-md-offset-1">
            <div class="row">
               <div class="col-md-6 col-md-offset-1" style="padding-top:3px;">
                <center><h3 class="footer-heading my-4 text-white text-left">QUICK MENU</h3></center>
                <div class="row">
              <div class="col-6 col-md-6">
                  <ul class="list-unstyled">
                    <li><a href="intro/">Introduction</a><li>
                    <li><a href="events/">Miracles</a></li>
                    <li><a href="obe/">OBE'S</a></li>
                   <!--  <li><a href="prayers/">Today's Prayers</a></li>
                    <li><a href="blog/">Blogs</a></li>
                    <li><a href="contact/">Conect Us</a></li>
 -->

                    
                  <!--  <li><a href="#">Careers</a></li>-->
                  </ul>
              </div>
              <div class="col-6 col-md-5">
                <!-- <h3 class="footer-heading mb-4 text-white">QUICK MENU</h3> -->
                  <ul class="list-unstyled" >
                    <!-- <li><a href="intro/">God Consciousness</a><li>
                    <li><a href="events/">Miracles</a></li>
                    <li><a href="obe/">Obe's</a></li> -->
                    <li><a href="prayers/">Prayers</a></li>
                    <li><a href="blogs/">Blogs</a></li>
                    <li><a href="contact/">Contact</a></li>


                    
                  <!--  <li><a href="#">Careers</a></li>-->
                  </ul>
              </div>
              </div>
            </div>
              
            
            </div>
          </div>


            
          
          
          <div class="col-md-2 pt-3">
            <div class=""><h3 class="footer-heading mb-3 text-white pt-2"> FOLLOW US</h3>
            </div>
             <a href="https://www.facebook.com/groups/429971720508946/" class="pb-2 pr-2 pl-0"><span class="icon-facebook" style=" font-size: 20px;"></span></a>
                  <a href="https://www.instagram.com/godsconsciousness_gc" class="p-2" style="margin-right:-0.3em;"><span class="icon-instagram" style="margin-left: -2px; font-size: 20px;"></span></a>
                  <a href="https://www.youtube.com/channel/UCKeVsVRweYnZFBEZUSsE47A" class="fa fa-youtube"><span class="icon-youtube" style="margin-left: 12px; font-size: 20px;"></span></a>
           </div>
       </div>
      <!--  <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>-->
             <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --
            Copyright &copy; <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All Rights Reserved | This template is made with <i class="icon-heart text-warning" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>-->
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --
            </p>
          </div>
          
        </div>-->
      </div>
    </footer>

</div>

  <script src="lib/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="lib/js/jquery-ui.js"></script>
  <script src="lib/js/popper.min.js"></script>
  <script src="lib/js/bootstrap.min.js"></script>
  <script src="lib/js/owl.carousel.min.js"></script>
  <script src="lib/js/jquery.stellar.min.js"></script>
  <script src="lib/js/jquery.countdown.min.js"></script>
  <script src="lib/js/jquery.magnific-popup.min.js"></script>
  <script src="lib/js/bootstrap-datepicker.min.js"></script>
  <script src="lib/js/aos.js"></script>

  
  <script src="lib/js/mediaelement-and-player.min.js"></script>

  <script src="lib/js/main.js"></script>
    
<script>
  $(function(){
         var prayers=["Mangal Hi Mangal<br>Hum Sab Ka Mangal Kar Do Ji <br>Dukh Takleef Kasht Intezaar Losses Sab Har Lo Ji <br>Shukrana Shukrana Shukrana Meray Malik.","My Lord,My Divine,my Strength <br>I Am Blessed,I Am Calm,I Am Content<br>I Am Grateful,I Am Happy,thank You Divine<br>Thank You Universe,thank You Divine. ","I Receive Showers And Showers Of Happiness <br>And Bliss Now. <br>I Am Blessed And Filled With Blessings Today. <br>Thank You Universe ,Thank You Divine<br>Thank You Universe.","Jholiyan Barkaton, Best Sehat Tandrusti Aur<br>Khushiyon Se Bhar Do Ji. <br>Dukh Takleef Kasht Intezaar Saaray Har Lo Ji. <br>Shukrana Shukrana Shukrana Meray Malik. ","I Ask For Divine Wisdom My Lord So That<br>I Live Each Moment With Deep Consciousness.<br>Thank You Divine<br>Thank You Universe,Thank You Divine. ","I Am Filled With Deep Gratitude <br>My Lord. <br>I Ask You To Bless Whatever<br>I Have And Shower Some More Of <br>Good Health And Happy Times. <br>Thank You Lord,Thank You My Lord <br>Thank You My Lord. ","My Lord<br>Fill Me With Positivity And Complete Well Being. <br>Thank You My Lord <br>Thank You My Lord ,Thank You My Lord. ","I Am Happy Today<br>I Am Blessed Today<br>I Am Filled With Gratitude Today. ","I Am Blessed Today ,I Am Ready For A Miracle Today<br>I Am In Receiving Mode Today <br>Because I Am Sowing Consciously <br>Conscientiously And Carefully. <br>Thank You My Lord,Thank You My Divine,<br>Thank You My Lord. ","Sukh Shanti,Dhan Daulat,Sehat Tandrusti <br>Suraksha Santosh,Khushiyon Barkaton,<br>Izzat Maan Samman Trust And Surrender ,<br>Divine Wisdom,Self Esteem<br>Self Worthiness ,Se Bhar Do Ji,<br>Dukh Takleef Kasht Intezaar Hurts Pains<br>Sab Har Lo Ji ,Shukriya Meray Malik,<br>Shukriya Meray Malik<br>Shukriya Meray Malik. "," My Lord,My Power<br>Envelope Me And My Family In Golden Ball Of<br>Divine Light Of Complete Protection. <br>Thank You My Lord ,Thank You My Power. ","I Ask You My Divine To Guide Me At Each Step.<br>I Ask You My Lord To Help Me Live <br>Each Moment With Complete Consciousness.<br>Thank You My Lord ,<br>Thank You My Divine. ","Me And My Family Are Blessed <br>We Are Healthy,We Are In Bliss.<br>We Are Financial Magnets.<br>Thank You My Lord,Thank You My Divine,<br>Thank You My Lord. ","Me And My Family Are In Bliss Today. <br>We Are Together And Happy,<br>We Are In Complete Gratitude<br>Thank You Divine ,Thank You Universe ,<br>Thank You Divine. "];

          var febprayer=[`<br />
My Lord<br />
My Divine <br />
Shower Shower and keep on Showering <br />
Blessings, Bliss,Peace, Prosperity <br />
and Loads of Financial Health <br />
on Me and my Family now<br />
Thank You Divine<br />
Thank You Divine <br />
Thank You Divine <br />
`,`<br />
My Divine <br />
My Lord <br />
My Protector<br />
Fill me and my Kith and Kin with <br />
Best and Happy Moments Now<br />
Thank You Divine <br />
Thank You Divine <br />
Thank You Divine <br />
`,`<br />
I Attract Divine <br />
Physical, Mental, <br />
Spiritual, Emotional, <br />
Financial and Social Health<br />
Thank You Divine <br />
Thank You Divine <br />
Thank You Divine <br />
`,`<br />
My Lord<br />
My Divine <br />
My Protector <br />
Fill my day with <br />
Safety, Security,<br />
Happiness and Blessings <br />
Thank You Divine <br />
Thank You Divine <br />
Thank You Universe <br />
`,`<br />
My Lord <br />
My Divine <br />
My Energy<br />
Keep me Positive,<br />
Prosperous and Peaceful Today<br />
Thank You Divine <br />
Thank You Divine <br />
Thank You Divine <br />
`,`<br />
My Lord <br />
My Divine <br />
My Power <br />
I ASK You to be with me Now and Always <br />
I Ask You to shower Divine Wisdom <br />
so that I live every moment consciously.<br />
Thank You Lord<br />
Thank You Divine <br />
Thank You Universe <br />
`,`<br />
Mangal hi Mangal <br />
Hum Sab ka MANGAL Kar do ji <br />
Khushiyon aur Barkaton se Bhar do ji <br />
DukhTakleefKashtSaarayHar Lo ji <br />
Shukriya meray Malik<br />
Shukriya meray Malik <br />
Shukriya meray Malik <br />
`,`<br />
I Attract <br />
Divine Wisdom and Miracles in my life Now<br />
I am Blessed <br />
Thank You Divine <br />
Thank You Divine <br />
Thank You Divine <br />
`,` <br />
We Attract Divine Abundance <br />
We Attract Divine Providence<br />
We Attract Divine Health <br />
We are Blessed <br />
We are Financial Magnets <br />
Thank You Divine <br />
Thank You Universe <br />
Thank You Divine <br />
`,`<br />
We surrender completely to the Divine Will and Plan <br />
and Ask for Loads and Loads of Good and Happy Moments <br />
for Myself and My Kith and Kin<br />
Thank You Divine <br />
Thank You Universe <br />
Thank You Divine <br />
`,`<br />
My Lord <br />
My Divine <br />
My Energy <br />
Fill me Today<br />
Fill me Now with <br />
Divine Happiness and Blissful Moments <br />
Thank You Divine <br />
Thank You Universe <br />
Thank You Divine <br />
`,`<br />
I Attract Divine Health <br />
I Have Healthy Internal and External organs <br />
I Attract Financial Health <br />
I am Blessed and Happy <br />
Thank You Divine <br />
Thank You Universe <br />
Thank You Divine <br />
`,`<br />
I am Calm<br />
I am Content <br />
I am Grateful <br />
I am Blessed<br />
I am a Financial Magnet <br />
Thank You Universe <br />
Thank You Divine <br />
Thank You Universe <br />
`,`<br />
I Surrender completely to the Divine Will and Plan <br />
and Ask for Bliss and Blessings <br />
Peace and Prosperity, <br />
Safety and Security <br />
for Myself and My Kith and Kin <br />
Thank You Divine <br />
Thank You Divine <br />
Thank You Universe <br />
`,`<br />
My Lord <br />
My Divine <br />
I Thank You for each moment of my life<br />
I Thank You for each and everything<br />
I Thank You for Showering Bliss and Blessings <br />
Thank You Divine <br />
Thank You Universe <br />
Thank You Divine <br />
`,`<br />
Sukh Shanti <br />
DhanDaulat<br />
SehatTandrusti<br />
Suraksha Santosh <br />
KhushiyonBarkaton<br />
Izzat MaanSamman<br />
Trust and Surrender <br />
Divine Wisdom seyBhar do ji <br />
DukhTakleefKashtSaarayhar Lo ji <br />
Shukriya meray Malik <br />
Shukriya meray Malik <br />
Shukriya meray Malik <br />
`,`<br />
I and my kith and kin Attract <br />
Divine Abundance, <br />
Divine Happiness, <br />
Divine Health and <br />
Loads and Loads of Divine Blessings <br />
I Receive from my Lord All that I Ask for <br />
Thank You Divine <br />
Thank You Universe <br />
Thank You Divine  <br />
`,`<br />
I Surrender completely <br />
to the Divine Will and Plan <br />
and Ask for Long, Healthy Life of Myself and My Family <br />
I know my Asking is Answered for sure<br />
Thank You Divine <br />
Thank You Universe <br />
Thank You Divine <br />
`,`<br />
I am Calm <br />
I am Content <br />
I am Blessed <br />
I am Grateful <br />
I am Healed<br />
I am a Financial Magnet <br />
Thank You Divine <br />
Thank You Universe <br />
Thank You Divine <br />
`,`<br />
Shower Shower<br />
My Lord<br />
My Divine <br />
On Me and My Family <br />
Bliss and Blessings <br />
Peace and Prosperity <br />
Health and Happiness <br />
Thank You Divine <br />
Thank You Universe <br />
Thank You Divine <br />
`,`<br />
I come to you my Lord <br />
with Open Palms and Ask <br />
Loads of Best and Happy Moments <br />
for Myself and My Family <br />
I am Blessed <br />
I am Ready for Miracles<br />
Thank You Divine <br />
Thank You Universe <br />
Thank You Divine <br />
`,`<br />
Jholiyan Barkaton aur Izzat MaanSammanseyBhar do ji <br />
DukhTakleefKashtSaarayhar Lo ji <br />
Shukriya meray Malik <br />
Shukriya meray Malik <br />
Shukriya meray Malik <br />
`,`<br />
FORGIVENESS PRAYERS<br />
I seek Forgiveness from the souls of this life and past lives <br />
whom I May have harmed knowingly or unknowingly <br />
I Love you <br />
I Respect you <br />
Thank you <br />
Thank you <br />
Thank you <br />
Thank you for Forgiving Me<br />
I Forgive the souls of this life and past lives <br />
who May have harmed me knowingly or unknowingly <br />
I Love you <br />
I Respect You<br />
Thank you <br />
Thank you <br />
Thank you <br />
Thank you for accepting my Forgiveness <br />
I Forgive my own self for at times <br />
I May have been unkind or disloyal to my own self<br />
I Love Myself <br />
I Respect Myself <br />
I Forgive Myself<br />
Thank you <br />
Thank you <br />
Thank you <br />
I Am Forgiven <br />
I Forgive <br />
I Forgive Myself<br />
Thank you Divine <br />
Thank you Divine <br />
Thank you Divine <br />
`,`<br />
Mangal hi Mangal kar do ji <br />
Khushiyon aur Barkaton se bhar do ji <br />
DukhTakleefKashtIntezaar<br />
Sab Har Lo Ji <br />
Shukriya Meray Malik <br />
Shukriya Meray Malik <br />
Shukriya Meray Malik <br />
`,`<br />
I Attract Success in All that I Say and Do<br />
I am a Winner<br />
I am Blessed <br />
I am a Financial Magnet <br />
Thank You Divine <br />
Thank You Divine <br />
Thank You Divine <br />
`,`<br />
I Attract Divine Happiness for Myself and my Family <br />
I Attract Peace and Prosperity for Myself and My Family <br />
I Receive what I Ask for <br />
I am Blessed <br />
Thank You Divine <br />
Thank You Divine <br />
Thank You Divine <br />
`,`<br />
I am Calm <br />
I am Content <br />
I am Grateful <br />
I am Happy <br />
I am Blessed <br />
Thank You Divine <br />
Thank You Divine <br />
Thank You Divine <br />
`,`<br />
I Attract Divine Wisdom for Myself and My Family <br />
We are All Together and Happy <br />
We are Blessed with Loads and Loads of Happy Times<br />
Thank you Divine <br />
Thank you Divine <br />
Thank you Divine<br />
`
];

var augprayer=[`<br />
Saturday Sunday Rituals<br />
Dear Members<br />
Do whenever you have the time but please do.<br />
1. Gratitude<br />
(Say Thank you for all that you have)<br />
Focus on what you have.<br />
<br />
2. Forgiveness Prayers<br />
A. Seek Forgiveness from The Souls of this life and past lives whom we may have harmed knowingly or unknowingly.<br />
B. Forgive Souls of this life and past lives who may have harmed us knowingly or unknowingly .<br />
C. Seek forgiveness from your ownself. You may have been unkind to your ownself by lying, by being full of ego, by being disloyal etc...etc<br />
3. Salt water(any salt)squabbing<br />
4. Incense(Any number)<br />
5. Prayers (Any)<br />
6. Havan (yellow mustard seeds and guggal dhoop...put on burning coal.Coal can be burnt on gas).<br />
7. Golden Light Meditation (receive Divine Golden Light with open palms and send to areas that need healing...can be sent to relationships situations, workplaces, education and behaviour of children or people,in physical pain).<br />
<br />
<br />
<br />
8. Brain and Heart Cleansing Meditation<br />
(Visualize your brain on a plate...see your own faults...visualize sprinkling<br />
cold water on your own pettiness...meanness...disloyalties.etc. Then visualize your Heart on a plate...same way look where you yourself are wrong...self audit...be conscious of your own drawbacks...wash away your own  shortcomings with chilled water. Smile...feel cold...fold hands and Thank The Divine ).<br />
9.Meditation of Visualization<br />
(Sit..Relax..Visualize what you<br />
want/desire ..see what you want...in detail...Smile as if you have got what you wanted/desired ...See Divine Golden Light on your fulfilled<br />
desires...Fold hands and Thank<br />
The Divine for fulfilling your wants /desires).<br />
<br />
1. Milarepa's Meditation<br />
(Sit...Relax...Visualize Happy Faces<br />
entering your body...Feel each cell of your body as if it is a Happy Face...Smile ..fold hands and Thank The Divine ...Thank the Universe ).<br />
<br />
`,`<br />
My Lord<br />
My DIvine<br />
Keep me and my Family in The Rainbow of Safe Smooth and Prosperous Life.<br />
I Receive what I Ask.<br />
I Thank for Receiving what I Ask.<br />
<br />
<br />
`,`<br />
Me and my Family are<br />
Healthy Happy and Live NOW with a Smile.<br />
Thank You My Lord<br />
Thank You My Lord<br />
Thank You My Universe.<br />
<br />
`,`<br />
My Lord<br />
My Strength<br />
My Power<br />
Answer My Prayers<br />
And<br />
Fulfill my Wishes.<br />
Thank You For Answering My Prayers and Fulfilling my Wishes.<br />
<br />
`,`<br />
My Divine<br />
Please<br />
Hold me by my hand, now, and take me to places that will make me feel Happy, Good and Worthy.<br />
I am Blessed.<br />
Thank You My Lord.<br />
<br />
<br />
`,`<br />
MANGAL hi MANGAL<br />
Hum Sab Ka MANGAL Kar Do Ji<br />
Hurts Pains Miseries Wait Losses<br />
Sab Har Lo Ji<br />
Shukriya Shukriya Shukriya Babaji<br />
<br />
<br />
`,`<br />
Dear co travellers,<br />
We continue with weekend rituals.<br />
<br />
`,`<br />
Saturday Sunday Rituals<br />
Dear Members<br />
Do whenever you have the time but please do.<br />
<br />
1. Gratitude<br />
(Say Thank you for all that you have)<br />
Focus on what you have.<br />
<br />
2. Forgiveness Prayers<br />
A. Seek Forgiveness from The Souls of this life and past lives whom we may have harmed knowingly or unknowingly.<br />
<br />
B. Forgive Souls of this life and past lives who may have harmed us knowingly or unknowingly .<br />
<br />
C. Seek forgiveness from your ownself. You may have been unkind to your ownself by lying, by being full of ego, by being disloyal etc...etc<br />
<br />
3. Salt water(any salt)squabbing<br />
4. Incense(Any number)<br />
5. Prayers (Any)<br />
6. Havan (yellow mustard seeds and guggal dhoop...put on burning coal.Coal can be burnt on gas).<br />
7. Golden Light Meditation (receive Divine Golden Light with open palms and send to areas that need healing...can be sent to relationships situations, workplaces, education and behaviour of children or people in physical pain).<br />
8. Brain and Heart Cleansing Meditation<br />
(Visualize your brain on a plate...see your own faults...visualize sprinkling<br />
cold water on your own pettiness...meanness...disloyalties.etc.<br />
Then visualize your Heart on a plate...same way look where you yourself are wrong...self audit...be conscious of your own<br />
drawbacks...wash away your<br />
own shortcomings with chilled water.<br />
Smile...feel cold...fold hands and Thank The Divine ).<br />
<br />
<br />
<br />
<br />
<br />
9.Meditation of Visualization<br />
(Sit..Relax..Visualize what you<br />
want/desire ..see what you want...in detail...Smile as if you have got what you wanted/desired ...See Divine Golden Light on your fulfilled desires...Fold hands and Thank The Divine for fulfilling your wants /desires).<br />
1. Milarepa's Meditation<br />
(Sit...Relax...Visualize Happy Faces<br />
entering your body...Feel each cell of your body as if it is a Happy Face...Smile ..fold hands and Thank The Divine ...Thank the Universe ).<br />
<br />
`,`<br />
My Lord<br />
Bless all that I have and Shower some more of Bliss, Blessings, Peace and Prosperity.<br />
Thank You My Lord.<br />
<br />
`,`<br />
My Lord<br />
My Power<br />
My Divine<br />
I have decided to look for reasons to make me feel Good and Happy.<br />
Stand with me, My Lord and make me feel Good and Happy.<br />
Thank You My Lord<br />
Thank You My Divine<br />
<br />
<br />
`,`<br />
My Day is Wonderful<br />
I am Blessed and in Complete Control of my Thoughts and Feelings.<br />
Thank You Divine<br />
Thank You Divine<br />
Thank You Divine<br />
<br />
<br />
`,`<br />
Dear Universe<br />
Delight Me<br />
Surprise Me<br />
Fill me with Bounties and Blessings.<br />
Thank You Dear Universe.<br />
<br />
<br />
`,`<br />
My Universe<br />
Now, Please hold me by my Hand and help me to have Faith in YOU.<br />
Help me to feel Delighted.<br />
Gratitude Universe.<br />
<br />
<br />
<br />
`,`<br />
Dear Co travellers<br />
Today Twice we will do<br />
Havan with this Prayer<br />
Sukh Shanti<br />
Dhan Daulat<br />
Sehat Tandrusti<br />
Suraksha Santosh<br />
Khushiyon Barkaton<br />
Izzat Maan Samman<br />
Trust and Surrender<br />
Divine Wisdom<br />
Laughter Happiness<br />
Joyous Moments and Complete Well Being<br />
Sey Bhar do ji<br />
Dukh Takleef Kasht Intezaar Losses Hurts Pains Miseries Sab Har Lo Ji<br />
Shukriya Shukriya Shukriya Meray Malik.<br />
<br />
`,`<br />
Dear Co travellers<br />
Today we will sit, relax and do Milarepa’s Meditation.<br />
Along with Forgiveness Prayers.<br />
<br />
<br />
<br />
`,`<br />
My Lord<br />
I am very sure of receiving All Good Today.<br />
I am in Gratitude of all Good that is coming to me. <br />
<br />
<br />
`,`<br />
We all are in Golden Ball of Divine Blessings and Divine Protection.<br />
Thank You Divine<br />
Thank You Universe<br />
Thank You Divine<br />
<br />
<br />
`,`<br />
My Lord<br />
My Universe<br />
Take my feet to places that will make me feel Worthy, Happy and Stress Free.<br />
Thank You My Universe<br />
Thank You My Lord.<br />
<br />
<br />
<br />
<br />
`,`<br />
My Divine<br />
My Power<br />
Take me Today to only those places, people and things that will give me Ease.<br />
Thank You My Lord<br />
Thank You My Lord<br />
Thank You My Lord<br />
<br />
<br />
`,`<br />
My Lord<br />
My Divine<br />
I request You to Shower on me The Wisdom and Strength to move to Good Feeling Thoughts.<br />
Thank You My Lord<br />
Thank You My Divine.<br />
<br />
<br />
`,`<br />
My Divine<br />
My Universe<br />
Surprise and Delight me NOW.<br />
I am Ready to Receive.<br />
<br />
<br />
`,`<br />
My Lord<br />
My Power<br />
I have decided to be Good and Nice to myself Today.<br />
Hold me by my hand and make me feel Nice and Good Today.<br />
Thank You My Lord<br />
Thank You My Power.<br />
<br />
`,`<br />
My Lord<br />
My Power<br />
I have decided to feel Joyous Today.<br />
Please create Joyful conditions for me.<br />
Thank You My Lord.<br />
<br />
`,`<br />
My Lord<br />
My Divine<br />
I come to YOU with Open Palms and Ask YOU to help me with Clarity to know about my Feelings.<br />
Thank You My Lord<br />
Thank You My Divine<br />
Thank You Godmother<br />
<br />
<br />
<br />
`,`<br />
My Universe<br />
I receive All Good Today.<br />
I feel All Good Today<br />
I am Blessed.<br />
<br />
<br />
`,`<br />
I am in Receiving Mode Today.<br />
I am ready for a Miracle.<br />
I am Blessed.<br />
Thank You Divine<br />
Thank You Universe<br />
Thank You Divine.<br />
<br />
`,`<br />
My Divine<br />
My Lord<br />
I request YOU to Help me feel Good, Happy and Worthy Today.<br />
Thank You My Divine<br />
Thank You My Lord.<br />
<br />
<br />
<br />
`,`<br />
Dear Co travellers<br />
We do, what we did yesterday.<br />
<br />
Havan<br />
1.Heat coal on gas, till red.<br />
2. Put this coal in a havan pot.<br />
3. Put yellow mustard seeds and guggal dhoop.<br />
4.Take it around your home, in all the rooms.<br />
5. Keep it near your main door/ gate.<br />
6. After the havan has cooled, put the ash in plants.<br />
7. While taking it around your home, you can say any Prayer.<br />
I say<br />
Sukh Shanti<br />
Dhan Daulat<br />
Sehat Tandrusti Suraksha Santosh Khushiyon Barkaton Izzat Maan Samman Trust and Surrender DIVINE Wisdom<br />
Happiness<br />
Laughter<br />
sey bhar do ji<br />
Dukh Takleef Kasht Intezaar Hurts, Pains, Miseries, Losses<br />
Sab har Lo ji<br />
Shukriya Meray Malik Shukriya Meray Malik Shukriya Meray Malik<br />
<br />
<br />
`,`<br />
Havan<br />
1. Heat coal on gas, till red.<br />
2. Put this coal in a havan pot.<br />
3. Put yellow mustard seeds and guggal dhoop.<br />
4. Take it around your home, in all the rooms.<br />
5. Keep it near your main door/ gate.<br />
6. After the havan has cooled, put the ash in plants.<br />
7. While taking it around your home, you can say any Prayer.<br />
I say<br />
Sukh Shanti<br />
Dhan Daulat<br />
Sehat Tandrusti Suraksha Santosh Khushiyon Barkaton Izzat Maan Samman Trust and Surrender DIVINE Wisdom<br />
Happiness<br />
Laughter<br />
sey bhar do ji<br />
Dukh Takleef Kasht Intezaar Hurts, Pains, Miseries, Losses<br />
Sab har Lo ji<br />
Shukriya Meray Malik Shukriya Meray Malik Shukriya Meray Malik.<br />
<br />
<br />
<br />
<br />
<br />
`,`<br />
MANGAL hi MANGAL<br />
Hum Sab Ka MANGAL Kar Do Ji<br />
Dukh Takleef Kasht Intezaar Losses<br />
Sab Har Lo Ji<br />
Shukriya Shukriya Shukriya Divine.<br />
<br />
<br />
`,`<br />
My Lord<br />
My Divine<br />
My Power<br />
I am Happy Today and ready to receive Bliss and Blessings.<br />
Thank You My Lord<br />
Thank You My Power.<br />
Thank You My Divine.<br />
`];
augprayer.reverse();

var sept=
[`
Saturday Sunday Rituals</br>
Dear Members</br>
Do whenever you have the time but please do.</br>
1. Gratitude</br>
(Say Thank you for all that you have)</br>
Focus on what you have.</br>
</br>
2. Forgiveness Prayers</br>
A. Seek Forgiveness from The Souls of this life and past lives whom we may have harmed knowingly or unknowingly.</br>
B. Forgive Souls of this life and past lives who may have harmed us knowingly or unknowingly .</br>
C. Seek forgiveness from your ownself. You may have been unkind to your ownself by lying, by being full of ego, by being disloyal etc...etc</br>
3. Salt water(any salt)squabbing</br>
4. Incense(Any number)</br>
5. Prayers (Any)</br>
6. Havan (yellow mustard seeds and guggal dhoop...put on burning coal.Coal can be burnt on gas).</br>
7. Golden Light Meditation (receive Divine Golden Light with open palms and send to areas that need healing...can be sent to relationships situations, workplaces, education and behaviour of children or people,in physical pain).</br>
</br>
</br>
</br>
8. Brain and Heart Cleansing Meditation</br>
(Visualize your brain on a plate...see your own faults...visualize sprinkling</br>
cold water on your own pettiness...meanness...disloyalties.etc. Then visualize your Heart on a plate...same way look where you yourself are wrong...self audit...be conscious of your own drawbacks...wash away your own  shortcomings with chilled water. Smile...feel cold...fold hands and Thank The Divine ).</br>
9.Meditation of Visualization</br>
(Sit..Relax..Visualize what you</br>
want/desire ..see what you want...in detail...Smile as if you have got what you wanted/desired ...See Divine Golden Light on your fulfilled</br>
desires...Fold hands and Thank</br>
The Divine for fulfilling your wants /desires).</br>
</br>
1. Milarepa's Meditation</br>
(Sit...Relax...Visualize Happy Faces</br>
entering your body...Feel each cell of your body as if it is a Happy Face...Smile ..fold hands and Thank The Divine ...Thank the Universe ).</br>
Details in the Drive dears.</br>
</br>
`,`</br>
My Lord</br>
I come to You with Open Palms and Ask for Divine Wisdom so that I understand my own feelings and I Respect my own Feelings.</br>
Thank You My Lord</br>
</br>
</br>
`,`</br>
My Lord</br>
I welcome YOU to my Abode</br>
Aaa Jao Ji</br>
Bring Loads of Rainbows of Good and Happy Times.</br>
Thank YOU My Lord ji.</br>
</br>
`,`</br>
Dear Universe</br>
Today Please Delight me and Surprise me.</br>
Thank You Universe.</br>
</br>
`,`</br>
My Lord</br>
My Divine</br>
Request, take me to only those places that make me feel Happy and Good.</br>
Thank You My Lord</br>
Thank You My Divine.</br>
</br>
</br>
</br>
</br>
</br>
</br>
`,`</br>
MANGAL hi MANGAL</br>
Hum Sab ka MANGAL kar do ji</br>
Khushiyon aur Barkaton sey bhar do ji.</br>
Shukriya Meray Malik</br>
Shukriya Meray Malik</br>
Shukriya Meray Malik</br>
</br>
Dimple ji shared: </br>
Dear Co travellers</br>
Would share what THEY said</br>
I saw THEM, many many of THEM clearly, as I always do with Dholz, Nagaday, Celebrating mode, dancing to Today's Prayer.</br>
Then Dancing stops.</br>
THEY call me.</br>
I go on a kuccha platform, where THEY all are, all dressed up in colourful attires, dhoti, Patiala salwaarz, short shirts, bangles, paranday, turbans etc.</br>
THEY say</br>
Go tell people, Dimaag ki wiring karna unkay haath mein hai, unki haatho ki lakeeron mein nahin.</br>
Jab bhi ulta sulta thought aaye, sit rewire your brain.</br>
Then THEY showed lots of chattering brains, THEY said, tell these people, sit, relax, drink Jinnah Sahab wala water, step back, chattering wala plug nikalo, Aha walay moment pey plug lagao aur dance kar kar key bolo.</br>
</br>
MANGAL hi MANGAL</br>
Hum Sab Ka MANGAL Kar Do Ji</br>
Khushiyon aur Barkaton sey Bhar do ji.</br>
</br>
</br>
`,`</br>
Dear Co travellers</br>
We shall do Weekend Rituals.</br>
</br>
</br>
Dimple Anil: </br>
We are the CREATORS Of our own lives.</br>
How very EMPOWERING, only task required is to understand, analyse our own feelings.</br>
As a child we were taught by elders at home or in schools, ‘Before pointing a Finger at others, simply remember three fingers are pointing at you’, which was never explained further and TODAY in my OUT OF BODY EXPERIENCE , THEY explained - These three fingers that are pointing towards your own self are actually alerting You to STEP BACK from Within and RELAX, then Take deliberated steps. These deliberated steps will simply BE BLESSED and PRE PAVE your path to Happiness and Blessings.</br>
How very simple and doable.</br>
</br>
</br>
</br>
</br>
</br>
`,`</br>
Dear Co travellers</br>
Weekend Rituals are done today too.</br>
</br>
`,`</br>
I come to YOU My Lord</br>
And Request YOU to Bless each one of us with loads and loads of Best and Happy Times.</br>
Thank YOU My Lord.</br>
</br>
`,`</br>
My Divine</br>
My Lord</br>
My Today is The Best Today.</br>
Thank You My Divine</br>
Thank You My Lord.</br>
</br>
`,`</br>
My Lord</br>
My Universe</br>
Fill my</br>
Inside-Outside</br>
With Laughter, Happiness and Miracles.</br>
Grateful for answering My Prayers Dear Divine.</br>
</br>
</br>
`,`</br>
I am a Financial Magnet</br>
I am a Winner</br>
I am Blessed.</br>
</br>
`,`</br>
My Lord</br>
Bless and Enhance my Income.</br>
Bless my Bills and Expenditures.</br>
I Attract Loads and Loads of Financial Health.</br>
Thank You My Lord.</br>
Thank You My Divine.</br>
Thank You My Lord.</br>
</br>
`,`</br>
Each one of us is in Showers of Complete Well Being.</br>
We Bow in Gratitude for these Showers of Complete Well Being.</br>
</br>
`,`</br>
Dear Co travellers</br>
Today we all do Milarepa's Meditation as many times as we can.</br>
</br>
</br>
`,`</br>
Sukh Shanti</br>
Dhan Daulat</br>
Sehat Tandrusti</br>
Suraksha Santosh</br>
Barkaton Khushiyon</br>
Izzat Maan Samman</br>
Trust and Surrender</br>
Divine Wisdom</br>
Happiness, Laughter</br>
Joyous Moments</br>
Complete Well Being</br>
Sey Bhar Do Ji.</br>
Shukriya Shukriya Shukriya</br>
Meray Malik.</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
`,`</br>
Meray Malik</br>
Padharo Meray Ghar</br>
Aur</br>
Blessings ki Barsaat Kar Do Ji</br>
Shukrana Shukrana Shukrana</br>
Meray Malik.</br>
मेरे मालिक</br>
पधारो मेरे घर</br>
और</br>
बरकतों की बरसात कर दो जी</br>
शुक्रिया शुक्रिया शुक्रिया मेरे मालिक</br>
</br>
`,`</br>
My Lord</br>
Give me Safe Smooth Prosperous Life.</br>
Keep me Protected and Secure.</br>
Thank You My Lord</br>
Thank You Divine</br>
Thank You Universe</br>
</br>
</br>
</br>
`,`</br>
For YOU My Lord</br>
My Universe</br>
My Abode is all and always open.</br>
Simply</br>
Flow in</br>
And</br>
Surprise and Delight me.</br>
Thank YOU My Lord</br>
Thank YOU My Universe.</br>
--------------------------------------------------------------------------------------</br>
BE CONSCIOUS OF OUR PRESENCE - THEY SAID TO TELL YOU ALL.</br>
Dear All</br>
Now again Today I saw Jesus.</br>
He is around a beautiful Home and during my routine morning walk, as I stood with my arms and palms open under the huge Peepal tree where I usually stand and greet my Higher Self, I got called towards this side .... the trees laden with white blooms ... calling me over and over till I Reached them. They called me by my name, “ Come Dimple .. Come closer Tell the people, tell all that now once they are understanding that our language is that of FEELINGS and that now that they are learning to be conscious of their Feelings; now the next STEP to DIVINE ALIGNMENT IS to Always Be CONSCIOUS of OUR PRESENCE, We ALWAYS KNOW THAT WE ARE WATCHING OVER YOU ALL... acknowledge this aloud. TELL ALL TO ACKNOWLEDGE THIS SAY THIS TO US.... “ I know YOU are watching over me. I know I am in YOUR DIRECT PROTECTION.” Tell them to understand, feel, believe and say it. MAKE IT KNOWN TO ALL that WE ARE ALWAYS WATCHING OVER YOU AND YOUR AFFAIRS. THE MORE YOU LIVE IN THIS KNOW OF OUR PROTECTION OVER YOU, THE MORE ALIGNED YOU WOULD BE WITH THE DIVINE”!!</br>
Dear All it is a euphoric feeling. I am GRATEFUL TO THE DIVINE, The UNIVERSE, THEM - the Angels for all this learning.</br>
Simple and Doable.</br>
Our take away’s from Today’s Experience :</br>
1. Be CONSCIOUS OF YOUR FEELINGS- consciously FEEL GOOD</br>
2. BE CONSCIOUS OF OUR PRESENCE - consciously tell yourself “I KNOW YOU ARE THERE LOOKING AFTER ME. I THANK YOU FOR TAKING CARE OF ME AND ALL MY AFFAIRS. I KNOW I HAVE YOU, WHO LOVES ME AND IS ALWAYS LOOKING AFTER MY BEST INTERESTS.”</br>
-Dimple Anil</br>
God’s Consciousness</br>
</br>
</br>
`,`</br>
Dear Co Travellers</br>
Today we will sit and visualize Golden Ball of Divine Blessings and Ask for loads and loads of Complete Well Being for each one of us.</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
`,`</br>
Dear Co travellers</br>
Weekend Rituals are to be done for sure dears.</br>
Saturday Sunday Rituals</br>
</br>
Dear Members</br>
Do whenever you have the time but please do.</br>
</br>
1. Gratitude</br>
(Say Thank you for all that you have)</br>
Focus on what you have.</br>
</br>
2. Forgiveness Prayers</br>
A. Seek Forgiveness from The Souls of this life and past lives whom we may have harmed knowingly or unknowingly.</br>
B. Forgive Souls of this life and past lives who may have harmed us knowingly or unknowingly .</br>
C. Seek forgiveness from your ownself. You may have been unkind to your ownself by lying, by being full of ego, by being disloyal etc...etc</br>
</br>
3. Salt water(any salt)squabbing</br>
4. Incense(Any number)</br>
5. Prayers (Any)</br>
</br>
6. Havan (yellow mustard seeds and guggal dhoop...put on burning coal.Coal can be burnt on gas).</br>
7. Golden Light Meditation (receive Divine Golden Light with open palms and send to areas that need healing...can be sent to relationships situations, workplaces, education and behaviour of children or people,in physical pain).</br>
8. Brain and Heart Cleansing Meditation</br>
(Visualize your brain on a plate...see your own faults...visualize sprinkling</br>
cold water on your own pettiness...meanness...disloyalties.etc.</br>
Then visualize your Heart on a plate...same way look where you yourself are wrong...self audit...be conscious of your own drawbacks...wash away your own shortcomings with chilled water. Smile...feel cold...fold hands and Thank The Divine ).</br>
</br>
9.Meditation of Visualization</br>
(Sit..Relax..Visualize what you</br>
want/desire ..see what you want...in detail...Smile as if you have got what you wanted/desired ...See Divine Golden Light on your fulfilled desires...Fold hands and Thank The Divine for fulfilling your wants /desires).</br>
</br>
1. Milarepa's Meditation</br>
(Sit...Relax...Visualize Happy Faces entering your body...Feel each cell of your body as if it is a Happy Face...Smile ..fold hands and Thank The Divine ...Thank the Universe ).</br>
</br>
`,`</br>
Dear Co travellers</br>
Weekend Rituals be done by all please.</br>
</br>
</br>
</br>
`,`</br>
Meray Malik</br>
Please Take me to places where I feel Good, Worthy and In Bliss.</br>
Thank You Meray Malik</br>
Thank You Meray Malik</br>
Thank You Meray Malik.</br>
</br>
</br>
`,`</br>
My Lord</br>
My Divine</br>
Envelope me and my Family in Golden Ball of Divine Health</br>
Divine Protection and</br>
Divine Happiness</br>
Thank You</br>
Thank You</br>
Thank You</br>
My Lord.</br>
</br>
</br>
</br>
</br>
</br>
`,`</br>
I Trust and Surrender Now completely.</br>
Now I receive All Good.</br>
Now I receive Bliss and Blessings.</br>
</br>
</br>
`,`</br>
MANGAL hi MANGAL</br>
Hum Sab Ka MANGAL kar do ji.</br>
Jholiyan Barkaton sey Bhar Do Ji.</br>
Shukriya Shukriya Shukriya Meray Malik.</br>
</br>
`,`</br>
My Lord</br>
Please help me</br>
Please hold me by my hand and take me to places that will make me feel Good and Happy.</br>
Thank You My Lord</br>
Thank You My DIvine.</br>
</br>
</br>
</br>
</br>
</br>
</br>
`,`</br>
Dear Co travellers</br>
Weekend Rituals will be done dears.</br>
</br>
</br>
`,`</br>
Dear Co travellers</br>
Weekend Rituals be done for sure dears.</br>
</br>
`,`</br>
My Lord</br>
Today I am going to feel as if all my Prayers are Answered and all my Wishes are fulfilled.</br>
I am Blessed and Happy at all times Today.</br>
Thank You My Lord.</br>
`];

var oct=

[`
Shower Shower on me and my Family</br>
Peace and Prosperity</br>
Bliss and Blessings</br>
Health and Happiness</br>
Thank You My DIvine</br>
Thank You My Universe</br>
Thank You My Lord.</br>
`,`</br>
My Lord</br>
My Power</br>
My Divine</br>
I Thank YOU for looking after me and my Family.</br>
I Thank YOU for keeping me and my Family in YOUR Protection</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
`,`</br>
Meray Bhagwan ji</br>
Meray Khuda ji</br>
My Lord</br>
NOW hold me and take me to places, people and things that will make me Laugh, Happy and Prosperous.</br>
Thank You Meray Bhagwan ji</br>
Thank You Meray Khuda ji</br>
Thank You My Lord.</br>
</br>
`,`</br>
Dear Co travellers</br>
Today</br>
We focus only and only on what we have and be in Gratitude.</br>
Today is Thank You Day for all we have and all that is about to come.</br>
Thank You</br>
Thank You</br>
Thank You</br>
My Lord.</br>
</br>
</br>
</br>
</br>
`,`</br>
Dear Co travellers</br>
Today Havan</br>
Atleast twice</br>
With this Prayer</br>
MANGAL hi MANGAL</br>
Hum Sab Ka MANGAL kar do ji.</br>
Shukrana Shukrana Shukrana Meray Malik.</br>
`,`</br>
Dear Co travellers</br>
Today</br>
We sit</br>
We dedicatedly Seek Forgiveness from The Souls of this life and past lives whom we MAY have harmed.</br>
We also Forgive Souls of this life and past lives who MAY have harmed us.</br>
We also seek Forgiveness from our own selves for we MAY have harmed our Own Selves.</br>
Importance of the word MAY</br>
When we Forgive others, the word MAY helps us not to feel proud or pompous.</br>
When we seek Forgiveness from others the word MAY helps us not to feel guilty or small.</br>
</br>
</br>
When we seek Forgiveness from our own selves the word MAY helps us to get a feel that making mistakes is OK and it also helps us to learn and know better as to what we want.</br>
`,`</br>
Meray Malik</br>
Sukh Shanti</br>
Dhan Daulat</br>
Sehat Tandrusti</br>
Suraksha Santosh</br>
Khushiyon Barkaton</br>
Izzat Maan Samman</br>
Trust and Surrender</br>
Divine Wisdom</br>
Complete Well Being</br>
Aur</br>
Laughter Sey Bhar Do Na.</br>
Shukrana Shukrana Shukrana</br>
Meray Malik.</br>
</br>
</br>
</br>
</br>
</br>
</br>
`,`</br>
My Lord</br>
I am in Complete Protection.</br>
I know YOU are looking at me at all times.</br>
I am Blessed and Completely at Ease.</br>
Thank YOU my Lord.</br>
`,`</br>
My Lord</br>
Hold me by my hand and</br>
Take me to places that will make me feel Good and Happy.</br>
I am Blessed.</br>
Thank You My Lord.</br>
`,`</br>
My Divine</br>
We are Blessed and Protected.</br>
Thank You My Divine.</br>
Let's feel the Blessings and the Protection</br>
Sit</br>
Relax</br>
Look around</br>
You will feel Blessed and Protected.</br>
</br>
`,`</br>
My Lord</br>
Today I have decided to see good, feel good and do good.</br>
My Lord</br>
Please be with me and make me Careful and Conscious each moment.</br>
Thank You My Lord.</br>
Thank You My Power</br>
Thank You My Universe.</br>
</br>
Dear Co travellers</br>
Prayers are to be written.</br>
Each word is important.</br>
Be careful dears.</br>
Casual approach be avoided dears.</br>
Words are important and when written bring in that feel and feelings are all that THEY work on.</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
`,`</br>
My Lord</br>
Now from this very moment</br>
I am going to see only and only Good..</br>
My Lord</br>
Now from this very moment</br>
I am going to Feel only and only Happy.</br>
My Lord</br>
Help me achieve all of this.</br>
I am in deep Gratitude.</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
`,`</br>
Dear Co travellers</br>
Havan anytime of the day with any Prayer with complete Consciousness and Surrender.</br>
</br>
By Dimple ji</br>
Jaibabaji jaibabaji jaibabaji</br>
My Out of Body Experience today.</br>
Infact started yesterday evening, enhanced while watching sun set.</br>
I was out of body transported into a deep jungle where there was a small monastery, to enter the monastery I had to double up as the arched cemented door was low.</br>
In one corner there was a small Tibetan Buddhist Prayer wheel made of concrete and cement .</br>
This Prayer wheel was different from the one we see in Buddhist Temples, this was of cement.</br>
There's was a huge stone diya burning in one conner (Diya was shaped like Kundi, in which we pound Masala in Kitchen).</br>
I saw many people trying hard to push the cement wheel but it didn't budge even a bit. Then I was asked to try and the moment I touch it started to SPIN.</br>
I was called by...</br>
A lady, with very curly short hair, Almond eyes, sharp chiselled nose, wearing a baby pink Chiffon Saree, Pearls around her neck, lips coloured as if chewing a betel nut (paan).</br>
</br>
</br>
</br>
</br>
This experience of mine I couldn't understand.</br>
Today a Man, Simple looking from humble background, with a sling jhola/ bag explained.....</br>
HE says</br>
There are two messages.......</br>
Belief and Trust.</br>
</br>
Crowd, trying to move the Prayer Wheel believed they could move, they couldn't but Dimple you Trusted US so your touch could move the concrete Prayer Wheel.</br>
First is the analogy that faith can move mountains is 1% true.</br>
This field of GC is the field of Faith, Trust and Surrender ! When we enter this field we must leave our logic mind behind.</br>
This Realm begins where logic ends.</br>
Prayers are Powerful only and only when There is Faith.</br>
Prayers are Powerful when there is Surrender.</br>
Prayers are Powerful when there are no ifs and buts.</br>
Prayers are Powerful when done with Ease and Calmness</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
`,`</br>
I Ask YOU My Lord to help me see Happiness all around.</br>
I also Ask YOU My Lord to be around me at all Times.</br>
I am Blessed My Lord.</br>
</br>
`,`</br>
My Lord</br>
Meray Khuda</br>
Meray Bhagwan ji</br>
NOW</br>
I Ask YOU to resolve all of my Anxieties and Fears.</br>
Fill me with Positivity and Prosperity.</br>
I want to feel Light and filled with Happiness NOW.</br>
Thank You My Lord</br>
Thank You Meray Bhagwan ji.</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
`,`</br>
Meray Malik</br>
Sukh Shanti Dhan Daulat</br>
Dey Do Na</br>
Jholiyan Barkaton aur Khushiyon</br>
Sey Bhar Do Na.</br>
Shukrana Shukrana Shukrana Meray Malik.</br>
</br>
`,`</br>
Meray Khuda</br>
Meray Bhagwan ji</br>
Fill my Now and Always with AHA and WOW moments.</br>
I get what I Ask for.</br>
Thank You My Lord</br>
Thank You My Power</br>
Thank You My DIvine</br>
Thank You My Universe.</br>
</br>
</br>
</br>
</br>
</br>
`,`</br>
My Lord</br>
I am in Receiving mode Today.</br>
Shower on me all that I have asked for.</br>
Fulfil all my Desires and Answer all my Prayers.</br>
Thank You My Lord.</br>
`,`</br>
Meray Khuda</br>
Meray Bhagwan ji</br>
Please look at my hurts and pains with Mercy.</br>
Relieve me of my hurts and pains.</br>
I want to feel Happy and Delightful.</br>
Bless me My Lord.</br>
</br>
`,`</br>
Dear Co travellers</br>
Today we do Gratitude for all that we have and for all that is on the way.</br>
Also we do Havan and Prayers of Forgiveness.</br>
</br>
</br>
</br>
`,`</br>
We all are Blessed.</br>
We all are Happy.</br>
We all are Looked after by THEM.</br>
</br>
`,`</br>
MANGAL hi MANGAL</br>
Hum Sab Ka</br>
MANGAL Kar Do Ji.</br>
Dukh Takleef Kasht</br>
Hurts Pains Miseries Sab</br>
Har Lo ji.</br>
Thank YOU My Lord</br>
Thank YOU My Divine</br>
Thank YOU My Universe.</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
`,`</br>
My Lord</br>
My Divine</br>
My Power</br>
Today</br>
I want to simply feel Good and Happy.</br>
Surprise me and Delight me.</br>
I am completely Ready.</br>
Thank You My DIvine</br>
Thank You My Lord</br>
Thank You My Power.</br>
`,`</br>
Meray Malik</br>
Aaj</br>
Please</br>
Be with me each second of the day.</br>
Hold me by my hand and take me wherever YOU feel it's Good for me.</br>
Thank You</br>
Thank You</br>
Thank You</br>
My Lord.</br>
</br>
</br>
`,`</br>
We all are in Golden Ball of Divine Blessings and Divine Protection.</br>
`,`</br>
Dear Co travellers</br>
We will do</br>
Weekend Rituals.</br>
Saturday Sunday Rituals</br>
Dear Members</br>
Do whenever you have the time but please do.</br>
1. Gratitude</br>
(Say Thank you for all that you have)</br>
Focus on what you have.</br>
</br>
2. Forgiveness Prayers</br>
A. Seek Forgiveness from The Souls of this life and past lives whom we may have harmed knowingly or unknowingly.</br>
B. Forgive Souls of this life and past lives who may have harmed us knowingly or unknowingly .</br>
C. Seek forgiveness from your ownself. You may have been unkind to your ownself by lying, by being full of ego, by being disloyal etc...etc</br>
3. Salt water(any salt)squabbing</br>
4. Incense(Any number)</br>
5. Prayers (Any)</br>
6. Havan (yellow mustard seeds and guggal dhoop...put on burning coal.Coal can be burnt on gas).</br>
7. Golden Light Meditation (receive Divine Golden Light with open palms and send to areas that need healing...can be sent to relationships situations, workplaces, education and behaviour of children or people,in physical pain).</br>
</br>
</br>
</br>
8. Brain and Heart Cleansing Meditation</br>
(Visualize your brain on a plate...see your own faults...visualize sprinkling</br>
cold water on your own pettiness...meanness...disloyalties.etc. Then visualize your Heart on a plate...same way look where you yourself are wrong...self audit...be conscious of your own drawbacks...wash away your own  shortcomings with chilled water. Smile...feel cold...fold hands and Thank The Divine ).</br>
9.Meditation of Visualization</br>
(Sit..Relax..Visualize what you</br>
want/desire ..see what you want...in detail...Smile as if you have got what you wanted/desired ...See Divine Golden Light on your fulfilled</br>
desires...Fold hands and Thank</br>
The Divine for fulfilling your wants /desires).</br>
1. Milarepa's Meditation</br>
(Sit...Relax...Visualize Happy Faces</br>
entering your body...Feel each cell of your body as if it is a Happy Face...Smile ..fold hands and Thank The Divine ...Thank the Universe ).</br>
Details in the Drive dears.</br>
</br>
`,`</br>
My Lord</br>
My Divine</br>
My Power</br>
I kneel down and Ask YOU with open palms to fill my within with DIvine Light so that I think, speak and act with utmost Consciousness.</br>
Thank You My Lord</br>
Thank You My Power</br>
Thank You My DIvine.</br>
</br>
`,`</br>
My Lord</br>
Please hold me by my hand and keep me under YOUR gaze.</br>
I Trust YOU completely.</br>
Thank YOU my Lord.</br>
</br>
`,`</br>
MANGAL hi MANGAL</br>
Hum Sab Ka MANGAL Kar Do Ji</br>
Jholiyan Barkaton aur Khushiyon sey Bhar Do Ji.</br>
Shukriya Shukriya Shukriya Meray Malik.</br>
</br>
`,`</br>
Meray Malik</br>
Meray Khuda</br>
Meray Bhagwan ji</br>
Sukh</br>
Sehat</br>
Khushiyon sey Bhar Do Na.</br>
`,`</br>
Dear Co travellers</br>
Today at anytime of the day.</br>
Sit</br>
Relax</br>
Visualize what you want.</br>
Visualize each step.</br>
Feel each step.</br>
Feel good and happy as if you have received all that you wished for.</br>
Fold your hands and Thank THEM for giving what you wanted.</br>
`];

var july=

[`Dimple Anil: </br>
Dear Co travellers </br>
Today’s Prayer will be possible to happen only and only when you decide To Be each word, i.e when you feel each word.</br>
</br>
I Ask for Smooth Prosperous Healthy and Long Life for myself and my Family. </br>
Thank You My Lord </br>
Thank You My Divine</br>
Thank You My Universe.</br>
</br>
`,`I am in Showers of Bliss</br>
I feel this Bliss</br>
I Bow in Gratitude for these showers of Bliss.</br>
</br>
`,`My Lord</br>
I have decided to feel Worthy Today. </br>
Please Shower on me My Worthiness. </br>
Thank You My Lord.</br>
</br>
</br>
</br>
`,`MANGAL hi MANGAL </br>
Hum Sab Ka MANGAL Kar Do Ji </br>
Dukh Takleef Kasht Intezaar Losses Sab Har Lo Ji </br>
Shukrana Shukrana Shukrana Meray Malik.</br>
</br>
`,`My Lord</br>
My Power </br>
My Strength </br>
I am going to feel Nice and Happy Today. </br>
I am going to be Stress Free Today. </br>
Thank You My Lord </br>
Thank You My Power</br>
Thank You My Strength.</br>
</br>
</br>
`,`7</br>
Dear Co travellers </br>
We continue with Weekend Rituals.</br>
Saturday Sunday Rituals</br>
Dear Members</br>
Do whenever you have the time but please do.</br>
</br>
1. Gratitude </br>
(Say Thank you for all that you have)</br>
Focus on what you have.</br>
2. Forgiveness Prayers </br>
A. Seek Forgiveness from The Souls of this life and past lives whom we may have harmed knowingly or unknowingly.</br>
</br>
B. Forgive Souls of this life and past lives who may have harmed us knowingly or unknowingly .</br>
</br>
C. Seek forgiveness from your ownself. You may have been unkind to your ownself by lying, by being full of ego, by being disloyal etc...etc</br>
</br>
3. Salt water(any salt)squabbing</br>
4. Incense(Any number)</br>
5. Prayers (Any)</br>
6. Havan(yellow mustard seeds and guggal dhoop...put on burning coal.Coal can be burnt on gas).</br>
7. Golden Light Meditation (receive Divine Golden Light with open palms and send to areas that need healing...can be sent to relationships situations, workplaces, education and behaviour of children or people in physical pain).</br>
</br>
8. Brain and Heart Cleansing Meditation </br>
(Visualize your brain on a plate...see your own faults...visualize sprinkling cold water on your own pettiness...meanness...disloyalties etc.</br>
Then visualize your Heart on a plate...same way look where you yourself are wrong...self audit...be conscious of your own drawbacks...wash away your own shortcomings with chilled water.</br>
Smile...feel cold...fold hands and Thank The Divine ).</br>
9.Meditation of Visualization</br>
(Sit..Relax..Visualize what you</br>
want/desire ..see what you want...in detail...Smile as if you have got what you wanted/desired ...See Divine Golden Light on your fulfilled desires...Fold hands and Thank The Divine for fulfilling your wants /desires).</br>
10. Milarepa's Meditation </br>
(Sit...Relax...Visualize Happy Faces entering your body...Feel each cell of your body as if it is a Happy Face...Smile ..fold hands and Thank The Divine ...Thank the Universe ).</br>
</br>
</br>
`,`My Lord</br>
I request You to make my feet take me to places that will make me happy and stress free. </br>
Give me The Wisdom to move to places that make me feel Worthy. </br>
Thank You My Lord.</br>
</br>
`,`My Lord</br>
I am receiving All Good in life. </br>
I am Blessed and Happy to know that YOU look after me. </br>
Thank You My Lord.</br>
</br>
</br>
`,`</br>
We are in Celebration mode Today. </br>
Thank You Divine for this Wonderful Day. </br>
We are Receiving more and more Happiness.</br>
</br>
</br>
`,`</br>
My Lord</br>
My Master</br>
Envelope me and my Family in Complete Well Being Now</br>
Thank You My Lord</br>
Thank You My Master</br>
</br>
</br>
`,`</br>
My Lord</br>
My Power</br>
Today I have decided to remain in complete Positivity. </br>
Today I shall remain disconnected completely from Negativity .</br>
Give me The Strength please.</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
`,`-14</br>
Dear Co travellers </br>
We continue with Weekend Rituals.</br>
Saturday Sunday Rituals</br>
1. Gratitude </br>
(Say Thank you for all that you have)</br>
Focus on what you have.</br>
2. Forgiveness Prayers </br>
A. Seek Forgiveness from The Souls of this life and past lives whom we may have harmed knowingly or unknowingly.</br>
</br>
B. Forgive Souls of this life and past lives who may have harmed us knowingly or unknowingly .</br>
</br>
C. Seek forgiveness from your ownself. You may have been unkind to your ownself by lying, by being full of ego, by being disloyal etc...etc</br>
</br>
3. Salt water(any salt)squabbing</br>
4. Incense(Any number)</br>
5. Prayers (Any)</br>
6. Havan(yellow mustard seeds and guggal dhoop...put on burning coal.Coal can be burnt on gas).</br>
7. Golden Light Meditation (receive Divine Golden Light with open palms and send to areas that need healing...can be sent to relationships situations, workplaces, education and behaviour of children or people in physical pain).</br>
</br>
8. Brain and Heart Cleansing Meditation </br>
(Visualize your brain on a plate...see your own faults...visualize sprinkling cold water on your own pettiness...meanness...disloyalties etc.</br>
Then visualize your Heart on a plate...same way look where you yourself are wrong...self audit...be conscious of your own drawbacks...wash away your own shortcomings with chilled water.</br>
Smile...feel cold...fold hands and Thank The Divine ).</br>
</br>
9.Meditation of Visualization</br>
(Sit..Relax..Visualize what you</br>
want/desire ..see what you want...in detail...Smile as if you have got what you wanted/desired ...See Divine Golden Light on your fulfilled desires...Fold hands and Thank The Divine for fulfilling your wants /desires).</br>
10. Milarepa's Meditation </br>
(Sit...Relax...Visualize Happy Faces entering your body...Feel each cell of your body as if it is a Happy Face...Smile ..fold hands and Thank The Divine ...Thank the Universe ).</br>
</br>
`,`</br>
My Lord</br>
Today I will remain Happy and in Good Mood. </br>
I will Laugh and be Joyous. </br>
Thank You My Lord.</br>
</br>
</br>
</br>
</br>
</br>
`,`</br>
Dear Lord</br>
I am in Receiving Mode Today </br>
I Receive All Good Today</br>
I am Blessed. </br>
Thank You My Lord.</br>
</br>
`,`</br>
My Lord</br>
Bless us all with Showers of Complete Well Being. </br>
Thank You My Lord. </br>
Thank You My Lord </br>
Thank You My Lord.</br>
</br>
`,`</br>
Today I take each step towards Happy and Good Feelings. </br>
I Promise myself to move towards those places that make me feel only Happy and Worthy. </br>
My Lord please hold me by my hand.</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
`,`</br>
My Lord</br>
My Divine</br>
Today Shower on me Divine Wisdom so that I understand My Feelings. </br>
I Think with Clarity and move on The Divine Path. </br>
Thank You Divine</br>
Thank You Universe </br>
Thank You Divine</br>
</br>
`,`</br>
Dear Co travellers </br>
Today we will dedicatedly do Milarepa's Meditation.</br>
Milarepa's Meditation </br>
Sit.</br>
Relax.</br>
Close your eyes.</br>
Visualize Happy Faces entering your body from all sides. </br>
Feel, see each cell of your body as a happy face. </br>
See your face as a Happy Face. </br>
Smile. </br>
Fold hands and Thank The Divine, Thank The Universe.</br>
</br>
</br>
</br>
</br>
</br>
`,`</br>
Dear Co travellers</br>
Today we do</br>
Heart and Brain Cleaning Meditation</br>
</br>
Step by Step</br>
Brain and Heart Cleansing Meditation</br>
(Visualize your brain on a plate...see your own faults...visualize sprinkling</br>
cold water on your own pettiness...meanness...disloyalties.etc.</br>
Then visualize your Heart on a plate...same way look where you yourself are wrong...self audit...be conscious of your own</br>
drawbacks...wash away your</br>
own shortcomings with chilled water.</br>
Smile...feel cold...fold hands and Thank The Divine ).</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
`,`</br>
Sukh Shanti</br>
Dhan Daulat</br>
Sehat Tandrusti</br>
Suraksha Santosh</br>
Khushiyon Barkaton</br>
Izzat Maan Samman</br>
Trust and Surrender</br>
Divine Wisdom</br>
Sey Bhar Do Ji</br>
Dukh Takleef Kasht Intezaar Losses Hurts Pains and Miseries</br>
Sab Har Lo Ji</br>
Thank You Divine</br>
Thank You Universe</br>
Thank You Divine</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
`,`</br>
Dear Co travellers</br>
Today along with Havan, we will do The Prayer</br>
Sukh Shanti</br>
Dhan Daulat</br>
Sehat Tandrusti</br>
Suraksha Santosh</br>
Barkaton Khushiyon</br>
Izzat Maan Samman</br>
Trust and Surrender</br>
Divine Wisdom sey bhar do ji</br>
Dukh Takleef Kasht Intezaar Hurts Pains Miseries Losses Sab Har Lo ji</br>
</br>
Havan</br>
1.Heat coal on gas, till red.</br>
2. Put this coal in a havan pot.</br>
3. Put yellow mustard seeds and guggal dhoop.</br>
4.Take it around your home, in all the rooms.</br>
5. Keep it near your main door/ gate.</br>
6. After the havan has cooled, put the ash in plants.</br>
</br>
</br>
</br>
</br>
</br>
</br>
`,`</br>
My Lord</br>
My Divine</br>
Please hold me by my hand and help me to feel Worthy and Happy.</br>
Take me to places that make me feel Good and Happy.</br>
Thank You My Lord.</br>
</br>
</br>
`,`</br>
MANGAL hi MANGAL</br>
Hum Sab Ka MANGAL kar do ji</br>
Khushiyon aur Barkaton sey bhar do ji</br>
Dukh Takleef Kasht Intezaar Hurts Pains Miseries Losses</br>
Sab Har Lo Ji</br>
Shukrana Shukrana Shukrana Meray Malik.</br>
</br>
`,`</br>
My Lord</br>
I am ready to Receive All Good Today</br>
My Lord</br>
I am All Ready for a Miracle Today.</br>
Thank You My Lord.</br>
</br>
</br>
`,`</br>
My Lord</br>
My Universe</br>
I Ask You to Bless me with Divine Wisdom so that I know What to Speak, How to Speak and When to Speak .</br>
Thank You My Lord</br>
Thank You My Universe</br>
</br>
</br>
`,`</br>
Dear Co travellers</br>
Today</br>
Sit</br>
Close your eyes</br>
Meditate on your own well being.</br>
Feel your feelings</br>
This feeling your own feelings will decide your day.</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
`,`</br>
Sukh Shanti</br>
Dhan Daulat</br>
Sehat Tandrusti</br>
Suraksha Santosh</br>
Happiness Laughter</br>
Barkaton Khushiyon</br>
Izzat Maan Samman</br>
Trust and Surrender</br>
Divine Wisdom</br>
Conscious Living sey Bhar Do Ji</br>
Dukh Takleef Kasht Intezaar Hurts Pains Miseries Loses</br>
Sab Har Lo Ji.</br>
Shukrana Shukrana Shukrana Divine.</br>
</br>
`,`</br>
My Lord</br>
My Power</br>
My Divine</br>
Bless me and each member of God's Consciousness with Complete Well Being.</br>
Thank You My Lord</br>
Thank You My Power</br>
Thank You My Divine.</br>
</br>
</br>
`,`</br>
Dear Co-travellers</br>
Today</br>
With utmost Consciousness we all will do Prayers of Forgiveness.</br>
</br>
</br>
`];

var june=

[`Saturday Sunday Rituals</br>
Dear Members</br>
Do whenever you have the time but please do.</br>
1. Gratitude </br>
(Say Thank you for all that you have)</br>
Focus on what you have.</br>
2. Forgiveness Prayers </br>
A. Seek Forgiveness from The Souls of this life and past lives whom we may have harmed knowingly or unknowingly.</br>
</br>
B. Forgive Souls of this life and past lives who may have harmed us knowingly or unknowingly .</br>
</br>
C. Seek forgiveness from your ownself. You may have been unkind to your ownself by lying, by being full of ego, by being disloyal etc...etc</br>
</br>
3. Salt water(any salt)squabbing</br>
4. Incense(Any number)</br>
5. Prayers (Any)</br>
6. Havan(yellow mustard seeds and guggal dhoop...put on burning coal.Coal can be burnt on gas).</br>
7. Golden Light Meditation (receive Divine Golden Light with open palms and send to areas that need healing...can be sent to relationships situations, workplaces, education and behaviour of children or people in physical pain).</br>
</br>
8. Brain and Heart Cleansing Meditation </br>
(Visualize your brain on a plate...see your own faults...visualize sprinkling cold water on your own pettiness...meanness...disloyalties etc.</br>
Then visualize your Heart on a plate...same way look where you yourself are wrong...self audit...be conscious of your own drawbacks...wash away your own shortcomings with chilled water.</br>
Smile...feel cold...fold hands and Thank The Divine ).</br>
</br>
9.Meditation of Visualization</br>
(Sit..Relax..Visualize what you</br>
want/desire ..see what you want...in detail...Smile as if you have got what you wanted/desired ...See Divine Golden Light on your fulfilled desires...Fold hands and Thank The Divine for fulfilling your wants /desires).</br>
10. Milarepa's Meditation </br>
(Sit...Relax...Visualize Happy Faces entering your body...Feel each cell of your body as if it is a Happy Face...Smile ..fold hands and Thank The Divine ...Thank the Universe ).</br>
`,`Sukh Shanti </br>
Dhan Daulat </br>
Sehat Tandrusti </br>
Suraksha Santosh </br>
Khushiyon Barkaton </br>
Izzat Maan Samman </br>
Trust and Surrender </br>
Divine Wisdom</br>
Self Esteem </br>
Self Worthiness </br>
Se Bhar Do Ji </br>
Dukh Takleef Kasht Intezaar Hurts Pains</br>
Sab Har Lo Ji </br>
Shukriya Meray Malik </br>
Shukriya Meray Malik </br>
Shukriya Meray Malik</br>
`,`My Lord</br>
My Power</br>
Envelope me and my Family in Golden Ball of Divine Light of complete Protection. </br>
Thank You My Lord </br>
Thank You My Power.</br>
</br>
`,`I Ask You My Divine to Guide me at each step.</br>
I Ask You My Lord to help me live each moment with complete Consciousness. </br>
Thank You My Lord </br>
Thank You My Divine.</br>
</br>
`,`Me and my Family are Blessed.</br>
We are Healthy</br>
We are in Bliss</br>
We are Financial Magnets</br>
Thank You My Lord</br>
Thank You My Divine</br>
Thank You My Lord</br>
`,`Me and my Family are in Bliss today. </br>
We are Together and Happy</br>
We are in Complete Gratitude </br>
Thank You Divine </br>
Thank You Universe </br>
Thank You Divine.</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
`,`We are Blessed and Happy </br>
We are Financially Stable</br>
We are Safe and Protected. </br>
Thank You Divine</br>
Thank You My Lord </br>
Thank You My Lord</br>
</br>
`,`Keep us Protected My Lord</br>
Keep us always Blessed. </br>
Thank You </br>
Thank You </br>
Thank You My Divine</br>
My Universe </br>
My Lord</br>
`,`Dimple Anil: </br>
Dear Co travellers </br>
Today we dedicatedly do Forgiveness Prayers and Havan.</br>
</br>
</br>
`,`</br>
Sukh Shanti </br>
Dhan Daulat</br>
Sehat Tandrusti Suraksha Santosh Khushiyon Barkaton Izzat Maan Samman Trust and Surrender </br>
Divine Wisdom </br>
Happiness and Laughter</br>
Good word of mouth </br>
Sey Jholiyan Bhar Do Ji </br>
Dukh Takleef Kasht Intezaar Saaray Har Lo ji </br>
Shukriya Shukriya Shukriya Meray Malik</br>
`,`</br>
My Lord</br>
My Divine</br>
Please give me and my Family Safe Smooth and Prosperous life.</br>
Thank You My Lord </br>
Thank You My Lord </br>
Thank You My Lord.</br>
`,`</br>
We Seek Complete Happiness My Divine</br>
Shower Complete Happiness My Lord</br>
Thank You for Showering Complete Happiness My Power.</br>
`,`</br>
I am Blessed </br>
I am Happy </br>
I am Content</br>
I am Calm</br>
Thank You </br>
Thank You </br>
Thank You </br>
My Lord</br>
My Universe </br>
My Divine</br>
`,`</br>
My Lord</br>
I want my Today to pass off beautifully. </br>
I meet positive and happy people Today. </br>
I feel happy and positive Today.</br>
Thank You My Lord </br>
Thank You My Lord </br>
Thank You My Lord.</br>
</br>
</br>
</br>
</br>
`,`</br>
Dimple Anil: Dear Co travellers </br>
Today with utmost dedication we do</br>
Heart and Brain Cleansing Meditation</br>
</br>
Step by Step </br>
Brain and Heart Cleansing Meditation </br>
(Visualize your brain on a plate...see your own faults...visualize sprinkling </br>
cold water on your own pettiness...meanness...disloyalties.etc.</br>
Then visualize your Heart on a plate...same way look where you yourself are wrong...self audit...be conscious of your own </br>
drawbacks...wash away your</br>
own shortcomings with chilled water.</br>
Smile...feel cold...fold hands and Thank The Divine ).</br>
`,`</br>
Dimple Anil: Dear Co-travellers </br>
Today we Thank for all that we have also for all that is on the way.</br>
</br>
</br>
</br>
</br>
</br>
</br>
`,`</br>
My Lord</br>
My Divine</br>
My Strength </br>
I am going to feel good Today</br>
I am going to be nice to myself Today.</br>
I am going to disconnect from all kinds of negativity Today. </br>
Thank You </br>
Thank You </br>
Thank You My Lord.</br>
</br>
`,`</br>
My Lord</br>
My Divine</br>
I come to You with Open Palms and Ask You to Guide and Guard me and my Family. </br>
Thank You My Lord </br>
Thank You My Divine.</br>
</br>
</br>
</br>
</br>
</br>
`,`</br>
My Lord</br>
My Divine</br>
Please I request YOU to keep my focus on Happiness and Fun Today. </br>
Fill my day with loads of Fun And Happiness Today. </br>
Thank You My Lord </br>
Thank You My Divine.</br>
`,`</br>
My Lord</br>
My Power</br>
My wishes are fulfilled and my Prayers are answered. </br>
Thank You My Lord</br>
Thank You My Power.</br>
`,`</br>
I am absolutely ready to receive Abundance. </br>
I am fully ready to move ahead in my life. </br>
Thank You My Lord</br>
Thank You My Universe </br>
Thank You My Divine.</br>
</br>
</br>
</br>
`,`</br>
Dimple Anil: </br>
Dear Co travellers </br>
Today we do</br>
Havan and Prayer </br>
Sukh Shanti </br>
Dhan Daulat </br>
Sehat Tandrusti </br>
Suraksha Santosh DIvine Wisdom</br>
Peace and Prosperity </br>
Health and Happiness </br>
Izzat Maan Samman </br>
Trust and Surrender </br>
Complete Well Being </br>
Sey Jholiyan Bhar do ji </br>
Hurts Pains Miseries Losses</br>
Sab Har Lo Ji </br>
Shukriya Shukriya Shukriya Meray Malik</br>
</br>
</br>
</br>
</br>
</br>
</br>
`,`</br>
My Lord</br>
My Divine</br>
My Power</br>
Today</br>
I am swirling in Divine Protection because I know I am looked after by You. </br>
Thank You My Divine</br>
Thank You My Power.</br>
`,`</br>
MANGAL hi MANGAL </br>
Hum Sab Ka MANGAL kar do ji </br>
Dukh Takleef Kasht Intezaar Losses Sab Har Lo Ji </br>
Shukriya Shukriya Shukriya Meray Malik.</br>
`,`</br>
My Lord</br>
My Divine</br>
Shower shower on me and my family</br>
Complete Health and complete Happiness.</br>
Thank you My Lord</br>
Thank you My Divine</br>
</br>
</br>
`,`</br>
Today I am swirling in Divine Abundance as all good comes to me because I know I am looked after by My Divine.</br>
Thank You My Divine</br>
Thank You My Divine</br>
Thank You My Divine.</br>
`,`</br>
Today My Divine</br>
I am in Deep Divine Wisdom.</br>
I Think, Speak and Act out of Deep Consciousness Today. </br>
Thank You for this Deep Divine Wisdom.</br>
</br>
`,`</br>
I am Happy and Blessed </br>
I am Healthy and in Abundance. </br>
Thank You My Lord</br>
Thank You My Lord </br>
Thank You My Lord</br>
</br>
</br>
</br>
</br>
`,`</br>
Dimple Anil: Dear Co travellers </br>
Today</br>
Dedicatedly, we all will do Milarepa's Meditation, as many times as we can</br>
Milarepa's Meditation</br>
Step by Step </br>
Sit.</br>
Relax.</br>
Close your eyes.</br>
Visualize Happy Faces entering your body from all sides. </br>
Feel, see each cell of your body as a happy face. </br>
See your face as a Happy Face. </br>
Smile. </br>
Fold hands and Thank The Divine, Thank The Universe.</br>
</br>
Dear Co travellers </br>
Dedicatedly, we all will do Brain and Heart Cleaning Meditation.</br>
</br>
Step by Step </br>
Brain and Heart Cleansing Meditation </br>
(Visualize your brain on a plate...see your own faults...visualize sprinkling </br>
cold water on your own pettiness...meanness...disloyalties.etc.</br>
Then visualize your Heart on a plate...same way look where you yourself are wrong...self audit...be conscious of your own </br>
drawbacks...wash away your</br>
own shortcomings with chilled water.</br>
Smile...feel cold...fold hands and Thank The Divine ).</br>
</br>
`,`</br>
Dimple Anil: </br>
Dear Co travellers </br>
Today dedicatedly we sit and simply say</br>
I am receiving the best. </br>
I am in Gratitude for all that I have Today. </br>
I am Blessed and Happy.</br>
</br>
`];




let day=$.urlParam('day');
let month = $.urlParam('month');
if(day && month && ["2","8","9","10","7","6"].indexOf(month)>-1){
if(month==2){$("#prayermain").html(febprayer[(day-1)%febprayer.length]);}
if(month==8){$("#prayermain").html(augprayer[(day-1)%augprayer.length]);}
if(month==9){$("#prayermain").html(sept[(day-1)%sept.length]);}
if(month==10){$("#prayermain").html(oct[(day-1)%oct.length]);}
if(month==7){$("#prayermain").html(july[(day-1)%july.length]);}
if(month==6){$("#prayermain").html(june[(day-1)%june.length]);}
}
else $("#prayermain").html(prayers[Math.floor(Math.random()*1000)%prayers.length]);
      });
</script>

  



<div id="snackbar"></div>
<style>
#snackbar {visibility: hidden;min-width: 250px; margin-left: -125px;
 background-color:#aaa;color:#000;
 text-align:center;border-radius:50px;
 padding:16px;position:fixed;
 z-index:1;left:50%;bottom: 30px;}
#snackbar.show {
 visibility: visible;
 -webkit-animation: fadein 0.5s, fadeout 0.5s 4.5s;
 animation: fadein 0.5s, fadeout 0.5s 4.5s;}
@-webkit-keyframes fadein {from {bottom: 0; opacity: 0;} to {bottom: 30px; opacity: 1;}}
@keyframes fadein {from {bottom: 0; opacity: 0;}to {bottom: 30px; opacity: 1;}}
@-webkit-keyframes fadeout {from {bottom: 30px; opacity: 1;}to {bottom: 0; opacity: 0;}}
@keyframes fadeout {from {bottom: 30px; opacity: 1;}to {bottom: 0; opacity: 0;}}
</style>
<script>
  function showtoast(message='Hy',time=2000) {
 var x = document.getElementById("snackbar");
 x.className = "show";
 x.innerHTML = message;
 setTimeout(function(){ x.className = x.className.replace("show", ""); }, time);
}
  </script>



  <script> 
$(function(){

$("#contactform").html(`
<form action="#" id="maincontactform" class="" style="margin-top: 10px;">
<div class="form-group">
<div class="col-md-12 mb-3 mb-md-0"><label class="font-weight-bold" for="fullname">Full Name</label> <input type="text" id="fullname" class="form-control" placeholder="Full Name" required></div>
</div>
<div class="form-group">
<div class="col-md-12"><label class="font-weight-bold" for="email">Email</label> <input type="email" id="email" class="form-control" placeholder="Email Address" required></div>
</div>
<div class="form-group">
<div class="col-md-12 mb-3 mb-md-0"><label class="font-weight-bold" for="phone">Phone</label> <input type="number" max="9999999999" min="1000000000" id="phone" class="form-control" placeholder="Phone #" required></div>
</div>
<div class="form-group">
<div class="col-md-12"><label class="font-weight-bold" for="message">Message</label> <textarea name="message" id="message" cols="30" rows="5" class="form-control" placeholder="Say hello to us"></textarea></div>
</div>
<div class="form-group">
<div class="col-md-12"><button id="sendmail" type="submit" class="btn btn-primary pill px-4 py-2 greybutton">Send Message</button></div>
</div>
</form>
  `);
  
  $('#fullname').on('change',function(){
      this.value=this.value.replace(/[^a-zA-Z]+/g, '');
  })

var sending=false;
  $("#maincontactform").on('submit',function(){ 
    if(sending)return false;
    if($('#fullname').val())
    
    sending=true;
   $("#sendmail").text('Sending ...');
   $("#sendmail").addClass('disabled');
         var htmlcode=encodeURIComponent('<center style="background:#ffc107;color:#fff;padding:30px;border-radius:5px;"><h2>God Consiousness Contact</h2><h3 style="padding:10px;background:#ffdf7f;border-radius:5px;">Name - '+$('#fullname').val()+'<br />Phone - '+$('#phone').val()+'<br />Email - '+$('#email').val()+'</h3><p class="regular">Message - '+$('#message').val()+'</p></center>');
$.get('http://divyavrat.com/mail/message.php?email=info@godsconsciousness.com&subject=God Consiousness Contact&htmlcode='+htmlcode,function(data,status){data=0;
   showtoast('Sent !');
  $("#fullname").val('');
$("#phone").val('');
$("#email").val('');
$("#message").val('');
  sending=false;
$("#sendmail").text('Send');
   $("#sendmail").removeClass('disabled');
}); 

        return false;
    });

});
  </script>

  <script>
      document.addEventListener('DOMContentLoaded', function() {
                var mediaElements = document.querySelectorAll('video, audio'), total = mediaElements.length;

                for (var i = 0; i < total; i++) {
                    new MediaElementPlayer(mediaElements[i], {
                        pluginPath: 'https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/',
                        shimScriptAccess: 'always',
                        success: function () {
                            var target = document.body.querySelectorAll('.player'), targetTotal = target.length;
                             for (var j = 0; j < targetTotal; j++) {
                                target[j].style.visibility = 'visible';
                            }
                  }
                });
                }
            });
    </script>

  </body>
</html>