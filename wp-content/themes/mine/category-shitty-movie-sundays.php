<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

	<?php if ( have_posts() ) : ?>

		<header class="page-header">
			<h1 class="page-title shitty-title">The Shitty Movie Sundays Watchability Index</h1>
		</header><!-- .page-header -->
			
	<?php
		else :
			get_template_part( 'template-parts/content', 'none' );

		endif;
	?>
		<div class="shitty-index">
			<ol class="shitty-list">
			 	<li class="has-image road-house" onclick="location.href='/2015/07/09/road-house/';"><a href="/2015/07/09/road-house/">Road House</a></li>
			 	<li class="has-image commando" onclick="location.href='/2014/05/07/commando/';"><a href="/2014/05/07/commando/">Commando</a></li>
			 	<li class="has-image anaconda" onclick="location.href='/2014/10/01/anaconda/';"><a href="/2014/10/01/anaconda/">Anaconda</a></li>
			 	<li class="has-image deep-blue-sea" onclick="location.href='/2013/10/12/deep-blue-sea/';"><a href="/2013/10/12/deep-blue-sea/">Deep Blue Sea</a></li>
			 	<li class="has-image spacehunter" onclick="location.href='/2009/09/08/spacehunter/';"><a href="/2009/09/08/spacehunter/">Spacehunter: Adventures in the Forbidden Zone</a></li>
			 	<li class="has-image reign-of-fire" onclick="location.href='/2011/08/05/reign-of-fire/';"><a href="/2011/08/05/reign-of-fire/">Reign of Fire</a></li>
			 	<li class="has-image cobra" onclick="location.href='/2017/08/10/cobra/';"><a href="/2017/08/10/cobra/">Cobra</a></li>
			 	<li class="has-image cyber-tracker-2" onclick="location.href='/2018/05/13/cyber-tracker-2/';"><a href="/2018/05/13/cyber-tracker-2/">Cyber Tracker 2</a></li>
			 	<li class="has-image maximum-overdrive" onclick="location.href='/2009/10/24/maximum-overdrive/';"><a href="/2009/10/24/maximum-overdrive/">Maximum Overdrive</a></li>
			 	<li class="has-image rambo-2" onclick="location.href='/2017/08/08/rambo-2/';"><a href="/2017/08/08/rambo-2/">Rambo: First Blood Part II</a></li>
			 	<li class="has-image kingdom-spiders" onclick="location.href='/2012/10/03/kingdom-of-spiders/';"><a href="/2012/10/03/kingdom-of-spiders/">Kingdom of the Spiders</a></li>
			 	<li class="has-image event-horizon" onclick="location.href='/2009/10/19/event-horizon/';"><a href="/2009/10/19/event-horizon/">Event Horizon</a></li>
			 	<li class="has-image class-1999" onclick="location.href='/2016/10/27/class-of-1999/';"><a href="/2016/10/27/class-of-1999/">Class of 1999</a></li>
			 	<li class="has-image king-kong-lives" onclick="location.href='/2018/10/29/king-kong-lives/';"><a href="/2018/10/29/king-kong-lives/">King Kong Lives</a></li>
			 	<li class="has-image death-wish-4" onclick="location.href='/2017/07/23/death-wish-4/';"><a href="/2017/07/23/death-wish-4/">Death Wish 4: The Crackdown</a></li>
			 	<li class="has-image they-live" onclick="location.href='/2008/09/23/they-live/';"><a href="/2008/09/23/they-live/">They Live</a></li>
			 	<li class="has-image battle-stars" onclick="location.href='/2017/07/16/battle-beyond-the-stars/';"><a href="/2017/07/16/battle-beyond-the-stars/">Battle Beyond the Stars</a></li>
			 	<li class="has-image trancers" onclick="location.href='/2011/03/07/trancers/';"><a href="/2011/03/07/trancers/">Trancers</a></li>
			 	<li class="has-image critters" onclick="location.href='/2013/10/23/critters/';"><a href="/2013/10/23/critters/">Critters</a></li>
			 	<li class="has-image keep" onclick="location.href='/2014/10/04/keep/';"><a href="/2014/10/04/keep/">The Keep</a></li>
			 	<li class="has-image beyond-poseidon" onclick="location.href='/2017/07/02/beyond-the-poseidon-adventure/';"><a href="/2017/07/02/beyond-the-poseidon-adventure/">Beyond the Poseidon Adventure</a></li>
			 	<li class="has-image strike-commando" onclick="location.href='/2018/01/21/strike-commando/';"><a href="/2018/01/21/strike-commando/">Strike Commando</a></li>
			 	<li class="has-image backdraft" onclick="location.href='/2012/09/10/backdraft/';"><a href="/2012/09/10/backdraft/">Backdraft</a></li>
			 	<li class="has-image white-house-down" onclick="location.href='/2014/01/15/white-house-down/';"><a href="/2014/01/15/white-house-down/">White House Down</a></li>
			 	<li class="has-image friday-13th-4" onclick="location.href='/2009/10/15/friday-13th-4/';"><a href="/2009/10/15/friday-13th-4/">Friday the 13th: The Final Chapter</a></li>
			 	<li class="has-image substitute" onclick="location.href='/2015/08/26/substitute/';"><a href="/2015/08/26/substitute/">The Substitute</a></li>
			 	<li class="has-image graveyard-shift" onclick="location.href='/2013/10/06/graveyard-shift/';"><a href="/2013/10/06/graveyard-shift/">Graveyard Shift</a></li>
			 	<li><a href="/2016/09/15/bronx-warriors/">1990: The Bronx Warriors</a></li>
			 	<li><a href="/2014/05/20/batman-robin/">Batman and Robin</a></li>
			 	<li><a href="/2009/10/07/friday-13th-2/">Friday the 13th Part 2</a></li>
			 	<li><a href="/2018/10/28/q-the-winged-serpent/">Q — The Winged Serpent</a></li>
			 	<li><a href="/2017/04/09/steel-dawn/">Steel Dawn</a></li>
			 	<li><a href="/2011/10/18/basket-case/">Basket Case</a></li>
			 	<li><a href="/2017/10/09/contamination/">Contamination</a></li>
			 	<li><a href="/2011/10/07/zombi-2/">Zombi 2</a></li>
			 	<li><a href="/2013/07/31/orca/">Orca</a></li>
			 	<li><a href="/2012/10/17/leviathan/">Leviathan</a></li>
			 	<li><a href="/2012/10/02/dead-heat-1988/">Dead Heat (1988)</a></li>
			 	<li><a href="/2017/10/03/ghosts-of-mars/">Ghosts of Mars</a></li>
			 	<li><a href="/2018/11/04/perfect-weapon/">The Perfect Weapon</a></li>
			 	<li><a href="/2017/10/13/jason-x/">Jason X</a></li>
			 	<li><a href="/2018/12/02/caged-heat/">Caged Heat</a></li>
			 	<li><a href="/2017/10/21/maniac-cop/">Maniac Cop</a></li>
			 	<li><a href="/2017/09/03/timecop/">Timecop</a></li>
			 	<li><a href="/2016/10/24/jaws-3-d/">Jaws 3-D</a></li>
			 	<li><a href="/2017/08/14/tango-cash/">Tango &amp; Cash</a></li>
			 	<li><a href="/2009/10/25/vampires/">John Carpenter’s Vampires</a></li>
			 	<li><a href="/2010/10/31/halloween-2/">Halloween II (1981)</a></li>
			 	<li><a href="/2017/12/10/beastmaster/">The Beastmaster</a></li>
			 	<li><a href="/2018/03/18/the-killers-edge-aka-blood-money/">The Killers Edge</a></li>
			 	<li><a href="/2018/10/10/beginning-of-the-end/">Beginning of the End</a></li>
			 	<li><a href="/2017/05/21/psychomania/">Psychomania</a></li>
			 	<li><a href="/2017/10/31/satanic-rites-of-dracula/">The Satanic Rites of Dracula</a></li>
			 	<li><a href="/2018/10/19/humanoids-from-the-deep/">Humanoids from the Deep</a></li>
			 	<li><a href="/2009/10/12/friday-13th-3/">Friday the 13th Part 3</a></li>
			 	<li><a href="/2018/04/24/cyber-tracker/">Cyber Tracker</a></li>
			 	<li><a href="/2013/10/22/my-bloody-valentine/">My Bloody Valentine</a></li>
			 	<li><a href="/2017/10/05/chopping-mall/">Chopping Mall</a></li>
			 	<li><a href="/2016/11/20/escape-from-the-bronx/">Escape from the Bronx</a></li>
			 	<li><a href="/2018/05/06/silent-rage/">Silent Rage</a></li>
			 	<li><a href="/2014/05/08/raw-deal/">Raw Deal</a></li>
			 	<li><a href="/2013/03/24/olympus-has-fallen/">Olympus Has Fallen</a></li>
			 	<li><a href="/2013/10/21/deepstar-six/">DeepStar Six</a></li>
			 	<li><a href="/2018/07/29/shape-of-things-to-come/">The Shape of Things to Come</a></li>
			 	<li><a href="/2018/08/05/city-on-fire/">City on Fire</a></li>
			 	<li><a href="/2009/10/29/freddy-vs-jason/">Freddy vs. Jason</a></li>
			 	<li><a href="/2010/05/17/nuke-em-high/">Class of Nuke ’Em High</a></li>
			 	<li><a href="/2016/10/31/halloween-resurrection/">Halloween: Resurrection</a></li>
			 	<li><a href="/2018/10/15/earth-vs-the-spider/">Earth vs. The Spider</a></li>
			 	<li><a href="/2009/10/01/friday-13th/">Friday the 13th</a></li>
			 	<li><a href="/2017/11/05/freejack/">Freejack</a></li>
			 	<li><a href="/2009/01/09/i-am-legend/">I Am Legend</a></li>
			 	<li><a href="/2013/06/23/last-stand/">The Last Stand</a></li>
			 	<li><a href="/2013/10/16/colony/">The Colony</a></li>
			 	<li><a href="/2009/08/11/deep-rising/">Deep Rising</a></li>
			 	<li><a href="/2011/11/06/escape-from-la/">Escape from L.A.</a></li>
			 	<li><a href="/2011/01/24/raise-the-titanic/">Raise the Titanic</a></li>
			 	<li><a href="/2015/10/15/san-andreas/">San Andreas</a></li>
			 	<li><a href="/2010/10/04/dance-dead/">Dance of the Dead</a></li>
			 	<li><a href="/2014/10/21/incredible-melting-man/">The Incredible Melting Man</a></li>
			 	<li><a href="/2010/10/12/maniac-cop-2/">Maniac Cop 2</a></li>
			 	<li><a href="/2018/10/20/attack-of-the-giant-leeches/">Attack of the Giant Leeches</a></li>
			 	<li><a href="/2018/04/01/death-machines/">Death Machines</a></li>
			 	<li><a href="/2018/10/18/giant-gila-monster/">The Giant Gila Monster</a></li>
			 	<li><a href="/2009/08/30/soldier/">Soldier</a></li>
			 	<li><a href="/2009/01/19/horror-express/">Horror Express</a></li>
			 	<li><a href="/2014/05/06/red-sonja/">Red Sonja</a></li>
			 	<li><a href="/2016/11/06/id4-resurgence/">Independence Day: Resurgence</a></li>
			 	<li><a href="/2018/10/25/food-of-the-gods/">The Food of the Gods</a></li>
			 	<li><a href="/2017/10/06/burial-ground/">Burial Ground</a></li>
			 	<li><a href="/2018/08/13/humanity-bureau/">The Humanity Bureau</a></li>
			 	<li><a href="/2017/01/15/the-chilling/">The Chilling</a></li>
			 	<li><a href="/2014/10/03/dracula-3000/">Dracula 3000</a></li>
			 	<li><a href="/2018/10/27/empire-of-the-ants/">Empire of the Ants</a></li>
			 	<li><a href="/2018/10/13/god-told-me-to/">God Told Me To</a></li>
			 	<li><a href="/2014/05/21/end-of-days/">End of Days</a></li>
			 	<li><a href="/2014/12/22/disaster-on-the-coastliner/">Disaster on the Coastliner</a></li>
			 	<li><a href="/2018/10/14/matango/">Matango</a></li>
			 	<li><a href="/2014/10/25/prom-night-ii/">Hello Mary Lou: Prom Night II</a></li>
			 	<li><a href="/2018/10/28/the-prowler/">The Prowler</a></li>
			 	<li><a href="/2017/09/17/womens-prison-massacre/">Women’s Prison Massacre</a></li>
			 	<li><a href="/2018/04/29/meteor/">Meteor</a></li>
			 	<li><a href="/2018/10/07/beast-of-hollow-mountain/">The Beast of Hollow Mountain</a></li>
			 	<li><a href="/2016/10/12/alien-vs-predator/">Alien vs. Predator</a></li>
			 	<li><a href="/2018/10/09/giant-claw/">The Giant Claw</a></li>
			 	<li><a href="/2013/10/16/skeptic/">The Skeptic</a></li>
			 	<li><a href="/2018/10/08/deadly-mantis/">The Deadly Mantis</a></li>
			 	<li><a href="/2018/10/02/city-of-the-living-dead/">City of the Living Dead</a></li>
			 	<li><a href="/2016/10/17/bug-1975/">Bug (1975)</a></li>
			 	<li><a href="/2012/10/08/resident-evil/">Resident Evil</a></li>
			 	<li><a href="/2017/05/07/when-time-ran-out/">When Time Ran Out</a></li>
			 	<li><a href="/2014/10/17/galaxy-of-terror/">Galaxy of Terror</a></li>
			 	<li><a href="/2014/10/06/apocalypse/">Resident Evil: Apocalypse</a></li>
			 	<li><a href="/2016/10/08/return-dead-ii/">Return of the Living Dead Part II</a></li>
			 	<li><a href="/2018/02/18/cosmos/">Cosmos: War of the Planets</a></li>
			 	<li><a href="/2018/10/21/the-being/">The Being</a></li>
			 	<li><a href="/2017/02/19/last-shark/">The Last Shark</a></li>
			 	<li><a href="/2018/10/14/war-of-the-colossal-beast/">War of the Colossal Beast</a></li>
			 	<li><a href="/2008/06/09/resident-evil-extinction/">Resident Evil: Extinction</a></li>
			 	<li><a href="/2018/11/18/detour/">Detour</a></li>
			 	<li><a href="/2010/10/03/growth/">Growth</a></li>
			 	<li><a href="/2013/10/01/resident-evil-retribution/">Resident Evil: Retribution</a></li>
			 	<li><a href="/2010/10/15/elm-street-2010/">A Nightmare on Elm Street (2010)</a></li>
			 	<li><a href="/2011/10/05/piranha-3d/">Piranha 3D</a></li>
			 	<li><a href="/2016/12/11/the-new-barbarians/">The New Barbarians</a></li>
			 	<li><a href="/2008/06/06/doom/">Doom</a></li>
			 	<li><a href="/2018/10/13/amazing-colossal-man/">The Amazing Colossal Man</a></li>
			 	<li><a href="/2013/10/10/ghosts-of-georgia/">The Haunting in Connecticut 2: Ghosts of Georgia</a></li>
			 	<li><a href="/2014/10/15/crab-monsters/">Attack of the Crab Monsters</a></li>
			 	<li><a href="/2017/07/09/raiders-of-atlantis/">The Raiders of Atlantis</a></li>
			 	<li><a href="/2008/12/29/prince-of-darkness/">Prince of Darkness</a></li>
			 	<li><a href="/2012/10/30/chernobyl-diaries/">Chernobyl Diaries</a></li>
			 	<li><a href="/2014/10/14/fog-2005/">The Fog (2005)</a></li>
			 	<li><a href="/2016/11/27/no-escape/">No Escape</a></li>
			 	<li><a href="/2015/10/21/creature/">Creature</a></li>
			 	<li><a href="/2009/04/17/transporter/">The Transporter</a></li>
			 	<li><a href="/2008/12/16/starship-troopers-3/">Starship Troopers 3: Marauder</a></li>
			 	<li><a href="/2018/02/04/geostorm/">Geostorm</a></li>
			 	<li><a href="/2013/10/24/stuff/">The Stuff</a></li>
			 	<li><a href="/2011/03/26/trancers-ii/">Trancers II</a></li>
			 	<li><a href="/2017/05/28/bad-ass/">Bad Ass</a></li>
			 	<li><a href="/2015/10/10/zombeavers/">Zombeavers</a></li>
			 	<li><a href="/2013/11/04/riddick/">Riddick</a></li>
			 	<li><a href="/2015/10/19/toolbox-murders/">The Toolbox Murders</a></li>
			 	<li><a href="/2014/02/10/escape-plan/">Escape Plan</a></li>
			 	<li><a href="/2017/06/18/new-gladiators/">The New Gladiators</a></li>
			 	<li><a href="/2018/10/17/steel-and-lace/">Steel and Lace</a></li>
			 	<li><a href="/2018/10/26/blood-feast/">Blood Feast</a></li>
			 	<li><a href="/2010/06/29/halloween-2007/">Halloween (2007)</a></li>
			 	<li><a href="/2014/10/04/friday-13th-7/">Friday the 13th Part VII: The New Blood</a></li>
			 	<li><a href="/2014/10/29/sleepaway-camp/">Sleepaway Camp</a></li>
			 	<li><a href="/2017/08/24/eye-see-you/">Eye See You</a></li>
			 	<li><a href="/2018/07/22/best-friends/">Best Friends</a></li>
			 	<li><a href="/2012/10/31/halloween-4/">Halloween 4: The Return of Michael Myers</a></li>
			 	<li><a href="/2017/08/11/over-the-top/">Over the Top</a></li>
			 	<li><a href="/2010/10/27/village-damned-1995/">Village of the Damned (1995)</a></li>
			 	<li><a href="/2018/06/25/la-crackdown/">LA Crackdown</a></li>
			 	<li><a href="/2017/08/30/the-expendables-3/">The Expendables 3</a></li>
			 	<li><a href="/2011/07/11/gojira/">Godzilla, King of the Monsters!</a></li>
			 	<li><a href="/2013/10/18/navy-night-monsters/">The Navy vs. the Night Monsters</a></li>
			 	<li><a href="/2017/08/20/daylight/">Daylight</a></li>
			 	<li><a href="/2018/10/11/cyclops/">The Cyclops</a></li>
			 	<li><a href="/2017/10/20/bad-ben/">Bad Ben</a></li>
			 	<li><a href="/2014/01/08/act-of-valor/">Act of Valor</a></li>
			 	<li><a href="/2018/10/19/killer-shrews/">The Killer Shrews</a></li>
			 	<li><a href="/2012/10/13/spit-grave/">I Spit on Your Grave</a></li>
			 	<li><a href="/2014/01/06/killing-season/">Killing Season</a></li>
			 	<li><a href="/2013/03/06/red-dawn-2012/">Red Dawn (2012)</a></li>
			 	<li><a href="/2017/08/02/paradise-alley/">Paradise Alley</a></li>
			 	<li><a href="/2011/10/04/dusk-till-dawn-2/">From Dusk Till Dawn 2: Texas Blood Money</a></li>
			 	<li><a href="/2018/10/21/reptilicus/">Reptilicus</a></li>
			 	<li><a href="/2012/10/16/alone-dark/">Alone in the Dark (1982)</a></li>
			 	<li><a href="/2012/09/02/battleship/">Battleship</a></li>
			 	<li><a href="/2018/01/07/summer-city/">Summer City</a></li>
			 	<li><a href="/2013/10/31/halloween-5/">Halloween 5</a></li>
			 	<li><a href="/2016/10/09/children-dead-things/">Children Shouldn’t Play with Dead Things</a></li>
			 	<li><a href="/2008/10/27/theodore-rex/">Theodore Rex</a></li>
			 	<li><a href="/2014/06/10/pompeii/">Pompeii</a></li>
			 	<li><a href="/2018/10/06/king-dinosaur/">King Dinosaur</a></li>
			 	<li><a href="/2016/11/13/rollerball/">Rollerball (2002)</a></li>
			 	<li><a href="/2014/10/31/halloween-6/">Halloween: The Curse of Michael Myers</a></li>
			 	<li><a href="/2015/10/22/exeter/">Exeter</a></li>
			 	<li><a href="/2013/10/07/rig/">The Rig</a></li>
			 	<li><a href="/2010/06/29/halloween-2007/">Halloween II (2009)</a></li>
			 	<li><a href="/2018/10/30/suckling/">The Suckling</a></li>
			 	<li><a href="/2014/05/01/hercules-in-new-york/">Hercules in New York</a></li>
			 	<li><a href="/2011/10/07/asylum-1972/">Asylum (1972)</a></li>
			 	<li><a href="/2018/04/15/hot-rod-girl/">Hot Rod Girl</a></li>
			 	<li><a href="/2018/10/24/the-giant-spider-invasion/">The Giant Spider Invasion</a></li>
			 	<li><a href="/2013/10/08/last-exorcism-ii/">The Last Exorcism part II</a></li>
			 	<li><a href="/2017/04/16/xxx/">xXx</a></li>
			 	<li><a href="/2017/08/16/stop-or-my-mom-will-shoot/">Stop! Or My Mom Will Shoot</a></li>
			 	<li><a href="/2017/08/23/driven/">Driven</a></li>
			 	<li><a href="/2011/10/01/human-centipede/">The Human Centipede</a></li>
			 	<li><a href="/2017/03/26/mazes-and-monsters/">Mazes and Monsters</a></li>
			 	<li><a href="/2017/01/29/the-bronx-executioner-or-frankensteins-movie/">The Bronx Executioner</a></li>
			 	<li><a href="/2011/03/26/trancers-ii/">Spice World</a></li>
			 	<li><a href="/2010/10/02/house-dead/">House of the Dead</a></li>
			 	<li><a href="/2013/10/14/rave-grave/">Return of the Living Dead: Rave to the Grave</a></li>
			 	<li><a href="/2014/03/16/doggie-b/">Doggie B</a></li>
			 	<li><a href="/2017/10/23/birdemic/">Birdemic: Shock and Terror</a></li>
			</ol>
		</div>

	</main><!-- .site-main -->
</div><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>