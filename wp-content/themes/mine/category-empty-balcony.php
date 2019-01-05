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
			<?php
				add_filter( 'get_the_archive_title', function ( $title ) {
					if( is_category() ) {
						$title = single_cat_title( '', false );
					}
					return $title;
				});
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="taxonomy-description">', '</div>' );
			?>
		</header><!-- .page-header -->
			
	<?php
		else :
			get_template_part( 'template-parts/content', 'none' );

		endif;
	?>
		<div class="empty-balcony-index">
			<ul class="empty-balcony-jumps" id="index-top">
				<li><a href="#123">0</a></li>
				<li><a href="#aa">A</a></li>
				<li><a href="#bb">B</a></li>
				<li><a href="#cc">C</a></li>
				<li><a href="#dd">D</a></li>
				<li><a href="#ee">E</a></li>
				<li><a href="#ff">F</a></li>
				<li><a href="#gg">G</a></li>
				<li><a href="#hh">H</a></li>
				<li><a href="#ii">I</a></li>
				<li><a href="#jj">J</a></li>
				<li><a href="#kk">K</a></li>
				<li><a href="#ll">L</a></li>
				<li><a href="#mm">M</a></li>
				<li><a href="#nn">N</a></li>
				<li><a href="#oo">O</a></li>
				<li><a href="#pp">P</a></li>
				<li><a href="#qq">Q</a></li>
				<li><a href="#rr">R</a></li>
				<li><a href="#ss">S</a></li>
				<li><a href="#tt">T</a></li>
				<li><a href="#uu">U</a></li>
				<li><a href="#vv">V</a></li>
				<li><a href="#ww">W</a></li>
				<li><a href="#xx">X</a></li>
				<li><a href="#yy">Y</a></li>
				<li><a href="#zz">Z</a></li>
			</ul>
			<p>(a bullet is a fave, a biohazard symbol is a <em>Shitty Movie Sundays</em> review)</p>
			<h5 style="margin-top: 1em;" id="123">123</h5>
			<ul>
				<li><a href="/2016/06/15/10-cloverfield-lane/">10 Cloverfield Lane</a></li>
				<li><a href="/2018/02/25/10th-victim/">10th Victim, The</a></li>
				<li><a href="/2011/04/03/13-assassins/">13 Assassins</a></li>
				<li><a href="/2009/10/09/1408/">1408</a></li>
				<li class="shitty"><a href="/2016/09/15/bronx-warriors/">1990: The Bronx Warriors</a></li>
				<li><a href="/2011/01/18/2010/">2010</a></li>
				<li class="shitty"><a href="/2015/03/22/2015-shitty-movie-sunday-awards/">2015 Shitty Movie Sunday Awards, The</a></li>
				<li class="shitty"><a href="/2017/03/12/2017-shitty-awards/">2017 Shitty Movie Sunday Awards, The</a></li>
				<li class="shitty"><a href="/2018/03/11/2018-shitty-awards/">2018 Shitty Movie Sunday Awards, The</a></li>
				<li class="reco"><a href="/2009/10/18/28-days-later/">28 Days Later</a></li>
				<li><a href="/2009/10/18/28-days-later/">28 Weeks Later</a></li>
				<li><a href="/2008/06/17/30-days/">30 Days of Night</a></li>
				<li><a href="/2014/05/22/6th-day/">6th Day, The</a></li>
				<li class="topper"><a href="#index-top">top</a></li>
			</ul>
			<h5 id="aa">A</h5>
			<ul>
				<li class="reco"><a href="/2015/10/17/abominable-dr-phibes/">Abominable Dr. Phibes, The</a></li>
				<li><a href="/2017/10/15/abominable-snowman/">Abominable Snowman, The</a></li>
				<li class="shitty"><a href="/2014/01/08/act-of-valor/">Act of Valor</a></li>
				<li><a href="/2011/07/08/adjustment-bureau/">Adjustment Bureau, The</a></li>
				<li class="reco"><a href="/2008/04/23/alien/">Alien</a></li>
				<li><a href="/2016/10/11/alien-3/">Alien 3</a></li>
				<li><a href="/2017/10/17/alien-covenant/">Alien: Covenant</a></li>
				<li><a href="/2016/12/04/alien-nation/">Alien Nation</a></li>
				<li><a href="/2018/12/16/alien-uprising/">Alien Uprising</a></li>
				<li class="shitty"><a href="/2016/10/12/alien-vs-predator/">Alien vs. Predator</a></li>
				<li><a href="/2016/10/15/alien-vs-predator-requiem/">Alien vs. Predator: Requiem</a></li>
				<li class="reco"><a href="/2008/05/21/aliens/">Aliens</a></li>
				<li class="shitty"><a href="/2012/10/16/alone-dark/">Alone in the Dark</a> <span>(1982)</span></li>
				<li class="shitty"><a href="/2018/10/13/amazing-colossal-man/">Amazing Colossal Man, The</a></li>
				<li><a href="/2014/03/24/american-hustle/">American Hustle</a></li>
				<li><a href="/2016/10/10/amityville-horror-2005/">Amityville Horror, The</a> <span>(2005)</span></li>
				<li class="shitty"><a href="/2014/10/01/anaconda/">Anaconda</a></li>
				<li><a href="/2015/10/03/annabelle/">Annabelle</a></li>
				<li><a href="/2013/10/28/apartment-143/">Apartment 143</a></li>
				<li class="reco"><a href="/2009/04/22/apocalypse-now/">Apocalypse Now</a></li>
				<li><a href="/2012/08/20/arrival/">Arrival, The</a></li>
				<li><a href="/2015/10/01/as-above-so-below/">As Above, So Below</a></li>
				<li class="shitty"><a href="/2011/10/07/asylum-1972/">Asylum</a> <span>(1972)</span></li>
				<li class="shitty"><a href="/2017/07/09/raiders-of-atlantis/">Atlantis Interceptors, The, aka The Raiders of Atlantis</a></li>
				<li><a href="/2018/01/14/atomic-blonde/">Atomic Blonde</a></li>
				<li class="shitty"><a href="/2014/10/15/crab-monsters/">Attack of the Crab Monsters</a></li>
				<li class="shitty"><a href="/2018/10/20/attack-of-the-giant-leeches/">Attack of the Giant Leeches</a></li>
				<li class="shitty"><a href="/2018/10/14/matango/">Attack of the Mushroom People, aka Matango</a></li>
				<li><a href="/2018/10/12/attack-the-block/">Attack the Block</a></li>
				<li><a href="/2012/06/11/avengers/">Avengers, The</a></li>
				<li><a href="/2013/10/09/awakening/">Awakening, The</a></li>
				<li class="topper"><a href="#index-top">top</a></li>
			</ul>
			<h5 id="bb">B</h5>
			<ul>
				<li class="reco"><a href="/2015/10/02/babadook/">Babadook, The</a></li>
				<li class="shitty"><a href="/2012/09/10/backdraft/">Backdraft</a></li>				
				<li class="shitty"><a href="/2017/05/28/bad-ass/">Bad Ass</a></li>
				<li class="shitty"><a href="/2017/10/20/bad-ben/">Bad Ben</a></li>
				<li><a href="/2014/10/19/barricade/">Barricade</a></li>	
				<li class="shitty"><a href="/2011/10/18/basket-case/">Basket Case</a></li>	
				<li><a href="/2012/08/09/foam-rubber-wholesalers/">Batman</a> <span>(1966)</span></li>
				<li class="shitty"><a href="/2014/05/20/batman-robin/">Batman & Robin</a></li>
				<li class="shitty"><a href="/2017/07/16/battle-beyond-the-stars/">Battle Beyond the Stars</a></li>
				<li><a href="/2017/09/24/battle-royale/">Battle Royale</a></li>
				<li class="shitty"><a href="/2012/09/02/battleship/">Battleship</a></li>
				<li><a href="/2018/10/02/20000-fathoms/">Beast from 20,000 Fathoms, The</a></li>
				<li class="shitty"><a href="/2018/10/07/beast-of-hollow-mountain/">Beast of Hollow Mountain, The</a></li>
				<li class="shitty"><a href="/2017/12/10/beastmaster/">Beastmaster, The</a></li>					
				<li><a href="/2013/02/28/becket/">Becket</a></li>
				<li class="shitty"><a href="/2018/10/10/beginning-of-the-end/">Beginning of the End</a></li>
				<li class="shitty"><a href="/2018/10/21/the-being/">Being, The</a></li>
				<li><a href="/2014/10/12/below/">Below</a></li>
				<li class="shitty"><a href="/2018/07/22/best-friends/">Best Friends</a></li>
				<li><a href="/2018/10/22/shock/">Beyond the Door II, aka Shock</a></li>
				<li class="shitty"><a href="/2017/07/02/beyond-the-poseidon-adventure/">Beyond the Poseidon Adventure</a></li>
				<li class="reco"><a href="/2008/09/21/big-trouble/">Big Trouble in Little China</a></li>
				<li class="shitty"><a href="/2017/10/23/birdemic/">Birdemic: Shock and Terror</a></li>
				<li><a href="/2018/10/08/black-christmas/">Black Christmas</a></li>
				<li><a href="/2011/02/22/black-hawk-down/">Black Hawk Down</a></li>
				<li><a href="/2018/10/12/black-scorpion/">Black Scorpion, The</a></li>
				<li><a href="/2014/10/11/blair-witch/">Blair Witch Project, The</a></li>	
				<li><a href="/2018/10/16/the-blob/">Blob, The</a> <span>(1958)</span></li>
				<li class="reco"><a href="/2010/10/16/blob-1988/">Blob, The</a> <span>(1988)</span></li>
				<li class="shitty"><a href="/2018/10/26/blood-feast/">Blood Feast</a></li>
				<li><a href="/2017/10/18/blood-from-the-mummys-tomb/">Blood from the Mummy’s Tomb</a></li>
				<li><a href="/2014/10/30/blood-glacier/">Blood Glacier</a></li>
				<li class="shitty"><a href="/2018/03/18/the-killers-edge-aka-blood-money/">Blood Money, aka The Killers Edge</a></li>
				<li class="shitty"><a href="/2018/12/23/bone-dry/">Bone Dry</a></li>
				<li><a href="/2013/11/26/boondock-saints/">Boondock Saints, The</a></li>
				<li><a href="/2014/10/16/dracula/">Bram Stoker’s Dracula</a></li>
				<li><a href="/2017/10/06/the-brides-of-dracula/">Brides of Dracula, The</a></li>
				<li class="shitty"><a href="/2017/01/29/the-bronx-executioner-or-frankensteins-movie/">Bronx Executioner, The</a></li>
				<li class="shitty"><a href="/2016/10/17/bug-1975/">Bug</a> <span>(1975)</span></li>
				<li><a href="/2017/08/29/bullet-to-the-head/">Bullet to the Head</a></li>
				<li class="shitty"><a href="/2017/10/06/burial-ground/">Burial Ground</a></li>
				<li><a href="/2009/03/23/burn-after-reading/">Burn After Reading</a></li>
				<li class="topper"><a href="#index-top">top</a></li>
			</ul>
			<h5 id="cc">C</h5>
			<ul>
				<li class="shitty"><a href="/2018/12/02/caged-heat/">Caged Heat</a></li>
				<li><a href="/2015/10/15/canal/">Canal, The</a></li>
				<li><a href="/2017/10/28/night-creatures/">Captain Clegg, aka Night Creatures</a></li>
				<li class="reco"><a href="/2016/10/06/carnival-of-souls/">Carnival of Souls</a></li>
				<li><a href="/2013/10/03/carrie/">Carrie</a></li>
				<li class="reco"><a href="/2018/10/04/castle-freak/">Castle Freak</a></li>
				<li><a href="/2013/10/30/changeling/">Changeling, The</a></li>
				<li class="shitty"><a href="/2012/10/30/chernobyl-diaries/">Chernobyl Diaries</a></li>
				<li class="shitty"><a href="/2016/10/09/children-dead-things/">Children Shouldn’t Play with Dead Things</a></li>
				<li class="shitty"><a href="/2017/01/15/the-chilling/">Chilling, The</a></li>
				<li class="shitty"><a href="/2017/10/05/chopping-mall/">Chopping Mall</a></li>
				<li><a href="/2013/10/04/christine/">Christine</a></li>
				<li><a href="/2013/10/05/citadel/">Citadel</a></li>
				<li class="shitty"><a href="/2018/10/02/city-of-the-living-dead/">City of the Living Dead</a></li>
				<li class="shitty"><a href="/2018/08/05/city-on-fire/">City on Fire</a></li>
				<li class="shitty"><a href="/2016/10/27/class-of-1999/">Class of 1999</a></li>
				<li class="shitty"><a href="/2010/05/17/nuke-em-high/">Class of Nuke ‘Em High</a></li>
				<li class="shitty"><a href="/2017/08/10/cobra/">Cobra</a></li>
				<li><a href="/2013/10/16/cockneys/">Cockneys vs Zombies</a></li>
				<li><a href="/2017/10/16/cold-prey/">Cold Prey</a></li>
				<li><a href="/2014/05/23/collateral-damage/">Collateral Damage</a></li>
				<li class="shitty"><a href="/2013/10/16/colony/">Colony, The</a></li>
				<li class="shitty"><a href="/2014/05/07/commando/">Commando</a></li>
				<li class="reco"><a href="/2014/05/03/conan-the-barbarian/">Conan the Barbarian</a></li>
				<li><a href="/2014/05/04/conan-the-destroyer/">Conan the Destroyer</a></li>
				<li class="reco"><a href="/2013/10/22/conjuring/">Conjuring, The</a></li>
				<li><a href="/2016/10/26/the-conjuring-2/">Conjuring 2, The</a></li>
				<li><a href="/2016/10/14/constantine/">Constantine</a></li>
				<li class="shitty"><a href="/2017/10/09/contamination/">Contamination</a></li>
				<li><a href="/2017/08/21/cop-land/">Cop Land</a></li>
				<li class="shitty"><a href="/2018/02/18/cosmos/">Cosmos: War of the Planets</a></li>
				<li><a href="/2012/10/01/crazies-1973/">Crazies, The</a> <span>(1973)</span></li>
				<li class="shitty"><a href="/2015/10/21/creature/">Creature</a></li>
				<li><a href="/2017/08/31/creed/">Creed</a></li>
				<li><a href="/2017/10/02/quatermass-xperiment/">Creeping Unknown, The, aka The Quatermass Xperiment</a></li>
				<li class="reco"><a href="/2016/10/22/creepshow/">Creepshow</a></li>
				<li class="shitty"><a href="/2013/10/23/critters/">Critters</a></li>
				<li><a href="/2010/09/16/cross-of-iron/">Cross of Iron</a></li>
				<li><a href="/2018/10/27/the-cured/">Cured, The</a></li>
				<li><a href="/2017/10/04/curse-of-frankenstein/">Curse of Frankenstein, The</a></li>
				<li><a href="/2017/10/08/curse-of-the-mummys-tomb/">Curse of the Mummy’s Tomb, The</a></li>
				<li><a href="/2017/10/24/curse-of-the-werewolf/">Curse of the Werewolf, The</a></li>
				<li class="shitty"><a href="/2018/04/24/cyber-tracker/">Cyber Tracker</a></li>
				<li class="shitty"><a href="/2018/05/13/cyber-tracker-2/">Cyber Tracker 2</a></li>
				<li class="shitty"><a href="/2018/10/11/cyclops/">Cyclops, The</a></li>
				<li class="topper"><a href="#index-top">top</a></li>
			</ul>
			<h5 id="dd">D</h5>
			<ul>
				<li class="shitty"><a href="/2017/08/24/eye-see-you/">D-Tox, aka Eye See You</a></li>
				<li class="shitty"><a href="/2010/10/04/dance-dead/">Dance of the Dead</a></li>
				<li><a href="/2012/08/09/foam-rubber-wholesalers/">Dark Knight Rises, The</a></li>
				<li><a href="/2013/10/18/dark-skies/">Dark Skies</a></li>
				<li><a href="/2018/10/25/a-dark-song/">Dark Song, A</a></li>
				<li class="reco"><a href="/2010/10/07/dawn-dead/">Dawn of the Dead</a> <span>(1978)</span></li>
				<li><a href="/2009/10/21/dawn-dead-2004/">Dawn of the Dead</a> <span>(2004)</span></li>
				<li><a href="/2010/10/28/day-of-the-dead/">Day of the Dead</a></li>
				<li class="shitty"><a href="/2017/08/20/daylight/">Daylight</a></li>
				<li class="reco"><a href="/2010/10/14/dead-alive/">Dead Alive</a></li>
				<li class="shitty"><a href="/2012/10/02/dead-heat-1988/">Dead Heat</a> <span>(1988)</span></li>
				<li><a href="/2018/10/11/dead-pit/">Dead Pit, The</a></li>
				<li><a href="/2016/10/03/dead-silence/">Dead Silence</a></li>
				<li class="shitty"><a href="/2018/10/08/deadly-mantis/">Deadly Mantis, The</a></li>
				<li class="shitty"><a href="/2018/04/01/death-machines/">Death Machines</a></li>
				<li class="shitty"><a href="/2017/05/21/psychomania/">Death Wheelers, The, aka Psychomania</a></li>
				<li class="shitty"><a href="/2017/07/23/death-wish-4/">Death Wish 4: The Crackdown</a></li>
				<li class="shitty"><a href="/2013/10/12/deep-blue-sea/">Deep Blue Sea</a></li>
				<li class="shitty"><a href="/2009/08/11/deep-rising/">Deep Rising</a></li>
				<li class="shitty"><a href="/2013/10/21/deepstar-six/">DeepStar Six</a></li>
				<li><a href="/2017/08/17/demolition-man/">Demolition Man</a></li>
				<li class="shitty"><a href="/2018/11/18/detour/">Detour</a></li>
				<li><a href="/2018/10/07/devils-pass/">Devil’s Pass</a></li>
				<li><a href="/2010/10/29/diary-of-the-dead/">Diary of the Dead</a></li>
				<li class="reco"><a href="/2012/09/06/dirty-harry/">Dirty Harry</a></li>
				<li class="shitty"><a href="/2014/12/22/disaster-on-the-coastliner/">Disaster on the Coastliner</a></li>
				<li><a href="/2016/10/23/dog-soldiers/">Dog Soldiers</a></li>
				<li class="shitty"><a href="/2014/03/16/doggie-b/">Doggie B</a></li>
				<li><a href="/2013/10/09/afraid-of-dark/">Don’t Be Afraid of the Dark</a> <span>(2010)</span></li>
				<li class="shitty"><a href="/2008/06/06/doom/">Doom</a></li>
				<li><a href="/2017/10/03/dracula-1958/">Dracula</a> <span>(1958)</span></li>
				<li><a href="/2013/10/19/dracula-2/">Dracula</a> <span>(1979)</span></li>
				<li class="shitty"><a href="/2014/10/03/dracula-3000/">Dracula 3000</a></li>
				<li><a href="/2017/10/27/dracula-1972/">Dracula A.D. 1972</a></li>
				<li><a href="/2017/10/16/dracula-has-risen-from-the-grave/">Dracula Has Risen from the Grave</a></li>
				<li><a href="/2017/10/11/dracula-prince-of-darkness/">Dracula: Prince of Darkness</a></li>
				<li class="reco"><a href="/2013/01/16/dredd/">Dredd</a></li>
				<li class="shitty"><a href="/2017/08/23/driven/">Driven</a></li>
				<li class="topper"><a href="#index-top">top</a></li>
			</ul>
			<h5 id="ee">E</h5>
			<ul>
				<li class="shitty"><a href="/2018/10/15/earth-vs-the-spider/">Earth vs. the Spider</a></li>
				<li><a href="/2017/10/04/eaten-alive">Eaten Alive</a></li>
				<li><a href="/2016/10/25/eight-legged-freaks/">Eight Legged Freaks</a></li>
				<li class="shitty"><a href="/2017/09/17/womens-prison-massacre/">Emanuelle Escapes From Hell, aka Women's Prison Massacre</a></li>
				<li class="shitty"><a href="/2018/10/27/empire-of-the-ants/">Empire of the Ants</a></li>
				<li><a href="/2013/02/25/empty-balcony-awards-2013/">Empty Balcony Awards, The</a></li>
				<li class="shitty"><a href="/2014/05/21/end-of-days/">End of Days</a></li>
				<li><a href="/2013/01/26/end-of-watch/">End of Watch</a></li>
				<li><a href="/2017/10/09/quatermass-2/">Enemy From Space, aka Quatermass 2</a></li>
				<li><a href="/2015/01/27/equalizer/">Equalizer, The</a></li>
				<li><a href="/2014/05/18/eraser/">Eraser</a></li>
				<li class="shitty"><a href="/2011/11/06/escape-from-la/">Escape from L.A.</a></li>
				<li class="reco"><a href="/2008/09/15/escape-from-new-york/">Escape from New York</a></li>
				<li class="shitty"><a href="/2016/11/20/escape-from-the-bronx/">Escape from the Bronx</a></li>
				<li class="shitty"><a href="/2014/02/10/escape-plan/">Escape Plan</a></li>
				<li><a href="/2017/08/05/victory/">Escape to Victory, aka Victory</a></li>
				<li><a href="/2014/02/26/europa-report/">Europa Report</a></li>
				<li class="shitty"><a href="/2009/10/19/event-horizon/">Event Horizon</a></li>
				<li><a href="/2017/10/12/evil-of-frankenstein/">Evil of Frankenstein, The</a></li>
				<li><a href="/2009/07/27/holy-grail/">Excalibur</a></li>
				<li class="shitty"><a href="/2015/10/22/exeter/">Exeter</a></li>
				<li><a href="/2017/08/27/expendables/">Expendables, The</a></li>
				<li><a href="/2017/08/28/expendables-2/">Expendables 2, The</a></li>
				<li class="shitty"><a href="/2017/08/30/the-expendables-3/">Expendables 3, The</a></li>
				<li><a href="/2015/10/11/extraterrestrial/">Extraterrestrial</a></li>
				<li class="shitty"><a href="/2017/08/24/eye-see-you/">Eye See You</a></li>
				<li class="topper"><a href="#index-top">top</a></li>
			</ul>
			<h5 id="ff">F</h5>
			<ul>
				<li><a href="/2010/10/13/fido/">Fido</a></li>
				<li><a href="/2017/03/06/5th-empty-balcony-awards/">Fifth Annual Empty Balcony Awards for Movies I Saw From Last Year, The</a></li>
				<li><a href="/2012/09/01/final-countdown/">Final Countdown, The</a></li>
				<li class="reco"><a href="/2017/08/07/first-blood/">First Blood</a></li>
				<li class="reco"><a href="/2017/02/26/fistful-of-dollars/">Fistful of Dollars, A</a></li>
				<li><a href="/2017/10/14/quatermass-3/">Five Million Years to Earth, aka Quatermass and the Pit</a></li>
				<li class="reco"><a href="/2012/10/15/fly-1986/">Fly, The</a> <span>(1986)</span></li>
				<li><a href="/2014/10/13/fog/">Fog, The</a> <span>(1980)</span></li>
				<li class="shitty"><a href="/2014/10/14/fog-2005/">Fog, The</a> <span>(2005)</span></li>
				<li class="shitty"><a href="/2018/10/25/food-of-the-gods/">Food of the Gods, The</a></li>
				<li class="reco"><a href="/2011/02/19/forbidden-planet/">Forbidden Planet</a></li>
				<li><a href="/2016/03/16/4th-empty-balcony-awards/">Fourth Annual Empty Balcony Awards for Movies I Saw From Last Year, The</a></li>
				<li><a href="/2017/10/29/frankenstein-monster-from-hell/">Frankenstein and the Monster from Hell</a></li>
				<li><a href="/2017/10/17/frankenstein-created-woman/">Frankenstein Created Woman</a></li>
				<li><a href="/2017/10/21/frankenstein-must-be-destroyed/">Frankenstein Must Be Destroyed</a></li>
				<li class="shitty"><a href="/2009/10/29/freddy-vs-jason/">Freddy vs. Jason</a></li>
				<li class="shitty"><a href="/2017/11/05/freejack/">Freejack</a></li>
				<li class="shitty"><a href="/2009/10/01/friday-13th/">Friday the 13th</a></li>
				<li class="shitty"><a href="/2009/10/07/friday-13th-2/">Friday the 13th Part 2</a></li>
				<li class="shitty"><a href="/2009/10/12/friday-13th-3/">Friday the 13th Part 3</a></li>
				<li class="shitty"><a href="/2014/10/04/friday-13th-7/">Friday the 13th Part VII: The New Blood</a></li>
				<li class="shitty"><a href="/2009/10/15/friday-13th-4/">Friday the 13th: The Final Chapter</a></li>
				<li class="reco"><a href="/2014/10/09/fright-night/">Fright Night</a></li>
				<li><a href="/2013/10/25/frighteners/">Frighteners, The</a></li>
				<li class="reco"><a href="/2011/10/02/dusk-till-dawn/">From Dusk Till Dawn</a></li>
				<li class="shitty"><a href="/2011/10/04/dusk-till-dawn-2/">From Dusk Till Dawn 2: Texas Blood Money</a></li>
				<li class="reco"><a href="/2008/02/04/full-metal-jacket/">Full Metal Jacket</a></li>
				<li class="topper"><a href="#index-top">top</a></li>
			</ul>
			<h5 id="gg">G</h5>
			<ul>
				<li class="shitty"><a href="/2014/10/17/galaxy-of-terror/">Galaxy of Terror</a></li>
				<li class="reco"><a href="/2008/12/10/jarhead/">Generation Kill</a></li>
				<li class="shitty"><a href="/2018/02/04/geostorm/">Geostorm</a></li>
				<li><a href="/2017/08/22/get-carter-2000/">Get Carter</a> <span>(2000)</span></li>
				<li><a href="/2018/10/29/ghost-stories/">Ghost Stories</a></li>
				<li><a href="/2018/10/15/ghostkeeper/">Ghostkeeper</a></li>
				<li class="shitty"><a href="/2017/10/03/ghosts-of-mars/">Ghosts of Mars</a></li>
				<li><a href="/2018/10/17/giant-behemoth/">Giant Behemoth, The</a></li>
				<li class="shitty"><a href="/2018/10/09/giant-claw/">Giant Claw, The</a></li>
				<li class="shitty"><a href="/2018/10/18/giant-gila-monster/">Giant Gila Monster, The</a></li>
				<li class="shitty"><a href="/2018/10/24/the-giant-spider-invasion/">Giant Spider Invasion, The</a></li>
				<li class="shitty"><a href="/2018/10/13/god-told-me-to/">God Told Me To</a></li>
				<li><a href="/2008/03/12/tokyo-sos//">Godzilla Against Mechagodzilla</a></li>
				<li class="shitty"><a href="/2011/07/11/gojira/">Godzilla, King of the Monsters!</a></li>
				<li><a href="/2008/03/12/tokyo-sos/">Godzilla: Tokyo S.O.S.</a></li>
				<li class="reco"><a href="/2011/07/11/gojira/">Gojira</a></li>
				<li><a href="/2018/10/22/gorgo/">Gorgo</a></li>
				<li><a href="/2017/10/08/raw/">Grave, aka Raw</a></li>
				<li class="reco"><a href="/2012/10/30/grave-encounters/">Grave Encounters</a></li>
				<li><a href="/2014/10/02/grabbers/">Grabbers</a></li>
				<li class="shitty"><a href="/2013/10/06/graveyard-shift/">Graveyard Shift</a></li>
				<li class="shitty"><a href="/2017/02/19/last-shark/">Great White, aka The Last Shark</a></li>
				<li class="reco"><a href="/2012/05/31/the-grey/">Grey, The</a></li>
				<li class="shitty"><a href="/2010/10/03/growth/">Growth</a></li>
				<li><a href="/2015/01/20/guardians-of-the-galaxy/">Guardians of the Galaxy</a></li>
				<li class="topper"><a href="#index-top">top</a></li>
			</ul>
			<h5 id="hh">H</h5>
			<ul>
				<li><a href="/2017/03/19/hacksaw-ridge/">Hacksaw Ridge</a></li>
				<li><a href="/2016/10/05/hallow/">Hallow, The</a></li>
				<li class="reco"><a href="/2009/10/31/halloween/">Halloween</a> <span>(1978)</span></li>
				<li class="shitty"><a href="/2010/06/29/halloween-2007/">Halloween</a> <span>(2007)</span></li>
				<li class="shitty"><a href="/2010/10/31/halloween-2/">Halloween II</a> <span>(1981)</span></li>
				<li class="shitty"><a href="/2010/06/29/halloween-2007/">Halloween II</a> <span>(2009)</span></li>
				<li><a href="/2011/10/31/halloween-3/">Halloween III: Season Of The Witch</a></li>
				<li class="shitty"><a href="/2012/10/31/halloween-4/">Halloween 4: The Return of Michael Myers</a></li>
				<li class="shitty"><a href="/2013/10/31/halloween-5/">Halloween 5</a></li>
				<li><a href="/2015/10/31/halloween-h20/">Halloween H20: 20 Years Later</a></li>
				<li class="shitty"><a href="/2016/10/31/halloween-resurrection/">Halloween: Resurrection</a></li>
				<li class="shitty"><a href="/2014/10/31/halloween-6/">Halloween: The Curse of Michael Myers</a></li>
				<li><a href="/2013/10/15/hannibal-rising/">Hannibal Rising</a></li>
				<li><a href="/2015/10/20/harbinger-down/">Harbinger Down</a></li>
				<li><a href="/2014/10/27/hatchet-ii/">Hatchet II</a></li>
				<li><a href="/2015/10/16/hatchet-iii/">Hatchet III</a></li>
				<li><a href="/2014/10/23/haunter/">Haunter</a></li>
				<li><a href="/2013/10/18/haunting-1999/">Haunting, The</a> <span>(1999)</span></li>
				<li class="shitty"><a href="/2013/10/10/ghosts-of-georgia/">Haunting in Connecticut 2: Ghosts of Georgia, The</a></li>
				<li><a href="/2017/10/11/hell-house-llc/">Hell House LLC</a></li>
				<li><a href="/2015/10/06/hellraiser-ii/">Hellbound: Hellraiser II</a></li>
				<li class="shitty"><a href="/2014/10/25/prom-night-ii/">Hello Mary Lou: Prom Night II</a></li>	
				<li class="reco"><a href="/2014/10/30/hellraiser/">Hellraiser</a></li>
				<li><a href="/2015/10/07/hellraiser-iii/">Hellraiser III: Hell on Earth</a></li>
				<li><a href="/2008/10/23/herbivore/">Herbivore, The</a></li>
				<li class="shitty"><a href="/2014/05/01/hercules-in-new-york/">Hercules in New York</a></li>
				<li><a href="/2018/10/31/hereditary/">Hereditary</a></li>
				<li><a href="/2016/05/15/high-rise/">High-Rise</a></li>
				<li><a href="/2016/10/29/the-hills-have-eyes/">Hills Have Eyes, The</a></li>
				<li class="shitty"><a href="/2009/01/19/horror-express/">Horror Express</a></li>
				<li><a href="/2017/10/03/dracula-1958/">Horror of Dracula, aka Dracula</a></li>
				<li><a href="/2017/10/25/horror-of-frankenstein/">Horror of Frankenstein, The</a></li>
				<li><a href="/2018/10/30/the-host/">Host, The</a></li>
				<li class="shitty"><a href="/2018/04/15/hot-rod-girl/">Hot Rod Girl</a></li>
				<li><a href="/2017/10/10/the-hound-of-the-baskervilles-1959/">Hound of the Baskervilles, The</a> <span>(1959)</span></li>
				<li><a href="/2014/10/10/street/">House at the End of the Street</a></li>
				<li><a href="/2018/10/09/house-of-seven-corpses/">House of Seven Corpses, The</a></li>
				<li class="shitty"><a href="/2010/10/02/house-dead/">House of the Dead</a></li>
				<li><a href="/2012/10/29/house-of-the-devil/">House of the Devil, The</a></li>
				<li><a href="/2018/10/10/house-on-sorority-row/">House on Sorority Row, The</a></li>
				<li class="shitty"><a href="/2011/10/01/human-centipede/">Human Centipede, The</a></li>
				<li class="shitty"><a href="/2018/08/13/humanity-bureau/">Humanity Bureau, The</a></li>
				<li class="shitty"><a href="/2018/10/19/humanoids-from-the-deep/">Humanoids from the Deep</a></li>
				<li><a href="/2016/10/30/hush/">Hush</a></li>
				<li class="topper"><a href="#index-top">top</a></li>
			</ul>
			<h5 id="ii">I</h5>
			<ul>
				<li class="shitty"><a href="/2009/01/09/i-am-legend/">I Am Legend</a></li>
				<li><a href="/2017/10/07/pretty-thing/">I Am the Pretty Thing That Lives in the House</a></li>
				<li><a href="/2013/10/29/sell-the-dead/">I Sell the Dead</a></li>
				<li class="shitty"><a href="/2012/10/13/spit-grave/">I Spit on Your Grave</a></li>
				<li class="shitty"><a href="/2014/10/21/incredible-melting-man/">Incredible Melting Man, The</a></li>
				<li class="shitty"><a href="/2016/11/06/id4-resurgence/">Independence Day: Resurgence</a></li>
				<li><a href="/2016/10/01/indigenous/">Indigenous</a></li>
				<li><a href="/2018/10/24/inferno/">Inferno</a> <span>(1980)</span></li>
				<li><a href="/2015/10/26/the-innocents/">Innocents, The</a></li>
				<li><a href="/2014/10/08/insidious-2/">Insidious</a></li>
				<li><a href="/2013/10/17/insidious/">Insidious: Chapter 2</a></li>
				<li><a href="/2017/01/02/into-the-forest/">Into the Forest</a></li>
				<li><a href="/2016/10/02/intruders/">Intruders</a></li>
				<li><a href="/2008/05/16/iron-man/">Iron Man</a></li>
				<li><a href="/2018/10/01/it-2017/">It</a> <span>(2017)</span></li>
				<li><a href="/2018/10/04/beneath-the-sea/">It Came from Beneath the Sea</a></li>
				<li><a href="/2017/10/25/it-comes-at-night/">It Comes at Night</a></li>
				<li><a href="/2015/10/18/it-follows/">It Follows</a></li>
				<li><a href="/2018/10/18/it-stains-the-sands-red/">It Stains the Sands Red</a></li>
				<li><a href="/2008/08/02/italian-spiderman/">Italian Spiderman Movie, The</a></li>
				<li class="topper"><a href="#index-top">top</a></li>
			</ul>
			<h5 id="jj">J</h5>
			<ul>
				<li class="reco"><a href="/2008/12/10/jarhead/">Jarhead</a></li>
				<li class="shitty"><a href="/2017/10/13/jason-x/">Jason X</a></li>
				<li class="reco"><a href="/2016/10/19/jaws/">Jaws</a></li>
				<li class="shitty"><a href="/2016/10/24/jaws-3-d/">Jaws 3-D</a></li>
				<li><a href="/2014/05/19/jingle/">Jingle All the Way</a></li>
				<li class="shitty"><a href="/2009/10/25/vampires/">John Carpenter’s Vampires</a></li>
				<li><a href="/2017/08/19/judge-dredd/">Judge Dredd</a></li>
				<li><a href="/2014/05/17/junior/">Junior</a></li>
				<li class="topper"><a href="#index-top">top</a></li>
			</ul>
			<h5 id="kk">K</h5>
			<ul>
				<li class="shitty"><a href="/2014/10/04/keep/">Keep, The</a></li>
				<li><a href="/2017/02/05/kill-command/">Kill Command</a></li>
				<li><a href="/2014/01/03/kill-list/">Kill List</a></li>
				<li class="shitty"><a href="/2017/10/05/chopping-mall/">Killbots, aka Chopping Mall</a></li>
				<li><a href="/2016/10/21/killer-klowns-from-outer-space/">Killer Klowns from Outer Space</a></li>
				<li class="shitty"><a href="/2018/10/19/killer-shrews/">Killer Shrews, The</a></li>
				<li class="shitty"><a href="/2018/03/18/the-killers-edge-aka-blood-money/">Killers Edge, The</a></li>
				<li class="shitty"><a href="/2014/01/06/killing-season/">Killing Season</a></li>
				<li><a href="/2014/05/13/kindergarten-cop/">Kindergarten Cop</a></li>
				<li class="shitty"><a href="/2018/10/06/king-dinosaur/">King Dinosaur</a></li>
				<li><a href="/2013/11/21/king-of-new-york/">King of New York</a></li>
				<li class="reco"><a href="/2018/10/01/king-kong/">King Kong</a> <span>(1933)</span></li>
				<li><a href="/2018/10/26/king-kong-1976/">King Kong</a> <span>(1976)</span></li>
				<li class="shitty"><a href="/2018/10/29/king-kong-lives/">King Kong Lives</a></li>
				<li class="shitty"><a href="/2012/10/03/kingdom-of-spiders/">Kingdom of the Spiders</a></li>
				<li><a href="/2017/10/30/kiss-of-the-vampire/">Kiss of the Vampire, The</a></li>
				<li class="topper"><a href="#index-top">top</a></li>
			</ul>
			<h5 id="ll">L</h5>
			<ul>
				<li class="shitty"><a href="/2018/06/25/la-crackdown/">LA Crackdown</a></li>
				<li><a href="/2009/10/27/land-dead/">Land of the Dead</a></li>
				<li><a href="/2016/10/18/lake-placid/">Lake Placid</a></li>
				<li><a href="/2014/05/15/last-action-hero/">Last Action Hero</a></li>
				<li class="shitty"><a href="/2013/10/08/last-exorcism-ii/">Last Exorcism Part II, The</a></li>
				<li><a href="/2009/01/09/i-am-legend/">Last Man on Earth, The</a></li>
				<li class="shitty"><a href="/2017/02/19/last-shark/">Last Shark, The</a></li>
				<li class="shitty"><a href="/2013/06/23/last-stand/">Last Stand, The</a></li>
				<li class="reco"><a href="/2008/04/07/lawrence-of-arabia/">Lawrence of Arabia</a></li>
				<li><a href="/2009/10/13/hell-house/">Legend of Hell House, The</a></li>
				<li class="shitty"><a href="/2012/10/17/leviathan/">Leviathan</a></li>
				<li><a href="/2014/10/23/lifeforce/">Lifeforce</a></li>
				<li class="reco"><a href="/2013/02/28/becket/">Lion in Winter, The</a></li>
				<li><a href="/2017/08/13/lock-up/">Lock Up</a></li>
				<li class="reco"><a href="/2009/03/30/logans-run/">Logan’s Run</a></li>
				<li><a href="/2018/10/16/lost-boys/">Lost Boys, The</a></li>
				<li class="topper"><a href="#index-top">top</a></li>
			</ul>
			<h5 id="mm">M</h5>
			<ul>
				<li><a href="/2013/10/07/mama/">Mama</a></li>
				<li><a href="/2013/11/14/man-of-steel/">Man of Steel</a></li>
				<li><a href="/2017/10/22/man-who-could-cheat-death/">Man Who Could Cheat Death, The</a></li>
				<li><a href="/2017/10/18/maniac/">Maniac <span>(1980)</span></a></li>
				<li class="shitty"><a href="/2017/10/21/maniac-cop/">Maniac Cop</a></li>
				<li class="shitty"><a href="/2010/10/12/maniac-cop-2/">Maniac Cop 2</a></li>
				<li class="reco"><a href="/2008/08/05/master-and-commander/">Master and Commander: The Far Side of the World</a></li>
				<li class="shitty"><a href="/2018/10/14/matango/">Matango</a></li>
				<li><a href="/2008/04/18/matrix/">Matrix, The</a></li>
				<li class="shitty"><a href="/2009/10/24/maximum-overdrive/">Maximum Overdrive</a></li>
				<li class="shitty"><a href="/2017/03/26/mazes-and-monsters/">Mazes and Monsters</a></li>
				<li><a href="/2018/08/19/the-meg/">Meg, The</a></li>
				<li class="shitty"><a href="/2018/04/29/meteor/">Meteor</a></li>
				<li class="reco"><a href="/2011/04/25/mona-lisa/">Mona Lisa</a></li>
				<li class="shitty"><a href="/2018/10/19/humanoids-from-the-deep/">Monster, aka Humanoids from the Deep</a></li>
				<li><a href="/2018/10/31/monsters/">Monsters</a></li>
				<li class="reco"><a href="/2009/07/27/holy-grail/">Monty Python and the Holy Grail</a></li>
				<li><a href="/2018/03/25/mr-majestyk/">Mr. Majestyk</a></li>
				<li><a href="/2017/10/01/the-mummy/">Mummy, The</a> <span>(1959)</span></li>
				<li><a href="/2017/10/13/mummys-shroud/">Mummy's Shroud, The</a></li>
				<li><a href="/2014/10/07/mutants/">Mutants</a></li>
				<li class="shitty"><a href="/2013/10/22/my-bloody-valentine/">My Bloody Valentine</a> <span>(1981)</span></li>
				<li class="topper"><a href="#index-top">top</a></li>
			</ul>
			<h5 id="nn">N</h5>
			<ul>
				<li class="shitty"><a href="/2013/10/18/navy-night-monsters/">Navy vs. The Night Monsters, The</a></li>
				<li class="shitty"><a href="/2016/12/11/the-new-barbarians/">New Barbarians, The</a></li>
				<li class="shitty"><a href="/2017/06/18/new-gladiators/">New Gladiators, The</a></li>
				<li><a href="/2017/10/28/night-creatures/">Night Creatures</a></li>
				<li><a href="/2017/04/02/night-moves/">Night Moves</a></li>
				<li><a href="/2018/10/23/night-of-the-lepus/">Night of the Lepus</a></li>
				<li class="reco"><a href="/2010/10/01/night-dead/">Night of the Living Dead</a></li>
				<li><a href="/2015/02/13/nightcrawler/">Nightcrawler</a></li>
				<li><a href="/2017/08/04/nighthawks/">Nighthawks</a></li>
				<li class="shitty"><a href="/2010/10/15/elm-street-2010/">Nightmare on Elm Street, A</a> <span>(2010)</span></li>
				<li><a href="/2014/10/28/freddys-revenge/">Nightmare on Elm Street 2: Freddy’s Revenge, A</a></li>
				<li class="shitty"><a href="/2017/10/06/burial-ground/">Nights of Terror, The, aka Burial Ground</a></li>
				<li class="shitty"><a href="/2016/11/27/no-escape/">No Escape</a></li>
				<li class="topper"><a href="#index-top">top</a></li>
			</ul>
			<h5 id="oo">O</h5>
			<ul>
				<li><a href="/2014/10/14/oculus/">Oculus</a></li>
				<li><a href="/2014/10/26/odd-thomas/">Odd Thomas</a></li>
				<li><a href="/2012/10/21/of-unknown-origin/">Of Unknown Origin</a></li>
				<li><a href="/2017/04/23/the-offence/">Offence, The</a></li>
				<li><a href="/2018/11/25/officer-downe/">Officer Downe</a></li>
				<li class="shitty"><a href="/2013/03/24/olympus-has-fallen/">Olympus Has Fallen</a></li>
				<li><a href="/2009/01/09/i-am-legend/">Omega Man, The</a></li>
				<li><a href="/2014/12/09/one-i-love/">One I Love, The</a></li>
				<li class="shitty"><a href="/2013/07/31/orca/">Orca</a></li>
				<li><a href="/2012/10/06/orphanage/">Orphanage, The</a></li>
				<li><a href="/2017/01/22/outland/">Outland</a></li>
				<li class="shitty"><a href="/2017/08/11/over-the-top/">Over the Top</a></li>
				<li class="topper"><a href="#index-top">top</a></li>
			</ul>
			<h5 id="pp">P</h5>
			<ul>
				<li class="shitty"><a href="/2017/08/02/paradise-alley/">Paradise Alley</a></li>
				<li><a href="/2013/10/08/paranormal-activity-3/">Paranormal Activity 3</a></li>
				<li class="reco"><a href="/2008/03/27/patton/">Patton</a></li>
				<li><a href="/2013/10/25/people-under-stairs/">People Under the Stairs, The</a></li>
				<li class="shitty"><a href="/2018/11/04/perfect-weapon/">Perfect Weapon, The</a></li>
				<li><a href="/2017/10/02/phantasm/">Phantasm</a></li>
				<li><a href="/2017/10/26/phantom-of-the-opera/">Phantom of the Opera, The</a> <span>(1962)</span></li>
				<li><a href="/2014/10/18/phantoms/">Phantoms</a></li>
				<li class="shitty"><a href="/2011/10/05/piranha-3d/">Piranha 3D</a></li>
				<li class="reco"><a href="/2013/10/27/pitch-black/">Pitch Black</a></li>
				<li><a href="/2017/06/25/point-break/">Point Break</a></li>
				<li class="reco"><a href="/2013/10/02/poltergeist/">Poltergeist</a> <span>(1982)</span></li>
				<li><a href="/2015/10/25/poltergeist-2015/">Poltergeist</a> <span>(2015)</span></li>
				<li class="shitty"><a href="/2014/06/10/pompeii/">Pompeii</a></li>
				<li><a href="/2013/10/28/pontypool/">Pontypool</a></li>
				<li class="reco"><a href="/2011/12/20/predator/">Predator</a></li>
				<li><a href="/2016/10/07/predator-2/">Predator 2</a></li>
				<li><a href="/2016/10/13/predators/">Predators</a></li>
				<li class="shitty"><a href="/2008/12/29/prince-of-darkness/">Prince of Darkness</a></li>
				<li><a href="/2014/10/24/prom-night/">Prom Night</a></li>
				<li><a href="/2014/10/03/prophecy/">Prophecy, The</a></li>
				<li class="shitty"><a href="/2018/10/28/the-prowler/">Prowler, The</a></li>
				<li class="reco"><a href="/2012/10/21/psycho-ii/">Psycho II</a></li>
				<li><a href="/2012/10/29/psycho-iii/">Psycho III</a></li>
				<li class="shitty"><a href="/2017/05/21/psychomania/">Psychomania</a></li>
				<li class="reco"><a href="/2014/05/25/pumping-iron/">Pumping Iron</a></li>
				<li><a href="/2011/10/19/pumpkinhead/">Pumpkinhead</a></li>
				<li class="topper"><a href="#index-top">top</a></li>
			</ul>
			<h5 id="qq">Q</h5>
			<ul>
				<li class="shitty"><a href="/2018/10/28/q-the-winged-serpent/">Q &#151; The Winged Serpent</a></li>
				<li><a href="/2009/10/03/quarantine/">Quarantine</a></li>
				<li><a href="/2012/10/11/quarantine-2/">Quarantine 2: Terminal</a></li>
				<li><a href="/2017/10/09/quatermass-2/">Quatermass 2</a></li>
				<li><a href="/2017/10/14/quatermass-3/">Quatermass and the Pit</a></li>
				<li><a href="/2017/10/02/quatermass-xperiment/">Quatermass Xperiment, The</a></li>
				<li><a href="/2018/10/23/a-quiet-place/">Quiet Place, A</a></li>
				<li class="topper"><a href="#index-top">top</a></li>
			</ul>
			<h5 id="rr">R</h5>
			<ul>
				<li><a href="/2015/10/08/ragnarok/">Ragnarok</a></li>
				<li class="reco"><a href="/2017/05/15/the-raid/">Raid, The</a></li>
				<li><a href="/2017/06/04/raid-2/">Raid 2, The</a></li>
				<li class="shitty"><a href="/2017/07/09/raiders-of-atlantis/">Raiders of Atlantis, The</a></li>
				<li class="shitty"><a href="/2011/01/24/raise-the-titanic/">Raise the Titanic</a></li>
				<li><a href="/2017/08/26/rambo/">Rambo</a></li>
				<li class="shitty"><a href="/2017/08/08/rambo-2/">Rambo: First Blood Part II</a></li>
				<li><a href="/2017/08/12/rambo-iii/">Rambo III</a></li>
				<li><a href="/2017/10/08/raw/">Raw</a></li>
				<li class="shitty"><a href="/2014/05/08/raw-deal/">Raw Deal</a></li>
				<li><a href="/2010/10/06/re-animator/">Re-Animator</a></li>
				<li><a href="/2011/10/03/rec/">[•REC]</a></li>
				<li><a href="/2012/10/11/quarantine-2/">[•REC] 2</a></li>
				<li class="reco"><a href="/2010/05/27/red-dawn/">Red Dawn</a> <span>(1984)</span></li>
				<li class="shitty"><a href="/2013/03/06/red-dawn-2012/">Red Dawn</a> <span>(2012)</span></li>
				<li><a href="/2014/05/10/red-heat/">Red Heat</a></li>
				<li class="shitty"><a href="/2014/05/06/red-sonja/">Red Sonja</a></li>
				<li class="shitty"><a href="/2011/08/05/reign-of-fire/">Reign of Fire</a></li>
				<li><a href="/2015/10/28/the-relic/">Relic, The</a></li>
				<li class="shitty"><a href="/2018/10/21/reptilicus/">Reptilicus</a></li>
				<li class="shitty"><a href="/2012/10/08/resident-evil/">Resident Evil</a></li>
				<li class="shitty"><a href="/2014/10/06/apocalypse/">Resident Evil: Apocalypse</a></li>
				<li class="shitty"><a href="/2008/06/09/resident-evil-extinction/">Resident Evil: Extinction</a></li>
				<li class="shitty"><a href="/2013/10/01/resident-evil-retribution/">Resident Evil: Retribution</a></li>
				<li class="reco"><a href="/2010/10/08/return-living-dead/">Return of the Living Dead, The</a></li>
				<li class="shitty"><a href="/2016/10/08/return-dead-ii/">Return of the Living Dead Part II</a></li>
				<li class="shitty"><a href="/2013/10/14/rave-grave/">Return of the Living Dead: Rave to the Grave</a></li>
				<li><a href="/2017/10/07/revenge-of-frankenstein/">Revenge of Frankenstein, The</a></li>
				<li class="shitty"><a href="/2013/11/04/riddick/">Riddick</a></li>
				<li class="shitty"><a href="/2013/10/07/rig/">Rig, The</a></li>
				<li><a href="/2014/10/01/ring/">Ring, The</a></li>
				<li><a href="/2014/10/01/ring/">Ringu</a></li>
				<li><a href="/2018/10/05/the-ritual/">Ritual, The</a></li>
				<li class="shitty"><a href="/2015/07/09/road-house/">Road House</a></li>
				<li class="reco"><a href="/2009/02/06/robocop/">Robocop</a></li>
				<li class="reco"><a href="/2017/08/01/rocky/">Rocky</a></li>
				<li><a href="/2017/08/03/rocky-ii/">Rocky II</a></li>
				<li><a href="/2017/08/06/rocky-iii/">Rocky III</a></li>
				<li><a href="/2017/08/09/rocky-iv/">Rocky IV</a></li>
				<li><a href="/2017/08/15/rocky-v/">Rocky V</a></li>
				<li><a href="/2017/08/25/rocky-balboa/">Rocky Balboa</a></li>
				<li class="reco"><a href="/2016/11/13/rollerball/">Rollerball</a> <span>(1975)</span></li>
				<li class="shitty"><a href="/2016/11/13/rollerball/">Rollerball</a> <span>(2002)</span></li>
				<li class="shitty"><a href="/2018/10/28/the-prowler/">Rosemary’s Killer, aka The Prowler</a></li>
				<li class="reco"><a href="/2015/01/02/rover/">Rover, The</a></li>
				<li><a href="/2018/08/26/runaway/">Runaway</a></li>
				<li><a href="/2013/01/07/runaway-train/">Runaway Train</a></li>
				<li class="reco"><a href="/2014/05/09/running-man/">Running Man, The</a></li>
				<li><a href="/2014/01/29/rush/">Rush</a></li>
				<li class="topper"><a href="#index-top">top</a></li>
			</ul>
			<h5 id="ss">S</h5>
			<ul>
				<li class="shitty"><a href="/2015/10/15/san-andreas/">San Andreas</a></li>
				<li class="shitty"><a href="/2017/10/31/satanic-rites-of-dracula/">Satanic Rites of Dracula, The</a></li>
				<li><a href="/2012/12/08/savages/">Savages</a></li>
				<li><a href="/2015/10/12/saw/">Saw</a></li>
				<li><a href="/2015/10/13/saw-ii/">Saw II</a></li>
				<li><a href="/2015/10/14/saw-iii/">Saw III</a></li>
				<li><a href="/2017/10/23/scars-of-dracula/">Scars of Dracula</a></li>
				<li><a href="/2014/03/03/empty-balcony-awards/">Second Annual Empty Balcony Awards for Movies I Saw From Last Year, The</a></li>
				<li class="reco"><a href="/2017/02/13/seven-days-in-may/">Seven Days in May</a></li>
				<li class="shitty"><a href="/2018/10/30/suckling/">Sewage Baby, aka The Suckling</a></li>
				<li class="shitty"><a href="/2018/07/29/shape-of-things-to-come/">Shape of Things to Come, The</a></li>
				<li class="reco"><a href="/2016/10/16/the-shining/">Shining, The</a></li>
				<li class="shitty"><a href="/2014/06/09/shitty-batman/">Shitty Batman Idea, A</a></li>
				<li class="shitty"><a href="/2012/01/23/shitty-idea/">Shitty Idea, A</a></li>
				<li class="shitty"><a href="/2013/03/07/shitty-idea-2/">Shitty Idea, Part II, A</a></li>
				<li class="shitty"><a href="/2014/03/03/shitty-awards/">Shitty Movie Sundays Awards, The</a></li>
				<li><a href="/2015/10/25/october-horrorshow-shivers/">Shivers</a></li>
				<li><a href="/2018/10/22/shock/">Shock</a></li>
				<li><a href="/2017/09/10/shot-caller/">Shot Caller</a></li>
				<li><a href="/2013/10/29/shutter/">Shutter</a> <span>(2004)</span></li>
				<li class="shitty"><a href="/2018/05/06/silent-rage/">Silent Rage</a></li>
				<li><a href="/2018/03/04/2018-empty-balcony-awards/">Sixth Annual Empty Balcony Awards for Movies I Saw from Last Year, The</a></li>
				<li class="shitty"><a href="/2013/10/16/skeptic/">Skeptic, The</a></li>
				<li><a href="/2013/02/16/skyfall/">Skyfall</a></li>
				<li class="shitty"><a href="/2014/10/29/sleepaway-camp/">Sleepaway Camp</a></li>
				<li><a href="/2010/10/05/slither/">Slither</a></li>
				<li class="shitty"><a href="/2009/08/30/soldier/">Soldier</a></li>
				<li><a href="/2011/07/21/source-code/">Source Code</a></li>
				<li class="reco"><a href="/2009/03/02/soylent-green/">Soylent Green</a></li>
				<li class="shitty"><a href="/2009/09/08/spacehunter/">Spacehunter: Adventures in the Forbidden Zone</a></li>
				<li><a href="/2017/08/18/the-specialist/">Specialist, The</a></li>
				<li class="shitty"><a href="/2011/03/26/trancers-ii/">Spice World</a></li>
				<li class="shitty"><a href="/2018/10/15/earth-vs-the-spider/">Spider, The, aka Earth vs. the Spider</a></li>
				<li><a href="/2013/10/26/splinter/">Splinter</a></li>
				<li><a href="/2014/10/05/stake-land/">Stake Land</a></li>
				<li class="shitty"><a href="/2008/12/16/starship-troopers-3/">Starship Troopers 3: Marauder</a></li>
				<li><a href="/2014/05/02/stay-hungry/">Stay Hungry</a></li>
				<li class="shitty"><a href="/2018/10/17/steel-and-lace/">Steel and Lace</a></li>
				<li class="shitty"><a href="/2017/04/09/steel-dawn/">Steel Dawn</a></li>
				<li><a href="/2014/01/22/stick/">Stick</a></li>
				<li class="shitty"><a href="/2017/08/16/stop-or-my-mom-will-shoot/">Stop! Or My Mom Will Shoot</a></li>
				<li class="shitty"><a href="/2018/01/21/strike-commando/">Strike Commando</a></li>
				<li class="shitty"><a href="/2013/10/24/stuff/">Stuff, The</a></li>
				<li class="shitty"><a href="/2015/08/26/substitute/">Substitute, The</a></li>
				<li class="shitty"><a href="/2018/10/30/suckling/">Suckling, The</a></li>
				<li class="shitty"><a href="/2018/01/07/summer-city/">Summer City</a></li>
				<li class="reco"><a href="/2009/09/12/sunshine/">Sunshine</a></li>
				<li><a href="/2010/10/12/survival-of-the-dead/">Survival of the Dead</a></li>
				<li><a href="/2009/02/16/sushi-conveyor/">Sushi Conveyor</a></li>
				<li class="reco"><a href="/2017/10/19/suspiria/">Suspiria</a></li>
				<li class="topper"><a href="#index-top">top</a></li>
			</ul>
			<h5 id="tt">T</h5>
			<ul>
				<li><a href="/2015/10/04/taking-of-deborah-logan/">Taking of Deborah Logan, The</a></li>
				<li class="shitty"><a href="/2017/08/14/tango-cash/">Tango & Cash</a></li>
				<li><a href="/2018/10/05/tarantula/">Tarantula</a></li>
				<li><a href="/2017/10/20/taste-the-blood-of-dracula/">Taste the Blood of Dracula</a></li>
				<li class="reco"><a href="/2014/05/05/terminator/">Terminator, The</a></li>
				<li><a href="/2014/05/14/terminator-2/">Terminator 2: Judgment Day</a></li>
				<li><a href="/2014/05/24/terminator-3/">Terminator 3: Rise of the Machines</a></li>
				<li><a href="/2016/05/12/terminator-genisys/">Terminator Genisys</a></li>
				<li><a href="/2014/10/22/terror-train/">Terror Train</a></li>
				<li><a href="/2017/10/14/them-2006/">Them</a> <span>(2006)</span></li>
				<li><a href="/2018/10/03/them/">Them!</a></li>
				<li class="shitty"><a href="/2008/10/27/theodore-rex/">Theodore Rex</a></li>
				<li class="shitty"><a href="/2008/09/23/they-live/">They Live</a></li>
				<li><a href="/2018/10/03/theyre-watching/">They’re Watching</a></li>
				<li><a href="/2015/01/07/thief/">Thief</a></li>
				<li class="reco"><a href="/2008/09/09/the-thing/">Thing, The</a> <span>(1982)</span></li>
				<li><a href="/2011/10/21/the-thing-2011/">Thing, The</a> <span>(2011)</span></li>
				<li class="reco"><a href="/2011/10/29/the-thing-2/">Thing From Another World, The</a></li>
				<li><a href="/2015/03/02/3rd-empty-balcony-awards/">Third Annual Empty Balcony Awards for Movies I Saw From Last Year, The</a></li>
				<li class="reco"><a href="/2017/01/08/third-man/">Third Man, The</a></li>
				<li><a href="/2009/06/30/three-kings/">Three Kings</a></li>
				<li class="shitty"><a href="/2017/09/03/timecop/">Timecop</a></li>
				<li><a href="/2018/04/09/the-titan/">Titan, The</a></li>
				<li class="shitty"><a href="/2015/10/19/toolbox-murders/">Toolbox Murders, The</a></li>
				<li class="reco"><a href="/2014/05/12/total-recall/">Total Recall</a> <span>(1990)</span></li>
				<li><a href="/2013/03/08/total-recall-2012/">Total Recall</a> <span>(2012)</span></li>
				<li><a href="/2015/10/05/town-that-dreaded-sundown-2014/">Town That Dreaded Sundown, The</a> <span>(2014)</span></li>
				<li><a href="/2009/05/19/the-train/">Train, The</a></li>
				<li class="shitty"><a href="/2011/03/07/trancers/">Trancers</a></li>
				<li class="shitty"><a href="/2011/03/26/trancers-ii/">Trancers II</a></li>
				<li class="shitty"><a href="/2009/04/17/transporter/">Transporter, The</a></li>
				<li class="reco"><a href="/2013/10/29/tremors/">Tremors</a></li>
				<li><a href="/2015/10/27/trick-r-treat/">Trick ‘r Treat</a></li>
				<li><a href="/2013/10/13/trollhunter/">Trollhunter</a></li>
				<li class="reco"><a href="/2018/12/30/true-grit-1969/">True Grit <span>(1969)</span></a></li>
				<li class="reco"><a href="/2014/05/16/true-lies/">True Lies</a></li>
				<li><a href="/2016/10/28/tucker-dale/">Tucker & Dale vs. Evil</a></li>
				<li><a href="/2013/10/11/tunnel/">Tunnel, The</a></li>
				<li><a href="/2014/05/11/twins/">Twins</a></li>
				<li><a href="/2017/10/19/two-faces-of-dr-jekyll/">Two Faces of Dr. Jekyll, The</a></li>
				<li class="topper"><a href="#index-top">top</a></li>
			</ul>
			<h5 id="uu">U</h5>
			<ul>
				<li><a href="/2018/12/16/alien-uprising/">U.F.O, aka Alien Uprising</a></li>
				<li><a href="/2018/11/11/undisputed/">Undisputed</a></li>
				<li><a href="/2014/10/20/bloody-mary/">Urban Legends: Bloody Mary</a></li>
				<li class="topper"><a href="#index-top">top</a></li>
			</ul>
			<h5 id="vv">V</h5>
			<ul>
				<li><a href="/2013/10/14/vhs/">V/H/S</a></li>
				<li><a href="/2017/08/05/victory/">Victory</a></li>
				<li class="shitty"><a href="/2010/10/27/village-damned-1995/">Village of the Damned</a> <span>(1995)</span></li>
				<li><a href="/2018/10/06/villmark-2/">Villmark 2</a></li>
				<li class="reco"><a href="/2012/08/08/virgin-spring/">Virgin Spring, The</a></li>
				<li class="reco"><a href="/2017/10/15/the-void/">Void, The</a></li>
				<li class="topper"><a href="#index-top">top</a></li>
			</ul>
			<h5 id="ww">W</h5>
			<ul>
				<li class="reco"><a href="/2014/02/14/wake-in-fright/">Wake in Fright</a></li>
				<li><a href="/2018/12/09/walking-tall/">Walking Tall</a> <span>(1973)</span></li>
				<li><a href="/2018/01/28/war-for-the-planet-of-the-apes/">War for the Planet of the Apes</a></li>
				<li class="shitty"><a href="/2018/10/14/war-of-the-colossal-beast/">War of the Colossal Beast</a></li>
				<li class="reco"><a href="/2015/10/09/war-of-the-worlds-1953/">War of the Worlds, The</a></li>
				<li class="shitty"><a href="/2017/06/18/new-gladiators/">Warriors of the Year 2072, aka The New Gladiators</a></li>
				<li><a href="/2015/10/29/we-are-still-here/">We Are Still Here</a></li>
				<li><a href="/2017/10/01/what-we-become/">What We Become</a></li>
				<li class="shitty"><a href="/2017/05/07/when-time-ran-out/">When Time Ran Out</a></li>
				<li><a href="/2012/08/15/where-eagles-dare/">Where Eagles Dare</a></li>
				<li class="shitty"><a href="/2014/01/15/white-house-down/">White House Down</a></li>
				<li><a href="/2013/12/03/wild-geese/">Wild Geese, The</a></li>
				<li><a href="/2014/10/29/willow-creek/">Willow Creek</a></li>
				<li><a href="/2018/02/11/wind-river/">Wind River</a></li>
				<li class="reco"><a href="/2016/10/20/witch/">Witch, The</a></li>
				<li class="shitty"><a href="/2017/09/17/womens-prison-massacre/">Women's Prison Massacre</a></li>
				<li><a href="/2013/10/20/world-war-z/">World War Z</a></li>
				<li><a href="/2016/10/04/wyrmwood/">Wyrmwood: Road of the Dead</a></li>
				<li class="topper"><a href="#index-top">top</a></li>
			</ul>
			<h5 id="xx">X</h5>
			<ul>
				<li><a href="/2017/10/05/x-the-unknown/">X the Unknown</a></li>
				<li class="shitty"><a href="/2017/04/16/xxx/">xXx</a></li>
				<li class="topper"><a href="#index-top">top</a></li>
			</ul>
			<h5 id="yy">Y</h5>
			<ul>
				<li><a href="/2014/02/17/yellow-sea/">Yellow Sea, The</a></li>
				<li><a href="/2014/10/02/youre-next/">You’re Next</a></li>
				<li class="topper"><a href="#index-top">top</a></li>
			</ul>
			<h5 id="zz">Z</h5>
			<ul>
				<li><a href="/2008/02/25/zodiac/">Zodiac</a></li>
				<li class="shitty"><a href="/2015/10/10/zombeavers/">Zombeavers</a></li>
				<li class="shitty"><a href="/2011/10/07/zombi-2/">Zombi 2</a></li>
				<li><a href="/2009/10/05/zombieland/">Zombieland</a></li>
				<li class="topper"><a href="#index-top">top</a></li>
			</ul>
		</div>

	</main><!-- .site-main -->
</div><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>