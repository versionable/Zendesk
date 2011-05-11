##############################
# Organizations              #
##############################
<?php

require __DIR__ .'/../src/Versionable/Zendesk/Organization/CollectionInterface.php';
require __DIR__ .'/../src/Versionable/Zendesk/Organization/Collection.php';

require __DIR__ .'/../src/Versionable/Zendesk/Organization/OrganizationInterface.php';
require __DIR__ .'/../src/Versionable/Zendesk/Organization/Organization.php';

use Versionable\Zendesk\Organization\Organization;
use Versionable\Zendesk\Organization\Collection as OrganizationCollection;

$c = new OrganizationCollection;

$o = new Organization('Ajax Mega Corp');

$c->add($o);

var_dump($c);

?>

##############################
# Tags                       #
##############################
<?php

require __DIR__ .'/../src/Versionable/Zendesk/Tag/CollectionInterface.php';
require __DIR__ .'/../src/Versionable/Zendesk/Tag/Collection.php';

require __DIR__ .'/../src/Versionable/Zendesk/Tag/TagInterface.php';
require __DIR__ .'/../src/Versionable/Zendesk/Tag/Tag.php';

use Versionable\Zendesk\Tag\Tag;
use Versionable\Zendesk\Tag\Collection as TagCollection;

$c = new TagCollection;

$t = new Tag('printer');
$t->setId(63);
$t->setcount(10);

$c->add($t);

$t = new Tag('XP');
$t->setId(62);
$t->setCount(8);

$c->add($t);

var_dump($c);

?>

##############################
# Forums                     #
##############################
<?php

require __DIR__ .'/../src/Versionable/Zendesk/Forum/CollectionInterface.php';
require __DIR__ .'/../src/Versionable/Zendesk/Forum/Collection.php';

require __DIR__ .'/../src/Versionable/Zendesk/Forum/ForumInterface.php';
require __DIR__ .'/../src/Versionable/Zendesk/Forum/Forum.php';

require __DIR__ .'/../src/Versionable/Zendesk/Forum/Entry/CollectionInterface.php';
require __DIR__ .'/../src/Versionable/Zendesk/Forum/Entry/Collection.php';

require __DIR__ .'/../src/Versionable/Zendesk/Forum/Entry/EntryInterface.php';
require __DIR__ .'/../src/Versionable/Zendesk/Forum/Entry/Entry.php';

require __DIR__ .'/../src/Versionable/Zendesk/Forum/Entry/Post/CollectionInterface.php';
require __DIR__ .'/../src/Versionable/Zendesk/Forum/Entry/Post/Collection.php';

require __DIR__ .'/../src/Versionable/Zendesk/Forum/Entry/Post/PostInterface.php';
require __DIR__ .'/../src/Versionable/Zendesk/Forum/Entry/Post/Post.php';

use Versionable\Zendesk\Forum\Forum;
use Versionable\Zendesk\Forum\Collection as ForumCollection;

use Versionable\Zendesk\Forum\Entry\Entry;
use Versionable\Zendesk\Forum\Entry\Collection as EntryCollection;

use Versionable\Zendesk\Forum\Entry\Post\Post;
use Versionable\Zendesk\Forum\Entry\Post\Collection as PostCollection;

$c = new ForumCollection;
$ec = new EntryCollection;
$pc = new PostCollection;

$p = new Post('This was an awesome article, thanks so much');
$p->setId(594718);
$p->setAccountId(1);
$p->setCreatedAt('2011-02-03T11:41:12-08:00');
$p->setEntryId(12);
$p->setForumId(6);
$p->setIsInformative(false);
$p->setUpdatedAt('2011-02-03T11:41:12-08:00');
$p->setUserId(2640);

$pc->add($p);

$e = new Entry('This is the title of the topic');
$e->setId(12);
$e->setForumId(6);
$e->setBody('This is the body of the topic');
$e->setCreatedAt('2007-01-03T00:10:08Z');
$e->setUpdatedAt('2007-06-04T10:07:02Z');
$e->setHits(3);
$e->setIsLocked(false);
$e->setIsPinned(true);
$e->setIsPublic(false);
$e->setSubmitterId(3);
$e->setPosts($pc);

$ec->add($e);

$f = new Forum('Announcements');
$f->setId(6);
$f->setDescription('New features, fixes, and other important announcements.');
$f->setIsLocked(true);
$f->setIsPublic(true);
$f->setEntries($ec);

$c->add($f);

var_dump($c);

?>