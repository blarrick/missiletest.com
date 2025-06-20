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
				<li class="has-image revenge-ninja" onclick="location.href='/2019/02/03/revenge-of-the-ninja/';"><a href="/2019/02/03/revenge-of-the-ninja/">Revenge of the Ninja</a></li>
				<li class="has-image commando" onclick="location.href='/2014/05/07/commando/';"><a href="/2014/05/07/commando/">Commando</a></li>
				<li class="has-image anaconda" onclick="location.href='/2014/10/01/anaconda/';"><a href="/2014/10/01/anaconda/">Anaconda</a></li>
				<li class="has-image sadist" onclick="location.href='/2020/04/12/sadist/';"><a href="/2020/04/12/sadist/">The Sadist</a></li>
				<li class="has-image deep-blue-sea" onclick="location.href='/2013/10/12/deep-blue-sea/';"><a href="/2013/10/12/deep-blue-sea/">Deep Blue Sea</a></li>
				<li class="has-image spacehunter" onclick="location.href='/2009/09/08/spacehunter/';"><a href="/2009/09/08/spacehunter/">Spacehunter: Adventures in the Forbidden Zone</a></li>
				<li class="has-image reign-of-fire" onclick="location.href='/2011/08/05/reign-of-fire/';"><a href="/2011/08/05/reign-of-fire/">Reign of Fire</a></li>
				<li class="has-image cobra" onclick="location.href='/2017/08/10/cobra/';"><a href="/2017/08/10/cobra/">Cobra</a></li>
				<li class="has-image space-mutiny" onclick="location.href='/2023/07/09/space-mutiny/';"><a href="/2023/07/09/space-mutiny/">Space Mutiny</a></li>
				<li class="has-image cyber-tracker-2" onclick="location.href='/2018/05/13/cyber-tracker-2/';"><a href="/2018/05/13/cyber-tracker-2/">Cyber Tracker 2</a></li>
				<li class="has-image maximum-overdrive" onclick="location.href='/2009/10/24/maximum-overdrive/';"><a href="/2009/10/24/maximum-overdrive/">Maximum Overdrive</a></li>
				<li class="has-image wraith" onclick="location.href='/2022/07/03/wraith/';"><a href="/2022/07/03/wraith/">The Wraith</a></li>
				<li class="has-image brain-damage" onclick="location.href='/2020/10/31/brain-damage/';"><a href="/2020/10/31/brain-damage/">Brain Damage</a></li>
				<li class="has-image death-race-2000" onclick="location.href='/2021/05/30/death-race-2000/';"><a href="/2021/05/30/death-race-2000/">Death Race 2000</a></li>
				<li class="has-image robot-monster" onclick="location.href='/2019/10/07/robot-monster/';"><a href="/2019/10/07/robot-monster/">Robot Monster</a></li>
				<li class="has-image rambo-2" onclick="location.href='/2017/08/08/rambo-2/';"><a href="/2017/08/08/rambo-2/">Rambo: First Blood Part II</a></li>
				<li class="has-image kingdom-spiders" onclick="location.href='/2012/10/03/kingdom-of-spiders/';"><a href="/2012/10/03/kingdom-of-spiders/">Kingdom of the Spiders</a></li>
				<li class="has-image from-hell-it" onclick="location.href='/2019/10/20/from-hell-it-came/';"><a href="/2019/10/20/from-hell-it-came/">From Hell It Came</a></li>
				<li class="has-image death-wish-2" onclick="location.href='/2019/05/19/death-wish-2/';"><a href="/2019/05/19/death-wish-2/">Death Wish II</a></li>
				<li class="has-image event-horizon" onclick="location.href='/2009/10/19/event-horizon/';"><a href="/2009/10/19/event-horizon/">Event Horizon</a></li>
				<li class="has-image class-1999" onclick="location.href='/2016/10/27/class-of-1999/';"><a href="/2016/10/27/class-of-1999/">Class of 1999</a></li>
				<li class="has-image king-kong-lives" onclick="location.href='/2018/10/29/king-kong-lives/';"><a href="/2018/10/29/king-kong-lives/">King Kong Lives</a></li>
				<li class="has-image death-wish-4" onclick="location.href='/2017/07/23/death-wish-4/';"><a href="/2017/07/23/death-wish-4/">Death Wish 4: The Crackdown</a></li>
				<li class="has-image they-live" onclick="location.href='/2008/09/23/they-live/';"><a href="/2008/09/23/they-live/">They Live</a></li>
				<li class="has-image battle-stars" onclick="location.href='/2017/07/16/battle-beyond-the-stars/';"><a href="/2017/07/16/battle-beyond-the-stars/">Battle Beyond the Stars</a></li>
				<li class="has-image enter-ninja" onclick="location.href='/2019/01/06/enter-the-ninja/';"><a href="/2019/01/06/enter-the-ninja/">Enter the Ninja</a></li>
				<li class="has-image trancers" onclick="location.href='/2011/03/07/trancers/';"><a href="/2011/03/07/trancers/">Trancers</a></li>
				<li class="has-image deadly-prey" onclick="location.href='/2020/07/05/deadly-prey/';"><a href="/2020/07/05/deadly-prey/">Deadly Prey</a></li>
				<li class="has-image creeping-terror" onclick="location.href='/2022/10/24/creeping-terror/';"><a href="/2022/10/24/creeping-terror/">The Creeping Terror</a></li>
				<li class="has-image deathsport" onclick="location.href='/2020/01/12/deathsport/';"><a href="/2020/01/12/deathsport/">Deathsport</a></li>
				<li class="has-image critters" onclick="location.href='/2013/10/23/critters/';"><a href="/2013/10/23/critters/">Critters</a></li>
				<li class="has-image ten-midnight" onclick="location.href='/2019/01/20/10-to-midnight/';"><a href="/2019/01/20/10-to-midnight/">10 to Midnight</a></li>
				<li class="has-image keep" onclick="location.href='/2014/10/04/keep/';"><a href="/2014/10/04/keep/">The Keep</a></li>
				<li class="has-image tenement" onclick="location.href='/2024/07/21/tenement/';"><a href="/2024/07/21/tenement/">Tenement (1985)</a></li>
				<li class="has-image tammy-trex" onclick="location.href='/2021/10/16/tammy-t-rex/';"><a href="/2021/10/16/tammy-t-rex/">Tammy and the T-Rex</a></li>
				<li class="has-image cop-1988" onclick="location.href='/2022/04/24/cop-1988/';"><a href="/2022/04/24/cop-1988/">Cop (1988)</a></li>
				<li class="has-image hercules-nyc" onclick="location.href='/2014/05/01/hercules-in-new-york/';"><a href="/2014/05/01/hercules-in-new-york/">Hercules in New York</a></li>
				<li class="has-image beyond-poseidon" onclick="location.href='/2017/07/02/beyond-the-poseidon-adventure/';"><a href="/2017/07/02/beyond-the-poseidon-adventure/">Beyond the Poseidon Adventure</a></li>
				<li class="has-image strike-commando" onclick="location.href='/2018/01/21/strike-commando/';"><a href="/2018/01/21/strike-commando/">Strike Commando</a></li>
				<li class="has-image teenage-caveman" onclick="location.href='/2024/04/07/teenage-cave-man-or-teenage-caveman-whatever/';"><a href="/2024/04/07/teenage-cave-man-or-teenage-caveman-whatever/">Teenage Cave Man</a></li>
				<li class="has-image dead-next-door" onclick="location.href='/2023/10/11/dead-next-door/';"><a href="/2023/10/11/dead-next-door/">The Dead Next Door</a></li>
				<li class="has-image backdraft" onclick="location.href='/2012/09/10/backdraft/';"><a href="/2012/09/10/backdraft/">Backdraft</a></li>
				<li class="has-image elm-street-3" onclick="location.href='/2021/10/05/elm-street-3/';"><a href="/2021/10/05/elm-street-3/">A Nightmare on Elm Street 3: Dream Warriors</a></li>
				<li class="has-image robowar" onclick="location.href='/2023/03/12/robowar/';"><a href="/2023/03/12/robowar/">Robowar</a></li>
				<li class="has-image mutant-hunt" onclick="location.href='/2025/04/13/mutant-hunt/';"><a href="/2025/04/13/mutant-hunt/">Mutant Hunt</a></li>
				<li class="has-image white-house-down" onclick="location.href='/2014/01/15/white-house-down/';"><a href="/2014/01/15/white-house-down/">White House Down</a></li>
				<li class="has-image friday-13th-4" onclick="location.href='/2009/10/15/friday-13th-4/';"><a href="/2009/10/15/friday-13th-4/">Friday the 13th: The Final Chapter</a></li>
				<li class="has-image substitute" onclick="location.href='/2015/08/26/substitute/';"><a href="/2015/08/26/substitute/">The Substitute</a></li>
				<li class="has-image graveyard-shift" onclick="location.href='/2013/10/06/graveyard-shift/';"><a href="/2013/10/06/graveyard-shift/">Graveyard Shift</a></li>
				<li class="has-image bronx-warriors" onclick="location.href='/2016/09/15/bronx-warriors/';"><a href="/2016/09/15/bronx-warriors/">1990: The Bronx Warriors</a></li>
				<li class="has-image batman-robin" onclick="location.href='/2014/05/20/batman-robin/';"><a href="/2014/05/20/batman-robin/">Batman and Robin</a></li>
				<li class="has-image friday-13th-2" onclick="location.href='/2009/10/07/friday-13th-2/';"><a href="/2009/10/07/friday-13th-2/">Friday the 13th Part 2</a></li>
				<li class="has-image steel-dawn" onclick="location.href='/2017/04/09/steel-dawn/';"><a href="/2017/04/09/steel-dawn/">Steel Dawn</a></li>
				<li class="has-image basket-case" onclick="location.href='/2011/10/18/basket-case/';"><a href="/2011/10/18/basket-case/">Basket Case</a></li>
				<li class="has-image brain-1988" onclick="location.href='/2021/10/31/the-brain-1988/';"><a href="/2021/10/31/the-brain-1988/">The Brain (1988)</a></li>
				<li class="has-image deadly-spawn" onclick="location.href='/2022/10/06/deadly-spawn/';"><a href="/2022/10/06/deadly-spawn/">The Deadly Spawn</a></li>
				<li class="has-image strike-commando-2" onclick="location.href='/2025/03/16/strike-commando-2/';"><a href="/2025/03/16/strike-commando-2/">Strike Commando 2</a></li>
				<li class="has-image contamination" onclick="location.href='/2017/10/09/contamination/';"><a href="/2017/10/09/contamination/">Contamination</a></li>
				<li class="has-image zombi-2" onclick="location.href='/2011/10/07/zombi-2/';"><a href="/2011/10/07/zombi-2/">Zombi 2</a></li>
				<li class="has-image orca" onclick="location.href='/2013/07/31/orca/';"><a href="/2013/07/31/orca/">Orca</a></li>
				<li class="has-image body-melt" onclick="location.href='/2024/10/18/body-melt/';"><a href="/2024/10/18/body-melt/">Body Melt</a></li>
				<li class="has-image wrecker-2022" onclick="location.href='/2024/02/18/wrecker-2022/';"><a href="/2024/02/18/wrecker-2022/">Wrecker (2022)</a></li>
				<li class="has-image devils-express" onclick="location.href='/2019/12/01/devils-express/';"><a href="/2019/12/01/devils-express/">Devil’s Express</a></li>
				<li class="has-image executioner-2" onclick="location.href='/2021/06/20/executioner-part-ii/';"><a href="/2021/06/20/executioner-part-ii/">The Executioner, Part II</a></li>
				<li class="has-image aftermath" onclick="location.href='/2020/07/26/the-aftermath-1982/';"><a href="/2020/07/26/the-aftermath-1982/">The Aftermath</a></li>
				<li class="has-image blood-draculas-castle" onclick="location.href='/2020/10/17/blood-of-draculas-castle/';"><a href="/2020/10/17/blood-of-draculas-castle/">Blood of Dracula’s Castle</a></li>
				<li class="has-image forbidden-world" onclick="location.href='/2023/10/10/forbidden-world/';"><a href="/2023/10/10/forbidden-world/">Forbidden World</a></li>
				<li class="has-image leviathan" onclick="location.href='/2012/10/17/leviathan/';"><a href="/2012/10/17/leviathan/">Leviathan</a></li>
				<li class="has-image dead-heat" onclick="location.href='/2012/10/02/dead-heat-1988/';"><a href="/2012/10/02/dead-heat-1988/">Dead Heat (1988)</a></li>
				<li class="has-image werewolf-washington" onclick="location.href='/2020/10/11/werewolf-of-washington/';"><a href="/2020/10/11/werewolf-of-washington/">The Werewolf of Washington</a></li>
				<li class="has-image ghosts-mars" onclick="location.href='/2017/10/03/ghosts-of-mars/';"><a href="/2017/10/03/ghosts-of-mars/">Ghosts of Mars</a></li>
				<li class="has-image perfect-weapon" onclick="location.href='/2018/11/04/perfect-weapon/';"><a href="/2018/11/04/perfect-weapon/">The Perfect Weapon</a></li>
				<li class="has-image jason-x" onclick="location.href='/2017/10/13/jason-x/';"><a href="/2017/10/13/jason-x/">Jason X</a></li>
				<li class="has-image caged-heat" onclick="location.href='/2018/12/02/caged-heat/';"><a href="/2018/12/02/caged-heat/">Caged Heat</a></li>
				<li class="has-image zombi-3" onclick="location.href='/2022/10/20/zombi-3/';"><a href="/2022/10/20/zombi-3/">Zombi 3</a></li>
				<li class="has-image maniac-cop" onclick="location.href='/2017/10/21/maniac-cop/';"><a href="/2017/10/21/maniac-cop/">Maniac Cop</a></li>
				<li class="has-image timecop" onclick="location.href='/2017/09/03/timecop/';"><a href="/2017/09/03/timecop/">Timecop</a></li>
				<li class="has-image jaws-3" onclick="location.href='/2016/10/24/jaws-3-d/';"><a href="/2016/10/24/jaws-3-d/">Jaws 3-D</a></li>
				<li class="has-image virtuosity" onclick="location.href='/2021/03/07/virtuosity/';"><a href="/2021/03/07/virtuosity/">Virtuosity</a></li>
				<li class="has-image tango-cash" onclick="location.href='/2017/08/14/tango-cash/';"><a href="/2017/08/14/tango-cash/">Tango &amp; Cash</a></li>
				<li class="has-image devil-story" onclick="location.href='/2024/10/21/devil-story/';"><a href="/2024/10/21/devil-story/">Devil Story</a></li>
				<li class="has-image doom-annihilation" onclick="location.href='/2021/08/22/doom-annihilation/';"><a href="/2021/08/22/doom-annihilation/">Doom: Annihilation</a></li>
				<li class="has-image slipstream" onclick="location.href='/2023/04/02/slipstream/';"><a href="/2023/04/02/slipstream/">Slipstream</a></li>
				<li class="has-image vampires" onclick="location.href='/2009/10/25/vampires/';"><a href="/2009/10/25/vampires/">Vampires</a></li>
				<li class="has-image wheels-fire" onclick="location.href='/2022/12/11/wheels-of-fire/';"><a href="/2022/12/11/wheels-of-fire/">Wheels of Fire</a></li>
				<li class="has-image halloween-2-1981" onclick="location.href='/2010/10/31/halloween-2/';"><a href="/2010/10/31/halloween-2/">Halloween II (1981)</a></li>
				<li class="has-image beastmaster" onclick="location.href='/2017/12/10/beastmaster/';"><a href="/2017/12/10/beastmaster/">The Beastmaster</a></li>
				<li class="has-image killers-edge" onclick="location.href='/2018/03/18/the-killers-edge-aka-blood-money/';"><a href="/2018/03/18/the-killers-edge-aka-blood-money/">The Killers Edge</a></li>
				<li class="has-image inseminoid" onclick="location.href='/2023/10/20/inseminoid/';"><a href="/2023/10/20/inseminoid/">Inseminoid</a></li>
				<li class="has-image policewomen" onclick="location.href='/2020/08/16/policewomen/';"><a href="/2020/08/16/policewomen/">Policewomen</a></li>
				<li class="has-image nemesis-1992" onclick="location.href='/2023/01/08/nemesis-1992/';"><a href="/2023/01/08/nemesis-1992/">Nemesis (1992)</a></li>
				<li class="has-image damnation-alley" onclick="location.href='/2019/03/17/damnation-alley/';"><a href="/2019/03/17/damnation-alley/">Damnation Alley</a></li>
				<li class="has-image body-count-1995" onclick="location.href='/2025/01/19/body-count-1995/';"><a href="/2025/01/19/body-count-1995/">Body Count (1995)</a></li>
				<li class="has-image primal-2019" onclick="location.href='/2019/12/08/primal-2019/';"><a href="/2019/12/08/primal-2019/">Primal (2019)</a></li>
				<li class="has-image children-corn-2" onclick="location.href='/2021/10/10/children-corn-2/';"><a href="/2021/10/10/children-corn-2/">Children of the Corn II: The Final Sacrifice</a></li>
				<li class="has-image hell-living-dead" onclick="location.href='/2020/10/30/hell-of-the-living-dead/';"><a href="/2020/10/30/hell-of-the-living-dead/">Hell of the Living Dead</a></li>
				<li class="has-image frogs" onclick="location.href='/2019/10/21/frogs/';"><a href="/2019/10/21/frogs/">Frogs</a></li>
				<li class="has-image beginning-end" onclick="location.href='/2018/10/10/beginning-of-the-end/';"><a href="/2018/10/10/beginning-of-the-end/">Beginning of the End</a></li>
				<li class="has-image war-satellites" onclick="location.href='/2024/01/28/war-satellites/';"><a href="/2024/01/28/war-satellites/">War of the Satellites</a></li>
				<li class="has-image psychomania" onclick="location.href='/2017/05/21/psychomania/';"><a href="/2017/05/21/psychomania/">Psychomania</a></li>
				<li class="has-image equalizer-2000" onclick="location.href='/2023/02/06/equalizer-2000/';"><a href="/2023/02/06/equalizer-2000/">Equalizer 2000</a></li>
				<li class="has-image satanic-dracula" onclick="location.href='/2017/10/31/satanic-rites-of-dracula/';"><a href="/2017/10/31/satanic-rites-of-dracula/">The Satanic Rites of Dracula</a></li>
				<li class="has-image humanoids-deep" onclick="location.href='/2018/10/19/humanoids-from-the-deep/';"><a href="/2018/10/19/humanoids-from-the-deep/">Humanoids from the Deep</a></li>
				<li class="has-image friday-13th-3" onclick="location.href='/2009/10/12/friday-13th-3/';"><a href="/2009/10/12/friday-13th-3/">Friday the 13th Part 3</a></li>
				<li class="has-image cyber-tracker" onclick="location.href='/2018/04/24/cyber-tracker/';"><a href="/2018/04/24/cyber-tracker/">Cyber Tracker</a></li>
				<li class="has-image massacre-mafia-style" onclick="location.href='/2024/08/18/massacre-mafia-style/';"><a href="/2024/08/18/massacre-mafia-style/">Massacre Mafia Style</a></li>
				<li class="has-image speed-kills" onclick="location.href='/2021/03/28/speed-kills/';"><a href="/2021/03/28/speed-kills/">Speed Kills</a></li>
				<li class="has-image pieces" onclick="location.href='/2019/10/07/pieces/';"><a href="/2019/10/07/pieces/">Pieces</a></li>
				<li class="has-image my-bloody-valentine" onclick="location.href='/2013/10/22/my-bloody-valentine/';"><a href="/2013/10/22/my-bloody-valentine/">My Bloody Valentine (1981)</a></li>
				<li class="has-image chopping-mall" onclick="location.href='/2017/10/05/chopping-mall/';"><a href="/2017/10/05/chopping-mall/">Chopping Mall</a></li>
				<li class="has-image hands-steel" onclick="location.href='/2020/04/19/hands-of-steel/';"><a href="/2020/04/19/hands-of-steel/">Hands of Steel</a></li>
				<li class="has-image piranha-1978" onclick="location.href='/2019/10/09/piranha/';"><a href="/2019/10/09/piranha/">Piranha (1978)</a></li>
				<li class="has-image death-flight" onclick="location.href='/2021/11/07/death-flight/';"><a href="/2021/11/07/death-flight/">SST: Death Flight</a></li>
				<li class="has-image escape-bronx" onclick="location.href='/2016/11/20/escape-from-the-bronx/';"><a href="/2016/11/20/escape-from-the-bronx/">Escape from the Bronx</a></li>
				<li class="has-image silent-rage" onclick="location.href='/2018/05/06/silent-rage/';"><a href="/2018/05/06/silent-rage/">Silent Rage</a></li>
				<li class="has-image incredibly-strange" onclick="location.href='/2024/01/14/incredibly-strange-creatures/';"><a href="/2024/01/14/incredibly-strange-creatures/">The Incredibly Strange Creatures Who Stopped Living and Became Mixed-Up Zombies</a></li>
				<li class="has-image empire-ash-iii" onclick="location.href='/2020/09/27/empire-of-ash-iii/';"><a href="/2020/09/27/empire-of-ash-iii/">Empire of Ash III</a></li>
				<li class="has-image raw-deal" onclick="location.href='/2014/05/08/raw-deal/';"><a href="/2014/05/08/raw-deal/">Raw Deal</a></li>
				<li class="has-image terror-beverly" onclick="location.href='/2022/01/16/terror-in-beverly-hills/';"><a href="/2022/01/16/terror-in-beverly-hills/">Terror in Beverly Hills</a></li>
				<li class="has-image last-finest" onclick="location.href='/2025/02/02/last-of-the-finest/';"><a href="/2025/02/02/last-of-the-finest/">The Last of the Finest</a></li>
				<li class="has-image motel-hell" onclick="location.href='/2021/10/28/motel-hell/';"><a href="/2021/10/28/motel-hell/">Motel Hell</a></li>
				<li class="has-image death-chase" onclick="location.href='/2024/04/21/death-chase/';"><a href="/2024/04/21/death-chase/">Death Chase</a></li>
				<li class="has-image blood-sabbath" onclick="location.href='/2020/10/13/blood-sabbath/';"><a href="/2020/10/13/blood-sabbath/">Blood Sabbath</a></li>
				<li class="has-image turkey-shoot" onclick="location.href='/2019/06/30/turkey-shoot/';"><a href="/2019/06/30/turkey-shoot/">Turkey Shoot</a></li>
				<li class="has-image seed-chucky" onclick="location.href='/2021/10/17/seed-of-chucky/';"><a href="/2021/10/17/seed-of-chucky/">Seed of Chucky</a></li>
				<li class="has-image olympus-fallen" onclick="location.href='/2013/03/24/olympus-has-fallen/';"><a href="/2013/03/24/olympus-has-fallen/">Olympus Has Fallen</a></li>
				<li class="has-image fiend-face" onclick="location.href='/2019/10/24/fiend-without-a-face/';"><a href="/2019/10/24/fiend-without-a-face/">Fiend Without a Face</a></li>
				<li class="has-image bloody-pit" onclick="location.href='/2021/10/20/bloody-pit-of-horror/';"><a href="/2021/10/20/bloody-pit-of-horror/">Bloody Pit of Horror</a></li>
				<li class="has-image deepstar-six" onclick="location.href='/2013/10/21/deepstar-six/';"><a href="/2013/10/21/deepstar-six/">DeepStar Six</a></li>
				<li class="has-image killing-spree" onclick="location.href='/2022/10/01/killing-spree/';"><a href="/2022/10/01/killing-spree/">Killing Spree</a></li>
				<li class="has-image impulse-1974" onclick="location.href='/2019/10/23/impulse-1974/';"><a href="/2019/10/23/impulse-1974/">Impulse (1974)</a></li>
				<li class="has-image battle-lost-planet" onclick="location.href='/2022/11/27/battle-lost-planet/';"><a href="/2022/11/27/battle-lost-planet/">Battle for the Lost Planet</a></li>
				<li class="has-image future-force" onclick="location.href='/2023/11/19/future-force/';"><a href="/2023/11/19/future-force/">Future Force</a></li>
				<li class="has-image final-score" onclick="location.href='/2019/03/31/final-score/';"><a href="/2019/03/31/final-score/">Final Score</a></li>
				<li class="has-image winged-serpent" onclick="location.href='/2018/10/28/q-the-winged-serpent/';"><a href="/2018/10/28/q-the-winged-serpent/">Q — The Winged Serpent</a></li>
				<li class="has-image rawhead-rex" onclick="location.href='/2021/10/09/rawhead-rex/';"><a href="/2021/10/09/rawhead-rex/">Rawhead Rex</a></li>
				<li class="has-image endgame-1983" onclick="location.href='/2023/07/30/endgame-1983/';"><a href="/2023/07/30/endgame-1983/">Endgame (1983)</a></li>
				<li class="has-image shape-things" onclick="location.href='/2018/07/29/shape-of-things-to-come/';"><a href="/2018/07/29/shape-of-things-to-come/">The Shape of Things to Come</a></li>
				<li class="has-image night-demons" onclick="location.href='/2021/10/22/night-of-the-demons/';"><a href="/2021/10/22/night-of-the-demons/">Night of the Demons (1988)</a></li>
				<li class="has-image city-on-fire" onclick="location.href='/2018/08/05/city-on-fire/';"><a href="/2018/08/05/city-on-fire/">City on Fire</a></li>
				<li class="has-image freddy-jason" onclick="location.href='/2009/10/29/freddy-vs-jason/';"><a href="/2009/10/29/freddy-vs-jason/">Freddy vs. Jason</a></li>
				<li class="has-image nuke-high" onclick="location.href='/2010/05/17/nuke-em-high/';"><a href="/2010/05/17/nuke-em-high/">Class of Nuke ’Em High</a></li>
				<li class="has-image halloween-resurrection" onclick="location.href='/2016/10/31/halloween-resurrection/';"><a href="/2016/10/31/halloween-resurrection/">Halloween: Resurrection</a></li>
				<li class="has-image earth-spider" onclick="location.href='/2018/10/15/earth-vs-the-spider/';"><a href="/2018/10/15/earth-vs-the-spider/">Earth vs. The Spider</a></li>
				<li class="has-image friday-13th" onclick="location.href='/2009/10/01/friday-13th/';"><a href="/2009/10/01/friday-13th/">Friday the 13th</a></li>
				<li class="has-image blood-rage" onclick="location.href='/2022/10/02/blood-rage/';"><a href="/2022/10/02/blood-rage/">Blood Rage</a></li>
				<li class="has-image freejack" onclick="location.href='/2017/11/05/freejack/';"><a href="/2017/11/05/freejack/">Freejack</a></li>
				<li class="has-image slumber-party-massacre" onclick="location.href='/2019/10/05/slumber-party-massacre/';"><a href="/2019/10/05/slumber-party-massacre/">The Slumber Party Massacre</a></li>
				<li class="has-image elm-street-5" onclick="location.href='/2021/10/07/elm-street-5/';"><a href="/2021/10/07/elm-street-5/">A Nightmare on Elm Street 5: The Dream Child</a></li>
				<li class="has-image chrome-leather" onclick="location.href='/2019/04/07/chrome-and-hot-leather/';"><a href="/2019/04/07/chrome-and-hot-leather/">Chrome and Hot Leather</a></li>
				<li class="has-image chud" onclick="location.href='/2019/10/29/chud/';"><a href="/2019/10/29/chud/">C.H.U.D.</a></li>
				<li class="has-image childs-play-3" onclick="location.href='/2021/10/15/childs-play-3/';"><a href="/2021/10/15/childs-play-3/">Child’s Play 3</a></li>
				<li class="has-image nine-deaths" onclick="location.href='/2022/07/31/nine-deaths-of-the-ninja/';"><a href="/2022/07/31/nine-deaths-of-the-ninja/">Nine Deaths of the Ninja</a></li>
				<li class="has-image future-zone" onclick="location.href='/2023/12/10/future-zone/';"><a href="/2023/12/10/future-zone/">Future Zone</a></li>
				<li class="has-image squirm" onclick="location.href='/2020/10/02/squirm/';"><a href="/2020/10/02/squirm/">Squirm</a></li>
				<li class="has-image mutilator" onclick="location.href='/2023/10/08/mutilator/';"><a href="/2023/10/08/mutilator/">The Mutilator</a></li>
				<li class="has-image things" onclick="location.href='/2022/10/14/things/';"><a href="/2022/10/14/things/">Things</a></li>
				<li class="has-image i-am-legend" onclick="location.href='/2009/01/09/i-am-legend/';"><a href="/2009/01/09/i-am-legend/">I Am Legend</a></li>
				<li class="has-image last-stand" onclick="location.href='/2013/06/23/last-stand/';"><a href="/2013/06/23/last-stand/">The Last Stand</a></li>
				<li class="has-image droid-gunner" onclick="location.href='/2019/07/28/droid-gunner/';"><a href="/2019/07/28/droid-gunner/">Droid Gunner</a></li>
				<li class="has-image colony" onclick="location.href='/2013/10/16/colony/';"><a href="/2013/10/16/colony/">The Colony</a></li>
				<li class="has-image deep-rising" onclick="location.href='/2009/08/11/deep-rising/';"><a href="/2009/08/11/deep-rising/">Deep Rising</a></li>
				<li class="has-image ghost-rider" onclick="location.href='/2020/02/02/ghost-rider/';"><a href="/2020/02/02/ghost-rider/">Ghost Rider</a></li>
				<li class="has-image escape-la" onclick="location.href='/2011/11/06/escape-from-la/';"><a href="/2011/11/06/escape-from-la/">Escape from L.A.</a></li>
				<li class="has-image tentacles" onclick="location.href='/2023/10/08/tentacles/';"><a href="/2023/10/08/tentacles/">Tentacles</a></li>
				<li class="has-image future-kick" onclick="location.href='/2023/01/29/future-kick/';"><a href="/2023/01/29/future-kick/">Future Kick</a></li>
				<li class="has-image angel-town" onclick="location.href='/2021/02/07/angel-town/';"><a href="/2021/02/07/angel-town/">Angel Town</a></li>
				<li class="has-image critters-2" onclick="location.href='/2021/10/21/critters-2/';"><a href="/2021/10/21/critters-2/">Critters 2</a></li>
				<li class="has-image kidnapping-president" onclick="location.href='/2021/03/21/kidnapping-president/';"><a href="/2021/03/21/kidnapping-president/">The Kidnapping of the President</a></li>
				<li class="has-image enemies-closer" onclick="location.href='/2024/01/21/enemies-closer-2013/';"><a href="/2024/01/21/enemies-closer-2013/">Enemies Closer (2013)</a></li>
				<li class="has-image raise-titanic" onclick="location.href='/2011/01/24/raise-the-titanic/';"><a href="/2011/01/24/raise-the-titanic/">Raise the Titanic</a></li>
				<li class="has-image san-andreas" onclick="location.href='/2015/10/15/san-andreas/';"><a href="/2015/10/15/san-andreas/">San Andreas</a></li>
				<li class="has-image dance-dead" onclick="location.href='/2010/10/04/dance-dead/';"><a href="/2010/10/04/dance-dead/">Dance of the Dead</a></li>
				<li class="has-image dead-hate-living" onclick="location.href='/2019/10/12/dead-hate-the-living/';"><a href="/2019/10/12/dead-hate-the-living/">The Dead Hate the Living!</a></li>
				<li class="has-image melting-man" onclick="location.href='/2014/10/21/incredible-melting-man/';"><a href="/2014/10/21/incredible-melting-man/">The Incredible Melting Man</a></li>
				<li class="has-image truck-stop" onclick="location.href='/2019/04/21/truck-stop-women/';"><a href="/2019/04/21/truck-stop-women/">Truck Stop Women</a></li>
				<li class="has-image children-corn-3" onclick="location.href='/2021/10/11/children-corn-3/';"><a href="/2021/10/11/children-corn-3/">Children of the Corn III: Urban Harvest</a></li>
				<li class="has-image maniac-cop-2" onclick="location.href='/2010/10/12/maniac-cop-2/';"><a href="/2010/10/12/maniac-cop-2/">Maniac Cop 2</a></li>
				<li class="has-image fourgot10" onclick="location.href='/2024/07/28/4got10/';"><a href="/2024/07/28/4got10/">4GOT10</a></li>
				<li class="has-image bone-dry" onclick="location.href='/2018/12/23/bone-dry/';"><a href="/2018/12/23/bone-dry/">Bone Dry</a></li>
				<li class="has-image giant-leeches" onclick="location.href='/2018/10/20/attack-of-the-giant-leeches/';"><a href="/2018/10/20/attack-of-the-giant-leeches/">Attack of the Giant Leeches</a></li>
				<li class="has-image death-machines" onclick="location.href='/2018/04/01/death-machines/';"><a href="/2018/04/01/death-machines/">Death Machines</a></li>
				<li class="has-image gila-monster" onclick="location.href='/2018/10/18/giant-gila-monster/';"><a href="/2018/10/18/giant-gila-monster/">The Giant Gila Monster</a></li>
				<li class="has-image savage-hunt" onclick="location.href='/2024/11/17/savage-hunt/';"><a href="/2024/11/17/savage-hunt/">Savage Hunt</a></li>
				<li class="has-image amusement-park" onclick="location.href='/2021/06/27/the-amusement-park/';"><a href="/2021/06/27/the-amusement-park/">The Amusement Park</a></li>
				<li class="has-image next-film" onclick="location.href='/2019/11/24/next-2/';"><a href="/2019/11/24/next-2/">Next</a></li>
				<li class="has-image rapid-fire-1989" onclick="location.href='/2024/05/05/rapid-fire-1989/';"><a href="/2024/05/05/rapid-fire-1989/">Rapid Fire (1989)</a></li>
				<li class="has-image soldier" onclick="location.href='/2009/08/30/soldier/';"><a href="/2009/08/30/soldier/">Soldier</a></li>
				<li class="has-image horror-express" onclick="location.href='/2009/01/19/horror-express/';"><a href="/2009/01/19/horror-express/">Horror Express</a></li>
				<li class="has-image terminator-ii" onclick="location.href='/2025/06/01/terminator-ii/';"><a href="/2025/06/01/terminator-ii/">Terminator II</a></li>
				<li class="has-image alligator-people" onclick="location.href='/2023/10/25/alligator-people/';"><a href="/2023/10/25/alligator-people/">The Alligator People</a></li>
				<li class="has-image red-sonja" onclick="location.href='/2014/05/06/red-sonja/';"><a href="/2014/05/06/red-sonja/">Red Sonja</a></li>
				<li class="has-image id4-resurgence" onclick="location.href='/2016/11/06/id4-resurgence/';"><a href="/2016/11/06/id4-resurgence/">Independence Day: Resurgence</a></li>
				<li class="has-image food-gods" onclick="location.href='/2018/10/25/food-of-the-gods/';"><a href="/2018/10/25/food-of-the-gods/">The Food of the Gods</a></li>
				<li class="has-image burial-ground" onclick="location.href='/2017/10/06/burial-ground/';"><a href="/2017/10/06/burial-ground/">Burial Ground</a></li>
				<li class="has-image octagon" onclick="location.href='/2019/05/05/octagon/';"><a href="/2019/05/05/octagon/">The Octagon</a></li>
				<li class="has-image fury-wolfman" onclick="location.href='/2021/10/24/fury-of-the-wolfman/';"><a href="/2021/10/24/fury-of-the-wolfman/">Fury of the Wolfman</a></li>
				<li class="has-image castle-falls" onclick="location.href='/2024/04/28/castle-falls/';"><a href="/2024/04/28/castle-falls/">Castle Falls</a></li>
				<li class="has-image humanity-bureau" onclick="location.href='/2018/08/13/humanity-bureau/';"><a href="/2018/08/13/humanity-bureau/">The Humanity Bureau</a></li>
				<li class="has-image critters-4" onclick="location.href='/2021/10/23/critters-4/';"><a href="/2021/10/23/critters-4/">Critters 4</a></li>
				<li class="has-image hellcats" onclick="location.href='/2024/03/24/hellcats-1968/';"><a href="/2024/03/24/hellcats-1968/">The Hellcats (1968)</a></li>
				<li class="has-image lockout-2012" onclick="location.href='/2025/02/09/lockout-2012/';"><a href="/2025/02/09/lockout-2012/">Lockout (2012)</a></li>
				<li class="has-image ice-twisters" onclick="location.href='/2022/02/06/ice-twisters/';"><a href="/2022/02/06/ice-twisters/">Ice Twisters</a></li>
				<li class="has-image mach-2" onclick="location.href='/2019/04/28/mach-2/';"><a href="/2019/04/28/mach-2/">Mach 2</a></li>
				<li class="has-image chilling" onclick="location.href='/2017/01/15/the-chilling/';"><a href="/2017/01/15/the-chilling/">The Chilling</a></li>
				<li class="has-image no-escape-no-return" onclick="location.href='/2020/08/02/no-escape-no-return/';"><a href="/2020/08/02/no-escape-no-return/">No Escape No Return</a></li>
				<li class="has-image specialist-1975" onclick="location.href='/2021/08/01/specialist-1975/';"><a href="/2021/08/01/specialist-1975/">The Specialist (1975)</a></li>
				<li class="has-image amityville-3d" onclick="location.href='/2021/10/02/amityville-3d/';"><a href="/2021/10/02/amityville-3d/">Amityville 3-D</a></li>
				<li class="has-image dracula-3000" onclick="location.href='/2014/10/03/dracula-3000/';"><a href="/2014/10/03/dracula-3000/">Dracula 3000</a></li>
				<li class="has-image empire-ants" onclick="location.href='/2018/10/27/empire-of-the-ants/';"><a href="/2018/10/27/empire-of-the-ants/">Empire of the Ants</a></li>
				<li class="has-image god-told" onclick="location.href='/2018/10/13/god-told-me-to/';"><a href="/2018/10/13/god-told-me-to/">God Told Me To</a></li>
				<li class="has-image split-second" onclick="location.href='/2019/10/19/split-second/';"><a href="/2019/10/19/split-second/">Split Second</a></li>
				<li class="has-image end-days" onclick="location.href='/2014/05/21/end-of-days/';"><a href="/2014/05/21/end-of-days/">End of Days</a></li>
				<li class="has-image coastliner" onclick="location.href='/2014/12/22/disaster-on-the-coastliner/';"><a href="/2014/12/22/disaster-on-the-coastliner/">Disaster on the Coastliner</a></li>
				<li class="has-image invaders-mars" onclick="location.href='/2019/10/04/invaders-mars/';"><a href="/2019/10/04/invaders-mars/">Invaders from Mars (1953)</a></li>
				<li class="has-image matango" onclick="location.href='/2018/10/14/matango/';"><a href="/2018/10/14/matango/">Matango</a></li>
				<li class="has-image manster" onclick="location.href='/2019/10/28/manster/';"><a href="/2019/10/28/manster/">The Manster</a></li>
				<li class="has-image mary-lou" onclick="location.href='/2014/10/25/prom-night-ii/';"><a href="/2014/10/25/prom-night-ii/">Hello Mary Lou: Prom Night II</a></li>
				<li class="has-image prowler" onclick="location.href='/2018/10/28/the-prowler/';"><a href="/2018/10/28/the-prowler/">The Prowler</a></li>
				<li class="has-image country-blue" onclick="location.href='/2024/11/24/country-blue/';"><a href="/2024/11/24/country-blue/">Country Blue</a></li>
				<li class="has-image truth-dare" onclick="location.href='/2022/10/10/truth-or-dare/';"><a href="/2022/10/10/truth-or-dare/">Truth or Dare?</a></li>
				<li class="has-image point-terror" onclick="location.href='/2020/05/10/point-of-terror/';"><a href="/2020/05/10/point-of-terror/">Point of Terror</a></li>
				<li class="has-image womens-massacre" onclick="location.href='/2017/09/17/womens-prison-massacre/';"><a href="/2017/09/17/womens-prison-massacre/">Women’s Prison Massacre</a></li>
				<li class="has-image meteor" onclick="location.href='/2018/04/29/meteor/';"><a href="/2018/04/29/meteor/">Meteor</a></li>
				<li class="has-image creature-walks" onclick="location.href='/2019/10/14/creature-walks-among-us/';"><a href="/2019/10/14/creature-walks-among-us/">The Creature Walks Among Us</a></li>
				<li class="has-image hollow-mountain" onclick="location.href='/2018/10/07/beast-of-hollow-mountain/';"><a href="/2018/10/07/beast-of-hollow-mountain/">The Beast of Hollow Mountain</a></li>
				<li class="has-image invasion-usa" onclick="location.href='/2019/03/10/invasion-usa/';"><a href="/2019/03/10/invasion-usa/">Invasion U.S.A.</a></li>
				<li class="has-image savage-dawn" onclick="location.href='/2024/07/07/savage-dawn/';"><a href="/2024/07/07/savage-dawn/">Savage Dawn</a></li>
				<li class="has-image hell-wheels" onclick="location.href='/2020/05/17/hell-on-wheels/';"><a href="/2020/05/17/hell-on-wheels/">Hell on Wheels</a></li>
				<li class="has-image alien-predator" onclick="location.href='/2016/10/12/alien-vs-predator/';"><a href="/2016/10/12/alien-vs-predator/">Alien vs. Predator</a></li>
				<li class="has-image bushwick" onclick="location.href='/2024/03/03/bushwick/';"><a href="/2024/03/03/bushwick/">Bushwick</a></li>
				<li class="has-image in-hell" onclick="location.href='/2024/02/04/in-hell/';"><a href="/2024/02/04/in-hell/">In Hell</a></li>
				<li class="has-image devils-rain" onclick="location.href='/2023/10/09/devils-rain/';"><a href="/2023/10/09/devils-rain/">The Devil’s Rain</a></li>
				<li class="has-image cards-death" onclick="location.href='/2022/10/17/cards-death/';"><a href="/2022/10/17/cards-death/">Cards of Death</a></li>
				<li class="has-image tuareg" onclick="location.href='/2020/11/29/tuareg/';"><a href="/2020/11/29/tuareg/">Tuareg: The Desert Warrior</a></li>
				<li class="has-image giant-claw" onclick="location.href='/2018/10/09/giant-claw/';"><a href="/2018/10/09/giant-claw/">The Giant Claw</a></li>
				<li class="has-image horror-high" onclick="location.href='/2022/10/16/horror-high/';"><a href="/2022/10/16/horror-high/">Horror High</a></li>
				<li class="has-image demolitionist" onclick="location.href='/2021/12/26/demolitionist/';"><a href="/2021/12/26/demolitionist/">The Demolitionist</a></li>
				<li class="has-image mountaintop-motel-massacre" onclick="location.href='/2023/10/16/mountaintop-motel-massacre/';"><a href="/2023/10/16/mountaintop-motel-massacre/">Mountaintop Motel Massacre</a></li>
				<li class="has-image lost-empire" onclick="location.href='/2023/02/19/lost-empire/';"><a href="/2023/02/19/lost-empire/">The Lost Empire</a></li>
				<li class="has-image triffids-1963" onclick="location.href='/2024/10/19/triffids-1963/';"><a href="/2024/10/19/triffids-1963/">The Day of the Triffids (1963)</a></li>
				<li class="has-image martial-law" onclick="location.href='/2022/03/20/martial-law/';"><a href="/2022/03/20/martial-law/">Martial Law (1990)</a></li>
				<li class="has-image hellraiser-hellworld" onclick="location.href='/2021/10/28/hellraiser-hellworld/';"><a href="/2021/10/28/hellraiser-hellworld/">Hellraiser VIII: Hellworld</a></li>
				<li class="has-image skeptic" onclick="location.href='/2013/10/16/skeptic/';"><a href="/2013/10/16/skeptic/">The Skeptic</a></li>
				<li class="has-image deadly-mantis" onclick="location.href='/2018/10/08/deadly-mantis/';"><a href="/2018/10/08/deadly-mantis/">The Deadly Mantis</a></li>
				<li class="has-image man-x" onclick="location.href='/2019/10/01/the-man-from-planet-x/';"><a href="/2019/10/01/the-man-from-planet-x/">The Man from Planet X</a></li>
				<li class="has-image city-dead" onclick="location.href='/2018/10/02/city-of-the-living-dead/';"><a href="/2018/10/02/city-of-the-living-dead/">City of the Living Dead</a></li>
				<li class="has-image driving-force" onclick="location.href='/2023/06/25/driving-force/';"><a href="/2023/06/25/driving-force/">Driving Force</a></li>
				<li class="has-image bug" onclick="location.href='/2016/10/17/bug-1975/';"><a href="/2016/10/17/bug-1975/">Bug (1975)</a></li>
				<li class="has-image revenge-creature" onclick="location.href='/2019/10/11/revenge-of-the-creature/';"><a href="/2019/10/11/revenge-of-the-creature/">Revenge of the Creature</a></li>
				<li class="has-image devils-hand" onclick="location.href='/2020/10/21/devils-hand/';"><a href="/2020/10/21/devils-hand/">The Devil’s Hand</a></li>
				<li class="has-image resident-evil" onclick="location.href='/2012/10/08/resident-evil/';"><a href="/2012/10/08/resident-evil/">Resident Evil</a></li>
				<li class="has-image anacondas" onclick="location.href='/2020/10/03/anacondas/';"><a href="/2020/10/03/anacondas/">Anacondas: The Hunt for the Blood Orchid</a></li>
				<li class="has-image when-time" onclick="location.href='/2017/05/07/when-time-ran-out/';"><a href="/2017/05/07/when-time-ran-out/">When Time Ran Out</a></li>
				<li class="has-image hallucinations" onclick="location.href='//2022/10/05/hallucinations/';"><a href="/2022/10/05/hallucinations/">Hallucinations</a></li>
				<li class="has-image return-fly" onclick="location.href='/2019/10/30/return-fly/';"><a href="/2019/10/30/return-fly/">Return of the Fly</a></li>
				<li class="has-image caged-heat-3000" onclick="location.href='/2024/06/23/caged-heat-3000/';"><a href="/2024/06/23/caged-heat-3000/">Caged Heat 3000</a></li>
				<li class="has-image atomic-eden" onclick="location.href='/2023/12/03/atomic-eden/';"><a href="/2023/12/03/atomic-eden/">Atomic Eden</a></li>
				<li class="has-image day-world-ended" onclick="location.href='/2021/12/05/day-world-ended/';"><a href="/2021/12/05/day-world-ended/">Day the World Ended</a></li>
				<li class="has-image pick-up" onclick="location.href='/2020/12/13/pick-up/';"><a href="/2020/12/13/pick-up/">Pick-up</a></li>
				<li class="has-image elm-street-4" onclick="location.href='/2021/10/06/elm-street-4/';"><a href="/2021/10/06/elm-street-4/">A Nightmare on Elm Street 4: The Dream Master</a></li>
				<li class="has-image eye-2008" onclick="location.href='/2019/10/04/the-eye/';"><a href="/2019/10/04/the-eye/">The Eye (2008)</a></li>
				<li class="has-image monster-world" onclick="location.href='/2019/10/19/monster-that-challenged-the-world/';"><a href="/2019/10/19/monster-that-challenged-the-world/">The Monster That Challenged the World</a></li>
				<li class="has-image galaxy-terror" onclick="location.href='/2014/10/17/galaxy-of-terror/';"><a href="/2014/10/17/galaxy-of-terror/">Galaxy of Terror</a></li>
				<li class="has-image resident-apocalypse" onclick="location.href='/2014/10/06/apocalypse/';"><a href="/2014/10/06/apocalypse/">Resident Evil: Apocalypse</a></li>
				<li class="has-image she-beast" onclick="location.href='/2023/10/05/she-beast/';"><a href="/2023/10/05/she-beast/">The She Beast</a></li>
				<li class="has-image blood-mania" onclick="location.href='/2020/03/22/blood-mania/';"><a href="/2020/03/22/blood-mania/">Blood Mania</a></li>
				<li class="has-image it-conquered" onclick="location.href='/2019/10/16/it-conquered-the-world/';"><a href="/2019/10/16/it-conquered-the-world/">It Conquered the World</a></li>
				<li class="has-image exterminators-3000" onclick="location.href='/2023/02/26/exterminators-year-3000/';"><a href="/2023/02/26/exterminators-year-3000/">The Exterminators of the Year 3000</a></li>
				<li class="has-image witchery" onclick="location.href='/2023/10/29/witchery/';"><a href="/2023/10/29/witchery/">Witchery</a></li>
				<li class="has-image blue-money" onclick="location.href='/2024/03/10/blue-money/';"><a href="/2024/03/10/blue-money/">Blue Money (1972)</a></li>
				<li class="has-image cyborg-x" onclick="location.href='/2019/01/13/cyborg-x/';"><a href="/2019/01/13/cyborg-x/">Cyborg X</a></li>
				<li class="has-image malenka" onclick="location.href='/2021/10/03/fangs-of-the-living-dead/';"><a href="/2021/10/03/fangs-of-the-living-dead/">Fangs of the Living Dead</a></li>
				<li class="has-image hellraiser-4" onclick="location.href='/2021/10/24/hellraiser-bloodline/';"><a href="/2021/10/24/hellraiser-bloodline/">Hellraiser IV: Bloodline</a></li>
				<li class="has-image drive-angry" onclick="location.href='/2022/12/04/drive-angry/';"><a href="/2022/12/04/drive-angry/">Drive Angry</a></li>
				<li class="has-image return-dead-2" onclick="location.href='/2016/10/08/return-dead-ii/';"><a href="/2016/10/08/return-dead-ii/">Return of the Living Dead Part II</a></li>
				<li class="has-image cosmos-war" onclick="location.href='/2018/02/18/cosmos/';"><a href="/2018/02/18/cosmos/">Cosmos: War of the Planets</a></li>
				<li class="has-image leprechaun-4" onclick="location.href='/2021/10/20/leprechaun-4/';"><a href="/2021/10/20/leprechaun-4/">Leprechaun 4: In Space</a></li>
				<li class="has-image escape-plan-extractors" onclick="location.href='/2020/08/23/escape-plan-the-extractors/';"><a href="/2020/08/23/escape-plan-the-extractors/">Escape Plan: The Extractors</a></li>
				<li class="has-image creepozoids" onclick="location.href='/2023/10/19/creepozoids/';"><a href="/2023/10/19/creepozoids/">Creepozoids</a></li>
				<li class="has-image being" onclick="location.href='/2018/10/21/the-being/';"><a href="/2018/10/21/the-being/">The Being</a></li>
				<li class="has-image last-shark" onclick="location.href='/2017/02/19/last-shark/';"><a href="/2017/02/19/last-shark/">The Last Shark</a></li>
				<li class="has-image amityville-ii" onclick="location.href='/2021/10/01/amityville-ii/';"><a href="/2021/10/01/amityville-ii/">Amityville II: The Possession</a></li>
				<li class="has-image colossal-beast" onclick="location.href='/2018/10/14/war-of-the-colossal-beast/';"><a href="/2018/10/14/war-of-the-colossal-beast/">War of the Colossal Beast</a></li>
				<li class="has-image resident-extinction" onclick="location.href='/2008/06/09/resident-evil-extinction/';"><a href="/2008/06/09/resident-evil-extinction/">Resident Evil: Extinction</a></li>
				<li class="has-image kind-strangers" onclick="location.href='/2025/03/09/all-the-kind-strangers/';"><a href="/2025/03/09/all-the-kind-strangers/">All the Kind Strangers</a></li>
				<li class="has-image detour" onclick="location.href='/2018/11/18/detour/';"><a href="/2018/11/18/detour/">Detour</a></li>
				<li class="has-image tingler" onclick="location.href='/2019/10/27/the-tingler/';"><a href="/2019/10/27/the-tingler/">The Tingler</a></li>
				<li class="has-image cosmic-sin" onclick="location.href='/2022/02/20/cosmic-sin/';"><a href="/2022/02/20/cosmic-sin/">Cosmic Sin</a></li>
				<li class="has-image critters-3" onclick="location.href='/2021/10/22/critters-3/';"><a href="/2021/10/22/critters-3/">Critters 3</a></li>
				<li class="has-image paganini-horror" onclick="location.href='/2023/10/31/paganini-horror/';"><a href="/2023/10/31/paganini-horror/">Paganini Horror</a></li>
				<li class="has-image inmate-zero" onclick="location.href='/2020/10/14/inmate-zero/';"><a href="/2020/10/14/inmate-zero/">Inmate Zero</a></li>
				<li class="has-image growth" onclick="location.href='/2010/10/03/growth/';"><a href="/2010/10/03/growth/">Growth</a></li>
				<li class="has-image resident-retribution" onclick="location.href='/2013/10/01/resident-evil-retribution/';"><a href="/2013/10/01/resident-evil-retribution/">Resident Evil: Retribution</a></li>
				<li class="has-image nightmare-2010" onclick="location.href='/2010/10/15/elm-street-2010/';"><a href="/2010/10/15/elm-street-2010/">A Nightmare on Elm Street (2010)</a></li>
				<li class="has-image piranha-3d" onclick="location.href='/2011/10/05/piranha-3d/';"><a href="/2011/10/05/piranha-3d/">Piranha 3D</a></li>
				<li class="has-image new-barbarians" onclick="location.href='/2016/12/11/the-new-barbarians/';"><a href="/2016/12/11/the-new-barbarians/">The New Barbarians</a></li>
				<li class="has-image doom" onclick="location.href='/2008/06/06/doom/';"><a href="/2008/06/06/doom/">Doom</a></li>
				<li class="has-image colossal-man" onclick="location.href='/2018/10/13/amazing-colossal-man/';"><a href="/2018/10/13/amazing-colossal-man/">The Amazing Colossal Man</a></li>
				<li class="has-image samurai-cop" onclick="location.href='/2019/06/02/samurai-cop/';"><a href="/2019/06/02/samurai-cop/">Samurai Cop</a></li>
				<li class="has-image splatter-farm" onclick="location.href='/2022/10/03/splatter-farm/';"><a href="/2022/10/03/splatter-farm/">Splatter Farm</a></li>
				<li class="has-image sledgehammer" onclick="location.href='/2022/10/15/sledgehammer/';"><a href="/2022/10/15/sledgehammer/">Sledgehammer</a></li>
				<li class="has-image bride-gorilla" onclick="location.href='/2019/10/03/bride-gorilla/';"><a href="/2019/10/03/bride-gorilla/">Bride of the Gorilla</a></li>
				<li class="has-image terrified" onclick="location.href='/2020/10/19/terrified/';"><a href="/2020/10/19/terrified/">Terrified</a></li>
				<li class="has-image ghosts-georgia" onclick="location.href='/2013/10/10/ghosts-of-georgia/';"><a href="/2013/10/10/ghosts-of-georgia/">The Haunting in Connecticut 2: Ghosts of Georgia</a></li>
				<li class="has-image rats-terror" onclick="location.href='/2019/10/17/rats-night-of-terror/';"><a href="/2019/10/17/rats-night-of-terror/">Rats: Night of Terror</a></li>
				<li class="has-image slime-city-massacre" onclick="location.href='/2023/10/17/slime-city-massacre/';"><a href="/2023/10/17/slime-city-massacre/">Slime City Massacre</a></li>
				<li class="has-image angels-city" onclick="location.href='/2025/02/16/angels-of-the-city/';"><a href="/2025/02/16/angels-of-the-city/">Angels of the City</a></li>
				<li class="has-image crab-monsters" onclick="location.href='/2014/10/15/crab-monsters/';"><a href="/2014/10/15/crab-monsters/">Attack of the Crab Monsters</a></li>
				<li class="has-image raiders-atlantis" onclick="location.href='/2017/07/09/raiders-of-atlantis/';"><a href="/2017/07/09/raiders-of-atlantis/">The Raiders of Atlantis</a></li>
				<li class="has-image proteus-1995" onclick="location.href='/2024/10/24/proteus-1995/';"><a href="/2024/10/24/proteus-1995/">Proteus (1995)</a></li>
				<li class="has-image mindkiller" onclick="location.href='/2023/10/22/mindkiller/';"><a href="/2023/10/22/mindkiller/">Mindkiller</a></li>
				<li class="has-image prince-darkness" onclick="location.href='/2008/12/29/prince-of-darkness/';"><a href="/2008/12/29/prince-of-darkness/">Prince of Darkness</a></li>
				<li class="has-image shadowzone" onclick="location.href='/2024/10/04/shadowzone/';"><a href="/2024/10/04/shadowzone/">Shadowzone</a></li>
				<li class="has-image anthropophagus" onclick="location.href='/2023/10/05/anthropophagus/';"><a href="/2023/10/05/anthropophagus/">Anthropophagus</a></li>
				<li class="has-image retrograde" onclick="location.href='/2022/11/13/retrograde/';"><a href="/2022/11/13/retrograde/">Retrograde</a></li>
				<li class="has-image assignment" onclick="location.href='/2022/02/13/assignment-outer-space/';"><a href="/2022/02/13/assignment-outer-space/">Assignment: Outer Space</a></li>
				<li class="has-image cannibal-campout" onclick="location.href='/2024/10/08/cannibal-campout/';"><a href="/2024/10/08/cannibal-campout/">Cannibal Campout</a></li>
				<li class="has-image boggy-creek" onclick="location.href='/2019/10/11/boggy-creek/';"><a href="/2019/10/11/boggy-creek/">The Legend of Boggy Creek</a></li>
				<li class="has-image redneck-zombies" onclick="location.href='/2022/10/31/redneck-zombies/';"><a href="/2022/10/31/redneck-zombies/">Redneck Zombies</a></li>
				<li class="has-image cocktail" onclick="location.href='/2020/07/12/cocktail/';"><a href="/2020/07/12/cocktail/">Cocktail</a></li>
				<li class="has-image battletruck" onclick="location.href='/2020/05/03/battletruck/';"><a href="/2020/05/03/battletruck/">Battletruck</a></li>
				<li class="has-image hellraiser-judgement" onclick="location.href='/2021/10/30/hellraiser-judgement/';"><a href="/2021/10/30/hellraiser-judgement/">Hellraiser: Judgement</a></li>
				<li class="has-image shakma" onclick="location.href='/2022/10/26/shakma/';"><a href="/2022/10/26/shakma/">Shakma</a></li>
				<li class="has-image gargoyles" onclick="location.href='/2024/10/06/gargoyles/';"><a href="/2024/10/06/gargoyles/">Gargoyles</a></li>
				<li class="has-image scared-to-death-1980" onclick="location.href='/2023/10/21/scared-to-death-1980/';"><a href="/2023/10/21/scared-to-death-1980/">Scared to Death (1980)</a></li>
				<li class="has-image indian-paint" onclick="location.href='/2021/07/11/indian-paint/';"><a href="/2021/07/11/indian-paint/">Indian Paint</a></li>
				<li class="has-image horror-rises-tomb" onclick="location.href='/2020/10/07/horror-rises-from-the-tomb/';"><a href="/2020/10/07/horror-rises-from-the-tomb/">Horror Rises from the Tomb</a></li>
				<li class="has-image eaten-alive-1980" onclick="location.href='/2023/10/22/eaten-alive-1980/';"><a href="/2023/10/22/eaten-alive-1980/">Eaten Alive! (1980)</a></li>
				<li class="has-image silencer-1992" onclick="location.href='/2022/11/06/silencer-1992/';"><a href="/2022/11/06/silencer-1992/">The Silencer (1992)</a></li>
				<li class="has-image abraxas" onclick="location.href='/2023/03/05/abraxas/';"><a href="/2023/03/05/abraxas/">Abraxas, Guardian of the Universe</a></li>
				<li class="has-image night-of-the-beast" onclick="location.href='/2023/10/01/night-of-the-beast/';"><a href="/2023/10/01/night-of-the-beast/">Night of the Beast</a></li>
				<li class="has-image top-line" onclick="location.href='/2025/04/27/top-line/';"><a href="/2025/04/27/top-line/">Top Line</a></li>
				<li class="has-image blackout" onclick="location.href='/2021/05/23/blackout/';"><a href="/2021/05/23/blackout/">The Blackout</a></li>
				<li class="has-image pharaohs-war" onclick="location.href='/2025/06/08/pharaohs-war/';"><a href="/2025/06/08/pharaohs-war/">Pharaoh’s War</a></li>
				<li class="has-image chernobyl-diaries" onclick="location.href='/2012/10/30/chernobyl-diaries/';"><a href="/2012/10/30/chernobyl-diaries/">Chernobyl Diaries</a></li>
				<li class="has-image transparent-man" onclick="location.href='/2020/03/15/amazing-transparent-man/';"><a href="/2020/03/15/amazing-transparent-man/">The Amazing Transparent Man</a></li>
				<li class="has-image flying-saucer" onclick="location.href='/2022/03/06/flying-saucer/';"><a href="/2022/03/06/flying-saucer/">The Flying Saucer</a></li>
				<li class="has-image neon-city" onclick="location.href='/2024/05/26/neon-city/';"><a href="/2024/05/26/neon-city/">Neon City</a></li>
				<li class="has-image detention-2003" onclick="location.href='/2023/08/06/detention-2003/';"><a href="/2023/08/06/detention-2003/">Detention (2003)</a></li>
				<li class="has-image jason-takes-manhattan" onclick="location.href='/2023/10/13/friday-the-13th-part-viii-jason-takes-manhattan/';"><a href="/2023/10/13/friday-the-13th-part-viii-jason-takes-manhattan/">Friday the 13th Part VIII: Jason Takes Manhattan</a></li>
				<li class="has-image devil-below" onclick="location.href='/2021/10/13/devil-below/';"><a href="/2021/10/13/devil-below/">The Devil Below</a></li>
				<li class="has-image children-corn-5" onclick="location.href='/2021/10/13/children-corn-5/';"><a href="/2021/10/13/children-corn-5/">Children of the Corn V: Fields of Terror</a></li>
				<li class="has-image pyramid" onclick="location.href='/2019/10/30/the-pyramid/';"><a href="/2019/10/30/the-pyramid/">The Pyramid</a></li>
				<li class="has-image legion-iron" onclick="location.href='/2023/03/19/legion-of-iron/';"><a href="/2023/03/19/legion-of-iron/">Legion of Iron</a></li>
				<li class="has-image on-edge" onclick="location.href='/2022/03/13/on-the-edge/';"><a href="/2022/03/13/on-the-edge/">On the Edge (2002)</a></li>
				<li class="has-image road-house-2024" onclick="location.href='/2024/03/31/road-house-2024/';"><a href="/2024/03/31/road-house-2024/">Road House (2024)</a></li>
				<li class="has-image project-12" onclick="location.href='/2019/05/12/bunker-project-12/';"><a href="/2019/05/12/bunker-project-12/">Bunker: Project 12</a></li>
				<li class="has-image fog-2005" onclick="location.href='/2014/10/14/fog-2005/';"><a href="/2014/10/14/fog-2005/">The Fog (2005)</a></li>
				<li class="has-image no-escape" onclick="location.href='/2016/11/27/no-escape/';"><a href="/2016/11/27/no-escape/">No Escape</a></li>
				<li class="has-image creature" onclick="location.href='/2015/10/21/creature/';"><a href="/2015/10/21/creature/">Creature</a></li>
				<li class="has-image transporter" onclick="location.href='/2009/04/17/transporter/';"><a href="/2009/04/17/transporter/">The Transporter</a></li>
				<li class="has-image defender-2004" onclick="location.href='/2023/12/24/defender-2004/';"><a href="/2023/12/24/defender-2004/">The Defender (2004)</a></li>
				<li class="has-image malone" onclick="location.href='/2021/02/21/malone/';"><a href="/2021/02/21/malone/">Malone</a></li>
				<li class="has-image click-calendar" onclick="location.href='/2024/10/16/click-the-calendar-girl-killer/';"><a href="/2024/10/16/click-the-calendar-girl-killer/">Click: The Calendar Girl Killer</a></li>
				<li class="has-image alien-warfare" onclick="location.href='/2019/04/14/alien-warfare/';"><a href="/2019/04/14/alien-warfare/">Alien Warfare</a></li>
				<li class="has-image brain-twisters" onclick="location.href='/2020/10/25/brain-twisters/';"><a href="/2020/10/25/brain-twisters/">Brain Twisters</a></li>
				<li class="has-image starship-3" onclick="location.href='/2008/12/16/starship-troopers-3/';"><a href="/2008/12/16/starship-troopers-3/">Starship Troopers 3: Marauder</a></li>
				<li class="has-image black-water" onclick="location.href='/2019/02/10/black-water/';"><a href="/2019/02/10/black-water/">Black Water</a></li>
				<li class="has-image geostorm" onclick="location.href='/2018/02/04/geostorm/';"><a href="/2018/02/04/geostorm/">Geostorm</a></li>
				<li class="has-image agent-red" onclick="location.href='/2023/05/28/agent-red/';"><a href="/2023/05/28/agent-red/">Agent Red</a></li>
				<li class="has-image hard-night-falling" onclick="location.href='/2020/09/13/hard-night-falling/';"><a href="/2020/09/13/hard-night-falling/">Hard Night Falling</a></li>
				<li class="has-image last-sentinel-2007" onclick="location.href='/2022/12/18/last-sentinel-2007/';"><a href="/2022/12/18/last-sentinel-2007/">The Last Sentinel (2007)</a></li>
				<li class="has-image the-stuff" onclick="location.href='/2013/10/24/stuff/';"><a href="/2013/10/24/stuff/">The Stuff</a></li>
				<li class="has-image ticks" onclick="location.href='/2019/10/03/ticks/';"><a href="/2019/10/03/ticks/">Ticks</a></li>
				<li class="has-image trancers-ii" onclick="location.href='/2011/03/26/trancers-ii/';"><a href="/2011/03/26/trancers-ii/">Trancers II</a></li>
				<li class="has-image slugs" onclick="location.href='/2019/10/25/slugs/';"><a href="/2019/10/25/slugs/">Slugs</a></li>
				<li class="has-image patriot-1986" onclick="location.href='/2022/08/14/patriot-1986/';"><a href="/2022/08/14/patriot-1986/">The Patriot (1986)</a></li>
				<li class="has-image killer-image" onclick="location.href='/2024/02/11/killer-image/';"><a href="/2024/02/11/killer-image/">Killer Image</a></li>
				<li class="has-image bad-ass" onclick="location.href='/2017/05/28/bad-ass/';"><a href="/2017/05/28/bad-ass/">Bad Ass</a></li>
				<li class="has-image zombeavers" onclick="location.href='/2015/10/10/zombeavers/';"><a href="/2015/10/10/zombeavers/">Zombeavers</a></li>
				<li class="has-image trip-teacher" onclick="location.href='/2020/04/26/trip-with-the-teacher/';"><a href="/2020/04/26/trip-with-the-teacher/">Trip with the Teacher</a></li>
				<li class="has-image massacre-in-dinosaur-valley" onclick="location.href='/2023/10/12/massacre-in-dinosaur-valley/';"><a href="/2023/10/12/massacre-in-dinosaur-valley/">Massacre in Dinosaur Valley</a></li>
				<li class="has-image jack-frost" onclick="location.href='/2019/10/15/jack-frost-1997/';"><a href="/2019/10/15/jack-frost-1997/">Jack Frost (1997)</a></li>
				<li class="has-image children-corn-4" onclick="location.href='/2021/10/12/children-corn-4/';"><a href="/2021/10/12/children-corn-4/">Children of the Corn IV: The Gathering</a></li>
				<li class="has-image riddick" onclick="location.href='/2013/11/04/riddick/';"><a href="/2013/11/04/riddick/">Riddick</a></li>
				<li class="has-image jason-hell" onclick="location.href='/2019/10/01/jason-goes-to-hell/';"><a href="/2019/10/01/jason-goes-to-hell/">Jason Goes to Hell: The Final Friday</a></li>
				<li class="has-image toolbox-murders" onclick="location.href='/2015/10/19/toolbox-murders/';"><a href="/2015/10/19/toolbox-murders/">The Toolbox Murders</a></li>
				<li class="has-image escape-plan" onclick="location.href='/2014/02/10/escape-plan/';"><a href="/2014/02/10/escape-plan/">Escape Plan</a></li>
				<li class="has-image new-gladiators" onclick="location.href='/2017/06/18/new-gladiators/';"><a href="/2017/06/18/new-gladiators/">The New Gladiators</a></li>
				<li class="has-image children-corn" onclick="location.href='/2021/10/10/children-corn-1984/';"><a href="/2021/10/10/children-corn-1984/">Children of the Corn (1984)</a></li>
				<li class="has-image steel-lace" onclick="location.href='/2018/10/17/steel-and-lace/';"><a href="/2018/10/17/steel-and-lace/">Steel and Lace</a></li>
				<li class="has-image blood-feast" onclick="location.href='/2018/10/26/blood-feast/';"><a href="/2018/10/26/blood-feast/">Blood Feast</a></li>
				<li class="has-image zombie-island-massacre" onclick="location.href='/2023/10/14/zombie-island-massacre/';"><a href="/2023/10/14/zombie-island-massacre/">Zombie Island Massacre</a></li>
				<li class="has-image deadwater" onclick="location.href='/2019/10/14/black-ops/';"><a href="/2019/10/14/black-ops/">Black Ops</a></li>
				<li class="has-image blood-beast" onclick="location.href='/2019/10/21/night-of-the-blood-beast/';"><a href="/2019/10/21/night-of-the-blood-beast/">Night of the Blood Beast</a></li>
				<li class="has-image halloween-2007" onclick="location.href='/2010/06/29/halloween-2007/';"><a href="/2010/06/29/halloween-2007/">Halloween (2007)</a></li>
				<li class="has-image friday-13th-7" onclick="location.href='/2014/10/04/friday-13th-7/';"><a href="/2014/10/04/friday-13th-7/">Friday the 13th Part VII: The New Blood</a></li>
				<li class="has-image sleepaway-camp" onclick="location.href='/2014/10/29/sleepaway-camp/';"><a href="/2014/10/29/sleepaway-camp/">Sleepaway Camp</a></li>
				<li class="has-image night-killer" onclick="location.href='/2023/10/20/night-killer/';"><a href="/2023/10/20/night-killer/">Night Killer</a></li>
				<li class="has-image pound-flesh" onclick="location.href='/2024/04/14/pound-of-flesh/';"><a href="/2024/04/14/pound-of-flesh/">Pound of Flesh</a></li>
				<li class="has-image psycho-pike" onclick="location.href='/2022/10/13/psycho-pike/';"><a href="/2022/10/13/psycho-pike/">Psycho Pike</a></li>
				<li class="has-image ozone" onclick="location.href='/2022/10/29/ozone/';"><a href="/2022/10/29/ozone/">Ozone</a></li>
				<li class="has-image deadly-manor" onclick="location.href='/2023/10/12/deadly-manor/';"><a href="/2023/10/12/deadly-manor/">Deadly Manor</a></li>
				<li class="has-image french-quarter" onclick="location.href='/2023/08/13/french-quarter/';"><a href="/2023/08/13/french-quarter/">French Quarter</a></li>
				<li class="has-image double-exposure" onclick="location.href='/2020/02/09/double-exposure/';"><a href="/2020/02/09/double-exposure/">Double Exposure</a></li>
				<li class="has-image naked-angels" onclick="location.href='/2021/04/04/naked-angels/';"><a href="/2021/04/04/naked-angels/">Naked Angels</a></li>
				<li class="has-image bad-black-beautiful" onclick="location.href='/2025/05/11/bad-black-and-beautiful/';"><a href="/2025/05/11/bad-black-and-beautiful/">Bad, Black and Beautiful</a></li>
				<li class="has-image down-dirty" onclick="location.href='/2022/01/09/down-n-dirty/';"><a href="/2022/01/09/down-n-dirty/">Down ’n Dirty</a></li>
				<li class="has-image hellraiser-inferno" onclick="location.href='/2021/10/25/hellraiser-inferno/';"><a href="/2021/10/25/hellraiser-inferno/">Hellraiser V: Inferno</a></li>
				<li class="has-image d-tox" onclick="location.href='/2017/08/24/eye-see-you/';"><a href="/2017/08/24/eye-see-you/">Eye See You</a></li>
				<li class="has-image best-friends" onclick="location.href='/2018/07/22/best-friends/';"><a href="/2018/07/22/best-friends/">Best Friends</a></li>
				<li class="has-image halloween-4" onclick="location.href='/2012/10/31/halloween-4/';"><a href="/2012/10/31/halloween-4/">Halloween 4: The Return of Michael Myers</a></li>
				<li class="has-image over-top" onclick="location.href='/2017/08/11/over-the-top/';"><a href="/2017/08/11/over-the-top/">Over the Top</a></li>
				<li class="has-image village-damned" onclick="location.href='/2010/10/27/village-damned-1995/';"><a href="/2010/10/27/village-damned-1995/">Village of the Damned (1995)</a></li>
				<li class="has-image derelict" onclick="location.href='/2019/10/18/derelict/';"><a href="/2019/10/18/derelict/">Derelict</a></li>
				<li class="has-image las-vegas-lady" onclick="location.href='/2020/11/08/las-vegas-lady/';"><a href="/2020/11/08/las-vegas-lady/">Las Vegas Lady</a></li>
				<li class="has-image leprechaun" onclick="location.href='/2021/10/18/leprechaun/';"><a href="/2021/10/18/leprechaun/">Leprechaun</a></li>
				<li class="has-image la-crackdown" onclick="location.href='/2018/06/25/la-crackdown/';"><a href="/2018/06/25/la-crackdown/">LA Crackdown</a></li>
				<li class="has-image absurd" onclick="location.href='/2023/10/10/absurd/';"><a href="/2023/10/10/absurd/">Absurd</a></li>
				<li class="has-image expendables-3" onclick="location.href='/2017/08/30/the-expendables-3/';"><a href="/2017/08/30/the-expendables-3/">The Expendables 3</a></li>
				<li class="has-image godzilla" onclick="location.href='/2011/07/11/gojira/';"><a href="/2011/07/11/gojira/">Godzilla, King of the Monsters!</a></li>
				<li class="has-image night-monsters" onclick="location.href='/2013/10/18/navy-night-monsters/';"><a href="/2013/10/18/navy-night-monsters/">The Navy vs. the Night Monsters</a></li>
				<li class="has-image alien-hunter" onclick="location.href='/2024/10/13/alien-hunter/';"><a href="/2024/10/13/alien-hunter/">Alien Hunter</a></li>
				<li class="has-image beyond-trek" onclick="location.href='/2021/02/28/beyond-the-trek/';"><a href="/2021/02/28/beyond-the-trek/">Beyond the Trek</a></li>
				<li class="has-image green-hell" onclick="location.href='/2019/10/26/monster-from-green-hell/';"><a href="/2019/10/26/monster-from-green-hell/">Monster from Green Hell</a></li>
				<li class="has-image daylight" onclick="location.href='/2017/08/20/daylight/';"><a href="/2017/08/20/daylight/">Daylight</a></li>
				<li class="has-image cyclops" onclick="location.href='/2018/10/11/cyclops/';"><a href="/2018/10/11/cyclops/">The Cyclops</a></li>
				<li class="has-image money-plane" onclick="location.href='/2024/01/07/money-plane/';"><a href="/2024/01/07/money-plane/">Money Plane</a></li>
				<li class="has-image chain-gang-women" onclick="location.href='/2020/08/30/chain-gang-women/';"><a href="/2020/08/30/chain-gang-women/">Chain Gang Women</a></li>
				<li class="has-image phantom-space" onclick="location.href='/2019/10/05/phantom-from-space/';"><a href="/2019/10/05/phantom-from-space/">Phantom from Space</a></li>
				<li class="has-image screaming" onclick="location.href='/2022/10/19/screaming/';"><a href="/2022/10/19/screaming/">The Screaming</a></li>
				<li class="has-image night-club" onclick="location.href='/2024/02/25/night-club/';"><a href="/2024/02/25/night-club/">Night Club (1989, USA)</a></li>
				<li class="has-image stanley" onclick="location.href='/2020/03/29/stanley/';"><a href="/2020/03/29/stanley/">Stanley</a></li>
				<li class="has-image she-creature" onclick="location.href='/2019/10/17/she-creature/';"><a href="/2019/10/17/she-creature/">The She-Creature</a></li>
				<li class="has-image bad-ben" onclick="location.href='/2017/10/20/bad-ben/';"><a href="/2017/10/20/bad-ben/">Bad Ben</a></li>
				<li class="has-image concrete-jungle" onclick="location.href='/2024/12/22/concrete-jungle/';"><a href="/2024/12/22/concrete-jungle/">The Concrete Jungle (1982)</a></li>
				<li class="has-image burnout" onclick="location.href='/2020/07/19/burnout/';"><a href="/2020/07/19/burnout/">Burnout</a></li>
				<li class="has-image lethal-nightmare" onclick="location.href='/2022/10/05/hallucinations/';"><a href="/2022/10/05/hallucinations/">Lethal Nightmare</a></li>
				<li class="has-image act-valor" onclick="location.href='/2014/01/08/act-of-valor/';"><a href="/2014/01/08/act-of-valor/">Act of Valor</a></li>
				<li class="has-image killer-shrews" onclick="location.href='/2018/10/19/killer-shrews/';"><a href="/2018/10/19/killer-shrews/">The Killer Shrews</a></li>
				<li class="has-image spit-grave" onclick="location.href='/2012/10/13/spit-grave/';"><a href="/2012/10/13/spit-grave/">I Spit on Your Grave</a></li>
				<li class="has-image killing-season" onclick="location.href='/2014/01/06/killing-season/';"><a href="/2014/01/06/killing-season/">Killing Season</a></li>
				<li class="has-image red-dawn-2012" onclick="location.href='/2013/03/06/red-dawn-2012/';"><a href="/2013/03/06/red-dawn-2012/">Red Dawn (2012)</a></li>
				<li class="has-image missionary-man" onclick="location.href='/2024/03/17/missionary-man/';"><a href="/2024/03/17/missionary-man/">Missionary Man</a></li>
				<li class="has-image brave-platoon" onclick="location.href='/2025/04/20/brave-platoon/';"><a href="/2025/04/20/brave-platoon/">The Brave Platoon</a></li>
				<li class="has-image paradise-alley" onclick="location.href='/2017/08/02/paradise-alley/';"><a href="/2017/08/02/paradise-alley/">Paradise Alley</a></li>
				<li class="has-image texas-blood" onclick="location.href='/2011/10/04/dusk-till-dawn-2/';"><a href="/2011/10/04/dusk-till-dawn-2/">From Dusk Till Dawn 2: Texas Blood Money</a></li>
				<li class="has-image thirsty-dead" onclick="location.href='/2020/03/08/thirsty-dead/';"><a href="/2020/03/08/thirsty-dead/">The Thirsty Dead</a></li>
				<li class="has-image metamorphosis-1990" onclick="location.href='/2023/10/30/metamorphosis/';"><a href="/2023/10/30/metamorphosis/">Metamorphosis (1990)</a></li>
				<li class="has-image deadly-reactor" onclick="location.href='/2024/05/19/deadly-reactor/';"><a href="/2024/05/19/deadly-reactor/">Deadly Reactor</a></li>
				<li class="has-image diamond-dogs" onclick="location.href='/2025/03/30/diamond-dogs/';"><a href="/2025/03/30/diamond-dogs/">Diamond Dogs (2007)</a></li>
				<li class="has-image fortress" onclick="location.href='/2022/04/17/fortress-2021/';"><a href="/2022/04/17/fortress-2021/">Fortress (2021)</a></li>
				<li class="has-image armed-response-2017" onclick="location.href='/2020/04/05/armed-response-2017/';"><a href="/2020/04/05/armed-response-2017/">Armed Response</a></li>
				<li class="has-image larceny-2017" onclick="location.href='/2025/01/12/larceny-2017/';"><a href="/2025/01/12/larceny-2017/">Larceny (2017)</a></li>
				<li class="has-image movie-2307" onclick="location.href='/2020/11/15/2307-winters-dream/';"><a href="/2020/11/15/2307-winters-dream/">2307: Winter’s Dream</a></li>
				<li class="has-image dead-trigger" onclick="location.href='/2019/10/16/dead-trigger/';"><a href="/2019/10/16/dead-trigger/">Dead Trigger</a></li>
				<li class="has-image reptilicus" onclick="location.href='/2018/10/21/reptilicus/';"><a href="/2018/10/21/reptilicus/">Reptilicus</a></li>
				<li class="has-image leprechaun-2" onclick="location.href='/2021/10/18/leprechaun-2/';"><a href="/2021/10/18/leprechaun-2/">Leprechaun 2</a></li>
				<li class="has-image slaughterhouse" onclick="location.href='/2022/10/28/slaughterhouse/';"><a href="/2022/10/28/slaughterhouse/">Slaughterhouse</a></li>
				<li class="has-image venomous" onclick="location.href='/2020/02/16/venomous/';"><a href="/2020/02/16/venomous/">Venomous</a></li>
				<li class="has-image lost-continent" onclick="location.href='/2019/10/02/lost-continent/';"><a href="/2019/10/02/lost-continent/">Lost Continent (1951)</a></li>
				<li class="has-image army-dead" onclick="location.href='/2021/10/11/army-of-the-dead/';"><a href="/2021/10/11/army-of-the-dead/">Army of the Dead</a></li>
				<li class="has-image hellraiser-hellseeker" onclick="location.href='/2021/10/26/hellraiser-hellseeker/';"><a href="/2021/10/26/hellraiser-hellseeker/">Hellraiser VI: Hellseeker</a></li>
				<li class="has-image road-wars" onclick="location.href='/2021/03/14/road-wars/';"><a href="/2021/03/14/road-wars/">Road Wars</a></li>
				<li class="has-image alone-dark" onclick="location.href='/2012/10/16/alone-dark/';"><a href="/2012/10/16/alone-dark/">Alone in the Dark (1982)</a></li>
				<li class="has-image battleship" onclick="location.href='/2012/09/02/battleship/';"><a href="/2012/09/02/battleship/">Battleship</a></li>
				<li class="has-image colonials" onclick="location.href='/2024/06/16/colonials/';"><a href="/2024/06/16/colonials/">Colonials</a></li>
				<li class="has-image scared-death" onclick="location.href='/2021/10/12/scared-to-death-1947/';"><a href="/2021/10/12/scared-to-death-1947/">Scared to Death (1947)</a></li>
				<li class="has-image leprechaun-3" onclick="location.href='/2021/10/19/leprechaun-3/';"><a href="/2021/10/19/leprechaun-3/">Leprechaun 3</a></li>
				<li class="has-image death-row-diner" onclick="location.href='/2024/10/10/death-row-diner/';"><a href="/2024/10/10/death-row-diner/">Death Row Diner</a></li>
				<li class="has-image haunting-fraternity" onclick="location.href='/2019/10/08/haunting-on-fraternity-row/';"><a href="/2019/10/08/haunting-on-fraternity-row/">Haunting on Fraternity Row</a></li>
				<li class="has-image hellraiser-deader" onclick="location.href='/2021/10/27/hellraiser-deader/';"><a href="/2021/10/27/hellraiser-deader/">Hellraiser VII: Deader</a></li>
				<li class="has-image summer-city" onclick="location.href='/2018/01/07/summer-city/';"><a href="/2018/01/07/summer-city/">Summer City</a></li>
				<li class="has-image video-violence" onclick="location.href='/2022/10/23/video-violence/';"><a href="/2022/10/23/video-violence/">Video Violence</a></li>
				<li class="has-image alcatraz" onclick="location.href='/2022/01/23/alcatraz/';"><a href="/2022/01/23/alcatraz/">Alcatraz (2018)</a></li>
				<li class="has-image halloween-5" onclick="location.href='/2013/10/31/halloween-5/';"><a href="/2013/10/31/halloween-5/">Halloween 5</a></li>
				<li class="has-image guy-harlem" onclick="location.href='/2023/12/31/guy-from-harlem/';"><a href="/2023/12/31/guy-from-harlem/">The Guy from Harlem</a></li>
				<li class="has-image children-dead" onclick="location.href='/2016/10/09/children-dead-things/';"><a href="/2016/10/09/children-dead-things/">Children Shouldn’t Play with Dead Things</a></li>
				<li class="has-image killers-space" onclick="location.href='/2019/10/08/killers-from-space/';"><a href="/2019/10/08/killers-from-space/">Killers from Space</a></li>
				<li class="has-image plan-9" onclick="location.href='/2019/10/29/plan-9-from-outer-space/';"><a href="/2019/10/29/plan-9-from-outer-space/">Plan 9 from Outer Space</a></li>
				<li class="has-image slithis" onclick="location.href='/2020/10/29/spawn-of-the-slithis/';"><a href="/2020/10/29/spawn-of-the-slithis/">Spawn of the Slithis</a></li>
				<li class="has-image theodore-rex" onclick="location.href='/2008/10/27/theodore-rex/';"><a href="/2008/10/27/theodore-rex/">Theodore Rex</a></li>
				<li class="has-image pompeii" onclick="location.href='/2014/06/10/pompeii/';"><a href="/2014/06/10/pompeii/">Pompeii</a></li>
				<li class="has-image king-dinosaur" onclick="location.href='/2018/10/06/king-dinosaur/';"><a href="/2018/10/06/king-dinosaur/">King Dinosaur</a></li>
				<li class="has-image shanghai-fortress" onclick="location.href='/2020/03/01/shanghai-fortress/';"><a href="/2020/03/01/shanghai-fortress/">Shanghai Fortress</a></li>
				<li class="has-image end-world-1977" onclick="location.href='/2021/07/18/end-of-the-world-1977/';"><a href="/2021/07/18/end-of-the-world-1977/">End of the World (1977)</a></li>
				<li class="has-image gingerdead" onclick="location.href='/2024/10/05/gingerdead-man/';"><a href="/2024/10/05/gingerdead-man/">The Gingerdead Man</a></li>
				<li class="has-image boa" onclick="location.href='/2022/10/04/boa/';"><a href="/2022/10/04/boa/">Boa</a></li>
				<li class="has-image zombie-cop" onclick="location.href='/2024/10/20/zombie-cop/';"><a href="/2024/10/20/zombie-cop/">Zombie Cop</a></li>
				<li class="has-image rollerball-2002" onclick="location.href='/2016/11/13/rollerball/';"><a href="/2016/11/13/rollerball/">Rollerball (2002)</a></li>
				<li class="has-image attack-unknown" onclick="location.href='/2021/12/19/attack-unknown/';"><a href="/2021/12/19/attack-unknown/">Attack of the Unknown</a></li>
				<li class="has-image project-moonbase" onclick="location.href='/2019/02/17/project-moonbase/';"><a href="/2019/02/17/project-moonbase/">Project Moonbase</a></li>
				<li class="has-image snow-creature" onclick="location.href='/2019/10/10/snow-creature/';"><a href="/2019/10/10/snow-creature/">The Snow Creature</a></li>
				<li class="has-image halloween-curse" onclick="location.href='/2014/10/31/halloween-6/';"><a href="/2014/10/31/halloween-6/">Halloween: The Curse of Michael Myers</a></li>
				<li class="has-image ghosts-war" onclick="location.href='/2020/10/06/ghosts-of-war/';"><a href="/2020/10/06/ghosts-of-war/">Ghosts of War</a></li>
				<li class="has-image demon-queen" onclick="location.href='/2022/10/27/demon-queen/';"><a href="/2022/10/27/demon-queen/">Demon Queen</a></li>
				<li class="has-image amityville-4" onclick="location.href='/2021/10/03/amityville-4/';"><a href="/2021/10/03/amityville-4/">Amityville 4: The Evil Escapes</a></li>
				<li class="has-image exeter" onclick="location.href='/2015/10/22/exeter/';"><a href="/2015/10/22/exeter/">Exeter</a></li>
				<li class="has-image rig" onclick="location.href='/2013/10/07/rig/';"><a href="/2013/10/07/rig/">The Rig</a></li>
				<li class="has-image halloween-2-zombie" onclick="location.href='/2010/06/29/halloween-2007/';"><a href="/2010/06/29/halloween-2007/">Halloween II (2009)</a></li>
				<li class="has-image suckling" onclick="location.href='/2018/10/30/suckling/';"><a href="/2018/10/30/suckling/">The Suckling</a></li>
				<li class="has-image asylum-1972" onclick="location.href='/2011/10/07/asylum-1972/';"><a href="/2011/10/07/asylum-1972/">Asylum (1972)</a></li>
				<li class="has-image hot-rod-girl" onclick="location.href='/2018/04/15/hot-rod-girl/';"><a href="/2018/04/15/hot-rod-girl/">Hot Rod Girl</a></li>
				<li class="has-image giant-spider" onclick="location.href='/2018/10/24/the-giant-spider-invasion/';"><a href="/2018/10/24/the-giant-spider-invasion/">The Giant Spider Invasion</a></li>
				<li class="has-image space-fighter" onclick="location.href='/2023/11/12/space-fighter/';"><a href="/2023/11/12/space-fighter/">The Space-Fighter</a></li>
				<li class="has-image panic" onclick="location.href='/2023/10/11/panic/';"><a href="/2023/10/11/panic/">Panic</a></li>
				<li class="has-image attack-force" onclick="location.href='/2021/07/25/attack-force/';"><a href="/2021/07/25/attack-force/">Attack Force</a></li>
				<li class="has-image job-2003" onclick="location.href='/2021/06/13/the-job-2003/';"><a href="/2021/06/13/the-job-2003/">The Job (2003)</a></li>
				<li class="has-image dungeon-harrow" onclick="location.href='/2020/10/09/dungeon-of-harrow/';"><a href="/2020/10/09/dungeon-of-harrow/">The Dungeon of Harrow</a></li>
				<li class="has-image screaming-skull" onclick="location.href='/2019/10/22/screaming-skull/';"><a href="/2019/10/22/screaming-skull/">The Screaming Skull</a></li>
				<li class="has-image nightmare-inn" onclick="location.href='/2021/10/07/nightmare-inn/';"><a href="/2021/10/07/nightmare-inn/">It Happened at Nightmare Inn</a></li>
				<li class="has-image helga" onclick="location.href='/2022/01/30/helga/';"><a href="/2022/01/30/helga/">Helga, She-Wolf of Stilberg</a></li>
				<li class="has-image rana" onclick="location.href='/2023/10/18/rana/';"><a href="/2023/10/18/rana/">Rana: The Legend of Shadow Lake</a></li>
				<li class="has-image night-ripper" onclick="location.href='/2022/10/21/night-ripper/';"><a href="/2022/10/21/night-ripper/">Night Ripper!</a></li>
				<li class="has-image last-exorcism-2" onclick="location.href='/2013/10/08/last-exorcism-ii/';"><a href="/2013/10/08/last-exorcism-ii/">The Last Exorcism part II</a></li>
				<li class="has-image blood-lake-1987" onclick="location.href='/2022/10/11/blood-lake-1987/';"><a href="/2022/10/11/blood-lake-1987/">Blood Lake (1987)</a></li>
				<li class="has-image triple-diesel" onclick="location.href='/2017/04/16/xxx/';"><a href="/2017/04/16/xxx/">xXx</a></li>
				<li class="has-image violent-shit" onclick="location.href='/2022/10/09/violent-shit/';"><a href="/2022/10/09/violent-shit/">Violent Shit</a></li>
				<li class="has-image sci-fighter" onclick="location.href='/2021/02/14/sci-fighter-aka-x-treme-fighter/';"><a href="/2021/02/14/sci-fighter-aka-x-treme-fighter/">Sci-Fighter</a></li>
				<li class="has-image mom-shoot" onclick="location.href='/2017/08/16/stop-or-my-mom-will-shoot/';"><a href="/2017/08/16/stop-or-my-mom-will-shoot/">Stop! Or My Mom Will Shoot</a></li>				
				<li class="has-image year-2889" onclick="location.href='/2021/12/05/day-world-ended/';"><a href="/2021/12/05/day-world-ended/">In the Year 2889</a></li>
				<li class="has-image driven" onclick="location.href='/2017/08/23/driven/';"><a href="/2017/08/23/driven/">Driven</a></li>
				<li class="has-image bigfoot-vs-zombies" onclick="location.href='/2024/10/07/bigfoot-vs-zombies/';"><a href="/2024/10/07/bigfoot-vs-zombies/">Bigfoot Vs. Zombies</a></li>
				<li class="has-image petrified-world" onclick="location.href='/2021/07/04/incredible-petrified-world/';"><a href="/2021/07/04/incredible-petrified-world/">The Incredible Petrified World</a></li>
				<li class="has-image freddys-dead" onclick="location.href='/2021/10/08/freddys-dead/';"><a href="/2021/10/08/freddys-dead/">Freddy’s Dead: The Final Nightmare</a></li>
				<li class="has-image yucca-flats" onclick="location.href='/2023/09/03/yucca-flats/';"><a href="/2023/09/03/yucca-flats/">The Beast of Yucca Flats</a></li>
				<li class="has-image human-centipede" onclick="location.href='/2011/10/01/human-centipede/';"><a href="/2011/10/01/human-centipede/">The Human Centipede</a></li>
				<li class="has-image hitlers-brain" onclick="location.href='/2020/02/23/hitlers-brain/';"><a href="/2020/02/23/hitlers-brain/">They Saved Hitler’s Brain</a></li>
				<li class="has-image phantom-leagues" onclick="location.href='/2019/10/12/phantom-from-10000-leagues/';"><a href="/2019/10/12/phantom-from-10000-leagues/">The Phantom from 10,000 Leagues</a></li>
				<li class="has-image video-demons" onclick="location.href='/2023/10/06/video-demons/';"><a href="/2023/10/06/video-demons/">Video Demons Do Psychotown</a></li>
				<li class="has-image post-impact" onclick="location.href='/2021/11/28/post-impact/';"><a href="/2021/11/28/post-impact/">Post Impact</a></li>
				<li class="has-image invasion-inner-earth" onclick="location.href='/2020/10/01/invasion-from-inner-earth/';"><a href="/2020/10/01/invasion-from-inner-earth/">Invasion from Inner Earth</a></li>
				<li class="has-image backwoods-1988" onclick="location.href='/2024/10/12/backwoods-1988/';"><a href="/2024/10/12/backwoods-1988/">Backwoods (1988)</a></li>
				<li class="has-image mazes-monsters" onclick="location.href='/2017/03/26/mazes-and-monsters/';"><a href="/2017/03/26/mazes-and-monsters/">Mazes and Monsters</a></li>
				<li class="has-image alien-sniperess" onclick="location.href='/2025/01/26/alien-sniperess/';"><a href="/2025/01/26/alien-sniperess/">Alien Sniperess</a></li>
				<li class="has-image zone-drifter" onclick="location.href='/2025/05/18/zone-drifter/';"><a href="/2025/05/18/zone-drifter/">Zone Drifter</a></li>
				<li class="has-image amityville-curse" onclick="location.href='/2021/10/04/amityville-curse/';"><a href="/2021/10/04/amityville-curse/">The Amityville Curse</a></li>
				<li class="has-image sniper-corpse" onclick="location.href='/2021/10/25/sniper-corpse/';"><a href="/2021/10/25/sniper-corpse/">Sniper Corpse</a></li>
				<li class="has-image sink-hole" onclick="location.href='/2024/05/12/sink-hole/';"><a href="/2024/05/12/sink-hole/">Sink Hole</a></li>
				<li class="has-image deadman-apocalypse" onclick="location.href='/2023/08/27/deadman-apocalypse/';"><a href="/2023/08/27/deadman-apocalypse/">Deadman Apocalypse</a></li>
				<li class="has-image triassic-hunt" onclick="location.href='/2023/07/23/triassic-hunt/';"><a href="/2023/07/23/triassic-hunt/">Triassic Hunt</a></li>
				<li class="has-image deep-blood" onclick="location.href='/2023/10/26/deep-blood/';"><a href="/2023/10/26/deep-blood/">Deep Blood</a></li>
				<li class="has-image vampires-stereotypes" onclick="location.href='/2022/10/07/vampires-stereotypes/';"><a href="/2022/10/07/vampires-stereotypes/">Vampires and Other Stereotypes</a></li>
				<li class="has-image night-crawlers-1996" onclick="location.href='/2022/10/25/night-crawlers-1996/';"><a href="/2022/10/25/night-crawlers-1996/">Night Crawlers (1996)</a></li>
				<li class="has-image hellspawn" onclick="location.href='/2023/10/04/hellspawn/';"><a href="/2023/10/04/hellspawn/">Hellspawn</a></li>
				<li class="has-image alien-rising" onclick="location.href='/2020/05/24/alien-rising/';"><a href="/2020/05/24/alien-rising/">Alien Rising</a></li>
				<li class="has-image territory-8" onclick="location.href='/2023/07/02/territory-8/';"><a href="/2023/07/02/territory-8/">Territory 8</a></li>
				<li class="has-image origin-unknown-2036" onclick="location.href='/2020/12/27/2036-origin-unknown/';"><a href="/2020/12/27/2036-origin-unknown/">2036 Origin Unknown</a></li>
				<li class="has-image razorteeth" onclick="location.href='/2023/10/07/razorteeth/';"><a href="/2023/10/07/razorteeth/">Razorteeth</a></li>
				<li class="has-image alien-swamp-beast" onclick="location.href='/2024/10/26/alien-swamp-beast/';"><a href="/2024/10/26/alien-swamp-beast/">Alien Swamp Beast</a></li>
				<li class="has-image paranormal-investigation" onclick="location.href='/2019/10/10/paranormal-investigation/';"><a href="/2019/10/10/paranormal-investigation/">Paranormal Investigation</a></li>
				<li class="has-image bronx-exec" onclick="location.href='/2017/01/29/the-bronx-executioner-or-frankensteins-movie/';"><a href="/2017/01/29/the-bronx-executioner-or-frankensteins-movie/">The Bronx Executioner</a></li>
				<li class="has-image guru-monk" onclick="location.href='/2020/10/23/guru-the-mad-monk/';"><a href="/2020/10/23/guru-the-mad-monk/">Guru, the Mad Monk</a></li>
				<li class="has-image rizen-possession" onclick="location.href='/2021/10/04/rizen-possession/';"><a href="/2021/10/04/rizen-possession/">The Rizen: Possession</a></li>
				<li class="has-image spice-world" onclick="location.href='/2011/03/26/trancers-ii/';"><a href="/2011/03/26/trancers-ii/">Spice World</a></li>
			  <li class="has-image hellraiser-revelations" onclick="location.href='/2021/10/29/hellraiser-revelations/';"><a href="/2021/10/29/hellraiser-revelations/">Hellraiser: Revelations</a></li>
				<li class="has-image house-dead" onclick="location.href='/2010/10/02/house-dead/';"><a href="/2010/10/02/house-dead/">House of the Dead</a></li>
				<li class="has-image rave-grave" onclick="location.href='/2013/10/14/rave-grave/';"><a href="/2013/10/14/rave-grave/">Return of the Living Dead: Rave to the Grave</a></li>
				<li class="has-image feeders" onclick="location.href='/2023/10/03/feeders/';"><a href="/2023/10/03/feeders/">Feeders</a></li>
				<li class="has-image doggie-b" onclick="location.href='/2014/03/16/doggie-b/';"><a href="/2014/03/16/doggie-b/">Doggie B</a></li>
				<li class="has-image birdemic" onclick="location.href='/2017/10/23/birdemic/';"><a href="/2017/10/23/birdemic/">Birdemic: Shock and Terror</a></li>
			</ol>
		</div>

	</main><!-- .site-main -->
</div><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>