<?php
require_once 'twig/lib/Twig/Autoloader.php';
Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader, array(
//  'cache' => 'tmp/chache',
));
$template = $twig->loadTemplate('hopu_template_2012.php');
$params = array(
  'pagetitle' => 'Team Bid Registration',
  'description' => "Instructions for submitting a team bid to Hopu Ka Lewa 14.",
  'keywords' => 'Hawaii, ultimate, frisbee, ultimate frisbee, coed, tournament, team, bid',
  'googleform' => array(
    'active' => TRUE,
    'id' => 'teambidapp',
    'src' => 'https://docs.google.com/spreadsheet/embeddedform?formkey=dHp4N19IRFV0bEFBbHItRkkwN0ZGWHc6MQ',
    'height' => '1594px'
  ),
  'content' => '<hgroup class="grid_12">
                    <h1>
                        Hopu Ka Lewa 14 Team Bid Processes
                    </h1>
                    <p>
                        Want to bring a team to Hopu 14?  Please fill out the bid application <a href="bid_hopu.php#teambidapp">below</a> and follow it with any supplementary materials you wish.
                    </p>
                </hgroup>
                <section id="bidpriorities" class="grid_7">
                    <h2>
                        Bid Priority Considerations
                    </h2>
                    <p>
                        Every year, Hopu Ka Lewa&#039s popularity grows, and we have gotten to the point where we regretfully cannot accept all of the bid applications we receive.  In accordance with the mission of Hopu Ka Lewa, the committee will decide on team bid applications with the following priority considerations in mind.  These are not requirements to submit a successful bid application, but will only help your chances for invitation.
                    </p>
                    <ol>
                        <li>Local Hawaii teams.</li>
                        <li>Teams whose history of exuding Spirit of the Game, sportsmanship, and creativity far exceeds others at Hopu Ka Lewa.</li>
                        <li>Bids that include a 3-5 minute video explaining who your team is, why you deserve to be invited, and what you will contribute to the Hopu Ka Lewa theme.  Other creative media and forms of expression are very welcome and appreciated.</li>
                        <li>Teams that anticipate that they will contribute something to Hopu Ka Lewa that has never been seen before and will change the tournament forever.</li>
                        <li>Teams with the highest number of players who are 100% committed to attending.</li>
                        <li>Bids submitted prior to the deadline.</li>
                        <li>Teams whose registration fees are paid prior to the deadline</li>
                    </ol>
                </section>
                <section id="importantdates" class="grid_5">
                    <h2>
                        Important Team Bid Dates
                    </h2>
                    <p>
                        Keep these dates in mind when planning to bring a team to Hopu!
                    </p>
                    <dl>
                        <dt>Aug. 9, 2012</dt><dd>Postmark date for all team bid checks: $360.</dd>
                        <dt>Aug. 17, 2012</dt><dd>Last day to submit a team bid and pay the deposit online.</dd>
                        <dt>Aug. 24, 2012</dt><dd>Invite and Waitlisted notifications will be emailed to captains.</dd>
                        <dt>Aug. 31, 2012</dt><dd>Last day for teams to send email confirmation of bid acceptance.</dd>
                        <dt>Sep. 28, 2012</dt><dd>Last day to request partial refund of team deposit.</dd>
                    </dl>
                </section>'
);
$template->display($params);
?>