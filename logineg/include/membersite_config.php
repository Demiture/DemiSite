<?PHP
require_once("./include/fg_membersite.php");

$fgmembersite = new FGMembersite();

//Provide your site name here
$fgmembersite->SetWebsiteName('demiture.moe');

//Provide the email address where you want to get notifications
$fgmembersite->SetAdminEmail('demi@demiture.moe');

//Provide your database login details here:
//hostname, user name, password, database name and table name
//note that the script will create the table (for example, fgusers in this case)
//by itself on submitting register.php for the first time
$fgmembersite->InitDB(/*hostname*/'185.38.149.155',
                      /*username*/'demiture_mal',
                      /*password*/'dL@t+;I)PL,N',
                      /*database name*/'demiture_logins',
                      /*table name*/'logins');

//For better security. Get a random string from this link: http://tinyurl.com/randstr
// and put it here
$fgmembersite->SetRandomKey('AXLR3VT4OGOXND5');

?>